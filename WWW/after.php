

<?php include('public/head.php');?>
    <title>薄利圆商城</title>
    
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!--首页页面样式-->
    <link rel="stylesheet" type="text/css" href="/css/index1.css">
    <!--首页页面样式加底部-->

    
    <!--回收站-->
    <link rel="stylesheet" type="text/css" href="/css/modify.css"><!--css统一样式-->
    <link rel="stylesheet" type="text/css" href="/css/company.css">
	<script language="javascript" src="/js/PCASClass.js"></script>

	<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/js/PCASClass.js"></script> <!--分页-->

    <!--搜索-->

    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/less./js/2.5.3/less.min.js"></script>-->


   
</head>

<body>

<style type="text/css">
    #ensconce_top{position: fixed;width: 100%;height: 50px;z-index: 999;left: 0;top: 0;display: none;border-bottom: 1px solid #dadada;background-color: #fff;-moz-box-shadow: 2px 2px 2px rgba(0,0,0,.2);box-shadow: 2px 2px 2px rgba(0,0,0,.2);}
    #ensconce_log{width: 1200px;height: 50px;margin: auto;}
    #log_text{width: 200px;height: 50px;float: left;}
    #log_text img{width: 322px;height: 50px;margin-left: -100px;}
    #top_search{width: 550px;height: 35px;float: left;margin-left: 112px;margin-top: 7px;overflow: hidden;}
    #top_search input{background-color: #efefef;width: 490px;height: 35px;border: 1px solid #efefef;line-height: 35px;font-size: 14px;float: left;}
    #top_search input::placeholder{font-size:14px; color:rgb(153, 153, 153);}
    #click_search{float: left;width: 50px;height: 35px;background-color: #c8202d;cursor: pointer;}
    #click_search img{width: 30px;height: 30px;margin-top: 3px;margin-left: 10px;}
    #recurrence{width: 141px;height: 40px;float: right;line-height: 40px;margin-top: 5px;text-align: center;background-color: #c8202d;}
    #recurrence a {color: #fff;padding: 10px 35px 10px 42px;}
    #recurrence a:hover {background-color: #da251d}
</style>
<div id="ensconce_top">
    <div id="ensconce_log">
        <div id="log_text"><a href="/Home/Index/index.html"><img src="/img/boliyuan.jpg"></a></div>
        <div id="top_search">
            <form id='submit_form' action="/Second/second_two.html" method="post">
                <input type="text" placeholder="热门搜索" name="key" />
                <div id="click_search"><img src="/img/search.png"></div>
            </form>
        </div>
        <div id="recurrence"><a href="javascript:history.go(-1)">返回上一页</a></div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        //绑定滚动条事件
        $(window).bind("scroll", function () {
            var sTop = $(window).scrollTop();
            var sTop = parseInt(sTop);
            if (sTop >= 130) {
                if (!$("#ensconce_top").is(":visible")) {
                    try {
                        $("#ensconce_top").slideDown();
                    } catch (e) {
                        $("#ensconce_top").show();
                    }
                }
            }
            else {
                if ($("#ensconce_top").is(":visible")) {
                    try {
                        $("#ensconce_top").slideUp();
                    } catch (e) {
                        $("#ensconce_top").hide();
                    }
                }
            }
        });

        $('#click_search').click(function(){
           $("#submit_form").submit();
        });
    });
</script>

