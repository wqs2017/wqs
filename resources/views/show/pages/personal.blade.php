<style>
    section{
        overflow: hidden;
        background: #fafafa;
    }
    .data_top_box{
        width: 100%;
        height: 200px;
        overflow: hidden;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid #dcdcdc;
        border-right: 0;
        border-left: 0;
        background: #fff;
    }
    .data_top{
        width: 1200px;
        height: 198px;
        margin: 0 auto;
        position: relative;
    }
    .data_top_header{
        width: 120px;
        height: 120px;
        border-radius: 50%;
        margin-top: 40px;
        background: #0056ff;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid #dcdcdc;
        float: left;
        margin-left: 20px;
    }
    .data_top_center{
        overflow: hidden;
        position: absolute;
        left: 220px;
        top: 58px;
    }
    .data_top_nickname{
        padding-right: 50px;
        font-size: 20px;
        color: #1a1a1a;
        font-weight: bold;
    }
    .user_id{
        font-size: 14px;
        color: #666;
        margin-top: 10px;
    }
    .signature{
        font-size: 14px;
        color: #666;
        margin-top: 30px;
    }
    .data_top_right{
        position: absolute;
        right: 20px;
        top: 58px;
        height: 140px;
        min-width: 460px;
    }
    .edit_data{
        width: 76px;
        height: 32px;
        border: 1px solid #666;
        line-height: 32px;
        color: #666;
        font-size: 14px;
        text-align: center;
        border-radius: 4px;
        float: right;
    }
    .data_number{
        margin-top: 14px;
        overflow: hidden;
        position: absolute;
        right: 0;
        top: 48px;
    }
    .data_number ul{
        overflow: hidden;
    }
    .data_number ul li{
        min-width: 28px;
        text-align: center;
        margin-right: 52px;
        float: left;
    }
    .data_number ul li:last-child{
        margin: 0;
    }
    .data_number ul li span{
        font-size: 16px;
        color: #1a1a1a;
        font-weight: bold;
    }
    .data_number ul li p{
        margin-top: 12px;
        color: #666;
        font-size: 14px;
    }


    /*  tab  切换 按钮  */
    .tab_btn{
        width: 1200px;
        padding-top: 30px;
        margin: 0 auto;
    }
    .tab_btn ul{
        overflow: hidden;
    }
    .tab_btn_active,.tab_btn_default{
        padding: 0 20px;
        font-size: 16px;
        float: left;
        cursor: pointer;
    }
    .tab_btn_default{
        color: #1a1a1a;
    }
    .tab_btn_active{
        color: #0056ff;
    }

    /* 我的 粉丝页面 */
    .myfans_page{
        overflow: hidden;
        width: 1200px;
        margin: 0 auto;
    }
    .myfans_title{
        padding-top: 30px;
        font-size: 14px;
    }
    .attention_btn{
        border-right: 1px solid #999;
        padding: 0 10px;
        margin-left: 30px;
        float: left;
        color: #666;
    }
    .fans_btn{
        color: #666;
        padding: 0px 10px;
        float: left;
    }
    .my_attention_list{
        width: 100%;
        padding-top: 20px;
        overflow: hidden;
    }
    .my_attention_list li{
        width: 1200px;
        height: 120px;
        padding: 0 96px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border-bottom: 1px solid #dcdcdc;
        position: relative;
        background: #fff;
    }
    .my_attention_list li:first-child{
        border-top: 1px solid #dcdcdc;
    }
    .list_left{
        min-width: 450px;
        height: 91px;
        position: absolute;
        left: 96px;
        top: 26px;
    }
    .list_header{
        width: 60px;
        height: 60px;
        background: #0056ff;
        border: 1px solid #dcdcdc;
        float: left;
        margin-top: 3px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border-radius: 50%;
    }
    .list_nickname{
        overflow: hidden;
        margin: 12px 10px 0 30px;
        color: #1a1a1a;
        font-size: 14px;
        float: left;
    }
    .list_level{
        width: 28px;
        margin-top: 12px;
        height: 14px;
        float: left;
        background: #0056ff;
    }
    .list_user_id{
        overflow: hidden;
        display: inline-block;
        font-size: 14px;
        color: #1a1a1a;
        margin-top: 12px;
        margin-left: 20px;
    }
    .list_sign{
        overflow: hidden;
        margin: 18px 0 0 96px;
        color: #666;
        font-size: 12px;

    }
    .list_right{
        overflow: hidden;
        float: right;
        margin-top: 38px;
        text-align: center;
    }
    .look_live{
        width: 78px;
        height: 34px;
        background: #0056ff;
        font-size: 14px;
        color: #fff;
        line-height: 34px;
        border-radius: 4px;
        float: left;
    }
    .already_attention{
        width: 78px;
        height: 34px;
        font-size: 14px;
        color: #666;
        line-height: 34px;
        border-radius: 4px;
        float: left;
        margin-left: 40px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid #666;
    }
</style>

<section>

    <div class="data_top_box">
        <div class="data_top">
            <img src="https://show-resource.mumov.com/test_header.jpg" alt="" class="data_top_header">
            <div class="data_top_center">
                <div class="data_top_nickname">
                    刘美丽的主场
                </div>
                <div class="user_id">MU ID: 100010</div>

                <div class="signature">
                    个信签名在这里,千万不要错过机会哦!
                </div>
            </div>
            <div class="data_top_right">
                <div class="edit_data">编辑资料</div>
                <div class="data_number">
                    <ul>
                        <li>
                            <span>234</span>
                            <p>关注</p>
                        </li>
                        <li>
                            <span>234354</span>
                            <p>粉丝</p>
                        </li>
                        <li>
                            <span>234345</span>
                            <p>赞</p>
                        </li>
                        <li>
                            <span>234522</span>
                            <p>M值</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="tab_btn">
        <ul>
            <li class="tab_btn_active" id="my_attention_btn">我的关注</li>
            <li class="tab_btn_default" id="my_data_btn">个人信息</li>
            <li class="tab_btn_default" id="charge_center_btn">充值中心</li>
        </ul>
    </div>

    @include('show.pages.modules.personal_myfans')

    @include('show.pages.modules.personal_mydata')

</section>
<script>
    var my_attention_btn =document.getElementById('my_attention_btn');
    var my_data_btn =document.getElementById('my_data_btn');
    var charge_center_btn =document.getElementById('charge_center_btn');
    var my_data_page = document.getElementsByClassName('mydata_page')[0];
    var my_fans_page = document.getElementsByClassName('myfans_page')[0];

    my_attention_btn.onclick = function () {
        this.style.color = '#0056ff';
        my_fans_page.style.display = 'block';
        my_data_page.style.display = 'none';
        my_data_btn.style.color = '#1a1a1a';
    };
    my_data_btn.onclick = function () {
        this.style.color = '#0056ff';
        my_fans_page.style.display = 'none';
        my_attention_btn.style.color ='#1a1a1a';
        my_data_page.style.display = 'block';
    };
    charge_center_btn.onclick = function () {
      window.location.href = 'http://showdev.mumov.com/charge_center'
    };
</script>