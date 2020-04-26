<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiAuthController extends Controller
{
    protected $user;

    /**
     * AuthController constructor.
     * @param User $userModel
     */
    public function __construct(User $userModel)
    {
        $this->user = $userModel;
        $this->middleware('auth:api', ['except' => ['login','register','verify']]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register( Request $request )
    {
        $data = $request->all();

        //check if use with thesame email exists
//        if ($this->user->where('email', '=', $data['email'])->exists()) {
//            return response()->json(['error' => 'User with same email already exists. Go to login page and click forgot password'], '401');
//        }

//        unset($data['ref_code']);
//        $data['slug'] = uniqid(rand(), true);

//        $user = $this->user->create($data);

//        $is_created = false;

//        if($is_created){
            //send Welcome Mail
//            $this->sendVerificationMail($data);
//            return response()->json(['slug' => $data['slug'], 'email' => $data['email']]);
//        }
        return response()->json(['data' => $data]);

//        return response()->json(['error' => "Your account cannot be created this time, Please contact support"], 401);
    }

    //login
    public function Login(Request $request){
        //Get login credentials from request
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        if (! $token = auth()->attempt($credentials)) {
            //return error message
            return response()->json(['error' => 'Invalid email address or Password'], '401');
        }
//        if (! $token = $this->guard('api')->attempt($credentials)) {
//            //return error message
//            return response()->json(['error' => 'Invalid email address or Password'], '401');
//        }

//        if (is_null($user->email_verified_at)) {
//            return response()->json(['error' => "Your email is not verified",'is_not_verified'=>$user->slug]);
//        }
        return $this->respondWithToken($token);

    }
//    public function me() {
//        return response()->Json($this->guard()->user());
//    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'Access_token' => $token,
            'token_type' => 'bearer',
//            'expires_in' => $this->guard('api')->factory()->getTTL() * 60,
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }
    public function refresh() {
        return $this->respondWithToken($this->guard()->refresh());
    }

    public function AuthByGoogle() {

    }
    public function AuthByFB(){

    }
    public function verify() {

    }
    public function logout() {
//        auth()->logout();
        $this->guard()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
    public function guard() {
        return Auth::guard();
    }
}
