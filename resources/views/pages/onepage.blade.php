@extends('pages.layout')
@include('parts.header')
@section('onepage')

<div class="container">
    <h3 id="Popular" class="title">	All Products </h3>
    <!-- /.row -->
    <div class="row">
     @foreach ($products as $product )
         <div class="col-md-4 text-center col-sm-6 col-xs-6">
            <div class="thumbnail product-box">
                <img src="{{ asset('image/'.$product->image) }}" alt="">
                <div class="caption">
                    <h3 class="product-name"><a href="#">{{ $product->name }}</a></h3>
                    <h4 class="product-price">{{ $product->price}} <del class="product-old-price">{{ $product->oldprice }} tk</del></h4>
                        <p><a href="#">Ptional dismiss button </a></p>
                        <p>Ptional dismiss button in tional dismiss button in   </p>
                        <p><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-success" role="button">Add To Cart</a> <a href="{{ url('mainview/'.$product->id) }}" class="btn btn-primary" role="button">See Details</a></p>
                </div>
            </div>
         </div>
         @endforeach
     </div>
     {!! $products->links() !!}
    
</div>
    
@endsection