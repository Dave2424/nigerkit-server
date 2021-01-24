<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Model\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index(){
        $posts = Post::paginate(10);

        return view('pages.post.index',
            ['posts' => $posts]
        );
    }

    public function create(){
        $categories = Category::all();
        return view('pages.post.create', ['categories' =>$categories]);
    }

    public function store(PostRequest $request){
        if ($request->validated()) {
            $post = $request->validated();
            $post['slug'] = Str::slug($request['title'], '-');
            if (!is_null($request['files'])) {
                $path = 'storage'.HelperController::processImageUpload($request['files'],  'image','posts',395,840);
                $request['image'] = $path;
            }
            $data = [
                "title"=>$request['title'],
                "slug"=>DefaultHelperController::makeSlug($request['title']),
                "description"=>$request['description'],
                "body"=>$request['body'],
                "image"=>$request['image'],
                "categories_id"=>$request['categories_id'],
            ];
            $post = Post::create($data);
            $post->syncTags($request['tags']);
            $post->syncCategories($request['categories']);
        }
        return redirect()->route('post.index')->withStatus(__('Post created successfully.'));
    }

    public function edit($post_id){
        $post = Post::findOrFail($post_id);
        $post->tags = $post->tagsToSting();
        $post->categories = $post->categoriesToSting();
        $categories = Category::all();
        return view('pages.post.edit', ['categories' =>$categories, 'post' => $post]);
    }
    
    public function update(Request $request, $post_id){
        $post = Post::findOrFail($post_id);
        $file = $request->file('files');


        if (!is_null($file)) {
            $path = 'storage'.HelperController::processImageUpload($file,  'image','posts',395,840);
            $request['image'] = $path;
            HelperController::removeImage($post->image);
        }

        $data = [
            "title"=>$request['title'],
            "slug"=>DefaultHelperController::makeSlug($request['title']),
            "description"=>$request['description'],
            "body"=>$request['body'],
            "image"=>$request['image'] ?? $post->image,
            "categories_id"=>$request['categories_id'],
        ];
        $post->update($data);
        $post->syncTags($request['tags']);
        $post->syncCategories($request['categories']);

        return redirect()->route('post.index')->withStatus(__('Post successfully updated.'));
    }

    public function updateStatus($post_id){
        $post = Post::findOrFail($post_id);
        $post->update([
            "status"=>$post->status == 1 ? 0: 1,
        ]);

        return redirect()->back()->withStatus(__('Post successfully updated.'));
    }

    public function destroy($id){
        $post = Post::find($id);
        if($post){
            $post->delete();
        }
        return redirect()->back()->withStatus(__('Post details deleted successfully'));
    }
}
