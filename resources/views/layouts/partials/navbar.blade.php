        <!-- Header --> 
        <header id="header" class="header clearfix"> 
            <div class="container">
                <div class="header-wrap clearfix">
                    <div id="logo" class="logo">
                        <a href="{{ url('/') }}" rel="home">
                            <img src="{{ asset('storage/'.Voyager::setting('logo')) }}" alt="image">
                        </a>
                    </div><!-- /.logo -->            
                    <div class="nav-wrap">
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu"> 
                                <li class="has-sub">
                                    <a {{ App\Helpers\Helpers::setActive('home') }} href="{{ url('/') }}">Home</a>
                                    {{--<ul class="submenu">--}}
                                        {{--<li><a href="index-onepage.html">Home OnePage</a></li>--}}
                                    {{--</ul>--}}
                                </li>
                                <li class="has-sub"><a href="#">Registration</a>
                                    <ul class="submenu"> 
                                        <li><a href="#">Reinscription</a></li>
                                        <li><a href="#">Inscription</a></li>
                                    </ul><!-- /.submenu -->
                                </li> 

                                <li><a {{ App\Helpers\Helpers::setActive('inska::about') }} href="#">About</a>
                                    <ul class="submenu">
                                        <li><a href="#">Programms</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">Our library</a></li>
                                        <li><a href="{{ route('inska::about') }}">Historical</a></li>
                                    </ul>
                                    <!-- /.submenu -->
                                </li>

                                <li><a href="team.html">Team</a>              
                                </li>                               

                                <li><a {{ App\Helpers\Helpers::setActive('inska::blog') }} href="{{ route('inska::blog') }}">Blog</a></li>

                                <li><a {{ App\Helpers\Helpers::setActive('inska::contact') }} href="{{ route('inska::contact') }}">Contact</a>
                                </li>
                            </ul><!-- /.menu -->
                        </nav><!-- /.mainnav -->    
                    </div><!-- /.nav-wrap -->

                    <div id="s" class="show-search">
                        <a href="#"><i class="fa fa-search"></i></a>         
                    </div><!-- /.show-search -->
                    
                    <div class="submenu top-search">
                        <div class="widget widget_search">
                            <form class="search-form" method="GET" action="{{ url('/searchPost') }}" >
{{--                                {{ csrf_field() }}--}}
                                <input type="search" name="keyWord" class="search-field" placeholder="Search …">
                                <input type="submit" class="search-submit">
                            </form>
                        </div>
                    </div>
                </div><!-- /.header-inner --> 
            </div>
        </header><!-- /.header -->