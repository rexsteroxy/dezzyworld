<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use JD\Cloudder\Facades\Cloudder;
use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
            $img = $request->file('product_image');
            $name = $img->getClientOriginalName();
            $image_name = $img->getRealPath();

            Cloudder::upload($image_name, null);

            list($width, $height) = getimagesize($image_name);

            $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);

            //save to uploads directory
            $img->move(public_path("uploads"), $name);
        

        $product = new Product;
        $product->title = $request->input('product_title');
        $product->description = $request->input('description');
        $product->size= $request->input('size');
        $product->price= $request->input('price');
        $product->image = $image_url;
        $product->save();

        return redirect('/admin')->with('response','product uploaded  successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        $products =Product::where('id', '=', $product_id)->get();
        return view('products.view',compact('products'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
