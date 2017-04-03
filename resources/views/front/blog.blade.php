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
                            <div class="image-wrap ">
                                <img src="upload/article/{{$post->a_img}}" alt="001" title="001"/>
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
                <div class="general-pagination group">
                    @if($posts->currentPage() != 1)
                        <a class="prev page-numbers" href="{!! $posts->url($posts->currentPage()-1) !!}">Prev</a>
                    @endif
                    @for($i = 1; $i<=  $posts->lastPage() ; $i =$i +1 )
                        @if($posts->currentPage()==$i)
                            <a href="" class="selected">{!! $i !!}</a>
                        @else
                            <a href='{!! $posts->url($i) !!}'>{!! $i !!}</a>
                        @endif
                    @endfor
                    @if($posts->currentPage() != $posts->lastPage())
                        <a class="next page-numbers" href="{!! $posts->url($posts->currentPage()+1) !!}">Next</a>
                    @endif
                </div>

            </div>
            <!-- END CONTENT -->
            <!-- START SIDEBAR -->
            <div id="sidebar-blog-sidebar" class="sidebar group">
                <div class="widget-first widget recent-posts">
                    <h3>Tin tức</h3>
                    <div class="recent-post group">
                        @foreach($tintuc as $tt)
                            <div class="hentry-post group">
                                <div class="thumb-img"><img src="upload/article/{{$tt->a_thumbnail}}" alt="001"
                                                            title="001"/></div>
                                <div class="text">
                                    <a href="article/{{$tt->a_id}}" title="Section shortcodes &amp; sticky posts!"
                                       class="title">{{$tt->a_title}}</a>
                                    <p>{{$tt->a_description}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="widget-first widget recent-posts">
                    <h3>Tin game</h3>
                    <div class="recent-post group">
                        @foreach($tingame as $tg)
                            <div class="hentry-post group">
                                <div class="thumb-img"><img src="upload/article/{{$tg->a_thumbnail}}" alt="001"
                                                            title="001"/></div>
                                <div class="text">
                                    <a href="article/{{$tg->a_id}}" title="Section shortcodes &amp; sticky posts!"
                                       class="title">{{$tg->a_title}}</a>
                                    <p>{{$tg->a_description}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="widget-first widget recent-posts">
                    <h3>Blog</h3>
                    <div class="recent-post group">
                        @foreach($blog as $b)
                            <div class="hentry-post group">
                                <div class="thumb-img"><img src="upload/article/{{$b->a_thumbnail}}" alt="001"
                                                            title="001"/></div>
                                <div class="text">
                                    <a href="article/{{$b->a_id}}" title="Section shortcodes &amp; sticky posts!"
                                       class="title">{{$b->a_title}}</a>
                                    <p>{{$b->a_description}}</p>
                                </div>
                            </div>
                        @endforeach
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
                                <?php $count = 0 ?>
                                @foreach($photos as $photo)
                                    <?php $count++ ?>
                                    @if($count%4==0)
                                        <li  class="brandidentity logodesign one-fourth last">
                                            <div class="internal_page_item internal_page_item_gallery">
                                                <div class="overlay_a">
                                                    <img src="upload/images/{{$photo->i_preview}}" alt="0092"
                                                         title="0092">
                                                    <div class="overlay" style="opacity: 0; display: none;">
                                                        <a class="overlay_img cboxElement"
                                                           href="upload/images/{{$photo->i_full}}"
                                                           style="padding-left: 25px" rel="lightbox" title=""></a>
                                                        <span class="overlay_title">{{$photo->user->u_name}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p style="color: blue; font-size: 15px">{{$photo->i_title}} </p>
                                            </div>
                                        </li>
                                    @else
                                        <li class="brandidentity logodesign one-fourth">
                                            <div class="internal_page_item internal_page_item_gallery">
                                                <div class="overlay_a">
                                                    <img src="upload/images/{{$photo->i_preview}}" alt="0092"
                                                         title="0092">
                                                    <div class="overlay" style="opacity: 0; display: none;">
                                                        <a class="overlay_img cboxElement"
                                                           href="upload/images/{{$photo->i_full}}"
                                                           style="padding-left: 25px" rel="lightbox" title=""></a>
                                                        <span class="overlay_title">{{$photo->user->u_name}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p style="color: blue; font-size: 15px">{{$photo->i_title}} </p>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
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
