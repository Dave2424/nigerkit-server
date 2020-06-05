<?php

namespace App;

use App\Model\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category'
    ];
    public function post() {
        return $this->belongsTo(Post::class,'id');
    }
}
