
<div class="container-fluid">
    <!-- HEADER -->
    
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container head-container">
                <ul class="header-links pull-left">
                    <li><a href="tel:+88001645-254877"><i class="fa fa-phone"></i> 01645-254877</a></li>
                    <li id="em"><a href="mailto:Pykari@email.com"><i class="fa fa-envelope-o"></i> Pykari@email.com</a></li>
                </ul>
                <ul class="header-links pull-right">
                    {{-- <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li> --}}
                    <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3 col-xs-2">
                        <div><h4  style="color: #ff4800">ℙykari.ℂom</h4></div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6 col-xs-10 header">
                    
                        <div class="header-search ">
                            <form>
                            
                                <input type="text" class="input" placeholder="Search here">
                                <button class="search-btn">Search</button>
                            </form>
                        </div>
                    
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <div>
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Your Wishlist</span>
                                    <div class="qty"></div>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->
                            
                            <!-- /Cart -->
                            <!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                    <div class="qty">{{ count((array) session('cart')) }}</div>
                                </a>
                                <div class="cart-dropdown">
                                    <?php $total = 0 ?>
                                    @foreach((array) session('cart') as $id => $details)
                        <?php $total += $details['price'] * $details['quantity'] ?>
                    @endforeach
                                    <div class="cart-list">
                                        @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="{{ asset('image/'.$details['photo'])}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">{{ $details['name'] }}</a></h3>
                                                <h4 class="product-price"><span class="qty">{{ $details['quantity'] }}x</span>{{ $details['price'] }}৳</h4>
                                            </div>
                                            {{-- <button class="delete"><i class="fa fa-close"></i></button> --}}
                                        </div>
                                        @endforeach
                                        @endif

                                        
                                    </div>
                                    <div class="cart-summary">
                                        <small>{{ count((array) session('cart')) }} Item(s) selected</small>
                                        <h5>TOTAL: {{ $total }}৳</h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="{{ url('cart') }} ">View All</a>
                                        <a href="{{ url('/example1') }}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->
    

  
		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
		<li class="active"><a href="{{ url('/') }}">Home</a></li>

        <li><a href=" <?php $popluar = $products[0]->category_id ?? '4';?> {{ url('onepage/'.$popluar) }}">Popluar</a></li>
					
        <li><a href=" <?php $kid = $products2[0]->category_id ?? '4';?> {{ url('onepage/'.$kid) }}">Kid's</a></li>
			
        <a href=" <?php $man = $products3[0]->category_id ?? '4';?> {{ url('onepage/'.$man) }}">Man's</a></li>
	
        <li><a href=" <?php $women = $products4[0]->category_id ?? '4';?> {{ url('onepage/'.$women) }}">Women's</a></li>

		<li><a href=" <?php $electro = $products5[0]->category_id ?? '4';?> {{ url('onepage/'.$electro) }}">Electronics</a></li>

		<li><a href=" <?php $accesso = $products8[0]->category_id ?? '4';?> {{ url('onepage/'.$accesso) }}">Accessories</a></li>

		<li><a href=" <?php $living = $products7[0]->category_id ?? '4';?> {{ url('onepage/'.$living) }}">Living</a></li>

		<li><a href=" <?php $agrec = $products9[0]->category_id ?? '4';?> {{ url('onepage/'.$agrec) }}">Agreculture</a></li>

		<li><a href=" <?php $other = $products10[0]->category_id ?? '4';?> {{ url('onepage/'.$other) }}">Others</a></li>

		<li><a href=" <?php $servi = $products6[0]->category_id ?? '4';?> {{ url('onepage/'.$servi) }}">Services</a></li>
        
        <li><a href="#">About us</a></li> 
				
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
	</div>
	{{-- container1 --}}
