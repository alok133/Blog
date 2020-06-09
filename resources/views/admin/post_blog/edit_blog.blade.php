@extends('admin.layouts.master')
@section('content')

 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Blog</h1>
                  <small>Add Blog</small>
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
                              <i class="fa fa-list"></i>  View Blog </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" method="post" action="{{url('/edit/blog/' .$data->id)}}" enctype="multipart/form-data">
                           	@csrf
                              <div class="form-group">
                                 <label>Blog Heading</label>
                                 <input type="text" value="{{$data->heading}}" name="heading" class="form-control">
                              </div>
                              
                              <div class="form-group">
                                 <label>Post Profile Image</label>
                                 <input type="file" name="post_profile_image">
                                 <input type="hidden" value="{{$data->post_profile_image}}" name="current_profile_image">

                                 <img src="{{asset('/upload/'.$data->post_profile_image)}}" style="width: 100px;margin-top: 10px;">
                              </div>
                              
                              	
                              
                              <div class="form-group">
                                 <label>Content</label>
                                 <textarea name="content" class="form-control">
                                    {{$data->content}}
                                 </textarea>
                              </div>

                              <div class="form-group">
                                 <label>Image</label>
                                 <input type="file" name="image">
                                 <input type="hidden" name="current_image" value="{{$data->image}}">

                                 <img src="{{asset('/upload/'.$data->image)}}" style="width: 100px;margin-top: 10px;">
                              </div>

                              <div class="form-group">
                                 <label>Heading2</label>
                                 <input type="text" value="{{$data->heading2}}" name="heading2" class="form-control">
                              </div>

                              <div class="form-group">
                                 <label>Content2</label>
                                 <textarea name="content2" class="form-control">
                                    {{$data->content2}}
                                 </textarea>
                              </div>

                              <div class="form-group">
                                 <label>Heading3</label>
                                 <input type="text" value="{{$data->heading3}}" name="heading3" class="form-control">
                              </div>

                              <div class="form-group">
                                 <label>Content3</label>
                                 <textarea name="content3" class="form-control">
                                    {{$data->content3}}
                                 </textarea>
                              </div>

                              <div class="form-group">
                                 <label>Heading4</label>
                                 <input type="text" value="{{$data->heading4}}" name="heading4" class="form-control">
                              </div>

                              <div class="form-group">
                                 <label>Content4</label>
                                 <textarea name="content4" class="form-control">
                                    {{$data->content4}}
                                 </textarea>
                              </div>

                             

                              
                              <div class="reset-button">
                                 
                                <input type="submit" class="btn btn-success" value="Add User">
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