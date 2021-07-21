@extends('users.admin.layouts.app')
@section('title', "Manage Event")
@section('content')
<h1>Manage Event</h1>
 <a href="{{ route('events.create') }}" class="btn btn-dark"> Create new event</a>
 <div class="card mb-4">
    <div class="card-header pb-0 p-3">
        <h6 class="mb-1">Recent event</h6>
    </div>
    <div class="card-body p-3">

        <div class="row">
            @for ($i = 0; $i < 8; $i++)


                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <a class="d-block shadow-xl border-radius-xl">
                                <img src="../assets/img/home-decor-1.jpg" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </a>
                        </div>
                        <div class="card-body px-1 pb-0">
                            <a href="javascript:;">
                                <h5>
                                    Modern
                                </h5>
                                <small>Date: 29/01/2019</small>
                            </a>
                            <p class="mb-4 text-sm">
                                As Uber works through a huge amount of internal management turmoil.
                            </p>
                            <div class="d-flex align-items-center justify-content-between">
                                {{--  <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                    Project</button>  --}}
                                    <a href="{{ route('events.show', 1) }}" data-toggle="tooltip" title="Read event" class="btn btn-success  "><span class="fa fa-eye"></span></a>
                                    <a href="{{ route('events.edit', 1) }}" class="btn btn-primary"  data-toggle="tooltip" title="Edit event"><span class="fa fa-edit"></span></a>
                                    <a href="#confirm" class="btn btn-danger"  data-toggle="tooltip" title="Delete event"><span class="fa fa-trash"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
@endsection
@section('script')
<script>

    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
@endsection

