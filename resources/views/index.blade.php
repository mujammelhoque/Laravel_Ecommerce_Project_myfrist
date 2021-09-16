{{-- Main Layout .Start --}}
	@extends('pages.layout')
{{-- Main Layout .End --}}

{{-- -------- header section .Start----------- --}}
@section('header')
@include('parts.header')
	
@endsection
{{-- -------- carousel section .Start----------- --}}
@section('carousel')
	<div class="container">

		@include('parts.carousel')

	</div>
@endsection
{{-- -------- Carousel section .End----------- --}}



{{-- -------------Content1 .Start ---------- ----}}
@section('content1')

@include('parts.content1')

    
@endsection
{{-- -------------Content1 .End ---------- ----}}

{{-- -------------Content2 .Start ---------- ----}}

@section('content2')

		@include('parts.content2')

@endsection
{{-- -------------Content2 .End ---------- ----}}
{{-- -------------Content3 .Start ---------- ----}}

@section('content3')

		@include('parts.content3')

@endsection
{{-- -------------Content3 .End---------- ----}}

@section('mainbodythree')
    	<!-- SECTION -->
		 <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 id="Man" class="title">Man's </h3>
							
						</div>
					</div>
					<!-- /section title --> 

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-3">
									

									<!-- product -->
									@foreach ($products3 as $product3 )
									<div class="product">
										<div class="product-img">
											<img src="{{ asset('image/'.$product3->image) }}" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
										
											<h3 class="product-name"><a href="#">{{ $product3->name }}</a></h3>
											<h4 class="product-price">{{ $product3->price }} <del class="product-old-price">{{ $product3->oldprice }} tk</del></h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
											
												<a href="{{ url('mainview/'.$product3->id) }}" ><button  class="quick-view bg-success"><i class="fa fa-eye"></i><span class="tooltipp"> quick view</span></button></a>
											</div>
										</div>
										<div class="add-to-car">
											<span></span>
											<a href="{{ url('add-to-cart/'.$product3->id) }}" class="btn btn-warning btn-block text-center" role="button">
												<i class="fa fa-shopping-cart"></i>Add to cart </a>
											
											{{-- <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button> --}}
										</div>
									</div>
								
									@endforeach
									
									<!-- /product -->

									</div>
									<div id="slick-nav-3" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
				<a href="" class="btn btn-primary">See All</a>
			</div>
			
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection
{{-- ********************************************************** --}}
{{-- ********************************************************** --}}
@section('mainbodyfour')
    	<!-- SECTION -->
		 <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 id="women" class="title">Womens's </h3>
							
						</div>
					</div>
					<!-- /section title --> 

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-4">
									

									<!-- product -->
									@foreach ($products4 as $product4 )
									<div class="product">
										<div class="product-img">
											<img src="{{ asset('image/'.$product4->image) }}" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
										
											<h3 class="product-name"><a href="#">{{ $product4->name }}</a></h3>
											<h4 class="product-price">{{ $product4->price }} <del class="product-old-price">{{ $product3->oldprice }} tk</del></h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
											
												<a href="{{ url('mainview/'.$product4->id) }}" ><button  class="quick-view bg-success"><i class="fa fa-eye"></i><span class="tooltipp"> quick view</span></button></a>
											</div>
										</div>
										<div class="add-to-car">
											<span></span>
											<a href="{{ url('add-to-cart/'.$product4->id) }}" class="btn btn-warning btn-block text-center" role="button">
												<i class="fa fa-shopping-cart"></i>Add to cart </a>
											
											{{-- <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button> --}}
										</div>
									</div>
								
									@endforeach
									
									<!-- /product -->

									</div>
									<div id="slick-nav-4" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
				<a href="" class="btn btn-primary">See All</a>
			</div>
			
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection