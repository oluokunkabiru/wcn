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
            {{-- @for ($i = 0; $i < 10; $i++) --}}
            @foreach ($medias as $media)


            <div class="col-md-3">
                <div class="elem" vboy="{{ $media->getMedia('gallery')->first()->getFullUrl() }}"
                    title="{{ $media->getMedia('gallery')->first()->name }}" data-lcl-txt="villageboy " data-lcl-author="Admin"
                    data-lcl-thumb="{{ $media->getMedia('gallery')->first()->getFullUrl() }}">
                    <span
                        style="background-image: url({{ $media->getMedia('gallery')->first()->getFullUrl() }});"></span>

                </div>

            </div>
            @endforeach
            {{-- @endfor --}}
            </div>
            <div class="card-footer">
                {{ $medias->links() }}
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
