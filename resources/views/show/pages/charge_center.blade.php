<style>
    section{
        overflow: hidden;
        background: #fafafa;
    }
    .tab_btn{
        width: 1200px;
        padding-top: 30px;
        margin: 0 auto;
    }
    .tab_btn ul{
        overflow: hidden;
    }
    .tab_btn_default{
        padding: 0 20px;
        color: #0056ff;
        font-size: 16px;
        float: left;
        cursor: pointer;
    }
    .charge_main{
        overflow: hidden;
        width: 1200px;
        margin: 0 auto;
    }
    .charge_title{
        width: 1200px;
        overflow: hidden;
        padding-top: 30px;
        font-size: 14px;
    }
    .charge_btn{
        border-right: 1px solid #999;
        padding: 0 10px;
        margin-left: 30px;
        float: left;
        color: #0056ff;
        cursor: pointer;
    }
    .charge_record_btn{
        color: #666;
        cursor: pointer;
        padding: 0 10px;
        float: left;
    }
    .charge_page,.charge_rocord_page{
        width: 1200px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid #dcdcdc;
        border-right: 0;
        background: #fff;
        border-left: 0;
        padding: 60px 240px;
        margin-top: 20px;
    }
    .charge_rocord_page{
        display: none;
    }
    .td_title{
        min-width: 106px;
        overflow: hidden;
        text-align: right;
        color: #666;
        position: relative;
    }
    .td_main_a,.td_main_b,.td_main_c,.td_main_d{
        width: 594px;
        overflow: hidden;
        font-size: 16px;
        padding-left: 20px;
    }
    .td_main_c{
        color: #0056ff;
    }
    .td_main_a .nickname_box{
        color: #0056ff;
        font-size: 16px;
    }
    .td_main_a .now_ub_box{
        display: inline-block;
        float: right;
    }
    .now_ub{
        color: #0056ff;
    }

    .charge_page tr,.charge_rocord_page tr {
        display: block;
        padding-top: 40px;
        overflow: hidden;
    }
    .td_main_b ul{
        width: 522px;
        overflow: hidden;
    }
    .td_main_b ul li{
        cursor: pointer;
        width: 134px;
        margin-right: 40px;
        margin-bottom: 40px;
        height: 60px;
        float: left;
        border: 1px solid #666;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border-radius: 4px;
        text-align: center;
        font-size: 14px;
    }
    .td_main_b ul .pay_li1{
        background: url('https://show-resource.mumov.com/border1.png') left top no-repeat;
        background-size: 100% 100%;
        border: 0;
    }
    .td_main_b ul li p:first-child{
        margin-top: 11px;
        color: #1a1a1a;
    }
    .td_main_b ul li p:last-child{
        margin-top: 10px;
        color: #666;
    }
    .td_title span{
        position: absolute;
        right: 0;
        top: 0px;
    }
    .ub_text_box{
        overflow: hidden;
    }
    .ub_text_box input{
        width: 308px;
        height: 60px;
        line-height: 60px;
        font-size: 14px;
        border-radius: 4px;
        float: left;
        border: 1px solid #666;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        outline: none;
        padding-left: 10px;
    }
    .ub_text_box span{
        display: block;
        float: left;
        margin-left: 40px;
        line-height: 60px;
        color: #0056ff;
    }
    .wechat_pay{
        width: 146px;
        cursor: pointer;
        height: 60px;
        border: 1px solid #0056ff;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        text-align: center;
        border-radius: 4px;
    }
    .wechat_pay span{
        overflow: hidden;
        height: 30px;
        line-height: 30px;
        padding-left: 40px;
        font-size: 14px;
        color: #666;
        display: inline-block;
        background: url('https://show-resource.mumov.com/wechat_pay_logo.png') left top no-repeat;
        background-size: 30px 30px;
        margin-top: 15px;
    }
    .now_pay{
        width: 168px;
        height: 44px;
        cursor: pointer;
        margin-top: 60px;
        border-radius: 4px;
        background: #0056ff;
        color: #ffffff;
        text-align: center;
        line-height: 44px;
    }
    .mu_deal{
        overflow: hidden;
        margin-top: 20px;
        color: #1a1a1a;
        font-size: 14px;
        font-weight: 500;
    }
    .mu_deal span{
        color: #0056ff;
        cursor: pointer;
    }
    .charge_problems{
        overflow: hidden;
        font-size: 14px;
        color: #1a1a1a;
        margin-top: 40px;
    }
    .charge_problems .span_box{
        margin-left: 20px;
    }
    .span_box span{
        cursor: pointer;
        color: #0056ff;
    }

    .record_box{
        width: 720px;
        overflow: hidden;
    }
    .record_box ul{
        overflow: hidden;
    }
    .record_box ul li{
        width: 100%;
        padding: 0 98px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        font-size: 16px;
        height: 74px;
        border-bottom: 1px dashed #0056ff;
        padding-top: 38px;
    }
    .record_box ul li .first_span{
        color: #666;
    }
    .last_span{
        display: block;
        overflow: hidden;
        float: right;
    }
    .last_span span{
        color: #0056ff;
    }
    .second_span{
        padding: 0 100px;
    }
    .record_charge_btn{
        width: 78px;
        height: 34px;
        background: #0056ff;
        color: #fff;
        line-height: 34px;
        font-size: 16px;
        border-radius: 4px;
        text-align: center;
        margin: 60px auto 0;
        cursor: pointer;
    }


