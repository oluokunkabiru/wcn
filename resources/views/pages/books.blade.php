
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
                            <img style="height: 150px; width:100%" src="{{ $book->getMedia('books')->first()->getUrl() }}" alt="img-blur-shadow"
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
                        {!! $book->description !!}

                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#bookdetails" data-toggle="modal" class="btn btn-outline-primary btn-sm mb-0">
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
    </section>
@endsection
@section('script')
    <script>


    </script>
@endsection
