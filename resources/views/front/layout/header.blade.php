<div id="header" class="group">
    <div class="group inner">
        <!-- START LOGO -->
        <div id="logo" class="group">
            <a href="" title="NEET Joker"><img src="public/front/images/neetjoker.png" title="Pink Rio"
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
                    Xin chào, <span style="color: red">
                    @if(Auth::user()->u_gender ==1)
                    Mr.
                    @elseif(Auth::user()->u_gender ==2)
                    Ms.
                    @else(Auth::user()->u_gender ==3)
                    Mrs.
                    @endif
                    {{Auth::user()->u_name}}</span>
                    @if(Auth::user()->u_roles==1||Auth::user()->u_roles==3)
                    </br>
                    <a href="administrator/article/list">Đi tới trang admin?</a>|<a href="administrator/logout">Sign out</a>
                    @else
                        <a href="user/logout">Sign out</a>
                    @endif
                @else
                    <a href="user/login" class="icon-user" style="font-size: 15px" id="login">Login Here!</a>
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
                        <a href="{{$ctg->cate_seo}}">{{$ctg->cate_name}}</a>
                        <ul class="sub-menu">
                            @foreach($categories as $c)
                                @if($c->cate_id == $ctg->cate_id)
                                    <li><a href="{{$ctg->cate_seo}}/{{$c->c_seo}}">{{$c->c_name}}</a></li>
                                @endif
                            @endforeach

                        </ul>
                    </li>
                @endforeach
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

