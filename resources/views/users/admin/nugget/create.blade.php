@extends('users.admin.layouts.app')
@section('title', 'Create nugget')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create new nugget</h1>
        </div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form action="{{ route('nugget.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="usr">Nugget image:</label>
                                <input type="file" accept="image/*"
                                    class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">
                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="comment">Nugget Qoute</label>
                                <textarea class="form-control blogarea {{ $errors->has('content') ? ' is-invalid' : '' }}"
                                    rows="3" name="content">
                        {{ old('content') }}
                    </textarea>
                                @if ($errors->has('content'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary text-uppercase">Add nugget</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    @section('script')
        <script>
            $(function() {
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
