<div class="m-2">
    <div class="card">
    <a href="{{ route('profile', $post->user) }}" class="text-decoration-none">
        <h5 class="card-header">{{ $post->user->name}}</h5></a>
        <div class="card-body">
             <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->body }}</p>
        </div>
    </div>
</div>