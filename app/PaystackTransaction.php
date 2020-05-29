<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaystackTransaction extends Model
{
    protected $guarded = ['id'];
    protected $casts = ['data' => 'array'];
}
