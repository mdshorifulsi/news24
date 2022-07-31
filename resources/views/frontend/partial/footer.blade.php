    <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 single-footer-widget">
                        <h4>Category name</h4>
                        <ul>
                               @php 

                                $category=App\Category::take(4)->get();
                                @endphp
                            @foreach($category as $category)
                            <li><a href="#">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>Tag Name</h4>
                        <ul>
                            @php 

                                $tag=App\Tag::take(4)->get();
                                @endphp
                            @foreach($tag as $tag)
                            <li><a href="#">{{ $tag->name }}</a></li>
                           @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>Features</h4>
                        <ul>
                            @php 

                                $category=App\Category::take(4)->get();
                                @endphp
                            @foreach($category as $category)
                            <li><a href="#">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>Resources</h4>
                        <ul>
                            @php 

                                $category=App\Category::take(4)->get();
                                @endphp
                            @foreach($category as $category)
                            <li><a href="#">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 single-footer-widget">
                        <h4>Instragram Feed</h4>
                        <ul class="instafeed d-flex flex-wrap">
                             
                             @php 

                                $category=App\Category::take(4)->get();
                                @endphp
                            @foreach($category as $category)
                            <img src="{{ asset($category->image)}}" style="width:100px;height:100px;">
                            @endforeach
                        </ul>
                    </div>
                </div>
            
            </div>
        </footer>