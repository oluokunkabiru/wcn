@extends('users.members.layouts.app')
@section('title', 'Manage Event')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Manage testimony</h1>
        </div>
        <a href="{{ route('testimony.create') }}" class="btn btn-dark"> Add new testimony</a>
        <div class="card mb-4">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success! </strong> {{ session('success') }}
                </div>
            @endif
            <div class="card-header pb-0 p-3">
                <h6 class="mb-1 text-danger">Unapproved testimony</h6>
            </div>
            <div class="card-body p-3">

                <div class="row">
                    @forelse ($pendingtestimonys as $unapprove)

                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">

                                <div class="card-body px-1 pb-0" style="height: 200px; overflow:hidden">
                                    <a href="javascript:;">
                                        <small>{{ $unapprove->created_at }}</small>
                                    </a>
                                    {!! $unapprove->testimony !!}

                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center justify-content-between">
                                        {{-- <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                    Project</button> --}}
                                        {{-- <a href="{{ route('readNugget', [$nugget->id, str_replace(" ", "_", ucwords($nugget->user->name))]) }}"  title="Read full nugget" class="btn btn-success  "><span class="fa fa-eye"></span></a> --}}
                                        <a href="#view" data-toggle="modal" testi="{!! $unapprove->testimony !!}"
                                            title="Read full testimony" class="btn btn-success  "><span
                                                class="fa fa-eye"></span></a>
                                        <a href="{{ route('testimony.edit', $unapprove->id) }}" title="Edit testimony"
                                            class="btn btn-primary  "><span class="fa fa-edit"></span></a>
                                        <a href="#confirm" data-toggle="modal" testi="{!! $unapprove->testimony !!}"
                                            delete-url={{ route('testimony.destroy', $unapprove->id) }}
                                            class="btn btn-danger" title="Delete testimony"><span
                                                class="fa fa-trash"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h2 class="text-center text-danger">You have not post testimony</h2>
                    @endforelse

                </div>
                {{ $pendingtestimonys->links() }}

            </div>
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1 text-success">Approved testimony</h6>
                </div>
                <div class="card-body p-3">

                    <div class="row">
                        @forelse ($approvedtestimonys as $unapprove)

                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">

                                    <div class="card-body px-1 pb-0" style="height: 200px; overflow:hidden">
                                        <a href="javascript:;">
                                            <small>{{ $unapprove->created_at }}</small>
                                        </a>
                                        {!! $unapprove->testimony !!}

                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center justify-content-between">
                                            {{-- <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                    Project</button> --}}
                                            {{-- <a href="{{ route('readNugget', [$nugget->id, str_replace(" ", "_", ucwords($nugget->user->name))]) }}"  title="Read full nugget" class="btn btn-success  "><span class="fa fa-eye"></span></a> --}}
                                            <a href="#view" data-toggle="modal" testi="{!! $unapprove->testimony !!}"
                                                title="Read full nugget" class="btn btn-success  "><span
                                                    class="fa fa-eye"></span></a>
                                            <a href="{{ route('testimony.edit', $unapprove->id) }}" title="Edit nugget"
                                                class="btn btn-primary  "><span class="fa fa-edit"></span></a>
                                            <a href="#confirm" data-toggle="modal" testi="{!! $unapprove->testimony !!}"
                                                delete-url={{ route('testimony.destroy', $unapprove->id) }}
                                                class="btn btn-danger" title="Delete nugget"><span
                                                    class="fa fa-trash"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h2 class="text-center text-danger">You have not post testimony</h2>
                        @endforelse
                    </div>

                </div>


            </div>
        </div>
    </section>
    <div class="modal" id="confirm">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase">are sure you want delete this testimony </h4>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <span id="delname"></span>
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

    <div class="modal" id="view">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase">View testimony </h4>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <span id="fulltestimony"></span>

                </div>
            </div>
        </div>
    </div>
            @endsection
            @section('script')
                <script>
                    $(document).ready(function() {
                        $('[title="tooltip"]').tooltip();
                        $('#confirm').on('show.bs.modal', function(e) {
                            var mycat = $(e.relatedTarget).attr('testi');
                            var url = $(e.relatedTarget).attr('delete-url');
                            $("#delname").html(mycat);
                            $("#delcategoryform").attr("action", url);

                        })

                        $('#view').on('show.bs.modal', function(e) {
                            var mycat = $(e.relatedTarget).attr('testi');
                            //   var url = $(e.relatedTarget).attr('delete-url');
                            $("#fulltestimony").html(mycat);
                            //   $("#delcategoryform").attr("action", url);

                        })
                    });
                </script>
            @endsection
