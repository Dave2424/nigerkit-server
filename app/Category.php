<?php

namespace App;

use App\Model\Post;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\DefaultHelperController;

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

    public static function getCategory($string){
        $slug = DefaultHelperController::makeSlug($string);
        $cat = Category::where('slug', $slug)->first();
        if(!$cat){
            $cat = Category::create([
                'category'=>$string,
                'slug'=> $slug
            ]);
        }
        return $cat;
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function products()
    {
        return $this->morphedByMany(Product::class, 'categorizable');
    }
}
