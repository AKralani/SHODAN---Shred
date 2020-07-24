

<!-- <div class="card bg-secondary"> -->
<div class="card shadow text-center">
    <div class="text-dark lead pt-3">Hot topics</div>
    <hr>
    <div class="card-body" style="background:#fff">
    
    <!-- GET POST WITH MOST REPLIES (comments) -->

    @foreach ($hotposts as $post)
    <a href="{{ route('post.show', $post->id ) }}" class="text-decoration-none text-dark">
    <h4 lead>{{$post->title}}</h4>
    @if($post->image)
        <img class="mb-2 rounded" src="{{ $post->image  }}"
             style="max-width: 150px; object-fit: cover;"/>
    @endif
    <p lead>{{ Str::limit($post->body, 80) }}</p>
    </a>
    <hr>

    @endforeach
    </div>  
    


<!-- <div class="card-body text-center" style="background:#a4a4a4">
    <p class="mb-2">Post with most votes/likes</p>
    <a href="#" class="text-decoration-none text-reset">
    <div class="pic mb-2">
    <img src="https://via.placeholder.com/150" alt="">
    <h4 class="my-2">Lorem Ipsum</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error tenetur deserunt quasi numquam laboriosam aut ratione quae, esse deleniti reiciendis.</p>
    </div>
    </a>
    <hr>
    <a href="#" class="text-decoration-none text-reset">
    <div class="pic mb-2">
    <img src="https://via.placeholder.com/150" alt="">
    <h4 class="my-2">Lorem Ipsum</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error tenetur deserunt quasi numquam laboriosam aut ratione quae, esse deleniti reiciendis.</p>
    </div>
    </a>
    <hr>
    <a href="#" class="text-decoration-none text-reset">
    <div class="pic mb-2">
    <img src="https://via.placeholder.com/150" alt="">
    <h4 class="my-2">Lorem Ipsum</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error tenetur deserunt quasi numquam laboriosam aut ratione quae, esse deleniti reiciendis.</p>
    </div>
    </a>
</div> -->
</div>