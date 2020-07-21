<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $hotposts = Post::withCount('replies')->orderBy('replies_count', 'desc')->paginate(3);
        // ->orderBy('comments_count', 'desc')
        // ->get();

        return view('home', [
            'posts' => auth()->user()->timeline(),
            'hotposts'=>$hotposts
        ]);   
    } 
    

    public function store()
    {
        $attributes = request()->validate(['body' => 'required']);

        $image = request()->file('image');

        $filename = null;
        if ($image) {
            $filename = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $filename);
        }

        Post::create([
            'user_id' => auth()->id(),
            'title' => request('title'),
            'body' => $attributes['body'],
            'image' => $image ? url("uploads/$filename") : null
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

// kta e kom perdor
    public function show($id)
    {
    $post = Post::find($id);
    $hotposts = Post::withCount('replies')->orderBy('replies_count', 'desc')->paginate(3);
        
    return view('show', compact('post', 'hotposts'));
    }
}

