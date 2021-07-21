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
	border: 2px dashed #028AF4 !important;;
}

.dz-remove {
	color: red !important;;
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
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success! </strong> {{ session('success') }}
            </div>
            @endif
            <div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>File Upload</h3>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" class="dropzone dz-clickable" id="image-upload">
                    @csrf
                    <div>
                        <h3 class="text-center">Upload Files here max of <b>50mb</b></h3>
                    </div>
                    <div class="dz-default dz-message">Drag and drop you file or click here to upload</div>

                </form>
            </div>
        </div>
        {{-- <button type="submit" class="float-right mr-5 mt-3 btn btn-rounded btn-success btn-lg" onsubmit="uploadFiles()">Upload</button> --}}

    </div>
</div>

    <div class="container">
        <h2><span class="fa fa-file-image mx-3 bg-dark p-2 text-white rounded"></span> Gallery</h2>

        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Images</h4>
                        <a href="#" class="btn btn-success ml-auto">Download <span class="fa fa-download"></span></a>
                    </div>


                    <div class="card-body">
                        <div class="row">
                            @for ($i = 0; $i < 10; $i++)
                            <div class="col-md-3">
                                <div class="elem" vboy="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb"
                                    title="image 1" data-lcl-txt="villageboy " data-lcl-author="jhkjk"
                                    data-lcl-thumb="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
                                    <span style="background-image: url(https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>

                                </div>
                                <div class="text-center">
                                    <a href="" class="mx-1 text-danger" data-toggle="tooltip" title="Delete image from gallery"><span class="fa fa-trash"></span></a>
                                    <a href="" class="mx-1 text-primary" data-toggle="tooltip" title="Disable image from gallery"><span class="fa fa-times"></span></a>
                                </div>
                            </div>
                            @endfor
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
var dropzone = null;

Dropzone.autoDiscover = false;
dropzone = $("#image-upload").dropzone({
    // Dropzone.options.image-upload={
    url: "#",
    acceptedFiles: 'image/*,video/*, audio/*',
    autoProcessQueue: true,
    createImageThumbnails: true,
    addRemoveLinks: true,
    // uploadMultiple:true,
    parallelChunkUploads:true,
    capture: 'image/*,video/*, audio/*',
    // dictDefaultMessage:function(){
    //     alert ('hello');
    // }
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
       gallery : true,
       thumb_attr: 'data-lcl-thumb',

       skin: 'minimal',
       radius: 0,
       padding	: 0,
       border_w: 0,
       socials:true,
       download:true,
       src_attr:"vboy",
       counter:true,
   });




// toolthip
   $('[data-toggle="tooltip"]').tooltip();


});
</script>
@endsection


