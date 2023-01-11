@extends('layout.main')
@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/hero-section/PMI_Tower.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate pb-0 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span>
						<span>Partners <i class="fa fa-chevron-right"></i></span>
					</p>
					<h1 class="mb-3 bread"> Our Partners</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section contact-section">
		<div class="container">
        <img src="{{ asset('assets/img/Partner/partners.png') }}" class="d-block w-100 h-100" alt="...">
		</div>
	</section>
@endsection
