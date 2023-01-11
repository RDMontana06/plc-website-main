@extends('layout.main')
@section('content')
	<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
	<style>
		img {
			cursor: pointer;
		}

		.swiper-button-prev,
		.swiper-button-next {
			background: rgba(0, 0, 0, 0.2);
			width: 45px;
			height: 45px;
			line-height: 53px;
			margin-top: -30px;
			text-align: center;
			border: 2px solid #fff;
			box-shadow: 0px 0px 1px 2px rgba(0, 0, 0, 0.1);

			border-radius: 55px;
			opacity: 0;
			visibility: hidden;
			transition: all .3s ease;

		}

		.swiper-button-prev:after,
		.swiper-button-next:after {
			color: #fff;
			font-size: 18px;
			text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.1);
		}

		.swiper-pagination-bullet {
			background-color: #fff;
			transform: scale(1.8);
		}

		.swiper:hover .swiper-button-prev,
		.swiper:hover .swiper-button-next {
			transform: translateX(0);
			opacity: 1;
			visibility: visible;
		}
	</style>

	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/properties/mondrian-2.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate pb-0 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span>
						<span class="mr-2"><a href="{{ url('properties') }}">Properties <i class="fa fa-chevron-right"></i></a></span>
						<span>Market Mall<i class="fa fa-chevron-right"></i></span>
					</p>
					<h1 class="mb-3 bread">Market Mall Details</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-property-details">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="property-details">
						<div class="text">
							<span class="subheading">Real St, Ormoc, 6541 Leyte, Philippines</span>
							<h2>Market Mall</h2>
						</div>
						<div class="swiper mySwiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide active">
									<img src="{{ asset('assets/img/properties/marketmall/01.jpg') }}" class="d-block w-100 h-100" alt="...">
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('assets/img/properties/marketmall/02.jpg') }}" class="d-block w-100 h-100" alt="...">
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('assets/img/properties/marketmall/03.jpg') }}" class="d-block w-100 h-100" alt="...">
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('assets/img/properties/marketmall/04.jpg') }}" class="d-block w-100 h-100" alt="...">
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('assets/img/properties/marketmall/05.jpg') }}" class="d-block w-100 h-100" alt="...">
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('assets/img/properties/marketmall/06.jpg') }}" class="d-block w-100 h-100" alt="...">
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('assets/img/properties/marketmall/07.jpg') }}" class="d-block w-100 h-100" alt="...">
								</div>
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-pagination"></div>
						</div>
						{{-- <div class="img" style="background-image: url(assets/img/properties/mondrian-2.jpg);"> --}}
						{{-- <a href="https://vimeo.com/45830194" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
			          	<span class="fa fa-play"></span>
			          </a> --}}
						{{-- </div> --}}

					</div>
				</div>
				<div class="col-md-6 pills">
					<ul class="nav nav-pills mb-3" id="myTab" role="tablist">
						{{-- <li class="nav-item" role="presentation">
							<a class="nav-link active" id="home-tab" data-bs-toggle="pill" data-bs-target="#features" type="button"
								role="tab" aria-controls="features" aria-selected="true">Features</a>
						</li> --}}
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="profile-tab" data-bs-toggle="pill" data-bs-target="#description" type="button"
								role="tab" aria-controls="description" aria-selected="false">Description</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="loc-tab" data-bs-toggle="pill" data-bs-target="#loc" type="button" role="tab"
								aria-controls="location" aria-selected="false">Location</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						{{-- <div class="tab-pane fade show active" id="features" role="tabpanel" aria-labelledby="features-tab">
							<div class="row">
								<div class="col-md-4">
									<ul class="features">
										<li class="check"><span class="fa fa-check-circle"></span>Elevator</li>
										<li class="check"><span class="fa fa-check-circle"></span>Escalator</li>
										<li class="check"><span class="fa fa-check-circle"></span>Basement Parking</li>
										<li class="check"><span class="fa fa-check-circle"></span>Supermarket</li>
										<li class="check"><span class="fa fa-check-circle"></span>Commercial Areas</li>
										<li class="check"><span class="fa fa-check-circle"></span>Function Rooms</li>
										<li class="check"><span class="fa fa-check-circle"></span>Hotel Rooms</li>
										<li class="check"><span class="fa fa-check-circle"></span>Lower Penthouse - Indoor Dining and Music Lounge</li>
										<li class="check"><span class="fa fa-check-circle"></span>Upper Penthouse - Indoor and Outdoor Dining
                                            Infinity Pool</li>

									</ul>
								</div>
							</div>
						</div> --}} 
						<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="profile-tab">
							<p>
								Based in Ormoc City, Market Mall Ormoc is a
								9-storey mixed-use commercial building and
								hotel with basement parking space.
							</p>
							<p>
								Locally owned by Premiumlands Corp., it is a
								shopping mall and executive / business-class
								hotel with basement, function room, and
								penthouse with infinity pool.
							</p>
						</div>
						<div class="tab-pane fade" id="loc" role="tabpanel" aria-labelledby="loc-tab">
							<div class="d-block w-100">
								<div class="mapouter">
									<div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
											src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.4142349406907!2d124.6066425461804!3d11.007514945930925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3307f194117cfc37%3A0xa33c5b4d885e8a94!2sMarket%20Mall!5e0!3m2!1sen!2sph!4v1673337159390!5m2!1sen!2sph"
											width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
											referrerpolicy="no-referrer-when-downgrade"></iframe>" frameborder="0"
										scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org"></a><br>
										<style>
											.mapouter {
												position: relative;
												text-align: right;
												height: 350px;
												/* width: 50vw; */
												/* margin-top: 2rem; */
												display: flex;
												justify-content: center;
												align-items: center;

											}
										</style><a href="https://www.embedgooglemap.net">google map embed responsive</a>
										<style>
											.gmap_canvas {
												overflow: hidden;
												background: none !important;
												height: 300px;
												width: 40vw;
											}

											@media screen and (max-width:768px) {
												.gmap_canvas {
													overflow: hidden;
													background: none !important;
													height: 300px;
													width: 90vw;
													margin: auto;
												}
											}
										</style>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

			</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper(".mySwiper", {
			// cssMode: true,
			loop: true,
			speed: 1000,
			parallax: true,
			autoplay: {
				delay: 6500,
				disableOnInteraction: false,
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
				dynamicBullets: true,
			},
			// mousewheel: true,
			keyboard: true,
		});
	</script>
@endsection
