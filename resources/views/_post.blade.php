<div class="m-2">
    <div class="card">
        <h5 class="card-header">{{ $post->user->name}}</h5>
        <div class="card-body">
             <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->body }}</p>
        </div>
        <hr class="my-1">
        <form action="/posts/{{ $post->id }}/edit">
            <button type="submit" class="btn btn-outline-secondary m-2 px-4" style="float:right">Edit</button>
        </form>
    </div>
</div>