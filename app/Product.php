<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use App\Category;
use App\Tag;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model implements Searchable
{
    use SoftDeletes;
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
    public function tagsToSting(){
        $arrTag = [];
        foreach($this->tags as $tag){
            $arrTag[] = $tag->name;
        }
        return implode(", ",$arrTag);
    }
    

    public function categoriesToSting(){
        $arrCat = [];
        foreach($this->categories as $cat){
            $arrCat[] = $cat->category;
        }
        return implode(", ",$arrCat);
    }

    public function syncTags($tag){
        $tags = explode(", ",$tag);
        $tag_ids = [];
        if(count($tags)> 0){
            foreach($tags as $tag){
                $saveTag = Tag::getTag($tag);
                $tag_ids[] = $saveTag->id;
            }
            $this->tags()->sync($tag_ids);
        }

        return $tag_ids;
    }

    public function syncCategories($category){
        $categories = explode(", ",$category);
        $cat_ids = [];
        if(count($categories)> 0){
            foreach($categories as $cat){
                $saveCat = Category::getCategory($cat);
                $cat_ids[] = $saveCat->id;
            }
            $this->categories()->sync($cat_ids);
        }
        return $cat_ids;
    }

    public function productInventories(){
        return $this->hasMany(StockInventory::class,'product_id');
    }

    public function activeProductInventories(){
        return $this->productInventories()->whereStatus(1)->first();
    }
}
