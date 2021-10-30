@php
        $configuration =App\Models\Configuration::where('id', 1)->first();
@endphp
<div class="icon-bar" >
    @if ($configuration->facebook)
    <a href="{{ URL::to($configuration->facebook) }}" class="facebook"><i class="fa fa-facebook"></i></a>
    @endif
    @if ($configuration->twitter)
    <a href="{{ URL::to($configuration->twitter) }}" class="twitter"><i class="fa fa-twitter"></i></a>
    @endif
    @if ($configuration->instaram)
    <a href="{{ URL::to($configuration->instaram) }}" class="instagram"><i class="fa fa-instagram"></i></a>
    @endif
    @if ($configuration->linkedin)
     <a href="{{ URL::to($configuration->linkedin) }}" class="linkedin"><i class="fa fa-linkedin"></i></a>

    @endif
    @if ($configuration->youtube)
    <a href="{{ URL::to($configuration->youtube) }}" class="youtube"><i class="fa fa-youtube"></i></a>
    @endif
    @if ($configuration->whatsapp)
    <a href="{{ URL::to($configuration->whatsapp) }}" class="bg-success"><i class="fa fa-whatsapp"></i></a>
    @endif
  </div>

  <nav class="navbar  site-wrap navbar-expand-md navbar-light sticky-top" style="z-index:3;   background-color: #fff;">
          <div class="container-fluid">
              <a class="navbar-brand mb-0 p-0" style = "color:#000;   font-size: 15px;" href="{{ route('index') }}"><img class="mr-3"  src="{{$configuration->getMedia('logo')->first()->getFullUrl() }}" alt="{{$configuration->name}}">{{$configuration->name}}</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
                  <span class="oi oi-menu fa fa-bars"></span>
              </button>
@php
    $current = URL::current();
    $pagearray = explode("/", $current);
    $pagename = isset($pagearray[3])?$pagearray[3]:"index";

@endphp
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav ml-auto text-dark" style="color: #000;">

                      <li class="nav-item  {{ $pagename=="index"?"active":"" }}"><a href="{{ route('index') }}" class="nav-link">Home</a></li>
                      {{--  <li class="nav-item {{ $pagename=="gallery"?"active":"" }}"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>  --}}
                      {{--  <li class="nav-item  {{ $pagename=="contact"?"active":"" }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>  --}}
                      <li class="nav-item  {{ $pagename=="nuggets"?"active":"" }}"><a href="{{ route('nuggetquote') }}" class="nav-link">Nugget</a></li>
                      <li class="nav-item  {{ $pagename=="blogs"?"active":"" }}"><a href="{{ route('ourblogs') }}" class="nav-link">Blogs</a></li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                          Events
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('event') }}" class="dropdown-item">Events</a>

                            <a href="{{ route('minister') }}" class="dropdown-item">Ministers</a>

                        </div>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                          Gallery
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('gallery') }}" class="dropdown-item">Gallery</a>
                            <a href="{{ route('ourbooks') }}" class="dropdown-item">Shop</a>
                        </div>
                      </li>


                      {{--  <li class="nav-item  {{ $pagename=="books"?"active":"" }}"><a href="{{ route('ourbooks') }}" class="nav-link">Shop</a></li>  --}}

  @guest
 <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Login/Register
                          </a>
                          <div class="dropdown-menu ">
                            @if (Route::has('login'))
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            @endif

                            @if (Route::has('register'))
                            <a class="dropdown-item " href="{{ route('register') }}">Register</a>
                            @endif
                          </div>
                        </li>

                        @else
                        @php
                        switch(Auth::user()->role)
                        {
                            case 'admin':
                            $url =  route('admindashboard');  //'/'.app()->getLocale().'/users/admin';
                             break;
                             case 'member':
                            $url =  route('memberdashboard'); //'/'.app()->getLocale().'/users/dashboard';
                             break;
                             default:
                             $url = route('index');
                        }
                        @endphp

                            <li class="nav-item dropdown {{ $pagename=="dashboard"?"active":"" }}">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ $url }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{--  {{ Auth::user()->name }}  --}}
                                    <img src="{{ Auth::user()->getMedia('avatar')->first()->getFullUrl('avatar') }}" class="rounded-circle" alt="{{ ucwords(Auth::user()->name) }}">
                                </a>
                                <div class="dropdown-menu bg-dark">
                                    <a class="dropdown-item nav-item " href="{{ $url }}">Dashboard</a>
                                    <a class="dropdown-item nav-item" href="{{ route('logout') }}"
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
                {{--  <button type="button" class="btn-lg  " style="background-color: #dba928;" >
                <a class="text-white"  href="{{ route('register') }}">Become a Member</a>
                </button>  --}}
                {{--  @if (Route::has('login'))
                <button type="button" class="btn-sm  " style="background-color: #dba928;" >
                    <a class="text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                </button>
                @endif  --}}
                </div>

         <div class="row ">
            <div class="col-md-9 bottomleft ">
             <p class="breadcrumbs mt-2"><span class="mr-2"><a href="{{ route('index') }}" class="text-white">Home <i class="fa fa-chevron-right"></i></a></span> <span>{!! $pagename=="index"?"":ucwords(str_replace("%20"," ", $pagename)) !!}</ <i class="fa fa-chevron-right"></i></span></p>
             {{--  <h1 class="mb-4 bread">{{ $pagename=="index"?"":ucwords($pagename) }}</h1>  --}}
           </div>
         </div>
        </div>

      </div>
    </div>
</div>
