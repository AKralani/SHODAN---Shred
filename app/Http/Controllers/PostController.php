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

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $post->update($this->validatePost());

        return redirect('/');
    }

    protected function validatePost()
    {
        return request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
    }

    public function destroy(Post $post)
    {
        
        $post->delete();
        return redirect('/')->with('success', 'Post removed');
    }
}
