<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public $user;
    public function __construct(){
        $this->middleware('auth:admin');
        $this->user = auth('admin')->user();
    }
    
    public function index(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Admin") ||
            $this->user->hasPermissionTo("Update_Admin") ||
            $this->user->hasPermissionTo("Update_Admin_Status") ||
            $this->user->hasPermissionTo("Update_Admin_Permission") ||
            $this->user->hasPermissionTo("Update_Admin_Role") ||
            $this->user->hasPermissionTo("Read_Admin") ||
            $this->user->hasPermissionTo("Delete_Admin")){

            $admins = Admin::paginate(10);
            return view('users.admin.index', ['admins' =>$admins]);
        }
        return back();
    }
    
    public function create(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Admin")){
            return view('users.admin.create');
        }
        return back();
    }
    
    public function store(Request $request){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Admin")){
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            Admin::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);

            return redirect()->route('admin.index')->withStatus(__('Admin successfully created.'));
        }
        return back();
    }
    

    public function edit($admin_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Admin")){
            $admin = Admin::findOrFail($admin_id);
            return view('users.admin.edit', compact('admin'));
        }
        return back();
    }
    

    public function update(Request $request, Admin  $admin){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Admin")){
            $hasPassword = $request->get('password');
            $admin->update(
                $request->merge([
                    'password' => Hash::make($request->get('password'))
                    ])->except(
                        [$hasPassword ? '' : 'password']
                    )
                );

            return redirect()->route('admin.index')->withStatus(__('Admin successfully updated.'));
        }
        return back();
    }

    public function updateStatus($admin_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Admin_Status")){
            $admin = Admin::findOrFail($admin_id);
            $admin->update([
                "status"=>$admin->status == 1 ? 0: 1,
            ]);
            return redirect()->route('admin.index')->withStatus(__('Admin successfully updated.'));
        }
        return back();
    }
    
    public function destroy(Admin  $admin){
        $this->__construct();
        if($this->user->hasPermissionTo("Delete_Admin")){
            $admin->delete();
            return redirect()->route('admin.index')->withStatus(__('Admin successfully deleted.'));
        }
        return back();
    }


    public function editPermission($admin_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Admin_Permission")){
            $admin = Admin::findOrFail($admin_id);
            $permissions = Permission::where('status',1)->get();
            foreach($permissions as $permission){
                $permission->isActive = $admin->hasPermissionTo($permission->key);
            }
            return view('users.admin.edit-permission', compact('admin', 'permissions'));
        }
        return back();
    }
    
    public function updatePermission(Request $request, $admin_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Admin_Permission")){
            $data = $request->all();
            $admin = Admin::findOrFail($admin_id);
            $permissions = Permission::where('status',1)->get();
            $activePermissions = [];
            foreach($permissions as $permission){
                if(isset($data[$permission->key])){
                    $activePermissions = $permission->id;
                }
            }
            $admin->permissions()->sync($activePermissions);
            return redirect()->route('admin.index')->withStatus(__('Admin permission successfully updated.'));
        }
        return back();
    }

    public function editRole($admin_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Admin_Role")){

            $admin = Admin::findOrFail($admin_id);
            $roles = Role::where('status',1)->get();
            foreach($roles as $role){
                $role->isActive = $admin->hasRole($role->key);
            }
            return view('users.admin.edit-role', compact('admin', 'roles'));
        }
        return back();
    }
    
    public function updateRole(Request $request, $admin_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Admin_Role")){
                
            $data = $request->all();
            $admin = Admin::findOrFail($admin_id);
            $roles = Role::where('status',1)->get();
            $activeRoles = [];
            foreach($roles as $role){
                if(isset($data[$role->key])){
                    $activeRoles = $role->id;
                }
            }
            $admin->roles()->sync($activeRoles);
            return redirect()->route('admin.index')->withStatus(__('Admin role successfully updated.'));
        }
        return back();
    }
}
