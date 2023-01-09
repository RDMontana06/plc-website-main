@extends('layout.main')
@section('content')
	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/properties/mondrian-2.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate pb-0 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span>
						<span class="mr-2"><a href="{{ url('properties') }}">Properties <i class="fa fa-chevron-right"></i></a></span>
						<span>The
							Mondrian <i class="fa fa-chevron-right"></i></span>
					</p>
					<h1 class="mb-3 bread">The Mondrian Details</h1>
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
							<span class="subheading">1423 Pablo Ocampo Sr. Ext. San Antonio Village, Makati City, Philippines</span>
							<h2>The Mondrian</h2>
						</div>
						<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
									aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
									aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
									aria-label="Slide 3"></button>
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
									aria-label="Slide 4"></button>
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
									aria-label="Slide 5"></button>
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
									aria-label="Slide 6"></button>
							</div>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="{{ asset('assets/img/properties/mondrian/01.jpg') }}" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/img/properties/mondrian/02.jpg') }}" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/img/properties/mondrian/03.jpg') }}" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/img/properties/mondrian/04.jpg') }}" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/img/properties/mondrian/05.jpg') }}" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="{{ asset('assets/img/properties/mondrian/06.jpg') }}" class="d-block w-100" alt="...">
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
								data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
								data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
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
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="home-tab" data-bs-toggle="pill" data-bs-target="#features" type="button"
								role="tab" aria-controls="features" aria-selected="true">Features</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="profile-tab" data-bs-toggle="pill" data-bs-target="#description" type="button"
								role="tab" aria-controls="description" aria-selected="false">Description</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="features" role="tabpanel" aria-labelledby="features-tab">
							<div class="row">
								<div class="col-md-4">
									<ul class="features">
										<li class="check"><span class="fa fa-check-circle"></span>Elevator</li>
										<li class="check"><span class="fa fa-check-circle"></span>Pantry</li>
										<li class="check"><span class="fa fa-check-circle"></span>Storage Area</li>
										<li class="check"><span class="fa fa-check-circle"></span>Toilets</li>
										<li class="check"><span class="fa fa-check-circle"></span>Balcony</li>
										<li class="check"><span class="fa fa-check-circle"></span>Reception</li>
										<li class="check"><span class="fa fa-check-circle"></span>Offices</li>
										<li class="check"><span class="fa fa-check-circle"></span>24/7 Security</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="profile-tab">
							<p>
								Locally owned by Premiumlands Corp., it is standing
								in a strategic boundary of a booming business and
								commercial district of Makati City. The property is
								conveniently accessible through access points from
								Manila to Makati.
							</p>
							<p>
								The property is conveniently accessible through
								access points from Manila to Makati. Its proximity
								allows employees to move around the metro
								within minutes and easily access the prime
								business districts of Makati City.
							</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
@endsection
