<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\toppost;
use App\Tag;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $category=Category::latest()->get();
        $post=Post::latest()->take(8)->get();
        // $toppost=Toppost::latest()->take(3)->get();
        // $tag=Tag::latest()->get();
        return view('homepage',compact('post'));
    }


    public function category_post($id){

    $category_post=post::where('id',$id)->get();
    
    return view('category_post',compact('category_post'));




}



public function topdetails($id){

        $topdetails=Toppost::find($id);
        return view('topdetails',compact('topdetails'));


}


public function details($id){

     $details=Post::find($id);
        return view('details',compact('details'));


}






}



