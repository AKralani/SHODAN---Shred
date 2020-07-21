

<!-- <div class="card bg-secondary"> -->

<div class="card-header text-white bg-dark">Hot topics</div>
    <div class="card-body text-center" style="background:#a4a4a4">
    
    <!-- GET POST WITH MOST REPLIES (comments) -->

    @foreach ($hotposts as $post)
    <a href="{{ route('post.show', $post->id ) }}" class="text-decoration-none text-dark">
    <h4>{{$post->title}}</h4>
    <p>{{ Str::limit($post->body, 80) }}</p>
    </a>
    <hr>

    @endforeach
        
    


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