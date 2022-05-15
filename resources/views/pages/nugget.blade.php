
@extends('layouts.app')
@section('title', 'Nuggets')
@section('style')
    <style>

.backindex {
            background-color: rgb(235, 232, 232);
            color: black !important;
            border-radius: 10px;
            /* box-shadow: 0 4px 8px 0 #f1d48b, 0 6px 20px 0 #dba928; */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }
        .backindexe {
            /* background-color:#f1d48b; */
            background-color: rgb(235, 232, 232);

            color: black;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding: 10px;
        }

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

        <div class="card-columns">
@foreach ($nuggets as $nugget)

            {{-- <div class="col-md-6 card" id="nugget{{ $nugget->id }}">
                <div class="row card-body m-1 bg-black ">
                    <div class="col-md-4 ">
                        $nugget->getMedia('nuggets')->first()->getFullUrl() != "" ?   $nugget->getMedia('nuggets')->first()->getFullUrl()
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
            </div> --}}

            <div class="card">
                <a href="{{ $nugget->getMedia('nuggets')->first() ?   $nugget->getMedia('nuggets')->first()->getFullUrl():asset('assets/images/anonymous.png') }}" target="_top" rel="noopener noreferrer">
                <img  class="card-img-top" src="{{ $nugget->getMedia('nuggets')->first() ?   $nugget->getMedia('nuggets')->first()->getFullUrl():asset('assets/images/anonymous.png') }}" alt="Card image">
                <div class="card-img-overlay">
                  {{-- <h1 class="card-title">John Doe</h1> --}}
                  <a  class="btn btn-primary" href="{{ $nugget->getMedia('nuggets')->first() ?   $nugget->getMedia('nuggets')->first()->getFullUrl():asset('assets/images/anonymous.png') }}" target="_blank" rel="noopener noreferrer">
                    View Nugget
                </a>
                </div>
            {{-- </a> --}}
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
