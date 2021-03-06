@extends('users.admin.layouts.app')
@section('title', 'Media gallery')
@section('style')
    <style>
        .dz-image img {
            width: 100%;
            height: 100%;
        }

        .dropzone.dz-started .dz-message {
            display: block !important;
        }

        .dropzone {
            border: 2px dashed #028AF4 !important;
            ;
        }

        .dz-remove {
            color: red !important;
            ;
        }

        #logo {
            /* background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAYlJREFUeNrcV4FtgzAQBJQB3AlCN0gmiNkgnaBhg25QMUHSCUInKJkgZgNGyAhskP6r58qJsCEUE5qXLMvI8t//359NGDhMytWepk3gz7LQ4VzSdAw8WxTc2WYd9ymlymQop5Td87/IQEVDR137AhAahPNlFZWvtpVgRgtmulcA5CO5BmFyQHou8wJjmm3YB0B9TwAp1fKJ5mcap7EB7Mh5/qNKJTv/GAuAQsSHq+/zMaQ4R6RfzGRqpwJrZvWbbwDaGeuEwLc1hmm6HNshS8BMTxG5aDkjxv5sSAAFIo07nsPR7/p0RuSI6vWGcwQ4UQwFQPaQ6FVDp0z/RTRJAMxovj75rbDsqP0pnmyVjYikIawjR1z/TgA5HaYguRXEqO29qCXa1Y6iiVuRZaNr3dQxrrUTfGg+j8wfBtwBJ+hBm8pxBj7hfNsAWpdncZm60grA5EOG/n5H+mIAEx2y8wtAl/XWLhCIiCW5pPECciZ9ROcvPyacuj3Y/Pg6MDqAzLOP3EZAtm8BBgDqc3bEpb6xyQAAAABJRU5ErkJggg==') no-repeat center center transparent; */
            background-size: contain;
            width: 25px;
            height: 25px;
            display: inline-block;
            position: relative;
            bottom: -4px;
            left: -4px;
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

    <section class="section">
        <div class="section-header">
            <h1><span class="fa fa-file mx-3 bg-dark p-2 text-white rounded"></span> Gallery</h1>

        </div>

        <div class="section-body">
            {{-- @if (session('success')) --}}
            <div id="success_images"></div>
            {{-- @endif --}}
            <div class="row">

                <div class="col-md-12" id="refreshme">
                    <div class="card">
                        <div class="card-header">
                            <h3>File Upload</h3>
                        </div>
                        @if(session('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Success! </strong> {{ session('success') }}
                                </div>
                            @endif
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" class="dropzone dz-clickable"
                                id="image-upload">
                                @csrf
                                <div>
                                    <h3 class="text-center">Upload Files here max of <b>5mb</b></h3>
                                </div>
                                <div class="dz-default dz-message">Drag and drop you file or click here to upload</div>

                            </form>
                        </div>
                    </div>
                    {{-- <button type="submit" class="float-right mr-5 mt-3 btn btn-rounded btn-success btn-lg" onsubmit="uploadFiles()">Upload</button> --}}

                </div>
            </div>

            <div class="container" id="refreshme">
                <h2><span class="fa fa-file-image mx-3 bg-dark p-2 text-white rounded"></span> Gallery</h2>

                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Images</h4>
                                <a href="#" class="btn btn-success ml-auto">Download <span
                                        class="fa fa-download"></span></a>
                            </div>


                            <div class="card-body">
                                <div class="row">
                                    {{-- @for ($i = 0; $i < 10; $i++) --}}
                                    @foreach ($medias as $media)


                                        <div class="col-md-3">
                                            <div class="elem" vboy="{{ $media->getMedia('gallery')->first()->getFullUrl() }}"
                                                title="image 1" data-lcl-txt="villageboy " data-lcl-author="jhkjk"
                                                data-lcl-thumb="{{ $media->getMedia('gallery')->first()->getFullUrl() }}">
                                                <span
                                                    style="background-image: url({{ $media->getMedia('gallery')->first()->getFullUrl() }});"></span>

                                            </div>
                                            <div class="text-center">
                                                <a href="#deleteimage" delete-url="{{ route('gallery.destroy', $media->id) }}" imgsrc="{{  $media->getMedia('gallery')->first()->getFullUrl() }}" data-toggle="modal" class="mx-1 text-danger"
                                                   ><span  title="Delete image from gallery" class="fa fa-trash"></span></a>
                                                <a href="#disableimage"  disable-url="{{ route('gallery.update', $media->id) }}" imgsrc="{{  $media->getMedia('gallery')->first()->getFullUrl() }}" data-toggle="modal" class="mx-1 text-primary" ><span title="{{ $media->status == 0 ? "Enable":"Disable" }} image from gallery" class="{{ $media->status== 0 ? "fa fa-check text-success":"fa fa-times text-danger" }}"></span></a>
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
                    </div>

                    <div class="modal" id="deleteimage">
                        <div class="modal-dialog">
                            <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title text-uppercase">are sure you want delete below image</h4>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img src="" id="deleteimgscr" class="card-image img-fluid" alt="">
                                <form id="deletecategoryform"  action="#" method="POST">

                                        {{ csrf_field() }}
                                        @method("DELETE")
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                        <button  type="submit" class="btn btn-danger text-uppercase">delete</button>                </div>
                    </form>
                            </div>
                        </div>
                         </div>

                         <div class="modal" id="disableimage">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title text-uppercase">are sure you want disabled below image</h4>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <img src="" class="card-image img-fluid" id="disableimgscr" alt="">
                                    <form id="disablecategoryform" action="#" method="POST">

                                            {{ csrf_field() }}
                                            @method("PATCH")
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                            <button  type="submit" class="btn btn-danger text-uppercase">disable</button>                </div>
                        </form>
                                </div>
                            </div>
                             </div>
                </div>
            </div>
    </section>
@endsection
@section('script')
    <script>
        var dropzone = null;

        Dropzone.autoDiscover = false;
        dropzone = $("#image-upload").dropzone({
            // Dropzone.options.image-upload={
            url: "{{ route('gallery.store') }}",
            acceptedFiles: 'image/*', //video/*, audio/*',
            autoProcessQueue: true,
            createImageThumbnails: true,
            addRemoveLinks: true,
            // uploadMultiple:true,
            parallelChunkUploads: true,
            capture: 'image/*', //video/*, audio/*',
            success: function(file, response) {
                //   alert(response);
                $('#success_images').html('<div class="alert alert-success alert-dismissible">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong>Success! </strong>' + response +
                    '</div>');
                $("#refreshme").load(" #refreshme");
            },
            // };
        });

        // function uploadFiles() {
        //     dropzone.processQueue();
        //     return false;
        // }

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
                counter: true,
            });




            // toolthip
            $('[title="tooltip"]').tooltip();

            $('#disableimage').on('show.bs.modal', function(e){
          var myimgage = $(e.relatedTarget).attr('imgsrc');
          var url = $(e.relatedTarget).attr('disable-url');
        // $("#delname").text(mycat);
        $("#disablecategoryform").attr("action", url);
        $("#disableimgscr").attr("src", myimgage);

     })

     $('#deleteimage').on('show.bs.modal', function(e){
          var myimgage = $(e.relatedTarget).attr('imgsrc');
          var url = $(e.relatedTarget).attr('delete-url');
        // $("#delname").text(mycat);
        $("#deletecategoryform").attr("action", url);
        $("#deleteimgscr").attr("src", myimgage);

     })
        });

    </script>
@endsection
