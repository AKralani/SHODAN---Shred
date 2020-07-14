<!-- _comment_replies.blade.php -->

@foreach($comments as $comment)
    <div class="display-comment p-2 rounded" style="background:#a4a4a4">
    <a href="{{ route('profile', $post->user) }}" class="text-decoration-none" style="color:black">
        <strong>{{ $comment->user->name }}</strong>
        </a>
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('reply.add') }}">
            @csrf
            <div class="form-group inline-text">
                <input type="text" name="comment_body" class="form-control" required/>
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            
                <input type="submit" class="btn btn-primary btn-sm float-right" value="Reply" />

            <!-- <hr> -->
        </form>
        <!-- DELETE -->
        
        <form action="{{ route('comment.destroy', $comment->id)  }}" method="post">
            @csrf
            @method('DELETE')
            
            <input type="submit"  name="submit"  value="Delete" class="btn btn-danger btn-sm float-right mr-2" >

        </form>
        
        @include('partials._comment_replies', ['comments' => $comment->replies])
    </div>
@endforeach