<?php

namespace App\Http\Controllers\Api;

use App\Events\NewClientHasRegisteredEvent;
use App\Http\Controllers\Controller;
use App\Jobs\sendWelcomeMailJob;
use App\Model\Client;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{
    protected $user;
    protected $client;

    /**
     * AuthController constructor.
     * @param User $userModel
     */
    public function __construct(Client $userModel)
    {
        $this->user = $userModel;
        $this->middleware('auth:api', ['except' => ['login', 'register', 'verify']]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $data = $request->all();

        //check if use with thesame email exists
        if ($this->user->where('email', '=', $data['email'])->exists())
            return response()->json(['error' => 'User with same email already exists. Go to login page and click forgot password'], '401');

        if ($this->user->where('phone', '=', $data['phone'])->exists())
            return response()->json(['error' => 'User with same phone number already exists.'], '401');
        $user = new Client();
        $user->fname = $data['fname'];
        $user->lname = $data['lname'];
        $user->email = $data['email'];
        $user->phone = $data['phone'] ?? '';
        // $user->address = $data['address'];
        $user->password = Hash::make($data['password']);
        // $user->save();
        if ($user->save())
            event(new NewClientHasRegisteredEvent($user));
        // sendWelcomeMailJob::dispatchNow($user);
        // sendWelcomeMailJob::dispatch($user);
        return response()->json(['message' => 'Account created successfully']);
    }

    //login
    public function Login(Request $request)
    {
        //Get login credentials from request
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        $token = auth('api')->attempt($credentials);
        if (!$token) {
            //return error message
            return response()->json(['error' => 'Invalid email address or Password'], '401');
        }

        //    if (is_null($user->email_verified_at)) {
        //        return response()->json(['error' => "Your email is not verified",'is_not_verified'=>$user->slug]);
        //    }

        return $this->respondWithToken($token);
    }

    public function me()
    {
        return response()->Json($this->guard()->user());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'Access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => auth('api')->user()
        ]);
    }
    public function refresh()
    {
        return $this->respondWithToken($this->guard()->refresh());
    }
    public function verify($token)
    {
    }
    public function logout()
    {
        $this->guard()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function guard()
    {
        return Auth::guard('api');
    }
}
