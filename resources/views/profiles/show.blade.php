@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card bg-dark text-light shadow-lg">
            <div class="card-header bg-dark shadow" class="inline-text">
            <img src="/uploads/avatar/{{ $user->avatar }}"
                  alt=""
                  class="m-2 rounded-circle mr-2 absolute bottom-0"
                  style="float:left"
                  width="150"
            >
                <div class="header p-5" style="float:left" >
                    <h1>{{ $user->name }}</h1>

                    <h3>Lorem ipsum some bio or whatever</h3>
                    <p>Joined at {{ $user->created_at->diffForHumans() }}</p>

                    <a href="{{ route('profiles.profile') }}" class="btn btn-primary btn-block">Edit</a>

                    <h3>My profile page{{ $user->about }}</h3>
                    <p>Joined at {{ $user->created_at->diffForHumans() }}</p>
                <div class="flex">
                    @can ('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 py-2 px-2 text-white text-xs mr-2">Edit profile</a>
                    @endcan
                </div>    

                </div>
            </div>
            <div class="card-body" style="background:#a4a4a4">
                 @include('_timeline', [
                    'posts' => $posts
                ])
            </div>
        </div>
</div>
</div>
</div>
@endsection
