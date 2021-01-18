<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Info;
use App\Model\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiAccountController extends Controller
{

    // update profile
    public function update(Request $request)
    {
        $data = $request->all();
        $client = client::find($data['id']);
        $client->fname = $data['fname'];
        $client->lname = $data['lname'];
        $client->email = $data['email'];
        $client->address = $data['address'];
        $client->phone = $data['phone'];
        $client->save();
        return response()->json(['message' => 'Profile updated!','user' => $client]);
    }
    public function vatFee() {
        $Vatfee = Info::where('key', 'percentage')->first();
        return response()->json(['vatFee' => $Vatfee]);
    }

    public function updatePasswordData(Request $request, $id)
    {
        $opassword = $request->get('opassword');
        $password = $request->get('npassword');
        $client = client::find($id);
        if (Hash::check($opassword, $client->password)) {
            $client->password = Hash::make($password);
            $client->save();
            return response()->json(['message' => 'Your Account Password has been updated. Next time you login, use it.', 'status' => true]);
        } else {
            return response()->json(['message' => 'Incorrect password provided', 'status'=> false]);
        }

    }
}
