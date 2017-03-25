@extends('front.layout.index')
@section('content')
    <!-- BEGIN NIVO SLIDER -->
   @include('front.layout.slider')
    <div id="primary" class="sidebar-right">
        <div class="inner group">
            <!-- START CONTENT -->
            <div id="content-blog" class="content group">
                <div class="hentry hentry-post blog-small group ">
                    <!-- post featured & title -->
                    <div class="thumbnail">
                        <!-- post title -->
                        <h2 class="post-title"><a href="article">Section shortcodes &amp; sticky posts!</a>
                        </h2>
                        <!-- post meta -->
                        <div class="meta group">
                            <p class="date">September 24, 2012</p>
                            <p class="author"><span>by <a href="#" title="Posts by Nicola Mustone" rel="author">Nicola Mustone</a></span>
                            </p>
                            <p class="categories"><span>In: <a href="#" title="View all posts in Happyness"
                                                               rel="category tag">Happyness</a>, <a href="#"
                                                                                                    title="View all posts in Romantic Vintage"
                                                                                                    rel="category tag">Romantic Vintage</a></span>
                            </p>
                            <p class="comments"><span><a href="article#respond"
                                                         title="Comment on Section shortcodes &amp; sticky posts!">No comments</a></span>
                            </p>
                        </div>
                        <!-- post featured -->
                        <div class="image-wrap">
                            <img src="front/images/articles/001-205x185.png" alt="001" title="001"/>
                        </div>
                    </div>
                    <!-- post content -->
                    <div class="the-content group">
                        <p>Fusce nec accumsan eros. Aenean ac orci a magna vestibulum posuere quis nec nisi.
                            Maecenas
                            rutrum vehicula condimentum. Donec volutpat nisl ac mauris consectetur gravida.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel vulputate nibh.
                            Pellentesque habitant <strong>morbi tristique</strong> senectus et netus et malesuada
                            fames
                            ac turpis egestas.</p>
                        <p>In facilisis ornare arcu, sodales facilisis neque blandit ac. Ut blandit ipsum quis arcu
                            adipiscing <strong>sit amet semper</strong> sem feugiat. Nam sed dapibus arcu. Nullam
                            eleifend molestie lectus. Nullam nec risus purus.</p>
                        <p><a href="article" class="btn   btn-beetle-bus-goes-jamba-juice-4 btn-more-link">→
                                Read
                                more</a></p>
                    </div>
                </div>

                <div class="hentry hentry-post blog-small group">
                    <!-- post featured & title -->
                    <div class="thumbnail">
                        <!-- post title -->
                        <h2 class="post-title"><a href="article">Nice &amp; Clean. The best for your blog!</a>
                        </h2>
                        <!-- post meta -->
                        <div class="meta group">
                            <p class="date">September 24, 2012</p>
                            <p class="author"><span>by <a href="#" title="Posts by Nicola Mustone" rel="author">Nicola Mustone</a></span>
                            </p>
                            <p class="categories"><span>In: <a href="#" title="View all posts in Design"
                                                               rel="category tag">Design</a>, <a href="#"
                                                                                                 title="View all posts in WordPress"
                                                                                                 rel="category tag">WordPress</a></span>
                            </p>
                            <p class="comments"><span><a href="article#respond"
                                                         title="Comment on Nice &amp; Clean. The best for your blog!">No comments</a></span>
                            </p>
                        </div>
                        <!-- post featured -->
                        <div class="image-wrap">
                            <img src="front/images/articles/003-205x185.jpg" alt="003" title="003"/>
                        </div>
                    </div>
                    <!-- post content -->
                    <div class="the-content group">
                        <p>Fusce nec accumsan eros. Aenean ac orci a magna vestibulum posuere quis nec nisi.
                            Maecenas
                            rutrum vehicula condimentum. Donec volutpat nisl ac mauris consectetur gravida.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel vulputate nibh.
                            Pellentesque habitant <strong>morbi tristique</strong> senectus et netus et malesuada
                            fames
                            ac turpis egestas.</p>
                        <p>In facilisis ornare arcu, sodales facilisis neque blandit ac. Ut blandit ipsum quis arcu
                            adipiscing <strong>sit amet semper</strong> sem feugiat. Nam sed dapibus arcu. Nullam
                            eleifend molestie lectus. Nullam nec risus purus.</p>
                        <p><a href="article" class="btn   btn-beetle-bus-goes-jamba-juice-4 btn-more-link">→
                                Read
                                more</a></p>
                    </div>
                </div>

                <div class="general-pagination group"><a href="#" class="selected">1</a><a href="#">2</a><a
                            href="#">&rsaquo;</a></div>

            </div>
            <!-- END CONTENT -->

            <!-- START SIDEBAR -->
            <div id="sidebar-blog-sidebar" class="sidebar group">
                <div class="widget-first widget recent-posts">
                    <h3>Recent Posts</h3>
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

                <div id="last-tweets-2" class="widget last-tweets">
                    <h3>Last Tweets</h3>
                    <div class="list-tweets"></div>
                    <script type="text/javascript">
                        jQuery(function ($) {
                            $('#last-tweets-2 .list-tweets').tweetable({
                                listClass: 'tweets-widget',
                                username: 'YIW',
                                time: true,
                                limit: 3,
                                replies: true
                            });
                        });
                    </script>
                </div>

                <div class="widget-last widget recent-comments">
                    <h3>Recent Comments</h3>
                    <div class="recent-post recent-comments group">

                        <div class="the-post group">
                            <div class="avatar">
                                <img alt="" src="front/images/avatar/unknow55.png" class="avatar"/>
                            </div>
                            <span class="author"><strong><a
                                            href="mailto:no-email@i-am-anonymous.not">eduard</a></strong> in</span>
                            <a class="title" href="article">Nice &amp; Clean. The best for your blog!</a>
                            <p class="comment">
                                hi <a class="goto" href="article">&#187;</a>
                            </p>
                        </div>

                        <div class="the-post group">
                            <div class="avatar">
                                <img alt="" src="front/images/avatar/nicola55.jpeg" class="avatar"/>
                            </div>
                            <span class="author"><strong><a
                                            href="mailto:nicola@yopmail.com">nicola</a></strong> in</span>
                            <a class="title" href="article">This is the title of the first article. Enjoy
                                it.</a>
                            <p class="comment">
                                While i’m the author of the post. My comment template is different,... <a
                                        class="goto"
                                        href="article">
                                    &#187;</a>
                            </p>
                        </div>

                        <div class="the-post group">
                            <div class="avatar">
                                <img alt="" src="front/images/avatar/unknow55.png" class="avatar"/>
                            </div>
                            <span class="author"><strong><a
                                            href="mailto:no-email@i-am-anonymous.not">Anonymous</a></strong> in</span>
                            <a class="title" href="article">This is the title of the first article. Enjoy
                                it.</a>
                            <p class="comment">
                                Hi all, i’m a guest and this is the guest’s awesome comments... <a class="goto"
                                                                                                   href="article">
                                    &#187;</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END SIDEBAR -->
        </div>
    </div>
    </div>
@endsection