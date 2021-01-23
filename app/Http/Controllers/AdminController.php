<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
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
    
    public function destroy(Admin  $admin){
        $admin->delete();
        return redirect()->route('admin.index')->withStatus(__('Admin successfully deleted.'));
    }
}
