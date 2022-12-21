@extends('layout.main')
@section('content')
	@include('pages.slider')
	<section class="ftco-section ftco-no-pb ftco-no-pt search-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="search-wrap-1 ftco-animate p-4">
						<form action="#" class="search-property-1">
							<div class="row">
								<div class="col-lg align-items-end">
									<div class="form-group">
										<label for="#">Keyword</label>
										<div class="form-field">
											<div class="icon"><span class="fa fa-search"></span></div>
											<input type="text" class="form-control" placeholder="Enter Keyword">
										</div>
									</div>
								</div>
								<div class="col-lg align-items-end">
									<div class="form-group">
										<label for="#">Property Type</label>
										<div class="form-field">
											<div class="select-wrap">
												<div class="icon"><span class="fa fa-chevron-down"></span></div>
												<select name="" id="" class="form-control">
													<option value="">Residence</option>
													<option value="">Offices</option>
													<option value="">Commercial</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg align-items-end">
									<div class="form-group">
										<label for="#">Location</label>
										<div class="form-field">
											<div class="icon"><span class="fa fa-search"></span></div>
											<input type="text" class="form-control" placeholder="Location">
										</div>
									</div>
								</div>
								<div class="col-lg align-items-end">
									<div class="form-group">
										<label for="#">Price Limit</label>
										<div class="form-field">
											<div class="select-wrap">
												<div class="icon"><span class="fa fa-chevron-down"></span></div>
												<select name="" id="" class="form-control ">
													<option value="">$5,000</option>
													<option value="">$10,000</option>
													<option value="">$50,000</option>
													<option value="">$100,000</option>
													<option value="">$200,000</option>
													<option value="">$300,000</option>
													<option value="">$400,000</option>
													<option value="">$500,000</option>
													<option value="">$600,000</option>
													<option value="">$700,000</option>
													<option value="">$800,000</option>
													<option value="">$900,000</option>
													<option value="">$1,000,000</option>
													<option value="">$2,000,000</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg align-self-end">
									<div class="form-group">
										<div class="form-field">
											<input type="submit" value="Search" class="form-control btn btn-primary">
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb ftco-no-pt bg-primary">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-md-4 d-flex align-items-stretch ftco-animate ">
					<div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5 w-100">
						<div class="icon d-flex justify-content-center align-items-center">
							{{-- <span class="flaticon-business"></span> --}}
							<img src="{{ asset('assets/img/corporate-icons/01_Integrity.png') }}" width="100" alt="">
						</div>
						<div class="media-body py-md-4">
							<h3>INTEGRITY</h3>
							<p>“To do good and be good at all times”</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-items-stretch ftco-animate">
					<div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5 w-100">
						<div class="icon d-flex justify-content-center align-items-center">
							{{-- <span class="flaticon-home"></span> --}}
							<img src="{{ asset('assets/img/corporate-icons/01_Commitment.png') }}" width="100" alt="">
						</div>
						<div class="media-body py-md-4">
							<h3>COMMITMENT</h3>
							<p>“Never make excuses, only results”</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-items-stretch ftco-animate">
					<div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5 w-100">
						<div class="icon d-flex justify-content-center align-items-center">
							{{-- <span class="flaticon-stats"></span> --}}
							<img src="{{ asset('assets/img/corporate-icons/01_Humility_Genuine_Concern.png') }}" width="100" alt="">
						</div>
						<div class="media-body py-md-4">
							<h3>HUMILITY AND GENUINE CONCERN</h3>
							<p>“Simplicity in enriching lives of the people”</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-items-stretch ftco-animate">
					<div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5 w-100">
						<div class="icon d-flex justify-content-center align-items-center">
							{{-- <span class="flaticon-quarantine"></span> --}}
							<img src="{{ asset('assets/img/corporate-icons/01_Innovation.png') }}" width="100" alt="">
						</div>
						<div class="media-body py-md-4">
							<h3>INNOVATION</h3>
							<p>“There’s a way to do it better – find it” – (Thomas A. Edison)</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-items-stretch ftco-animate">
					<div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5 w-100">
						<div class="icon d-flex justify-content-center align-items-center">
							{{-- <span class="flaticon-quarantine"></span> --}}
							<img src="{{ asset('assets/img/corporate-icons/01_Premium_Services.png') }}" width="100" alt="">
						</div>
						<div class="media-body py-md-4">
							<h3>PREMIUM SERVICES</h3>
							<p>“Quality service beyond expectations”</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-items-stretch ftco-animate">
					<div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5 w-100">
						<div class="icon d-flex justify-content-center align-items-center">
							{{-- <span class="flaticon-quarantine"></span> --}}
							<img src="{{ asset('assets/img/corporate-icons/01_Synergy.png') }}" width="100" alt="">
						</div>
						<div class="media-body py-md-4">
							<h3>SYNERGY</h3>
							<p>"Alone we can do so little; TOGETHER we can do so much" -(Helen Keller)"</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">Check out some of our latest properties</span>
					<h2 class="mb-2">Properties</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-properties owl-carousel">
						<div class="item">
							<div class="property-wrap ftco-animate">
								<a href="#" class="img" style="background-image: url(images/properties/PMI_Lobby.jpg);">
									<div class="rent-sale">
										<span class="rent">Rent</span>
									</div>
									{{-- <p class="price"><span class="orig-price">$300,000</span></p> --}}
								</a>
								<div class="text">
									{{-- <ul class="property_list">
		        					<li><span class="flaticon-bed"></span>3</li>
		        					<li><span class="flaticon-bathtub"></span>2</li>
		        					<li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
		        				</ul> --}}
									<h3><a href="#">PMI Tower</a></h3>
									<span class="location">Cabanillas corner. 273 Pablo Ocampo Sr. Ext. Makati City, Philippines</span>
									<a href="#" class="d-flex align-items-center justify-content-center btn-custom">
										<span class="fa fa-link"></span>
									</a>
									<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
										<div class="d-flex align-items-center">
											<div class="img" style="background-image: url(images/person_1.jpg);"></div>
											<h3 class="ml-2">John Dorf</h3>
										</div>
										<span class="text-right">2 weeks ago</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="property-wrap ftco-animate">
								<a href="#" class="img" style="background-image: url(images/properties/MarketMall_Resto.jpg);">
									<div class="rent-sale">
										<span class="rent">Rent</span>
									</div>
									{{-- <p class="price"><span class="old-price">800,000</span><span class="orig-price">$3,050<small> / mo</small></span></p> --}}
								</a>
								<div class="text">
									{{-- <ul class="property_list">
		        					<li><span class="fa fa-bed"></span>3</li>
		        					<li><span class="flaticon-bathtub"></span>2</li>
		        					<li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
		        				</ul> --}}
									<h3><a href="#">Market Mall</a></h3>
									<span class="location">Real St. District 6, <br> Ormoc City, Philippines</span>
									<a href="#" class="d-flex align-items-center justify-content-center btn-custom">
										<span class="fa fa-link"></span>
									</a>
									<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
										<div class="d-flex align-items-center">
											<div class="img" style="background-image: url(images/person_1.jpg);"></div>
											<h3 class="ml-2">John Dorf</h3>
										</div>
										<span class="text-right">2 weeks ago</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="property-wrap ftco-animate">
								<a href="#" class="img" style="background-image: url(images/properties/Mondrian_Bistro.jpg);">
									<div class="rent-sale">
										<span class="rent">Rent</span>
									</div>
									{{-- <p class="price"><span class="orig-price">$300<small> / mo</small></span></p> --}}
								</a>
								<div class="text">
									{{-- <ul class="property_list">
		        					<li><span class="flaticon-bed"></span>3</li>
		        					<li><span class="flaticon-bathtub"></span>2</li>
		        					<li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
		        				</ul> --}}
									<h3><a href="#">The Mondrian</a></h3>
									<span class="location">1423 Pablo Ocampo Sr. Ext. San Antonio Village, Makati City, Philippines</span>
									<a href="#" class="d-flex align-items-center justify-content-center btn-custom">
										<span class="fa fa-link"></span>
									</a>
									<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
										<div class="d-flex align-items-center">
											<div class="img" style="background-image: url(images/person_1.jpg);"></div>
											<h3 class="ml-2">John Dorf</h3>
										</div>
										<span class="text-right">2 weeks ago</span>
									</div>
								</div>
							</div>
						</div>
						{{-- <div class="item">
                <div class="property-wrap ftco-animate">
		        			<a href="#" class="img" style="background-image: url(images/work-4.jpg);">
		        				<div class="rent-sale">
		        					<span class="rent">Rent</span>
		        				</div>
		        				<p class="price"><span class="orig-price">$300<small> / mo</small></span></p>
		        			</a>
		        			<div class="text">
		        				<ul class="property_list">
		        					<li><span class="flaticon-bed"></span>3</li>
		        					<li><span class="flaticon-bathtub"></span>2</li>
		        					<li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
		        				</ul>
		        				<h3><a href="#">The Blue Sky Home</a></h3>
		        				<span class="location">Oakland</span>
		        				<a href="#" class="d-flex align-items-center justify-content-center btn-custom">
		        					<span class="fa fa-link"></span>
		        				</a>
		        				<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
		        					<div class="d-flex align-items-center">
			        					<div class="img" style="background-image: url(images/person_1.jpg);"></div>
			        					<h3 class="ml-2">John Dorf</h3>
			        				</div>
			        				<span class="text-right">2 weeks ago</span>
		        				</div>
		        			</div>
		        		</div>
              </div>
              <div class="item">
                <div class="property-wrap ftco-animate">
		        			<a href="#" class="img" style="background-image: url(images/work-5.jpg);">
		        				<div class="rent-sale">
		        					<span class="rent">Rent</span>
		        				</div>
		        				<p class="price"><span class="orig-price">$300<small> / mo</small></span></p>
		        			</a>
		        			<div class="text">
		        				<ul class="property_list">
		        					<li><span class="flaticon-bed"></span>3</li>
		        					<li><span class="flaticon-bathtub"></span>2</li>
		        					<li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
		        				</ul>
		        				<h3><a href="#">The Blue Sky Home</a></h3>
		        				<span class="location">Oakland</span>
		        				<a href="#" class="d-flex align-items-center justify-content-center btn-custom">
		        					<span class="fa fa-link"></span>
		        				</a>
		        				<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
		        					<div class="d-flex align-items-center">
			        					<div class="img" style="background-image: url(images/person_1.jpg);"></div>
			        					<h3 class="ml-2">John Dorf</h3>
			        				</div>
			        				<span class="text-right">2 weeks ago</span>
		        				</div>
		        			</div>
		        		</div>
              </div> --}}
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section services-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Work flow</span>
					<h2 class="mb-3">How it works</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services services-2">
						<div class="media-body py-md-4 text-center">
							<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>01</span>
								<img src="images/blob.svg" alt="">
							</div>
							<h3>Evaluate Property</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services services-2">
						<div class="media-body py-md-4 text-center">
							<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>02</span>
								<img src="images/blob.svg" alt="">
							</div>
							<h3>Meet Your Agent</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services services-2">
						<div class="media-body py-md-4 text-center">
							<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>03</span>
								<img src="images/blob.svg" alt="">
							</div>
							<h3>Close the Deal</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services services-2">
						<div class="media-body py-md-4 text-center">
							<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>04</span>
								<img src="images/blob.svg" alt="">
							</div>
							<h3>Have Your Property</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row">
				<div class="col-md-7 order-md-last d-flex align-items-stretch">
					<div class="img w-100 img-2 mr-md-2" style="background-image: url(images/about-1.jpg);"></div>
					<div class="img w-100 img-2 ml-md-2" style="background-image: url(images/about-2.1.jpg);"></div>
				</div>
				<div class="col-md-5 wrap-about py-md-5 ftco-animate">
					<div class="heading-section pr-md-5">
						<h3 class="mb-4 font-weight-bold">Premiumlands Corporation</h3>

						<p>Established on 2012, Premiumlands Corp. is the real-estate-arm of Premium
							Megastructures, Inc. A construction company that is certified as “Quadruple A” by the
							Philippine Contractor's Accreditation Board (PCAB). </p>
						<p>We belong to a powerhouse of
							construction company with a wide variety of businesses across Luzon, Visayas, and
							Mindanao. The company recently engaged in land banking and we will soon launch prime
							real-estate developments across the archipelago to target the mid and high-end market.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img" id="section-counter">
		<div class="container">
			<div class="row pt-md-5">
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 py-5 mb-4">
						<div class="text text-border d-flex align-items-center">
							<strong class="number" data-number="50">0</strong>
							<span>Area <br>Population</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 py-5 mb-4">
						<div class="text text-border d-flex align-items-center">
							<strong class="number" data-number="3">0</strong>
							<span>Total <br>Properties</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 py-5 mb-4">
						<div class="text text-border d-flex align-items-center">
							<strong class="number" data-number="500">0</strong>
							<span>Average <br>House</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 py-5 mb-4">
						<div class="text d-flex align-items-center">
							<strong class="number" data-number="10">0</strong>
							<span>Total <br>Branches</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Testimonial</span>
					<h2 class="mb-3">Happy Clients</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
										there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
										there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
										there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
										there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
										there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-agent">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Agents</span>
					<h2 class="mb-4">Our Agents</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 ftco-animate">
					<div class="agent">
						<div class="img">
							<img src="images/team-1.jpg" class="img-fluid" alt="Colorlib Template">
							<div class="desc">
								<h3><a href="properties.html">Carlos Henderson</a></h3>
								<p class="h-info"><span class="location">Listing</span> <span class="details">10 Properties</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 ftco-animate">
					<div class="agent">
						<div class="img">
							<img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="desc">
							<h3><a href="properties.html">Mike Bochs</a></h3>
							<p class="h-info"><span class="location">Listing</span> <span class="details">10 Properties</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 ftco-animate">
					<div class="agent">
						<div class="img">
							<img src="images/team-3.jpg" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="desc">
							<h3><a href="properties.html">Jessica Moore</a></h3>
							<p class="h-info"><span class="location">Listing</span> <span class="details">10 Properties</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 ftco-animate">
					<div class="agent">
						<div class="img">
							<img src="images/team-4.jpg" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="desc">
							<h3><a href="properties.html">Sarah Geronimo</a></h3>
							<p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Blog</span>
					<h2>Recent Blog</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-3 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<div class="text">
							<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_1.jpg');">
							</a>
							<div class="meta mb-3">
								<div><a href="#">June 01, 2020</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
							</div>
							<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<div class="text">
							<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_2.jpg');">
							</a>
							<div class="meta mb-3">
								<div><a href="#">June 01, 2020</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
							</div>
							<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<div class="text">
							<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_3.jpg');">
							</a>
							<div class="meta mb-3">
								<div><a href="#">June 01, 2020</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
							</div>
							<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<div class="text">
							<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_4.jpg');">
							</a>
							<div class="meta mb-3">
								<div><a href="#">June 01, 2020</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
							</div>
							<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	</main><!-- End #main -->
@endsection
