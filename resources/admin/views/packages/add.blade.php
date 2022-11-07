@extends('layouts.default')

@section('title')
Admin | Add Package
@endsection
@section('content')


<div class="card card-primary card-outline">
          <div class="card-header">
           
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              Package Add Details to Package Page
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
                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Package Page </a>
              </li>
            </ul>
           <br>
          <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Package Content</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('package.store')}}" method="post" enctype="multipart/form-data">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Package Title</label>
                    <input type="text" class="form-control" required="" name="title" id="exampleInputPassword1" placeholder="Title">
                  </div>
                 <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Package Catogery</label>
                      <select class="form-control" name="catogery_id">
                        <option>Select Package Head</option>
                          @foreach($pc as $pc_row)
                            <option value="{{ $pc_row->id }}">{{ $pc_row->title }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Package Type</label>
                      <select class="form-control" name="Type">
                      <option value="platinum">Platinum</option>
                      <option value="gold">Gold</option>
                      <option value="spotlight">Spotlight</option>
                      <option value="love-notes">Love Notes</option>
                       <option value="discrete-mode">Discrete Mode</option>
                    </select>
                     </div>
                   </div>
                 </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Duration</label>
                        <input type="text" class="form-control" required name="duration" id="Duration" placeholder="Duration">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="text" class="form-control" required name="price" id="new_price" placeholder="Price">
                      </div>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Spotlights</label>
                        <input type="number" class="form-control" required name="spotlights" id="spotlights" value="0" placeholder="spotlights">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">love Notes</label>
                        <input type="number" class="form-control" required name="lovenotes" value="0" id="lovenotes" placeholder="spotlights">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <h3>Allow Options</h3>
                    <div class="form-check form-switch form-check-inline">
                      <input class="form-check-input" name="options[]" type="checkbox" id="inlineCheckbox1" value="fancy">
                      <label class="form-check-label" for="inlineCheckbox1">Fancy</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="options[]" type="checkbox" id="inlineCheckbox2" value="sojourn">
                      <label class="form-check-label" for="inlineCheckbox2">Sojourn</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="options[]" type="checkbox" id="inlineCheckbox3" value="prestige">
                      <label class="form-check-label" for="inlineCheckbox3">Prestige</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="options[]" type="checkbox" id="inlineCheckbox4" value="super-fancy">
                      <label class="form-check-label" for="inlineCheckbox4">Super Fancy</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="options[]" type="checkbox" id="inlineCheckbox5" value="exclusive">
                      <label class="form-check-label" for="inlineCheckbox5">Exclusive</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="options[]" type="checkbox" id="inlineCheckbox6" value="discrete-mode">
                      <label class="form-check-label" for="inlineCheckbox6">Discrete Mode</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="options[]" type="checkbox" id="inlineCheckbox7" value="say-what">
                      <label class="form-check-label" for="inlineCheckbox7">Say What?</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="options[]" type="checkbox" id="inlineCheckbox8" value="read-receipts">
                      <label class="form-check-label" for="inlineCheckbox8">Read Receipts</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea class="ckeditor" required name="description" ></textarea>
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
