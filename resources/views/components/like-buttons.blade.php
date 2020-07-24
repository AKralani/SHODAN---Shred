<div class="flex col-md-2">
    <form method="POST"
          action="/posts/{{ $post->id }}/like"
    >
        @csrf
        <div class="flex items-center mr-4">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
            <style>button {
                background-color: Transparent;
                background-repeat:no-repeat;
                border: none;
                cursor:pointer;
                overflow: hidden;
                outline:none;
            }
            .butoni-like:hover {
            color: #3490DC;
            }

            .butoni-dislike:hover {
            color: #E3342F;
            }

            .ikona-kalter:hover {
            color: #3490DC;
            }

            .ikona-kuqe:hover {
            color: #E3342F;
            }
            
            .ikona-kalter {
            font-size:35px;
            color:grey;
            }

            .ikona-kuqe {
            font-size:35px;
            color:grey;
            }

            .ikona {
            font-size:35px;
            color:grey;
            }

            </style>

            <button type="submit"
                    class="text-xs butoni-like"
            >
            <i class="fa fa-chevron-circle-up ikona-kalter @if($post->isLikedBy(auth()->user())) ikona-kalter @else ikona @endif"></i>
                {{ $post->likes ?: 0 }}
            </button>
        </div>
    </form>

    <form method="POST"
          action="/posts/{{ $post->id }}/like"
    >
        @csrf
        @method('DELETE')

        <div class="flex items-center">
            
            <button type="submit"
                    class="text-xs butoni-dislike"
            >
            <i class="fa fa-chevron-circle-down ikona-kuqe @if($post->isDislikedBy(auth()->user())) ikona-kuqe @else ikona @endif"></i>
                {{ $post->dislikes ?: 0 }}
            </button>
        </div>
    </form>
</div>