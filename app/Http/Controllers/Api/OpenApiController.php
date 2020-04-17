<?php

namespace App\Http\Controllers\Api;

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
    public function get_similar_product(){

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
            case 'similarCategory':

        }

        return response()->json($Result);
    }
    public function Banners() {

    }
    public function commentsByProduct() {

    }
    public function footerContent() {

    }
    public function headerContent() {

    }
}
