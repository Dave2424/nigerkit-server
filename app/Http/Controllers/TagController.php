<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\DefaultHelperController;

class TagController extends Controller{
    public $user;
    public function __construct(){
        $this->middleware('auth:admin');
        $this->user = auth('admin')->user();
    }
    
    public function index(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Tag") ||
            $this->user->hasPermissionTo("Update_Tag") ||
            $this->user->hasPermissionTo("Read_Tag") ||
            $this->user->hasPermissionTo("Delete_Tag")){

            $tags = Tag::with(['posts', 'products'])->paginate(10);
            return view('pages.tag.index', ['tags' => $tags]);
        }
        return back();
    }

    public function create(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Tag")){
            return view('pages.tag.create');
        }
        return back();
    }

    public function store(Request $request){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Tag")){
            $this->validate($request, [
                'name' => ['required', 'string','max:255', 'unique:tags'],
            ]);

            $tag = Tag::create([
                'name'=>$request['name'],
                'slug'=> DefaultHelperController::makeSlug($request['name']),
            ]);

            return redirect()->route('tag.index')->withStatus(__('Tag successfully created.'));
        }
        return back();
    }
    
    public function edit($tag_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Tag")){
            $tag = Tag::findOrFail($tag_id);
            return view('pages.tag.edit', compact('tag'));
        }
        return back();
    }
    
    public function update(Request $request, $tag_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Tag")){
            $tag = Tag::findOrFail($tag_id);
            $this->validate($request, [
                'name' => ['required', 'string','max:255'],
                'slug' => ['required'],
            ]);

            if($request['name'] != $tag->tag){
                $this->validate($request, [
                    'name' => ['required', 'unique:tags']
                ]);
            }

            if($request['slug'] != $tag->slug){
                $this->validate($request, [
                    'slug' => ['required', 'string', 'unique:tags']
                ]);

                $request['slug'] = DefaultHelperController::makeSlug($request['slug']);
            }

            $tag->update([
                "name"=> $request['name'],
                "slug"=> $request['slug'],
            ]);

            return redirect()->route('tag.index')->withStatus(__('Tag successfully updated.'));
        }
        return back();
    }
    
    public function destroy($tag_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Delete_Tag")){
            $tag = Tag::findOrFail($tag_id);
            $tag->delete();
            return redirect()->route('tag.index')->withStatus(__('Tag successfully deleted.'));
        }
        return back();
    }
}
