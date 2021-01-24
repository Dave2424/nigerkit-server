<?php

namespace App\Http\Controllers;

use App\Model\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public $user;
    public function __construct(){
        $this->middleware('auth:admin');
        $this->user = auth('admin')->user();
    }
    
    public function index(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Client") ||
            $this->user->hasPermissionTo("Update_Client") ||
            $this->user->hasPermissionTo("Update_Client_Status") ||
            $this->user->hasPermissionTo("Read_Client") ||
            $this->user->hasPermissionTo("Delete_Client")){

            $users = Client::paginate(10);
            return view('users.user.index', ['users' =>$users]);
        }
        return back();
    }
    
    public function create(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Client")){
            return view('users.user.create');
        }
        return back();
    }
    
    public function store(Request $request){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Client")){
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            Client::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);

            return redirect()->route('user.index')->withStatus(__('Client successfully created.'));
        }
        return back();
    }
    

    public function edit($user_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Client")){
            $user = Client::findOrFail($user_id);
            return view('users.user.edit', compact('user'));
        }
        return back();
    }
    

    public function update(Request $request, Client  $user){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Client")){
            $hasPassword = $request->get('password');
            $user->update(
                $request->merge([
                    'password' => Hash::make($request->get('password'))
                    ])->except(
                        [$hasPassword ? '' : 'password']
                    )
                );

            return redirect()->route('user.index')->withStatus(__('Client successfully updated.'));
        }
        return back();
    }

    public function updateStatus($user_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Client_Status")){
            $user = Client::findOrFail($user_id);

            $user->update([
                "status"=>$user->status == 1 ? 0: 1,
            ]);

            return redirect()->route('user.index')->withStatus(__('User successfully updated.'));
        }
        return back();
    }
    
    public function destroy(Client  $user){
        $this->__construct();
        if($this->user->hasPermissionTo("Delete_Client")){
            $user->delete();
            return redirect()->route('user.index')->withStatus(__('Client successfully deleted.'));
        }
        return back();
    }
}
