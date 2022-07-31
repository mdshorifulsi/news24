<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use Brian2694\Toastr\Facades\Toastr;

class TagController extends Controller
{

	public function index(){

		$tag=Tag::get();

		return view('admin.tag.index',compact('tag'));

	}


    public function create(){

    	return view('admin.tag.create');

    }


    public function store(Request $request){



    	$validatedData=$request->validate([

        'name' => 'required|max:300|min:2',
        ]);


    	$tag=new Tag;
    	$tag->name=$request->name;
    	$tag->slug=str_slug($request->name);
    	$tag->save();
		Toastr::success('Tag successfully Saved:','success');
    	return redirect()->back();


    }


    public function destroy($id){

    	$tag=Tag::find($id);
    	$tag->delete();

    		Toastr::success('Tag delete Saved:','success');
    	return redirect()->route('admin.all.tag');

    }

}
