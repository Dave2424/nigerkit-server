<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockInventory extends Model
{
    protected  $guarded = ['id'];
    public function product(){
        return $this->belongsTo(StoreItems::class,'product_id');
    }

    public function supplier(){
        return $this->belongsTo(Suppliers::class,'supplier_id');
    }
}
