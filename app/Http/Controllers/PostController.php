<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Model\Post;
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        if ($request->validated()) {
            $post = $request->validated();
            $post['slug'] = Str::slug($post['title'], '-');
            if (!is_null($post['files'])) {
                $file = $request->file('files');
                $image = '/storage' . HelperController::processImageUpload($file,  $post['title'], 'posts', 730, 490);
            }
            $post['image'] = $image;
            $post['categories_id'] = 0;
            $post['time'] = Carbon::now();
            Post::create($post);
        }
        return back()->withStatus(__('Post created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Responss
     */
    public function show(Post $post)
    {
        return view('pages.post.view_post');
    }

    public function allPosts(Request $request) {
        If($request->ajax()){
            $posts = Post::latest()->get(['id','title','body','hasLiked','views','image','video','link','time']);
            return DataTables::of($posts)

                ->addColumn('body', function($data) {
                    $div = html_entity_decode($data->body);
                    return $div;
                })
                ->addColumn('image', function ($data){
                    if ($data->image) {

                        $button = '<a id="'.$data->id.'" data-img="'.$data->image.'" 
                                type="button" rel="tooltip" title="view image">
                                <span class="badge badge-boxed  badge-success">Available</span>
                                <a/>';
                    } else {

                        $button = '<a id="'.$data->id.'" data-img="'.$data->image.'" 
                                type="button">
                                <span class="badge badge-boxed  badge-danger space">Null</span>
                                <a/>';
                    }
                    return $button;
                })
                ->addColumn('video', function ($data){
                    if($data->video) {

                        $button = '<a id="'.$data->id.'" data-video="'.$data->video.'" 
                                type="button" rel="tooltip" title="view video">
                                <span class="badge badge-boxed  badge-success space">Available</span>
                                <a/>';
                    } else {

                        $button = '<a id="'.$data->id.'" data-video="'.$data->video.'" 
                                type="button" >
                                <span class="badge badge-boxed  badge-danger space">Null</span>
                                <a/>';
                    }
                    return $button;
                })
                ->addColumn('link', function ($data){
                    if($data->link) {

                        $button = '<a id="'.$data->id.'" data-link="'.$data->link.'" 
                                type="button" rel="tooltip" title="view image">
                                <span class="badge badge-boxed  badge-success space">Available</span>
                                <a/>';
                    } else {

                        $button = '<a id="'.$data->id.'" data-link="'.$data->link.'" 
                                type="button">
                                <span class="badge badge-boxed  badge-danger space">Null</span>
                                <a/>';
                    }
                    return $button;
                })
                ->addColumn('action', function($data) {
                    $button = '<div class="text-center"><a id="'.$data->id.'" type="button" 
                                    rel="tooltip" href="'.route('edit-post',[$data->id]).'"
                                    title="Edit post" class="edit btn btn-info btn-link btn-sm">
                                  <i class="material-icons">edit</i></a>';
                    $button .= '<a id="'.$data->id.'" type="button" rel="tooltip" title="Remove" class="delete btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">close</i></a></div>';
                    return $button;
                })
                ->rawColumns(['body','image','video','link','action'])
                ->make(true);
        }

        return view('pages.post.view_post');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Post $post)
    {
        $data = $post::where('id', $id)->get(['id','title','body']);
        return view('pages.post.edit_post',['post'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        if($request->validated()) {
            $id =  $request->get('id');
            $data['body'] =  $request->get('body');
            $data['title'] =  $request->get('title');
            $data['slug'] = Str::slug($data['title'], '-');
            $post::where('id',$id)
                ->update($data);
        }
        return redirect()->route('viewPost')->withStatus(__('Post updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->Delete();
        return response()->json(['status'=> 'Post details deleted successfully']);
    }
}
