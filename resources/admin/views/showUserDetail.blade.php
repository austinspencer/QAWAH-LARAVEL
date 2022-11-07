@extends('layouts.default')

@section('title')
  Admin | Users|Show
@endsection

@section('content')


<div class="card card-primary card-outline">
          <div class="card-header">
     
            <h3 class="card-title">
              <i class="fas fa-eye"></i>
              User Details
            </h3>


          </div>

          <div class="card-body">
  
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
              </li>
             
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
              <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                <div class="container">
                  
              <div class="card">
                   <div class="card-body">
                <h3 class="card-title">User Detail</h3>

                <div class="row">
                        <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card ">
                    <div class="card-header">
                         <div class="card-body">
                            <div class="form-group">
                             <label>User  Name</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->profileName}}">
                            </div>
                               <div class="form-group">
                             <label>User Email</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                             <label>User Phone</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->phone}}">
                            </div>
                            <div class="form-group">
                             <label>User DOB</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->birthday}}">
                            </div>
                         </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card ">
                    <div class="card-header">
                         <div class="card-body">
                            <div class="form-group">
                             <label>User  hieght</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->height}}">
                            </div>
                               <div class="form-group">
                             <label>User Sex</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->iAm}}">
                            </div>
                            <div class="form-group">
                             <label>User Seeking</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->seeking}}">
                            </div>
                            <div class="form-group">
                             <label>User Zip</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->zipcode}}">
                            </div>
                         </div>
                    </div>
                    </div>
                </div>
                        <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card ">
                    <div class="card-header">
                         <div class="card-body">
                            <div class="form-group">
                             <label>User  About</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->aboutMe}}">
                            </div>
                               <div class="form-group">
                             <label>User Body Type</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->bodyType}}">
                            </div>
                            <div class="form-group">
                             <label>User Drink/Not</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->doYouDrink}}">
                            </div>
                            <div class="form-group">
                             <label>User Childeren</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->doYouHaveChildren}}">
                            </div>
                         </div>
                    </div>
                    </div>
                </div>
                              <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card ">
                    <div class="card-header">
                         <div class="card-body">
                            <div class="form-group">
                             <label>User Smoke</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->doYouSmoke}}">
                            </div>
                               <div class="form-group">
                             <label>User Want More childeren</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->doYouWantMoreChildren}}">
                            </div>
                            <div class="form-group">
                             <label>User Employemnt Status</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->employmentStatus}}">
                            </div>
                            <div class="form-group">
                             <label>User have Pets</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->havePets}}">
                            </div>
                         </div>
                    </div>
                    </div>
                </div>
                    <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card ">
                    <div class="card-header">
                         <div class="card-body">
                            <div class="form-group">
                             <label>User have Pets</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->havePetsOthers}}">
                            </div>
                               <div class="form-group">
                             <label>User Does Exercise</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->howOftenDoYouExercise}}">
                            </div>
                            <div class="form-group">
                             <label>User Living stituation</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->livingSituation}}">
                            </div>
                            <div class="form-group">
                             <label>User Marital Status</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->maritalStatus}}">
                            </div>
                         </div>
                    </div>
                    </div>
                </div>
                           <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card ">
                    <div class="card-header">
                         <div class="card-body">
                            <div class="form-group">
                             <label>User Seeking Relationship</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->relationshipIAmSeeking}}">
                            </div>
                               <div class="form-group">
                             <label>User Willing To Relocate</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->willingToRelocate}}">
                            </div>
                            <div class="form-group">
                             <label>User Affiliation</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->anyAffiliation}}">
                            </div>
                            <div class="form-group">
                             <label>User Blieve</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->iBelieveIAM}}">
                            </div>
                         </div>
                    </div>
                    </div>
                </div>
                          <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card ">
                    <div class="card-header">
                         <div class="card-body">
                            <div class="form-group">
                             <label>User Belief System</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->maritalBeliefSystem}}">
                            </div>
                               <div class="form-group">
                             <label>User Spiritual Background</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->spiritualBackground}}">
                            </div>
                            <div class="form-group">
                             <label>User Spritual Value</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->spiritualValue}}">
                            </div>
                            <div class="form-group">
                             <label>User Blieve</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->studyBible}}">
                            </div>
                         </div>
                    </div>
                    </div>
                </div>
                  <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card ">
                    <div class="card-header">
                         <div class="card-body">
                            <div class="form-group">
                             <label>User Study Habits</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->studyHabits}}">
                            </div>
                               <div class="form-group">
                             <label>User Spiritual Background</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->spiritualBackground}}">
                            </div>
                            <div class="form-group">
                             <label>User Years In Truth</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->yearsInTruth}}">
                            </div>
                         </div>
                    </div>
                    </div>
                </div>

                </div>
              </div>
       </div>

                  <div class="card">
     
              <div class="card-body">
                <div class="row">
               @if($user->subscription != '[]')
                <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card ">
                    <div class="card-header">
                        <h3 class="card-title">User Subscription</h3>
                         <div class="card-body">
                            <div class="form-group">
                             <label>Package Name</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->subscription[0]->pkg_name}}">
                            </div>
                               <div class="form-group">
                             <label>Package Category</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->subscription[0]->pkg_catogery}}">
                            </div>
                            <div class="form-group">
                             <label>Package Spotlights</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->subscription[0]->spotlights}}">
                            </div>
                            <div class="form-group">
                             <label>Package Lovenotes</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$user->subscription[0]->lovenotes}}">
                            </div>
                         </div>
                    </div>
                    </div>
                </div>
                  @endif
 @if($user->isrealitePracticeKeeping != '[]')
                  <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card ">
                    <div class="card-header">
                        <h3 class="card-title">User Options</h3>
                         <div class="card-body">
                            @foreach($user->isrealitePracticeKeeping as $key => $opt)
                            <div class="form-group">
                             <label>Option No: {{$key+1}}</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$opt->options}}">
                            </div>
                          @endforeach
                        
                        
                         </div>
                    </div>
                    </div>
                </div>
                @endif
                 @if($user->kingdomGifts != '[]')
                  <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card ">
                    <div class="card-header">
                        <h3 class="card-title">User Kingdom Gifts</h3>
                         <div class="card-body">
                            @foreach($user->kingdomGifts as $key => $optt)
                            <div class="form-group">
                             <label>Option No: {{$key+1}}</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$optt->options}}">
                            </div>
                          @endforeach
                        
                        
                         </div>
                    </div>
                    </div>
                </div>
                @endif
                 @if($user->passions != '[]')
                  <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card ">
                    <div class="card-header">
                        <h3 class="card-title">User Passions</h3>
                         <div class="card-body">
                            @foreach($user->passions as $key => $opttt)
                            <div class="form-group">
                             <label>Passion No: {{$key+1}}</label>
                             <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{$opttt->options}}">
                            </div>
                          @endforeach
                        
                        
                         </div>
                    </div>
                    </div>
                </div>
                @endif
                         @if($user->profile_images != '[]')
                       <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card ">
                    <div class="card-header">
                        <h3 class="card-title">User Profiles</h3>
                         <div class="card-body">
                            <div class="form-group">
                                  <img src="{{asset('images/profile_images/'.$user->profile_images[0]->url)}}" width="100px">
                            </div>                 
                         </div>
                    </div>
                    </div>
                </div>
                @endif
            @if($user->gallery_images != '[]')
                       <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card ">
                    <div class="card-header">
                        <h3 class="card-title">User Gallery Images</h3>
                         <div class="card-body">
                            <div class="form-group">
                                  <img src="{{asset('images/gallery_images/'.$user->gallery_images[0]->url)}}" width="100px">
                            </div>                 
                         </div>
                    </div>
                    </div>
                </div>
                @endif
             </div>

              </div>
          
            
            </div>                  
                  
                  
                </div>
              </div>
             
            </div>
            
          </div>
          <!-- /.card -->
        </div>


@endsection
