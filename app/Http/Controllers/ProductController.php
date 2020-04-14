<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $category = Category::all();
        return view('pages.product.products',['categories' => $category]);
    }
    public function allProduct(Request $request) {
        if($request->ajax()){
        $product = Product::latest()->get();
        return DataTables::of($product)
            ->addColumn('files', function($data){
                $button = '<a id="'.$data->id.'" data-item="'.htmlspecialchars($data).'" type="button" rel="tooltip" 
                                style="margin-right: -10px" title="View picture" class="p-file btn btn-success btn-link btn-sm">
                                <i class="material-icons">attachment</i></a>';
                return $button;
            })
            ->addColumn('action', function($data) {
                $button = '<div class="text-center"><a id="'.$data->id.'" data-item="'.htmlspecialchars($data).'" type="button" rel="tooltip" 
                                   title="Edit product" class="edit btn btn-info btn-link btn-sm">
                                  <i class="material-icons">edit</i></a>';
                $button .= '<a id="'.$data->id.'" type="button" rel="tooltip" title="Remove" class="delete btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">close</i></a></div>';
                return $button;
            })
            ->rawColumns(['files','action'])
            ->make(true);
        }
        return view('pages.product.products');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        if ($request->validated()) {
            $product = $request->validated();
            $product_name = $request->get('name');
            $product_image = array();
            if (!is_null($product['files']) && count($product['files']) > 0) {
                foreach ($request->file('files') as $file) {
                    //upload image and add link to array
                    $path = '/storage'.HelperController::processImageUpload($file,  $product_name,'products',700,700);
                    $product_image[] = $path;
                }
                $product['files'] = $product_image;
            }
            Product::create($product);
        }
        return back()->withStatus(__('Product detail added successfully.'));
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
        $Data['name'] = $product_name;
        $Data['description'] = $request->get('description');
        $Data['quantity'] = $request->get('quantity');
        $Data['brand'] = $request->get('brand');
        $Data['price'] = $request->get('price');
        $Data['Sku'] = $request->get('Sku');
        $Data['content'] = $request->get('content');
        $Data['category_id'] = $request->get('category_id');
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
                    $temp_ext = explode('.',$name);
                    $ext = end($temp_ext);
                    //Process new image
                    $imageName = preg_replace('/\s+/', '', $product_name);
                    $user_image = '/products/' .uniqid(rand()) . $imageName . '.' . $ext;
                    $path = '/storage' .$user_image;
                    $product_image[] = $path;

                    $imageR = Image::make($temp_file);
                    $imageR = $imageR->resize(700, 700);
                    Storage::disk('public')->put($user_image, (string)$imageR->encode());
                }
            $Data['files'] = $product_image;

        }
        $product::where('id', $id)
            ->update($Data);
        return response()->json(['status'=> 'Product edited successfully']);
    }

    /**
    *Rearrange the files array
     * @param Array
     * @return array
     */
    public function reArrayFiles(&$array) {
        $file_array = array();
        $file_count = count($array['name']);
        $file_keys = array_keys($array);
        for($i = 0; $i < $file_count; $i++) {
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
        return response()->json(['status'=> 'Product details deleted successfully']);
    }
}
