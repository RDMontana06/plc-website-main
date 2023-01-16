	<style>
		nav.navBar{
			position: relative;
			z-index: 20;
		}
	</style>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="{{ asset('images/logo/plc-logo-white.png') }}" width="200" class="img-fluid img-responsive" alt="">

			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item {{ $header == 'home' ? 'active' : '' }}"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
					<li class="nav-item {{ $header == 'about' ? 'active' : '' }}"><a href="{{ url('about') }}" class="nav-link">About</a></li>
					{{-- <li class="nav-item"><a href="#" class="nav-link">Agent</a></li> --}}
					{{-- <li class="nav-item"><a href="#" class="nav-link">Services</a></li> --}}
					<li class="nav-item {{ $header == 'properties' ? 'active' : '' }}"><a href="{{ url('properties') }}" class="nav-link">Properties</a></li>
					<li class="nav-item {{ $header == 'partners' ? 'active' : '' }}"><a href="{{ url('partners') }}" class="nav-link">Partners</a></li>

					{{-- <li class="nav-item"><a href="#" class="nav-link">Blog</a></li> --}}
					<li class="nav-item {{ $header == 'contact' ? 'active' : '' }}"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
