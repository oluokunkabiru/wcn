
@extends('layouts.app')
@section('title', 'Gallery')
@section('style')
    <style>

        .elem,
        .elem * {
            box-sizing: border-box;
            margin: 0 !important;
        }

        .elem {
            display: inline-block;
            font-size: 0;
            width: 100%;
            border: 10px solid transparent;
            border-bottom: none;
            background: #fff;
            /* padding: 10px; */
            height: auto;
            background-clip: padding-box;
        }

        .elem span {
            display: block;
            cursor: pointer;
            height: 100%;
            padding-bottom: 70%;
            background-size: 100%;
            background-position: center center;
        }



        .lcl_fade_oc.lcl_pre_show #lcl_overlay,
        .lcl_fade_oc.lcl_pre_show #lcl_window,
        .lcl_fade_oc.lcl_is_closing #lcl_overlay,
        .lcl_fade_oc.lcl_is_closing #lcl_window {
            opacity: 0 !important;
        }

        .lcl_fade_oc.lcl_is_closing #lcl_overlay {
            -webkit-transition-delay: .15s !important;
            transition-delay: .15s !important;
        }

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
                                Modern
                            </h5>
                            <small>Date: 29/01/2019</small>
                        </a>
                        <p class="mb-4 text-sm">
                            As Uber works through a huge amount of internal management turmoil.
                        </p>
                       
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


    </script>
@endsection
