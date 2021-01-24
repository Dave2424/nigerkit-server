<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\Model\client;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller{
    public $user;
    public function __construct(){
        $this->middleware('auth:admin');
        $this->user = auth('admin')->user();
    }

    public function edit(){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Profile")){
            return view('profile.edit');
        }
        return back();
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Profile")){
            auth()->user()->update($request->all());
            return back()->withStatus(__('Profile successfully updated.'));
        }
        return back();
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Profile_Password")){
            auth()->user()->update(['password' => Hash::make($request->get('password'))]);
            return back()->withStatusPassword(__('Password successfully updated.'));
        }
        return back();
    }
    public function confirmEmail($token, $id) {
        $new_user = client::find($id);
        $new_user->token = $token;
        $new_user->email_verified_at = Now();
        $new_user->save(); 
        return redirect('https://www.nigerkit.com');
    }
}
