<?php
namespace App\Http\Controllers\Store;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserCart;

class StoreHelperController extends  Controller {

    public static function getCartItems($user_id)
    {
    $data = [];
        $usercart = UserCart::with('product.Reviews', 'Sku')->where('user_id', '=', $user_id)->get();
        $usercart->mapToGroups(
            function ($item) use (&$data, &$user_id) {
                $data['product'] = $item->product;
                $data['product_id'] = $item->product->id;
                $data['sku_id'] = $item->sku->id;
                $data['user_id'] = $user_id;
                $data['quantity'] = $item->quantity;
                $data['amount'] = $item->amount;
                return [];
            });
            return $data;
        
    }
}
