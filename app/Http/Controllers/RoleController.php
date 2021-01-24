<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;

class RoleController extends Controller{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    
    public function index(){
        $roles = Role::paginate(10);
        return view('settings.role.index', ['roles' =>$roles]);
    }
    
    public function create(){
        return view('settings.role.create');
    }

    public function store(Request $request){
        $key = str_replace(" ","_", trim(strtoupper($request['name'])));

        if(!Role::where('key', $key)->first()){
            Role::create([
                "name"=>$request['name'],
                "key"=>str_replace(" ","_", trim(strtoupper($request['name']))),
                "details"=>$request['details'],
            ]);
        }
        return redirect()->route('role.index')->withStatus(__('Role created successfully.'));
    }

    public function edit($role_id){
        $role = Role::findOrFail($role_id);
        return view('settings.role.edit', compact('role'));
    }
    
    public function update(Request $request, $role_id){
        $role = Role::findOrFail($role_id);
        $key = str_replace(" ","_", trim(strtoupper($request['name'])));

        if(!Role::where('key', $key)->first()){
            $role->update([
                "name"=>$request['name'],
                "key"=>$key,
                "details"=>$request['details'],
            ]);
        }
        

        return redirect()->route('role.index')->withStatus(__('Role successfully updated.'));
    }
    
    public function updateStatus($role_id){
        $role = Role::findOrFail($role_id);

        $role->update([
            "status"=>$role->status == 1 ? 0: 1,
        ]);

        return redirect()->route('role.index')->withStatus(__('Role successfully updated.'));
    }
    
    public function destroy($role_id){
        $role = Role::where('isLocked', '!=', 1)->findOrFail($role_id);
        $role->delete();
        return redirect()->route('role.index')->withStatus(__('Role successfully deleted.'));
    }

    public function editPermission($role_id){
        $role = Role::findOrFail($role_id);
        $permissions = Permission::where('status',1)->get();
        foreach($permissions as $permission){
            $permission->isActive = $role->hasPermissionTo($permission->id);
        }
        return view('settings.role.edit-permission', compact('role', 'permissions'));
    }
    
    public function updatePermission(Request $request, $role_id){
        $data = $request->all();

        $role = Role::findOrFail($role_id);
        $permissions = Permission::where('status',1)->get();
        $activePermissions = [];
        foreach($permissions as $permission){
            if(isset($data[$permission->key])){
                $activePermissions = $permission->id;
            }
        }
        $role->permissions()->sync($activePermissions);

        return redirect()->route('role.index')->withStatus(__('Role permission successfully updated.'));
    }
}
