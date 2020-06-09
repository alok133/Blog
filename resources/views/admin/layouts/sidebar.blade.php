<aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  <li class="active">
                     <a href="index.html"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-user"></i><span>Profile</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/addProfile')}}">Add Profile</a></li>
                        <li><a href="{{url('/viewProfile')}}">View Profile</a></li>
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-user"></i><span>About</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/addAbout')}}">Add About</a></li>
                        <li><a href="{{url('/viewAbout')}}">View About</a></li>
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-user"></i><span>Post Blog</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/addBlog')}}">Add Blog</a></li>
                        <li><a href="{{url('/viewBlog')}}">View Blog</a></li>
                     </ul>
                  </li>
                  
                  
               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>