<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

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
        return view('pages.products',['categories' => $category]);
    }
    public function allProduct(Request $request) {
        if($request->ajax()){
        $product = Product::latest()->get();
        return DataTables::of($product)
            ->addColumn('files', function($data){
                $button = '<button data="'.$data.'" type="button" rel="tooltip" style="margin-right: -10px" title="View picture" class="btn btn-success btn-link btn-sm">
                                <i class="material-icons">attachment</i></button>';
                return $button;
            })
            ->addColumn('action', function($data) {
                $button = '<a id="'.$data->id.'" item="'.$data.'" type="button" rel="tooltip" title="Edit product" class="edit btn btn-info btn-link btn-sm">
                                  <i class="material-icons">edit</i></a>';
                $button .= '<a id="'.$data->id.'" type="button" rel="tooltip" title="Remove" class="delete btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">close</i></a>';
                return $button;
            })
            ->rawColumns(['files','action'])
            ->make(true);
        }
        return view('pages.products');

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
            if (!is_null($product['files']) && count($product['files'])) {
                foreach ($request->file('files') as $file) {
                    //upload image and add link to array
                    $path = '/storage'.HelperController::processImageUpload($file,  $product_name,'products',600,600);
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
        //
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
