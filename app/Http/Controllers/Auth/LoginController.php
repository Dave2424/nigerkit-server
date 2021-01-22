<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating admin for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect admin after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'           => 'required|email|exists:admins',
            'password'           => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            if ($user->status == Admin::$UserFlagged) {
                $errors = ['email'=> 'Your Account Has been flagged! Please contact support'];
                Auth::logout();
                return redirect('/');
            } else{
                $user->login_status = 1;
                $user->save();
                return redirect('admin');
            }
                
        }
        $errors = ['email'=>'Email address or password is incorrect!'];

        return redirect()->back()->withErrors( $errors )->withInput();
    }

    public function logout()
    {
        $user = Auth::user();
        $user->login_status = 0;
        $user->save();
        Auth::logout();
        return redirect('/');
    }


}