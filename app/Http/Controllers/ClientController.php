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
        $users = Client::paginate(10);
        return view('users.user.index', ['users' =>$users]);
    }
    
    public function create(){
        return view('users.user.create');
    }
    
    public function store(Request $request){
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
    

    public function edit($user_id){
        $user = Client::findOrFail($user_id);
        return view('users.user.edit', compact('user'));
    }
    

    public function update(Request $request, Client  $user){
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

    public function updateStatus($user_id){
        $user = Client::findOrFail($user_id);

        $user->update([
            "status"=>$user->status == 1 ? 0: 1,
        ]);

        return redirect()->route('user.index')->withStatus(__('User successfully updated.'));
    }
    
    public function destroy(Client  $user){
        $user->delete();

        return redirect()->route('user.index')->withStatus(__('Client successfully deleted.'));
    }
}
