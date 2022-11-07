@extends('layouts.default')

@section('title')
  Admin | Products
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
            
            <br><br>
            <form method="post" action="{{route('upload.images')}}" accept-charset="utf-8" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="input-group hdtuto control-group lst increment" style="width: 40%;padding-left: 20px;">
                <input type="hidden" name="product_id" value="{{$id}}"  >
                <input type="file" multiple required style="padding: 3px;" name="image[]" class="myfrm form-control">
                <span class="text-danger">{{ $errors->first('image') }}</span>
                </div>
                <div class="clone hide">
                </div>
                <button type="submit" class="btn btn-warning" style="margin-top:10px;margin-left: 20px;">Upload Multiple Images</button>
            </form>      

            <hr>
              <div class="card-body">
              @if($products)
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Product Image</th>
                   
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach($products as $product)
                    <tr>
                    <td>{{$product->id}}</td>
                    <td>
                    <a href="{{asset('/adminTheme/uploads/product')}}/{{$product->image}}" data-toggle="lightbox">
                      <img style="width:100px;height:100px;object-fit: cover;" class="img-fluid mb-2" src="{{asset('/adminTheme/uploads/product')}}/{{$product->image}}">
                    </a>
                    </td>
                    <td>
                        <a href="{{route('gallery.delete',['id'=>$product->id])}}">
                          <button type="button" class="btn btn-danger">Delete </button>
                        </a>
                    </td>
                    </tr>
                  	@endforeach
                  
                  </tbody>
                  
                </table>
                @endif
              
              </div>
             
            </div>
                    
                  
                  
                </div>
              </div>
             
            </div>
            
          </div>
          <!-- /.card -->
        </div>

@endsection

@push('footer-scripts')
<script type="text/javascript">
$('#myLightbox').lightbox(options)
</script>
@endpush
