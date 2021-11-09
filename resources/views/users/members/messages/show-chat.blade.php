@extends('users.members.layouts.app')
@section('title', 'Manage Users')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Message any of admin</h1>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Admin list</h6>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Success! </strong> {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())

                            <div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong style="font-size:20px;">Oops!
                                    {{ 'Kindly rectify below errors' }}</strong><br />
                                @foreach ($errors->all() as $error)
                                    {{ $error }} <br />
                                @endforeach
                            </div>
                        @endif
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <div id="accordion">
                                    <table class="table align-items-center mb-0" id="table">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    S/N</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Name</th>

                                                <th class="text-secondary opacity-7">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($users as $user)


                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                <img src="{{ $user->getMedia('avatar')->first()->getFullUrl('avatar') }}"
                                                                    class="avatar avatar-sm me-3">
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">{{ ucwords($user->name) }}</h6>
                                                                <p class="text-xs text-secondary mb-0">{{ $user->email }}
                                                                </p>
                                                                <p class="text-xs text-secondary mb-0">{{ $user->phone }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>



                                                    <td class="align-middle">
                                                        <a class="nav-link"
                                                            url="{{ route('mychat', [$user->id, str_replace(' ', '_', $user->name)]) }}"
                                                            img="{{ $user->getMedia('avatar')->first()->getFullUrl() }}"
                                                            href="#message" username="{{ ucwords($user->name) }}"
                                                            userid="{{ $user->id }}" data-toggle="modal"><span
                                                                class="btn btn-sm btn-rounded btn-danger text-light">Quick
                                                                message</span></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>









        </div>
    </section>
    <div class="modal" id="message">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase">Quick Private message for <span id="chatname"></span>
                    </h4>
                    <div class="text-center">
                        <img src="" id="userimg" class="rounded-circle" style="width: 100px" alt="">
                    </div>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('chat.store') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="content">Message body</label>
                            <textarea
                                class="form-control blogarea {{ $errors->has('message') ? ' is-invalid' : '' }}"
                                rows="3" name="message"></textarea>
                            @if ($errors->has('message'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                            @endif
                        </div>
                        <input type="hidden" value="" name="userid" id="userchatid">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="{{ route('mychat', [$user->id, str_replace(' ', '_', $user->name)]) }}"
                        class="btn btn-success float-left" id="fmessage">View our full conversation</a>
                    <button type="submit" class="btn btn-danger text-uppercase">Send message</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
    @section('script')
        <script>
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
                $("#table").dataTable({
                    "columnDefs": [{
                        "sortable": false,
                        "targets": [2, 3]
                    }]
                });

                $('#message').on('show.bs.modal', function(e) {
                    var name = $(e.relatedTarget).attr('username');
                    var userid = $(e.relatedTarget).attr('userid');
                    var url = $(e.relatedTarget).attr('url');
                    var img = $(e.relatedTarget).attr('img');

                    // $("#delname").text(mycat);
                    $("#userchatid").attr("value", userid);
                    $("#fmessage").attr("href", url);
                    $("#userimg").attr("src", img);
                    $("#chatname").text(name);


                })

                $('.blogarea').summernote({
                    height: 100,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear', 'superscript', 'subscript']],
                        ['color', ['color']],
                        ['para', ['ol', 'ul', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture']],
                        ['view', ['fullscreen', 'help', 'undo', 'redo']],
                    ]

                })

            });
        </script>
    @endsection
