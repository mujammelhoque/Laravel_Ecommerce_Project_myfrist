
<div class="container">
	<h3 id="Popular" class="title">	All Products </h3>
	   <!-- /.row -->
	   <div class="row">
		@foreach ($allproduct as $allpro )
			<div class="col-md-4 text-center col-sm-6 col-xs-6">
			<div class="thumbnail product-box">
				<img src="{{ asset('image/'.$allpro->image) }}" alt="">
				<div class="caption">
				<h3 class="product-name"><a href="#">{{ $allpro->name }}</a></h3>
				<h4 class="product-price">{{ $allpro->price}} <del class="product-old-price">{{ $allpro->oldprice }} tk</del></h4>
					<p><a href="#">Ptional dismiss button </a></p>
					<p>Ptional dismiss button in tional dismiss button in   </p>
					<p><a href="{{ url('add-to-cart/'.$allpro->id) }}" class="btn btn-success" role="button">Add To Cart</a> <a href="{{ url('mainview/'.$allpro->id) }}" class="btn btn-primary" role="button">See Details</a></p>
				</div>
			</div>
		</div>
		@endforeach
		<!-- /.col -->
		
	</div>
	<!-- /.row -->
	{!! $allproduct->links() !!}
</div>


<!-- /container -->
