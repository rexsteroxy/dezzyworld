<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;

class PagesController extends Controller
{
    
    public function getHome(){ 
        $products = Product::paginate(6);
        return view('index',compact('products'));
    }
    public function show($product_id)
    {
        $products =Product::where('id', '=', $product_id)->get();
        return view('productsview',compact('products'));
    }
    
}
