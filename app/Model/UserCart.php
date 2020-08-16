<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Sku;

class UserCart extends Model
{
    protected  $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
    public function Sku() {
        return $this->belongsTo(Sku::class,'sku_id');
    }
}
