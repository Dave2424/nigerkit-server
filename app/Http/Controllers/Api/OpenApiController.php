<?php

namespace App\Http\Controllers\Api;

use App\Banner_sr;
use App\Banners;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HelperController;
use App\Info;
use App\Jobs\sendWelcomeMailJob;
use App\Model\client;
use App\Model\Post;
use App\Orderlist;
use App\Phone;
use App\Product;
use App\Review;
use App\Sku;
use App\User;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Repositories\GuzzleCall;
use App\Setting;
use App\State;
use App\Subscriber;
use Carbon\Carbon;

class OpenApiController extends Controller
{

    //getting all product
    public function getIndexData()
    {
        $products = Product::with('Reviews')->latest()->get();
        if (count($products) > 12) {
            $products = Product::with('Sku', 'Reviews')->latest()->limit(12)->get();
        }
        $top_rated = Product::with('Reviews')->get();
        if (count($top_rated) > 3) {
            $top_rated = $top_rated->random(3);
        }
        $best_sellers = Product::with('Reviews')->where('type', 'best_seller')->get();
        if (count($best_sellers) > 3) {
            $best_sellers = $best_sellers->random(3);
        }
        $special_offers = Product::with('Reviews')->where('type', 'special')->get();
        if (count($special_offers) > 3) {
            $special_offers = $special_offers->random(3);
        }
        $posts = Post::latest()->limit(4)->get();
        $top_banners = Banners::latest()->limit(4)->get();
        $banner_two = Banner_sr::latest()->limit(1)->first();
        $categories = Category::latest()->limit(7)->get();


        $data = [
            'products' => $products,
            'top_rated_products' => $top_rated,
            'best_sellers' => $best_sellers,
            'special_offers' => $special_offers,
            'posts' => $posts,
            'top_banners' => $top_banners,
            'banner_two' => $banner_two,
            'categories' => $categories,
        ];

        return response()->json(['data' => $data]);
    }
    public function getFooterDetails()
    {
        $settings = Setting::all();
        return response()->json(['settings' => $settings]);
    }
    public function getPhone()
    {
        $data = '';
        $phone = Phone::first();
        if ($phone) {
            $data = $phone->phone;
        }

        return response()->json(['data' => $data]);
    }


    public function getProduct()
    {
        $products = Product::with('Reviews')->latest()->paginate(20);
        return response()->json(['products' => $products]);
    }

    public function allProduct()
    {
        $data = Product::with('Reviews')->get();
        return response()->json(['product' => $data]);
    }
    public function productCategory($id)
    {
        $product = Product::with('Reviews')->where('id', $id)->first();
        $productCategeory = Category::with('product')->where('id', $product->categories_id)->first();
        return response()->json(['productCategory' => $productCategeory]);
    }
    //getting similiar product by category
    public function getproductByCategory($categoryslug)
    {
        $category = Category::with('products.Reviews')->where('slug', $categoryslug)->first();
        return response()->json(['category' => $category]);
    }
    //getting blog
    public function getBlog()
    {
        $data = Post::latest()->all();
        return response()->json(['blog' => $data]);
    }
    //Categories
    public function category()
    {
        $data = Category::all();
        return response()->json(['category' => $data]);
    }
    public function searchProduct(Request $request)
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

    public function Banners()
    {
        $banner = Banners::all();
        return response()->json(['banner' => $banner]);
    }

    public function Banner_sr()
    {
        $banner = Banner_sr::inRandomOrder()->get();
        return response()->json(['banner_sr' => $banner]);
    }

    public function relateDetails($slug)
    {
        $product = Product::with('category', 'Reviews.user')->where('slug', $slug)->first();
        $reviews = Review::with('user')->where('product_id', $product->id)->paginate(10);
        return response()->json(['product' => $product, 'reviews' => $reviews]);
    }
    public function sku_No()
    {
        $sku_No = Sku::where('isvalid', false)->get();
        return response()->json(['sku' => $sku_No]);
    }
    public function searchPlacesByAddress(Request $request)
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
        if (isset($result['predictions'])) {
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


    public function addSubscriber(Request $request)
    {
        $email = $request->get('email');
        if (count(Subscriber::where('email', $email)->get()) > 0)
            return response()->json(['success' => true, 'error' => 'We\'ve got your email']);
        $subscriber = subscriber::Create(['email' => $email, 'status' => 1]);
        return response()->json(['result' => true, 'message' => 'You will receive updates on your email']);
    }
    public function mail()
    {
        sendWelcomeMailJob::dispatch('david.ifeanyi84@gmail.com');
    }
    public function getState()
    {
        $states = State::with('cities')->where('country_id', 161)->get();
        return response()->json(['success' => true, 'states' => $states]);
    }
    public function commentsOnProduct()
    {
    }
    public function footerContent()
    {
    }
    public function headerContent()
    {
    }
}
