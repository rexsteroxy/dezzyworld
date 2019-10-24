<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;

class PagesController extends Controller
{
    
    public function getHome(){ 

    	return view('index');
    }
   
    
}
