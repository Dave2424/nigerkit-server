<?php

namespace App\Model;

use App\Category;
use App\Tag;
use App\Sku;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'image',
        'images',
        'video',
        'slug',
        'link',
        'time'
    ];
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
}