<link rel="stylesheet" type="text/css" href="/css/popup.css"/><!--弹窗-->
<link rel="stylesheet" href="/css/denglu.css">
<style>
    .thetopbox-popover {
        z-index: 9999;
        position: fixed;
        top: 20%;
        left: 40%;
        width: 350px;
        height: auto;
        overflow: hidden;
        display: none;
        background-color: #fff;
    }

    .thetopbox-mask {
        z-index: 9998;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #5f5d5e;
        opacity: 0.4;
        filter: alpha(opacity=40);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=40)";
        display: none;
    }

    .indexdengl {
        position: relative;
        float: left;
        background-color: #fefefe;
        z-index: 99;

    }

    .thetop-poptit .loginclose {
        position: absolute;
        top:10px;
        right:10px;
        color: #000;
        /* padding: 5px;
        margin: -36px -103px; */
        font: bold 16px/14px simsun;
        text-shadow: 0 1px 0 #ddd;
        z-index: 100;
    }

    .thetop-poptit {
        float: right;
        margin-right: 5px;
        margin-top: 5px;
    }
      .bz ul li {
    float: left;
    padding: 0;
    width: 150px;
    height: 125px;
    text-align: center;
}
      dd, dl, dt {
    margin: 0;
    padding: 0;
    line-height: 40px;
}
    #log_text {
    width: 320px;
    height: 50px;
    float: left;
}
    
    .footer{
	margin: 0;
}
h1{
	margin: 0!important;
}
</style>
<div style="z-index:8858;position: relative;">
    <div class="thetopbox-popover">
    <form action="/Login/login.html" method="post" onsubmit="return check_form();">
        <div class="thetop-poptit">
            <a href="javascript:;" title="关闭" class="loginclose">×</a>
        </div>
        <div class="indexdengl">
            <span class="mmdl"> 用户登录</span>
            <span class="mmdl2">
              <img src="">
            </span>
            <div class="mmlist1 list121">
              <span class="mmname">
                <img src="/img/namelogo.png">
              </span>
                <input type="text" name="madmname" placeholder="手机/会员/邮箱" id="madmname" class="madmname" maxlength="20">
            </div>
            <div class="mmlist1">
              <span class="mmadm">
                <img src="/img/mmlogo.png">
              </span>
                <input type="password" name="madmmm" placeholder="请输入密码" id="madmmm" class="madmmm" maxlength="16" onpaste="return false" oncontextmenu="return false" oncopy="return false" oncut="return false">
            </div>
            <div class="mmlist2">
                <input type="button" value="登录" url="/Home/Index/login.html" style="outline: none;border: none" id="login"/>
            </div>
            <div class="mmbottom">
                <div class="mmgl">
                    <a href="/Home/Login/forgetpassword.html" class="mmglb">忘记密码</a>
                    <a href="/Home/Enroll/index.html" target="_blank">免费注册</a>
                </div>

            </div>
        </div>
    </form>
    </div>
    <div class="thetopbox-mask"></div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.user_pop').click(function () {
            $('.thetopbox-mask').fadeIn(100);
            $('.thetopbox-popover').slideDown(200);
        });
        //关闭点击
        $('.thetop-poptit .loginclose').click(function () {
            $('.thetopbox-mask').fadeOut(100);
            $('.thetopbox-popover').slideUp(200);
        });
        //登陆点击
        $("#login").click(function(){
            var madmname = $("#madmname").val();
            var madmmm = $("#madmmm").val();
            var url = $(this).attr('url');
            var controller=window.location.pathname;
            var data={madmname:madmname,madmmm:madmmm,controller:controller};
            if (madmname == "") {
                alert("帐号不能为空!");
                return false;
            }
            if (madmmm == "") {
                alert("密码不能为空!");
                return false;
            }
            $.post(url,data,function(res){
                if(res==0){
                    alert('帐号不存在！');
                }else if(res==1){
                    history.go(0);
                }else if(res==2){
                    alert('密码错误！');
                }else{
                    history.go(0);
                }
                //console.log(res);
            });
        });
        //获取平台logo图片
         $.post("/Home/login/logo.html",'',function(res){
            //console.log(res)
            if(res){
                $('.mmdl2 img').attr('src',res);
            }else{
                $('.mmdl2').remove();
            }
        });
        
        
    });
</script>
<?php include('public/header1.php');?>
</header>
<script>
    $("#login_out").click(function(){
        var url=$(this).attr('url');
        $.post(url,'',function(){
            window.location.reload();
        })
    });
    $(function(){                                //关注薄利圆网站
            function attention(){
                var url=$(this).attr('url');
                var supply_id=$(this).attr('supply_id');
                $.post(url,{supply_id:supply_id},function(res){
                    if(res ==0 ){
                        $('.thetopbox-mask').fadeIn(100);
                        $('.thetopbox-popover').slideDown(200);
                    }else if(res ==1 ){
                        alert('已经关注!');
                    }else if(res ==2 ){
                        alert('关注成功!');
                    }else if(res ==3 ){
                        alert('关注失败!');
                    }
                });
            }
            $(".cooect_site").click(function(){
                attention()
            })
    })
</script>



