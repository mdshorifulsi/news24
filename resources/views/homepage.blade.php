@extends('welcome')
@section('title','news24-Homepage')
@section('content')
@include('frontend.partial.toppost')






 <section class="latest-post-area pb-120">
                <div class="container no-padding">
                    <div class="row">

                        <div class="col-lg-8 post-list">
                            <!-- Start latest-post Area -->
                            <div class="latest-post-wrap">
                                <h4 class="cat-title">সর্ব শেষ</h4>



                               

                                @foreach($post as $post)

                                <div class="single-latest-post row align-items-center">


                                    <div class="col-lg-5 post-left">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{ asset($post->image)}}" style="width:300px;height:200px;" alt="postimage">

                                           
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-7 post-right">
                                        <a href="{{route('details',$post->id)  }}">
                                            <h4>{{$post->title}}</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>{{$post->user->name}}</a></li>
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$post->created_at}}</a></li>


                                            {{-- <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li> --}}
                                        </ul>
                                        <p>
                                            {{str_limit($post->body,200)}}
                                        </p>
                                    </div>
                                </div>



                                @endforeach


                              
                               
                            </div>
                           
                        </div>



                        <div class="col-lg-4">
                            <div class="sidebars-area">




                                <div class="single-sidebar-widget editors-pick-widget">
                                    <h6 class="title">Editor’s Pick</h6>
                                    <div class="editors-pick-post">


                                        

                                    


                                        <div class="post-lists">


                                             @php 

                                    $postbar=App\post::inRandomOrder()->take(5)->get();
                                    @endphp

                          @foreach($postbar as $postbar)
                                            <div class="single-post d-flex flex-row">
                                                <div class="thumb">
                                                    <img src="{{ asset($postbar->image)}}" style="width:100px;height:100px;">
                                                </div>
                                                <div class="detail">
                                                    <a href="image-post.html"><h6>{{ $postbar->title }}</h6></a>
                                                    <ul class="meta">
                                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            @endforeach






                                        </div>


                                    </div>
                                </div>





                               
                          
                                {{-- <div class="single-sidebar-widget most-popular-widget">
                                    <h6 class="title">Most Popular</h6>

                                    <div class="single-list flex-row d-flex">
                                        <div class="thumb">
                                            <img src="{{asset('assets/frontend/img/m1.jpg')}}" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="image-post.html">
                                                <h6>Help Finding Information
                                                Online is so easy</h6>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-list flex-row d-flex">
                                        <div class="thumb">
                                            <img src="{{asset('assets/frontend/img/m2.jpg')}}" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="image-post.html">
                                                <h6>Compatible Inkjet Cartr
                                                world famous</h6>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-list flex-row d-flex">
                                        <div class="thumb">
                                            <img src="{{asset('assets/frontend/img/m3.jpg')}}" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="image-post.html">
                                                <h6>5 Tips For Offshore Soft
                                                Development </h6>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                            </ul>
                                        </div>
                                    </div>
                          
                                </div> --}}


                             
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @endsection