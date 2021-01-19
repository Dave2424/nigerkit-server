<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    public $table = "skus";
    protected $fillable = ['sku_no'];
}
