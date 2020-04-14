<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use App\User;

class ApiController extends Controller
{
    public function __construct( User $userModel )
    {
//        $this->user = $userModel;
//        $this->middleware('auth:api');
        $this->url = url('/');
    }
    public function getProduct() {
        $data = Product::all();
        return response()->json(['status' => $data]);
    }
}
