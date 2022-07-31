@extends('welcome')
@section('title','news24-Homepage')
@section('content')

<div class="site-main-container">
			<!-- Start top-post Area -->
			
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start single-post Area -->
							<div class="single-post-wrap">
								<div class="content-wrap">
									
									<a href="#">
										<h3>{{ $details->title }}</h3>
									</a>
									<ul class="meta pb-20">
										<li><a href="#"><span class="lnr lnr-user"></span>{{$details->user->name}}</a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$details->created_at->toFormattedDateString()}}</a></li>
										{{-- <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li> --}}
									</ul>
									<P><img src="{{ asset($details->image)}}"style="width:650px;height:300px;"></P>

									<P>{{ $details->body }}</P>

									
								
								
								<div class="navigation-wrap justify-content-between d-flex">
									
									<a class="next" href="{{route('homepage')}}">Back to Home<span class="lnr lnr-arrow-right"></span></a>
								</div>
								
								
							</div>
							
						</div>
						<!-- End single-post Area -->
					</div>
					<div class="col-lg-4">
						<div class="sidebars-area">
							<div class="single-sidebar-widget editors-pick-widget">
								<h6 class="title">Editor’s Pick</h6>

								<div class="editors-pick-post">


									<div class="feature-img-wrap relative">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="{{asset('assets/backend/img/e1.jpg') }}" alt="">
										</div>
										<ul class="tags">
											<li><a href="#">Travel</a></li>
										</ul>
									</div>


									<div class="details">
										<a href="image-post.html">
											<h4 class="mt-20">A Discount Toner Cartridge Is
											Better Than Ever.</h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
										</ul>
										<p class="excert">
											Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
										</p>
									</div>
									<div class="post-lists">
										<div class="single-post d-flex flex-row">
											<div class="thumb">
												<img src="img/e2.jpg" alt="">
											</div>
											<div class="detail">
												<a href="image-post.html"><h6>Help Finding Information
												Online is so easy</h6></a>
												<ul class="meta">
													<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
													<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
												</ul>
											</div>
										</div>
										<div class="single-post d-flex flex-row">
											<div class="thumb">
												<img src="img/e3.jpg" alt="">
											</div>
											<div class="detail">
												<a href="image-post.html"><h6>Compatible Inkjet Cartr
												world famous</h6></a>
												<ul class="meta">
													<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
													<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
												</ul>
											</div>
										</div>
										<div class="single-post d-flex flex-row">
											<div class="thumb">
												<img src="img/e4.jpg" alt="">
											</div>
											<div class="detail">
												<a href="image-post.html"><h6>5 Tips For Offshore Soft
												Development </h6></a>
												<ul class="meta">
													<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
													<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>


								
							</div>
							<div class="single-sidebar-widget ads-widget">
								<img class="img-fluid" src="{{asset('assets/frontend/img/sidebar-ads.jpg') }}" alt="">
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End latest-post Area -->
	</div>

@endsection


