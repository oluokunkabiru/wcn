


@extends('layouts.app')
@section('title', 'Ministers')
@section('style')
    <style>

    </style>
@endsection
@section('content')


    <section>
    <div class="jumbotron">

        <div class="row">
            @foreach ($ministers as $minister)
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block shadow-xl border-radius-xl">
                            <img style="height: 300px; width:100%" src="{{ $minister->getMedia('avatar')->first()->getFullUrl() }}" alt="img-blur-shadow"
                                class="img-fluid shadow border-radius-xl">
                        </a>
                    </div>

                    <div class="card-footer">
                         <div class="d-flex align-items-center justify-content-between">
                            <a about ="{{ $minister->about }}"  name ="{{ $minister->name }}"  style="border: #dba928 solid ; width:100%" class="text-center mx-2" href="#about" data-toggle="modal">
                                <h6 class="text-dark font-weight-bold">{{ ucwords($minister->name) }}</h6>
                                <p class="text-dark">{{ ucwords($minister->position) }}</p>
                            </a>

                            </div>
                    </div>
                </div>
            </div>
            @endforeach


            </div>
\        </div>
    </div>
    <div class="modal" id="about">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase">About <span id="minis"></span> </h4>
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
        $('#about').on('show.bs.modal', function(e) {
            var name = $(e.relatedTarget).attr('name');
            var about = $(e.relatedTarget).attr('about');

            $("#full").html(about);
            $("#minis").text(name);

        })
    </script>

@endsection


