<div class="card text-white bg-light mb-4 shadow" style="border-top: 4px solid #218838">
    <div class="card-header px-2 pb-0 pt-1">
        <div>
            <form method="POST" action="/posts" enctype="multipart/form-data">
                @csrf
                <textarea name="title" style="background:##E5E5E5" placeholder="Title"
                          class="mt-1 form-control form-control-sm"></textarea>
                <textarea name="body" style="background:##E5E5E5" placeholder="Post something"
                          class="mt-2 form-control form-control-lg" required></textarea>

                <hr class="my-1">

                <div class="d-flex justify-content-between">
                    <input type="file" name="image" style="outline: none"/>
                    <button type="submit" class="btn btn-success mb-2 px-4" style="float:right">Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
