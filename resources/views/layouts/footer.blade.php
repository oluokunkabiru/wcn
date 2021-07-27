<section>
    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="widget">
                                    <h3 class="widget-title">Our address</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi perspiciatis magnam, ab ipsa laboriosam tempore tenetur, aliquid repellat, ex cum dicta reiciendis accusamus. Omnis repudiandae quasi mollitia, iusto odio dignissimos.</p>
                                    <ul class="address">
                                        <li><i class="fa fa-map-marker"></i> 329 Church St, Garland, TX 75042</li>
                                        <li><i class="fa fa-phone"></i> (425) 853 442 552</li>
                                        <li><i class="fa fa-envelope"></i> info@yourchurch.com</li>
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
