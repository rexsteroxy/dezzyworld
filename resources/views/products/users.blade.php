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
<!--               
                <div class="col-md-2">
                    <img src="images/black5.jpg" 
                    class="avatar" alt=""> 
                  
                </div> -->
               
                <div class="col-md-12">
               
                @if(count($users) > 0)

@foreach($users->all() as $user)
<div class="row">
<div ></div>
<h1>{{$user->id}}</h1>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Registered Time</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{date('M j, Y h:i', strtotime($user->updated_at))}}</td>
            
            
          </tr>
        </tbody>
    </table>
</div>
    

@endforeach
@else
<h2>NO  User AVAILABLE</h2>

@endif
                
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

























