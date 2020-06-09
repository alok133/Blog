<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;


class AdminController extends Controller
{
    public function dashboard(){

    	return view('admin.dashboard');
    }

    public function admin(Request $request){

    	if($request->isMethod('post')){

    		$data=$request->input();

    		if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]));

    		return redirect('/dashboard');
    	}

    	return view('admin.login');
    }

    public function logout(){

    	Session::flush();
    	return redirect('/admin');
    }

    
}
