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
              
                <!-- <div class="col-md-3">
                    <img src="images/black5.jpg" 
                    class="avatar" alt=""> 
                  
                </div> -->
               
                <div class="col-md-12">
               

                
                <div class="row">
                <div ></div>
                <h1></h1>
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Job Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Requirment</th>
                            <th scope="col">Location</th>
                            <th scope="col">Price Range</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>job->job_title }}</td>
                            <td>job->description }}</td>
                            <td>job->requirement }}</td>
                            <td>job->location }}</td>
                            <td>job->salary_range }}</td>
                            
                          </tr>
                        </tbody>
                    </table>
                </div>
                    
                
                    <p></p>
                    <ul class="nav nav-pills">
                        <li role="presentation">
                            <a href='}'>
                                <span class="fa fa-eye">View</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href=''>
                                <span class="fa fa-pencil-square-o">Edit</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href=''>
                                <span class="fa fa-trash">Delete</span>
                            </a>

                            
                        </li>
                        <li role="presentation">
                            <a href=''>
                                <span class="fa fa-trash">See all Applications</span>
                            </a>

                           
                        </li>
                        
                    </ul>
                    <cite style="float:left">Uploaded On: </cite>
                    <hr>
              
                <h2>NO JOB POST AVAILABLE</h2>

               
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



