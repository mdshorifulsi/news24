<?php

namespace App\Http\Controllers\Author;

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


    	$post=Auth::user()->posts()->latest()->get();

    	return view('author.post.index',compact('post'));


    }


    public function create(){


    	$category=Category::get();
        $tags=Tag::get();
    	return view('author.post.create',compact('category','tags'));
    }

    public function store(Request $request){



    	$post=new Post;

    	$post->title=$request->title;
    	$post->user_id=Auth::id();

    	$post->slug=str_slug($request->title);
    	$post->image_title=$request->image_title;
    	$post->body=$request->body;
    	$post->status=$request->status;
    	$post->is_approved=false;
    	




    		
    	if($request->hasFile('image')){

    		$file=$request->file('image');
    		$name=rand(11111,99999).'.'.$file->getClientOriginalExtension();

    		$post->image=$request->file('image')->move("storage/images",$name);	

    	}




        $post->save();

        $post->categories()->attach($request->category);
        $post->tags()->attach($request->tags);

         Toastr::success('Post successfully Saved:','success');
        return redirect()->route('author.all.post');
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
         return redirect()->route('author.all.post');


    }
    
}
