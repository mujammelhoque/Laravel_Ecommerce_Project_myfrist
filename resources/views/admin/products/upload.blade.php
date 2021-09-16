@extends('admin.products.prolayout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/') }}"> Back</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ url('/crStore') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
              
                <select name="category_id" id="category" class="form-control" placeholder="Category">
                    {{-- <option value="-1">Select Category </option> --}}
                    @foreach ($categories as $category )
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                        
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subcategory:</strong>
              
                <select name="subcategory_id" id="subcategories" class="form-control">
                    {{-- <option value="-1">Select subcategory </option>
                    @foreach ($subcategories as $subcategory )
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                        
                    @endforeach --}}
                </select>
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" class="form-control" placeholder="price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Old Price:</strong>
                <input type="number" name="oldprice" class="form-control" placeholder="Old price">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>

<script type=text/javascript>
    $('#category').change(function(){
    var categoryID = $(this).val();  
    if(categoryID){
      $.ajax({
        type:"GET",
        url:"{{url('getState')}}?category_id="+categoryID,
        success:function(res){        
        if(res){
          $("#subcategories").empty();
          $("#subcategories").append('<option>Select State</option>');
          $.each(res,function(key,value){
            $("#subcategories").append('<option value="'+key+'">'+value+'</option>');
          });
        
        }else{
          $("#subcategories").empty();
        }
        }
      });
    }else{
      $("#subcategories").empty();
    //   $("#city").empty();
    }   
    });

    // $('#state').on('change',function(){
    // var stateID = $(this).val();  
    // if(stateID){
    //   $.ajax({
    //     type:"GET",
    //     url:"{{url('getCity')}}?state_id="+stateID,
    //     success:function(res){        
    //     if(res){
    //       $("#city").empty();
    //       $("#city").append('<option>Select City</option>');
    //       $.each(res,function(key,value){
    //         $("#city").append('<option value="'+key+'">'+value+'</option>');
    //       });
        
    //     }else{
    //       $("#city").empty();
    //     }
    //     }
    //   });
    // }else{
    //   $("#city").empty();
    // }
      
    // });
  </script>
@endsection
