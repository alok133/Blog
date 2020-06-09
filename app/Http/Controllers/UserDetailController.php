<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetail;

class UserDetailController extends Controller
{
    public function addDetails(Request $request){

    	if($request->isMethod('post')){

    		$data=$request->all();

    		if($request->hasfile('image')){

    			$file=$request->file('image');
    			$filename='image'.time().'.'.$request->image->extension();
    			$destination=storage_path('../public/upload');
    			$file->move($destination,$filename);
    			$path="/".$filename;
    		}

    		$detail=new UserDetail;

    		$detail->username=$data['username'];
    		$detail->introduction=$data['introduction'];
    		$detail->image=$path;

    		$detail->save();

    	}

    	return view('admin.profile.add_profile');
    }

    public function viewDetails(){

        $view=UserDetail::all();

        return view('admin.profile.view_profile',compact('view'));
    }

    public function editDetails(Request $request,$id=null){

        if($request->isMethod('post')){

            $data=$request->all();

            if($request->hasfile('image')){

                $file=$request->file('image');
                $filename='image'.time().'.'.$request->image->extension();
                $destination=storage_path('../public/upload');
                $file->move($destination,$filename);
                $path="/".$filename;
            }
            else{

                $path=$data['current_image'];
            }

            $edit=UserDetail::find($id);

            $edit->username=$data['username'];
            $edit->introduction=$data['introduction'];
            $edit->image=$path;

            $edit->update();

            return redirect('/viewProfile');
        }

        $data=UserDetail::where('id',$id)->first();

        return view('admin.profile.edit_details',compact('data'));
    }


    public function deleteDetails($id=null){

        $del=UserDetail::find($id)->delete();

        return redirect()->back();
    }
}
