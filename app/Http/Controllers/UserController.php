<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    
    public function index(){
        $users = User::paginate(10);
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

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('user.index')->withStatus(__('User successfully created.'));
    }
    

    public function edit($user_id){
        $user = User::findOrFail($user_id);
        return view('users.user.edit', compact('user'));
    }
    

    public function update(Request $request, User  $user)
    {
        $hasPassword = $request->get('password');
        $user->update(
            $request->merge([
                'password' => Hash::make($request->get('password'))
                ])->except(
                    [$hasPassword ? '' : 'password']
                )
            );

        return redirect()->route('user.index')->withStatus(__('User successfully updated.'));
    }
    
    public function destroy(User  $user)
    {
        $user->delete();

        return redirect()->route('user.index')->withStatus(__('User successfully deleted.'));
    }
}
