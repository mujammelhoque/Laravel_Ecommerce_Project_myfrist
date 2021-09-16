<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\slider;
use App\Models\Category;
use App\Models\Sub_category;
USE DB;



class ProductController extends Controller
{
    public function store(Request $request)
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
        return redirect()->to('/');
    }



    public function cart()
    {
        return view('pages.cartview');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function getState(Request $request)
	{
		$subcategories = DB::table("sub__categories")
		->where("category_id",$request->category_id)
		->pluck("name","id");
		return response()->json($subcategories);
	}


    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formindex()
    {
        $categories = Category::all();
        //  $subcategories =Sub_category::all();
      
         return view('admin.products.upload', compact('categories'));
    }


    public function index()
    {
        // $sliders = slider::all();
        $sliders = slider::orderBy('id', 'DESC')->get();
       $allproduct = Product::latest()->paginate(6);
       $products = Product::where('category_id', 4)
                            ->get();
       $products2 = Product::where('category_id', 3)
                            ->get();
       $products3 = Product::where('category_id', 1)
                            ->get();
       $products4 = Product::where('category_id', 2)
                            ->get();
       $products5 = Product::where('category_id', 5)
                            ->get();
       $products6 = Product::where('category_id', 6)
                            ->get();
       $products7 = Product::where('category_id', 7)
                            ->get();
       $products8 = Product::where('category_id', 8)
                            ->get();
       $products9 = Product::where('category_id', 9)
                            ->get();
       $products10 = Product::where('category_id', 10)
                            ->get();
     
       return view('index', compact('sliders','allproduct','products', 
       'products2', 'products3','products4','products5',
       'products6','products7','products8','products9','products10',) );
    }
    public function mainview($id)
    {
    //    $products = Product::all();
    $singlePro = Product::find($id);
    $catname = Category::find($singlePro->category_id);
       return view('pages.mainview', compact('singlePro','catname'));
    return view('pages.mainview');
    }


    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->image,
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
    




    }

