<div class="card bg-light mb-3 px-2" >

            <!-- Qitu me qit Post smth -->
                <div>
                    <form method="POST" action="/posts">
                    @csrf 
                        <textarea name="title" style="min-width: 100%" placeholder="Titulli" class="mt-1">
                        </textarea>
                        <textarea name="body" style="min-width: 100%" placeholder="Post something" class="mt-2" required>
                        </textarea>
                    

                    <hr class="my-1">

                    <button type="submit" class="btn btn-outline-secondary m-2 px-4" style="float:right">Post</button>
                    </form>
                </div>

            </div>