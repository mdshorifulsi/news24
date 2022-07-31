@extends('welcome')
@section('title','news24-Homepage')
@section('content')

<section class="top-post-area pt-10">
                <div class="container no-padding">
                    <div class="row small-gutters">

              


                        <div class="col-lg-4 top-post-right">

                      @foreach($category_post as $category_post)
                        
                            <div class="single-top-post mt-10">
                                <div class="feature-image-thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="{{ asset($category_post->image)}}" style="width:375px;height:250px;" alt="">
                                </div>
                                <div class="top-post-details">
                                    {{-- <ul class="tags">
                                        <li><a href="#">{{$toppost->title }}</a></li>
                                    </ul> --}}
                                    <a href="image-post.html">
                                        <h4>{{$category_post->title }}</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>{{$category_post->user->name }}</a></li>



                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$category_post->created_at }}</a></li>
                                        {{-- <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                             @endforeach
                             
                        </div>
                      
                       



                      {{--   <div class="col-lg-12">
                            <div class="news-tracker-wrap">
                                <h6><span>Breaking News:</span>   <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>

@endsection

