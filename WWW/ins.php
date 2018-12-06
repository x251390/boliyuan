
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
    <div class="c_i_bigBg p_in_bigBg" >

    </div>
    <div class="mgAu1200 p_in_mian">
        <div class="in_m_title">
            <img src="/img/pin_txt1.png" alt="">
        </div>
        <div class="in_m_wrap clearfix">
            <div class="m_w_left">
                <dl>
                    <dt>服务说明</dt>
                    <dd>1、对于在薄利圆商城有安装需求的消费者订单，区域服务中心按照平台向消费者承诺的服务时间或者消费者的安<span class="pdl23">装施工进度及时提供符合标准和安装规范的产品安装服务。</span></dd>
                    <dd> 2、消费者原则上必须提前24小时向当地区域服务中心发出安装服务预约请求和指令。</dd>
                    <dd> 3、产品安装服务人员要求消费者支付其他费用的，消费者有权直接拒绝并且及时向薄利圆商城总部客服中心进行<span class="pdl23">投诉，薄利圆商城将给予消费者特殊奖励和补偿。</span></dd>
                    <dd> 4、消费者需要的薄利圆区域服务中心提供其他特殊服务事项，由消费者与区域服务中心自行协商。
                    </dd>
                </dl>
                <dl>
                    <dt>消费者保障</dt>
                    <dd>  1、薄利圆区域服务中心未提供上门安装服务的，薄利圆除向消费者支付平台安装费用标准2倍的赔偿外，需向消 <span class="pdl23">费者支付1000元/单的违约金，该违约金将以现金或者积分形式支付至消费者购买该商品的薄利圆账户。</span></dd>
                    <dd>2、薄利圆区域服务中心向消费者提供的安装服务不符合产品安装规范的，除全额退换消费者安装费用外，需向消<span class="pdl23">费者支付500元/单的违约金，该违约金将以现金支付至消费者购买该商品的薄利圆账户。</span></dd>

                </dl>
                <dl>
                    <dt>特殊事项</dt>
                    <dd>1、薄利圆商城所公示的产品安装服务费为商城所销售的单件产品安装服务收费标准。</dd>
                    <dd>2、商城客户单次订单安装服务费之和低于80元/次的按照80元/次进行收取（商城客户在商城支付的安装服务费<span class="pdl23">不足80元/  
                        次的差额部分由薄利圆区域服务中心在商城客户处收取现金），商城客户单次订单安装服务费之和</span><span class="pdl23">超过80元/次的商城客户无需再次支付安装服务费用给薄利圆区域服务中心。</span></dd>
                    <dd>3、商城产品安装涉及的辅料及配件最好由商城客户自行采购，在预约安装之前敬请详细咨询当 地服务中心安装<span class="pdl23">该产品所需的辅料及配件名称和数量，以免延误工期。由于客户辅料和配件不齐全导致的再次上门服务，需额</span><span class="pdl23">外加收50元/次的
                       上门服务费用。</span></dd>
                    <dd>
                        4、商城客户需要薄利圆区域服务中心提供辅料及配件的，商城客户必须与服务中心确认自身采购的辅料及配件名<span class="pdl23">称和数
                        量，以及服务中心提供的辅料及配件供货价格和合计金额等全部事宜，辅料及配件定价与薄利圆商城无关。</span>
                       
                    </dd>
                    <dd>
                        5、薄利圆商城产品安装需要的安装工具由薄利圆区域服务中心或安装人员免费提供，并无工具租金及使用费等其
                        <span class="pdl23">他费用。</span>
                        
                    </dd>
                    <dd>
                        6、薄利圆区域服务中心安装服务收费超过平台承诺标准的，或者所提供的辅料及配件价格明显高于当地市场销售 <span class="pdl23">。价格用
                       的，消费者可以向薄利圆商城客户部门进行投诉。经过核实情况属实的，薄利圆商城将给予商城客</span><span class="pdl23">户500元/次用。的特殊奖励。</span>
                    </dd>
                    <dd>
                        7、薄利圆商城购货客户区域内暂未设立薄利圆区域服务中心的，薄利圆商城暂不提供产品安装服务，敬请消费者 <span class="pdl23">的谅解！</span>
                    </dd>
                    
                </dl>
            </div>
            <div class="m_w_right">
                <img src="/img/pin_mianl.png" alt="">
            </div>
        </div>
    </div>



</div>
<?php include('public/footer.php');?>
<?php include('public/footer-bottom.php');?>
	

<script type="text/javascript">
 var $nav_dd=$('.c_i_nav dl dd');	

		$nav_dd.eq(1).addClass('active').siblings().removeClass('active');
</script>
</html>