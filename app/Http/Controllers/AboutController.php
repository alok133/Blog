<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetail;
use App\About;

class AboutController extends Controller
{
    public function about(){

        $post=UserDetail::all();
        $get=About::all();

        return view('blog.about',compact('post','get'));
    }

    public function addAbout(Request $request){

    	if($request->isMethod('post')){

    		$data=$request->all();

    		if($request->hasfile('image')){

    			$file=$request->file('image');
    			$filename='image'.time().'.'.$request->image->extension();
    			$destination=storage_path('../public/upload/');
    			$file->move($destination,$filename);
    			$path="/".$filename;
    		}

    		if($request->hasfile('image_project')){

    			$file=$request->file('image_project');
    			$filename='image_project'.time().'.'.$request->image_project->extension();
    			$destination=storage_path('../public/upload/');
    			$file->move($destination,$filename);
    			$paths="/".$filename;
    		}

    		$about=new About;

    		$about->about_me=$data['about_me'];
    		$about->about_blog=$data['about_blog'];
    		$about->skill_experience=$data['skill_experience'];
    		$about->side_projects=$data['side_projects'];
    		$about->image=$path;
    		$about->image_project=$paths;
    		
    		$about->save();
    	}

    	return view('admin.about.add_about');
    }

    public function viewAbout(){

    	$showAbout=About::all();

    	return view('admin.about.view_about',compact('showAbout'));
    }

    public function editAbout(Request $request,$id=null){

        if($request->isMethod('post')){

            $data=$request->all();

            if($request->hasfile('image')){

                $file=$request->file('image');
                $filename='image'.time().'.'.$request->image->extension();
                $destination=storage_path('../public/upload/');
                $file->move($destination,$filename);
                $path="/".$filename;
            }
            else{

                $path=$data['current_image'];
            }

            if($request->hasfile('image_project')){

                $file=$request->file('image_project');
                $filename='image_project'.time().'.'.$request->image_project->extension();
                $destination=storage_path('../public/upload/');
                $file->move($destination,$filename);
                $paths="/".$filename;
            }

            else{
                $paths=$data['current_project_image'];
            }

            $get=About::find($id);

            $get->about_me=$data['about_me'];
            $get->about_blog=$data['about_blog'];
            $get->skill_experience=$data['skill_experience'];
            $get->side_projects=$data['side_projects'];
            $get->image=$path;
            $get->image_project=$paths;

            $get->update();

            return redirect('/viewAbout');

        }

        $data=About::where('id',$id)->first();

        return view('admin.about.edit_about',compact('data'));

    }

    public function delete($id=null){

        $del=About::where('id',$id)->delete();

        return redirect()->back();
    }
}
