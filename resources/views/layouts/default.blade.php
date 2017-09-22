<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->


@section('styles')

@include('layouts.partials.html-header')

@show
<body class="header-sticky">
    <div class="boxed">

        <div class="windows8">
            <div class="preload-inner">
                <div class="wBall" id="wBall_1">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_2">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_3">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_4">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_5">
                    <div class="wInnerBall"></div>
                </div>
            </div>
        </div>
        <div class="header-inner-pages">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-information">
                                <p>Welcome to {{ Voyager::setting('title') }}</p>
                            </div>
                            <div class="right-bar">
                                <ul class="flat-information">
                                    <li class="phone">
                                        <a href="+61383766284" title="Phone number">{{ Voyager::setting('school_contact_phone') }}</a>
                                    </li>
                                    <li class="email">
                                        <a href="mailto:AlitStudios@gmail.com" title="Email address"> {{ Voyager::setting('school_contact_email') }}</a>
                                    </li>
                                </ul>
                                <ul class="list-inline links-list pull-right">
                                    <li class="dropdown language-selector">
                                        Language: &nbsp;
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true" aria-expanded="false">
                                            <img src="{{ asset('assets/images/flags/flag-uk.png') }}" width="16" height="16">
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/flags/flag-de.png') }}" width="16" height="16"> <span>Deutsch</span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/flags/flag-uk.png') }}" width="16" height="16"> <span>English</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/flags/flag-fr.png') }}" width="16" height="16"> <span>François</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/flags/flag-al.png') }}" width="16" height="16"> <span>Shqip</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/flags/flag-es.png') }}" width="16" height="16"> <span>Español</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    {{--<li class="sep"></li> <li> --}}
                                        {{--<a href="#" data-toggle="chat" data-collapse-sidebar="1"> <i class="entypo-chat"></i>--}}
                                            {{--Chat--}}
                                            {{--<span class="badge badge-success chat-notifications-badge">3</span> </a> --}}
                                    {{--</li> --}}
                                    {{--<li class="sep"></li> <li> --}}
                                        {{--<a href="http://demo.neontheme.com/extra/login/">--}}
                                            {{--Log Out <i class="entypo-logout right"></i> </a> --}}
                                    {{--</li> --}}
                                </ul>
                                <ul class="flat-socials">
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div><!-- /.header-inner-pages -->


         @include('layouts.partials.navbar')

@yield('content')

@include('layouts.partials.footer')

<a class="go-top">
    <i class="fa fa-chevron-up"></i>
</a>

<!-- Bottom -->
<div class="bottom">
    <div class="container">
        <ul class="flat-socials-v1">
            <li class="facebook">
                <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="twitter">
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="vimeo">
                <a href="#"><i class="fa fa-vimeo"></i></a>
            </li>
            <li class="rss">
                <a href="#"><i class="fa fa-rss"></i></a>
            </li>
        </ul>    
        <div class="row">
            <div class="container-bottom">
                <div class="copyright"> 
                    <p>Copyright © 2017. Designer by <span><a href="#">StyNet</a></span>. All Rights Reserved.</p>
                </div>
            </div><!-- /.container-bottom -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

</div>
@section('scripts')

@include('layouts.partials.scripts')

@show
</body>

</html>
