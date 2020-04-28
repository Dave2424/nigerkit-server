<?php

namespace App\Http\Controllers\Api;

use App\Banner_sr;
use App\Banners;
use App\Category;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Product;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class OpenApiController extends Controller
{

    //getting all product
    public function getProduct() {
        $data = Product::all();
        return response()->json(['products' => $data]);
    }
    //getting blog
    public function getBlog() {
        $data = Post::latest()->all();
        return response()->json(['blog' => $data]);
    }
    //Categories
    public function category() {
        $data = Category::all();
        return response()->json(['category' => $data]);

    }
    public function searchProduct( Request $request )
    {
        $type = $request->get('type');
        $searchTerms = $request->get('key');
        $Result = [];
        switch ($type){
            case 'product':

                $searchResults = (new Search())
                    ->registerModel(Product::class, 'product_name')
                    ->perform($searchTerms);

                foreach ($searchResults as $result) {
                    $Result[] = $result->searchable->id;
                }
                break;
            case'productByCategory':

        }

        return response()->json($Result);
    }
    public function Banners() {
        $banner = Banners::all();
        return response()->json(['banner'=> $banner]);
    }
    public function Banner_sr() {
        $banner = Banner_sr::all()->random();
        return response()->json(['banner_sr'=> $banner]);
    }
    public function commentsOnProduct() {

    }
    public function footerContent() {

    }
    public function headerContent() {

    }
}
