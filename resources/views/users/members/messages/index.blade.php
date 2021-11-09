@extends('users.members.layouts.app')
@section('title', 'Message conversation')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Messages</h1>
        </div>
        {{-- <a href="{{ route('events.create') }}" class="btn btn-dark"> Create new event</a> --}}
        <div class="card mb-4">

            {{-- <div class="card-body p-3"> --}}

            <div class="row">
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-1">Message conversation</h6>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Success! </strong> {{ session('success') }}
                            </div>
                        @endif

                        <div class="card-body p-3">
                            <ul class="list-group">
                                @forelse ($messages as $message)
                                    @if (Auth::user()->id == $message->sender)
                                        <li class="list-group-item ml-auto border-0 d-flex align-items-center px-0 mb-2">
                                            <div class="avatar me-3">
                                                <img src="{{ Auth::user()->getMedia('avatar')->first()->getFullUrl('avatar') }}"
                                                    alt="kal" class="border-radius-lg shadow">
                                            </div>
                                            <div class="d-flex align-items-start flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ ucwords(Auth::user()->name) }}</h6>
                                                {!! $message->message !!}
                                                <small>
                                                    <p>{{ $recipient->timeago($message->created_at) }}</p>
                                                </small>
                                            </div>


                                        </li>
                                    @else
                                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                            <div class="avatar me-3">
                                                <img src="{{ $recipient->getMedia('avatar')->first()->getFullUrl('avatar') }}"
                                                    alt="{{ $recipient->name }}" class="border-radius-lg shadow">
                                            </div>
                                            <div class="d-flex align-items-start flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ ucwords($recipient->name) }}</h6>
                                                {!! $message->message !!}
                                                <small>
                                                    <p>{{ $recipient->timeago($message->created_at) }}</p>
                                                </small>
                                            </div>
                                        </li>
                                    @endif
                                @empty
                                    <h3 class="text-danger text-uppercase">No conversation between you </b></h3>
                                @endforelse



                            </ul>
                        </div>
                        <div class="card">
                            <div class="card-body">
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
                                    <input type="hidden" value="{{ $recipient->id }}" name="userid" id="userchatid">
                            </div>

                            <!-- Modal footer -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger text-uppercase">Send message</button>
                            </div>
                            </form>
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
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
                $('#confirm').on('show.bs.modal', function(e) {
                    var mycat = $(e.relatedTarget).attr('event-title');
                    var url = $(e.relatedTarget).attr('event-url');
                    $("#delname").text(mycat);
                    $("#delcategoryform").attr("action", url);

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
