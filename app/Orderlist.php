<?php

namespace App;

use App\Model\client;
use Illuminate\Database\Eloquent\Model;

class Orderlist extends Model
{
    // Flag shows if the product has been shipped or not. with (1,0)
    protected $fillable = [
        'identifier_id',
        'cart_id',
        'client_id',
        'buyer_email',
        'buyer_name',
        'buyer_address',
        'buyer_phone',
        'status',
        'amount'
    ];
    
    public function client() {
        return $this->belongsTo(client::class, 'client_id');
    }
    public function userInvoice() {
        return $this->belongsTo(UserInvoice::class, 'identifier_id','order_id');
    }
    public function userCart() {
        // return $this->
    }
}
