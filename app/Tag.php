<?php

namespace App;

use App\Model\Post;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\DefaultHelperController;

class Tag extends Model
{
    protected $guarded = ['id'];

    private function primaryId(): string{
        return (string)$this->getAttribute($this->primaryKey);
    }

    public static function columns() {
        return \Schema::getColumnListing('tags');
    }

    public static function getTag($string){
        $slug = DefaultHelperController::makeSlug($string);
        $tag = Tag::where('slug', $slug)->first();
        if(!$tag){
            $tag = Tag::create([
                'name'=>$string,
                'slug'=> $slug
            ]);
        }
        return $tag;
    }

    /**
     * Get all of the posts that are assigned this tag.
     */
    public function posts(){
        return $this->morphedByMany(Post::class, 'taggable');
    }

    /**
     * Get all of the products that are assigned this tag.
     */
    public function products(){
        return $this->morphedByMany(Product::class, 'taggable');
    }
}
