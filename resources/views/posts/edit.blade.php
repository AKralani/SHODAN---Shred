@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">    
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-2">
            <div class="card">
                @include ('_Tema') 
            </div>
        </div>

        <div id="wrapper">
            <div id="page" class="container">
                <h1 class="heading has-text-weight-bold is-size-4">Update Post</h1>
    
                <form method="POST" action="/posts/{{ $post->id }}">
                    @csrf
                    @method('PUT')
    
                    <div class="field">
                        <label class="label" for="title">Title</label>
    
                        <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{ $post->title }}">
                        </div>
                    </div>
    
                    <div class="field">
                        <label class="label" for="body">Body</label>
    
                        <div class="control">
                            <textarea class="textarea" name="body" id="body">{{ $post->body }}</textarea>
                        </div>
                    </div>
    
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                    </div>
    
                </form>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                @include ('_Hot')
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Update Post</h1>

            <form method="POST" action="/posts/{{ $post->id }}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                    <input class="input" type="text" name="title" id="title" value="{{ $post->title }}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea" name="body" id="body">{{ $post->body }}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

