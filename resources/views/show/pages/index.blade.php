<style>
    section{
        width: 100%;
        background: #fafafa;
        overflow: hidden;
    }
    .nav{
        width: 1200px;
        height: 72px;
        margin: 0 auto;
    }
    .nav ul{
        width: 100%;
        height: 100%;
        line-height: 72px;
    }
    .nav ul li{
        float: left;
        font-size: 20px;
        color: #333;
        padding: 0 20px;
        cursor: pointer;
    }
    .nav ul li:first-child{
        float: left;
        font-size: 22px;
        color: #1a1a1a;
        padding-right: 40px;
        padding-left: 0;
    }

    .recommend_list{
        width: 1200px;
        height: 100px;
        padding-top: 40px;
        margin: 0 auto;
    }
    .recommend_list ul{
        width: 100%;
        height: 100%;
    }
    .recommend_list ul li{
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        width: 180px;
        height: 100%;
        float: left;
        margin-left: 24px;
        border: 1px solid #0056ff;
    }

    .main_beauty_girl{
        width: 100%;
        overflow: hidden;
        margin: 0 auto;
    }
    .main_beauty_girl .title{
        width: 100%;
        padding: 50px 0 20;
        font-size: 22px;
        border-bottom: 1px solid #dcdcdc;
    }
    .main_beauty_girl .title span{
        width: 1200px;
        display: block;
        margin: 0 auto;
    }
    .main_beauty_girl .main{
        width: 1200px;
        overflow: hidden;
        margin: 22px auto 0;
    }
    .main_beauty_girl .main ul{
        width: 100%;
        overflow: hidden;
    }
    .main_beauty_girl .main ul li{
        width: 380px;
        height: 244px;
        margin-right: 30px;
        overflow: hidden;
        background: #2ab27b;
        float: left;
        position: relative;
    }
    .main_beauty_girl .main ul li .main_img{
        width: 100%;
        height: 214px;
        background: rgba(0,0,0,0.3);
        position: relative;
    }
    .main_img_bottom{
        width: 100%;
        height: 30px;
        position: absolute;
        bottom: 0;
        left: 0;
        background: rgba(0,0,0,0.8);
    }
    .main_img_bottom .left{
        font-size: 16px;
        color: #fff;
        position: absolute;
        left: 12px;
        top: 7px;
    }
    .main_img_bottom .right{
        font-size: 12px;
        color: #fff;
        position: absolute;
        right: 12px;
        top: 9px;
    }

    .main_beauty_girl .main ul li .main_title{
        display: inline-block;
        font-size: 16px;
        height: 30px;
        width: 100%;
        line-height: 30px;
        color: #333;
    }

    .ad{
        width: 100%;
        height: 160px;
        margin: 50px auto 0;
        background: #0d3625;
    }

</style>
<section>
    @include('show.pages.modules.login')
    <div class="nav">
        <ul>
            <li>热门推荐</li>
            <li>美女</li>
            <li>脱口秀</li>
            <li>体育</li>
            <li>赛事</li>
        </ul>
    </div>
    @include('show.pages.modules.player')
    {{--<div class="recommend_list">--}}
        {{--<ul>--}}
            {{--<li style="margin-left: 0;"></li>--}}
            {{--<li></li>--}}
            {{--<li></li>--}}
            {{--<li></li>--}}
            {{--<li></li>--}}
            {{--<li></li>--}}
        {{--</ul>--}}
    {{--</div>--}}

    @include('show.pages.modules.recommend')


    <img src="" class="ad" alt="">


    <div class="main_beauty_girl">
        <div class="title">
            <span>脱口秀</span>
        </div>
        <div class="main">
            <ul>
                <li>
                    <div class="main_img">
                        <div class="main_img_bottom">
                            <div class="left"></div>
                            <div class="right"></div>
                        </div>
                    </div>
                    <div class="main_title">This is title ~</div>
                </li>
                <li>
                    <div class="main_img">
                        <div class="main_img_bottom">
                            <div class="left"></div>
                            <div class="right"></div>
                        </div>
                    </div>
                    <div class="main_title">This is title ~</div>
                </li>
                <li style="margin: 0;">
                    <div class="main_img">
                        <div class="main_img_bottom">
                            <div class="left"></div>
                            <div class="right"></div>
                        </div>
                    </div>
                    <div class="main_title">This is title ~</div>
                </li>
                <li style="margin-top: 30px">
                    <div class="main_img">
                        <div class="main_img_bottom">
                            <div class="left"></div>
                            <div class="right"></div>
                        </div>
                    </div>
                    <div class="main_title">This is title ~</div>
                </li>
                <li style="margin-top: 30px;">
                    <div class="main_img">
                        <div class="main_img_bottom">
                            <div class="left"></div>
                            <div class="right"></div>
                        </div>
                    </div>
                    <div class="main_title">This is title ~</div>
                </li>
                <li style="margin: 30px 0 0 0;">
                    <div class="main_img">
                        <div class="main_img_bottom">
                            <div class="left"></div>
                            <div class="right"></div>
                        </div>
                    </div>
                    <div class="main_title">This is title ~</div>
                </li>
            </ul>
        </div>
    </div>
</section>