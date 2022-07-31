<section class="top-post-area pt-10">
                <div class="container no-padding">
                    <div class="row small-gutters">

                        @php 

$toppost=App\Toppost::latest()->take(3)->get();
@endphp

                          @foreach($toppost as $toppost)
                        <div class="col-lg-4 top-post-right">

                      
                            <div class="single-top-post mt-10">
                                <div class="feature-image-thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <a href="{{route('topdetails',$toppost->id)  }}">
                                    <img class="img-fluid" src="{{ asset($toppost->image)}}" style="width:375px;height:250px;" alt="">
                                </div>
                                <div class="top-post-details">
                                    {{-- <ul class="tags">
                                        <li><a href="#">{{$toppost->title }}</a></li>
                                    </ul> --}}
                                    <a href="{{route('topdetails',$toppost->id)  }}">
                                        <h4>{{$toppost->title }}</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href=""><span class="lnr lnr-user"></span>{{$toppost->user->name }}</a></li>



                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$toppost->created_at }}</a></li>
                                        {{-- <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                        @endforeach



                      {{--   <div class="col-lg-12">
                            <div class="news-tracker-wrap">
                                <h6><span>Breaking News:</span>   <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>