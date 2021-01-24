<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionController extends Controller{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    
    public function index(){
        $permissions = Permission::paginate(10);
        return view('settings.permission.index', ['permissions' =>$permissions]);
    }
    
    public function create(){
        return view('settings.permission.create');
    }

    public function store(Request $request){
        Permission::create([
            "title"=>$request['title'],
            "pictures"=>$permission['pictures'],
            "details"=>$request['details'],
        ]);
        return redirect()->route('permission.index')->withStatus(__('Uploaded successfully.'));
    }

    public function edit($permission_id){
        $permission = Permission::findOrFail($permission_id);
        return view('settings.permission.edit', compact('permission'));
    }
    
    public function update(Request $request, $permission_id){
        $permission = Permission::findOrFail($permission_id);
        $permission->update([
            "title"=>$request['title'],
            "pictures"=>$permission['pictures'],
            "details"=>$request['details'],
        ]);

        return redirect()->route('permission.index')->withStatus(__('Permission successfully updated.'));
    }
    
    public function updateStatus($permission_id){
        $permission = Permission::findOrFail($permission_id);

        $permission->update([
            "status"=>$permission->status == 1 ? 0: 1,
        ]);

        return redirect()->route('permission.index')->withStatus(__('Permission successfully updated.'));
    }
    
    public function destroy($permission_id){
        $permission = Permission::findOrFail($permission_id);
        $permission->delete();
        return redirect()->route('permission.index')->withStatus(__('Permission successfully deleted.'));
    }
}
