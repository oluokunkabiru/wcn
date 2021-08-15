
@extends('layouts.app')
@section('title', 'Blog :: '. $blog->title)
@section('style')
    <style>
.containers {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
}

.darker {
    border-color: #ccc;
    background-color: #ddd;
}

.containers::after {
    content: "";
    clear: both;
    display: table;
}

.containers img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

.containers img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}

.time-right {
    float: right;
    color: #aaa;
}

.time-left {
    float: left;
    color: #999;
}

    </style>
@endsection
@section('content')


    <section>
    <div class="container">

        <div class="row">
            <div class="col-lg-12 mb-12 mb-lg-0 text-center card">
                <div class="testimonial-2 ">
                    <div class="card-header">
                        <h2 class="card-title h5 text-uppercase font-weight-bold">{{ $blog->title }}</h2>
                        <h5>By</h5>
                        <div class="d-flex v-card align-items-center px-3 text-center">
                            <img src="{{ $blog->user->getMedia('avatar')->first()->getFullUrl()}}" alt="{{ ucwords($blog->user->name) }}" class="img-fluid mr-3">
                            <div class="author-name">
                              <span class="d-block">{{ ucwords($blog->user->name) }}</span>
                            </div>
                          </div>
                    </div>
                    <div class="card-body">
                       {!! $blog->content !!}
                    </div>


                </div>
              </div>

            </div>
            @include('pages.comments')
            @include('pages.comment-box')
        </div>
    </div>
    </section>
@endsection
@section('script')
    <script>
  $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        $("#commentbox").summernote({
                dialogsInBody: true,
                minHeight: 150,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough']],
                    ['para', ['paragraph']]
                ]
            });

          // delete modal
          $('#confirm').on('show.bs.modal', function(e){
        //   var mycat = $(e.relatedTarget).attr('blog-title');
          var url = $(e.relatedTarget).attr('deleteurl');
        // $("#delname").text(mycat);
          $("#delcategoryform").attr("action", url);

     })
    });

    </script>
@endsection


