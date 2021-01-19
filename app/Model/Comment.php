<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    function commentable()
    {
        return $this->morphTo();
    }
    function user() {
        return $this->belongsTo(client::class, 'client_id');
    }

    // private function primaryId(): string
    // {
    //     return (string) $this->getAttribute($this->primaryKey);
    // }
}
