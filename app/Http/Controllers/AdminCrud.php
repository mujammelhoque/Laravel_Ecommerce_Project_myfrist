<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\slider;
use App\Models\Category;
use App\Models\Sub_category;
USE DB;

class AdminCrud extends Controller
{
    //
    public function crIndex()
    {
        $products = Product::latest()->paginate(5);
    
        return view('admin.products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
//    ---------------------
public function crCreate()
{
    $categories = Category::all();
    return view('admin.products.upload',compact('categories'));
}
// -------------------------

public function crStore(Request $request)
{
    $request->validate([
        'name' => 'required',
        'title' => 'required',
        'category_id' => 'required',
        'subcategory_id' => 'required',
        'price' => 'required',
        // 'oldprice' => 'nullable',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $input = $request->all();

    if ($image = $request->file('image')) {
        $destinationPath = 'image/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['image'] = "$profileImage";
    }

    Product::create($input);
 
    return redirect()->route('admin.products.index')
                    ->with('success','Product created successfully.');
}
// --------------------------
public function crShow(Product $product)
{
    return view('admin.products.show',compact('product'));
}
// --------------------------
// public function crEdit(Product $product)
//     {
//         return view('admin.products.edit',compact('product'));
//     }
    // ---------------------------

    // public function crUpdate(Request $request, Product $product)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'detail' => 'required'
    //     ]);
  
    //     $input = $request->all();
  
    //     if ($image = $request->file('image')) {
    //         $destinationPath = 'image/';
    //         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    //         $image->move($destinationPath, $profileImage);
    //         $input['image'] = "$profileImage";
    //     }else{
    //         unset($input['image']);
    //     }
          
    //     $product->update($input);
    
    //     return redirect()->route('admin.products.index')
    //                     ->with('success','Product updated successfully');
    // }
    //------------------------
    public function crDestroy($id)
    {
        $user = Product::findOrFail($id);
        
        $image = '/image/'.$user->image;
        $path = str_replace('\\','/',public_path());

        if (file_exists($path.$image)) {
           unlink($path.$image);
           $user->delete();
           return back();
        }
        else{
            $user->delete();
            return back();
        }
        
        }
     

        
    //  admin slider   ---------------**--------------------
    //  admin slider   ---------------**--------------
    //  admin slider   ---------------**-------
     
    public function sliderform()
    {
        return view('admin.products.sliderform');
    }


    public function sliderstore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            // 'oldprice' => 'nullable',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image1')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image1'] = "$profileImage";
        }
        if ($image = $request->file('image2')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHi') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image2'] = "$profileImage";
        }
        if ($image = $request->file('image3')) {
            $destinationPath = 'image/';
            $profileImage = date('Ymdis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image3'] = "$profileImage";
        }
    
        slider::create($input);
        return redirect()->to('/');
    }

    public function sliderindex()
    {
        $sliders = slider::all();
        return view('admin.products.sliderindex', compact('sliders') )
        ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    public function sliderdelete($id)
    {
        $sdelete = slider::findOrFail($id);
        
        $image = '/image/'.$sdelete->image1;
        $image2 = '/image/'.$sdelete->image2;
        $image3 = '/image/'.$sdelete->image3;
        $path = str_replace('\\','/',public_path());

        if (file_exists($path.$image)) {
           unlink($path.$image);
           $sdelete->delete();
           
        }
        if (file_exists($path.$image2)) {
           unlink($path.$image2);
           $sdelete->delete();
           
        }
        if (file_exists($path.$image3)) {
           unlink($path.$image3);
           $sdelete->delete();
           
        }
        else{
            $sdelete->delete();
            return back();
        }
        
        
           
    }


}


