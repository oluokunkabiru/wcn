@extends('layouts.app')
@section('title', 'Home')
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
    /* text-align:right; */
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
    @php
    $configuration =App\Models\Configuration::with('user')->where('id', 1)->first();

@endphp
          <div class="wow  fadeOutLeftBig" data-wow-duration='2s' data-wow-delay='0.5s'>
          <div class="site-section bg-white pb-0 ">
            <div class="container-fluid">
              <div class="row align-items-stretch overlap">
                <div class="col-md-8">

                  <div class="box h-100 backindex" >
                    <div class="d-flex align-items-center">
                    <div class="row">
                      <div class="col-md-4 ">
                          <div class="img d-flex" style="background-image:url({{ $configuration->getMedia('youth quote by')->first()->getFullUrl() }});"><img src="{{ asset('assets/images/welcome-note.jpg') }}" class="imgs " alt="Image"></div>
                      </div>
                      <div class="col-md-8">
                          <div class="text-white">
                            <h3 class="text-white"><i class="fa fa-quote-left" style="font-size:48px;color:white" ></i></h3>
                           {!!  $configuration->youth_qoute !!}
                            <p>
                              <i>{{ ucwords($configuration->youth_qoute_by)  }}</i>
                            </p>
                          </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box small h-100 backindexe">
                      @foreach ($blogs as $blog)
                    <div class="d-flex align-items-center mb-2">
                        <div class="img"><img src="{{ $blog->getMedia('blogs')->first()->getFullUrl() != "" ?   $blog->getMedia('blogs')->first()->getFullUrl():"../assets/img/home-decor-1.jpg" }}" class="img-fluid" alt="Image"></div>
                        <div class="text ">
                            <h3 ><a href="{{ route('readblog', [$blog->id, str_replace(" ", '_', $blog->title)]) }}">{{ $blog->title }}</a></h3>
                        </div>
                        </div>
                        <hr>
                      @endforeach


                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>

    </section>

    <section>
      <div class="container  " style="margin-top: 50px; margin-bottom: 10px">
        <div class="row">
            <div class="offset-lg-2"></div>

            <div class="col-lg-8">
                      <h4 class=" hede wow  fadeOutRightBig" data-wow-duration='2s' data-wow-delay='0.5s' >
                      <i class="fa fa-info-circle" style="font-size:40px;color:#dba928" ></i>

                      About Us</h4>
            </div>
            <div class="offset-lg-2"></div>

        </div>
      </div>

     <div class="container mb-5">
     <div class="row">
        <div class="col-lg-6">
          <div class="backindexe font-weight-bold pb-4 ">
          <h5 class="quotes">
          <i class="fa fa-quote-left " style="font-size:40px;color:black; margin-right:250px" ></i><br>
               {!! $configuration->youth_qoute1 !!}
                <i>{{ ucwords($configuration->youth_qoute1_by)  }}</i>
            </h5>

          </div>
        </div>
        <div class="col-lg-6 ">
          <div class="quotes pt-4">
            <h6 class=" quotes " style="  text-align:left;">
{!! $configuration->about_us !!}
            </h6>

              <h4  style="color:#dba928; text-align:left;" >Conception </h4>
              <h6 class=" quotes " style="text-align:left;">
              Word Central was first conceived in 1999 as “Eagle’s Era” <br>
                - a Youth gathering which hosted as many as 400 Youths,
                praying,<br> praising and rediscovering identity together as
                the move of the<br> Holy Spirit in various dimensions was
                experience....
                <i type="text" class="text text-warning" data-toggle="modal" data-target="#myModal">
                Continue reading
                 </i>

              </h6>

          </div>


            <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">About Word Central Global Network</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
            <p> <strong> Word Central Global Network (WCN)</strong>
              is a vibrant youth
              ministry dedicated to liberating youths from the shackles
              of perversion, transforming them to be lights in a perverse
              and crooked world, and releasing them as guided missiles
              to impact their world in the market place; campuses,
              fellowships, Churches, families, etc.
              Word Central Global Network, as the name implies, firmly
              believes in the efficacy of the Word of God to transform
              lives and we have seen this happen over the years.
            </p>


            <h1 style="color:#dba928" >Conception </h1>
            <p>Word Central was first conceived in 1999 as “Eagle’s Era”
                - a Youth gathering which hosted as many as 400 Youths,
                praying, praising and rediscovering identity together as
                the move of the Holy Spirit in various dimensions was
                experience.
                Apst Dr Faith Oniya has been burdened with a passion to
                see youths live godly lives for over two (2) decades now.
                He believes this burden can be adequately expressed
                towards seeing a transformed generation of youths
                on fire and he believes this is only possible when
                youths give themselves over and wholly to God
                as he transforms them, uses them for his glory
                and increase them in every ramification of their
                lives. He is sold out to helping many youths
                discover what their purpose in life truly is, teach
                them the nuggets and virtues they need to
                achieve purpose, help them understand
                the principles of instigation and their
                personal rules of engagement, and
                teach them to secure and have a
                deeper relationship with God.
                He was in a marathon prayer session
                early in the year 1998 and in one of those
                days he saw a vision of a flying eagle
                which dropped a pearl. He immediately
                understood the symbolisms of this vision;
              </p>
              <p>
                          <h1>The Eagle:</h1>
              Youthfulness, Waiting upon the Lord, Strength, Resilience,
              Vision. He immediately understood it was a ministry for
              the youths and youthful at heart and knew he was being
              tasked to raise a focused, adventurous, vibrant, benign
              and grounded crop of youths for the kingdom of God.
              This is even more needed at these times.
              </p>

              <p>
              He also began to understand most importantly that
              this was only going to be possible by the power
              and help of the Holy Spirit as the eagle perfectly
              symbolizes the swift move of God’s Spirit for
              a revival in power.
              </p>

              <p>
              <h1>The Pearl:</h1>
              Value, Quality, Preciousness, spiritual
              wealth, promising future and a better
              tomorrow, purity, wisdom, patience,
              and peace.
              </p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>

        </div>
      </div>
     </div>

    </section>

    <section >
      <div class="container">
            <div class="row no-gutters">
              <div class="offset-lg-1"></div>

              <div class="col-md-3">
                <div class="services-2">
                  <div><i class="fa fa-eye values" style="font-size:50px"></i></div>
                  <div class="text values">
                    <h4 style="color:#dba928">The Vision</h4>
                   {!! $configuration->vision !!}
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="services-2">
                  <div ><span class="fa fa-bullseye values" style="font-size:50px"></span></div>
                  <div class="text values ">
                    <h4 style="color:#dba928">The Mission</h4>
                {!! $configuration->mission !!}
                </div>
                </div>
              </div>
              <div class="col-md-5 mt-3 d-flex">
                <div class="backindexe services-2">
                  <div ><span class="pt-4 fa fa-key values" style="font-size:50px"></span></div>

                  <div class="text values">
                    <h4 style="color:black;">Core Value</h4>

                  {!! $configuration->core_value !!}
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      </section>

    <section>
      <div class="container " style="margin-top: 50px; margin-bottom: 10px">
      <div class="row">
          <div class="offset-lg-2"></div>

          <div class="col-lg-8">
                    <h4 class=" hede wow  fadeOutRightBig" data-wow-duration='2s' data-wow-delay='0.5s' >
                    <i class="fa fa-envelope-open" style="font-size:40px;color:#dba928" ></i>
                    Pioneer's Message</h4>
          </div>
          <div class="offset-lg-2"></div>

      </div>
      </div>

      <div class="container">
     <div class="row">

        <div class="col-lg-6">
          <div class="quotes justify pt-4">

            <h6 class=" quotes " style="text-align:justify;">

           {!! $configuration->pioneer_message !!}

            </h6>


          </div>


            <!-- The Modal -->


        </div>


     <div class="col-lg-6">
          <div class="backindexe font-weight-bold pb-4 ">
          <h5 class="quotess">
          <i class="fa fa-quote-right " style="font-size:40px;color:black; margin-left:250px" ></i><br>
   {!! $configuration->pioneer_message1 !!}

               <i> - {{ ucwords($configuration->pioneer_message_by) }}</i>
            </h5>

          </div>
        </div>
     </div>
      </div>


    </section>

    <section>
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
                  <div class="row"  style="max-height:200px; overflow:hidden">
                      <div class="col-lg-12">
                          {!! $event->getLimitedContent($event->content) !!}
                      </div>
                  </div>
                  <a href="{{ route('readEvent', [$event->id, str_replace(" ", '_', $event->title)]) }}" class="btn " style="background-color:#dba928 ;">Read More</a>

              </div>
            </div>

           </div>
      @empty
      <h1 class="text-danger text-center">No Event at this moment</h1>
      @endforelse


    </div>



    </section>

    {{-- <section class="testimonials" id="testimonial" style="  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(images/wallpaper-1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2 class="font-weight-bold mb-5" style="color: #dba928;">OUR AWESOME MEMBERS</h2>
            <div class="sub-heading">

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
              <div id="demo" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>

                  </ul>

                  <!-- The slideshow for our customers -->
                  <div class="carousel-inner">

                    <div class="carousel-item active text-center ">
                        <div class="card-columns">
                        @for ($i = 0; $i < 3; $i++)


                        <div class="card">
                            <img src="{{ $members[$i]->getMedia('avatar')->first()->getFullUrl() }}" alt="carousel image " class="center-block">
                             <h3 class="text-align  text-dark font-weight-bold center text-uppercase">{{ $members[$i]->role=="admin"?"pastor":"member" }}</h3>

                        </div>

                         @endfor
                         </div>
                    </div>

                    @for ($member=3; $member < count($members); $member+=3)
                         <div class="carousel-item text-center">
                             <div class="card-columns">
                                 @for ($i = 0; $i < 3; $i++)
                                <div class="card">
                                    <img src="{{ $members[$member+$i]->getMedia('avatar')->first()->getFullUrl() }}" alt="carousel image " class="center-block">
                                     <h3 class="text-align  text-dark font-weight-bold center text-uppercase">{{ $members[$member+$i]->role=="admin"?"pastor":"member" }}</h3>

                                </div>
                                 @endfor


                             </div>
                        </div>
                      @endfor
                  </div>

                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>

                </div>
          </div>
        </div>
      </div>

    </section> --}}
    <section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container-fluid px-md-0">
            <div class="row">
                <div class="offset-lg-2"></div>

                <div class="col-lg-8">
                          <h4 class=" hede wow  fadeOutRightBig" data-wow-duration='2s' data-wow-delay='0.5s' >
                          <i class="fa fa-users" style="font-size:40px;color:#dba928" ></i>
                          Our awesome member</h4>
                </div>
                <div class="offset-lg-2"></div>

            </div>


			<div class="row no-gutters">
                @php
                    $index =0;
                @endphp

            @forelse ($members as $member)
            @if ($index%7)
            <div class="col-md-3">
                <a href="{{ $member->getMedia('avatar')->first()->getFullUrl() }}" class="image-popup img gallery ftco-animat" style="background-image: url({{ $member->getMedia('avatar')->first()->getFullUrl() }});">
                    <span class="overlay"></span>
                </a>
            </div>
            @else
            <div class="col-md-6">
                <a href="{{ $member->getMedia('avatar')->first()->getFullUrl() }}" class="image-popup img gallery ftco-animat" style="background-image: url({{ $member->getMedia('avatar')->first()->getFullUrl() }});">
                    <span class="overlay"></span>
                </a>
            </div>
            @endif
                @php
                    $index++;
                @endphp
            @empty
                    <h2 class="text-center font-weight-bold text-danger">No members available for now</h2>
            @endforelse


			</div>
		</div>
	</section>


    <section>
      <div class="site-section bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 text-center mb-5">
              <div class="heading">
                <span class="caption" style="color: #dba928;">Testimonies</span>
              </div>
            </div>
          </div>
          <div class="row">
              @forelse ($testimonys as $testimony)
              <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="testimonial-2">
                {{-- <h3 class="h5">God is Good</h3> --}}
                <blockquote class="mb-4"  style="max-height:200px; overflow:hidden">
                    {!! $testimony->testimony !!}
                </blockquote>
                <div class="d-flex v-card align-items-center">
                  <img src="{{ $testimony->user->getMedia('avatar')->first()->getFullUrl() }}" alt="Image" class="img-fluid mr-3">
                  <div class="author-name">
                    <span class="d-block">{{ ucwords($testimony->user->name) }}</span>
                  </div>
                  <a href="#fulltestimony" data-toggle="modal" testimony="{!! $testimony->testimony !!}" username="{{ ucwords($testimony->user->name) }}" img="{{ $testimony->user->getMedia('avatar')->first()->getFullUrl() }}" class="btn btn-warning btn-block">Read full</a>
                </div>
              </div>
            </div>

              @empty
                    <h3 class="text-danger font-weight-bold text-center">No recent testimony</h3>
              @endforelse


          </div>
          {{ $testimonys->links() }}
        </div>
      </div>
      <div class="modal" id="fulltestimony">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-uppercase">View testimony </h4>
            <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body ">
                <div class="row">
                    {{-- <div class="col-4"> --}}
                        <img src="" class="card-img" id="userimg" alt="">
                        {{-- <div class="card"> --}}
                            <h5 class="text-center my-1" id="username"></h5>
                        {{-- </div> --}}
                    {{-- </div> --}}
                    <div class="container">
                        <span id="full"></span>
                    </div>
                </div>

            </div>
        </div>
         </div>
