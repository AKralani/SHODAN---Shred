<div class="m-2">
    <div class="card">
    <a href="{{ route('profile', $post->user) }}" class="text-decoration-none">
        <h5 class="card-header">{{ $post->user->name}}</h5></a>
        <div class="card-body">
             <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->body }}</p>
        </div>
        <hr class="my-1">
        <div class="form" class="inline-text">
        <form action="/posts/{{ $post->id }}/edit">
            <button type="submit" class="btn btn-outline-secondary m-2 px-4" style="float:right">Edit</button>
        </form>
        <form action="{{ route('posts.destroy', $post->id)  }}" method="post">
            @csrf
            @method('DELETE')

            <input type="submit"  name="submit"  value="Delete" class="btn btn-outline-danger m-2 px-4" style= "float:right" >

        </form>
        </div>
    </div>
</div>