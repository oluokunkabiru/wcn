@php
$configuration = App\Models\Configuration::where('id', 1)->first();

@endphp
{{--  <section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <h3 class="widget-title">Our address</h3>
                    <address>
                        <ul class="address nav flex-column">
                            <li class=""><i class="fa fa-map-marker mx-1"></i> {!! $configuration->address !!}</li>
                            <li><i class="fa fa-phone mx-1"></i>{{ $configuration->phone }}</li>
                            <li><i class="fa fa-envelope mx-1"></i>{{ $configuration->email }}</li>
                        </ul>
                    </address>

                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    @php
                        $latestevents = App\Models\Event::orderBy('id', 'desc')->paginate(8);
                        // return $latestevents;
                    @endphp
                    <h3>Latest Events</h3>
                    <ul class="nav flex-column">
                        @foreach ($latestevents as $latestevent)
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('readEvent', [$latestevent->id, str_replace(' ', '_', $latestevent->title)]) }}">{{ ucwords($latestevent->title) }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    @php
                        $latestevents = App\Models\Blog::orderBy('id', 'desc')->paginate(8);
                        // return $latestevents;
                    @endphp
                    <h3 class="widget-title">Latest Blogs</h3>
                    <ul class="list-group">
                        @foreach ($latestevents as $latestevent)
                            <li class="list-group-item list-group-item-info"><a class=""
                                    href="{{ route('readblog', [$latestevent->id, str_replace(' ', '_', $latestevent->title)]) }}">{{ ucwords($latestevent->title) }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div> <!-- .row -->

    </div>
</section>  --}}
{{-- <footer>
    <div class="container-fluid bg-dark p-1 text-white">
        <div class="copy-right-top border-top mt-5">
            <p class="copy-right text-center text-white pt-xl-5 pt-4">&copy; <span>{{ date('Y') }}</span> . All
                Rights Reserved {{ ucwords($configuration->name) }}| Design by
                <a href="https://koadit.com" target="_blank" style="text-decoration: none; color: white;"> <u> Dev
                        Ifeoluwa </u> </a>
            </p>
        </div>
    </div>
</footer> --}}

