<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    
    public function store() {

        $attributes = request()->validate(['body'=> 'required']);

        Post::create([
            'user_id' => auth()->id(),
            'title' => request('title'),
            'body' => $attributes['body']
        ]);

        return redirect('/');
    }
}
