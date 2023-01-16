
<style>
	.con{
		overflow:hidden;
		height: 100vh;
	width: 100vw;
	
	}
	.slider-container {
	display: flex;
	align-items: center;
	justify-content: center;
	overflow: hidden;
	position: relative;
	height: 100vh;
	width: 100vw;
}

.slider-container::after {
	background-color: #000;
	content: '';
	position: absolute;
	opacity: 0.3;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	z-index: 1;
}
	.slide{
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center center;
	position: absolute;
	top: 0;
	left: 0;
	opacity: 0;
	height:100vh;
	width:100vw;
	transform: scale(1.25);
	transition: opacity 1s ease;
	}
	
.slide.active {
	animation: grow 5s linear forwards;
	opacity: 1;
}

@keyframes grow {
	0%, 20% {
		transform: scale(1.15);
	}
	
	75%, 100% {
		transform: scale(1.35);
	}
}
.float{
	position:absolute;
	z-index: 3;
	top:4rem;
	left:6rem;
	width:100%;
	height:100%;
	display:flex;
	/* justify-content:center; */
	align-items:center;
/* margin-left:6rem; */
	overflow:hidden;
}
.tag{
	display:flex;
	position: relative;
	top:-2rem;
}
@media (max-width: 768px) {
	.float{
		margin-left:-2rem;
	}
	.tag{
		margin:auto;
	}
	.tag h1{
	font-size: 40px !important;

	}
}
.tag small{
	font-size:22px;
	margin:10px;
	margin-top:1rem;
}

</style>
<section class="con" >

	
		
			<div class=" slider-container">

					<div class="slide hero-wrap"  style="background-image: url('assets/img/hero-section/Homepage-Photo_2_1519x753.jpg');" data-stellar-background-ratio="0.5"></div>
					<div class="slide hero-wrap"  style="background-image: url('assets/img/hero-section/Homepage-Photo_1_1519x753.jpg');" data-stellar-background-ratio="0.5"></div>
					<div class="slide hero-wrap"  style="background-image: url('assets/img/hero-section/Homepage-Photo_3_1519x753.jpg');" data-stellar-background-ratio="0.5"></div>
					<div class="slide hero-wrap"  style="background-image: url('assets/img/hero-section/Homepage-Photo_4_1519x753.jpg');" data-stellar-background-ratio="0.5"></div>
					
				
			</div>
	
			<div class="float">
				<div class="row no-gutters slider-text align-items-center">
					<div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
						<div class="text">
							
							<div class="tag">
								<h1 class="mb-4">INSPIRE </h1>
								<small><i class="fa fa-circle fa-xs" style="color: #f5d34f"></i></small>
								<h1 class="mb-4">ELEVATE</h1>
							</div>
							{{-- <p style="font-size: 18px;">From as low as $20 A small river named Duden flows by their place and supplies it with
								the necessary regelialia.</p> --}}
							<p><a href="{{ url('properties') }}" class="btn btn-primary py-3 px-4">View all properties</a></p>
						</div>
					</div>
				</div>
			</div>

</section>

		

<!-- Initialize Swiper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> -->



<script>
	const slides = document.querySelectorAll('.slide');
let activeSlide = 0;
let prevActive = 0;

changeSlides();
let int = setInterval(changeSlides, 4000);

function changeSlides() {
	slides[prevActive].classList.remove('active');
	

	slides[activeSlide].classList.add('active');

	
	prevActive = activeSlide++;
	
	if(activeSlide >= slides.length) {
		activeSlide = 0;
	}
	
	// console.log(prevActive, activeSlide);
}
</script>