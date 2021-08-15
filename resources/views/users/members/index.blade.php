@extends('users.members.layouts.app')
@section('title', 'Dashboard')
@section('content')

    <div class="container-fluid py-4">
        @if (Auth::user()->status==1)

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Platform Settings</h6>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success! </strong> {{ session('success') }}
                    </div>
                    @endif
                    <div class="card-header">
                        <div id="success_activate"></div>
                    </div>

                    <div class="card-body p-3">
                        <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                        <p><small>Notify me when ....</small> </p>
                        <ul class="list-group" id="refreshme">
                            <li class="list-group-item border-0 px-0">
                                <div class="form-check form-switch ps-0">
                                    <input class="form-check-input ms-auto" onchange="activateme(this.value, {{ $setting->blog_notification }})" status="#" value="blog_notification" type="checkbox" id="flexSwitchCheckDefault"
                                    {{ ($setting->blog_notification) ==1 ?"checked":"" }}  >
                                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                        for="flexSwitchCheckDefault">New blog added</label>
                                </div>
                            </li>
                            <li class="list-group-item border-0 px-0">
                                <div class="form-check form-switch ps-0">
                                    <input class="form-check-input ms-auto"onchange="activateme(this.value, {{ $setting->comment_notification }})" value="comment_notification " type="checkbox"
                                    {{ ($setting->comment_notification) ==1 ?"checked":"" }}   id="flexSwitchCheckDefault1">
                                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                        for="flexSwitchCheckDefault1">Someone answers on blog</label>
                                </div>
                            </li>
                            <li class="list-group-item border-0 px-0">
                                <div class="form-check form-switch ps-0">
                                    <input class="form-check-input ms-auto" onchange="activateme(this.value, {{ $setting->gallery_notification }})" value="gallery_notification" type="checkbox" id="flexSwitchCheckDefault2"
                                    {{ ($setting->gallery_notification) ==1 ?"checked":"" }}>
                                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                        for="flexSwitchCheckDefault2">New photo add to gallery</label>
                                </div>
                            </li>
                            <li class="list-group-item border-0 px-0">
                                <div class="form-check form-switch ps-0">
                                    <input class="form-check-input ms-auto" onchange="activateme(this.value, {{ $setting->book_notification }}" value="book_notification" type="checkbox" id="flexSwitchCheckDefault2"
                                    {{ ($setting->book_notification) ==1 ?"checked":"" }} >
                                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                        for="flexSwitchCheckDefault2">New book</label>
                                </div>
                            </li>

                            <li class="list-group-item border-0 px-0">
                                <div class="form-check form-switch ps-0">
                                    <input class="form-check-input ms-auto"onchange="activateme(this.value, {{ $setting->event_notification }}" value="event_notification " type="checkbox" id="flexSwitchCheckDefault2"
                                    {{ ($setting->event_notification) ==1 ?"checked":"" }} >
                                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                        for="flexSwitchCheckDefault2">New event</label>
                                </div>
                            </li>

                            <li class="list-group-item border-0 px-0">
                                <div class="form-check form-switch ps-0">
                                    <input class="form-check-input ms-auto" onchange="activateme(this.value, {{ $setting->email_notification }}" value="email_notification " type="checkbox" id="flexSwitchCheckDefault2"
                                    {{ ($setting->email_notification) ==1 ?"checked":"" }} >
                                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                        for="flexSwitchCheckDefault2">Email notification</label>
                                </div>
                            </li>
                            <li class="list-group-item border-0 px-0">
                                <div class="form-check form-switch ps-0">
                                    <input class="form-check-input ms-auto" onchange="activateme(this.value, {{ $setting->nugget_notification }}" value="nugget_notification " type="checkbox" id="flexSwitchCheckDefault2"
                                    {{ ($setting->nugget_notification) ==1 ?"checked":"" }} >
                                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                        for="flexSwitchCheckDefault2">Nugget notification</label>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">Profile Information</h6>
                            </div>

                            <div class="col-md-4 text-right">
                                <a href="javascript:;">
                                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit Profile"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">

                        <hr class="horizontal gray-light my-4">
                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full
                                    Name:</strong> &nbsp; {{ ucwords(Auth::user()->name) }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong>
                                &nbsp; {{ Auth::user()->phone }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong>
                                &nbsp; {{ Auth::user()->email }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                    class="text-dark">About:</strong> &nbsp; {{ Auth::user()->about }}</li>
                            <li class="list-group-item border-0 ps-0 pb-0">
                                <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                    <i class="fab fa-facebook fa-lg"></i>
                                </a>
                                <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                    <i class="fab fa-twitter fa-lg"></i>
                                </a>
                                <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                    <i class="fab fa-instagram fa-lg"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-1">Recent post</h6>
                    </div>
                    <div class="card-body p-3">

                        <div class="row">
                            {{-- @for ($i = 0; $i < 8; $i++) --}}
                            @foreach ($blogs as $blog)
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img style="height: 150px; width:100%" src="{{ $blog->getImage($blog->content) != "" ?  $blog->getImage($blog->content):"../assets/img/home-decor-1.jpg" }}" alt="img-blur-shadow"
                                                    class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0" style="height: 200px; overflow:hidden">
                                            <a href="javascript:;">
                                                <h5>
                                                    {{ $blog->title }}
                                                </h5>
                                            </a>
                                            {!! $blog->getLimitedContent($blog->content) !!}

                                        </div>
                                        <div class="card-footer">
                                                         <div class="d-flex align-items-center justify-content-between">

                                               <a href="{{ route('readblog', [$blog->id, str_replace(" ", '_', $blog->title)]) }}" class="btn btn-outline-primary btn-sm mb-0">
                                                View Content
                                            </a>
                                                    <small>
                                                        <a href="{{ route('readblog', [$blog->id, str_replace(" ", '_', $blog->title)]) }}" class="bg-primary p-1 rounded">
                                                        <span class="fa fa-comment"></span> <span class="badge badge-light">{{ $blog->getNumbersOfComment($blog->id) }}</span>
                                                      </a>
                                                    </small>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                            {{-- @endfor --}}
                        </div>
                    </div>
                </div>
            </div>

        @else
            <h2 class="text-danger font-weight-bold text-uppercase"><marquee behavior="" direction="">Your accound is not yet approved please contact admin for account approval</marquee></h2>
        @endif

        </div>
      </div>

@endsection
@section('script')
<script>
    $(document).ready(function(e) {
        $('.form-check-inpu').on('click', function(e){
            var activateme = $(this).val();
            var status = $(this).attr('status');
            var message = status == 1 ? "deactivate":"activate";
            var activatore = activateme.replace("_", " ");
            if(confirm("Are you sure you want "+ message+" this notification")){
        $.ajax({
            headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            data: { activate: activateme,status:status },
            type: "POST",
            url: "{{ route('activate_notification') }}",
            success: function(response) {
                $('#success_activate').html('<div class="alert alert-success alert-dismissible">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong>Success! </strong>' + response +
                    '</div>');
                $("#refreshme").load(" #refreshme");
            }
        })

        }
        })
    })

function activateme(activateme, status){
    // alert(activateme);
    var message = status == 1 ? "deactivate":"activate";
    var activatore = activateme.replace("_", " ");

            if(confirm("Are you sure you want "+ message+" "+activatore)){
        $.ajax({
            headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            data: { activate: activateme,status:status },
            type: "POST",
            url: "{{ route('activate_notification') }}",
            success: function(response) {
                $('#success_activate').html('<div class="alert alert-success alert-dismissible">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong>Success! </strong>' + response +
                    '</div>');
                $("#refreshme").load(" #refreshme");
            }
        })

        }
}
</script>

@endsection
