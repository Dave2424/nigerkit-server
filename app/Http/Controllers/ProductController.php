<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Http\Requests\ProductRequest;
use App\Sku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Http\Controllers\DefaultHelperController;

class ProductController extends Controller{
    public $user;
    public function __construct(){
        $this->middleware('auth:admin');
        $this->user = auth('admin')->user();
    }
    
    public function index(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Product") ||
            $this->user->hasPermissionTo("Update_Product") ||
            $this->user->hasPermissionTo("Update_Product_Status") ||
            $this->user->hasPermissionTo("Read_Product") ||
            $this->user->hasPermissionTo("Delete_Product")){

            $products = Product::paginate(10);
            return view('pages.product.index',
                ['products' => $products]
            );
        }
        return back();
    }

    public function create(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Product")){
            $categories = Category::all();
            $sku_num = $this->generateSkuNo(14);
            return view('pages.product.create', ['categories' =>$categories, 'Sku' => $sku_num]);
        }
        return back();
    }
    
    public function store(ProductRequest $request){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Product")){
            if ($request->validated()) {
                $product = $request->validated();
                $product_name = $request->get('name');
                $slug = $product_name." ".request('Sku');
                $product_image = array();
                if (!is_null($product['files']) && count($product['files']) > 0) {
                    foreach ($request->file('files') as $file) {
                        //upload image and add link to array
                        $path = 'storage' . HelperController::processImageUpload($file,  $slug, 'products', 147,227);
                        $product_image[] = $path;
                    }
                    $product['files'] = $product_image;
                }
                $product['slug'] =  DefaultHelperController::makeSlug($slug);
                $product['product_image'] = $product['files'][0]; // taking the first image path as the main image for the pics.
                $saved_product = Product::create($product);
                $saved_product->syncTags($request['tags']);
                $saved_product->syncCategories($request['categories']);
            }
            return redirect()->route('product.index')->withStatus(__('Product successfully added.'));
        }
        return back();
    }

    public function edit($product_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Product")){
            $product = Product::findOrFail($product_id);
            $product->tags = $product->tagsToSting();
            $product->categories = $product->categoriesToSting();
            $categories = Category::all();
            return view('pages.product.edit', ['categories' =>$categories, 'product' => $product]);
        }
        return back();
    }

    public function update(Request $request, $product_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Product")){
            $product = Product::findOrFail($product_id);

            $old_sku_value = $product->Sku;

            $product->name = $request->get('name');
            $product->description = request('description');
            $product->brand = request('brand');
            $product->price = request('price');
            $product->Sku = request('Sku');
            $product->content = request('content');
            $product->category_id = request('category_id');
            $product_image = array();
            if (!is_null($request['files']) && count($request['files']) > 0) {
                if (!is_null($product->product_image)) {
                    HelperController::removeImage($product->product_image);
                }

                foreach ($request->file('files') as $file) {
                    //upload image and add link to array
                    $path = 'storage' . HelperController::processImageUpload($file,  $product->slug, 'products', 147,227);
                    $product_image[] = $path;
                }
                $product['files'] = $product_image;
            }
            $product->product_image = $product['files'][0];
            //updating the product details
            $product->update();
            $product->syncTags($request['tags']);
            $product->syncCategories($request['categories']);

            return redirect()->route('product.index')->withStatus(__('Product edited successfully'));
        }
        return back();
    }

    //generating a Sku records
    function generateSkuNo($length = 7){
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        if(Product::where('Sku', $randomString)->first()){
            $this->generateSkuNo($length);
        }
        return $randomString;
    }

    /**
     *Rearrange the files array
     * @param Array
     * @return array
     */
    public function reArrayFiles(&$array){
        $file_array = array();
        $file_count = count($array['name']);
        $file_keys = array_keys($array);
        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_array[$i][$key] = $array[$key][$i];
            }
        }
        return $file_array;
    }

    public function productStockUp($product_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Stock_Product")){
            $product = Product::findOrFail($product_id);
            return view('pages.product.stock-up', ['product' => $product]);
        }
        return back();
    }

    public function storeProductStockUp(){
        $this->__construct();
        if($this->user->hasPermissionTo("Stock_Product")){
            $data = request()->all();
            $required = ['invoice_number', 'invoice_amount', 'stock_added'];
            foreach($required as $req){
                if(!isset($data[$req])){
                    return response()->json([
                        'success'=>false,
                        'message'=> str_replace('_', ' ', $req) . " field is required"
                    ]);
                }
            }
            $product = Product::findOrFail($data['product_id']);
            if($product){
                $activeInventory = $product->activeProductInventories();
                if($activeInventory){
                    $activeInventory->update([
                        'closing_stock'=>$product->stock,
                        'status'=>0,
                        'closing_date'=>Carbon::now(),
                    ]);
                }
                $product->productInventories()->create([
                    'invoice_number'=> $data['invoice_number'],
                    'invoice_amount'=> $data['invoice_amount'],
                    'stock_added'=> $data['stock_added'],
                    'opening_stock'=> ($product->stock + (int)$data['stock_added']),
                    'stock_balance_bf'=> $product->stock,
                    'stock_added_date'=> Carbon::now(),
                ]);

                $product->update([
                    'stock'=> ($product->stock + (int)$data['stock_added']),
                ]);

                return response()->json([
                    'success'=>true,
                    'message'=>"Product stocked successfully"
                ]);
            }
            return response()->json([
                'success'=>false,
                'message'=>"Product does not exist"
            ]);
        }
        return response()->json([
            'success'=>false,
            'message'=>"Sorry you don't have permission to stock-up product"
        ]);
    }

    public function list(){
        $this->__construct();
        $data = request()->all();
        // dd($data);
        $limit = 10;
        $order = "desc";
        $orderBy = "created_at";
        if(isset($data['limit'])){
            $limit = $data['limit'];
        }
        if(isset($data['order'])){
            $order = $data['order'];
        }
        if(isset($data['orderBy'])){
            $orderBy = $data['orderBy'];
        }

        $query = Product::with(['productInventories']);

        if(isset($data['search'])){
            $query = $query->where('name', 'LIKE', '%' . $data['search'] . '%')
                ->orWhere('Sku', 'LIKE', '%' . $data['search'] . '%')
                ->orWhere($orderBy, 'LIKE', '%' . $data['search'] . '%');
        }
        
        $products = $query->orderBy($orderBy, $order)->paginate($limit);

        foreach($products as $product){
            $product->tags = $product->tagsToSting();
            $product->categories = $product->categoriesToSting();
        }

        $categories = Category::all();
        return response()->json([
            'success'=>true,
            'products'=>$products,
            'categories'=>$categories,
        ]);
    }

    public function trashedList(){
        $this->__construct();
        $data = request()->all();
        // dd($data);
        $limit = 10;
        $order = "desc";
        $orderBy = "created_at";
        if(isset($data['limit'])){
            $limit = $data['limit'];
        }
        if(isset($data['order'])){
            $order = $data['order'];
        }
        if(isset($data['orderBy'])){
            $orderBy = $data['orderBy'];
        }

        $query = Product::with(['productInventories'])->withTrashed();

        if(isset($data['search'])){
            $query = $query->where('name', 'LIKE', '%' . $data['search'] . '%')
                ->orWhere('Sku', 'LIKE', '%' . $data['search'] . '%')
                ->orWhere($orderBy, 'LIKE', '%' . $data['search'] . '%');
        }
        
        $products = $query->where('deleted_at', '!=', null)->orderBy($orderBy, $order)->paginate($limit);

        foreach($products as $product){
            $product->tags = $product->tagsToSting();
            $product->categories = $product->categoriesToSting();
        }
        
        return response()->json([
            'success'=>true,
            'products'=>$products
        ]);
    }

    public function updateStatus(){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Product_Status")){
            $data = request()->all();
            $product = Product::findOrFail($data['product_id']);
            $from = $product->status == 1 ? "active": "inactive";
            $to = $product->status == 1 ? "inactive": "active";
            $product->activities()->create([
                'user_id'=>$this->user->id,
                'title'=>"Product Status Update",
                'detail'=>$this->user->name . " updated the status of an item with SKU: ".$product->Sku." from ".$from." to ".$to,
            ]);
            $product->update([
                "status"=>$product->status == 1 ? 0: 1,
            ]);
            return response()->json([
                'success'=>true,
                'message'=>"Product successfully updated."
            ]);
        }
        return response()->json([
            'success'=>false,
            'message'=>"Sorry you don't have permission to update product status"
        ]);
    }

    public function removeProduct(){
        $this->__construct();
        $data = request()->all();
        if($this->user->hasPermissionTo("Trash_Product")){
            $product = Product::find($data['product_id']);
            if($product){
                $product->delete();

                $product->activities()->create([
                    'user_id'=>$this->user->id,
                    'title'=>"New Product Trashed",
                    'detail'=>$this->user->name . " trashed an item with SKU: ".$product->Sku,
                ]);
            }
            return response()->json([
                'success'=>true,
            ]);
        }
        return response()->json([
            'success'=>false,
            'message'=>"Sorry you don't have permission to trash products"
        ]);
    }

    public function restoreDelete(){
        $this->__construct();
        if($this->user->hasPermissionTo("Restore_Trashed_Product")){
            $data = request()->all();
            $product = Product::withTrashed()->find($data['product_id']);
            if ($product && $product->trashed()) {
                $product->restore();

                $product->activities()->create([
                    'user_id'=>$this->user->id,
                    'title'=>"Product Restored",
                    'detail'=>$this->user->name . " restored an product with SKU: ".$product->Sku." from trash",
                ]);

                return response()->json([
                    'success'=>true,
                ]);
            }
            return response()->json([
                'success'=>false,
                'message'=>"Sorry the product can't be found"
            ]);
        }
        return response()->json([
            'success'=>false,
            'message'=>"Sorry you don't have permission to restore trashed products"
        ]);
    }

    public function forceDelete(){
        $this->__construct();
        if($this->user->hasPermissionTo("Delete_Product")){
            $data = request()->all();
            $product = Product::withTrashed()->find($data['product_id']);
            if ($product && $product->trashed()) {
                $product->forceDelete();
                $product->activities()->create([
                    'user_id'=>$this->user->id,
                    'title'=>"Product Removed",
                    'detail'=>$this->user->name . " removed an product with SKU: ".$product->Sku." from trash",
                ]);

                return response()->json([
                    'success'=>true,
                ]);
            }
            return response()->json([
                'success'=>false,
                'message'=>"Sorry the product can't be found"
            ]);
        }
        return response()->json([
            'success'=>false,
            'message'=>"Sorry you don't have permission to delete products"
        ]);
    }
}
