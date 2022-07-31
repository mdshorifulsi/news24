<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    
    public function index(){


    	$category=Category::get();

    	return view('admin.category.index',compact('category'));
    }

    public function create(){



    	return view('admin.category.create');
    }


    public function store(Request $request){


    	$validatedData=$request->validate([

        'name' => 'required|max:300|min:2',
        'image' => 'required',
        ]);



    	$category=new Category;
    	$category->name=$request->name;
    	$category->slug=str_slug($request->name);

    	if($request->hasFile('image')){

    		$file=$request->file('image');
    		$name=rand(11111,99999).'.'.$file->getClientOriginalExtension();

    		$category->image=$request->file('image')->move("storage/images/category",$name);	

    	}

    	$category->save();
		Toastr::success('Tag successfully Saved:','success');
    	return redirect()->back();
    	
    	



    }


    public function edit($id){

    	$category=Category::find($id);

    	return view('admin.category.edit',compact('category'));

    }


    public function update(Request $request,$id){

    	$category=Category::find($id);

    	$category->name=$request->name;
    	$image=$category->image;
    	

    	if($request->hasFile('image')){

    		$file=$request->file('image');
    		$name=rand(11111,99999).'.'.$file->getClientOriginalExtension();

    		$category->image=$request->file('image')->move("storage/images/category",$name);	

    	}

    	$category->save();
    	unlink($image);
		Toastr::success('category Update successfully !! :','success');
    	return redirect()->route('admin.all.category');



    }


    public function destroy($id){

    	$category=Category::find($id);
    	$image=$category->image;



        if(!is_null($category)){
            $category->delete();

        }



			unlink($image);

    		Toastr::success('category delete Success !!:','success');
    	return redirect()->route('admin.all.category');

    }



}
