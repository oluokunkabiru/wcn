@extends('users.admin.layouts.app')
@section('title', 'Upload blogs')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create new blog</h1>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h2>Blog Title</h2>
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form action="{{ route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="usr">Blog title:</label>
                                <input type="text" value="{{ $blog->title }}"
                                    class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="title">
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="usr">Blog image:</label>
                                <input type="file" accept="image/*"
                                    class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">
                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

                            {{ csrf_field() }}
                            @method("PATCH")
                            <div class="form-group">
                                <label for="content">Blog content</label>
                                <textarea class="form-control blogarea {{ $errors->has('content') ? ' is-invalid' : '' }}"
                                    rows="3" name="content">
                    {!! $blog->content !!}
                    </textarea>
                                @if ($errors->has('content'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary text-uppercase">Add blog</button>
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
                    if (confirm("Are you sure you want delete this image, deletion can not be refers again")) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            data: {
                                src: extr
                            },
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
