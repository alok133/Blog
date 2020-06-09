@extends('blog.layouts.master')
@section('content')
<header class="header text-center">     

    @foreach($post as $posts)
        <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">{{$posts->username}}'s Blog</a></h1>
        
        <nav class="navbar navbar-expand-lg navbar-dark" >
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column" >
                <div class="profile-section pt-3 pt-lg-0">
                    <img class="profile-image mb-3 rounded-circle mx-auto" src="{{asset('/upload' .$posts->image)}}" alt="image" >            
                    
                    <div class="bio mb-3">{{$posts->introduction}}<br><a href="about.html">Find out more about me</a></div><!--//bio-->
                    <ul class="social-list list-inline py-3 mx-auto">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
                    </ul><!--//social-list-->
                    <hr> 
                </div><!--//profile-section-->
                
                <ul class="navbar-nav flex-column text-left">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog-post.html"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog Post</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about.html"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
                    </li>
                </ul>
                
                <div class="my-2 my-md-3">
                    
                    <a class="btn btn-primary" href="https://themes.3rdwavemedia.com/" target="_blank">Get in Touch</a>
                    
                </div>
            </div>
        </nav>
        @endforeach
</header>

<div class="main-wrapper">
                
        <article class="about-section py-5">
            <div class="container">
                <h2 class="title mb-3">About Me</h2>
                
                @foreach($get as $gets)

                <p>{{$gets->about_me}} </p>

                <figure><a href="#"><img class="img-fluid" src="{{asset('/upload' .$gets->image)}}" alt="image"></a></figure>

                <h5 class="mt-5">About The Blog</h5>
                <p>{{$gets->about_blog}}</p>
                <h5 class="mt-5">My Skills and Experiences</h5>
                <p>{{$gets->skill_experience}}</p>
                <h5 class="mt-5">Side Projects</h5>
                <p>{{$gets->side_projects}}</p>
                
                <figure><a href="#"><img class="img-fluid" src="{{asset('/upload' .$gets->image_project)}}" alt="image"></a></figure>

                @endforeach
            </div>
        </article><!--//about-section-->
        
        <section class="cta-section theme-bg-light py-5">
            <div class="container text-center">
                <h2 class="heading">Newsletter</h2>
                <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
                <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div><!--//container-->
        </section>
        
        <footer class="footer text-center py-2 theme-bg-dark">
           
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
           
        </footer>
    
    </div><!--//main-wrapper-->

@endsection