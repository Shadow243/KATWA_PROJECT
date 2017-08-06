@extends('layouts.default')

@section('title') Blog @endsection

@section('content')

    @include('pages.partials.welcome-blog')

    <section class="main-content blog-posts blog-grid have-sidebar">
        <div class="container">
            <div class="blog-title">
                <h1 class="bold">News &amp; Blog</h1>
            </div>

            <div class="post-content">

                <div class="post-wrap clearfix">
                    @foreach($allPosts as $postall)
                        <article class="post flat-hover-zoom">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img src="{{ $postall->image }}" alt="image" style="width: 370px; height: 247;">
                                </div>
                            </div>

                            <div class="date-post">
                                <span class="numb">{{ \Carbon\Carbon::parse($postall->created_at)->format('d') }}</span>
                                <span>{{ \Carbon\Carbon::parse($postall->created_at)->format('m') }}</span>
                            </div>

                            <div class="content-post">
                                <h2 class="title-post">
                                    <a href="#">{{ $postall->title }}</a>
                                </h2>

                                <div class="entry-content">
                                    <p>{!! $postall->body !!}.</p>
                                </div><!-- /entry-post -->

                                <div class="entry-meta style1">
                                    <p>Posted at:<span><a href="#"> {{ $postall->created_at->diffForHumans() }}</a></span></p>
                                    <p>Updated at:<span><a href="#"> {{ $postall->updated_at->diffForHumans() }},</a></span><span><a href="{{ url('/') }}"> {{ Voyager::setting('title') }}</a></span></p>
                                </div>
                            </div><!-- /content-post -->
                        </article><!-- /post -->
                @endforeach<!-- /post -->

                </div><!-- /post-wrap -->

                <div class="blog-pagination">
                    <ul class="flat-pagination">
                        {{--<li><a class="active" href="#">1</a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">3</a></li>--}}
                        {{--<li class="next">--}}
                            {{--<a href="#">Next</a>--}}
                        {{--</li>--}}
                        {{ $allPosts->render() }}
                    </ul><!-- /.flat-pagination -->
                </div>
                {{--{{ $allPosts->render() }}--}}
            </div>

            <div class="sidebar">
                <div class="widget widget-popular-news">
                    <h5 class="widget-title">Recent posts</h5>
                    <ul class="popular-news clearfix">
                        @foreach($recentsposts as $recentspost)
                        <li>
                            <div class="thumb">
                                <img src="{{ $recentspost->image }}" alt="image" style="width: 120px;">
                            </div>
                            <div class="text">
                                <a href="#">{!! $recentspost->body !!}</a>
                                <p>{{ $recentspost->created_at->diffForHumans() }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul><!-- /popular-news clearfix -->
                </div><!-- /widget widget-popular-news -->

                <div class="widget widget-categories">
                    <h5 class="widget-title">Categories</h5>
                    <ul class="unstyled">
                        @foreach($categories as $cat)
                        <li>
                            <a href="#">{{ $cat->name }}</a>
                            <span class="numb-right">({{ $cat->order }})</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="widget widget-teacher">
                    <h5 class="widget-title">Options In</h5>
                    <div class="text-teacher">
                        <p>Here above is the list of all option we have at katwa high school</p>
                    </div>
                    <ul class="teacher-news clearfix">
                        @foreach($options as $option)
                        <li>
                            @isset($option->image)
                                <div class="thumb">
                                    <img src="{{ asset('storage/'.$option->image) }}" class="img img-rounded" alt="image">
                                </div>
                            @endisset
                            <div class="text">
                                <a href="#">{{ $option->name_option }}</a>
                                <p>{!! $option->detail_option !!}</p>
                            </div>
                            <ul class="flat-socials">
                                <li class="facebook">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="linkedin">
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li class="youtube">
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </li>
                            </ul>
                        </li>
                        @endforeach
                    </ul><!-- /popular-news clearfix -->
                </div>

                <div class="widget widget-featured-courses">
                    <h5 class="widget-title">Featured courses</h5>
                    <ul class="featured-courses-news clearfix">
                        <li>
                            <div class="thumb">
                                <img src="images/flickr/7.jpg" alt="image">
                            </div>
                            <div class="text">
                                <a href="#">Swift Programming for Beginners</a>
                                <p>Sarah Johnson</p>
                            </div>
                            <div class="review-rating">
                                <div class="flat-money">
                                    <p>$170</p>
                                </div>
                                <ul class="flat-reviews">
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="images/flickr/8.jpg" alt="image">
                            </div>
                            <div class="text">
                                <a href="#">Swift Programming for Beginners</a>
                                <p>Sarah Johnson</p>
                            </div>
                            <div class="review-rating">
                                <div class="flat-money">
                                    <p>$170</p>
                                </div>
                                <ul class="flat-reviews">
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="images/flickr/9.jpg" alt="image">
                            </div>
                            <div class="text">
                                <a href="#">Swift Programming for Beginners</a>
                                <p>Sarah Johnson</p>
                            </div>
                            <div class="review-rating">
                                <div class="flat-money">
                                    <p>$170</p>
                                </div>
                                <ul class="flat-reviews">
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul><!-- /popular-news clearfix -->
                </div><!-- /widget widget-popular-news -->
            </div><!-- /sidebar -->
        </div><!-- /row -->
    </section>

@endsection