<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInvoice extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'items' => 'array'
    ];

    public function orderlist() {
        return $this->hasOne(Orderlist::class,'order_id');
    }
}
