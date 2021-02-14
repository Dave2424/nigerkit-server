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
            $product->quantity = request('quantity');
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

    public function updateStatus($product_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Product_Status")){
            $product = Product::findOrFail($product_id);
            $product->update([
                "status"=>$product->status == 1 ? 0: 1,
            ]);

            return redirect()->back()->withStatus(__('Product successfully updated.'));
        }
        return back();
    }

    public function destroy($id){
        $this->__construct();
        if($this->user->hasPermissionTo("Delete_Product")){
            $product = Product::find($id);
            if($product){
                $product->delete();
            }
            return redirect()->back()->withStatus(__('Product details deleted successfully'));
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

    public function storeProductStockUp(Request $request, $product_id){
        $this->__construct();
        $this->validate($request, [
            'invoice_amount' => ['required', 'numeric', 'min:0'],
            'invoice_number' => ['required', 'string', 'max:50', 'unique:stock_inventories'],
            'stock_added' => ['required', 'numeric', 'min:1'],
        ]);

        if($this->user->hasPermissionTo("Stock_Product")){
            $product = Product::findOrFail($product_id);
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
                    'invoice_number'=> $request['invoice_number'],
                    'invoice_amount'=> $request['invoice_amount'],
                    'stock_added'=> $request['stock_added'],
                    'opening_stock'=> ($product->stock + (int)$request['stock_added']),
                    'stock_balance_bf'=> $product->stock,
                    'stock_added_date'=> Carbon::now(),
                ]);

                $product->update([
                    'stock'=> ($product->stock + (int)$request['stock_added']),
                ]);
            }
            return redirect()->route('product.index')->withStatus(__('Product stocked successfully'));
        }
        return back();
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

        return response()->json([
            'success'=>true,
            'products'=>$products
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

        return response()->json([
            'success'=>true,
            'products'=>$products
        ]);
    }
}
