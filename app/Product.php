<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Product extends Model implements Searchable
{
    protected $fillable =[
        'name',
        'product_image',
        'description',
        'quantity',
        'brand',
        'price',
        'Sku',
        'content',
        'product_image',
        'slug',
        'type',
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
    
    public function getSearchResult(): SearchResult
    {
        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->name
        );
    }
}
