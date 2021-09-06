@extends('users.admin.layouts.app')
@section('title', "Manage Event")
@section('content')
<h1>Manage Event</h1>
 <a href="{{ route('events.create') }}" class="btn btn-dark"> Create new event</a>
 <div class="card mb-4">
    <div class="card-header pb-0 p-3">
        <h6 class="mb-1">Recent event</h6>
    </div>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success! </strong> {{ session('success') }}
    </div>
@endif
    <div class="card-body p-3">

        <div class="row">
@foreach ($events as $event)
<div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <a class="d-block shadow-xl border-radius-xl">
                                <img style="height: 150px; width:100%" src="{{ $event->getMedia('events')->first()->getFullUrl() != "" ?   $event->getMedia('events')->first()->getFullUrl():"../assets/img/home-decor-1.jpg" }}" alt="{{ $event->title }}"
                                    class="img-fluid shadow border-radius-xl">
                            </a>
                        </div>
                        <div class="card-body px-1 pb-0" style="height: 200px; overflow:hidden">
                            <a href="javascript:;">
                                <h5>
                                    {{ $event->title }}
                                    </h5>
                                <small>Date: {{ $event->date }}</small>
                            </a>
                            {!! $event->getLimitedContent($event->content) !!}


                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center justify-content-between">
                                {{--  <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                    Project</button>  --}}
                                    <a href="{{ route('readEvent', [$event->id, str_replace(" ", '_', $event->title)]) }}" data-toggle="tooltip" title="Read event" class="btn btn-success  "><span class="fa fa-eye"></span></a>
                                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary"  data-toggle="tooltip" title="Edit event"><span class="fa fa-edit"></span></a>
                                    <a href="#confirm" data-toggle="modal" class="btn btn-danger" event-title="{{ $event->title }}" event-url={{ route('events.destroy',$event->id) }} data-toggle="tooltip" title="Delete Event"><span class="fa fa-trash"></span></a>
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
        $('#confirm').on('show.bs.modal', function(e){
          var mycat = $(e.relatedTarget).attr('event-title');
          var url = $(e.relatedTarget).attr('event-url');
        $("#delname").text(mycat);
          $("#delcategoryform").attr("action", url);

     })
    });
    </script>
@endsection

