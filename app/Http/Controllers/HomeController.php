<?php

namespace App\Http\Controllers;

use App\Jobs\sendWelcomeMailJob;
use App\Model\Client;
use App\Model\Post;
use App\Orderlist;
use App\Product;
use App\Subscriber;
use App\Model\Admin;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *1
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }


    public function getDetails()
    {
        $query = Orderlist::where('status', 'paid');

        $orderlist = $query->get()->count();
        $revenue = $query->sum('amount');
        // $commplaint
        $user = Client::all()->count();
        // $subscriber 
        $post = Post::all()->count();
        $product = Product::where('quantity', '>', 0)->get()->count();
        $sub_admin = Admin::all()->count();
        $subscriber = Subscriber::all()->count();

        return response()
            ->json([
                'success' => true,
                'orderlist' => $orderlist,
                'revenue' => number_format($revenue),
                'user' => $user,
                'post' => $post,
                'product' => $product,
                'sub_admin' => $sub_admin,
                'subscriber' => $subscriber

            ]);
    }

    public function getOrderlist()
    {
        $orderlist = Orderlist::with('client,userInvoice')->paginate(1);
        return response()->json(['success' => true, 'orderlist' => $orderlist]);
    }
}
