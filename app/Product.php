<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

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
    public function Sku() {
        return $this->belongsTo(Sku::class, 'Sku');
    }
    public function Reviews() {
        return $this->hasMany(Review::class);
    }
    public function category() {
        return $this->belongsTo(Category::class,'category_id');
    }
}
