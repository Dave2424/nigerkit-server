<?php
namespace App\Http\Controllers\Store;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Client;

class StoreHelperController extends  Controller {

    public static function getCartItems($user_id)
    {
        $user = Client::find($user_id);
        $data_cart = [];
        
        if($user){
            return $user->cart()->with(['product'])->get();
        }

        return $data_cart;
    }
}
