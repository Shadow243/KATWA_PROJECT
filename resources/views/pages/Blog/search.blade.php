<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 16/09/2017
 * Time: 17:41
 */
?>
@extends('layouts.default')

@section('title') Search Result @endsection

@section('content')

<div class="page-title parallax parallax4" style="background-position: 50% 88px; background-image: url('{{ asset('storage/'.Voyager::setting('site_background')) }}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h2 class="title">{{ $infoResult }}</h2>
                </div><!-- /.page-title-heading -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Results</li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /page-title parallax -->

<section class="main-content blog-posts style-v1">
    <div class="container">
        <div class="row">
            <div class="col-md-8">


                <div class="blog-title-single">
                    @forelse($posts as $post)
{{--                        {{ dd($post->id) }}--}}
                    {{--<h1 class="bold">Why You Should Read Every Day</h1>--}}
                    <article class="entry clearfix">
                        <div class="entry-border">
                            <div class="main-post">
                                <div class="wrap-img">
                                    <img src="images/blog/4singlev1.png" alt="images">
                                    <h6>NGUYEN TIEN HUY</h6>
                                    <div class="entry-meta">
                                        <span class="date"><a href="#">{{ $post->created_at->diffForHumans() }}</a></span>
                                        <span class="comment"><a href="#">{{ $post->comments->count()." ".str_plural('comment', $post->comments->count()) }}</a></span>
                                        <span class="tag"><a href="#">Web Design, Life Style</a></span>
                                    </div>
                                </div>

                                <div class="feature-post">
                                    <img src="{{ asset($post->image) }}" style="width: 100%; height: 250px;" alt="image">
                                </div><!-- /.feature-post -->
                                <div class="entry-content">
                                    <p>{!! substr($post->body, 0, 300) !!}
                                    </p>
                                </div><!-- /.entry-post -->

                            </div><!-- /.main-post -->
                            <!-- Wrap-share -->
                            <div class="wrap-share">
                                <div class="share-post">
                                    <h4>Share:</h4>
                                    <ul class="flat-socials">
                                        <li class="twitter">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="facebook">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="google">
                                            <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                        </li>
                                    </ul><!-- /flat-socials -->
                                    <a href="#" class="btn btn-link leavecommentLink" style="float: right;">Leave a Comment</a>
                                    <a href="{{ route('inska::blog::single', [$post->slug]) }}" class="btn btn-link" style="float: right;">Read more</a>
                                    <a href="{{ route('inska::like', [$post->id]) }}" class="btn btn-link likelink" style="float: right;"><i class="fa fa-thumbs-o-up"></i><em class="number_likes">{{ $post->likes->count() }}</em>{{ str_plural('like', $post->likes->count()) }}</a>
                                    <form class="comment-form commentFormBlog" method="post" action="{{ route('inska::comment::store') }}" style="display: none;">
                                        <div class=" form-group">
                                            {{--{{ method_field('PUT') }}--}}
                                            {{ csrf_field() }}
                                            <input type="text" name="name" placeholder=" Your Name please!!"/>
                                            <input type="hidden" name="id_post" value="{{ $post->id }}"/>
                                            <input class="CommetBody" type="text" style="height: 50px;"  placeholder="Comment here" name="CommetBody" required=""/>
                                        </div><!-- /#respond -->
                                    </form>
                                </div><!-- /.share-post -->
                            </div><!-- /.wrap-share -->

                        </div><!-- /.entry-border -->
                    </article><!-- /entry clearfix -->
                    @empty
                        <div class="text-info text-center">
                            <p>No Result</p>
                        </div>
                    @endforelse
                    {!! $posts->render() !!}


                    {{--<div class="comment-post">--}}
                            {{--<div class="comment-list-wrap">--}}
                                {{--<h4 class="title comment-title">Comment (3) </h4>--}}
                                {{--<ul class="comment-list">--}}
                                    {{--<li>--}}
                                        {{--<article class="comment">--}}
                                            {{--<div class="comment-avatar">--}}
                                                {{--<img src="images/blog/1singlev1.png" alt="image">--}}
                                            {{--</div>--}}
                                            {{--<div class="comment-detail">--}}
                                                {{--<div class="comment-meta">--}}
                                                    {{--<p class="comment-author"><a href="#">Marie Morales</a></p>--}}
                                                    {{--<p class="comment-date"><a href="">March 8, 2016 - 8:00am</a></p>--}}
                                                {{--</div>--}}

                                                {{--<p class="comment-body">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>--}}
                                                {{--<a href="#" class="comment-reply">Reply</a>--}}
                                            {{--</div><!-- /.comment-detail -->--}}
                                        {{--</article><!-- /.comment -->--}}
                                    {{--</li>--}}

                                    {{--<li>--}}
                                        {{--<article class="comment style1">--}}
                                            {{--<div class="comment-avatar">--}}
                                                {{--<img src="images/blog/2singlev1.png" alt="image">--}}
                                            {{--</div>--}}
                                            {{--<div class="comment-detail">--}}
                                                {{--<div class="comment-meta">--}}
                                                    {{--<p class="comment-author"><a href="#">Terry Moore</a></p>--}}
                                                    {{--<p class="comment-date"><a href="">March 8, 2016 - 8:00am</a></p>--}}

                                                {{--</div>--}}
                                                {{--<p class="comment-body">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>--}}
                                                {{--<a href="#" class="comment-reply">Reply</a>--}}
                                            {{--</div><!-- /.comment-detail -->--}}
                                        {{--</article><!-- /.comment -->--}}
                                    {{--</li>--}}

                                    {{--<li>--}}
                                        {{--<article class="comment no-border">--}}
                                            {{--<div class="comment-avatar">--}}
                                                {{--<img src="images/blog/3singlev1.png" alt="image">--}}
                                            {{--</div>--}}
                                            {{--<div class="comment-detail">--}}
                                                {{--<div class="comment-meta">--}}
                                                    {{--<span class="comment-author"><a href="#">Quetta Lee</a></span>--}}
                                                    {{--<p class="comment-date"><a href="">March 8, 2016 - 8:00am</a></p>--}}

                                                {{--</div>--}}
                                                {{--<p class="comment-body">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>--}}
                                                {{--<a href="#" class="comment-reply">Reply</a>--}}
                                            {{--</div><!-- /.comment-detail -->--}}
                                        {{--</article><!-- /.comment -->--}}
                                    {{--</li>--}}
                                {{--</ul><!-- /.comment-list -->--}}
                            {{--</div>--}}
                            {{--<!-- /.comment-list-wrap -->--}}


                        {{--<div id="respond" class="comment-respond">--}}
                            {{--<h4 class="title comment-title style1">Leave a comment</h4>--}}
                            {{--<p>Your email address will not be published. Required fields are marked *</p>--}}
                            {{--<form class="flat-contact-form" id="contactform5" method="post" action="./contact/contact-process.php">--}}

                                {{--<input type="text" value="" tabindex="1" placeholder="Name*" name="name" id="name" required="" style="">--}}

                                {{--<input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email-contact" required="">--}}

                                {{--<textarea class="type-input" tabindex="3" placeholder="Comment*" name="message" id="message-contact" required=""></textarea>--}}

                                {{--<button class="flat-button bg-orange">Post Comment</button>--}}

                            {{--</form>--}}
                        {{--</div><!-- /#respond -->--}}
                    {{--</div>--}}
                        <!-- /.comment-post -->


                </div>
                <!-- /blog-title-single -->

            </div><!-- /col-md-8 -->

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
                        {{--<li>--}}
                            {{--<div class="thumb">--}}
                                {{--<img src="images/flickr/3.jpg" alt="image">--}}
                            {{--</div>--}}
                            {{--<div class="text">--}}
                                {{--<a href="#">New Chicago school budget relies on state pension</a>--}}
                                {{--<p>May 18, 2016</p>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    </ul><!-- /popular-news clearfix -->
                </div><!-- /widget widget-popular-news -->

                <div class="widget widget-categories">
                    <h5 class="widget-title">Categories</h5>
                    <ul>
                        @foreach($categories as $cat)
                            <li>
                                <a href="#">{{ $cat->name }}</a>
                                <span class="numb-right">({{ $cat->order }})</span>
                            </li>
                        @endforeach
                        {{--<li>--}}
                            {{--<a href="#">Web Design</a>--}}
                            {{--<span class="numb-right">(9)</span>--}}
                        {{--</li>--}}
                    </ul>
                </div>

                {{--<div class="widget widget-teacher">--}}
                    {{--<h5 class="widget-title">Browse by Teacher</h5>--}}
                    {{--<div class="text-teacher">--}}
                        {{--<p>Lorem ipsum sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                    {{--</div>--}}
                    {{--<ul class="teacher-news clearfix">--}}
                        {{--<li>--}}
                            {{--<div class="thumb">--}}
                                {{--<img src="images/flickr/4.jpg" alt="image">--}}
                            {{--</div>--}}
                            {{--<div class="text">--}}
                                {{--<a href="#">Charlie Brown</a>--}}
                                {{--<p>Web Designer</p>--}}
                            {{--</div>--}}
                            {{--<ul class="flat-socials">--}}
                                {{--<li class="facebook">--}}
                                    {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                {{--</li>--}}
                                {{--<li class="twitter">--}}
                                    {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--</li>--}}
                                {{--<li class="linkedin">--}}
                                    {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                                {{--</li>--}}
                                {{--<li class="youtube">--}}
                                    {{--<a href="#"><i class="fa fa-youtube-play"></i></a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<div class="thumb">--}}
                                {{--<img src="images/flickr/5.jpg" alt="image">--}}
                            {{--</div>--}}
                            {{--<div class="text">--}}
                                {{--<a href="#">Emily Foster</a>--}}
                                {{--<p>Web Designer</p>--}}
                            {{--</div>--}}
                            {{--<ul class="flat-socials">--}}
                                {{--<li class="facebook">--}}
                                    {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                {{--</li>--}}
                                {{--<li class="twitter">--}}
                                    {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--</li>--}}
                                {{--<li class="linkedin">--}}
                                    {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                                {{--</li>--}}
                                {{--<li class="youtube">--}}
                                    {{--<a href="#"><i class="fa fa-youtube-play"></i></a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<div class="thumb">--}}
                                {{--<img src="images/flickr/6.jpg" alt="image">--}}
                            {{--</div>--}}
                            {{--<div class="text">--}}
                                {{--<a href="#">Terry Moore</a>--}}
                                {{--<p>Web Designer</p>--}}
                            {{--</div>--}}
                            {{--<ul class="flat-socials">--}}
                                {{--<li class="facebook">--}}
                                    {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                {{--</li>--}}
                                {{--<li class="twitter">--}}
                                    {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--</li>--}}
                                {{--<li class="linkedin">--}}
                                    {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                                {{--</li>--}}
                                {{--<li class="youtube">--}}
                                    {{--<a href="#"><i class="fa fa-youtube-play"></i></a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul><!-- /popular-news clearfix -->--}}
                {{--</div>--}}

            </div><!-- /sidebar -->
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /main-content -->
@endsection

