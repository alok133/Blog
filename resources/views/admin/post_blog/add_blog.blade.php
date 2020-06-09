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
                           <form class="col-sm-6" method="post" action="{{url('/addBlog')}}" enctype="multipart/form-data">
                           	@csrf
                              <div class="form-group">
                                 <label>Blog Heading</label>
                                 <input type="text" name="heading" class="form-control">
                              </div>
                              
                              <div class="form-group">
                                 <label>Post Profile Image</label>
                                 <input type="file" name="post_profile_image">
                              </div>
                              
                              	
                              
                              <div class="form-group">
                                 <label>Content</label>
                                 <textarea name="content" class="form-control"></textarea>
                              </div>

                              <div class="form-group">
                                 <label>Image</label>
                                 <input type="file" name="image">
                              </div>

                              <div class="form-group">
                                 <label>Heading2</label>
                                 <input type="text" name="heading2" class="form-control">
                              </div>

                              <div class="form-group">
                                 <label>Content2</label>
                                 <textarea name="content2" class="form-control"></textarea>
                              </div>

                              <div class="form-group">
                                 <label>Heading3</label>
                                 <input type="text" name="heading3" class="form-control">
                              </div>

                              <div class="form-group">
                                 <label>Content3</label>
                                 <textarea name="content3" class="form-control"></textarea>
                              </div>

                              <div class="form-group">
                                 <label>Heading4</label>
                                 <input type="text" name="heading4" class="form-control">
                              </div>

                              <div class="form-group">
                                 <label>Content4</label>
                                 <textarea name="content4" class="form-control"></textarea>
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