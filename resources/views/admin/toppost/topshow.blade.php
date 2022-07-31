@extends('backend.admin_layouts')
@section('title','Show Top Post')
@section('admin_content')

<div id="page-wrapper">


<div class="row">
    <br>
        <br>
   

    <a href="{{route('admin.all.toppost')}}" class="btn btn-danger waves-effect">Back...</a>
 
    

<br>
<br>
    <div class="col-lg-8">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                           <h4>{{$topshow->title}}</h4>
                            posted by: {{$topshow->user->name}}        
                           
                             



                        </div>
                        <div class="panel-body">
                            <p>{!!$topshow->body!!}</p>
                        </div>
                        <div class="panel-footer">
                             On: {{$topshow->created_at->toFormattedDateString()}}

                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>

                <div class="col-lg-4">

                	<div class="panel panel-red">
                	  <div class="panel-heading">
                            Feture Image
                        </div>
                        <div class="panel-body">
                            <td><img src="{{ asset($topshow->image)}}"style="width:300px;height:200px;"></td>
                        </div>
                    </div>

                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Category Name
                        </div>

                        <div class="panel-body">
                            
                       {{--  @foreach($topshow->categories as $category)
topshow
                        <span>{{$category->name}}</span>
                        @endforeach --}}
                        {{$topshow->category->name}}

                        </div>

                         <div class="panel-heading">
                            Tag Name
                        </div>

                        <div class="panel-body">

                        	
                        	{{$topshow->tag->name}}



                             {{-- @foreach($topshow->tags as $tag)

                        <span>{{$tag->name}}</span>
                        @endforeach --}}



                            
                        </div>

                        
                        <!-- <div class="panel-footer">
                            Panel Footer
                        </div> -->
                    </div>
                    <!-- /.col-lg-4 -->
                </div>

    
                
            </div>
@endsection