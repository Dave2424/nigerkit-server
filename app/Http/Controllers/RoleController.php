<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;

class RoleController extends Controller{
    public $user;
    public function __construct(){
        $this->middleware('auth:admin');
        $this->user = auth('admin')->user();
    }
    
    public function index(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Role") ||
            $this->user->hasPermissionTo("Update_Role") ||
            $this->user->hasPermissionTo("Update_Role_Status") ||
            $this->user->hasPermissionTo("Update_Role_Permission") ||
            $this->user->hasPermissionTo("Read_Role") ||
            $this->user->hasPermissionTo("Delete_Role")){
            
            $roles = Role::paginate(10);
            return view('settings.role.index', ['roles' =>$roles]);
        }
        return back();
    }
    
    public function create(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Role")){
            return view('settings.role.create');
        }
        return back();
    }

    public function store(Request $request){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Role")){
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
        return back();
    }

    public function edit($role_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Role")){
            $role = Role::findOrFail($role_id);
            return view('settings.role.edit', compact('role'));
        }
        return back();
    }
    
    public function update(Request $request, $role_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Role")){
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
        return back();
    }
    
    public function updateStatus($role_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Role_Status")){
            $role = Role::findOrFail($role_id);

            $role->update([
                "status"=>$role->status == 1 ? 0: 1,
            ]);

            return redirect()->route('role.index')->withStatus(__('Role successfully updated.'));
        }
        return back();
    }
    
    public function destroy($role_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Delete_Role")){
            $role = Role::where('isLocked', '!=', 1)->findOrFail($role_id);
            $role->delete();
            return redirect()->route('role.index')->withStatus(__('Role successfully deleted.'));
        }
        return back();
    }

    public function editPermission($role_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Role_Permission")){
            $role = Role::findOrFail($role_id);
            $permissions = Permission::where('status',1)->get();
            foreach($permissions as $permission){
                $permission->isActive = $role->hasPermissionTo($permission->id);
            }
            return view('settings.role.edit-permission', compact('role', 'permissions'));
        }
        return back();
    }
    
    public function updatePermission(Request $request, $role_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Role_Permission")){
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
        return back();
    }
}
