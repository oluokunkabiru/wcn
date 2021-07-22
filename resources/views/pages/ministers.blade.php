
@extends('layouts.app')
@section('title', 'Gallery')
@section('style')
    <style>


    </style>
@endsection
@section('content')


    <section>
    <div class="container">

        <div class="row">
            @for ($i = 0; $i < 10; $i++)
            
            @endfor
            </div>
        </div>
    </div>
    </section>
@endsection
@section('script')
    <script>


    </script>
@endsection
