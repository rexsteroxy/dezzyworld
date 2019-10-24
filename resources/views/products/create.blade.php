@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"> 
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
            <div class="panel panel-default">
                <div class="panel-heading">DezzyWorld Products  Upload</div>

                <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{route('admin.addproduct')}}"
                enctype = "multipart/form-data">
                        {{ csrf_field() }}

                        
                        <div class="form-group{{ $errors->has('product_title') ? ' has-error' : '' }}">
                            <label for="product_title" class="col-md-4 control-label">Product Title:</label>

                            <div class="col-md-6">
                                <input id="product_title" type="text" class="form-control" name="product_title"
                                 value="{{ old('product_title') }}" required autofocus placeholder='eg. A4 Envelopes'>

                                @if ($errors->has('product_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->product('product_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description:</label>

                            <div class="col-md-6">
                                <textarea id="description"  rows="4" type="text" class="form-control" 
                                name="description"
                                 value="{{ old('description') }}" required autofocus 
                                 placeholder='eg. Description about the product'></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                           
                        
                            

                            
                            <div class="form-group{{ $errors->has('size') ? ' has-error' : '' }}">
                            <label for="size" class="col-md-4 control-label">size:</label>

                            <div class="col-md-6">
                                <input id="size"  rows="4" type="text" class="form-control" 
                                name="size"
                                 value="{{ old('size') }}" required autofocus placeholder='eg. A4 - 8.3 * 11.7'>

                                @if ($errors->has('size'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('size') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price"
                                 value="{{ old('price') }}" required autofocus placeholder='$200-$500'>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('profile_pic') ? ' has-error' : '' }}">
                            <label for="profile_pic" class="col-md-4 control-label">Product Image</label>

                            <div class="col-md-6">
                                <input id="profile_pic" type="file" class="form-control" name="product_image"
                                 value="{{ old('product_image') }}" required autofocus>

                                @if ($errors->has('product_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-top:10px">
                                    Upload Product
                                </button>
                            </div>
                        </div>
                            
                            </form>

                       
            </div>
        </div>
    </div>
</div>
@endsection
