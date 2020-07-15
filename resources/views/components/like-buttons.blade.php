<div class="flex col-md-2">
    <form method="POST"
          action="/posts/{{ $post->id }}/like"
    >
        @csrf
        <div class="flex items-center mr-4 {{ $post->isLikedBy(\Auth::user()) ? 'text-blue-500' : 'text-gray-500' }}">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
            <style>button {
                background-color: Transparent;
                background-repeat:no-repeat;
                border: none;
                cursor:pointer;
                overflow: hidden;
                outline:none;
            }
            button:hover {
            color: #3490DC;
            }</style>

            <button type="submit"
                    class="text-xs"
            >
            <i class="fa fa-chevron-circle-up" style="font-size:20px;color:#3490DC"></i>
                {{ $post->likes ?: 0 }}
            </button>
        </div>
    </form>

    <form method="POST"
          action="/posts/{{ $post->id }}/like"
    >
        @csrf
        @method('DELETE')

        <div class="flex items-center {{ $post->isDislikedBy(\Auth::user()) ? 'text-blue-500' : 'text-gray-500' }}">
            
            <button type="submit"
                    class="text-xs"
            >
            <i class="fa fa-chevron-circle-down" style="font-size:20px;color:#E3342F"></i>
                {{ $post->dislikes ?: 0 }}
            </button>
        </div>
    </form>
</div>