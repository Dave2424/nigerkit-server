<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\DefaultHelperController;

class CategoryController extends Controller
{
    public $user;
    public function __construct(){
        $this->middleware('auth:admin');
        $this->user = auth('admin')->user();
    }
    
    public function index(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Category") ||
            $this->user->hasPermissionTo("Update_Category") ||
            $this->user->hasPermissionTo("Read_Category") ||
            $this->user->hasPermissionTo("Delete_Category")){
                
            $categories = Category::with(['posts', 'products'])->paginate(10);
            return view('pages.category.index', ['categories' => $categories]);
        }
        return back();
    }

    public function create(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Category")){
            return view('pages.category.create');
        }
        return back();
    }

    public function store(Request $request){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Category")){
                    
            $this->validate($request, [
                'category' => ['required', 'string','max:255', 'unique:categories'],
            ]);

            $category = Category::create([
                'category'=>$request['category'],
                'slug'=> DefaultHelperController::makeSlug($request['category']),
            ]);

            return redirect()->route('category.index')->withStatus(__('Category successfully created.'));
        }
        return back();
    }
    
    public function edit($category_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Category")){
            $category = Category::findOrFail($category_id);
            return view('pages.category.edit', compact('category'));
        }
        return back();
    }
    
    public function update(Request $request, $category_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Category")){
                
            $category = Category::findOrFail($category_id);
            $this->validate($request, [
                'category' => ['required', 'string','max:255'],
                'slug' => ['required'],
            ]);

            if($request['category'] != $category->category){
                $this->validate($request, [
                    'category' => ['required', 'unique:categories']
                ]);
            }

            if($request['slug'] != $category->slug){
                $this->validate($request, [
                    'slug' => ['required', 'string', 'unique:categories']
                ]);

                $request['slug'] = DefaultHelperController::makeSlug($request['slug']);
            }

            $category->update([
                "category"=> $request['category'],
                "slug"=> $request['slug'],
            ]);

            return redirect()->route('category.index')->withStatus(__('Category successfully updated.'));
        }
        return back();
    }
    
    public function destroy($category_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Delete_Category")){
            $category = Category::findOrFail($category_id);
            $category->delete();
            return redirect()->route('category.index')->withStatus(__('Category successfully deleted.'));
        }
        return back();
    }
}
