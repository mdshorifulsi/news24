<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Toppost;
use App\Category;
use App\Tag;


class ToppostController extends Controller
{
    public function index(){

    	$toppost=Toppost::get();
    	return view('admin.toppost.index',compact('toppost'));
    }

    public function create(){

    	$category=Category::get();
        $tags=Tag::get();
    	return view('admin.toppost.create',compact('category','tags'));

    	
    }


    public function store(Request $request){


    	$topposts=new Toppost;

    	$topposts->title=$request->title;
    	$topposts->user_id=Auth::id();
    	$topposts->tag_id=$request->tag_id;
    	$topposts->category_id=$request->category_id;

    	$topposts->slug=str_slug($request->title);
    	$topposts->image_title=$request->image_title;
    	$topposts->body=$request->body;
    	$topposts->status=$request->status;
    	$topposts->is_approved=true;
    	




    		
    	if($request->hasFile('image')){

    		$file=$request->file('image');
    		$name=rand(11111,99999).'.'.$file->getClientOriginalExtension();

    		$topposts->image=$request->file('image')->move("storage/images",$name);	

    	}




        $topposts->save();

        
       Toastr::success('Top Post successfully Saved:','success');
        return redirect()->back();


    }


    public function destroy($id){

    	  $toppost=Toppost::find($id);
        $image=$toppost->image;

       
            if(!is_null($toppost)){
                $toppost->delete();

                    }

        unlink($image);
        Toastr::success('Post Delete successfully Saved:','success');
         return redirect()->route('admin.all.toppost');

    }

    public function topshow($id){

        $topshow=Toppost::find($id);
            return view('admin.toppost.topshow',compact('topshow'));

    }
}
