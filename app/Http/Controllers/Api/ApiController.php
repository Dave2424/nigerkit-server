<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Product;
use Illuminate\Http\Request;
use App\User;

class ApiController extends Controller
{
    protected $post;
    protected $user;


    public function __construct( User $userModel, Post $post )
    {
        $this->user = $userModel;
        $this->post = $post;
//        $this->middleware('auth:api');
        $this->url = url('/');
    }
    public function increaseBlogViews($slug)
    {
        //replacing the id with slug 
        // $post = $this->post->find($id);
        $post = $this->post::where('slug', $slug)->first();
        $post->update(['views' => $post->views + 1]);
        // $update = $this->post->find($id);
        return response()->json($post);
    }
}
