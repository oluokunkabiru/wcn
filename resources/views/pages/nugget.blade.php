
@extends('layouts.app')
@section('title', 'Gallery')
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

            @for ($i = 0; $i < 10; $i++)

            <div class="col-md-6 card">
                <div class="row card-body m-1 bg-black ">
                    <div class="col-md-4 ">
                    <img src="{{ asset('assets/images/welcome-note.jpg') }}" class="card-img" alt="Image">
                    </div>
                    <div class="col-md-8">
                        <div class="text-white">
                          <i class="fa fa-quote-left" style="font-size:48px;color:white" ></i>
                          <p>The best gift to the world is the gift
                            of salvation. The best gift to the
                            church is the gift of the word.
                            We have been sent with a
                            message. The devil can’t shut us
                            up, nothing can stop us, we have
                            a message that must be heard,
                            and that message is the word of
                            peace and hope, of rest and of
                            the finished work.
                          </p>
                          <p>
                            <i>Apostle Dr. Faith Oniya</i>
                          </p>
                        </div>
                    </div>
                  </div>
            </div>
            @endfor

    </div>
    </section>
@endsection
@section('script')
    <script>


    </script>
@endsection
