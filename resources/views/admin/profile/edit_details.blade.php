@extends('admin.layouts.master')
@section('content')
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Edit Profile</h1>
                  <small>Edit Profile</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="clist.html"> 
                              <i class="fa fa-list"></i>  Add Profile </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" method="post" action="{{url('/edit/user/' .$data->id)}}" enctype="multipart/form-data">
                           	@csrf
                              <div class="form-group">
                                 <label>Username</label>
                                 <input type="text" value="{{$data->username}}" name="username" class="form-control" placeholder="Enter First Name" required>
                              </div>
                              
                              
                              	
                              </textarea>
                              <div class="form-group">
                                 <label>Introduction</label>
                                 <textarea name="introduction"  class="form-control">
                                    {{$data->introduction}}
                                 </textarea>
                              </div>
                              <div class="form-group">
                                 <label>Profile Image</label>
                                 <input type="file" name="image"> <br>
                                 <input type="hidden" name="current_image" value="{{$data->image}}">
                                
                                @if(!empty($data->image))
                                 <img src="{{asset('/upload/' .$data->image)}}" style="width: 100px;margin-top: 10px;">
                                @endif
                              </div>
                              
                              <div class="reset-button">
                                 
                                <input type="submit" class="btn btn-success" value="Edit User">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
@endsection