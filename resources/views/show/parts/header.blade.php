<style>
   header{
       width: 100%;
       height: 78px;
       -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
       box-sizing: border-box;
       border-bottom: 1px solid #dcdcdc;
   }
   .header{
       width: 1200px;
       height: 78px;
       position: relative;
       margin: 0 auto;
       overflow: hidden;
   }
   .header_logo{
       position: absolute;
       left: 0;
       top: 18px;
   }


   .header_search{
       width: 280px;
       height: 28px;
       margin: 25px auto;
       border-radius: 4px;
       background: #fafafa;
       -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
       box-sizing: border-box;
       border: 1px #dcdcdc solid;
       font-size: 14px;
       position: relative;
   }
   .search_text{
       display: none;
       width: 100%;
       height: 100%;
       position: absolute;
       left: 0;
       top: 0;
       border: 0;
       font-size: 14px;
       border-radius: 4px;
       color: #262627;
       padding-left: 27px;
       line-height: 26px;
       background: url('https://show-resource.mumov.com/gray_search.png') 7px 6px no-repeat;
       background-size: 14px 14px;
       outline: none;
   }
   /*----- placeholder 颜色 ------*/
   :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
       color: #666;
   }
   ::-moz-placeholder { /* Mozilla Firefox 19+ */
       color: #666;
   }
   input:-ms-input-placeholder,
   textarea:-ms-input-placeholder {
       color: #666;
   }
   input::-webkit-input-placeholder,
   textarea::-webkit-input-placeholder {
       color: #666;
   }
   .search_box{
       text-align: center;
       line-height: 26px;
       width: 100%;
       height: 100%;
   }
   .search_span{
       color:#666;
       padding-left: 20px;
       background: url('https://show-resource.mumov.com/blue_search.png') left top no-repeat;
       background-size: 14px 14px;
   }


   .header_right{
       height: 78px;
       overflow: hidden;
       position: absolute;
       right: 0;
       top: 0;
   }
   .phone_wechat{
       width: 30px;
       height: 30px;
       margin: 24px 40px 0 0;
       display: inline-block;
       background: url('https://show-resource.mumov.com/nav_phone.png') no-repeat left top;
       float: left;
   }
   .already_login{
       height: 100%;
       overflow: hidden;
       line-height: 78px;
       font-size: 16px;
       color: #1a1a1a;
       float: left;
   }
   .recharge{
       padding-right: 40px;
       padding-left: 40px;
   }
   .not_login{
       display: none;
   }
    .already_login img{
        width: 32px;
        height: 32px;
        margin-top: 23px;
        border-radius: 50%;
        float: right;
    }
    .already_login a{
        color: #1a1a1a;
    }

</style>
<header>
    <div class="header">
        <img src="https://show-resource.mumov.com/nav_logo.png" class="header_logo">
        <div class="header_search">
            <input type="text" class="search_text" placeholder="搜索"/>
            <div class="search_box">
                <div class="text_box">
                    <span class="search_span">搜索</span>
                </div>
            </div>
        </div>
        <div class="header_right">
            <div class="phone_wechat"></div>
            <div class="already_login">
                <a href="" class="">关注</a>
                <a href="" class="recharge">充值</a>
                <img src="" alt="" class="">
            </div>
            <div class="not_login">
                登录
            </div>
        </div>
    </div>
</header>

<script>
    var search_out = document.getElementsByClassName('header_search')[0];
    var search_text = document.getElementsByClassName('search_text')[0];
    var seach_box = document.getElementsByClassName('search_box')[0];
    search_out.onclick = function () {
        seach_box.style.display = 'none';
        search_text.style.display = 'block';
        search_text.focus();
    }
    search_text.onblur = function () {
        if(search_text.value == ''){
            seach_box.style.display = 'block';
            search_text.style.display = 'none';
        }
    }

</script>