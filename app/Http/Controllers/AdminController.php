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
        $admins = Admin::paginate(10);
        return view('users.admin.index', ['admins' =>$admins]);
    }
    
    public function create(){
        return view('users.admin.create');
    }
    
    public function store(Request $request){
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
    

    public function edit($admin_id){
        $admin = Admin::findOrFail($admin_id);
        return view('users.admin.edit', compact('admin'));
    }
    

    public function update(Request $request, Admin  $admin){
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

    public function updateStatus($admin_id){
        $admin = Admin::findOrFail($admin_id);
        $admin->update([
            "status"=>$admin->status == 1 ? 0: 1,
        ]);
        return redirect()->route('admin.index')->withStatus(__('Admin successfully updated.'));
    }
    
    public function destroy(Admin  $admin){
        $admin->delete();
        return redirect()->route('admin.index')->withStatus(__('Admin successfully deleted.'));
    }


    public function editPermission($admin_id){
        $admin = Admin::findOrFail($admin_id);
        $permissions = Permission::where('status',1)->get();
        foreach($permissions as $permission){
            $permission->isActive = $admin->hasPermissionTo($permission->key);
        }
        return view('users.admin.edit-permission', compact('admin', 'permissions'));
    }
    
    public function updatePermission(Request $request, $admin_id){
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

    public function editRole($admin_id){
        $admin = Admin::findOrFail($admin_id);
        $roles = Role::where('status',1)->get();
        foreach($roles as $role){
            $role->isActive = $admin->hasRole($role->key);
        }
        return view('users.admin.edit-role', compact('admin', 'roles'));
    }
    
    public function updateRole(Request $request, $admin_id){
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
}
