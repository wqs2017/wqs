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
        width: 230px;
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        padding-left: 30px;
    }
    .player_right div{
        width: 230px;
        height: 120px;
        box-sizing: border-box;
        margin: 0 0 16px 0;
        border: 1px solid #0056ff;
    }
    

</style>
<link rel="stylesheet" href="http://vjs.zencdn.net/4.2/video-js.css">
<div class="player_main">
    <div class="player_left">
        <video id="my_video_1" class="video-js vjs-default-skin" autoplay controls preload="auto" width="940" height="528"
               data-setup='{}'>
            <source src='rtmp://pili-live-rtmp.qiniu.mumov.com/mumovie/5874517e5e77b0178543c153' type='rtmp/mp4'>
        </video>
    </div>
    <div class="player_right">
        <div>

        </div>
        <div>

        </div>
        <div>

        </div>
        <div style="margin: 0;">

        </div>
    </div>
</div>
<script src="http://vjs.zencdn.net/4.2/video.js"></script>