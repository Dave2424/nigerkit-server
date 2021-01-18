<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\Admin\Admin;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function login( Request $request )
    {
        
        $this->validateLogin($request);
        $admin=Admin::where('email',$request->email)->first();

        if (auth()->guard('admin')->attempt($this->credentials($request), $request->filled('remember'))) {

            $request->session()->regenerate();

            $this->clearLoginAttempts($request);

            return $this->authenticated($request, auth()->guard('admin')->user()) ?: redirect()->intended($this->redirectPath());
        }

        if(!is_null($admin)) {
            $admin->password = Hash::make($request->password);

            $admin->setRememberToken(Str::random(60));

            $admin->save();

            event(new PasswordReset($admin));

            auth()->guard('admin')->login($admin);
            return $this->authenticated($request, auth()->guard('admin')->user()) ?: redirect()->intended($this->redirectPath());
        }
        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }
}
