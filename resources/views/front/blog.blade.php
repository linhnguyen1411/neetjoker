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
        </div>
    </div>
    <div class="sidebar-no">
        <div class="inner group">
            <!-- START CONTENT -->
            <div id="content-page" class="content group">
                <div class="hentry group">
                    <div id="portfolio" class="portfolio-filterable">
                        <div class="gallery-filters">
                            <span style="font-size: 25px; color: red">PHOTO GALLERY</span>
                            <ul class="filters gallery-categories-quicksand">
                                <li class="segment-1 first selected"><a data-value="all" href="#">All</a></li>
                                <li class="segment-2"><a href="#" data-value="brandidentity">Brand Identity</a></li>
                                <li class="segment-3"><a href="#" data-value="digitalpainting">Digital Painting</a></li>
                                <li class="segment-4"><a href="#" data-value="logodesign">Logo Design</a></li>
                                <!--li class="segment-5">Web Design</li-->
                            </ul>
                        </div>
                        <div id="portfolio-gallery" class="internal_page_items internal_page_gallery">
                            <ul class="gallery-wrap image-grid group">
                                <li data-id="id-1" class="brandidentity logodesign one-fourth">
                                    <div class="internal_page_item internal_page_item_gallery">
                                        <div class="overlay_a">
                                            <img src="front/images/projects/0092-260x168.jpg" alt="0092" title="0092">
                                            <div class="overlay" style="opacity: 0; display: none;">
                                                <a class="overlay_img cboxElement" href="front/images/projects/0092.jpg" style="padding-left: 25px" rel="lightbox" title=""></a>
                                                <span class="overlay_title">Guanacos</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p style="color: blue; font-size: 15px">caption của ảnh 1 thử có bị vỡ css ko nhé </p>
                                    </div>
                                </li>
                                <li data-id="id-2" class="brandidentity one-fourth">
                                    <div class="internal_page_item internal_page_item_gallery">
                                        <div class="overlay_a">
                                            <img src="front/images/projects/0013-260x168.jpg" alt="0013" title="0013">
                                            <div class="overlay" style="opacity: 0;">
                                                <a class="overlay_img cboxElement" href="front/images/projects/0013.jpg" style="padding-left: 25px" rel="lightbox" title=""></a>
                                                <span class="overlay_title">Miller Bob</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p style="color: blue; font-size: 15px">caption của ảnh 1 thử có bị vỡ css ko nhé </p>
                                    </div>
                                </li>
                                <li data-id="id-3" class="brandidentity one-fourth">
                                    <div class="internal_page_item internal_page_item_gallery">
                                        <div class="overlay_a">
                                            <img src="front/images/projects/0029-260x168.jpg" alt="0029" title="0029">
                                            <div class="overlay" style="opacity: 0;">
                                                <a class="overlay_img cboxElement" href="front/images/projects/0029.jpg" style="padding-left: 25px"  rel="lightbox" title=""></a>

                                                <span class="overlay_title">Vitale Premium</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p style="color: blue; font-size: 15px">caption của ảnh 1 thử có bị vỡ css ko nhé </p>
                                    </div>
                                </li>
                                <li data-id="id-4" class="brandidentity one-fourth last">
                                    <div class="internal_page_item internal_page_item_gallery">
                                        <div class="overlay_a">
                                            <img src="front/images/projects/0038-260x168.jpg" alt="0038" title="0038">
                                            <div class="overlay" style="opacity: 0;">
                                                <a class="overlay_img cboxElement" href="front/images/projects/0038.jpg" style="padding-left: 25px" rel="lightbox" title=""></a>
                                                <span class="overlay_title">Nili Studios</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p style="color: blue; font-size: 15px">caption của ảnh 1 thử có bị vỡ css ko nhé </p>
                                    </div>
                                </li>
                                <li data-id="id-5" class="brandidentity one-fourth">
                                    <div class="internal_page_item internal_page_item_gallery">
                                        <div class="overlay_a">
                                            <img src="front/images/projects/0045-260x168.jpg" alt="0045" title="0045">
                                            <div class="overlay" style="opacity: 0; display: none;">
                                                <a class="overlay_img cboxElement" href="front/images/projects/0045.jpg" style="padding-left: 25px" rel="lightbox" title=""></a>
                                                <span class="overlay_title">Digitpool Medien</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p style="color: blue; font-size: 15px">caption của ảnh 1 thử có bị vỡ css ko nhé </p>
                                    </div>

                                </li>
                                <li data-id="id-6" class="digitalpainting one-fourth">
                                    <div class="internal_page_item internal_page_item_gallery">
                                        <div class="overlay_a">
                                            <img src="front/images/projects/0054-260x168.jpg" alt="0054" title="0054">
                                            <div class="overlay" style="opacity: 0;">
                                                <a class="overlay_img cboxElement" href="front/images/projects/0054.jpg" style="padding-left: 25px" rel="lightbox" title=""></a>
                                                <span class="overlay_title">Colorful Oktopus</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p style="color: blue; font-size: 15px">caption của ảnh 1 thử có bị vỡ css ko nhé </p>
                                    </div>
                                </li>
                                <li data-id="id-7" class="digitalpainting one-fourth">
                                    <div class="internal_page_item internal_page_item_gallery">
                                        <div class="overlay_a">
                                            <img src="front/images/projects/0063-260x168.jpg" alt="0063" title="0063">
                                            <div class="overlay" style="opacity: 0;">
                                                <a class="overlay_img cboxElement" href="front/images/projects/0063.jpg" style="padding-left: 25px" rel="lightbox" title=""></a>
                                                <span class="overlay_title">Black Mamba</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p style="color: blue; font-size: 15px">caption của ảnh 1 thử có bị vỡ css ko nhé </p>
                                    </div>
                                </li>
                                <li data-id="id-8" class="logodesign one-fourth last">
                                    <div class="internal_page_item internal_page_item_gallery">
                                        <div class="overlay_a">
                                            <img src="front/images/projects/0073-260x168.jpg" alt="0073" title="0073">
                                            <div class="overlay" style="opacity: 0;">
                                                <a class="overlay_img cboxElement" href="front/images/projects/0073.jpg" style="padding-left: 25px" rel="lightbox" title=""></a>
                                                <span class="overlay_title">Kineda</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p style="color: blue; font-size: 15px">caption của ảnh 1 thử có bị vỡ css ko nhé </p>
                                    </div>
                                </li>
                                <li data-id="id-9" class="logodesign one-fourth last">
                                    <div class="internal_page_item internal_page_item_gallery">
                                        <div class="overlay_a">
                                            <img src="front/images/projects/0073-260x168.jpg" alt="0073" title="0073">
                                            <div class="overlay" style="opacity: 0;">
                                                <a class="overlay_img cboxElement" href="front/images/projects/0073.jpg" style="padding-left: 25px" rel="lightbox" title=""></a>
                                                <span class="overlay_title">Kineda</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p style="color: blue; font-size: 15px">caption của ảnh 1 thử có bị vỡ css ko nhé </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <!-- START COMMENTS -->
                <div id="comments">
                </div>
                <!-- END COMMENTS -->
            </div>
            <!-- END CONTENT -->
            <!-- START EXTRA CONTENT -->
            <!-- END EXTRA CONTENT -->
        </div>
    </div>
@endsection
