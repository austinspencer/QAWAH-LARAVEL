@extends('layouts.default')

@section('title')
Admin | Add Product
@endsection
@section('content')


<div class="card card-primary card-outline">
          <div class="card-header">
           
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              Product Add Details to Product Page
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
                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Home Page </a>
              </li>
             
            </ul>

           <br>

            <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Product Content</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
              	@csrf
              	<?php $path = '/uploads/product'; ?>
              	<input type="hidden" name="imagepath" value="{{$path}}">
                <div class="card-body">

                <!-- <div class="form-group">
                    <select name="branch_id" class="form-control" style="width: 30%;">
                        <option value="">Select Brand</option>
                        <option value="1">Bechelor of technology</option>
                        <option value="2">Bechelor of science</option>
                        <option value="3">Bechelor of Arts</option>
                        <option value="8">branch1</option>
                        <option value="9">branch5</option>
                    </select>
                  </div> -->

                  <div class="form-group">
                  <label for="exampleInputPassword1">Select Category</label>
                    <select name="cat_id" class="form-control" required style="width: 30%;">
                        <option value="">Select Category</option>
                        @foreach($category as $act)
                            <option value="{{$act->id}}">{{$act->category_name}}</option>
                        @endforeach
                    </select>
                  </div>

               
    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Title</label>
                    <input type="text" class="form-control" required="" name="title" id="exampleInputPassword1" placeholder="Title">
                  </div>

                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Sku</label>
                    <input type="text" class="form-control" name="sku" id="exampleInputPassword1" placeholder="sku">
                  </div> -->

                  <div class="form-group">
                    <label for="exampleInputPassword1">Short Description</label>
                    <textarea class="ckeditor" required name="short_description" ></textarea>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Long Description</label>
                    <textarea class="ckeditor" required name="long_description" ></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Old Price</label>
                    <input type="number" class="form-control" name="old_price" id="old_price" placeholder="Old Price">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">New Price</label>
                    <input type="number" class="form-control" required name="new_price" id="new_price" placeholder="New Price">
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


                  <!-- <div class="form-group">
                    <label for="exampleInputFile">Image 2</label>
                   <div class="form-group">
                   	 <img style="width: 250px; height: 150px;object-fit: contain;" src="{{asset('adminTheme/images/noimage.jpg')}}">
                   </div>
                    
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image2" class="custom-file-input" id="exampleInputFile">
                        <label style="width: 50%;" class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div> -->

                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Video</label><br>
                    <div class="form-group">
                     <img style="width: 250px; height: 150px;object-fit: contain;" src="{{asset('images/video1.png')}}">
                   </div>

                    <video width="200" height="250" controls poster= "https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png"> 
				        <source src= "https://media.geeksforgeeks.org/wp-content/uploads/20200409094356/Placement100-_-GeeksforGeeks2.mp4"type="video/mp4"> 
				    </video> 

				    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="videourl" class="custom-file-input" id="exampleInputFile">
                        <label style="width: 50%;" class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    
                  </div> -->
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
