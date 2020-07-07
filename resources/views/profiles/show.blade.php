@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card" >
            <div class="card-header">
            <h1>Profile page for {{ $user->name }}</h1>
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
