@extends('front.layout.index')
@section('content')
    <!-- BEGIN NIVO SLIDER -->
    @include('front.layout.slider')
    <div id="primary" class="sidebar-right">
        <div class="inner group">
            <!-- START CONTENT -->
            <div id="content-blog" class="content group">
                @foreach($posts as $post)
                    <div class="hentry hentry-post blog-small group ">
                        <!-- post featured & title -->
                        <div class="thumbnail">
                            <!-- post title -->
                            <h2 class="post-title"><a href="article/{{$post->a_id}}">{{$post->a_title}}</a>
                            </h2>
                            <!-- post meta -->
                            <div class="meta group">
                                <p class="date">{{ date_format(date_create($post->created_at), "d/m/Y h:i:s ") }}</p>
                                <p class="author"><span>by <a href="#" title="Posts by Nicola Mustone"
                                                              rel="author">{{$post->u_name}}</a></span>
                                </p>
                                <p class="categories"><span>In: <a href="#" title="View all posts in Happyness"
                                                                   rel="category tag">{{$post->cate_name}}</a>, <a
                                                href="#"
                                                title="View all posts in Romantic Vintage"
                                                rel="category tag">{{$post->c_name}}</a></span>
                                </p>
                                <p class="comments"><span><a href="article#respond"
                                                             title="Comment on Section shortcodes &amp; sticky posts!">No comments</a></span>
                                </p>
                            </div>
                            <!-- post featured -->
                            <div class="image-wrap " style="width: 40%">
                                <img src="upload/article/{{$post->a_image}}" alt="001" title="001"/>
                            </div>
                        </div>
                        <!-- post content -->
                        <div class="the-content group">
                            {!! $post->a_title !!}
                            <p><a href="article/{{$post->a_id}}"
                                  class="btn   btn-beetle-bus-goes-jamba-juice-4 btn-more-link">→
                                    Read
                                    more</a></p>
                        </div>
                    </div>
                @endforeach
                <div class="general-pagination group"><a href="#" class="selected">1</a><a href="#">2</a><a
                            href="#">&rsaquo;</a></div>

            </div>
            <!-- END CONTENT -->
            <!-- START SIDEBAR -->
            <div id="sidebar-blog-sidebar" class="sidebar group">
                <div class="widget-first widget recent-posts">
                    <h3>Tin tức</h3>
                    <div class="recent-post group">
                        <div class="hentry-post group">
                            <div class="thumb-img"><img src="front/images/articles/001-55x55.png" alt="001"
                                                        title="001"/></div>
                            <div class="text">
                                <a href="article" title="Section shortcodes &amp; sticky posts!" class="title">Section
                                    shortcodes &amp; sticky posts!</a>
                                <p>Fusce nec accumsan eros. Aenean ac orci a magna vestibulum </p>
                                <a class="read-more" href="article.html">&rarr; Read More</a>
                            </div>
                        </div>
                        <div class="hentry-post group">
                            <div class="thumb-img"><img src="front/images/articles/003-55x55.jpg" alt="003"
                                                        title="003"/></div>
                            <div class="text">
                                <a href="article.html" title="Nice &amp; Clean. The best for your blog!"
                                   class="title">Nice
                                    &amp; Clean. The best for your blog!</a>
                                <p>Fusce nec accumsan eros. Aenean ac orci a magna vestibulum </p>
                                <a class="read-more" href="article">&rarr; Read More</a>
                            </div>
                        </div>
                        <div class="hentry-post group">
                            <div class="thumb-img"><img src="front/images/articles/0037-55x55.jpg" alt="0037"
                                                        title="0037"/></div>
                            <div class="text">
                                <a href="article" title="Another theme by YIThemes!" class="title">Another
                                    theme by
                                    YIThemes!</a>
                                <p>Quisque pharetra, risus sit amet vestibulum consequat, elit arcu ultrices </p>
                                <a class="read-more" href="article">&rarr; Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar group">
                <div class="widget-first widget recent-posts">
                    <h3>Tin game</h3>
                    <div class="recent-post group">
                        <div class="hentry-post group">
                            <div class="thumb-img"><img src="front/images/articles/001-55x55.png" alt="001"
                                                        title="001"/></div>
                            <div class="text">
                                <a href="article" title="Section shortcodes &amp; sticky posts!" class="title">Section
                                    shortcodes &amp; sticky posts!</a>
                                <p>Fusce nec accumsan eros. Aenean ac orci a magna vestibulum </p>
                                <a class="read-more" href="article.html">&rarr; Read More</a>
                            </div>
                        </div>
                        <div class="hentry-post group">
                            <div class="thumb-img"><img src="front/images/articles/003-55x55.jpg" alt="003"
                                                        title="003"/></div>
                            <div class="text">
                                <a href="article.html" title="Nice &amp; Clean. The best for your blog!"
                                   class="title">Nice
                                    &amp; Clean. The best for your blog!</a>
                                <p>Fusce nec accumsan eros. Aenean ac orci a magna vestibulum </p>
                                <a class="read-more" href="article">&rarr; Read More</a>
                            </div>
                        </div>
                        <div class="hentry-post group">
                            <div class="thumb-img"><img src="front/images/articles/0037-55x55.jpg" alt="0037"
                                                        title="0037"/></div>
                            <div class="text">
                                <a href="article" title="Another theme by YIThemes!" class="title">Another
                                    theme by
                                    YIThemes!</a>
                                <p>Quisque pharetra, risus sit amet vestibulum consequat, elit arcu ultrices </p>
                                <a class="read-more" href="article">&rarr; Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar group">
                <div class="widget-first widget recent-posts">
                    <h3>Blog</h3>
                    <div class="recent-post group">
                        <div class="hentry-post group">
                            <div class="thumb-img"><img src="front/images/articles/001-55x55.png" alt="001"
                                                        title="001"/></div>
                            <div class="text">
                                <a href="article" title="Section shortcodes &amp; sticky posts!" class="title">Section
                                    shortcodes &amp; sticky posts!</a>
                                <p>Fusce nec accumsan eros. Aenean ac orci a magna vestibulum </p>
                                <a class="read-more" href="article.html">&rarr; Read More</a>
                            </div>
                        </div>
                        <div class="hentry-post group">
                            <div class="thumb-img"><img src="front/images/articles/003-55x55.jpg" alt="003"
                                                        title="003"/></div>
                            <div class="text">
                                <a href="article.html" title="Nice &amp; Clean. The best for your blog!"
                                   class="title">Nice
                                    &amp; Clean. The best for your blog!</a>
                                <p>Fusce nec accumsan eros. Aenean ac orci a magna vestibulum </p>
                                <a class="read-more" href="article">&rarr; Read More</a>
                            </div>
                        </div>
                        <div class="hentry-post group">
                            <div class="thumb-img"><img src="front/images/articles/0037-55x55.jpg" alt="0037"
                                                        title="0037"/></div>
                            <div class="text">
                                <a href="article" title="Another theme by YIThemes!" class="title">Another
                                    theme by
                                    YIThemes!</a>
                                <p>Quisque pharetra, risus sit amet vestibulum consequat, elit arcu ultrices </p>
                                <a class="read-more" href="article">&rarr; Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END SIDEBAR -->
        </div>
        <div class="inner group" style="border-top: solid green">
            <h1>Photo Gallery</h1>
                <div class="one-fourth">
                    <img src="upload/article/RZmZ_sale-sat-luc-600.png">
                </div>

        </div>
    </div>
@endsection
