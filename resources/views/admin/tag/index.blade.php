@extends('backend.admin_layouts')
@section('title','All Tag')
@section('admin_content')

<div id="page-wrapper">


<div class="row">
    <br>
    <button type="button"  class="btn btn-outline btn-danger" ><a href="{{route('admin.add.tag')}}"> + Add New Tag </a> </button>
        <br>
        <br>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        ALl Tag -{{$tag->count()}}
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <p class="alert-success">

                                 
                             



                        
                        </p>
                             <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL no</th>
                                   
                                        <th>Tag Name</th>
                                       
                                      
                                        <th>Action</th>

                                      
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tag as $row)


                                    <tr class="odd gradeX">
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}}</td>

                                   
                                        
                                            
                                        <td>

                       

                                    
                                    <a class="btn btn-warning" href="">

                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                     
                                    </a>

                                    

                                    <button class="btn btn-danger" type="button" onclick="deletetag({{ $row->id }})">
                                    	 <i class="glyphicon glyphicon-trash icon-white"></i>

                                    </button>

                                    <form id="delete-form-{{$row->id}}" action="{{route('admin.delete.tag',$row->id)}}"  method="PUT" style="display: none ; " >
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