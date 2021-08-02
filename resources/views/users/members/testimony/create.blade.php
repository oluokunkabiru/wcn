@extends('users.members.layouts.app')
@section('title', "Create new testimony")
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1>Create new testimony</h1>
      <div class="card">
          <div class="card-header">

          </div>
          <div class="card-body">
              <form action="{{ route('testimony.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="comment">Testimony</label>
                    <textarea class="form-control blogarea {{ $errors->has('content') ? ' is-invalid' : '' }}" rows="3" name="content">
                    {{ old('content')  }}
                </textarea>
                    @if ($errors->has('content'))
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('content') }}</strong>
                    </span>
                    @endif
                    </div>
                    <button type="submit" class="btn btn-primary text-uppercase">Add testimony</button>
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
