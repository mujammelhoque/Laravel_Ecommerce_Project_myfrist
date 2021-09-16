@extends('admin.products.prolayout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD with Image Upload Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('/sliderform') }}"> Add New slider</a>
            </div>
        </div>
    </div>
    
    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif --}}
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image1  </th>
            <th>Image2  </th>
            <th>Image3  </th>
          
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($sliders as $key=> $slider)
        <tr>
            <td>{{ ++$i }}</td>
         
            <td>{{ $slider->title }}</td>
            <td>{{ $slider->desc }}</td>
            <td><img src="/image/{{ $slider->image1}}" width="100px"></td>  
            <td><img src="/image/{{ $slider->image2}}" width="100px"></td>  
            <td><img src="/image/{{ $slider->image3}}" width="100px"></td>  
           
            <td>
                <form action="{{ url('sliderdelete',$slider->id) }}" method="post"> 
                        @csrf
                        @method('DELETE')
                      
                       <input type="submit" class="btn btn-danger" value="delete">
                   </form>
      
            </td>
        </tr>
        @endforeach
    </table>
    
  
        
@endsection