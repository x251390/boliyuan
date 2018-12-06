<?php include('public/head.php');?>
    <title>薄利圆商城</title>
     <link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/index1.css">
    <link rel="stylesheet" type="text/css" href="/css/modify.css"><!--css统一样式-->
    <link rel="stylesheet" type="text/css" href="/css/company.css">
	<script language="javascript" src="/js/PCASClass.js"></script>
<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/js/PCASClass.js"></script> <!--分页-->
 <link rel="icon" type="image/png" href="/img/favicon.ico"> <!--商城图标-->
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
   dd, dl, dt {
    margin: 0;
    padding: 0;
    line-height: 40px;
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
 padding-top: 0px;
    width: 150px;
    height: 125px;
    text-align: center;
}

#log_text img {
    width: 322px!important;
    height: 50px;
    display: inline-block;
    margin-left: -100px;
}

#log_text {
    width: 320px;
    height: 50px;
    float: left;
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
</div>







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
    <div class="c_i_bigBg p_d_bigBg" >

    </div>
    <div class="p_d_mianBg">
        <div class="p_d_mian mgAu1200">
            <div class="d_m_title">
                <img src="/img/pd_txt1png.png" alt="">
            </div>
            <div class="d_m_txt1">

                <dl>
                    <dt>服务说明</dt>
                    <dd class="mgb10">
                        1、供应商在接到消费者订单后七十二小时之内（特殊原因不能够及时发货的需第一时间向消费者进行说明），负责及时准确的按照薄利圆平台提供的物流公司将货物配送至消费者订单收
                        <span class="pdl23">货地址所在区域服务中心（若遇平台还没有设立线下区域服务中心的客户订单，供应商负责按照薄利圆平台提供的物流公司将货物直接配送至消费者平台订单收货地址）。</span>
                    </dd>
                    <dd class="mgb10">
                        2、区域服务中心在收到平台供应商发送到服务中心的平台订单货物后，按照消费者具体收货地址及时向消费者提供周到、细致、专业的免费送货上门服务。
                    </dd>
                    <dd class="mgb10">3、距离区域服务中心超过20公里以上里程且单次单笔货物订单金额不足1000元的交通不便乡镇、农村等距离较偏远区域的消费者订单，消费者按照超出里程数“1元/公里”标准象征性支
                        <span class="pdl23">付送货上门服务费用，或者将货物免费发往区域服务中心所在地能够达到消费者所在乡镇的区域服务中心所在地货运部。</span>
                    </dd>
                    <dd class="mgb10">
                        4、消费者单次单笔订单金额达到5000元以上的乡镇、农村客户，区域服务中心必须提供免费送货上门服务，或同一天同一乡镇（农村）区域累计订单金额达到5000元以上的乡镇、农村客
                        <span class="pdl23">户，区域服务中心必须提供免费送货上门服务。</span>
                    </dd>
                    <dd>
                        5、由于消费者提供的收货地址不准确，或者与消费者产品安装地址不符合的其他送货服务要求，由区域服务中心和消费者按照当地区域相关标准自行协商收取相关服务费用。
                    </dd>
                </dl>
                <dl>
                    <dt>消费者保障</dt>
                    <dd>薄利圆区域代理服务中心未依照该服务承诺标准和规范向消费者提供送货入户服务的，消费者有权向薄利圆要求支付500元/单的服务违约金，该违约金将以现金或者积分形式支付至消费者购买该商品
                        的薄利圆账户。</dd>
                </dl>
                <dl>
                    <dt>特殊事项</dt>
                    <dd>1、薄利圆商城未设立区域服务中心的消费者订单，暂不向消费者提供送货入户服务，由消费者自行提货，敬请消费者的谅解。</dd>
                    <dd>2、薄利圆商城未提供送货入户服务的消费者订单，商城将给予消费者订单总金额3%的服务补偿金，服务补偿金由系统自动进行处理后在消费者的付款金额中减除。</dd>
                </dl>
            </div>
        </div>

    </div>

</div>
<?php include('public/footer.php');?>
<?php include('public/footer-bottom.php');?>












<script type="text/javascript">
 var $nav_dd=$('.c_i_nav dl dd');	

		$nav_dd.eq(0).addClass('active').siblings().removeClass('active');
</script>
</html>