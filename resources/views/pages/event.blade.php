
@extends('layouts.app')
@section('title', 'Event')
@section('style')
    <style>
    </style>
@endsection
@section('content')


    <section>
    <div class="container">

        <div class="row">
            @foreach ($events as $event)
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img  style="height: 150px; width:100%"src="{{ $event->getImage($event->content) != "" ?  $event->getImage($event->content):"../assets/img/home-decor-1.jpg" }}" alt="{{ $event->title }}"
                                                class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                    <div class="card-body px-1 pb-0" style="height: 200px; overflow:hidden">
                                        <a href="javascript:;">
                                            <h5>
                                                {{ $event->title }}
                                                </h5>
                                            <small>Date: {{ $event->date }}</small>
                                        </a>
                                        {!! $event->getLimitedContent($event->content) !!}


                                    </div>
                                    <div class="card-footer float-right">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{ route('readEvent', [$event->id, str_replace(" ", '_', $event->title)]) }}" class="btn btn-outline-primary btn-sm mb-0">
                                                View event
                                            </a>
                                            </div>
                                    </div>
                                </div>
                            </div>
            @endforeach


            </div>
            <div class="text-right my-2">
                {{ $events->links() }}
            </div>
        </div>
    </div>
    </section>
@endsection
@section('script')
    <script>


    </script>
@endsection
