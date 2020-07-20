<div>
    <div class="card text-white bg-dark mb-3 shadow">
    <a href="{{ route('profile', $post->user) }}" class="text-decoration-none" style="color:white">
    <div class="card-header inline-text bg-dark">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg"
                  alt=""
                  class="rounded-circle absolute bottom-0"
                  style="float:left"
                  width="50"
            >
            <h2 style="float:left" class="m-2 px-2">{{ $post->user->name}}</h2>
            <p class="m-3 text-light float-right"> {{ $post->created_at->diffForHumans() }}</p>
        </a>
        </div>

        <a href="{{ route('post.show', $post->id ) }}" class="text-decoration-none">
        <div class="card-body text-dark inline-text row no-gutters" style="background:#a4a4a4">
        @auth
        <x-like-buttons :post="$post" class=""/>
        @endauth
             <div class="card-title col-md-10"><h3>{{ $post->title }}</h3>
             {{ $post->body }}
             </div>
            <!-- <p class="card-text d-inline m-auto"></p> -->
        </div>
        </a>

        <div class="form rounded-bottom" class="inline-text" style="background:#a4a4a4">
        
        <hr>
        
        <form action="{{ route('posts.destroy', $post->id)  }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit"  name="submit"  value="Delete" class="btn btn-danger m-2 px-3" style= "float:right" >
            <button type="button" class="btn btn-primary m-2 px-4 float-right" data-toggle="modal" data-target="#edit" data-id="{{ $post->id }}" data-title="{{ $post->title }}" data-body="{{ $post->body }}">Edit</button>
        </form>

        <div class="inline-text">
        <!-- <p class="m-3 text-dark float-left"> {{ $post->created_at->diffForHumans() }}</p> -->
        <!-- <p class="m-3 text-dark float-left"> {{count($post->comments) }} Comments</p> -->
        
        @if(count($post->replies) === 0 )
            <p class="m-3 text-dark float-left">No comments yet</p>
        @elseif (count($post->replies) === 1)
            <p class="m-3 text-dark float-left">{{count($post->replies) }} Comment</p>
        @else
        <p class="m-3 text-dark float-left">{{count($post->replies) }} Comments</p>
        @endif
        </div>


        <!-- @auth
        <x-like-buttons :post="$post" />
        @endauth -->

        </div>
    </div>
</div>

