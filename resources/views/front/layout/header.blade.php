<div id="header" class="group">
    <div class="group inner">
        <!-- START LOGO -->
        <div id="logo" class="group">
            <a href="" title="NEET Joker"><img src="front/images/neetjoker.png" title="Pink Rio"
                                               alt="Pink Rio"/></a>
        </div>
        <!-- END LOGO -->

        <div id="sidebar-header" class="group">
            <div class="widget-first widget yit_text_quote">
                <blockquote class="text-quote-quote">&#8220;Keep your face towards the sunshine and shadows will
                    fall behind you.&#8221;</blockquote>
                <cite class="text-quote-author">WALT WHITMAN</cite>
                </br>
                @if(Auth::check())
                    Xin chào, <span style="color: red">{{Auth::user()->u_name}}</span>
                    @if(Auth::user()->u_roles==1)
                        </br>
                        <a href="administrator/article/list">Đi tới trang admin?</a>
                    @endif
                @else
                    <form action="login">
                        <a class="icon-user" style="font-size: 15px" href="login">Login Here!</a>
                    </form>
                @endif
            </div>
        </div>

        <div class="clearer"></div>
        <hr/>

        <!-- START MAIN NAVIGATION -->
        <div class="menu classic">
            <ul id="nav" class="menu">

                <li>
                    <a href="">HOME</a>
                </li>
                @foreach($cate_group as $ctg)
                    <li>
                        <a href="news">{{$ctg->cate_name}}</a>
                        <ul class="sub-menu">
                            @foreach($categories as $c)
                                @if($c->cate_id == $ctg->cate_id)
                                    <li><a href="">{{$c->c_name}}</a></li>
                                @endif
                            @endforeach

                        </ul>
                    </li>
                @endforeach
                {{--<li>--}}
                {{--<a href="#">Game Zone</a>--}}
                {{--<ul class="sub-menu">--}}
                {{--<li><a href="slider-thumbnails.html">Chuyện Làng Game</a></li>--}}
                {{--<li><a href="slider-layerslider.html">Liên Minh Huyền Thoại</a></li>--}}
                {{--<li><a href="slider-flexslider.html">Võ Lâm Truyền Kỳ - VNG</a></li>--}}
                {{--<li><a href="slider-elastic-slider.html">Võ Lâm Truyền Kỳ - Private</a></li>--}}
                {{--<li><a href="slider-cycle.html">Bí kiếp game thủ</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="photos">Photos</a>--}}
                {{--<ul class="sub-menu">--}}
                {{--<li><a href="landing-page.html">Beauty shots</a></li>--}}
                {{--<li><a href="contact.html">Contact</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}

                {{--<li>--}}
                {{--<a href="video">Video</a>--}}
                {{--<ul class="sub-menu">--}}
                {{--<li><a href="portfolio-three-columns.html">Cấm cười</a></li>--}}
                {{--<li><a href="project.html">Nhạc nhọt</a></li>--}}
                {{--<li><a href="portfolio-big-image.html">Phim ảnh</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}

                {{--<li>--}}
                {{--<a href="#">Blogger</a>--}}
                {{--<ul class="sub-menu">--}}
                {{--<li><a href="features-left-sidebar.html">Trà quán</a></li>--}}
                {{--<li><a href="features-right-sidebar.html">Có gì hay hôm nay</a></li>--}}
                {{--<li><a href="features-full-width.html">Đi đâu hôm nay</a></li>--}}
                {{--<li><a href="features-full-width.html">Ăn gì hôm nay</a></li>--}}
                {{--<li><a href="features-full-width.html">Đà Thành hôm nay</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}

                {{--<li>--}}
                {{--<a href="#">Tutorial</a>--}}
                {{--<ul class="sub-menu">--}}
                {{--<li><a href="shortcodes-typography.html">Lập trình php</a></li>--}}
                {{--<li><a href="shortcodes-icon-section.html">Thủ thuật Photoshop</a></li>--}}
                {{--<li><a href="shortcodes-alert-box-buttons.html">Mẹo vặt</a></li>--}}
                {{--<li><a href="shortcodes-tables-box-prices.html">MMO</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                <li>
                    <a href="about_us">About us</a>
                </li>

                <li>
                    <a href="contact_us">Contact us</a>
                </li>


            </ul>
        </div>
        <!-- END MAIN NAVIGATION -->
        <div id="header-shadow"></div>
        <div id="menu-shadow"></div>
    </div>

</div>
