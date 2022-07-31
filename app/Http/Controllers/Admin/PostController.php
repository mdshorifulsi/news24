<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Post;
use App\Category;
use App\Tag;


class PostController extends Controller
{
    
    public function index(){

    	$post=Post::latest()->get();

    	return view('admin.post.index',compact('post'));


    }



    public function create(){


    	$category=Category::get();
        $tags=Tag::get();
    	return view('admin.post.create',compact('category','tags'));
    }


    public function store(Request $request){


    	$posts=new Post;

    	$posts->title=$request->title;
    	$posts->user_id=Auth::id();

    	$posts->slug=str_slug($request->title);
    	$posts->image_title=$request->image_title;
    	$posts->body=$request->body;
    	$posts->status=$request->status;
    	$posts->is_approved=true;
    	




    		
    	if($request->hasFile('image')){

    		$file=$request->file('image');
    		$name=rand(11111,99999).'.'.$file->getClientOriginalExtension();

    		$posts->image=$request->file('image')->move("storage/images",$name);	

    	}




        $posts->save();

        $posts->categories()->attach($request->category);
        $posts->tags()->attach($request->tags);

       Toastr::success('Post successfully Saved:','success');
        return redirect()->back();


    }


    public function edit($id){

        $post=Post::find($id);
        

        return view('admin.post.edit',compact('post'));


    }


    public function update(Request $request,$id){

        $post=Post::find($id);



        $post->title=$request->title;
        $post->image_title=$request->image_title;
        $post->body=$request->body;
        $post->status=$request->status;
        $post->is_approved=true;
        




            
        if($request->hasFile('image')){

            $file=$request->file('image');
            $name=rand(11111,99999).'.'.$file->getClientOriginalExtension();

            $post->image=$request->file('image')->move("storage/images",$name);    

        }




        $post->save();

        $post->categories()->attach($request->category);
        $post->tags()->attach($request->tags);

       Toastr::success('Post successfully Saved:','success');
        return redirect()->route('admin.all.post');




    }


    

    public function destroy($id){

        $post=Post::find($id);
        $image=$post->image;
        $post->categories()->detach();
        $post->tags()->detach();
            if(!is_null($post)){
                $post->delete();

                    }

        unlink($image);
        Toastr::success('Post Delete successfully Saved:','success');
         return redirect()->route('admin.all.post');


    }



    public function show($id){


        $post=Post::find($id);
            return view('admin.post.show',compact('post'));

    }


    public function pending(){


    $post=Post::where('is_approved',false)->get();
    return view('admin.post.pending',compact('post'));

    }


    public function approve($id){
            


             $post=Post::where('id',$id)
            ->update(['is_approved'=>1]);

        return redirect()->route('admin.all.post');

    }

}
