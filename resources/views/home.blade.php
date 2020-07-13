@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-2">
            <div class="card bg-secondary">
                @include ('_Tema') 
            </div>
        </div>

        <div class="col-md-7">
            @include ('_post-something')

            @include('_timeline')
        
        </div>

        <div class="col-md-3">
            <div class="card bg-dark shadow">
                @include ('_Hot')
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/posts">
                @csrf
                @method('PUT')
                <input name="id" id="id" type="hidden">
                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                    <input class="input form-control" style="min-width: 100%" type="text" name="title" id="title">
                    </div>
                </div>

                <div class="field">
                    <label class="label mt-2" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea form-control form-control-lg" style="min-width: 100%" name="body" id="body"></textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="btn btn-primary my-2 button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

<script>
  $('#edit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var id = button.data('id')
    var title = button.data('title')
    var body = button.data('body')
    
    var modal = $(this)
    modal.find('#id').val(id)
    modal.find('#title').val(title)
    modal.find('#body').val(body)
  })
</script>
@endsection
