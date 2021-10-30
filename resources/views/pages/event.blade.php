
@extends('layouts.app')
@section('title', 'Event')
@section('style')
    <style>

    .backindex{
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
    }

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
    background-image: linear-gradient(to top right, black 1%,white ), url({{ asset("assets/('images/wallpaper-1.jpg") }});
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


  }

  .testimonials .carousel-inner .carousel-item img {
    position: relative;
    max-width: 150px;
    height: 150px;
    border-radius: 100%;
    border: 2px solid #dba928;;
    padding: 3px;
  }


  .quotes{
    color:black;
    text-align:right;
    line-height: 1.8;
  }

  .quotess{
    color:black;
    text-align:left;
    line-height: 1.8;
  }


  .newe{
    max-width:100%;
    height:100%;


  }

  .awesome{
    font-size:20px;
    color:black;
  }

  .values{
    color: black;
    text-align: justify;
  }
    </style>
@endsection
@section('content')


    <section>
    {{-- <div class="container">

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
        </div> --}}
    <div class="container " style="margin-top: 50px; margin-bottom: 10px">
        <div class="row">
            <div class="offset-lg-2"></div>

            <div class="col-lg-8 ">
                      <h4 class=" hede wow font-weight-bold  fadeOutRightBig" data-wow-duration='2s' data-wow-delay='0.5s' >
                      <i class="fa fa-calendar" style="font-size:40px;color:#dba928" ></i>
                      Events</h4>
            </div>
            <div class="offset-lg-2"></div>

        </div>
@forelse ($events as $event)

  <div class="box h-100 site-section" >

      <div class="row  align-items-stretch ">
        <div class="col-lg-4">
          <div class="img d-flex" style="background-image:url({{ $event->getMedia('events')->first()->getFullUrl() != "" ?   $event->getMedia('events')->first()->getFullUrl():"../assets/img/home-decor-1.jpg" }});"><img src="{{ $event->getMedia('events')->first()->getFullUrl() != "" ?   $event->getMedia('events')->first()->getFullUrl():"../assets/img/home-decor-1.jpg" }}" class="imgs " alt="Image"></div>

        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-2"><div  style="display: inline-block; background-color:black;color:#dba928 ; border-radius: 4px 4px 4px 4px;text-align: center ">
                     <h1 style="display:block; background-color:#dba928;color: black; border-radius: 4px 4px 0 0; padding: 15px;">{{ date("d", strtotime($event->date)) }}</h1>{{ date("M", strtotime($event->date)) }}
                 </div>
                </div>
                <div class="col-lg-10"><div><h1> {{ $event->title }}</h1>
                 <i class="fa fa-calendar " style="color:#dba928 ;"> <span  style="color:black ;"> {{ $event->date }}</span> </i> &nbsp;
               <i class="fa fa-map-marker"  style="color:#dba928 ;"> <span  style="color:black ;">Word Central Global Network</span> </i> </div>  </div>
            </div>
            <div class="row">
                <div class="col-lg-12"  style="max-height:200px; overflow:hidden">
                    {!! $event->getLimitedContent($event->content) !!}
                </div>
            </div>
            <a href="{{ route('readEvent', [$event->id, str_replace(" ", '_', $event->title)]) }}"  style="border: #dba928 solid " class="text-center mx-2 p-2 text-dark">Read More</a>

        </div>
      </div>

     </div>
@empty
<h1 class="text-danger text-center">No Event at this moment</h1>
@endforelse


    </div>
    </div>
    </section>

@endsection
@section('script')
    <script>


    </script>
@endsection
