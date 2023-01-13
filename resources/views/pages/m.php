@section('content')
<section class="hero-wrap" style="background-image: url('assets/img/hero-section/PMI_Tower.jpg');" data-stellar-background-ratio="0.5">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

	<div class="overlay"></div>
		<div class="swiper mySwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide active">
					<div class="container">
					<div class="slide" style="background-image: url('https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80')"></div>
					</div>
				</div>
				<div class="swiper-slide ">
					<div class="container">
					<div class="slide" style="background-image: url('https://images.unsplash.com/photo-1453928582365-b6ad33cbcf64?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80')"></div>
					</div>
				</div>
				<div class="swiper-slide ">
					<div class="container">
					<div class="slide" style="background-image: url('https://images.unsplash.com/photo-1504707748692-419802cf939d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1330&q=80')"></div>
					</div>
				</div>
			</div>
		</div>
			<!-- <div class="container">
				<div class="row no-gutters slider-text align-items-center">
					<div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
						<div class="text">
							<h1 class="mb-4">INSPIRE <small><i class="fa fa-circle fa-xs" style="color: #f5d34f"></i></small> ELEVATE</h1>
							{{-- <p style="font-size: 18px;">From as low as $20 A small river named Duden flows by their place and supplies it with
								the necessary regelialia.</p> --}}
							<p><a href="{{ url('properties') }}" class="btn btn-primary py-3 px-4">View all properties</a></p>
						</div>
					</div>
				</div>
			</div> -->

</section>

		
@endsection
<!-- Initialize Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>



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

<section class="hero-wrap" style="background-image: url('assets/img/hero-section/PMI_Tower.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center">
			<div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
				<div class="text">
					<h1 class="mb-4">INSPIRE <small><i class="fa fa-circle fa-xs" style="color: #f5d34f"></i></small> ELEVATE</h1>
					{{-- <p style="font-size: 18px;">From as low as $20 A small river named Duden flows by their place and supplies it with
						the necessary regelialia.</p> --}}
					<p><a href="{{ url('properties') }}" class="btn btn-primary py-3 px-4">View all properties</a></p>
				</div>
			</div>
		</div>
	</div>
</section>