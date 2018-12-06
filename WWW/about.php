<?php include('public/head.php');?>
    
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/index1.css">
   <link rel="stylesheet" type="text/css" href="/css/modify.css"><!--css统一样式-->
    <link rel="stylesheet" type="text/css" href="/css/company.css">
	<script language="javascript" src="/js/PCASClass.js"></script>
<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/js/PCASClass.js"></script> <!--分页-->


  <title>薄利圆商城</title>
    <link rel="icon" type="image/png" href="/images/favicon.ico"> <!--商城图标-->
    	
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
    <div class="c_i_bigBg c_p_bigBg">
        
    </div>
    <div class="c_i_progrecc clearfix">


        <div class="mgAu1200 cp_title">
            <img src="/img/cp_txt1.png" alt="">
        </div>
        <div class="i_p_txt mgAu1200">
            <div class="psi_title">
                <h3>
                   发展历程
                </h3>
            </div>
            <div class="c_p_main clearfix">
                <div class="p_m_txtl">
                    <div class="m_t_wrap">
                        <h4>2016年</h4>
                        <p>公司组建“薄利圆：中国自主品牌·专业卫浴平台”创业团队，倾力打造国内卫浴行业自主品牌
                            全类别卫浴产品专业细分领域综合服务类电子商务流通平台。
                        </p>
                    </div>
                    <div class="m_t_wrap">
                        <h4>2014年</h4>
                        <p>公司投资金顿三星级商务酒店，为设计业务跨行业发展奠定了坚实基础。</p>
                    </div>
                    <div class="m_t_wrap">
                        <h4>2013年</h4>
                        <p>公司搬迁至青白江大港建材城，以“更高、更远、更强”作为发展目标。</p>
                    </div>
                    <div class="m_t_wrap">
                        <h4>2011年</h4>
                        <p>公司搬迁至驷马桥圣地亚大厦，办公环境实现标准化升级。</p>
                    </div>
                    <div class="m_t_wrap">
                        <h4>2008年</h4>
                        <p>公司搬迁至熊猫大道，建立摄影棚，实现一体化客户服务。
                        </p>
                    </div>
                    <div class="m_t_wrap">
                        <h4>2006年</h4>
                        <p>公司办公地址搬迁至金牛区立体大厦，办公环境极大改善。</p>
                    </div>
                    <div class="m_t_wrap">
                        <h4>2004年</h4>
                        <p>公司设计师队伍不断壮大，建立设计部，提高专业化水平。
                        </p>
                    </div>
                    <div class="m_t_wrap">
                        <h4>1999年</h4>
                        <p>成都正海文化传播有限公司正式成立。
                        </p>
                    </div>
                </div>
                <div class="p_m_txtr">
                    <img src="/img/comp_txt3.png" alt="">
                </div>
            </div>
        </div>
        <div class="i_p_botom"></div>

    </div>
</div>

<?php include('public/footer.php');?>
<?php include('public/footer-bottom.php');?>
   
<script type="text/javascript">
		var $nav_dd=$('.c_i_nav dl dd');	
		$nav_dd.eq(0).addClass('active').siblings().removeClass('active');
   
</script>
</html>