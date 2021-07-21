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
                <div class="text-center">
                    <a href="" class=""><span class="fa fa-trash"></span></a>
                </div>
            </div>
            @endfor


                {{-- <div class="content">

                <div class="elem col-md-3"
                    vboy="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb"
                    title="image 1" data-lcl-txt="villageboy " data-lcl-author="jhkjk"
                    data-lcl-thumb="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
                    <span
                        style="background-image: url(https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
                </div>

                <div class="elem col-md-3"
                    vboy="https://images.unsplash.com/photo-1502082553048-f009c37129b9?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb"
                    title="image 2" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
                    data-lcl-thumb="https://images.unsplash.com/photo-1502082553048-f009c37129b9?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
                    <span
                        style="background-image: url(https://images.unsplash.com/photo-1502082553048-f009c37129b9?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);">
                    </span>
                </div>

                <div class="elem col-md-3"
                    vboy="https://images.unsplash.com/photo-1442850473887-0fb77cd0b337?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb"
                    title="image 3" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
                    data-lcl-thumb="https://images.unsplash.com/photo-1442850473887-0fb77cd0b337?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
                    <span
                        style="background-image: url(https://images.unsplash.com/photo-1442850473887-0fb77cd0b337?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
                </div>


                <div class="elem col-md-3"
                    vboy="https://images.unsplash.com/photo-1431794062232-2a99a5431c6c?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb"
                    title="image 4" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
                    data-lcl-thumb="https://images.unsplash.com/photo-1431794062232-2a99a5431c6c?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
                    <span
                        style="background-image: url(https://images.unsplash.com/photo-1431794062232-2a99a5431c6c?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
                </div>
                <a class="elem col-md-3"
                    vboy="https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb"
                    title="image 5" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
                    data-lcl-thumb="https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
                    <span
                        style="background-image: url(https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
                </a>
                <a class="elem"
                    vboy="https://images.unsplash.com/photo-1482192505345-5655af888cc4?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb"
                    title="image 6" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
                    data-lcl-thumb="https://images.unsplash.com/photo-1482192505345-5655af888cc4?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
                    <span
                        style="background-image: url(https://images.unsplash.com/photo-1482192505345-5655af888cc4?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
                </a>

                <br /><br />
            </div> --}}
            </div>
        </div>
    </div>
        <div class="card-body">

            @for ($i = 0; $i < 10; $i++)


            @endfor


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
