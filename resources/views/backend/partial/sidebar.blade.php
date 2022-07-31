            
            
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>

                        



                  

 						



                       @if(Request::is('admin*'))

                       <li class="{{Request::is('admin/dashboard') ? 'active' : ''}}">
                            <a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>

                        </li>


                         <li>
                            <a href="{{route('admin.all.toppost')}}"><i class="fa fa-edit fa-fw"></i>Top post<span class="fa arrow"></span></a>
                        
                            <!-- /.nav-second-level -->
                        </li>


                          <li>
                            <a href="{{route('admin.all.tag')}}"><i class="fa fa-edit fa-fw"></i>Tag<span class="fa arrow"></span></a>
                        
                            <!-- /.nav-second-level -->
                        </li>


                         <li>
                            <a href="{{route('admin.all.category')}}"><i class="fa fa-edit fa-fw"></i>Category<span class="fa arrow"></span></a>
                          
                            <!-- /.nav-second-level -->
                        </li>




                         <li>
                            <a href="{{route('admin.all.post')}}"><i class="fa fa-edit fa-fw"></i>Post<span class="fa arrow"></span></a>
                         
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="{{route('admin.pending.post')}}"><i class="fa fa-edit fa-fw"></i>Pending Post<span class="fa arrow"></span></a>
                         
                            <!-- /.nav-second-level -->
                        </li>



                      





                    






                            <li>

                             <a class="dropdown-item" class="fa fa-dashboard fa-fw" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                    
                        </li>



                       @endif

                       @if(Request::is('author*'))


                       <li class="{{Request::is('author/dashboard') ? 'active' : ''}}">
                            <a href="{{route('author.dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>


                         <li>
                            <a href="{{route('author.all.post')}}"><i class="fa fa-edit fa-fw"></i>Post<span class="fa arrow"></span></a>
                         
                            <!-- /.nav-second-level -->
                        </li>



                           


                            <li>

                             <a class="dropdown-item" class="fa fa-dashboard fa-fw" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                    
                        </li>

                       @endif

                     




                        
                   

                      
                        


                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>