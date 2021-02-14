<?php

namespace App;

use App\Model\client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orderlist extends Model
{
    use SoftDeletes;
    // Flag shows if the product has been shipped or not. with (1,0)
    protected  $guarded = ['id'];

    public static $cancel = 0;
    public static $pend = 1;
    public static $process = 2;
    public static $ship = 3;
    public static $deliver = 4;
    
    public function client() {
        return $this->belongsTo(client::class, 'client_id');
    }
    public function transaction() {
        return $this->belongsTo(PaystackTransaction::class, 'transaction_id');
    }

    public function userInvoice() {
        return $this->belongsTo(UserInvoice::class, 'identifier_id','order_id');
    }

    public function userCart() {
        // return $this->
    }

    public function activities(){
        return $this->morphMany('App\ActivityLog', 'actable');
    }
}
