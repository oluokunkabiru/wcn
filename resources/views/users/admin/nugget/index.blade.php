@extends('users.admin.layouts.app')
@section('title', 'Manage nuggets')
@section('style')
    <style>
        .dz-image img {
            width: 100%;
            height: 100%;
        }

        .dropzone.dz-started .dz-message {
            display: block !important;

        }
        .dropzone .dz-message{
            font-size: 12px !important;

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
            <h1>Manage nuggets</h1>
        </div>
        {{-- {{ route('nugget.create') }}" --}}
        <a href="#addnugget" data-toggle="modal" class="btn btn-dark"> Create new nugget</a>
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-1">Recent nugget post </h6>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success! </strong> {{ session('success') }}
                </div>
            @endif
            <div id="success_imagee"></div>
            <div class="card-body p-3" id="refreshme">

                <div class="card-columns">
                    @foreach ($nuggets as $nugget)
                        {{-- <div class="col-xl-3 col-md-6 mb-xl-0 mb-4"> --}}
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img style="height: 200px; width:100%"
                                            src="{{ $nugget->getMedia('nuggets')->first()->getFullUrl() != ''
    ? $nugget->getMedia('nuggets')->first()->getFullUrl()
    : '../assets/img/home-decor-1.jpg' }}"
                                            alt="{{ $nugget->title }}" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0" style="height: 200px; overflow:hidden">
                                    <a href="javascript:;">
                                        <h5>
                                            {{ ucwords($nugget->user->name) }}
                                        </h5>
                                    </a>
                                    {{-- {!! $nugget->getLimitedContent($nugget->qoute) !!} --}}


                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center justify-content-between">
                                        {{-- <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                    Project</button> --}}
                                        {{-- <a href="{{ route('readNugget', [$nugget->id, str_replace(" ", "_", ucwords($nugget->user->name))]) }}"  title="Read full nugget" class="btn btn-success  "><span class="fa fa-eye"></span></a> --}}
                                        <a href="{{ route('nuggetquote') }}{{ $nugget->id }}"
                                            title="View full nugget" class="btn btn-success  "><span
                                                class="fa fa-eye"></span></a>
                                        {{-- <a href="{{ route('nugget.edit', $nugget->id) }}" title="Edit nugget"
                                            class="btn btn-primary  "><span class="fa fa-edit"></span></a> --}}
                                        <a href="#confirm" data-toggle="modal"
                                            delete-url={{ route('nugget.destroy', $nugget->id) }} class="btn btn-danger"
                                            title="Delete nugget"><span class="fa fa-trash"></span></a>
                                    </div>
                                </div>
                            </div>
                        {{-- </div> --}}

                    @endforeach
                </div>
                {{ $nuggets->links() }}
            </div>

        </div>

    </section>
    <div class="modal" id="confirm">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase">are sure you want delete this nugget quote <span
                            id="delname"></span></h4>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form id="delcategoryform" action="#" method="POST">

                        {{ csrf_field() }}
                        @method("DELETE")
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger text-uppercase">delete</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addnugget">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Add Nugget</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                {{-- <div class="card"> --}}
                    {{-- <div class="card-header">
                        <h3>File Upload</h3>
                    </div> --}}
                    @if(session('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Success! </strong> {{ session('success') }}
                            </div>
                        @endif
                    {{-- <div class="card-body"> --}}
                        <form method="post" enctype="multipart/form-data" class="dropzone dz-clickable"
                            id="image-upload">
                            @csrf
                            <div>
                                <h5 class="text-center">Upload Files here max of <b>5mb</b></h5>
                            </div>
                            <div class="dz-default dz-message">Drag and drop you file or click here to upload</div>

                        </form>
                    {{-- </div>
                </div> --}}
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
    </div>


    @endsection
    @section('script')

        <script>
            var dropzone = null;

Dropzone.autoDiscover = false;
dropzone = $("#image-upload").dropzone({
    // Dropzone.options.image-upload={
    url: "{{ route('nugget.store') }}",
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


            $(document).ready(function() {
                $('[title="tooltip"]').tooltip();
                // delete modal
                $('#confirm').on('show.bs.modal', function(e) {
                    //   var mycat = $(e.relatedTarget).attr('blog-title');
                    var url = $(e.relatedTarget).attr('delete-url');
                    // $("#delname").text(mycat);
                    $("#delcategoryform").attr("action", url);

                })
            });
        </script>
    @endsection

    @section('script')

@endsection
