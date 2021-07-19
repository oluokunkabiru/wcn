<div class="icon-bar" >
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
  </div>

  <nav class="navbar  site-wrap navbar-expand-md navbar-dark sticky-top" style="z-index:3;   background-color: black;">
          <div class="container-fluid">
              <a class="navbar-brand mb-0 p-0" style = "color:#dba928;   font-size: 15px;" href="index.php"><img class="mr-3"  src="{{ asset('assets/images/logo.jpg') }}" alt="church logo">Word Central Network</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
                  <span class="oi oi-menu fa fa-bars"></span>
              </button>
@php
    $current = URL::current();
    $pagearray = explode("/", $current);
    $pagename = isset($pagearray[3])?$pagearray[3]:"index";
@endphp
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav ml-auto" style="color: white;">
                      <li class="nav-item  {{ $pagename=="index"?"active":"" }}"><a href="{{ route('index') }}" class="nav-link">Home</a></li>
                      <li class="nav-item {{ $pagename=="gallery"?"active":"" }}"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                      <li class="nav-item  {{ $pagename=="event"?"active":"" }}"><a href="{{ route('event') }}" class="nav-link">Events</a></li>
                      <li class="nav-item  {{ $pagename=="contact"?"active":"" }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                      <li class="nav-item  {{ $pagename=="nugget"?"active":"" }}"><a href="{{ route('contact') }}" class="nav-link">Nugget</a></li>
                      <li class="nav-item  {{ $pagename=="blog"?"active":"" }}"><a href="{{ route('contact') }}" class="nav-link">Blogs</a></li>
  @guest
                            @if (Route::has('login'))
                                <li class="nav-item {{ $pagename=="login"?"active":"" }}">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item {{ $pagename=="register"?"active":"" }}">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown {{ $pagename=="dashboard"?"active":"" }}">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                      <button type="button" class="btn btn-warning mr-auto"><a href="#" class="text-dark" >Donate</a></button>
                  </ul>
              </div>
          </div>

  </nav>
  <div class="wow slideInDown" data-wow-duration='2s' data-wow-delay='0.5s'>
    <div class="site-section-cover overlay" style="background-image:url({{ asset('assets/images/wallpaper-1.jpg') }});width:100%;height: 500px;
    background-repeat: no-repeat;" >
        <div class="container mb-4">
        <div class="row align-items justify-content-center">
          <div class="col-lg-10 text-center mt-2">
          <button type="button" class="btn-lg  " style="background-color: #dba928;" >
           <a class="text-white"  href="{{ route('register') }}">Become a Member</a>
          </button>
         </div>
 <div class="row ">
            <div class="col-md-9 bottomleft ">
             <p class="breadcrumbs mt-2"><span class="mr-2"><a href="{{ route('index') }}" class="text-white">Home <i class="fa fa-chevron-right"></i></a></span> <span>{{ $pagename=="index"?"":ucwords($pagename) }}</ <i class="fa fa-chevron-right"></i></span></p>
             <h1 class="mb-4 bread">{{ $pagename=="index"?"":ucwords($pagename) }}</h1>
           </div>
         </div>
        </div>

      </div>
    </div>
</div>
