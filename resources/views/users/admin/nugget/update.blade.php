@extends('users.admin.layouts.app')
@section('title', "Edit nugget")
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1>Edit nugget</h1>
      <div class="card">
          <div class="card-header">

          </div>
          <div class="card-body">
              <form action="{{ route('nugget.update', $nugget->id) }}" enctype="multipart/form-data" method="post">
              @csrf
              @method('PATCH')
                <div class="form-group">
                    <label for="comment">Nugget Qoute</label>
                    <textarea class="form-control blogarea {{ $errors->has('content') ? ' is-invalid' : '' }}" rows="3" name="content">
                    {{ $nugget->qoute, old('content') }}
                    </textarea>
                    @if ($errors->has('content'))
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('content') }}</strong>
                    </span>
                    @endif
                    </div>
                    <button type="submit" class="btn btn-primary text-uppercase">update nugget</button>
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
      ],
      callbacks: {
            // },
            // callbacks: {
            onMediaDelete: function(target) {
                deleteFile(target[0].src);
            }
        },

    })
    function deleteFile(src) {
        // alert(src);
        var pos = src.search("uploads");
        extr = src.slice(pos);
        if(confirm("Are you sure you want delete this image, deletion can not be refers again")){
        $.ajax({
            headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            data: { src: extr },
            type: "POST",
            url: "{{ route('delete-image-from-blog') }}",
            cache: false,
            success: function(response) {
                // alert(response);
            }
        })
        }
    }

  })
</script>
@endsection
