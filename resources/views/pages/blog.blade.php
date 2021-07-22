
@extends('layouts.app')
@section('title', 'Gallery')
@section('style')
    <style>


    </style>
@endsection
@section('content')


    <section>
    <div class="container">

        <div class="row">
            @for ($i = 0; $i < 10; $i++)
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                            <img src="../assets/img/home-decor-1.jpg" alt="img-blur-shadow"
                                class="img-fluid shadow border-radius-xl">
                        </a>
                    </div>
                    <div class="card-body px-1 pb-0">
                        <a href="javascript:;">
                            <h5>
                                Modern <span class="fa fa-comment">he</span>
                            </h5>
                        </a>
                        <p class="mb-4 text-sm">
                            As Uber works through a huge amount of internal management turmoil.
                        </p>
                        <div class="d-flex float-right">
                            {{--  <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                Project</button>  --}}
                                <a href="{{ route('blogs.show', 1) }}" data-toggle="tooltip" title="Read full content" class="btn btn-warning"><span class="fa fa-angle-double-right display-5"></span></a>

                        </div>
                    </div>
                </div>
            </div>
            @endfor
            </div>
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
