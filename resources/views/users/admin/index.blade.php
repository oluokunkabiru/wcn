@extends('users.admin.layouts.app')
@section('title', 'Dashboard')
@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success! </strong> {{ session('success') }}
            </div>
        @endif

        @if (session('fail'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>OOPS ! </strong> {{ session('fail') }}
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

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fa fa-users text-white display-4"></i>
                    </div>
                    @php
                        $totalusers = App\Models\User::get();
                        $today = date('Y-m-d');
                        $todaytotalusers = App\Models\User::whereDate('created_at', '=', $today)->get();

                    @endphp
                    <a href="{{ route('users.index') }}">
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Users</h4>
                            </div>
                            <div class="card-body">
                                {{ count($totalusers) }} <sup
                                    class="{{ count($todaytotalusers) > 0 ? 'text-success' : 'text-danger' }} text-sm font-weight-bolder">+{{ count($todaytotalusers) }}</sup>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fa fa-barcode text-white display-4"></i>
                    </div>
                    @php
                        $totalblogs = App\Models\Blog::get();
                        $today = date('Y-m-d');
                        $todaytotalblogs = App\Models\Blog::whereDate('created_at', '=', $today)->get();

                    @endphp
                    <a href="{{ route('blogs.index') }}">
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Blogs </h4>
                            </div>
                            <div class="card-body">
                                {{ count($totalblogs) }} <sup
                                    class="{{ count($todaytotalblogs) > 0 ? 'text-success' : 'text-danger' }} text-sm font-weight-bolder">+{{ count($todaytotalblogs) }}</sup>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fa fa-map-marker display-4"></i>
                    </div>
                    @php
                        $totalevents = App\Models\Event::get();
                        $today = date('Y-m-d');
                        $todaytotalevents = App\Models\Event::whereDate('created_at', '=', $today)->get();

                    @endphp
                    <a href="{{ route('events.index') }}">
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Events</h4>
                            </div>

                            <div class="card-body">
                                {{ count($totalevents) }} <sup
                                    class="{{ count($todaytotalevents) > 0 ? 'text-success' : 'text-danger' }} text-sm font-weight-bolder">+{{ count($todaytotalevents) }}</sup>
                            </div>

                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-car display-4"></i>
                    </div>
                    @php
                        $totalgallery = App\Models\File::get();
                        $today = date('Y-m-d');
                        $todaytotalgallery = App\Models\File::whereDate('created_at', '=', $today)->get();

                    @endphp
                    <a href="{{ route('gallery.index') }}">
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Gallery</h4>
                            </div>
                            <div class="card-body">
                                {{ count($totalgallery) }} <sup
                                    class="{{ count($todaytotalgallery) > 0 ? 'text-success' : 'text-danger' }} text-sm font-weight-bolder">+{{ count($todaytotalgallery) }}</sup>
                                {{-- 23 --}}
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">{{ ucwords(Auth::user()->name) }}</h2>
            {{-- <p class="section-lead">Change information about yourself on this page.</p> --}}

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            @php
                                $totaltestimony = App\Models\Testimony::get();
                                $today = date('Y-m-d');
                                $todaytotaltestimony = App\Models\Testimony::whereDate('created_at', '=', $today)->get();

                            @endphp
                            <img alt="image" src="{{ Auth::user()->getMedia('avatar')->first()->getFullUrl() }}"
                                class="rounded-circle profile-widget-picture">
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Total comments</div>
                                    <div class="profile-widget-item-value"></div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Total testimony</div>
                                    <div class="profile-widget-item-value">{{ count($totaltestimony) }}</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Todays testimony</div>
                                    <div class="profile-widget-item-value">{{ count($todaytotaltestimony) }}</div>
                                </div>
                            </div>
                        </div>




                        <div class="card-header">
                            <div id="success_activate"></div>
                        </div>

                        <div class="card-body p-3">
                            <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                            <p><small>Notify me when ....</small> </p>
                            <ul class="list-group" id="refreshme">
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto"
                                            onchange="activateme(this.value, {{ $setting->blog_notification }})"
                                            status="#" value="blog_notification" type="checkbox" id="flexSwitchCheckDefault"
                                            {{ $setting->blog_notification == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault">New blog added</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto"
                                            onchange="activateme(this.value, {{ $setting->comment_notification }})"
                                            value="comment_notification " type="checkbox"
                                            {{ $setting->comment_notification == 1 ? 'checked' : '' }}
                                            id="flexSwitchCheckDefault1">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault1">Someone answers on blog</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto"
                                            onchange="activateme(this.value, {{ $setting->gallery_notification }})"
                                            value="gallery_notification" type="checkbox" id="flexSwitchCheckDefault2"
                                            {{ $setting->gallery_notification == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault2">New photo add to gallery</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto"
                                            onchange="activateme(this.value, {{ $setting->book_notification }}"
                                            value="book_notification" type="checkbox" id="flexSwitchCheckDefault2"
                                            {{ $setting->book_notification == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault2">New book</label>
                                    </div>
                                </li>

                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto"
                                            onchange="activateme(this.value, {{ $setting->event_notification }}"
                                            value="event_notification " type="checkbox" id="flexSwitchCheckDefault2"
                                            {{ $setting->event_notification == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault2">New event</label>
                                    </div>
                                </li>

                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto"
                                            onchange="activateme(this.value, {{ $setting->email_notification }}"
                                            value="email_notification " type="checkbox" id="flexSwitchCheckDefault2"
                                            {{ $setting->email_notification == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault2">Email notification</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto"
                                            onchange="activateme(this.value, {{ $setting->nugget_notification }}"
                                            value="nugget_notification " type="checkbox" id="flexSwitchCheckDefault2"
                                            {{ $setting->nugget_notification == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault2">Nugget notification</label>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>



                {{-- </div> --}}
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <h4>Profile Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label class="fa fa-user"></label>
                                    <h6>{{ ucwords(Auth::user()->name) }}</h6>
                                </div>

                                <div class="form-group col-md-4 col-12">
                                    <label class="fa fa-phone"></label>
                                    <h6>{{ Auth::user()->phone }}</h6>
                                </div>
                                <div class="form-group col-md-4 col-12">
                                    <label class="fas fa-envelope"></label>
                                    <h6>{{ Auth::user()->email }}</h6>
                                </div>
                                <div class="form-group col-md-4 col-12">
                                    <label class="fa fa-phoe">Role</label>
                                    <h6>{{ Auth::user()->role }}</h6>
                                </div>
                                <div class="form-group col-md-4 col-12">
                                    <label class="fa fa-home"></label>
                                    <h6>{{ Auth::user()->address }}</h6>
                                </div>

                            </div>



                        </div>
                        <div class="card-footer text-right">
                            <a href="#change" data-toggle="collapse" class="btn btn-primary">Changes</a>
                        </div>
                        </form>
                    </div>
                    <div id="uppreviewimage"></div>
                    <div id="change" class=" card collapse">
                        <div class="card-header">
                            <h4>{{ Auth::user()->name }} profile settings</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('users.update', Auth::user()->id) }}" enctype="multipart/form-data"
                                method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ Auth::user()->name, old('name') }}" required autocomplete="name"
                                            autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                    <div class="col-md-6">
                                        <input id="username" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email" disabled
                                            value="{{ Auth::user()->email, old('email') }}" required
                                            autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="phone"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ Auth::user()->phone, old('phone') }}" required
                                            autocomplete="email">

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="image"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Profile picture') }}</label>

                                    <div class="col-md-6">
                                        <input id="upimage" type="file" accept="image/*"
                                            class="form-control @error('image') is-invalid @enderror" name="image"
                                            value="{{ old('image') }}" autocomplete="email">

                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>



                                </div>
                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Contact Address') }}</label>

                                    <div class="col-md-6">
                                        <textarea class="form-control @error('email') is-invalid @enderror" name="address"
                                            rows="5" id="comment">
                                                                   {{ Auth::user()->address, old('address') }}
                                                               </textarea>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="oldpassword"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Old password') }}</label>

                                    <div class="col-md-6">
                                        <input id="oldpassword" type="password"
                                            class="form-control @error('oldpassword') is-invalid @enderror"
                                            name="oldpassword">

                                        @error('oldpassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Password') }} <small
                                            class="text-danger text-left">Leave password empty if not
                                            change</small></label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>



    <div class="row">


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
                                            <img style="height: 150px; width:100%"
                                                src="{{ $blog->getImage($blog->content) != '' ? $blog->getImage($blog->content) : '../assets/img/home-decor-1.jpg' }}"
                                                alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
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

                                            <a href="{{ route('readblog', [$blog->id, str_replace(' ', '_', $blog->title)]) }}"
                                                class="btn btn-outline-primary btn-sm mb-0">
                                                View Content
                                            </a>
                                            <small>
                                                <a href="{{ route('readblog', [$blog->id, str_replace(' ', '_', $blog->title)]) }}"
                                                    class="bg-primary p-1 rounded">
                                                    <span class="fa fa-comment"></span> <span
                                                        class="badge badge-light">{{ $blog->getNumbersOfComment($blog->id) }}</span>
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
    @endsection
    @section('script')
        <script>
            $(document).ready(function(e) {
                $('.form-check-inpu').on('click', function(e) {
                    var activateme = $(this).val();
                    var status = $(this).attr('status');
                    var message = status == 1 ? "deactivate" : "activate";
                    var activatore = activateme.replace("_", " ");
                    if (confirm("Are you sure you want " + message + " this notification")) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            data: {
                                activate: activateme,
                                status: status
                            },
                            type: "POST",
                            url: "{{ route('activate_notification') }}",
                            success: function(response) {
                                $('#success_activate').html(
                                    '<div class="alert alert-success alert-dismissible">' +
                                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                    '<strong>Success! </strong>' + response +
                                    '</div>');
                                $("#refreshme").load(" #refreshme");
                            }
                        })

                    }
                })
            })

            function activateme(activateme, status) {
                // alert(activateme);
                var message = status == 1 ? "deactivate" : "activate";
                var activatore = activateme.replace("_", " ");

                if (confirm("Are you sure you want " + message + " " + activatore)) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {
                            activate: activateme,
                            status: status
                        },
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
