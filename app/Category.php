<?php

namespace App;

use App\Model\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    /**
     * Get all of the posts that are assigned this tag.
     */
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'categorizable');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function products()
    {
        return $this->morphedByMany(Product::class, 'categorizable');
    }
}
