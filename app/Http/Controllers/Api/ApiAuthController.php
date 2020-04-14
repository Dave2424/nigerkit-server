<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

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
}
