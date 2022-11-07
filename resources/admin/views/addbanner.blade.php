@extends('layouts.default')

@section('title')
Admin | Add Banner
@endsection
@section('content')


<div class="card card-primary card-outline">
          <div class="card-header">
           
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              Home Banner Add Details to Banner Page
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
                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Inner Banner </a>
              </li>
             
            </ul>

           <br>

            <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Inner Banner</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('banner.store')}}" method="post" enctype="multipart/form-data">
              	@csrf
              	<?php $path = '/uploads/homeslider'; ?>
              	<input type="hidden" name="imagepath" value="{{$path}}">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" class="form-control" required="" name="title" id="exampleInputPassword1" placeholder="Title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                   <div class="form-group">
                   	 <img style="width: 250px; height: 150px;object-fit: contain;" src="{{asset('adminTheme/images/noimage.jpg')}}">
                   </div>
                    

                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" required name="image" class="custom-file-input" id="image">
                        <label style="width: 50%;" class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
          

          </div>
          
        </div>

            
            
          </div>
          <!-- /.card -->
        </div>

@endsection
