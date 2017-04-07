<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes"/>
    <base href="{{asset('')}}">
    <title>NEET Joker, Connecting people</title>
    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="public/front/images/neetjoker.ico"/>
    <link rel="icon" type="image/x-icon" href="public/front/images/neetjoker.ico"/>
    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png"/>
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png"/>
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png"/>
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png"/>
    <!-- [favicon] end -->

    <!-- CSSs -->
    <link rel="stylesheet" type="text/css" media="all" href="public/front/css/reset.css"/> <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="public/front/style.css"/> <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" id="max-width-1024-css" href="public/front/css/max-width-1024.css" type="text/css"
          media="screen and (max-width: 1240px)"/>
    <link rel="stylesheet" id="max-width-768-css" href="public/front/css/max-width-768.css" type="text/css"
          media="screen and (max-width: 987px)"/>
    <link rel="stylesheet" id="max-width-480-css" href="public/front/css/max-width-480.css" type="text/css"
          media="screen and (max-width: 480px)"/>
    <link rel="stylesheet" id="max-width-320-css" href="public/front/css/max-width-320.css" type="text/css"
          media="screen and (max-width: 320px)"/>

    <!-- CSSs Plugin -->
    <link rel="stylesheet" id="thickbox-css" href="public/front/css/thickbox.css" type="text/css" media="all"/>
    <link rel="stylesheet" id="styles-minified-css" href="public/front/css/style-minifield.css" type="text/css" media="all"/>
    <link rel="stylesheet" id="buttons" href="public/front/css/buttons.css" type="text/css" media="all"/>
    <link rel="stylesheet" id="cache-custom-css" href="public/front/css/cache-custom.css" type="text/css" media="all"/>
    <link rel="stylesheet" id="custom-css" href="public/front/css/custom.css" type="text/css" media="all"/>

    <!-- FONTs -->
    <link rel="stylesheet" id="google-fonts-css"
          href="http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed%3A300%7CRokkitt%7CShadows+Into+Light%7CAbel%7CDamion%7CMontez&amp;ver=3.4.2"
          type="text/css" media="all"/>
    <link rel='stylesheet' href='public/front/css/font-awesome.css' type='text/css' media='all'/>

    <!-- JAVASCRIPTs -->
    <script type="text/javascript" src="public/front/js/jquery.js"></script>
    <script type="text/javascript" src="public/front/js/comment-reply.js"></script>
    <script type="text/javascript" src="public/front/js/jquery.quicksand.js"></script>
    <script type="text/javascript" src="public/front/js/jquery.tipsy.js"></script>
    <script type="text/javascript" src="public/front/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="public/front/js/jquery.cycle.min.js"></script>
    <script type="text/javascript" src="public/front/js/jquery.anythingslider.js"></script>
    <script type="text/javascript" src="public/front/js/jquery.eislideshow.js"></script>
    <script type="text/javascript" src="public/front/js/jquery.easing.js"></script>
    <script type="text/javascript" src="public/front/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="public/front/js/jquery.aw-showcase.js"></script>
    <script type="text/javascript" src="public/front/js/layerslider.kreaturamedia.jquery-min.js"></script>
    <script type="text/javascript" src="public/front/js/shortcodes.js"></script>
    <script type="text/javascript" src="public/front/js/jquery.colorbox-min.js"></script>
    <script type="text/javascript" src="public/front/js/jquery.tweetable.js"></script>
    <script type="text/javascript" src="public/front/js/jquery.model.js"></script>
    <script type="text/javascript">
        var time = 15; //How long (in seconds) to countdown
        var page = ""; //The page to redirect to
        function countDown(){
            time--;
            gett("container").innerHTML = time;
            if(time == 0){
                window.location = page;
            }
        }
        function gett(id){
            if(document.getElementById) return document.getElementById(id);
            if(document.all) return document.all.id;
            if(document.layers) return document.layers.id;
            if(window.opera) return window.opera.id;
        }
        function init(){
            if(gett('container')){
                setInterval(countDown, 1000);
                gett("container").innerHTML = time;
            }
            else{
                setTimeout(init, 50);
            }
        }
        document.onload = init();
    </SCRIPT>
</head>
<body class="no_js responsive stretched">

<!-- START BG SHADOW -->
<div class="bg-shadow">

    <!-- START WRAPPER -->
    <div id="wrapper" class="group">

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
                    </div>
                </div>
            </div>
        </div>
        <div id="primary" class="sidebar-no">
            <div class="inner group">
                <!-- START CONTENT -->
                <div id="content-index" class="content group">
                    <img class="error-404-image group" src="public/front/images/features/404.png" title="Error 404" alt="404"/>
                    <div class="error-404-text group">
                        <p>We are sorry but the page you are looking for does not exist.<br/>You could <a
                                    href="">return
                                to the home page</a> or website will be redirected after <span style="color: red" id="container"></span> second(s). Have a nice day!</p>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
        </div>
    </div>
</div>
</body>
@include('front.layout.footer')