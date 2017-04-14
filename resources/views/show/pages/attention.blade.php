<style>
    section{
        width: 100%;
        overflow: hidden;
        background: #fafafa;
    }

    .attention_scroll{
        width: 1200px;
        height: 262px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        margin: 30px auto 0;
        overflow: hidden;
        border: 1px solid #dcdcdc;
        position: relative;
        background: rgba(255,255,255,0.8);
        border-radius: 4px;
    }
    .attention_scroll ul{
        width: 8000px;
        overflow: hidden;
        position: absolute;
        left: 0;
        top: 30px;
    }
    .attention_scroll li{
        width: 174px;
        height: 196px;
        margin-left: 22px;
        border-radius: 4px;
        float: left;
        border: 1px #dcdcdc solid;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        position: relative;
        text-align: center;
        font-size: 14px;
    }
    .attention_scroll_header{
        margin: 20px auto 0;
        width: 54px;
        height: 54px;
        border-radius: 50%;
        background: #0056ff;
    }
    .attention_scroll_nicknamebox{
        overflow: hidden;
        margin: 20px auto 0;
        padding: ;
    }
    .attention_scroll .attention_live_nickname{
        margin-right: 10px;
        font-size: 14px;
        font-weight: bold;
        color: #1a1a1a;
        float: left;
        display: block;
    }
    .attention_scroll .attention_live_level_log{
        width: 30px;
        height: 14px;
        display: block;
        float: left;
        background: #2ab27b;
    }
    .attention_scroll_signature{
        margin: 10px auto 0;
        color: #666;
    }
    .attention_scroll_btn{
        width: 134px;
        height: 30px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border:1px solid #0056ff;
        border-radius: 4px;
        color: #0056ff;
        line-height: 30px;
        margin: 10px auto 0;
    }


    .attention_scroll_ul{

    }

    .left_btn,.right_btn{
        width: 28px;
        height: 28px;
        line-height: 28px;
        font-size: 28px;
        font-family: '宋体';
        text-align: center;
        position: absolute;
        cursor: pointer;
        color: #dcdcdc;
    }
    .left_btn{
        left: 0;
        top: 50%;
        margin: -14px 0 0 0;
    }
    .right_btn{
        right: 0;
        top: 50%;
        margin: 0 0 0 -14px;
    }

    .attention_live{
        width: 100%;
        overflow: hidden;
    }
    .attention_live .title{
        width: 100%;
        font-size: 22px;
        color: #1a1a1a;
        font-weight: bold;
        padding: 50px 0 20px 0;
        border-bottom: 1px solid #dcdcdc;
    }
    .attention_live .title span{
        width: 1200px;
        display: block;
        margin: 0 auto;
    }
    .attention_live .main{
        width: 1280px;
        overflow: hidden;
        margin: 20px auto 0;
    }
    .attention_live .main_ul{
        width: 1240px;
        margin: 0 0 0 40px;
    }
    .attention_live .main_ul li{
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        width: 580px;
        height: 402px;
        margin: 0 40px 40px 0;
        float: left;
        position: relative;
        border: 1px #dcdcdc solid;
    }
    .attention_live_top{
        width: 100%;
        height: 74px;
        background: #fff;

    }
    .attention_live_left{
        overflow: hidden;
        position: absolute;
        height: 100%;
        left: 20px;
        top: 0;
    }
    .attention_live_header{
        width: 36px;
        height: 36px;
        margin-top: 19px;
        float: left;
    }
    .attention_live_nickname{
        margin: 0 10px;
        display: block;
        float: left;
        line-height: 74px;
    }
    .attention_live_level_log{
        width: 30px;
        height: 14px;
        float: left;
        background: #2ab27b;
        margin-top: 30px;
    }
    .attention_live_right{
        position: absolute;
        right: 10px;
        top: 0;
        height: 74px;
        overflow: hidden;
        line-height: 74px;
    }
    .attention_live_right span{
        color: #0056ff;
    }
    .attention_live_img{
        background: #3c763d;
        width: 100%;
        height: 328px;
    }

</style>
<section>
    <div class="attention_scroll">
        <ul class="attention_scroll_ul">
            <li>
                <img src="" alt="" class="attention_scroll_header">
                <div class="attention_scroll_nicknamebox">
                    <span class="attention_scroll_nickanme">wqs</span><span class="attention_scroll_level_log"></span>
                </div>
                <p class="attention_scroll_signature">这是个性签名</p>
                <div class="attention_scroll_btn">已关注</div>
            </li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
        </ul>
        <div class="left_btn">&lt;</div>
        <div class="right_btn">&gt;</div>
    </div>

    <div class="attention_live">
        <div class="title">
            <span>正在关注直播</span>
        </div>
        <div class="main">
            <ul class="main_ul">
                <li>
                    <div class="attention_live_top">
                        <div class="attention_live_left">
                            <img src="" alt="" class="attention_live_header">
                            <span class="attention_live_nickname">wqs</span>
                            <div class="attention_live_level_log">

                            </div>
                        </div>
                        <div class="attention_live_right">
                            <span>1978</span>人正在观看
                        </div>
                    </div>
                    <div class="attention_live_img">

                    </div>
                </li>
                <li>
                    <div class="attention_live_top">
                        <div class="attention_live_left">
                            <img src="" alt="" class="attention_live_header">
                            <span class="attention_live_nickname">wqs</span>
                            <div class="attention_live_level_log">

                            </div>
                        </div>
                        <div class="attention_live_right">
                            <span>1978</span>人正在观看
                        </div>
                    </div>
                    <div class="attention_live_img">

                    </div>
                </li>
                <li>
                    <div class="attention_live_top">
                        <div class="attention_live_left">
                            <img src="" alt="" class="attention_live_header">
                            <span class="attention_live_nickname">wqs</span>
                            <div class="attention_live_level_log">

                            </div>
                        </div>
                        <div class="attention_live_right">
                            <span>1978</span>人正在观看
                        </div>
                    </div>
                    <div class="attention_live_img">

                    </div>
                </li>
            </ul>
        </div>
    </div>

    @include('show.pages.modules.recommend')
</section>
<script>
    var left_btn = document.getElementsByClassName('left_btn')[0];
    var right_btn = document.getElementsByClassName('right_btn')[0];
    var scroll_ul = document.getElementsByClassName('attention_scroll_ul')[0];
    var left = 0;
    left_btn.onmousedown = function () {
            var scroll = setInterval(function () {
                left -= 1;
                scroll_ul.style.left = left + 'px';
            }, 3);
            this.onmouseup = function () {
                clearInterval(scroll)
            }
    }
    right_btn.onmousedown = function () {
            var scroll = setInterval(function () {
                left += 1;
                scroll_ul.style.left = left + 'px';
                if(left >= 0 ){
                    clearInterval(scroll);
                    left = 0;
                }
            }, 3);
            this.onmouseup = function () {
                clearInterval(scroll)
            }
    }
</script>
