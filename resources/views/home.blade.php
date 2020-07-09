@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-2">
            <div class="card">
                @include ('_Tema') 
            </div>
        </div>

        <div class="col-md-7">
            @include ('_post-something')

            @include('_timeline')
        
        </div>

        <div class="col-md-3">
            <div class="card">
                @include ('_Hot')
            </div>
        </div>
    </div>
</div>
@endsection
