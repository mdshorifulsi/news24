@extends('backend.admin_layouts')
@section('title','Add Post')
@section('admin_content')
 




<div id="page-wrapper">

    
 <div class="row">
              <!--   <div class="col-lg-12">
                    <h1 class="page-header">Post</h1>
                </div> -->
                <!-- /.col-lg-12 -->
                <br>
                
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Add new Post</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-7">

                                    <p class="alert-success">
                                    	<?php
                            $msg=Session::get('msg');
                        if($msg){
                            echo $msg;
                            Session::put('msg',null);
                        }else{

                        }

                        ?>
                        </p>

                                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                                     <form role="form" action="{{route('admin.store.post')}}" method="post" enctype="multipart/form-data">
                                        @csrf


                                        <div class="form-group">
                                            <label>Post Title</label>
                                            <input class="form-control" name="title">
                                          
                                        </div>

                                          <div class="form-group">
                                            <label>Post Category</label>
                                            <select class="form-control" name="category[]">
                                                <option> Select Category</option>
                                             
                                               
		
                                                @foreach($category as $category)
                                                
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                              @endforeach
                                            </select>
                                        </div>


                                          <div class="form-group">
                                            <label>Post Tag</label>
                                            <select class="form-control" name="tags[]">
                                                <option>Select Tags</option>
                                               
                                               
		
                                                @foreach($tags as $tag)
                                                
                                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                                              @endforeach
                                            </select>
                                        </div>





                                   

                                        

                                        <div class="form-group">
                                            <label>Feture image</label>
                                            <input type="file" name="image">
                                        </div>

                                         <div class="form-group">
                                            <label>Image Title</label>
                                            <input class="form-control" name="image_title">
                                          
                                        </div>


                                        <div class="form-group">
                                            <label>Post Body</label>
                                            <textarea class="form-control" rows="3" name="body"></textarea>
                                        </div>

                                        

                                        <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="status" value="1">Publish
                                    </label>
                                </div>


                                       
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>


                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

        
        </div>
  

@endsection