<?php

namespace App\Http\Controllers\Api;

use App\Banner_sr;
use App\Banners;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HelperController;
use App\Info;
use App\Model\client;
use App\Model\Post;
use App\Orderlist;
use App\Product;
use App\Review;
use App\Sku;
use App\User;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Repositories\GuzzleCall;
use Carbon\Carbon;

class OpenApiController extends Controller
{

    //getting all product
    public function getProduct() {
        $data = Product::with('Sku','Reviews')->get();

        return response()->json(['products' => $data]);
    }
    
    public function allProduct() {
        $data = Product::with('Sku', 'Reviews')->get();
        return response()->json(['product' => $data]);
    }
    public function productCategory($id) {
        $product = Product::with('Sku', 'Reviews')->where('id', $id)->first();
        $productCategeory = Category::with('product')->where('id',$product->categories_id)->first();
        return response()->json(['productCategory' => $productCategeory]);
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
        // $type = $request->get('searchterm');
        $searchTerms = $request->get('searchTerm');
        $Result = [];

        $searchResults = (new Search())
            ->registerModel(Product::class, 'name')
            ->perform($searchTerms);
        foreach ($searchResults as $result) {
            $Result[] = $result->searchable;
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

    public function relateDetails($slug) {
        $product = Product::with('Sku','category','Reviews.user')->where('slug', $slug)->first();
        $reviews = Review::with('user')->where('product_id', $product->id)->paginate(10);
        return response()->json(['product' => $product, 'reviews' => $reviews]);
    }
    public function sku_No(){
        $sku_No = Sku::where('isvalid',false)->get();
        return response()->json(['sku'=> $sku_No]);
    }
    public function searchPlacesByAddress( Request $request )
    {
        //Get query text
        $query = $request->get('query');
        //Get raw result from api call
        $raw = $this->googleSearchPlaces($query);
        //process and format result
        $result = $this->processPlacesResult($raw);
        // dd($result);
        //return json response
        return response()->json($result);
    }
    private function googleSearchPlaces($address)
    {
        //fetch places endpoint
        $endpoint = env('GOOGLE_PLACE_ENDPOINT');
        //create full endpoint url with key and query
        $fullEndPoint = $this->createFullEndPoint($endpoint) . $address;
        // var_dump($fullEndPoint);
        //make api call and return json response
        return (new GuzzleCall('GET', $fullEndPoint))->run();
    }
    private function createFullEndPoint($partialEndPoint, $initial = 'input')
    {
        return $partialEndPoint . "key=" . env('GOOGLE_KEY') . "&{$initial}=";
    }
    private function processPlacesResult($result)
    {
        $formatted = [];
        //perform process
        if(isset($result['predictions'])) {
            foreach ($result['predictions'] as $suggestion) {
                $formatted[] = [
                    'id' => isset($suggestion['id']) ? $suggestion['id'] : '',
                    'place_id' => isset($suggestion['place_id']) ? $suggestion['place_id'] : '',
                    'name' => isset($suggestion['description']) ? $suggestion['description'] : '',
                ];
            }
        }
        //return response
        return $formatted;
    }


    public function commentsOnProduct() {

    }
    public function footerContent() {

    }
    public function headerContent() {

    }
}
