@extends('users.admin.layouts.app')
@section('title', "Manage blogs")
@section('content')
<h1>Manage blogs</h1>
 <a href="{{ route('blogs.create') }}" class="btn btn-dark"> Create new post</a>
 <div class="card mb-4">
    <div class="card-header pb-0 p-3">
        <h6 class="mb-1">Recent post</h6>
    </div>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success! </strong> {{ session('success') }}
            </div>
        @endif
    <div class="card-body p-3">

        <div class="row">
            @foreach ($blogs as $blog )




                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <a class="d-block shadow-xl border-radius-xl">
                                <img src="{{ $blog->getImage($blog->content) != "" ?  $blog->getImage($blog->content):"../assets/img/home-decor-1.jpg" }}" alt="{{ $blog->title }}"
                                    class="img-fluid shadow border-radius-xl">
                            </a>
                        </div>
                        <div class="card-body px-1 pb-0">
                            <a href="javascript:;">
                                <h5>
                                    {{ $blog->title }} <span class="fa fa-comment">{{ $blog->getNumbersOfComment($blog->id) }}</span>
                                </h5>
                            </a>
                                {!! $blog->getLimitedContent($blog->content) !!}
                            <div class="d-flex align-items-center justify-content-between">
                                {{--  <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                    Project</button>  --}}
                                    <a href="{{ route('blogs.show', $blog->id) }}" data-toggle="tooltip" title="Read full content" class="btn btn-success  "><span class="fa fa-eye"></span></a>
                                    <a href="{{ route('blogs.edit', $blog->id) }}" data-toggle="tooltip" title="Edit content" class="btn btn-primary  "><span class="fa fa-edit"></span></a>
                                    <a href="#confirm" data-toggle="modal" class="btn btn-danger" blog-title="{{ $blog->title }}" blog-url={{ route('blogs.destroy',$blog->id) }} data-toggle="tooltip" title="Delete content"><span class="fa fa-trash"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
             @endforeach

             <div class="modal" id="confirm">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-uppercase">are sure you want delete <span id="delname"></span></h4>
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
                                <button  type="submit" class="btn btn-danger text-uppercase">delete</button>                </div>
            </form>
                    </div>
                </div>
                 </div>
        </div>
    </div>
</div>


@endsection
@section('script')
<script>

    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();



        // delete modal
        $('#confirm').on('show.bs.modal', function(e){
          var mycat = $(e.relatedTarget).attr('blog-title');
          var url = $(e.relatedTarget).attr('blog-url');
        $("#delname").text(mycat);
          $("#delcategoryform").attr("action", url);

     })
    });
    </script>
@endsection

