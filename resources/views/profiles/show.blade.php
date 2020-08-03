@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card text-dark shadow-lg">
            <div class="card-header shadow inline-text" style="border-top: 4px solid #218838">
            <img src="{{ $user->avatar }}"
                  alt="foto"
                  class="m-2 rounded-circle mr-2 absolute bottom-0"
                  style="float:left"
                  width="150"
            >
                <div class="header p-5" style="float:left" >
                    <h1>{{ $user->name }}</h1>

                    <h3>{{ $user->description }}</h3>


                    <!--<h3>Lorem ipsum some bio or whatever</h3>
                    <p>Joined at {{ $user->created_at->diffForHumans() }}</p>

                    <a href="{{ route('profiles.profile') }}" class="btn btn-primary btn-block">Edit</a>-->


                    <h3>My bio{{ $user->about }}</h3>
                    <p class="lead">Joined at {{ $user->created_at->diffForHumans() }}</p>

                <div class="flex">
                    @can ('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="rounded-full btn btn-outline-secondary">Edit profile</a>
                    @endcan
                </div> 

                @if (auth()->user()->isNot($user)) 
                <form method="POST"  action="/profiles/{{ $user->name }}/follow"
>
                   @csrf

           <button type="submit"   class="rounded-full btn btn-outline-secondary" >
        {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
           </button>
                </form>
                @endif

                </div>
            </div>
            
        </div>
        <div class="card-body">
                 @include('_timeline', [
                    'posts' => $posts
                ])
            </div>
</div>
</div>
</div>
@endsection
