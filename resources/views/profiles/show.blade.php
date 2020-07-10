@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card bg-dark text-light shadow-lg">
            <div class="card-header bg-dark shadow" class="inline-text">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg"
                  alt=""
                  class="m-2 rounded-circle mr-2 absolute bottom-0"
                  style="float:left"
                  width="150"
            >
                <div class="header p-5" style="float:left">
                    <h1>Profile page for {{ $user->name }}</h1>
                    <h3>Lorem ipsum some bio or whatever</h3>
                    <p>Joined at {{ $user->created_at->diffForHumans() }}</p>
                </div>
            </div>
            <div class="card-body" style="background:#a4a4a4">
                 @include('_timeline', [
                    'posts' => $user->posts
                ])
            </div>
        </div>
</div>
</div>
</div>
@endsection
