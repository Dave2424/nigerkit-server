<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use App\Category;
use App\Tag;

class Product extends Model implements Searchable
{
    protected $guarded = ['id'];

    protected $casts = [
        'files' => 'array'
    ];

    // public function Sku() {
    //     return $this->belongsTo(Sku::class, 'Sku');
    // }

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
    
    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function categories(){
        return $this->morphToMany(Category::class, 'categorizable');
    }
}
