@extends('users.admin.layouts.app')
@section('title', "update Event title")
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1>Update event title</h1>
      <div class="card">
          <div class="card-header">

          </div>
          <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                    <label for="usr">Event title:</label>
                    <input type="text" class="form-control" id="usr">
                  </div>
                  <div class="form-group">
                    <label for="usr">Event date:</label>
                    <input type="date" class="form-control" id="usr">
                  </div>
                <div class="form-group">
                    <label for="comment">Event description</label>
                    <textarea class="form-control blogarea" rows="3" name="content"></textarea>
                    <span class="text-danger">
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary text-uppercase">Add add new event</button>
              </form>
          </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
<script>
    $(function () {
    //Initialize Select2 Elements
    $('.blogarea').summernote({
      height: 100,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear', 'superscript', 'subscript']],
        ['color', ['color']],
        ['para', ['ol', 'ul', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture']],
        ['view', ['fullscreen', 'help', 'undo', 'redo']],
      ]

    })

  })
</script>
@endsection
