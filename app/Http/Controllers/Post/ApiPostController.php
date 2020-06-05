<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Model\Comment;
use App\Model\Post;
use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    
    public function allPost() {
        $post = Post::paginate(6);
        return response()->json(['post' => $post]);
    }
    public function postDetails($id) {
        $postDetails = Post::with('comment.user','category')->where('id', $id)->first();
        $relatedPost = Post::where('categories_id', $postDetails->categories_id)->orderBy('created_at')->get()->random(3);
        return response()->json(['post_details' => $postDetails, 'relate'=> $relatedPost]);
    }
    public function addComment(Request $request) {
        $data = $request->all();
        $post = Post::find($data['post_id'])->first();
        $info = $this->comment($post,$data['comment'], $data['client_id']);
        return response()->json(['status' => $info]);
    }

    function comment($commentable, string $comment, string $user_id)
    {
        $commentModel = Comment::class;
        $comment = new $commentModel([
            'comment' => $comment,
            'commentable_type' => get_class($commentable),
            'commentable_id' => $commentable->id,
            'client_id'   => $user_id,
        ]);
        $comment->save();
        return true;
    }
}
