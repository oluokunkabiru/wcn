@php
    $configuration =App\Models\Configuration::where('id', 1)->first();

@endphp
<section>
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
                                        <li class="nav-item"><a class="nav-link" href="{{ route('readEvent', [$latestevent->id, str_replace(" ", '_', $latestevent->title)]) }}" >{{ ucwords($latestevent->title) }}</a></li>
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
                                    <ul  class="list-group">
                                        @foreach ($latestevents as $latestevent)
                                        <li class="list-group-item list-group-item-info" ><a class="" href="{{ route('readblog', [$latestevent->id, str_replace(" ", '_', $latestevent->title)]) }}" >{{ ucwords($latestevent->title) }}</a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div> <!-- .row -->

    </div>
    </section>
  <footer>
    <div class="container-fluid bg-dark p-1 text-white">
        <div class="copy-right-top border-top mt-5">
            <p class="copy-right text-center text-white pt-xl-5 pt-4">&copy; <span>{{ date('Y') }}</span> . All Rights Reserved {{ ucwords($configuration->name) }}| Design by
                <a href="https://koadit.com" target="_blank" style="text-decoration: none; color: white;"> <u> Dev Ifeoluwa </u> </a>
            </p>
        </div>
    </div>
</footer>
