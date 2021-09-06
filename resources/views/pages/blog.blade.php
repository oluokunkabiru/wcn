
@extends('layouts.app')
@section('title', 'Gallery')
@section('style')
    <style>


    </style>
@endsection
@section('content')


    <section>
    <div class="container mb-2">

        <div class="row">
            @foreach ($blogs as $blog )




            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                            <img style="height: 150px; width:100%" src="{{ $blog->getMedia('blogs')->first()->getFullUrl() != "" ?   $blog->getMedia('blogs')->first()->getFullUrl():"../assets/img/home-decor-1.jpg" }}" alt="{{ $blog->title }}"
                                class="img-fluid shadow border-radius-xl">
                        </a>
                    </div>
                    <div class="card-body px-1 pb-0" style="height: 200px; overflow:hidden">
                        <a href="javascript:;">
                            <h5>
                                {{ $blog->title }} <span class="fa fa-comment text-danger mx-2">{{ $blog->getNumbersOfComment($blog->id) }}</span>
                            </h5>
                        </a>
                            {!! $blog->getLimitedContent($blog->content) !!}

                    </div>
                    <div class="card-footer float-right">
                        <div class="d-flex align-items-center justify-content-between">
                            {{--  <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                Project</button>  --}}
                                <a href="{{ route('readblog', [$blog->id, str_replace(" ", '_', $blog->title)]) }}" data-toggle="tooltip" title="Read full content" class="btn btn-success  ">... Continue reading</a>

                        </div>
                    </div>
                </div>
            </div>
         @endforeach
            </div>
            {{-- <div class="card"> --}}
                <div class="float-right my-2">
                    {{ $blogs->links() }}
                </div>
            {{-- </div> --}}

        </div>
    </div>
    </section>
@endsection
@section('script')
    <script>
  $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

    </script>
@endsection
