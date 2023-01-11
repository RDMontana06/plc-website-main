@extends('layout.main')
@section('content')
	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/hero-section/PMI_Tower.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate pb-0 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span>
						<span>Properties <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-3 bread">Properties</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-no-pb ftco-no-pt">
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
												<select name="" id="" class="form-control ">
													<option class='black-renz' value="">Residence</option>
													<option class='black-renz' value="">Offices</option>
													<option class='black-renz' value="">Commercial</option>
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
									<h3><a href="{{ url('pmi_tower') }}">PMI Tower</a></h3>
									<span class="location">Cabanillas corner. 273 Pablo Ocampo Sr. Ext. Makati City, Philippines</span>
									<a href="{{ url('pmi_tower') }}" class="d-flex align-items-center justify-content-center btn-custom">
										<span class="fa fa-link"></span>
									</a>
									{{-- <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
										<div class="d-flex align-items-center">
											<div class="img" style="background-image: url(images/person_1.jpg);"></div>
											<h3 class="ml-2">John Dorf</h3>
										</div>
										<span class="text-right">2 weeks ago</span>
									</div> --}}
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
									<h3><a href="{{ url('market_mall') }}">Market Mall</a></h3>
									<span class="location">Real St. District 6, <br> Ormoc City, Philippines</span>
									<a href="{{ url('market_mall') }}" class="d-flex align-items-center justify-content-center btn-custom">
										<span class="fa fa-link"></span>
									</a>

								</div>
							</div>
						</div>
						<div class="item">
							<div class="property-wrap ftco-animate">
								<a href="#" class="img" style="background-image: url(images/properties/mondrian_bistro.jpg);">
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
									<h3><a href="{{ url('mondrian') }}">The Mondrian</a></h3>
									<span class="location">1423 Pablo Ocampo Sr. Ext. San Antonio Village, Makati City, Philippines</span>
									<a href="{{ url('mondrian') }}" class="d-flex align-items-center justify-content-center btn-custom">
										<span class="fa fa-link"></span>
									</a>

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

@endsection
