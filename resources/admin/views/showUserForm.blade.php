@extends('layouts.default')

@section('title')
  Admin | Add User
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
            <!-- 
              <a href="{{url('admin/add-content')}}">
                <div style="text-align: right;"><button class="btn btn-primary">Add Content</button></div>
              </a>
            -->

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
                <h3 class="card-title">User Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="post" action="{{route('create.user')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="FirstName">First Name</label>
                    <input type="text" required  name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                  </div>

                  <div class="form-group">
                    <label for=">LastName">Last Name</label>
                    <input type="text" required name="lastname" class="form-control" id="lastname" placeholder="Enter Last Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" required name="email" class="form-control" id="email" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" required name="password" class="form-control" id="password" placeholder="Enter Password">
                  </div>

                   <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" required name="country" class="form-control" id="country" placeholder="Enter Country">
                  </div>

                  <div class="form-group">
                    <label for="country">State</label>
                    <input type="text" name="state" class="form-control" id="state" placeholder="Enter State">
                  </div>

                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="Enter City">
                  </div>

                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text"  name="address" class="form-control" id="address" placeholder="Enter Address">
                  </div>

                   <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text"  name="phone" class="form-control" id="phone" placeholder="Enter Phone">
                  </div>

                  <div class="form-group">
                    <label for="zipcode">Zipcode</label>
                    <input type="text" name="zipcode" class="form-control" id="exampleInputPassword1" placeholder="Enter Zipcode">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Upload Picture</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
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
