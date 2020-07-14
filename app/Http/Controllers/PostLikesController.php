<?php

namespace App\Http\Controllers;

use App\Post;

class PostLikesController extends Controller
{
    public function store(Post $post)
    {
        $post->like(\Auth::user());

        return back();
    }

    public function destroy(Post $post)
    {
        $post->dislike(\Auth::user());

        return back();
    }
}
