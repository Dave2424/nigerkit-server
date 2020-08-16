<?php
namespace App\Http\Controllers\Store;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserCart;

class StoreHelperController extends  Controller {

    public static function getCartItems()
    {
        if (auth()->check()) {
            $user_id = auth()->user()->id;
            return UserCart::with('product.Reviews','Sku')->where('user_id','=',$user_id)->get();
        }
        return [];
    }
}
?>