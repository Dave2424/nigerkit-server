<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'name',
        'description',
        'quantity',
        'brand',
        'Sku',
        'content',
        'category_id',
        'files'
    ];
}
