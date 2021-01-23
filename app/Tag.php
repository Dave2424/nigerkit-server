<?php

namespace App;

use App\Model\Post;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = ['id'];

    private function primaryId(): string{
        return (string)$this->getAttribute($this->primaryKey);
    }

    public static function columns() {
        return \Schema::getColumnListing('tags');
    }

    /**
     * Get all of the posts that are assigned this tag.
     */
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function products()
    {
        return $this->morphedByMany(Product::class, 'taggable');
    }
}
