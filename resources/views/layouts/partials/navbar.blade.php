        <!-- Header --> 
        <header id="header" class="header clearfix"> 
            <div class="container">
                <div class="header-wrap clearfix">
                    <div id="logo" class="logo">
                        <a href="{{ url('/') }}" rel="home">
                            <img src="{{ asset('storage/'.Voyager::setting('logo')) }}" alt="image">
                            {{--http://localhost:8000/storage/settings/August2017/e5ubBvFOKOKaeKzMBgDg.png--}}
                        </a>
                    </div><!-- /.logo -->            
                    <div class="nav-wrap">
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu"> 
                                <li class="has-sub">
                                    <a class="active" href="{{ url('/')}}">Home</a>
                                    {{--<ul class="submenu">--}}
                                        {{--<li><a href="index-onepage.html">Home OnePage</a></li>--}}
                                    {{--</ul>--}}
                                </li>
                                <li class="has-sub"><a href="courses-grid.html">Courses</a>
                                    <ul class="submenu"> 
                                        <li><a href="courses.html">Courses grid</a></li>
                                        <li><a href="courses-grid-sidebar.html">Courses grid sidebar</a></li> 
                                        <li><a href="courses-list-sidebar.html">Courses list sidebar</a></li>   
                                        <li><a href="courses-single.html">Courses single</a></li>   
                                    </ul><!-- /.submenu -->
                                </li> 

                                <li><a href="about-us.html">About</a>
                                </li>

                                <li><a href="team.html">Team</a>              
                                </li>                               

                                <li><a href="{{ route('inska::blog') }}">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-single.html">Blog single</a></li>
                                    </ul><!-- /.submenu -->
                                </li>

                                <li><a href="contact.html">Contact</a>
                                </li>
                            </ul><!-- /.menu -->
                        </nav><!-- /.mainnav -->    
                    </div><!-- /.nav-wrap -->

                    <div id="s" class="show-search">
                        <a href="#"><i class="fa fa-search"></i></a>         
                    </div><!-- /.show-search -->
                    
                    <div class="submenu top-search">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="search" class="search-field" placeholder="Search …">
                                <input type="submit" class="search-submit">
                            </form>
                        </div>
                    </div>
                </div><!-- /.header-inner --> 
            </div>
        </header><!-- /.header -->