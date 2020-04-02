<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('dashboard');
    }
    public function  tablelist() {
        return view('pages.table_list');
    }
    public function review() {
        return view('pages.review');
    }
    public function allIcons() {
        return view('pages.icons');
    }
    public function notifications() {
        return view('pages.notifications');
    }
    public function category() {
        return view('pages.category');
    }
    public function map() {
        return view('pages.map');
    }
    public function support() {
        return view('pages.language');
    }
    public function upgrade() {
        return view('pages.upgrade');
    }
    public function product() {
        return view('pages.products');
    }
    public function addCategory() {
        return view ('pages.addCategory');
    }
}
