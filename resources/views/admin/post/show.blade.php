@extends('backend.admin_layouts')
@section('title','Show Post')
@section('admin_content')

<div id="page-wrapper">


<div class="row">
    <br>
        <br>
   

    <a href="{{route('admin.all.post')}}" class="btn btn-danger waves-effect">Back...</a>
 
    

<br>
<br>
    <div class="col-lg-8">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                           <h4>{{$post->title}}</h4>
                            posted by: {{$post->user->name}}        
                           
                             



                        </div>
                        <div class="panel-body">
                            <p>{!!$post->body!!}</p>
                        </div>
                        <div class="panel-footer">
                             On: {{$post->created_at->toFormattedDateString()}}

                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>

                <div class="col-lg-4">

                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Category Name
                        </div>

                        <div class="panel-body">
                            
                        @foreach($post->categories as $category)

                        <span>{{$category->name}}</span>
                        @endforeach

                        </div>

                         <div class="panel-heading">
                            Tag Name
                        </div>

                        <div class="panel-body">

                             @foreach($post->tags as $tag)

                        <span>{{$tag->name}}</span>
                        @endforeach
                            
                        </div>

                        <div class="panel-heading">
                            Feture Image
                        </div>
                        <div class="panel-body">
                            <td><img src="{{ asset($post->image)}}"style="width:200px;height:100px;"></td>
                        </div>
                        <!-- <div class="panel-footer">
                            Panel Footer
                        </div> -->
                    </div>
                    <!-- /.col-lg-4 -->
                </div>

    
                
            </div>
@endsection