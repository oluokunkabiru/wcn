@php
    $configuration =App\Models\Configuration::where('id', 1)->first();

@endphp
<section>
    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="widget">
                                    <h3 class="widget-title">Our address</h3>
                                    <ul class="address">
                                        <li><i class="fa fa-map-marker mx-1"></i> {!! $configuration->address !!}</li>
                                        <li><i class="fa fa-phone mx-1"></i>{{ $configuration->phone }}</li>
                                        <li><i class="fa fa-envelope mx-1"></i>{{ $configuration->email }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget">
                                    @php
                                        $latestevents = App\Models\Event::orderBy('id', 'desc')->paginate(8);
                                        // return $latestevents;
                                    @endphp
                                    <h3>Latest Events</h3>
                                    <ul >
                                        @foreach ($latestevents as $latestevent)
                                        <li><a href="{{ route('readEvent', [$latestevent->id, str_replace(" ", '_', $latestevent->title)]) }}">{{ ucwords($latestevent->title) }}</a></li>
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
