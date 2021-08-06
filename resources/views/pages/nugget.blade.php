
@extends('layouts.app')
@section('title', 'Nuggets')
@section('style')
    <style>

/* .backindex{
      background-color: black;
      color: #dba928;
      border-radius:10px;
      box-shadow: 0 4px 8px 0 #f1d48b, 0 6px 20px 0 #dba928;

    }

    .backindexe{
      background-color:#f1d48b;
      color: black;
      border-radius:5px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      padding: 10px;
    } */
/*
    .imgs{
      max-width:100%;
      height:250px;
      visibility: hidden;
      }

    .imgss{
      max-width:100%;
      height:auto;
      visibility: hidden;
    }


      .background {
    background-repeat: no-repeat;
    background-image: linear-gradient(to top right, black 1%,white ), url({{ asset('assets/images/wallpaper-1.jpg') }});
    box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    width: 100%;
    padding: 5%;
    text-align: center;
    color: #dba928;
  }
  .hede{
    color: black;
    width: 100%;
    padding: 5%;
    text-align: center;


  } */

    </style>
@endsection
@section('content')


    <section>
    <div class="container">

        <div class="row">

@foreach ($nuggets as $nugget)

            <div class="col-md-6 card" id="nugget{{ $nugget->id }}">
                <div class="row card-body m-1 bg-black ">
                    <div class="col-md-4 ">
                    <img src="{{ $nugget->user->getMedia('avatar')->first()->getFullUrl() }}" class="card-img" alt="{{ ucwords($nugget->user->name) }}">
                    </div>
                    <div class="col-md-8">
                        <div class="text-white">
                          <i class="fa fa-quote-left" style="font-size:48px;color:white" ></i>
                          {!! $nugget->getLimitedContent($nugget->qoute) !!}

                          <p>
                            <i>{{ ucwords($nugget->user->name) }}</i>
                          </p>
                        </div>
                    </div>
                  </div>
            </div>
            @endforeach

    </div>
    {{ $nuggets->links() }}
    </section>
@endsection
@section('script')
    <script>


    </script>
@endsection
