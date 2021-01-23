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

    public function indexs(){
        $category = Category::all();
        $sku = Sku::paginate(10);
        $sku_num = Sku::all();

        return view('pages.product.products',
            ['categories' => $category, 'sku' => $sku, 'Sku' => $sku_num]
        );
    }

    public function allProduct(Request $request){
        if ($request->ajax()) {
            $product = Product::latest()->get();
            return DataTables::of($product)
                ->addColumn('content', function ($data) {
                    if ($data->content) {
                        $button = $data->content;
                    } else {
                        $button = 'No content';
                    }
                    return $button;
                })
                ->addColumn('Sku', function ($data) {
                    $div = $this->sku_no($data->Sku);
                    return $div;
                })
                ->addColumn('files', function ($data) {
                    $button = '<a id="' . $data->id . '" data-item="' . htmlspecialchars($data) . '" type="button" rel="tooltip" 
                                style="margin-right: -10px" title="View picture" class="p-file btn btn-success btn-link btn-sm">
                                <i class="material-icons">attachment</i></a>';
                    return $button;
                })
                ->addColumn('action', function ($data) {
                    $button = '<div class="text-center"><a id="' . $data->id . '" data-item="' . htmlspecialchars($data) . '" data-sku="' . $data->Sku . '" type="button" rel="tooltip" 
                                    title="Edit product" class="edit btn btn-info btn-link btn-sm">
                                    <i class="material-icons">edit</i></a>';
                    $button .= '<a id="' . $data->id . '" type="button" rel="tooltip" title="Remove" class="delete btn btn-danger btn-link btn-sm">
                                    <i class="material-icons">close</i></a></div>';
                    return $button;
                })
                ->rawColumns(['files', 'action'])
                ->make(true);
        }
        return view('pages.product.products');
    }

    public function sku_no($id)
    {
        $num = Sku::where('id', $id)->value('sku_no');;
        return $num;
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
        return $randomString;
    }
    public function GenerateSku()
    {
        $sku = new Sku();
        for ($n = 0; $n < 5; $n++) {
            $sku->sku_no =  $this->generateSkuNo();
            $sku->save();
        }
        return back()->withStatus(__('Sku generated successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    //editing the Sku records
    public function handle_sku(Request $request)
    {
        $sk = $request->get('sku');
        $old_value = $request->get('data-item');
        $action = $request->get('action');
        $response = '';
        if ($action == 'edit') {
            DB::table('skus')
                ->where('sku_no', $old_value)
                ->update(['sku_no' => $sk]);
            $response = 'Sku no edited successfully';
        } else {
            DB::table('skus')->where('sku_no', $sk)->delete();
            $response = 'Sku no deleted successfully';
        }
        return response()->json(['status' => $response]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $id = $request->get('id');
        $Data = [];
        $product_name = $request->get('name');
        $old_sku_value = $request->get('Old_sku');
        $Data['name'] = $product_name;
        $Data['description'] = $request->get('description');
        $Data['quantity'] = $request->get('quantity');
        $Data['brand'] = $request->get('brand');
        $Data['price'] = $request->get('price');
        $Data['Sku'] = $request->get('Sku');
        $Data['content'] = $request->get('content');
        $Data['category_id'] = $request->get('category_id');
        $slug = $this->generateSkuNo(15);
        $Data['slug'] =  Str::slug(trim($product_name), '-') . '-' . $slug;
        $product_image = array();

        if (!empty($_FILES['file'])) {
            $Old_product_file = $product::find($id);
            if (!is_null($Old_product_file->files) && count($Old_product_file->files) > 0) {
                foreach ($Old_product_file->files as $image) {
                    HelperController::removeImage($image);
                }
            }

            $product_file = $this->reArrayFiles($_FILES['file']); //reArranging the image array
            foreach ($product_file as $files) {
                $name = $files['name'];
                $temp_file = $files['tmp_name'];
                $temp_ext = explode('.', $name);
                $ext = end($temp_ext);
                //Process new image
                $imageName = preg_replace('/\s+/', '', $product_name);
                $user_image = '/products/' . uniqid(rand()) . $imageName . '.' . $ext;
                $path = 'storage' . $user_image;
                $product_image[] = $path;

                $imageR = Image::make($temp_file);
                $imageR = $imageR->resize(227,147);
                Storage::disk('public')->put($user_image, (string)$imageR->encode());
            }
            $Data['product_image'] = $product_image[0];
            $Data['files'] = $product_image;
        }
        //updating the product details
        $product::where('id', $id)
            ->update($Data);

        //updating the sku table.
        DB::table('skus')
            ->where('id', $Data['Sku'])
            ->update(['isvalid' => false]);

        //changing the old value to valid
        DB::table('skus')
            ->where('id', $old_sku_value)
            ->update(['isvalid' => true]);
        return response()->json(['status' => 'Product edited successfully']);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->Delete();
        return response()->json(['status' => 'Product details deleted successfully']);
    }
}
