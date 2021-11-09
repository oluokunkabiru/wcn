{{-- @php
        $configuration =App\Models\Setting::where('id', 1)->first();
@endphp --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WCN - @yield('title')</title>
    @include('users.members.layouts.style')
    @yield('style')
</head>
<body class="layout-4">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <span class="loader"><span class="loader-inner"><i class="fa fa-bus"></i></span></span>
    </div>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('users.members.layouts.navbar')
            <div class="main-content">

            @yield('content')

            </div>

@include('users.members.layouts.footer')
        </div>
    </div>


    @include('users.members.layouts.script')
    @yield('script')
</body>
</html>

