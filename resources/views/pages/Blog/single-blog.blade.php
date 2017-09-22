<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 18/09/2017
 * Time: 03:54
 */?>
@extends('layouts.default')

@section('title') Search Result @endsection

@section('content')
<div class="page-title parallax parallax4" style="background-position: 50% 88px; background-image: url('{{ asset('storage/'.Voyager::setting('site_background')) }}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h2 class="title">{{ $infoSearch }}</h2>
                </div><!-- /.page-title-heading -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>{{ $infoSearch }}</li>
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
                    @forelse($post as $value)
                        <h1 class="bold">{{ $value->title }}</h1>
                        <article class="entry clearfix">
                        <div class="entry-border">
                            <div class="main-post">
                                <div class="wrap-img">
                                    <img src="{{ asset('storage/'.$value->authorId->avatar) }}" title="{{ $value->authorId->email }}" style="width: 15%;" class="img img-rounded" alt="images">
                                    <hp>{{ 'By '.ucfirst($value->authorId->name) }}</hp>
                                    <div class="entry-meta">
                                        <span class="date"><a href="#">{{ $value->created_at->diffForHumans() }}</a></span>
                                        <span class="comment"><a href="#">{{ $value->comments->count()." ".str_plural('comment', $value->comments->count()) }}</a></span>
                                        {{--<span class="tag"><a href="#">Web Design, Life Style</a></span>--}}
                                    </div>
                                </div>

                                <div class="feature-post">
                                    <img src="{{ asset($value->image) }}" alt="image" style="width: 100%; height: 250px;">
                                </div><!-- /.feature-post -->
                                <div class="entry-content">
                                    <p>{!! $value->body !!}</p>
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
                                </div><!-- /.share-post -->
                            </div><!-- /.wrap-share -->
                        </div><!-- /.entry-border -->
                    </article><!-- /entry clearfix -->


                    <div class="comment-post">
                        <div class="comment-list-wrap">
                            <h4 class="title comment-title">{{ str_plural('comment', $value->comments->count())}} ({{ $value->comments->count()  }})   </h4>
                            <ul class="comment-list">
                                @if(!isset($value->comments))
                                    <li>
                                        <article class="comment">
                                            <div class="comment-avatar">
                                                <img src="{{ asset('assets/images/avatar/avatar.jpg') }}" style="width: 35%;" class="img img-thumbnail" alt="image">
                                            </div>
                                            <div class="comment-detail">
                                                <div class="comment-meta">
                                                    <p class="comment-author"><a href="#">{{ $value->comments->name  }}</a></p>
                                                        <p class="comment-date"><a href="">{{ $value->comments->created_at->diffForHumans() }}</a></p>
                                                </div>

                                                <p class="comment-body">{{ $value->comments->content }}</p>
                                                <a href="#" class="comment-reply">Reply</a>
                                            </div><!-- /.comment-detail -->
                                        </article><!-- /.comment -->
                                    </li>

                                    <li>
                                        <article class="comment style1">
                                            <div class="comment-avatar">
                                                <img src="images/blog/2singlev1.png" alt="image">
                                            </div>
                                            <div class="comment-detail">
                                                <div class="comment-meta">
                                                    <p class="comment-author"><a href="#">Terry Moore</a></p>
                                                    <p class="comment-date"><a href="">March 8, 2016 - 8:00am</a></p>

                                                </div>
                                                <p class="comment-body">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                                                <a href="#" class="comment-reply">Reply</a>
                                            </div><!-- /.comment-detail -->
                                        </article><!-- /.comment -->
                                    </li>
                                @endif
                                    <a href="#" class="btn btn-link leavecommentLink" style="float: right;">Leave a Comment</a>
                                    <a href="{{ route('inska::like', [$value->id]) }}" class="btn btn-link likelink" style="float: right;"><i class="fa fa-thumbs-o-up"></i>like</a>
                                    <form class="comment-form commentFormBlog" method="post" action="{{ route('inska::comment::store') }}" style="display: none;">
                                        <div class=" form-group">
                                            {{--{{ method_field('PUT') }}--}}
                                            {{ csrf_field() }}
                                            <input type="text" name="name" placeholder=" Your Name please!!"/>
                                            <input type="hidden" name="id_post" value="{{ $value->id }}"/>
                                            <input class="CommetBody" type="text" style="height: 50px;"  placeholder="Comment here" name="CommetBody" required=""/>
                                        </div><!-- /#respond -->
                                    </form>
                            </ul><!-- /.comment-list -->
                        </div><!-- /.comment-list-wrap -->

                    </div><!-- /.comment-post -->
                    @empty
                        <div class="text-info text-center">
                            <p>No Result</p>
                        </div>
                    @endforelse
                </div><!-- /blog-title-single -->
            </div><!-- /col-md-8 -->

            <div class="sidebar">
                <div class="widget widget-popular-news">
                    <h5 class="widget-title">Recent posts</h5>
                    <ul class="popular-news clearfix">
                        @foreach($recentsPosts as $recentsPost)
                            <li>
                                <div class="thumb">
                                    <a href="{{ route('inska::blog::single', [$recentsPost->slug]) }}" title="view contenet">
                                        <img src="{{ asset($recentsPost->image) }}" style="width: inherit;"  alt="image">
                                    </a>
                                </div>
                                <div class="text">
{{--                                    <a href="#">{!! $recentsPost->body !!}</a>--}}
{{--                                    <p>{{ $recentsPost->created_at->diffForHumans() }}</p>--}}
                                </div>
                            </li>
                            @endforeach
                        {{--<li>--}}
                            {{--<div class="thumb">--}}
                                {{--<img src="images/flickr/2.jpg" alt="image">--}}
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
                        @foreach($categories as $category)
                        <li>
                            <a href="#">{{ $category->name }}</a>
                            <span class="numb-right">(9)</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{--<div class="widget widget-featured-courses">--}}
                    {{--<h5 class="widget-title">Featured courses</h5>--}}
                    {{--<ul class="featured-courses-news clearfix">--}}
                        {{--<li>--}}
                            {{--<div class="thumb">--}}
                                {{--<img src="images/flickr/7.jpg" alt="image">--}}
                            {{--</div>--}}
                            {{--<div class="text">--}}
                                {{--<a href="#">Swift Programming for Beginners</a>--}}
                                {{--<p>Sarah Johnson</p>--}}
                            {{--</div>--}}
                            {{--<div class="review-rating">--}}
                                {{--<div class="flat-money">--}}
                                    {{--<p>$170</p>--}}
                                {{--</div>--}}
                                {{--<ul class="flat-reviews">--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star-half-o"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star-o"></i></a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<div class="thumb">--}}
                                {{--<img src="images/flickr/8.jpg" alt="image">--}}
                            {{--</div>--}}
                            {{--<div class="text">--}}
                                {{--<a href="#">Swift Programming for Beginners</a>--}}
                                {{--<p>Sarah Johnson</p>--}}
                            {{--</div>--}}
                            {{--<div class="review-rating">--}}
                                {{--<div class="flat-money">--}}
                                    {{--<p>$170</p>--}}
                                {{--</div>--}}
                                {{--<ul class="flat-reviews">--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star-half-o"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star-o"></i></a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<div class="thumb">--}}
                                {{--<img src="images/flickr/9.jpg" alt="image">--}}
                            {{--</div>--}}
                            {{--<div class="text">--}}
                                {{--<a href="#">Swift Programming for Beginners</a>--}}
                                {{--<p>Sarah Johnson</p>--}}
                            {{--</div>--}}
                            {{--<div class="review-rating">--}}
                                {{--<div class="flat-money">--}}
                                    {{--<p>$170</p>--}}
                                {{--</div>--}}
                                {{--<ul class="flat-reviews">--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star-half-o"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="star">--}}
                                        {{--<a href="#"><i class="fa fa-star-o"></i></a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul><!-- /popular-news clearfix -->--}}
                {{--</div><!-- /widget widget-popular-news -->--}}
            </div><!-- /sidebar -->
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /main-content -->
@endsection