	<style>
		nav.navbar{
			/* position: relative; */
			z-index: 20;
		}
	</style>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container-fluid">
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="{{ asset('images/logo/plc-logo-white.png') }}" width="200" class="img-fluid img-responsive" alt="">

			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ftco-nav" aria-controls="#ftco-nav"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item {{ $header == 'home' ? 'active' : '' }}"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
					<li class="nav-item {{ $header == 'about' ? 'active' : '' }}"><a href="{{ url('about') }}" class="nav-link">About</a></li>
					<li class="nav-item {{ $header == 'careers' ? 'active' : '' }}"><a href="{{ url('careers') }}" class="nav-link">Careers</a></li>

					{{-- <li class="nav-item"><a href="#" class="nav-link">Agent</a></li> --}}
					{{-- <li class="nav-item"><a href="#" class="nav-link">Services</a></li> --}}
					<li class="nav-item {{ $header == 'properties' ? 'active' : '' }}"><a href="{{ url('properties') }}" class="nav-link">Properties</a></li>
					<li class="nav-item {{ $header == 'partners' ? 'active' : '' }}"><a href="{{ url('partners') }}" class="nav-link">Partners</a></li>
					<li class="nav-item {{ $header == 'news' ? 'active' : '' }}"><a href="{{ url('news') }}" class="nav-link">News & Update</a></li>

					{{-- <li class="nav-item"><a href="#" class="nav-link">Blog</a></li> --}}
					<li class="nav-item {{ $header == 'contact' ? 'active' : '' }}"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script>
			
     var navMain = document.getElementByClassName("navbar-collapse");
				var nav = document.getElementByClassName("navbar-toggler");
     nav.on("click", "a", null, function () {
         navMain.collapse('hide');

 });
		</script>
	<!-- END nav -->
