@extends('layouts.default')

@section('title')
Admin | Logo
@endsection
@section('content')

<div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              Logo Add Details to Logo
            </h3>
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
                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Add Logo</a>
              </li>
             
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
              <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                <div class="container">
                  
                    <div class="row" style="text-align: left;padding: 14px;">
                      <div class="col-md-6">
                        <?php if(isset($logoImage[0]['image'])){ ?>

                         <img style="width: 250px; height: 150px;object-fit: contain;" src="{{asset('/adminTheme/uploads/logo')}}/{{$logoImage[0]['image']}}">

                        <?php }else{ ?>
                          
                          <img style="width: 250px; height: 150px;object-fit: contain;" src="{{asset('adminTheme/images/noimage.jpg')}}">
                        
                        <?php } ?>
                      </div>
                    </div>
                  
                  <div class="col-md-6">
                    <form action="{{ route('logo.upload') }}" method="post" enctype= "multipart/form-data">
                      @csrf
                      <div class="form-group">

                          <label>Upload Image</label>
                          <div class="input-group">
                              <span class="input-group-btn">
                                  <span class="btn btn-default btn-file">
                                      Browse… <input type="file" name="image" id="imgInp">
                                  </span>
                              </span>
                               
                              <input type="text" class="form-control" readonly>
                          </div>
                          <img id='img-upload'/>
                          <br>
                          
                      </div>
                      <button type="submit" class="btn btn-info" >Upload</button>
                    </form>
                </div>
                </div>
              </div>
             
            </div>
            
          </div>
          <!-- /.card -->
        </div>




<!-- Mutiple image upload Ui -->
<!-- <div class="container-fluid">
      <br />
    <h3 align="center">Image Upload in Laravel using Dropzone</h3>
    <br />
        
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Select Image</h3>
        </div>
        <div class="panel-body">
          <form id="dropzoneForm" class="dropzone" action="{{ route('dropzone.upload') }}">
            @csrf
          </form>
          <div align="center">
            <button type="button" class="btn btn-info" id="submit-all">Upload</button>
          </div>
        </div>
      </div>
      <br />
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Uploaded Image</h3>
        </div>
        <div class="panel-body" id="uploaded_image">
          
        </div>
      </div>
    </div> -->


@endsection