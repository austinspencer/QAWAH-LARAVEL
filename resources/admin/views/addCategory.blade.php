@extends('layouts.default')

@section('title')
  Admin | Add Category
@endsection

@section('content')

<?php 
$page = Request::segment(2);
$pg = ucfirst($page);
?>
<div class="card card-primary card-outline">
          <div class="card-header">
           
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              {{$pg}} Add Details to {{$pg}} Page
            </h3>
            <!-- <a href="{{url('admin/add-content')}}">
             <div style="text-align: right;"><button class="btn btn-primary">Add Content</button></div>
            </a> -->

          </div>

          <div class="card-body">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif

          @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
          @endif

          @if($message = Session::get('error'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
          @endif


            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">{{$pg}} Page </a>
              </li>
             
            </ul>

           <br>

            <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{$pg}} Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="post" action="{{route('create.category')}}" >
                @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="FirstName">Category Name</label>
                    <input type="text" required  name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category">
                  </div>

                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          

          </div>
          
        </div>

            
            
          </div>
          <!-- /.card -->
        </div>


@endsection