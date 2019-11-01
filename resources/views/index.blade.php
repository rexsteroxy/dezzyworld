@extends('layouts.index')


@section('content')
<div class="container"> 
@if(count($products) > 0)

@foreach($products->all() as $product)
    <div class="row">
       
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-image">
                        <img src="{{$product->image}}" alt="Still Loading">
                    </div>
                    <div class="blog-details text-center">
                        <div class="blog-meta"><a href="#"></a></div>
                        <h3><a href="single-blog.html">{{$product->title}}</a></h3>
                        <p>{{$product->description}}</p>
                        <a href='{{ url("/product_view/{$product->id}") }}' class="read-more">View Details</a>
                    </div>
                </div>
            </div>
                    @endforeach
                @else
                <h2>NO PRODUCT AVAILABLE</h2>

                @endif
                {{$products->links()}}
                    
               
       
    </div>
</div>
@endsection
