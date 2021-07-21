@extends('users.admin.layouts.app')
@section('title', "Create blogs")
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1>Create new blog</h1>
      <div class="card">
          <div class="card-header">

          </div>
          <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                    <label for="usr">Blog title:</label>
                    <input type="text" class="form-control" id="usr">
                  </div>
                <div class="form-group">
                    <label for="comment">Blog content</label>
                    <textarea class="form-control blogarea" rows="3" name="content"></textarea>
                    <span class="text-danger">
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary text-uppercase">Add blog</button>
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
