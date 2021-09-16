			
 {{-- bootstrap carousel start --}}
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
	  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	  <li data-target="#myCarousel" data-slide-to="1"></li>
	  <li data-target="#myCarousel" data-slide-to="2"></li>


	</ol>
  
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
	
			
	
		<div class="item active">
					<img style="width: 1200px " src="{{ asset('image/'.$sliders[0]->image1) }}" alt="slider image">
					<div class="carousel-caption">
					<h3>{{ $sliders[0]->title }}</h3>
					<p>{{ $sliders[0]->desc }}</p>
					</div>
		</div>
		<div class="item ">
					<img style="width: 1200px " src="{{ asset('image/'.$sliders[0]->image2) }}" alt="slider image">
					<div class="carousel-caption">
					<h3>{{ $sliders[0]->title }}</h3>
					<p>{{ $sliders[0]->desc }}</p>
					</div>
		</div>
		<div class="item ">
					<img style="width: 1200px " src="{{ asset('image/'.$sliders[0]->image3) }}" alt="slider image">
					<div class="carousel-caption">
					<h3>{{ $sliders[0]->title }}</h3>
					<p>{{ $sliders[0]->desc }}</p>
					</div>
		</div>
		
	
		
	</div>
  
	<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
		</a>
  </div>

 {{-- bootstrap carousel end --}}
