@extends('admin.layouts.master')
@section('content')
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add About</h1>
                  <small>Add About</small>
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
                              <i class="fa fa-list"></i>  View About </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" method="post" action="{{url('/addAbout')}}" enctype="multipart/form-data">
                           	@csrf
                              <div class="form-group">
                                 <label>About Me</label>
                                 <textarea name="about_me" class="form-control"></textarea>
                              </div>
                              
                              <div class="form-group">
                                 <label>Image1</label>
                                 <input type="file" name="image">
                              </div>
                              
                              	
                              
                              <div class="form-group">
                                 <label>About Blog</label>
                                 <textarea name="about_blog" class="form-control"></textarea>
                              </div>

                              <div class="form-group">
                                 <label>Skill and Experience</label>
                                 <textarea name="skill_experience" class="form-control"></textarea>
                              </div>

                              <div class="form-group">
                                 <label>Side Projects</label>
                                 <textarea name="side_projects" class="form-control"></textarea>
                              </div>

                               <div class="form-group">
                                 <label>Image2</label>
                                 <input type="file" name="image_project">
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