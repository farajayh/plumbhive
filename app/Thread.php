<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Thread extends Model
{
    //use CommentableTrait,SearchableTrait;

    protected $fillable=['subject', 'thread','user_id', 'thread_slug'];
    //protected $fillable=['subject', 'thread','user_id'];

    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'comments.body'=>10,
            'threads.subject' => 8,
            'threads.thread' => 8,
             'users.name' => 1,
        ],
         'joins' => [
             'users' => ['users.id','threads.user_id'],
             'comments' => ['comments.id','comments.commentable_id','comments.commentable_type','App\Thread'],
         ],
    ];
    
    public function getPreviewAttribute(){
        return Str::limit($this->thread, 500, '...');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
    

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'tag_thread');
    }
}
