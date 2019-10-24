<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $products = Product::paginate(6);
        return view('admin',compact('products'));
    }
    public function showUsers(){
        $users = User::paginate(50);
        return view('products.users',compact('users'));
    }
}
