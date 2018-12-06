<?php include('public/head.php');?>
    <title>薄利圆商城</title>
    
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!--首页页面样式-->
    <link rel="stylesheet" type="text/css" href="/css/index1.css">
    <!--首页页面样式加底部-->

    
    <!--回收站-->
    <link rel="stylesheet" type="text/css" href="/css/modify.css"><!--css统一样式-->
    <link rel="stylesheet" type="text/css" href="/css/company.css">
	<script language="javascript" src="/js//PCASClass.js"></script>

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


	
<div id="company_plan">
    <div class="n_logo">
        <div class="mgAu1200">
            <h1><a href="/Index/index.html"><img src="/img/cop_index_logo.png" alt=""></a></h1>
        </div>
    </div>
	    <div class="c_i_nav">
        <div class="mgAu1200">
            <dl>
                <dt><a href="javascript:">关于我们</a></dt>
				<dd><a href="/Home/Company/progress.html">发展历程</a></dd><dd><a href="/Home/Company/plan.html">远景规划</a></dd><dd><a href="/Home/Company/idea.html">经营理念</a></dd><dd><a href="/Home/Company/culture.html">企业文化</a></dd><dd><a href="/Home/Company/scale.html">企业规模</a></dd>            </dl>
        </div>
    </div>
    <div class="c_i_bigBg l_p_bigBg" >
        <!--<img src="/img/c_i_bigBg.png" alt="">-->
    </div>
    <div class="c_p_main">
        <div class="p_m_top mgAu1200">
            <div class="m_t_img">
                <img src="/img/p_m_topBg.png" alt="">
            </div>

            <div class="m_t_bot">
                <ul class="clearfix">
                    <li><span>帮助中小卫浴企业解决经营管理和全国市场拓展及网络营销问题</span></li>
                    <li><span>为有责任心和事业心的行业从业商家或者创业人员提供发展机会</span></li>
                    <li><span>向卫浴客户提供产品质量和售后服务长久保障的标准化服务系统</span></li>
                </ul>
            </div>

        </div>
        <div class="p_m_wrap1 mgAu1200">
            <div class="m_w_top">
                <img src="/img/lp_qgsc.png" alt="">
            </div>
            <div class="m_w_bot">
                <img src="/img/lp_zlgh.jpg" alt="">
            </div>
        </div>
        <div class="p_m_wrap2 mgAu1200">
            <img src="/img/lp_botom.png" alt="">
        </div>
        <div class="p_m_bottom mgAu1200">
            <p>Chinese independent brand platform professional</p>
            <p>bathroom</p>
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