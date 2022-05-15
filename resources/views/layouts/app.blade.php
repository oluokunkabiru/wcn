<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>WCN - @yield('title')</title>

@include('layouts.style')
<style>
    html body, .container{
        /* font-family:  Helvetica */
        font-family: Helvetica,cursive,Arial,  sans-serif !important;
    }
</style>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    @yield('style')

</head>
<body>
    @include('layouts.header')
      @yield('content')
    @include('layouts.footer')
    @include('layouts.script')
    @yield('script')
</body>
</html>
