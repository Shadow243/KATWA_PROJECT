<div class = " flat-row lastest-new">
    <div class="container">
        <div class="flat-title-section">
            <h1 class="title">LATEST NEWS</h1>
        </div>

        <div class="row post-lastest-new">
            @foreach($posts as $post)
                <div class="post col-md-4 col-xs-12 col-sm-6 flat-hover-zoom">
                    <div class="featured-post">
                        <div class="entry-image">
                            @isset($post->image)
                                <img src="{{ $post->image }}" alt="image" style="width: 370px; height: 247px;">
                            @endisset
                        </div>
                    </div>

                    <div class="date-post">
                        <span class="numb">18</span>
{{--                        <span class="numb">{{ DAY($post->created_at) }}</span>--}}
                        <span>May</span>
                    </div>

                    <div class="content-post">
                        <h2 class="title-post">
                            <a href="flat-information.html">{{ $post->title }}</a>
                        </h2>

                        <div class="entry-content">
                            <p>{!! $post->body !!}</p>
                        </div>
                        <!-- /entry-post -->

                        <div class="entry-meta style1">
                            <p>Posted :<span><a href="#"> {{ $post->created_at->diffForHumans() }}</a></span></p>
                            <p>Tags:<span><a href="#"> {{ config('app.name') }},</a></span><span><a href="#"> educate</a></span></p>
                        </div>
                    </div><!-- /content-post -->
                </div>
            @endforeach
        </div>

    </div>
    {!! $posts->render() !!}
</div><!-- /.latest-new -->