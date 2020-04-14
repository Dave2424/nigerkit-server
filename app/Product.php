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
        'price',
        'Sku',
        'content',
        'category_id',
        'files'
    ];
    protected $casts = [
        'files' => 'array'
    ];
}
