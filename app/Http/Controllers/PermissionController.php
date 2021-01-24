<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionController extends Controller{
    public $user;
    public function __construct(){
        $this->middleware('auth:admin');
        $this->user = auth('admin')->user();
    }
    
    public function index(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Permission") ||
            $this->user->hasPermissionTo("Update_Permission") ||
            $this->user->hasPermissionTo("Update_Permission_Status") ||
            $this->user->hasPermissionTo("Read_Permission") ||
            $this->user->hasPermissionTo("Delete_Permission")){
            $permissions = Permission::paginate(10);
            return view('settings.permission.index', ['permissions' =>$permissions]);
        }
        return back();
    }
    
    public function create(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Permission")){
            return view('settings.permission.create');
        }
        return back();
    }

    public function store(Request $request){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Permission")){
            Permission::create([
                "title"=>$request['title'],
                "pictures"=>$permission['pictures'],
                "details"=>$request['details'],
            ]);
            return redirect()->route('permission.index')->withStatus(__('Uploaded successfully.'));
        }
        return back();
    }

    public function edit($permission_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Permission")){
            $permission = Permission::findOrFail($permission_id);
            return view('settings.permission.edit', compact('permission'));
        }
        return back();
    }
    
    public function update(Request $request, $permission_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Permission")){
        $permission = Permission::findOrFail($permission_id);
            $permission->update([
                "title"=>$request['title'],
                "pictures"=>$permission['pictures'],
                "details"=>$request['details'],
            ]);

            return redirect()->route('permission.index')->withStatus(__('Permission successfully updated.'));
        }
        return back();
    }
    
    public function updateStatus($permission_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Permission_Status")){
            $permission = Permission::findOrFail($permission_id);

            $permission->update([
                "status"=>$permission->status == 1 ? 0: 1,
            ]);

            return redirect()->route('permission.index')->withStatus(__('Permission successfully updated.'));
        }
        return back();
    }
    
    public function destroy($permission_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Delete_Permission")){
            $permission = Permission::findOrFail($permission_id);
            $permission->delete();
            return redirect()->route('permission.index')->withStatus(__('Permission successfully deleted.'));
        }
        return back();
    }
}
