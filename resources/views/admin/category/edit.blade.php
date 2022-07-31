@extends('backend.admin_layouts')
@section('title','Edit Category')
@section('admin_content')
 
 <div id="page-wrapper">

    
 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <p class="alert-success">
                           
                                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                                     <form role="form" action="{{route('admin.update.category',$category->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf


                                        <div class="form-group">
                                            <label>Category name</label>
                                            <input class="form-control" name="name" value="{{$category->name}}">
                                          
                                        </div>

                                            <div class="form-group">
                                            <label>Product image</label>
                                            <input type="file" name="image">

                                              <img src="{{URL::to($category->image)}}"style="width: 150px;height: 100px;">
                                            <input type="hidden" name="old_image" value="{{$category->image}}">

                                        </div>


                                        

                     
                                       


                                       
                                        <button type="submit" class="btn btn-danger">Save</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
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