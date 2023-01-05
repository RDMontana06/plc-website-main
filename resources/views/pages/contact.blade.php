@extends('layout.main')
@section('content')
	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/hero-section/PMI_Tower.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate pb-0 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span>
						<span>Contact <i class="fa fa-chevron-right"></i></span>
					</p>
					<h1 class="mb-3 bread">Contact Us</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section contact-section">
		<div class="container">
			<div class="row block-9 justify-content-center mb-5">
				<div class="col-md-8 mb-md-5">
					<h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>

				</div>
			</div>
			<div class="row d-flex mb-5 contact-info justify-content-center">
				<div class="col-md-8">
					<div class="row mb-5">
						<div class="col-md-4 text-center py-4">
							<div class="icon">
								<span class="fa fa-map"></span>
							</div>
							<p><span>Address:</span> 12th Floor, PMI Tower <br> Corner, Pablo Ocampo Sr Ext Onyx &, Cabanillas, Makati, 1203 Metro Manila</p>
						</div>
						<div class="col-md-4 text-center border-height py-4">
							<div class="icon">
								<span class="fa fa-phone"></span>
							</div>
							<p><span>Phone:</span> <a href="tel://1234567920">+63 917 628 5571</a></p>
						</div>
						<div class="col-md-4 text-center py-4">
							<div class="icon">
								<span class="fa fa-paper-plane"></span>
							</div>
							<p><span>Email:</span> <a href="mailto:info@yoursite.com">info@premiumlandscorp.com</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="mapouter">
						<div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
								src="https://maps.google.com/maps?q=PMI%20Tower&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
								scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org"></a><br>
							<style>
								.mapouter {
									position: relative;
									text-align: right;
									height: 500px;
									width: 100%;
								}
							</style><a href="https://www.embedgooglemap.net">google map embed responsive</a>
							<style>
								.gmap_canvas {
									overflow: hidden;
									background: none !important;
									height: 500px;
									width: 100%;
								}
							</style>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
