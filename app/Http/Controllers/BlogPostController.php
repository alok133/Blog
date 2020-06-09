<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\UserDetail;

class BlogPostController extends Controller
{

    public function showBlog($id){

        $show=BlogPost::find($id);
        $data=UserDetail::get();

        return view('blog.blog_post',compact('show','data'));
    }
    public function addBlog(Request $request){

    	if($request->isMethod('post')){

    		$data=$request->all();

    		if($request->hasfile('post_profile_image')){

    			$file=$request->file('post_profile_image');
    			$filename='post_profile_image'.time().'.'.$request->post_profile_image->extension();
    			$destination=storage_path('../public/upload');
    			$file->move($destination,$filename);
    			$path="/".$filename;
    		}

    		if($request->hasfile('image')){

    			$file=$request->file('image');
    			$filename='image'.time().'.'.$request->image->extension();
    			$destination=storage_path('../public/upload');
    			$file->move($destination,$filename);
    			$paths="/".$filename;
    		}

            

    		$submit=new BlogPost;
    		
    		$submit->heading=$data['heading'];
    		$submit->content=$data['content'];
    		$submit->image=$path;
    		$submit->post_profile_image=$paths;
            $submit->heading2=$data['heading2'];
            $submit->content2=$data['content2'];
            $submit->content3=$data['content3'];
            $submit->heading3=$data['heading3'];
            $submit->content4=$data['content4'];
            $submit->heading4=$data['heading4'];
    		
    		$submit->save();

    	}

    	return view('admin.post_blog.add_blog');
    }

    public function viewBlog(){

        $get=BlogPost::all();

        return view('admin.post_blog.view_blog',compact('get'));
    }

    public function editBlog(Request $request,$id=null){

        if($request->isMethod('post')){

            $data=$request->all();

            if($request->hasfile('post_profile_image')){

                $file=$request->file('post_profile_image');
                $filename='post_profile_image'.time().'.'.$request->post_profile_image->extension();
                $destination=storage_path('../public/upload/');
                $file->move($destination,$filename);
                $path="/".$filename;
            }

            else{

                $path=$data['post_profile_image'];
            }

            if($request->hasfile('image')){

                $file=$request->file('image');
                $filename='image'.time().'.'.$request->image->extension();
                $destination=storage_path('../public/upload/');
                $file->move($destination,$filename);
                $paths="/".$filename;
            }

            else{

                $path=$data['image'];
            }

            $get=BlogPost::find($id);

            $get->heading=$data['heading'];
            $get->post_profile_image=$path;
            $get->content=$data['content'];
            $get->image=$paths;
            $get->heading2=$data['heading2'];
            $get->content2=$data['content2'];
            $get->heading3=$data['heading3'];
            $get->content3=$data['content3'];
            $get->heading4=$data['heading4'];
            $get->content4=$data['content4'];

            $get->update();

            return redirect('/viewBlog');


        }

        $data=BlogPost::where('id',$id)->first();

        return view('admin.post_blog.edit_blog',compact('data'));
    }

    public function deleteBlog($id=null){

        $del=BlogPost::find($id)->delete();
        
        return redirect()->back();
    }
}
