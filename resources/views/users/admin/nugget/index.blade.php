@extends('users.admin.layouts.app')
@section('title', "Manage nuggets")
@section('content')
<h1>Manage nuggets</h1>
 <a href="{{ route('nugget.create') }}" class="btn btn-dark"> Create new nugget</a>
 <div class="card mb-4">
    <div class="card-header pb-0 p-3">
        <h6 class="mb-1">Recent nugget post </h6>
    </div>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success! </strong> {{ session('success') }}
    </div>
    @endif
    <div class="card-body p-3">

        <div class="row">
@foreach ($nuggets as $nugget)


                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <a class="d-block shadow-xl border-radius-xl">
                                <img src="{{ $nugget->getImage($nugget->qoute) != "" ?  $nugget->getImage($nugget->qoute):"../assets/img/home-decor-1.jpg" }}" alt="{{ $nugget->title }}"
                                    class="img-fluid shadow border-radius-xl">
                            </a>
                        </div>
                        <div class="card-body px-1 pb-0">
                            <a href="javascript:;">
                                <h5>
                                    {{ ucwords($nugget->user->name) }}
                                </h5>
                            </a>
                            {!! $nugget->getLimitedContent($nugget->qoute) !!}

                            <div class="d-flex align-items-center justify-content-between">
                                {{--  <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                    Project</button>  --}}
                                    {{-- <a href="{{ route('readNugget', [$nugget->id, str_replace(" ", "_", ucwords($nugget->user->name))]) }}"  title="Read full nugget" class="btn btn-success  "><span class="fa fa-eye"></span></a> --}}
                                    <a href="{{ route('nuggetquote') }}#nugget{{ $nugget->id }}"  title="Read full nugget" class="btn btn-success  "><span class="fa fa-eye"></span></a>
                                    <a href="{{ route('nugget.edit', $nugget->id) }}" title="Edit nugget" class="btn btn-primary  "><span class="fa fa-edit"></span></a>
                                    <a href="#confirm" data-toggle="modal" delete-url={{ route('nugget.destroy', $nugget->id) }} class="btn btn-danger"  title="Delete nugget"><span class="fa fa-trash"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            {{ $nuggets->links() }}
    </div>
    <div class="modal" id="confirm">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-uppercase">are sure you want delete this nugget quote <span id="delname"></span></h4>
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


@endsection
@section('script')
<script>

    $(document).ready(function(){
        $('[title="tooltip"]').tooltip();
         // delete modal
         $('#confirm').on('show.bs.modal', function(e){
        //   var mycat = $(e.relatedTarget).attr('blog-title');
          var url = $(e.relatedTarget).attr('delete-url');
        // $("#delname").text(mycat);
          $("#delcategoryform").attr("action", url);

     })
    });
    </script>
@endsection

