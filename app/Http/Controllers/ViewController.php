<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller{
    public $user;
    public function __construct(){
        $this->user = auth('admin')->user();
        $this->middleware('auth',['except' => ['verify']]);
    }

    public function index(){
        return view('dashboard');
    }

    public function orders() {
        return view('pages.order.orderlist');
    }
    public function notifications() {
        return view('pages.notifications');
    }
    
    public function verify($token,$id) {
        return view('auth.verifyclient', ['data' => $token, 'id' => $id]);
    }
}
