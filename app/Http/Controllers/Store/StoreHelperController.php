<?php
namespace App\Http\Controllers\Store;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserCart;

class StoreHelperController extends  Controller {

    public static function getCartItems($user_id)
    {
    $data_cart = [];
        $usercart = UserCart::with('product.Reviews')->where('user_id', '=', $user_id)->get();
        $usercart->mapToGroups(
            function ($item) use (&$data_cart, &$user_id) {
                $data = [];
                $data['product'] = $item->product;
                $data['product_id'] = $item->product->id;
                $data['sku_id'] = $item->Sku;
                $data['user_id'] = $user_id;
                $data['quantity'] = $item->quantity;
                $data['amount'] = $item->amount;
                array_push($data_cart, $data);
                return $data_cart;
            });
            return $data_cart;
        
    }
}
