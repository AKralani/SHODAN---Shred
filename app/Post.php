<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use Likable;

    protected $guarded = [];
    
    public function user() 
    {

        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function replies()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    

    // public function counting()
    // {
    //     $posts = Post::withCount(['comment', 'reply'])->get();
    //     return view('posts', compact('users'));
    // }

}
