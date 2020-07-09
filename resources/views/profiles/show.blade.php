@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" class="inline-text">
            <img src="https://i.pravatar.cc/150?u=fake@pravatar.com"
                  alt=""
                  class="m-2 rounded-circle mr-2 absolute bottom-0"
                  style="float:left"
                  width="150"
            >
                <div class="header p-5" style="float:left">
                    <h1>Profile page for {{ $user->name }}</h1>
                    <p>Joined at {{ $user->created_at->diffForHumans() }}</p>
                </div>
            </div>
            <div class="card-body">
                 @include('_timeline', [
                    'posts' => $user->posts
                ])
            </div>
        </div>
</div>
</div>
</div>
@endsection
