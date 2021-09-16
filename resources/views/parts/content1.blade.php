
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 id="Popular" class="title"><a href="#">Popular </a> </h3>
							
							{{-- <div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
								</ul>
							</div> --}}
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
			<div class="products-tabs">
		<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										

									
									
										
                                        @foreach ($products as $product )
                                        <div class="product">
											<div class="product-img">
												<img src="{{ asset('image/'.$product->image) }}" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
											
												<h3 class="product-name"><a href="#">{{ $product->name }}</a></h3>
												<h4 class="product-price">{{ $product->price }} <del class="product-old-price">{{ $product->oldprice }} tk</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													{{-- <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button> --}}
													<a href="{{ url('mainview/'.$product->id) }}" ><button  class="quick-view bg-success"><i class="fa fa-eye"></i><span class="tooltipp"> quick view</span></button></a>
												</div>
											</div>
											<div class="add-to-car">
												<span></span>
												<a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">
													<i class="fa fa-shopping-cart"></i>Add to cart </a>
												
												{{-- <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button> --}}
											</div>
										</div>
                                    
                                        @endforeach
									
										
										<!-- /product -->

										
									</div>
                                    
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								
								<!-- /tab -->
							</div>
                            
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				
				<!-- /row -->
			</div>
			<!-- /container -->
		
		</div>
		<!-- /SECTION -->
		