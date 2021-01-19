<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner_sr extends Model
{
    public $table = "banner_sr";
    protected $fillable = [
        'pictures',
        'details'
    ];
}
