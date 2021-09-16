<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <div class="col-md-12">
            <div class="section-title">
                <h3 id="Kid" class="title">Kid's</h3>
                
            </div>
        </div>
        <!-- /section title -->
        <!-- row -->
        <div class="row">

            

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                <!-- product -->
                                @foreach ($products2 as $product2 )
                                <div class="product">
                                    <div class="product-img">
                                        <img src="{{ asset('image/'.$product2->image) }}" alt="">
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                    
                                        <h3 class="product-name"><a href="#">{{ $product2->name }}</a></h3>
                                        <h4 class="product-price">{{ $product2->price }} <del class="product-old-price">{{ $product2->oldprice }}</del></h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                        
                                            <a href="{{ url('mainview/'.$product2->id) }}" ><button  class="quick-view bg-success"><i class="fa fa-eye"></i><span class="tooltipp"> quick view</span></button></a>
                                        </div>
                                    </div>
                                    <div class="add-to-car">
                                        <span></span>
                                        <a href="{{ url('add-to-cart/'.$product2->id) }}" class="btn btn-warning btn-block text-center" role="button">
                                            <i class="fa fa-shopping-cart"></i>Add to cart </a>
                                        
                                        {{-- <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button> --}}
                                    </div>
                                </div>
                            
                                @endforeach
                                
                                
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
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