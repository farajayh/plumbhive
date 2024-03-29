<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentable()
    {
        return $this->morpTo();
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
}
