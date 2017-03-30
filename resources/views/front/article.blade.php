@extends('front.layout.index')
@section('content')
    <div id="primary" class="sidebar-right">
        <div class="inner group">
            <!-- START CONTENT -->
            <div id="content-single" class="content group">
                <div class="hentry hentry-post blog-big group ">
                    <!-- post featured & title -->
                    <div class="thumbnail">
                        <!-- post title -->
                        <h1 class="post-title">{{$article->a_title}}</h1>
                        <!-- post featured -->
                        <div class="image-wrap">
                            <img src="upload/article/{{$article->a_image}}" alt="00212" title="00212"/>
                        </div>
                        <p class="date">
                            <span class="month">Sep</span>
                            <span class="day">24</span>
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
                <!-- START COMMENTS -->
            {{--<div id="comments">--}}
            {{--<h3 id="comments-title">--}}
            {{--<span>{{count($comment)}}</span> comments--}}
            {{--</h3>--}}
            {{--@foreach($comment as $cmt)--}}
            {{--<ol class="commentlist group">--}}
            {{--<li class="comment even depth-1">--}}
            {{--<div class="comment-container">--}}
            {{--<div class="comment-author vcard">--}}
            {{--<img alt="" src="admin/avatar/{{$cmt->user->u_avatar}}" class="avatar" height="75"--}}
            {{--width="75"/>--}}
            {{--<cite class="fn" style="color: red">{{$cmt->user->u_name}}</cite>--}}
            {{--</div>--}}
            {{--<!-- .comment-author .vcard -->--}}
            {{--<div class="comment-meta commentmetadata">--}}
            {{--<div class="intro">--}}
            {{--<div class="commentDate">--}}
            {{--<a href="#comment-2">--}}
            {{--{{ date_format(date_create($cmt->created_at), "d/m/Y h:i:s ") }}</a>--}}
            {{--</div>--}}
            {{--<div class="commentNumber">#{{$cmt->cm_id}}</div>--}}
            {{--</div>--}}
            {{--<div class="comment-body">--}}
            {{--<p>{{$cmt->cm_content}}</p>--}}
            {{--</div>--}}
            {{--<div class="reply group">--}}
            {{--<a class="comment-reply-link" href="#respond"--}}
            {{--onclick="return addComment.moveForm(&quot;comment-2&quot;, &quot;2&quot;, &quot;respond&quot;, &quot;41&quot;)">Reply</a>--}}
            {{--</div>--}}
            {{--<!-- .reply -->--}}
            {{--</div>--}}
            {{--<!-- .comment-meta .commentmetadata -->--}}
            {{--</div>--}}
            {{--<!-- #comment-##  -->--}}
            {{--</li>--}}
            {{--</ol>--}}
            {{--@endforeach--}}
            {{--<!-- START TRACKBACK & PINGBACK -->--}}
            {{--<h2 id="trackbacks">Trackbacks and pingbacks</h2>--}}
            {{--<ol class="trackbacklist"></ol>--}}
            {{--<p><em>No trackback or pingback available for this article.</em></p>--}}

            {{--<!-- END TRACKBACK & PINGBACK -->--}}
            {{--<div id="respond">--}}
            {{--<h3 id="reply-title">Leave a <span>Reply</span>--}}
            {{--<small><a rel="nofollow" id="cancel-comment-reply-link" href="#respond"--}}
            {{--style="display:none;">Cancel reply</a></small>--}}
            {{--</h3>--}}
            {{--<form action="sendmail.PHP" method="post" id="commentform">--}}
            {{--<p class="comment-form-author"><label for="author">Name</label> <input id="author"--}}
            {{--name="author"--}}
            {{--type="text" value=""--}}
            {{--size="30"--}}
            {{--aria-required="true"/>--}}
            {{--</p>--}}
            {{--<p class="comment-form-email"><label for="email">Email</label> <input id="email"--}}
            {{--name="email"--}}
            {{--type="text" value=""--}}
            {{--size="30"--}}
            {{--aria-required="true"/>--}}
            {{--</p>--}}
            {{--<p class="comment-form-url"><label for="url">Website</label><input id="url" name="url"--}}
            {{--type="text" value=""--}}
            {{--size="30"/></p>--}}
            {{--<p class="comment-form-comment"><label for="comment">Your comment</label><textarea--}}
            {{--id="comment" name="comment" cols="45" rows="8"></textarea></p>--}}
            {{--<div class="clear"></div>--}}
            {{--<p class="form-submit">--}}
            {{--<input name="submit" type="submit" id="submit" value="Post Comment"/>--}}
            {{--</p>--}}
            {{--</form>--}}
            {{--</div>--}}
            {{--<!-- #respond -->--}}
            {{--</div>--}}
            <!-- END COMMENTS -->
            </div>
            <!-- END CONTENT -->

            <!-- START SIDEBAR -->
            <div id="sidebar-blog-sidebar" class="sidebar group">

                <div class="widget-first widget recent-posts">
                    <h3>Recent Posts</h3>
                    <div class="recent-post group">
                        @foreach($recent as $re)
                        <div class="hentry-post group">
                            <div class="thumb-img"><img src="" alt="001"
                                                        title="001"/></div>
                            <div class="text">
                                <a href="article/{{$re->a_id}}" title="Section shortcodes &amp; sticky posts!" class="title">{{$re->a_title}}</a>
                                <p>{{$re->a_descripton}}</p>
                                <a class="read-more" href="article/{{$re->a_id}}">&rarr; Read More</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{--<div id="last-tweets-2" class="widget last-tweets">--}}
                    {{--<h3>Last Tweets</h3>--}}
                    {{--<div class="list-tweets"></div>--}}
                    {{--<script type="text/javascript">--}}
                        {{--jQuery(function ($) {--}}
                            {{--$('#last-tweets-2 .list-tweets').tweetable({--}}
                                {{--listClass: 'tweets-widget',--}}
                                {{--username: 'YIW',--}}
                                {{--time: true,--}}
                                {{--limit: 3,--}}
                                {{--replies: true--}}
                            {{--});--}}
                        {{--});--}}
                    {{--</script>--}}
                {{--</div>--}}

                {{--<div class="widget-last widget recent-comments">--}}
                    {{--<h3>Recent Comments</h3>--}}
                    {{--<div class="recent-post recent-comments group">--}}

                        {{--<div class="the-post group">--}}
                            {{--<div class="avatar">--}}
                                {{--<img alt="" src="front/images/avatar/unknow55.png" class="avatar"/>--}}
                            {{--</div>--}}
                            {{--<span class="author"><strong><a--}}
                                            {{--href="mailto:no-email@i-am-anonymous.not">eduard</a></strong> in</span>--}}
                            {{--<a class="title" href="article.html">Nice &amp; Clean. The best for your blog!</a>--}}
                            {{--<p class="comment">--}}
                                {{--hi <a class="goto" href="article.html">&#187;</a>--}}
                            {{--</p>--}}
                        {{--</div>--}}

                        {{--<div class="the-post group">--}}
                            {{--<div class="avatar">--}}
                                {{--<img alt="" src="front/images/avatar/nicola55.jpeg" class="avatar"/>--}}
                            {{--</div>--}}
                            {{--<span class="author"><strong><a--}}
                                            {{--href="mailto:nicola@yopmail.com">nicola</a></strong> in</span>--}}
                            {{--<a class="title" href="article.html">This is the title of the first article. Enjoy it.</a>--}}
                            {{--<p class="comment">--}}
                                {{--While i’m the author of the post. My comment template is different,... <a class="goto"--}}
                                                                                                          {{--href="article.html">--}}
                                    {{--&#187;</a>--}}
                            {{--</p>--}}
                        {{--</div>--}}

                        {{--<div class="the-post group">--}}
                            {{--<div class="avatar">--}}
                                {{--<img alt="" src="front/images/avatar/unknow55.png" class="avatar"/>--}}
                            {{--</div>--}}
                            {{--<span class="author"><strong><a--}}
                                            {{--href="mailto:no-email@i-am-anonymous.not">Anonymous</a></strong> in</span>--}}
                            {{--<a class="title" href="article.html">This is the title of the first article. Enjoy it.</a>--}}
                            {{--<p class="comment">--}}
                                {{--Hi all, i’m a guest and this is the guest’s awesome comments... <a class="goto"--}}
                                                                                                   {{--href="article.html">--}}
                                    {{--&#187;</a>--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="fb-page" data-href="https://www.facebook.com/neetjokerdn/" data-tabs="timeline"
                     data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                     data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/neetjokerdn/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/neetjokerdn/">Nguyệt Hoa</a></blockquote>
                </div>
            </div>
            <!-- END SIDEBAR -->
        </div>
    </div>
    <div id="fb-root"></div>

@endsection
@section('script')
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1660675484236610";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@endsection