@extends('layouts.admin')

<style type="text/css">
 .avatar{
     border-radius:100%;
     max-width : 100px;
 }
</style>
@section('content')
<div class="container"> 
    <div class="row"> 
    
        @if(count($errors) > 0)
                    @foreach($errors->all as $error)
                        <div class="alert alert-danger"><li>{{$error}}</li></div>
                    @endforeach
                @endif
                @if (session('response'))
                        <div class="alert alert-success">
                            {{ session('response') }}
                        </div>
                    @endif
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                <div class="row">
                    <div class="col-md-4">  
                        Dashboard
                     </div>
                     <div class="col-md-4">
                     <form  method="POST" action=''
                         enctype = "multipart/form-data" >
                        {{ csrf_field() }}

                        <div class="input-group">
                                <input  type="text" class="form-control" name="search"
                                 placeholder="Search For..." required autofocus>
                                <span class="input-group-btn">
                                 <button type="submit" class="btn btn-primary">
                                 Search
                                 </button>
                                </span>
                        </div>
                        </form>
                     </div>
                </div>
                </div>

                <div class="panel-body">
              
               <!-- <div class="col-md-3">
                    <img src="" 
                    class="avatar" alt=""> 
                   <p class="lead"></p>
                   <p class="lead"></p>
                </div> -->
              
                <div class="col-md-2">
                    <img src="images/black5.jpg" 
                    class="avatar" alt=""> 
                  
                </div>
               
                <div class="col-md-9">
               

                @if(count($products) > 0)

                @foreach($products->all() as $product)
                <div class="row">
                <div ></div>
                <h1>{{$product->product_title}}</h1>
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Product Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Size</th>
                            <th scope="col">Price Per Quantity</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{$product->title}}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->size }}</td>
                            <td>{{ $product->price }}</td>
                            
                          </tr>
                        </tbody>
                    </table>
                </div>
                    
                
                    <cite style="float:left">Uploaded On: {{date('M j, Y h:i', strtotime($product->updated_at))}}</cite>
                    <hr>
                @endforeach
                @else
                <h2>NO product POST AVAILABLE</h2>

                @endif
                
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


























