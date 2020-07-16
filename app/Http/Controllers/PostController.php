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

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:posts',
            'title' => 'required',
            'body' => 'required',
        ]);
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        //$post->update($this->validatePost());

        return back();
    }

    public function destroy(Post $post)
    {
        
        $post->delete();
        return redirect('/')->with('success', 'Post removed');
    }

    // kod i ri, nashta nuk e perdori hiq
    public function index()
    {
    $posts = Post::all();

    return view('index', compact('posts'));
    }
// kta e kom perdor
    public function show($id)
    {
    $post = Post::find($id);

    return view('show', compact('post'));
    }
    
}

