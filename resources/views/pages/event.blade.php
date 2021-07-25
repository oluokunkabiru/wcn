
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
            @foreach ($events as $event)
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src="{{ $event->getImage($event->content) != "" ?  $event->getImage($event->content):"../assets/img/home-decor-1.jpg" }}" alt="{{ $event->title }}"
                                                class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                    <div class="card-body px-1 pb-0">
                                        <a href="javascript:;">
                                            <h5>
                                                {{ $event->title }}
                                                </h5>
                                            <small>Date: {{ $event->date }}</small>
                                        </a>
                                        {!! $event->getLimitedContent($event->content) !!}

                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{ route('readEvent', [$event->id, str_replace(" ", '_', $event->title)]) }}" class="btn btn-outline-primary btn-sm mb-0">
                                                View event
                                            </a>
                                            </div>
                                    </div>
                                </div>
                            </div>
            @endforeach


            </div>
            <div class="text-right my-2">
                {{ $events->links() }}
            </div>
        </div>
    </div>
    </section>
@endsection
@section('script')
    <script>


    </script>
@endsection
