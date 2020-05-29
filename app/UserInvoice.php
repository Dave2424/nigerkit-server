<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInvoice extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'items' => 'array'
    ];
}
