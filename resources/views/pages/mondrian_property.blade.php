@extends('layout.main')
@section('content')
<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <style>
img{
    cursor: pointer;
}

.swiper-button-prev,
.swiper-button-next {
  background: rgba(0,0,0,0.2);
  width: 45px;
  height: 45px;
  line-height: 53px;
  margin-top: -30px;
  text-align: center;
  border: 2px solid #fff;
  box-shadow: 0px 0px 1px 2px rgba(0,0,0,0.1);

  border-radius: 55px;
  opacity:0;
  visibility:hidden;
  transition:all .3s ease;

}
.swiper-button-prev:after, .swiper-button-next:after{
    color: #fff;
  font-size: 18px;
  text-shadow: 0px 1px 0px rgba(0,0,0,0.1);
}

.swiper-pagination-bullet{
    background-color: #fff;
    transform:scale(1.8);
}
.swiper:hover .swiper-button-prev,
.swiper:hover .swiper-button-next {
  transform:translateX(0);
  opacity:1;
  visibility:visible;
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
						<div  class="swiper mySwiper" >
							<div class="swiper-wrapper">
								<div class="swiper-slide active">
									<img src="{{ asset('assets/img/properties/mondrian/01.jpg') }}" class="d-block w-100 h-100" alt="...">
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('assets/img/properties/mondrian/02.jpg') }}" class="d-block w-100 h-100" alt="...">
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('assets/img/properties/mondrian/03.jpg') }}" class="d-block w-100 h-100" alt="...">
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('assets/img/properties/mondrian/04.jpg') }}" class="d-block w-100 h-100" alt="...">
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('assets/img/properties/mondrian/05.jpg') }}" class="d-block w-100 h-100" alt="...">
								</div>
								<div class="swiper-slide">
									<img src="{{ asset('assets/img/properties/mondrian/06.jpg') }}" class="d-block w-100 h-100" alt="...">
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
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="home-tab" data-bs-toggle="pill" data-bs-target="#features" type="button"
								role="tab" aria-controls="features" aria-selected="true">Features</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="profile-tab" data-bs-toggle="pill" data-bs-target="#description" type="button"
								role="tab" aria-controls="description" aria-selected="false">Description</a>
						</li>
                        <li class="nav-item" role="presentation">
							<a class="nav-link" id="loc-tab" data-bs-toggle="pill" data-bs-target="#loc" type="button"
								role="tab" aria-controls="description" aria-selected="false">Location</a>
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
							Locally owned by Premiumlands Corp., it is strategically located on the edge of the booming business and commercial district of Makati in a commuter-friendly location.
							</p>
							<p>
							The property is conveniently accessible through access points from nearby cities and provinces. Its proximity allows employees to move around the metro within minutes and easily access the prime business districts of Makati, Manila, and Pasay.
							</p>
						</div>
                  <div class="tab-pane fade" id="loc" role="tabpanel" aria-labelledby="loc-tab">
                    	<div class="d-block w-100">
					<div class="mapouter">
						<div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=The%20Mondrian&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org"></a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 350px;
                            /* width: 50vw; */
                                margin-top:2rem;
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
                            @media screen and (max-width:768px){
                                .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 300px;
                                width: 90vw;
                                margin:auto;
                            }
                            }
                        </style>
                    </div>
					</div>
				</div>

                        </div>
					</div>
				</div>
                <div class="row justify-content-center">

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
