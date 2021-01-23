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
use App\Http\Controllers\DefaultHelperController;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index(){
        $products = Product::paginate(10);

        return view('pages.product.index',
            ['products' => $products]
        );
    }

    public function create(){
        $categories = Category::all();
        $sku_num = $this->generateSkuNo(14);
        return view('pages.product.create', ['categories' =>$categories, 'Sku' => $sku_num]);
    }
    
    public function store(ProductRequest $request){
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
            Product::create($product);
        }
        return redirect()->route('product.index')->withStatus(__('Product successfully added.'));
    }

    public function edit($product_id){
        $product = Product::findOrFail($product_id);
        $categories = Category::all();
        return view('pages.product.edit', ['categories' =>$categories, 'product' => $product]);
    }

    public function update(Request $request, $product_id){
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

        return redirect()->route('product.index')->withStatus(__('Product edited successfully'));
    }

    public function updateStatus($product_id){
        $product = Product::findOrFail($product_id);
        $product->update([
            "status"=>$product->status == 1 ? 0: 1,
        ]);

        return redirect()->back()->withStatus(__('Product successfully updated.'));
    }

    public function destroy($id){
        $product = Product::find($id);
        if($product){
            $product->delete();
        }
        return redirect()->back()->withStatus(__('Product details deleted successfully'));
    }

    //generating a Sku records
    function generateSkuNo($length = 7)
    {
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
    public function reArrayFiles(&$array)
    {
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
}
