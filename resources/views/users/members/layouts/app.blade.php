<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>WCN => @yield('title')</title>
@include('users.members.layouts.style')
    <!-- Scripts -->
    {{--  <script src="{{ asset('js/app.js') }}" defer></script>  --}}

    <!-- Fonts -->
    @yield('style')

</head>
<body class="g-sidenav-show  bg-gray-100">
    @include('users.members.layouts.header')
      @yield('content')
    @include('users.members.layouts.footer')
    @include('users.members.layouts.script')
    @yield('script')
</body>
</html>
