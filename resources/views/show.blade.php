<!-- THIS ONE SHOWS COMMENTS -->
@extends('layouts.app')

<style>
    .display-comment .display-comment {
        /* margin-left: 40px;
        border: 1px solid grey; */
        padding-left: 7px;  
        border-left: solid #8b8b8b 4px;
         
    }
</style>

@section('content')
<div class="container">
    <div class="row">

    <div class="col-md-2">
            <div class="card bg-secondary">
                @include ('_Tema') 
            </div>
        </div>

        <div class="col-md-7">
            <div class="card bg-dark">
                <div class="card-body">
                    <div class="p-2 rounded" style="background:#a4a4a4" >
                    <div class="d-flex flex-row pl-2">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg"
                        alt=""
                        class="rounded-circle absolute bottom-0"
                        width="60"
                    >
                    
                    <a href="{{ route('profile', $post->user) }}" class="text-decoration-none" style="color:black">
                    <h1 class="my-2 px-3">{{ $post->user->name}}</h1>
                    </a>
                    <div class="ml-auto">
                    <p class="my-3">{{ $post->created_at->diffForHumans() }}</p>
                    </div>
                    </div>

                    <hr>
                    
                    <div class="p-3"> <!-- FLOAT RIGHT -->
                    <h3>{{ $post->title }}</h3>

                    @if($post->image)
                        <img class="mb-2 rounded" src="{{ $post->image  }}"
                             style="width: 200px; height: 200px; object-fit: cover;"/>
                    @endif

                    <h4>
                        {{ $post->body }}
                    <h4>
                    </div>
                    @auth
                    <x-like-buttons :post="$post"/>
                    @endauth
                    
                    <hr>
                    
                    <!-- Display Comments -->
                    <!-- <h4 class="text-white">Display Comments</h4> -->
                    <!-- remember this how we made it possible to use the variables here without messing with the controller-->
                    @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
                    

                    <!-- @foreach($post->comments as $comment)
                        <div class="display-comment">
                            <strong>{{ $comment->user->name }}</strong>
                            <p>{{ $comment->body }}</p>
                        </div>
                        <hr>
                    @endforeach -->
                    


                    <!-- Form to add comments -->
                    <h4 class="text-white mt-4">Add comment</h4>
                    <form id="comment_submit" method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="comment_body" class="form-control" required />
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Add Comment" />
                        </div>
                    </form>


                </div>
            </div>
        </div>

        

    </div>
    <div class="col-md-3">
            <div class="card bg-secondary">
            @include ('_Hot')
            </div>
        </div>
</div>
@endsection

<script>

// $('comment_submit').submit(function( event ) {
//     event.preventDefault();
//     $.ajax({
//         url: '/post/show/{id}',
//         type: 'post',
//         data: $('comment').serialize(), // Remember that you need to have your csrf token included
//         dataType: 'json',
//         success: function( response ){
//             // Handle your response..
//         },
//         error: function( response ){
//             // Handle error
//         }
//     });
// });


    </script>