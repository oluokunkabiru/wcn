@extends('users.admin.layouts.app')
@section('title', "Create Event")
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1>Create new event</h1>
      <div class="card">
          <div class="card-header">

          </div>
          <div class="card-body">
            <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="usr">Event title:</label>
                    <input type="text" value="{{ old('title') }}" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="title">
                    @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('title') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="usr">Event Date:</label>
                    <input type="date" value="{{ old('date') }}" class="form-control {{ $errors->has('date') ? ' is-invalid' : '' }}" name="date">
                    @if ($errors->has('date'))
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('date') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="usr">Event image:</label>
                    <input type="file" accept="image/*" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">
                    @if ($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('image') }}</strong>
                    </span>
                    @endif
                </div>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="content">Event Description</label>
                    <textarea class="form-control blogarea {{ $errors->has('content') ? ' is-invalid' : '' }}" rows="3" name="content">
                    {{ old('content') }}
                    </textarea>
                    @if ($errors->has('content'))
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('content') }}</strong>
                    </span>
                    @endif
                    </div>
                    <button type="submit" class="btn btn-primary text-uppercase">Add event</button>
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
        ['insert', ['link']],
        ['view', ['fullscreen', 'help', 'undo', 'redo']],
      ]

    })

  })
</script>
@endsection
