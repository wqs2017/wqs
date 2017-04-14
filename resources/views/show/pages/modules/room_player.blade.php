<style>
    .player_main{
        width: 1200px;
        height: 528px;
        overflow: hidden;
        position: relative;
        margin: 0 auto;
    }
    .player_left{
        position: absolute;
        left: 0;
        top:0;
        width: 940px;
        height: 100%;
        background: #2ab27b;
    }
    .player_right{
        width: 260px;
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
    }
    .player_right_top{
        width: 260px;
        height: 102px;
        text-align: center;
        padding-top: 10px;
        border: 1px solid #dcdcdc;
        background: #fff;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .player_right_top img{
        width: 40px;
        height: 40PX;
        border-radius: 50%;
        background: #0056ff;
        float: left;
        margin-left: 20px;
        margin-bottom: 10px;
    }
    .player_right_top_nickname{
        margin-left: 10px;
        color: #1a1a1a;
        font-size: 26px;
        font-weight: bold;
        height: 40px;
        line-height: 40px;
    }
    .player_right_top_attention{
        width: 100px;
        height: 32px;
        font-size: 14px;
        color: #fff;
        background: #0056ff;
        margin: 10px auto 0;
        border-radius: 4px;
        text-align: center;
        line-height: 32px;
    }
    .player_right_mid{
        width: 100%;
        overflow: hidden;
        background: #fff;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .player_right_bottom{
        width: 100%;
        background: #fff;
        height: 320px;
        margin-top: 10px;
        border: 1px solid #dcdcdc;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .mid_left{
        color: #0056ff;
        font-size: 14px;
        font-weight: bold;
        float: left;
        margin-left: 10px;
    }
    .mid_right{
        width:0;
        height:0;
        border-top:5px solid transparent;
        border-bottom:5px solid transparent;
        border-left:7px solid #0066cc;
        float: right;
        position: absolute;
        right: 10px;
        top: 12px;
    }
    @keyframes rotate{
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(90deg);
        }
    }
    .mid_top:hover .mid_right{
        animation: rotate 0.2s 0s ease alternate forwards;
    }
    .mid_top{
        width: 100%;
        height: 34px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid #dcdcdc;
        border-top: 0;
        line-height: 34px;
        position: relative;
        cursor: pointer;
    }
    .mid_list{
        width: 100%;
        height: 62px;
        overflow: hidden;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid #dcdcdc;
        border-top: 0;
        padding-bottom: 5px;
        position: relative;
    }
    .mid_list ul{
        width: 100%;
        overflow: hidden;
        position: absolute;
        left: 0;
        top: 0;
    }
    .mid_list_li{
        margin-top: 6px;
        height: 22px;
        width: 240px;
        padding: 0px 10px 0 10px;
        line-height: 22px;
        font-size: 12px;
        overflow: hidden;
        color: #1a1a1a;
    }
    .mid_list_img{
        width: 22px;
        height: 22px;
        border-radius: 50%;
        float: left;
        margin-right: 10px;
    }
    .mid_list_nickname{
        float: left;
        margin-right: 10px;
        display: block;
    }
    .mid_list_dreams{
        float: right;
        display: block;
    }
    .chat_box{
        width: 250px;
        height: 310px;
        padding: 10px 0 0 10px;
        overflow: hidden;
    }
    .chat_box ul{
        width: 100%;
        overflow: hidden;
    }
    .chat_box ul li{
        margin-top: 3px;
    }
    .chat_img{
        width: 25px;
        height: 12px;background: #2ab27b;
        margin-right: 10px;
        float: left;
    }
    .chat_nickname{
        overflow: hidden;
        font-size: 12px;
        color: #666;
    }
    .chat_main_black,.chat_main_blue{
        color: #1a1a1a;
        font-size: 14px;
        font-weight: bold;
        margin-top: 4px;
        margin-bottom: 4px;
        line-height: 22px;
        word-wrap: break-word;
        word-break: break-all;
    }
    .chat_main_blue{
        color: #0056ff;
    }


    /*----- player chat gift ---*/
    .player_bottom{
        width: 1200px;
        height: 78px;
        margin: 0 auto;
        position: relative;
    }
    .gift_box{
        width: 940px;
        padding: 10px 20px;
        text-align: center;
        background: #fff;
        overflow: hidden;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid #dcdcdc;
        birder-top: 0;
    }
    #game{
        width: 50px;
        height: 56px;
        background: #0056ff;
        color: #fff;
        line-height: 56px;
        float: left;
    }
    .gift_box_in{
        overflow: hidden;
        height: 56px;
        float: right;
        font-size: 14px;
        color: #fff;
    }
    .gift_recharge{
        overflow: hidden;
        height: 56px;
        text-align: center;
        float: right;
    }
    .gift_recharge img{
        width: 14px;
        height: 14px;
        margin: 7px auto 7px;
        background: #0056ff;
    }
    .gift_recharge span{
        font-size: 14px;
        color: #1a1a1a;
        line-height: 28px;
        display: block;
    }
    .gift_giver{
        width: 80px;
        height: 100%;
        line-height: 54px;
        background: #0056ff;
        float: right;
        border-radius: 4px;
        z-index: 1;
    }

    .gift_number_box{
        overflow: hidden;
        border-radius: 4px;
        margin-right: 20px;
        height: 56px;
        float: right;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid #dcdcdc;
        background: rgb(250,250,250);
    }
    .gift_number{
        width: 120px;
        height: 54px;
        float: right;
    }
    .gift_number_img{
        width: 40px;
        height: 40px;
        float: left;
        margin: 8px 0 0 6px;
        background: #0056ff;
    }
    .gift_number_num{
        font-size: 14px;
        line-height: 54px;
        float: left;
        margin-left: 6px;
        color: #1a1a1a;
    }
    .gift_number_btn{
        line-height: 54px;
        float: right;
        margin-right: 10px;
        color: #8c8c8c;
    }
    .gift_type_btn{
        width: 20px;
        height: 100%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid #dcdcdc;
        line-height: 56px;
        float: right;
        margin: 0 10px;
        border-radius: 4px;
        color: #ccc;
        background: rgb(250,250,250);
    }
    .gift_select_ul{
        overflow: hidden;
        height: 56px;
        float: right;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid #dcdcdc;
        border-radius: 4px;
    }
    .gift_select_ul ul{
        overflow: hidden;
    }
    .gift_select_ul li{
        width: 56px;
        height: 56px;
        border-right: 0;
        float: left;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border-left: 1px solid #dcdcdc;
        background: rgb(250,250,250);
    }
    .gift_select_ul li:first-child{
        border-left: 0;
    }

    .send_chat_box{
        width: 260px;
        height: 78px;
        overflow: hidden;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid #dcdcdc;
        border-left: 0;
        border-top: 0;
        position: absolute;
        right: 0;
        top: 0;
    }
    .chat_text_box{
        width: 179px;
        height: 68px;
        padding: 10px 0 0 10px;
        float: left;
    }
    .chat_text{
        font-size: 14px;
        color: #666666;
        width: 152px;
        height: 68px;
        resize: none;
        border: 0;
        outline: 0;
        background: rgb(250,250,250);
        -webkit-appearance: textarea;
        -webkit-rtl-ordering: logical;
        user-select: text;
        flex-direction: column;
        cursor: auto;
        white-space: pre-wrap;
        word-wrap: break-word;
        float: left;
    }
    .chat_emoj{
        width: 18px;
        height: 18px;
        background: #2ab27b;
        float: left;
    }
    .chat_send_btn{
        width: 70px;
        height: 100%;
        line-height: 78px;
        font-size: 14px;
        float: left;
        background: #0056ff;
        color: #fff;
        text-align: center;
    }

    /*----------------- 弹幕 ------------------*/
    .bullet_screen_box{
        width: 940px;
        height: 80px;
        overflow: hidden;
        position: absolute;
        left: 0;
        bottom: 60px;
        background: #fff;
    }

