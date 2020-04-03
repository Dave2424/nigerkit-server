<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
//        $product = new Product();
        $product = $request->validated();
        Product::create($product);
//        return redirect()->back()->with('success', 'successfully!');
//        if ($request->validated()) {
//            return back()->with('success', 'Validated');
//        } else {
//            return back()->with('success', 'not');
//        }
////        if ($request->hasFile('p_file')) {
            //Get the file with the extension
//            $filenamewithtxt = $request->file('p_file')->getClientOriginalName();
            //get just file name
//            $filename = pathinfo($filenamewithtxt, PATHINFO_FILENAME);
            //get just extension
//            $extension = $request->file('p_file')->getClientOriginalExtension();
            //filename to store
//            $fileNametostore = $filename . '_' . time() . '_' . $extension;
//            $path = $request->file('p_file')->storeAs('public/product_img', $fileNametostore);
//            Product->p_file =$path;
//            Product::create($request->all());
//        }
        return redirect()->back()->with('success', 'Document created');
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
    public function destroy(Product $product)
    {
        //
    }
}