</style>
<section>
    <div class="tab_btn">
        <ul>
            <li class="tab_btn_default" id="charge_center_btn">充值中心</li>
        </ul>
    </div>
    <div class="charge_main">
        <div class="charge_title">
            <div class="charge_btn">充值</div>
            <div class="charge_record_btn">充值记录</div>
        </div>
        <div class="charge_page" id="page1">
            <table>
                <tr>
                    <td class="td_title">当前充值账号:</td>
                    <td class="td_main_a">
                            <span class="nickname_box"><span class="nickname">我就想起个名字 </span> [MU ID:<span class="user_id">100456</span>]</span>
                            <div class="now_ub_box">
                                您的U币余额:
                                <span class="now_ub">
                                    34
                                </span>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td class="td_title"><span>充值金额:</span></td>
                    <td class="td_main_b">
                        <ul class="pay_ul">
                            <li class="pay_li1">
                                <p>60U币</p>
                                <p>¥6.00</p>
                            </li>
                            <li>
                                <p>100U币</p>
                                <p>¥10.00</p>
                            </li>
                            <li>
                                <p>200U币</p>
                                <p>¥20.00</p>
                            </li>
                            <li>
                                <p>500U币</p>
                                <p>¥50.00</p>
                            </li>
                            <li>
                                <p>1000U币</p>
                                <p>¥100.00</p>
                            </li>
                            <li>
                                <p>10000U币</p>
                                <p>¥1000.00</p>
                            </li>
                        </ul>
                        <div class="ub_text_box">
                            <input type="text" placeholder="输入其他U币数量">
                            <span>10U币=1元</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="td_title">应付金额:</td>
                    <td class="td_main_c">
                        6元
                    </td>
                </tr>
                <tr>
                    <td class="td_title"><span>支付方式:</span></td>
                    <td class="td_main_d">
                        <div class="wechat_pay">
                            <span>微信支付</span>
                        </div>
                        <div class="now_pay">
                            立即支付
                        </div>
                        <div class="mu_deal">
                            我已阅读并同意 <span>《MU直播用户充值协议》</span>
                        </div>
                        <div class="charge_problems">
                            充值遇到问题了?
                            <span class="span_box">请联系微信公众号在线客服:<span>在线客服</span></span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="charge_rocord_page" id="page2">
            <table>
                <tr>
                    <td class="td_title">当前充值账号:</td>
                    <td class="td_main_a">
                        <span class="nickname_box"><span class="nickname">我就想起个名字 </span> [MU ID:<span class="user_id">100456</span>]</span>
                        <div class="now_ub_box">
                            您的U币余额:
                            <span class="now_ub">
                                    34
                                </span>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="record_box">
                <ul>
                    <li>
                        <span class="first_span">2016年12月21日 12:09:43</span>
                        <span class="second_span">充值记录</span>
                        <span class="last_span"><span>100</span>U币</span>
                    </li>
                    <li>
                        <span class="first_span">2016年12月21日 12:38:12</span>
                        <span class="second_span">充值记录</span>
                        <span class="last_span"><span>100</span>U币</span>
                    </li>
                    <li>
                        <span class="first_span">2016年12月21日 14:45:43</span>
                        <span class="second_span">充值记录</span>
                        <span class="last_span"><span>100</span>U币</span>
                    </li>
                    <li>
                        <span class="first_span">2016年12月21日 22:39:26</span>
                        <span class="second_span">充值记录</span>
                        <span class="last_span"><span>100</span>U币</span>
                    </li>
                    <li>
                        <span class="first_span">2016年12月21日 10:09:43</span>
                        <span class="second_span">充值记录</span>
                        <span class="last_span"><span>50</span>U币</span>
                    </li>
                </ul>
                <div class="record_charge_btn">充值</div>
            </div>
        </div>
    </div>
</section>
<script>
    var pay_ul = document.getElementsByClassName('pay_ul')[0];
    var lis = pay_ul.getElementsByTagName('li');
    var charge_page_btn = document.getElementsByClassName('charge_btn')[0];
    var record_page_btn = document.getElementsByClassName('charge_record_btn')[0];
    var page1 = document.getElementById('page1')
    var page2 = document.getElementById('page2')
    for(var i = 0; i <lis.length ; i++){
        lis[i].onclick =function () {
            for(var j= 0; j<lis.length;j++){
                lis[j].style.border = '1px solid #666';
                lis[j].style.background = '';
                lis[j].style.backgroundSize = ' 0 0'
            }
            this.style.border = 0;
            this.style.background = 'url("https://show-resource.mumov.com/border1.png") left top no-repeat';
            this.backgroundSize = '100% 100%';
        }
    }
    charge_page_btn.onclick = function () {
        this.style.color = '#0056ff';
        record_page_btn.style.color = '#666';
        page1.style.display = 'block';
        page2.style.display = 'none';
    };
    record_page_btn.onclick = function () {
        this.style.color = '#0056ff';
        charge_page_btn.style.color = '#666';
        page1.style.display = 'none';
        page2.style.display = 'block';

    }

</script>

