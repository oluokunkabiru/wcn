@extends('users.admin.layouts.app')
@section('title', 'Manage books')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Manage books</h1>
        </div>
        <a href="{{ route('books.create') }}" class="btn btn-dark"> Publish new book</a>
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-1">Recent post</h6>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success! </strong> {{ session('success') }}
                </div>
            @endif
            <div class="card-body p-3">

                <div class="row">
                    {{-- @for ($i = 0; $i < 8; $i++) --}}
                    @foreach ($books as $book)
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img style="height: 150px; width:100%"
                                            src="{{ $book->getMedia('books')->first()->getFullUrl() }}"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0" style="height: 200px; overflow:hidden">
                                    <a href="javascript:;">
                                        <h5>
                                            {{ $book->title }}
                                        </h5>
                                    </a>
                                    {!! $book->description !!}

                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center justify-content-between">
                                        {{-- <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                    Project</button> --}}
                                        <a href="{{ route('books.show', 1) }}" title="Read book description"
                                            class="btn btn-success  "><span class="fa fa-eye"></span></a>
                                        <a href="{{ route('books.edit', $book->id) }}" title="Edit book details"
                                            class="btn btn-primary  "><span class="fa fa-edit"></span></a>
                                        <a href="#deleteimage" class="btn btn-danger"
                                            delete-url="{{ route('books.destroy', $book->id) }}"
                                            imgsrc="{{ $book->getMedia('books')->first()->getFullUrl() }}"
                                            data-toggle="modal" title="Delete book"><span class="fa fa-trash"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- @endfor --}}
                    {{ $books->links() }}
                </div>


            </div>
        </div>


    </section>
 <div class="modal" id="deleteimage">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-uppercase">are sure you want delete below image</h4>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <img src="" id="deleteimgscr" class="card-image img-fluid" alt="">
                        <form id="deletecategoryform" action="#" method="POST">

                            {{ csrf_field() }}
                            @method("DELETE")
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger text-uppercase">delete</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
    @section('script')
        <script>
            $(document).ready(function() {
                $('[title="tooltip"]').tooltip();
                $('#deleteimage').on('show.bs.modal', function(e) {
                    var myimgage = $(e.relatedTarget).attr('imgsrc');
                    var url = $(e.relatedTarget).attr('delete-url');
                    // $("#delname").text(mycat);
                    $("#deletecategoryform").attr("action", url);
                    $("#deleteimgscr").attr("src", myimgage);
                })

            });
        </script>
    @endsection
