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
            <div class="col-md-3">
                <div class="elem" vboy="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb"
                    title="image 1" data-lcl-txt="villageboy " data-lcl-author="jhkjk"
                    data-lcl-thumb="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
                    <span style="background-image: url(https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>

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
        $(document).ready(function(e) {

            // live handler
            lc_lightbox('.elem', {
                wrap_class: 'lcl_fade_oc',
                gallery: true,
                thumb_attr: 'data-lcl-thumb',

                skin: 'minimal',
                radius: 0,
                padding: 0,
                border_w: 0,
                socials: true,
                download: true,
                src_attr: "vboy",
                counter:true,
            });

        });

    </script>
@endsection