</style>
<link rel="stylesheet" href="http://vjs.zencdn.net/4.2/video-js.css">
<div class="player_main">
    <div class="player_left">
        <video id="my_video_1" class="video-js vjs-default-skin" autoplay controls preload="auto" width="940" height="528"
               data-setup='{}'>
            <source src='rtmp://pili-live-rtmp.qiniu.mumov.com/mumovie/5874517e5e77b0178543c153' type='rtmp/mp4'>
        </video>
        <div class="bullet_screen_box">
            <div class="bullet">这是一条弹幕~~</div>
        </div>
    </div>
    <div class="player_right">
        <div class="player_right_top">
            <img src="" alt="" >
            <div class="player_right_top_nickname">好好做人oO</div>
            <div class="player_right_top_attention">关注</div>
        </div>
        <div class="player_right_mid">
            <div class="mid_top">
                <div class="mid_left">粉丝排行榜</div>
                <div class="mid_right"></div>
            </div>
            <div class="mid_list">
                <ul>
                    <li class="mid_list_li">
                        <img src="" alt="" class="mid_list_img">
                        <div class="mid_list_nickname">刘小贝是大超人</div>
                        <div class="mid_list_dreams">999,897</div>
                    </li>
                    <li class="mid_list_li">
                        <img src="" alt="" class="mid_list_img">
                        <div class="mid_list_nickname">刘美丽是丑鬼</div>
                        <div class="mid_list_dreams">999,897</div>
                    </li>
                    <li class="mid_list_li">
                        <img src="" alt="" class="mid_list_img">
                        <div class="mid_list_nickname">刘美丽是丑鬼</div>
                        <div class="mid_list_dreams">999,897</div>
                    </li><li class="mid_list_li">
                        <img src="" alt="" class="mid_list_img">
                        <div class="mid_list_nickname">刘美丽是丑鬼</div>
                        <div class="mid_list_dreams">999,897</div>
                    </li><li class="mid_list_li">
                        <img src="" alt="" class="mid_list_img">
                        <div class="mid_list_nickname">刘美丽是丑鬼</div>
                        <div class="mid_list_dreams">999,897</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="player_right_bottom">
            <div class="chat_box">
                <ul>
                    <li>
                        <img src="" alt="" class="chat_img">
                        <span class="chat_nickname">wqs</span>
                        <div class="chat_main_black">你长得也太好看了吧⁄</div>
                    </li>
                    <li>
                        <img src="" alt="" class="chat_img">
                        <span class="chat_nickname">刘美丽</span>
                        <div class="chat_main_blue">送了一辆彩虹跑车</div>
                    </li>
                    <li>
                        <img src="" alt="" class="chat_img">
                        <span class="chat_nickname">刘大可爱</span>
                        <div class="chat_main_blue">行走在冬夜的冷风中,飘散的踩碎的都是梦,确定你曾爱过我,llalaalala啦,主播真厉害</div>
                    </li>
                    <li>
                        <img src="" alt="" class="chat_img">
                        <span class="chat_nickname">蠢莹^*^</span>
                        <div class="chat_main_black">主播好厉害</div>
                    </li>
                    <li>
                        <img src="" alt="" class="chat_img">
                        <span class="chat_nickname">蠢莹^*^</span>
                        <div class="chat_main_blue">送了一个金话筒</div>
                    </li>
                    <li>
                        <img src="" alt="" class="chat_img">
                        <span class="chat_nickname">蠢莹^*^</span>
                        <div class="chat_main_black">我喜欢你主播,我们做朋友吧</div>
                    </li>
                    <li>
                        <img src="" alt="" class="chat_img">
                        <span class="chat_nickname">蠢莹^*^</span>
                        <div class="chat_main_blue">送了一个金话筒</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="player_bottom">

        <div class="gift_box">
            <div id="game">
                游戏
            </div>

            <div class="gift_box_in">
                <div class="gift_recharge">
                    <img src="" alt="">
                    <span>充值</span>
                </div>

                <div class="gift_number_box">
                    <div class="gift_giver">
                        赠送
                    </div>

                    <div class="gift_number">
                        <img class="gift_number_img">
                        <div class="gift_number_num">
                            2017
                        </div>
                        <div class="gift_number_btn">
                            ^
                        </div>
                    </div>
                </div>

                <div class="gift_type_btn">
                    ^
                </div>

                <div class="gift_select_ul">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
        </div>
    </div>

    <div class="send_chat_box">
        <div class="chat_text_box">
            <textarea name=""class="chat_text" placeholder="主播在等你哦"></textarea>
            <img src="" alt="" class="chat_emoj">
        </div>

        <div class="chat_send_btn">
            发送
        </div>

    </div>
</div>
<script>

</script>
<script src="http://vjs.zencdn.net/4.2/video.js"></script>