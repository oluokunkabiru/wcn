@extends('users.admin.layouts.app')
@section('title', 'Update book title')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Update : {{ ucwords($book->title) }}</h1>
        </div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form action="{{ route('books.update', $book->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="usr">Book title:</label>
                                <input type="text" value="{{ $book->title, old('title') }}"
                                    class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="title">
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="usr">Book picture:</label>
                                <input type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                    name="image">
                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="comment">Book description</label>
                                <textarea class="form-control blogarea {{ $errors->has('content') ? ' is-invalid' : '' }}"
                                    rows="3" name="content">
                        {!! $book->description, old('content') !!}
                        </textarea>
                                @if ($errors->has('content'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary text-uppercase">Add update</button>
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