<!-- ======= Contact Me Section ======= -->
<section id="contact-section" class="contact">
    <div class="container">

        <div class="section-title">
            {{-- <span>Contact Us</span> --}}
            {{--  <h2>Contact Us</h2>  --}}
            {{-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> --}}
        </div>

        <div class="row">

            <div class="col-lg-6">

                <div class="row">
                    {{--  <div class="col-md-12">
                        <div class="info-box">
                            <i class="icon-share-alt"></i>
                            <h3>Social Profiles</h3>
                            <div class="social-links">

                                @if ($configuration->facebook)
                                    <a href="{{ URL::to($configuration->facebook) }}" target="_blank"
                                        class="facebook text-white"><i class="fa fa-facebook"></i></a>
                                @endif
                                @if ($configuration->twitter)
                                    <a href="{{ URL::to($configuration->twitter) }}" target="_blank"
                                        class="twitter text-white"><i class="fa fa-twitter"></i></a>
                                @endif
                                @if ($configuration->instaram)
                                    <a href="{{ URL::to($configuration->instaram) }}" target="_blank"
                                        class="instagram text-white"><i class="fa fa-instagram"></i></a>
                                @endif
                                @if ($configuration->linkedin)
                                    <a href="{{ URL::to($configuration->linkedin) }}" target="_blank"
                                        class="linkedin text-white"><i class="fa fa-linkedin"></i></a>

                                @endif
                                @if ($configuration->youtube)
                                    <a href="{{ URL::to($configuration->youtube) }}" target="_blank"
                                        class="youtube text-white"><i class="fa fa-youtube"></i></a>
                                @endif
                                @if ($configuration->whatsapp)
                                    <a href="{{ URL::to($configuration->whatsapp) }}" target="_blank"
                                        class="bg-success  text-white"><i class="fa fa-whatsapp"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>  --}}
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="fa fa-map-marker"></i>
                            <h3>Our address</h3>
                            {!! $configuration->address !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="fa fa-envelope"></i>
                            <h3>Email Us</h3>
                            <p>{{ appsettings()->email }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="fa fa-phone"></i>
                            <h3>Call Us</h3>
                            <p>{{ appSettings()->phone }}</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <div class="row">
                    {{--  <div class="col-lg-12">
                        <form action="" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name"
                                        value="{{ Auth::check() ? Auth::user()->name : '', old('name') }}"
                                        class="form-control  @error('name') is-invalid @enderror" id="name"
                                        placeholder="Your Name" />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                        value="{{ Auth::check() ? Auth::user()->email : '', old('email') }}" name="email"
                                        id="email" placeholder="Your Email" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control  @error('subject') is-invalid @enderror"
                                    name="subject" value="{{ old('subject') }}" id="subject" placeholder="Subject"
                                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control  @error('message') is-invalid @enderror" name="message"
                                    rows="6" data-rule="required" data-msg="Please write something for us"
                                    placeholder="Message">
                                {{ old('message') }}
                            </textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>  --}}
                    <div class="col-md-6">
                        <div class="widget">
                            @php
                                $latestevents = App\Models\Event::orderBy('id', 'desc')->paginate(8);
                                // return $latestevents;
                            @endphp
                            <h3>Latest Events</h3>
                            <ul class="nav flex-column">
                                @foreach ($latestevents as $latestevent)
                                    <li class="nav-item text-dark"><a class="nav-link  text-dark"
                                            href="{{ route('readEvent', [$latestevent->id, str_replace(' ', '_', $latestevent->title)]) }}">{{ ucwords($latestevent->title) }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget">
                            @php
                                $latestevents = App\Models\Blog::orderBy('id', 'desc')->paginate(8);
                                // return $latestevents;
                            @endphp
                            <h3 class="widget-title">Latest Blogs</h3>
                            <ul class="list-group">
                                @foreach ($latestevents as $latestevent)
                                    <li class="list-group-item list-group-item-default"><a class="text-dark"
                                            href="{{ route('readblog', [$latestevent->id, str_replace(' ', '_', $latestevent->title)]) }}">{{ ucwords($latestevent->title) }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Contact Me Section -->








<footer id="footer" style="background-image: url('{{ asset('assets/images/wallpaper-1.jpg') }}') ">
    <div class="container">
        <h3>{{ appsettings()->name }}</h3>
        {{-- <h4>
        Breaking Financial Limits.
    </h4> --}}
        <div class="social-links">
            @if ($configuration->facebook)
                <a href="{{ URL::to($configuration->facebook) }}" target="_blank" class="facebook text-white"><i
                        class="fa fa-facebook"></i></a>
            @endif
            @if ($configuration->twitter)
                <a href="{{ URL::to($configuration->twitter) }}" target="_blank" class="twitter text-white"><i
                        class="fa fa-twitter"></i></a>
            @endif
            @if ($configuration->instaram)
                <a href="{{ URL::to($configuration->instaram) }}" target="_blank" class="instagram text-white"><i
                        class="fa fa-instagram"></i></a>
            @endif
            @if ($configuration->linkedin)
                <a href="{{ URL::to($configuration->linkedin) }}" target="_blank" class="linkedin text-white"><i
                        class="fa fa-linkedin"></i></a>

            @endif
            @if ($configuration->youtube)
                <a href="{{ URL::to($configuration->youtube) }}" target="_blank" class="youtube text-white"><i
                        class="fa fa-youtube"></i></a>
            @endif
            @if ($configuration->whatsapp)
                <a href="{{ URL::to($configuration->whatsapp) }}" target="_blank" class="bg-success text-white"><i
                        class="fa fa-whatsapp"></i></a>
            @endif
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>{{ appsettings()->name }}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
            Designed by <a href="https://www.facebook.com/Adten094" target="_blank">DevIfeoluwa</a>
        </div>
    </div>
</footer><!-- End Footer -->
