<?php

namespace App\Model;

use App\Category;
use App\Tag;
use App\Sku;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];
    protected $casts = [
        'images'=> 'array',
    ];

    public function comment()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function category() {
        return $this->belongsTo(Category::class,'categories_id');
    }

    /**
     * Get all of the tags for the post.
    */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
    
     /**
     * Get all of the tags for the post.
     */
    public function categories()
    {
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
}
