@extends('front.layout.index')
@section('content')
    <div id="primary" class="sidebar-right">
        <div class="inner group">
            <!-- START CONTENT -->
            <div id="content-blog" class="content group">
                <div class="hentry hentry-post blog-big group ">
                    <!-- post featured & title -->
                    <div class="thumbnail">
                        <!-- post title -->
                        <h1 class="post-title">{{$article->a_title}}</h1>
                        <!-- post featured -->
                        <div class="image-wrap">
                            <img src="public/upload/article/{{$article->a_imgBlog}}" alt="00212" title="00212"/>
                        </div>
                        <p class="date">
                            <span class="month">{{ date_format(date_create($article->created_at), "M") }}</span>
                            <span class="day">{{ date_format(date_create($article->created_at), "d") }}</span>
                        </p>
                    </div>
                    <!-- post meta -->
                    <div class="meta group">
                        <p class="author"><span>by <a href="blog-big-image.html" title="Posts by Nicola Mustone"
                                                      rel="author"
                                                      style="color: red">{{$article->user->u_name}}</a></span></p>
                        <p class="categories"><span>In: <a href="blog-big-image.html" title="View all posts in Design"
                                                           rel="category tag">{{$article->category->cate_group->cate_name}}</a>,
                         <a href="blog-big-image.html" title="View all posts in Happyness"
                            rel="category tag">{{$article->category->c_name}}</a>
                        <p class="comments"><span><a href="#comments"
                                                     title="Comment on This is the title of the first article. Enjoy it.">{{count($article->comment)}}</a></span>
                        </p>
                    </div>
                    <!-- post content -->
                    <div class="the-content single group">
                        {!! $article->a_content !!}
                        <div class="socials">
                            <h2>love it, share it!</h2>
                            <a href="https://www.facebook.com/sharer.html?u=http%3A%2F%2Fyourinspirationtheme.com%2Fdemo%2Fpinkrio%2F2012%2F09%2F24%2Fthis-is-the-title-of-the-first-article-enjoy-it%2F&amp;t=This+is+the+title+of+the+first+article.+Enjoy+it."
                               class="socials-small facebook-small" title="Facebook">facebook</a>
                            <a href="https://twitter.com/share?url=http%3A%2F%2Fyourinspirationtheme.com%2Fdemo%2Fpinkrio%2F2012%2F09%2F24%2Fthis-is-the-title-of-the-first-article-enjoy-it%2F&amp;text=This+is+the+title+of+the+first+article.+Enjoy+it."
                               class="socials-small twitter-small" title="Twitter">twitter</a>
                            <a href="https://plusone.google.com/_/+1/confirm?hl=en&amp;url=http%3A%2F%2Fyourinspirationtheme.com%2Fdemo%2Fpinkrio%2F2012%2F09%2F24%2Fthis-is-the-title-of-the-first-article-enjoy-it%2F&amp;title=This+is+the+title+of+the+first+article.+Enjoy+it."
                               class="socials-small google-small" title="Google">google</a>
                            <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fyourinspirationtheme.com%2Fdemo%2Fpinkrio%2F2012%2F09%2F24%2Fthis-is-the-title-of-the-first-article-enjoy-it%2F&amp;media=http://yourinspirationtheme.com/demo/pinkrio/files/2012/09/00212.jpg&amp;description=Fusce+nec+accumsan+eros.+Aenean+ac+orci+a+magna+vestibulum+posuere+quis+nec+nisi.+Maecenas+rutrum+vehicula+condimentum.+Donec+volutpat+nisl+ac+mauris+consectetur+gravida.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Donec+vel+vulputate+nibh.+Pellentesque%5B...%5D"
                               class="socials-small pinterest-small" title="Pinterest">pinterest</a>
                            <a href="http://yourinspirationtheme.com/demo/pinkrio/2012/09/24/this-is-the-title-of-the-first-article-enjoy-it/"
                               class="socials-small bookmark-small"
                               title="This is the title of the first article. Enjoy it.">bookmark</a>
                        </div>
                    </div>
                    <p class="tags">Tags: <a href="#" rel="tag">book</a>, <a href="#" rel="tag">css</a>, <a href="#"
                                                                                                            rel="tag">design</a>,
                        <a href="#" rel="tag">inspiration</a></p>
                    <p style="font-size: 50px">Chưa xử lý tag</p>
                    <div class="clear"></div>
                </div>
                <!-- START SIDEBAR -->
            </div>
            <div id="sidebar-blog-sidebar" class="sidebar group">
                <div class="widget-first widget recent-posts">
                    <h3>Recent Posts</h3>
                    <div class="recent-post group">
                        @foreach($recent as $re)
                            <div class="hentry-post group">
                                <div class="thumb-img"><img src="public/upload/article/{{$re->a_thumbnail}}" alt="001"
                                                            title="001"/></div>
                                <div class="text">
                                    <a href="article/{{$re->a_id}}" title="Section shortcodes &amp; sticky posts!"
                                       class="title">{{$re->a_title}}</a>
                                    <p>{{$re->a_descripton}}</p>
                                    <a class="read-more" href="article/{{$re->a_id}}">&rarr; Read More</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="widget-first widget recent-posts">
                    <div class="recent-post group">
                        <h2>Nước hoa chiết xách tay Pháp</h2>
                        <a href="https://www.facebook.com/H%E1%BA%B1ng-Nga-1824290581165692/?ref=bookmarks" target="_blank"><img style="width: 308px" src="public/upload/quangcao/2.png" title="Nước hoa chiết xách tay Pháp chính hãng"></a>
                    </div>
                </div>
                <div class="fb-page" data-href="https://www.facebook.com/neetjokerdn/" data-tabs="timeline"
                     data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                     data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/neetjokerdn/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/neetjokerdn/">Nguyệt Hoa</a></blockquote>
                </div>
            </div>
            <!-- END SIDEBAR -->
        </div>
        <div id="fb-root"></div>
    </div>
@endsection
@section('script')
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1660675484236610";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
@endsection