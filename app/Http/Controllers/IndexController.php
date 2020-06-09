<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetail;
use App\BlogPost;

class IndexController extends Controller
{
    public function index(){

    	$get=UserDetail::all();
    	$post=BlogPost::all();

    	return view('blog.home',compact('get','post'));
    }

   
}
