@extends('backend.admin_layouts')
@section('title','All Post')
@section('admin_content')

<div id="page-wrapper">


<div class="row">
     <button type="button"  class="btn btn-outline btn-danger" ><a href="{{route('author.add.post')}}"> + Add New Post </a></button>
                       <br>
                       <br>
                <div class="col-lg-12">
                    <div class="panel panel-default">


                        <div class="panel-heading">
                        ALl Post -{{$post->count()}}
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                      
                        </p>
         <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>SL no</th>
               
                    <th>Post Title</th>
                    <th>Post Body</th>
                    <!-- <th>Category Name</th> -->
                    <!-- <th>Image</th> -->
                    <th>Author</th>
                    <th>View Count</th>
                    <th>Approve</th>
                    <th>Status</th>
                    <th>Action</th>

                  
                    
                </tr>
            </thead>
            <tbody>
                @foreach($post as $row)


                <tr class="odd gradeX">
                    <td>{{$row->id}}</td>
                    <td>{{str_limit($row->title,5)}}</td>
                    <td>{{str_limit($row->body,10)}}</td>
                    <td>{{$row->user->name}}</td>
                    <td>{{$row->count()}}</td>

                    <td>
                    	@if($row->is_approved==true)
                    	<span class="badge bg-blue">Approved</span>
                    	@else
                    	<span class="badge bg-pink">Pending</span>
                    	@endif
                    </td>

                    <td>
                    	@if($row->status==true)
                    	<span class="badge bg-blue">Published</span>
                    	@else
                    	<span class="badge bg-pink">Pending</span>
                    	@endif
                    </td>

               
                    
                        
                    <td>

   

                
                <a class="btn btn-info" title="show post" href="">

                    <i class="glyphicon glyphicon-eye-open icon-white"></i>
                 
                </a>

                  <a class="btn btn-warning" title="edit post" href="">

                    <i class="glyphicon glyphicon-edit icon-white"></i>
                 
                </a>

                      <button class="btn btn-danger" type="button" onclick="deletetag({{ $row->id }})">
                                         <i class="glyphicon glyphicon-trash icon-white"></i>

                                    </button>

                                    <form id="delete-form-{{$row->id}}" action="{{route('author.delete.post',$row->id)}}"  method="PUT" style="display: none ; " >
                                        @csrf
                                        @method('DELETE')
                                        


                                    </form>


                </td>

                    
                    
                </tr>

                @endforeach
                
            </tbody>
                            </table>
                            <!-- /.table-responsive -->
                      
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
@endsection