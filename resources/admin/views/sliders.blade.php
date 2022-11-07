@extends('layouts.default')

@section('title')
  Admin | Home Page Slider
@endsection

@section('content')


<div class="card card-primary card-outline">
          <div class="card-header">
           <?php 
                 $page = Request::segment(2);
                 $pg = ucfirst($page);
           ?>
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              <?=$pg?> Add Details to <?=$pg?> Page
            </h3>
            <?php $pageLink = 'admin/'.Request::segment(2).'/add-content'; ?>
            <a href="{{url('admin/add-slider')}}">
             <div style="text-align: right;"><button class="btn btn-dark btn-sm">Add <?=$pg?></button></div>
            </a>

          </div>

          <div class="card-body">
             @if($message = Session::get('success'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
              </div>
            @endif
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true"><?=$pg?> Page </a>
              </li>
             
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
              <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                <div class="container">
                  
                  <div class="card">
              
    
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach($sliders as $slider)
                    <tr>
                    <td>{{$slider->id}}</td>
                    <td>{{$slider->title}}</td>
                    <td>{{strip_tags($slider->description)}}</td>
                    <td><img style="width:100px;" src="{{asset('/adminTheme/uploads/homeslider')}}/{{$slider->image}}"></td>
                    <td>
                      
                        <a href="{{route('slider.edit',['id'=>$slider->id])}}"><i style="color: #c49f47;" class="fas fa-pen-square"></i></a> |
                        <a href="{{route('slider.delete',['id'=>$slider->id])}}"><i style="color: #bd0a0a;" class="fa fa-trash" aria-hidden="true">
                        </i></a>
                        

                    </td>
                    </tr>
                  	@endforeach
                  
                  </tbody>
                  
                </table>
              </div>
             
            </div>
                    
                  
                  
                </div>
              </div>
             
            </div>
            
          </div>
          <!-- /.card -->
        </div>

@endsection
