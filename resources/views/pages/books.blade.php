
@extends('layouts.app')
@section('title', 'Book Shop')
@section('style')
    <style>

    </style>
@endsection
@section('content')


    <section>
    <div class="container">

        <div class="row">
            @foreach ($books as $book)
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                            <img style="height: 150px; width:100%" src="{{ $book->getMedia('books')->first()->getFullUrl() }}" alt="img-blur-shadow"
                                class="img-fluid shadow border-radius-xl">
                        </a>
                    </div>
                    <div class="card-body px-1 pb-0" style="height: 200px; overflow:hidden">
                        <a href="javascript:;">
                            <h5>
                               {{ ucwords($book->title )}}
                            </h5>
                            <small>{{ $book->created_at }}</small>
                        </a>
                        {!! $book->getLimitedContent($book->description) !!}

                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#bookdetails"
                            username="{{ ucwords($book->title )}}"
                            img="{{ $book->getMedia('books')->first()->getFullUrl() }}"
                              testimony="{{  $book->description  }}" data-toggle="modal"  style="border: #dba928 solid " class="text-center mx-2 p-2 text-dark">
                                Full details <span class="fa fa-address-book-o"></span>
                            </a>
                            </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
            {{ $books->links() }}
        </div>
    </div>
    <div class="modal" id="bookdetails">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase">Book </h4>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body ">
                    <div class="row">
                        {{-- <div class="col-4"> --}}
                        {{--  <img src="" style="width: 200px" class="card-img rounded" id="userimg" alt="">  --}}
                        {{-- <div class="card"> --}}
                        {{--  <h5 class="text-center my-1" id="username"></h5>  --}}
                        {{-- </div> --}}
                        {{-- </div> --}}
                        <div class="container">
                            <span id="full"></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
@section('script')
    <script>
        $('#bookdetails').on('show.bs.modal', function(e) {
            var name = $(e.relatedTarget).attr('username');
            var img = $(e.relatedTarget).attr('img');
            var testimony = $(e.relatedTarget).attr('testimony');
            $("#full").html(testimony);
            $("#username").text(name);
            $("#userimg").attr("src", img);

        })
    </script>

@endsection
