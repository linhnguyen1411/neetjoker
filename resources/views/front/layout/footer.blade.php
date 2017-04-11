<div id="copyright">
    <div class="inner group">
        <div class="left">
            NEET Joker - Connecting People
        </div>
        <div class="right">
            <a href="#" class="socials-small facebook-small" title="Facebook">facebook</a>
            <a href="#" class="socials-small rss-small" title="Rss">rss</a>
            <a href="#" class="socials-small twitter-small" title="Twitter">twitter</a>
            <a href="#" class="socials-small flickr-small" title="Flickr">flickr</a>
            <a href="#" class="socials-small skype-small" title="Skype">skype</a>
            <a href="#" class="socials-small google-small" title="Google">google</a>
            <a href="#" class="socials-small pinterest-small" title="Pinterest">pinterest</a>
        </div>
    </div>
</div>
<script type="text/javascript">
    function hide_float_right() {
        var content = document.getElementById('float_content_right');
        var hide = document.getElementById('hide_float_right');
        if (content.style.display == "none") {
            content.style.display = "block";
            hide.innerHTML = '<a href="javascript:hide_float_right()">Tắt Quảng Cáo [X]</a>';
        }
        else {
            content.style.display = "none";
            hide.innerHTML = '<a href="javascript:hide_float_right()">Xem Quảng Cáo</a>';
        }
    }
</script>
<style>
    .float-ck {
        position: fixed;
        bottom: 0px;
        z-index: 9000
    }

    * html .float-ck {
        position: absolute;
        bottom: auto;
        top: expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)));
    }

    #float_content_right {
        border: 1px solid #01AEF0;
    }

    #hide_float_right {
        text-align: right;
        font-size: 11px;
    }

    #hide_float_right a {
        background: #01AEF0;
        padding: 2px 4px;
        color: #FFF;
    }
</style>
<div class="float-ck" style="right: 0px">
    <div id="hide_float_right">
        <a href="javascript:hide_float_right()">Tắt Quảng Cáo [X]</a></div>
    <div id="float_content_right">
        <a href="https://www.facebook.com/H%E1%BA%B1ng-Nga-1824290581165692/?ref=bookmarks" target="_blank"><img
                    src="public/upload/quangcao/2.png" title="Nước hoa chiết xách tay Pháp chính hãng"/></a>
    </div>
</div>