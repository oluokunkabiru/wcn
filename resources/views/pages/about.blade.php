
@extends('layouts.app')
@section('title', 'About us')
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


    section {
        padding: 10px;
    }


    .imgs {
        max-width: 100%;
        height: 250px;
        visibility: hidden;
    }

    .imgss {
        max-width: 100%;
        height: auto;
        visibility: hidden;
    }


    .background {
        background-repeat: no-repeat;
        background-image: linear-gradient(to top right, black 1%, white), url({{ asset("assets/('images/wallpaper-1.jpg") }});
        box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        width: 100%;
        padding: 5%;
        text-align: center;
        color: #dba928;
    }

    .hede {
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
        border: 2px solid #dba928;
        ;
        padding: 3px;
    }


    .quotes {
        color: black;
        /* text-align:right; */
        line-height: 1.8;
    }

    .quotess {
        color: black;
        text-align: left;
        line-height: 1.8;
    }


    .newe {
        max-width: 100%;
        height: 100%;


    }

    .awesome {
        font-size: 20px;
        color: black;
    }

    .values {
        color: black;
        text-align: justify;
    }

</style>
@endsection
@section('content')

<section>
    <div class="container  " style="margi-top: 50px; margi-bottom: 10px">
        <div class="row">
            <div class="offset-lg-2"></div>

            <div class="col-lg-8">
                <h4 class=" hede wow font-weight-bold fadeOutRightBig" data-wow-duration='2s' data-wow-delay='0.5s'>
                    {{--  <i class="fa fa-info-circle" style="font-size:40px;color:#dba928"></i>  --}}

                    {{--  About Us  --}}
                </h4>
            </div>
            <div class="offset-lg-2"></div>

        </div>
    </div>

    <div class="container px-2">

        <div class="row text-center">
            <div class="col-md-1"></div>
            {{--  <div class="col-lg-6">
                <div class="backindexe font-weight-bold pb-4 ">
                    <h5 class="quotes">
                        <i class="fa fa-quote-left " style="font-size:40px;color:black; margin-right:250px"></i><br>
                        {!! $configuration->youth_qoute1 !!}
                        <i>{{ ucwords($configuration->youth_qoute1_by) }}</i>
                    </h5>

                </div>
            </div>  --}}
            <div class="col-10 text-justify">
                <div class="quotes pt-4">
                    <h6 class=" quotes" style="">
                        Word Central Global Network (WCN) is a vibrant youth
                        ministry dedicated to liberating youths from the shackles
                        of perversion, transforming  them to be lights in a perverse
                        and crooked world, and releasing  them as guided missiles
                        to impact their world in the market place; campuses,
                        fellowships, Churches, families, etc.
                        Word Central Global Network, as the name implies, firmly
                        believes in the efficacy of the Word of God to transform
                        lives and we have seen this happen over the years.
                    </h6>

                    <h4 style="color:#dba928; text-align:left;">Conception </h4>
                    <h6 class=" quotes " style="text-align:left;">
                        Word Central was first conceived in 1999 as “Eagle’s Era”
                        - a Youth gathering which hosted as many as 400 Youths,
                        praying, praising and rediscovering identity together as
                        the move of the Holy Spirit in various dimensions was
                        experience....
                        <a href="#myModal" data-toggle="modal" class="text text-warning" >
                            Continue reading
                        </a>

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


                                <h1 style="color:#dba928">Conception </h1>
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
            <div class="col-md-1"></div>
        </div>
    </div>

</section>


<section>
    <div class="container">
        <div class="row no-gutters">
            <div class="offset-lg-1"></div>

            <div class="col-md-3">
                <div class="services-2">
                    {{--  <div><i class="fa fa-eye values" style="font-size:50px"></i></div>  --}}
                    <div class="text values">
                        <h4 style="color:#dba928">The Vision</h4>
                        <p> To raise a crop of youths who would catch the fire of
                            the Holy Ghost, come alive, be revived themselves,
                            and then, begin to cause an unstoppable revival in our
                            days towards seeing the continuity of the faith handed
                            us by the fathers and an increase of the same through
                            dedicated and calculated youth meetings, mentorship
                            initiatives and discipleship programs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services-2">
                    {{--  <div><span class="fa fa-bullseye values" style="font-size:50px"></span></div>  --}}
                    <div class="text values ">
                        <h4 style="color:#dba928">The Mission</h4>
                        <p> We help youths see the value heaven places on their soul,
                            engage them in active service in God’s Kingdom, subject
                            them to an environment of leadership and commission
                            them to do the same at the appointed time thus producing
                            men of purpose, focus, discipline, having themselves
                            been products of the same.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mt-3 d-flex">
                <div class="backindexe services-2">
                    {{--  <div><span class="pt-4 fa fa-key values" style="font-size:50px"></span></div>  --}}

                    <div class="text values">
                        <h4 style="color:black;">Core Value</h4>

                        We believe all members of Word Central Global Network; <br>
                        a. Must be born again, <br>
                        b. Must have a desire to grow spiritually, <br>
                        c. Must be willing to be trained and well-rounded <br>
                        d. Must be dedicated and sacrificial (spiritually and
                        financially), and otherwise <br>
                        e. Must be ministry-oriented and vision driven <br>
                        f. Must be acquiescent to leadership and strive to
                        be one<br>
                        g. Must be oriented towards consistent service
                        over the years.
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
@section('script')
    <script>
  $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

    </script>
@endsection