</div>
    </section>


    <section>
      <div class="container " style="margin-top: 50px; margin-bottom: 10px">
        <div class="row">
            <div class="offset-lg-2"></div>

            <div class="col-lg-8 ">
                      <h4 class=" hede wow font-weight-bold  fadeOutRightBig" data-wow-duration='2s' data-wow-delay='0.5s' >
                      <i class="fa fa-image" style="font-size:50px;color:#dba928" ></i>
                      Gallery</h4>
            </div>
            <div class="offset-lg-2"></div>

        </div>

        <!-- Full-width images with number text -->
        @foreach ($gallerys as $gallery)
            <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img src="{{ $gallery->getMedia('gallery')->first()->getFullUrl() }}" style="width:100%">
            </div>
        @endforeach







      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <!-- Image text -->
      <div class="caption-container">
        <p id="caption"></p>
      </div>

      <!-- Thumbnail images -->
      <div class="row">
          @php
              $i=0;
          @endphp
          @foreach ($gallerys as $gallery)
            <div class="column">
             <img class="demo cursor" src="{{ $gallery->getMedia('gallery')->first()->getFullUrl() }}" style="width:100%" onclick="currentSlide({{ ++$i }})" alt="">
            </div>
          @endforeach


      </div>


      </div>
    </section>

@endsection
@section('script')
<script>
     $('#fulltestimony').on('show.bs.modal', function(e){
        var name = $(e.relatedTarget).attr('username');
        var img = $(e.relatedTarget).attr('img');
        var testimony = $(e.relatedTarget).attr('testimony');
        $("#full").html(testimony);
        $("#username").text(name);
          $("#userimg").attr("src", img);

     })
</script>

@endsection

