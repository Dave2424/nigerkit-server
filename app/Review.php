<?php

namespace App;

use App\Model\client;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'rating',
        'message'
    ];
    public function user() {
        // return $this->belongsToMany('user_id',User::class);
        return $this->belongsTo(client::class,'user_id');
    }
}
