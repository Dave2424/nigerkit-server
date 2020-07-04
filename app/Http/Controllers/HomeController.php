<?php

namespace App\Http\Controllers;

use App\Model\client;
use App\Model\Post;
use App\Orderlist;
use App\Product;
use App\User;

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
    

    public function getDetails() {
        $query = Orderlist::where('status', 'paid');

        $orderlist = $query->get()->count();
        $revenue = $query->sum('amount');
        // $commplaint
        $user = client::all()->count();
        // $subscriber 
        $post = Post::all()->count();
        $product = Product::where('quantity', '<>', 0)->get()->count();
        $sub_admin = User::all()->count();

        return response()
        ->json(['success' => true,
        'orderlist' => $orderlist,
        'revenue' => number_format($revenue),
        'user' => $user,
        'post' => $post,
        'product' => $product,
        'sub_admin' => $sub_admin

        ]);
    }

    public function getOrderlist() {
        $orderlist = Orderlist::with('client')->paginate(1);
        return response()->json(['success' => true,'orderlist'=> $orderlist]);
    }
}
