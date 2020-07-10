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
        </a>
        </div>
        <div class="card-body text-dark" style="background:#a4a4a4">
             <div class="card-title"><h3>{{ $post->title }}</h3></div>
            <p class="card-text">{{ $post->body }}</p>
        </div>
        <div class="form rounded-bottom" class="inline-text" style="background:#a4a4a4">
        <form action="/posts/{{ $post->id }}/edit">
            <button type="submit" class="btn btn-primary m-2 px-4" style="float:right">Edit</button>
        </form>
        <form action="{{ route('posts.destroy', $post->id)  }}" method="post">
            @csrf
            @method('DELETE')

            <input type="submit"  name="submit"  value="Delete" class="btn btn-danger m-2 px-4" style= "float:right" >
        </form>
        <p class="m-3 text-dark"> {{ $post->created_at->diffInHours() }} Hours ago</p>
        </div>
    </div>
</div>