<div id="company_manment">
    <div class="n_logo">
        <div class="mgAu1200">
            <h1><a href="/Index/index.html"><img src="/img/cop_index_logo.png" alt=""></a></h1>
        </div>
    </div>
    <div class="c_i_nav">
        <div class="mgAu1200">
            <dl>
                <dt><a href="javascript:">服务承诺</a></dt>
                              	<dd><a href="/Serve/dispatching.html">产品配送</a></dd><dd><a href="/Serve/install.html">产品安装</a></dd><dd><a href="/Serve/replace.html">产品退换</a></dd><dd><a href="/Serve/support.html">售后保障</a></dd>            </dl>
        </div>
    </div>
    <div class="c_i_bigBg a_ss_bigBg" >

    </div>
    <div class="mgAu1200 a_ss_mian">
        <div class="ss_m_title">
            <img src="/img/ass_txt1.png" alt="">
        </div>
        <div class="ss_m_wrap clearfix">

           <dl>
               <dt>服务说明</dt>
               <dd>1、薄利圆商城承诺所有商品均为正品。</dd>
               <dd>2、薄利圆商城有责任和义务对于入驻平台的供应商资质、产品质量和服务能力进行严格把关。</dd>
               <dd>3、薄利圆商城承诺所有消费者在平台购买的产品出现的质量问题和服务问题，薄利圆商城承担先行赔付责任。</dd>
               <dd>4、假一赔十：若消费者购买到非正品商品，消费者有权获得退回实际支付的商品价款并增加九倍赔偿消费者受到的损失。</dd>
               <dd>5、质保服务，是指薄利圆商城承诺当消费者在平台购买的相应商品的质量保证期内，若该商品在指定质保期内出现质量问
                   <span class="pdl23">题，则薄利圆将根据商品的实际故障情况，在规定时间内向消费者提供维修、补寄零配件或更换全新商品，以确保消费</span>
                   <span class="pdl23">者能够正常使用该商品的后续保障服务，因产品自身质量问题而给消费者造成损失的，由薄利圆商城进行相关赔付的处</span>
                   <span class="pdl23">理。</span>
                   </dd>
           </dl>
            <dl>
                <dt>消费者保障</dt>
                <dd>1、薄利圆商城区域服务中心应提供但未提供或未在规定时间内提供消费者购买产品相应质量保证服务的，薄利圆商城需向
                    <span class="pdl23">消费者支付应提供质保服务商品的实际成交金额的20%作为违约金，该违约金将以现金或者积分形式支付至消费者购买</span>
                    <span class="pdl23">该商品的薄利圆账户。</span>
                </dd>
                <dd>2、消费者在薄利圆商城（99boliyuan.com）购买的商家出售的商品，在收到货物后，如消费者认为该商品为假冒（包括
                    <span class="pdl23">
                         盗版）商品或非原厂正品、假冒材质成份商品（其中假冒商品、假冒材质成份商品的定义以薄利圆规则规定为准），
                    且消费者与商家协商未果的前提下，消费者在薄利圆指定期间内发起针对商家的维权，申请消费者保障赔付时，如薄
                    利圆判定消费者赔付申请成立，将向消费者退回其实际支付的商品价款，并增加赔偿其受到的损失，增加赔偿的金额
                    为消费者实际支付商品价款的九倍，并由商家承担维权所涉商品所有物流费用。例：商品价格1元，交易判定赔付成立，
                    则退回买家1元，并增加赔偿消费者9元。该赔偿金将以现金或者积分形式支付至消费者购买该商品的薄利圆账户。
                    </span>
                   </dd>
                <dd>
                    3、商家依据平台规则承担赔偿责任后，并不免除其依照国家有关法律法规依法应当承担的赔偿责任。如国家相关法律法规
                    <span class="pdl23">规定的赔付标准高于平台规则赔付标准的，买家就赔偿不足部分可通过法律途径继续向商家追偿。</span>

                </dd>
            </dl>
        </div>
    </div>



</div>

<?php include('public/footer.php');?>
<?php include('public/footer-bottom.php');?>
	

<script type="text/javascript">
 var $nav_dd=$('.c_i_nav dl dd');	

		$nav_dd.eq(3).addClass('active').siblings().removeClass('active');
</script>
</html>