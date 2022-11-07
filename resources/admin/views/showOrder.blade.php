@extends('layouts.default')

@section('title')
  Admin | Order Pages
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
            {{--
            <a href="{{url('admin/add-category')}}">
             <div style="text-align: right;"><button class="btn btn-dark btn-sm">Add <?=$pg?></button></div>
            </a>
            --}}
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
              <!-- <div class="card-header">
                <h3 class="card-title">Home Page Data</h3>
              </div> -->
              <!-- /.card-header -->
    
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Package</th>
                    <th>Price</th>
                    <th>Email</th>
                    <th>Total Amount</th>
                    <th>Payment Status</th>
                    <!-- <th>Title</th>
                    <th>Content</th> -->
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach($orders as $order)
                    <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->package_name}}</td>
                    <td>£{{$order->package_price}}</td>
                    <td>{{$order->billing_email}}</td>
                    <td>£{{$order->grand_total}}</td>
                    <td>
                        <?php if($order->payment_status == "completed"){ ?>
                            <span class="btn btn-success">{{$order->payment_status}}</span>
                        <?php }else{ ?>
                            <span class="btn btn-info">{{$order->payment_status}}</span>
                        <?php } ?>
                    </td>
                    <td>
                    <a href="{{route('order.show',['id' => $order->id])}}"><i style="color: #17a2b8;" class="far fa-eye"></i></a> 
                    {{--
                    |
                    <a href="{{route('order.edit',['id' => $order->id])}}"><i style="color: #c49f47;" class="fas fa-pen-square"></i></a>
                    --}} |
                    <a href="{{route('order.delete' , ['id' => $order->id])}}"><i style="color: #bd0a0a;" class="fa fa-trash" aria-hidden="true"></i></a>

                    </td>
                    </tr>
                  	@endforeach
                  
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                    
                  
                  
                </div>
              </div>
             
            </div>
            
          </div>
          <!-- /.card -->
        </div>

@endsection
