<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Model\Post;
use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    
    public function allPost() {
        $post = Post::paginate(6);
        return response()->json(['post' => $post]);
    }
}
