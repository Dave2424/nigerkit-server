<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\DefaultHelperController;

class TagController extends Controller
{

    public function __construct(){
        $this->middleware('auth:admin');
    }
    
    public function index(){
        $tags = Tag::with(['posts', 'products'])->paginate(10);
        return view('pages.tag.index', ['tags' => $tags]);
    }

    public function create(){
        return view('pages.tag.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => ['required', 'string','max:255', 'unique:tags'],
        ]);

        $tag = Tag::create([
            'name'=>$request['name'],
            'slug'=> DefaultHelperController::makeSlug($request['name']),
        ]);

        return redirect()->route('tag.index')->withStatus(__('Tag successfully created.'));
    }
    
    public function edit($tag_id){
        $tag = Tag::findOrFail($tag_id);
        return view('pages.tag.edit', compact('tag'));
    }
    
    public function update(Request $request, $tag_id){
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
    
    public function destroy($tag_id){
        $tag = Tag::findOrFail($tag_id);
        $tag->delete();
        return redirect()->route('tag.index')->withStatus(__('Tag successfully deleted.'));
    }
}
