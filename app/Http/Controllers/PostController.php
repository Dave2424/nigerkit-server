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

class PostController extends Controller{
    public $user;
    public function __construct(){
        $this->middleware('auth:admin');
        $this->user = auth('admin')->user();
    }
    
    public function index(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Post") ||
            $this->user->hasPermissionTo("Update_Post") ||
            $this->user->hasPermissionTo("Update_Post_Status") ||
            $this->user->hasPermissionTo("Read_Post") ||
            $this->user->hasPermissionTo("Delete_Post")){

            $posts = Post::paginate(10);
            return view('pages.post.index',
                ['posts' => $posts]
            );
        }
        return back();
    }

    public function create(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Post")){
            $categories = Category::all();
            return view('pages.post.create', ['categories' =>$categories]);
        }
        return back();
    }

    public function store(PostRequest $request){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Post")){
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
        return back();
    }

    public function edit($post_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Post")){
            $post = Post::findOrFail($post_id);
            $post->tags = $post->tagsToSting();
            $post->categories = $post->categoriesToSting();
            $categories = Category::all();
            return view('pages.post.edit', ['categories' =>$categories, 'post' => $post]);
        }
        return back();
    }
    
    public function update(Request $request, $post_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Post")){
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
        return back();
    }

    public function updateStatus($post_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Post_Status")){
            $post = Post::findOrFail($post_id);
            $post->update([
                "status"=>$post->status == 1 ? 0: 1,
            ]);

            return redirect()->back()->withStatus(__('Post successfully updated.'));
        }
        return back();
    }

    public function destroy($id){
        $this->__construct();
        if($this->user->hasPermissionTo("Delete_Post")){
            $post = Post::find($id);
            if($post){
                $post->delete();
            }
            return redirect()->back()->withStatus(__('Post details deleted successfully'));
        }
        return back();
    }
}
