<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class onePageController extends Controller
{
    //
     
    public function onepage($id){
        // $Products = Product::where('category_id', '>', 100)->take(10)->get();
        $products = Product::where('category_id', '=', $id)->paginate(4);
//   $Products = Product:where('category_id',$id)->get();
       return view('pages.onepage',compact('products'));
    }

    //
    
}
