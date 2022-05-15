@extends('users.members.layouts.app')
@section('title', 'Create new testimony')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create new testimony</h1>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form action="{{ route('testimony.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="comment">Testimony</label>
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
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="anonymous">
                                <label class="custom-control-label" for="customCheck">Stay Anonymous</label>
                            </div>
                            <button type="submit" class="btn btn-primary text-uppercase">Add testimony</button>
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
                        ['insert', ['link']],
                        ['view', ['fullscreen', 'help', 'undo', 'redo']],
                    ]

                })

            })
        </script>
    @endsection
