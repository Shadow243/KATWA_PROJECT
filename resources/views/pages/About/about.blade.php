<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 22/09/2017
 * Time: 12:45
 */?>
@extends('layouts.default')
@section('title') About @endsection
@section('content')
<div class="page-title parallax parallax4" style="background-position: 50% 88px; background-image: url('{{ asset('storage/'.Voyager::setting('site_background')) }}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h2 class="title">ABOUT US</h2>
                </div><!-- /.page-title-heading -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>About us</li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /page-title parallax -->

<!-- About -->
<section class="flat-row pad-top-100 flat-about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="flat-tabs about-us" data-effect ="fadeIn">
                    <div class="content-tab clearfix">
                        <div class="content-inner">
                            <div class="text-tab">
                                <div class="flat-title">
                                    <h1>Welcome to {{ Voyager::setting('title') }}!<span></span></h1>
                                </div><!-- /.flat-title -->
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem corporis suscipit laboriosam nisi ut aliquid ex ea commodi consequatur?</p>
                            </div><!-- /.text-tab -->
                            <div class="images-tab">
                                <img src="{{ asset('storage/'.Voyager::setting('school_image')) }}" alt="images">
                            </div>
                        </div><!-- /.content-inner -->

                    </div><!-- /.content-tab -->
                </div><!-- /.flat-tabs -->
            </div><!-- /col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

{{--<section class="flat-row about-us parallax parallax1">--}}
    {{--<div class="overlay bg-222">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<div class="flat-counter">--}}
                        {{--<div class="counter-content">--}}
                            {{--<div class="numb-count" data-to="23" data-speed="2000" data-waypoint-active="yes">23</div>--}}
                            {{--<div class="name-count">Year Of Experience</div>--}}
                            {{--<div class="desc-count">Lorem ipsum dolor sit amet consecte tur adipiscing elit, sed do eiusmod tempor incididunt labore</div>--}}
                        {{--</div>--}}
                    {{--</div><!-- /.flat-counter -->--}}
                {{--</div>--}}

                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<div class="flat-counter">--}}
                        {{--<div class="counter-content">--}}
                            {{--<div class="numb-counter">--}}
                                {{--<div class="numb-count" data-to="59" data-speed="1000" data-waypoint-active="yes">0</div>--}}
                            {{--</div>--}}
                            {{--<div class="name-count">Numbers Doctor</div>--}}
                            {{--<div class="desc-count">Lorem ipsum dolor sit amet consecte tur adipiscing elit, sed do eiusmod tempor incididunt labore</div>--}}
                        {{--</div>--}}
                    {{--</div><!-- /.flat-counter -->--}}
                {{--</div>--}}

                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<div class="flat-counter">--}}
                        {{--<div class="counter-content">--}}
                            {{--<div class="numb-count" data-to="15" data-speed="2000" data-waypoint-active="yes">15</div>--}}
                            {{--<div class="name-count">Professional Awards</div>--}}
                            {{--<div class="desc-count">Lorem ipsum dolor sit amet consecte tur adipiscing elit, sed do eiusmod tempor incididunt labore</div>--}}
                        {{--</div>--}}
                    {{--</div><!-- /.flat-counter -->--}}
                {{--</div>--}}

                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<div class="flat-counter">--}}
                        {{--<div class="counter-content">--}}
                            {{--<div class="numb-count percent" data-to="100" data-speed="2000" data-waypoint-active="yes">100</div>--}}
                            {{--<div class="name-count">Satisfied Clients</div>--}}
                            {{--<div class="desc-count">Lorem ipsum dolor sit amet consecte tur adipiscing elit, sed do eiusmod tempor incididunt labore</div>--}}
                        {{--</div>--}}
                    {{--</div><!-- /.flat-counter -->--}}
                {{--</div>--}}
            {{--</div><!-- / .row -->--}}
        {{--</div><!-- /.container -->--}}
    {{--</div><!-- /.overlay -->--}}
{{--</section>--}}
@endsection
