<?php

namespace App\Model;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'image',
        'images',
        'video',
        'link',
        'time'
    ];
    protected $casts = [
        'images'
    ];
    public function comment()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function category() {
        return $this->belongsTo(Category::class,'categories_id');
    }
}
