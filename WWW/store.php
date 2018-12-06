<?php include('public/head.php');?>
    <title>薄利圆商城</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css"><!--首页页面样式-->
    <link rel="stylesheet" type="text/css" href="/css/index.css"><!--首页页面样式加底部-->
    <link rel="stylesheet" type="text/css" href="/css/popup.css"/><!--弹窗-->
    <link rel="stylesheet" type="text/css" href="/css/proShop.css"/><!--弹窗-->
    <link rel="stylesheet" type="text/css" href="/css/cedaohang.css"><!--侧导航栏样式-->
    <link rel="stylesheet" type="text/css" href="/css/news 11.css"><!--页面样式图-->
    <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/js/lunbo2.js"></script><!--顶部图轮播-->
    <script type="text/javascript" src="/js/fanhui.js"></script><!--返回顶部条-->
    <script type="text/javascript" src="/js/cedaohang.js"></script><!--侧导航栏-->
   
    <style>
    .c_vodeo{height: 516px;margin-top: 30px;}
    .carousel{width: 100%;height: 511px;overflow: hidden;}
    .carousel_box{width: 1920px;height: 511px;position:relative;left: -960px;margin-left: 50%;overflow: hidden;z-index: 100;}
    .carousel_box:hover .or_so{display: block}
    .pic_box{height: 511px;transition: all 800ms ease;transform: translate3d(0px, 0px, 0px);}
    .pic_box img{width: 1920px;height: 511px;float: left;}
    .circle_box{position: absolute;height: 20px;z-index: 5;margin-top: -30px;margin-left: 50%;}
    .cir{width: 10px;height: 10px;margin-left: 10px;float: left;background-color: #0DB7E5;border-radius: 10px;z-index: 10;}
    .or_so{position: absolute;z-index: 5;margin-top: 250px;height: 0px;width: 1920px;display: none;}
    .left_text{width: 40px;height: 80px;float: left;margin-left: 20%;}
    .right_text{width: 40px;height: 80px;float: right;margin-right: 20%;}
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
    width: 320px!important;
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
</head>
<body>
<!-- 顶部隐藏部分 -->

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

<div class="head">
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


    <div class="tou">
    <div class="logo" style="float: left">
        <a href="/Home/Index/index.html">
            <img src="/img/599e7b631f4e3.png">
        </a>

    </div>

    <div class="qijiann">

        <div class="qijian1">
            <p class="qijian2"><a href="">华莱格赛<br/></a></p>
            <p class="qijian2"><a href=""><span>单品专营店</span></a></p>
            <p class="qijian3"><a href="">品牌直销</a></p>
            <div class="qijianduo">
                <div class="qijianduo_content">
                    <div class="store_namoc">
                        <div class="store_boxleft">
                            <div class="left_store_one">
                                <p>
                                    <span class="str_storetitle">
                                        店铺动态评分
                                    </span>
                                </p>
                            </div>
                            <div class="left_store_two">
                                <p>
                                    <span>描述相符：</span>
                                    <span>0</span>
                                </p>
                                <p>
                                    <span>服务态度：</span>
                                    <span>0</span>
                                </p>
                                <p>
                                    <span>物流态度：</span>
                                    <span>0</span>
                                </p>
                            </div>
                        </div>
                        <div class="store_boxright">
                            <div class="left_store_one">
                                <p>
                                    <span class="str_storetitle">
                                        与同行业相比
                                    </span>
                                </p>
                            </div>
                            <div class="left_store_two">
                                <p>
                                                                            <span class="store_sketch1">
                                            <img src="/img/flat_ph1.png" style="padding-top: 8px;">
                                        </span>
                                        <span>持平 ——</span>
                                                                        </p>
                                <p>
                                                                            <span class="store_sketch1">
                                            <img src="/img/flat_ph1.png" style="padding-top: 8px;">
                                        </span>
                                        <span>持平 ——</span>

                                                                        </p>

                                <p>
                                                                            <span class="store_sketch1">
                                            <img src="/img/flat_ph1.png" style="padding-top: 8px;">
                                        </span>
                                        <span>持平 ——</span>

                                                                        </p>
                            </div>
                        </div>
                    </div>
                    <div class="store_service">
                        <p>
                        <span class="service_storetitile">
                                店铺服务
                            </span>
                        </p>
                        <p>
                            <span class="service_names">
                                掌柜
                            </span>
                            <i>:</i>
                            <span>华莱格赛单品专营店</span>
                        </p>
                        <p>
                            <span class="service_names">
                                客服
                            </span>
                            <i>:</i>
                            <span>
                                <a href="">
                                    <img src="/img/flat_ph5.png">
                                </a>
                            </span>
                        </p>
                        <p>
                            <span class="service_names">
                                开店时间
                            </span>
                            <i>:</i>
                            <span class="boliyuan_starttime">
                                薄利圆3年店
                            </span>
                        </p>
                        <p>
                            <span class="service_names">
                                所在地
                            </span>
                            <i>:</i>
                            <span>
                                四川成都
                            </span>
                        </p>
                        <p>
                            <span class="service_names">
                                证件审核
                            </span>
                            <i>:</i>
                            <span>
                                <img src="/img/flat_ph4.png">
                            </span>
                        </p>
                    </div>
                    <div class="store_link">
                        <div class="store_into1">
                            <a href="/Index/getShopTypeById/supply_id/2.h.html">进店逛逛</a>
                        </div>
                        <div class="store_into2">
                            <a href="#" onclick="into('薄利园','/Flagship/index/supply_id/2.h.html')">收藏本店</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="qijian4">
            <ul class="qijian5">
                <li class="qijian6">描述</li>
                <li style="margin-top: 2px">
                                                    <img src="/img/xiaojian1.png" alt=""/>                </li>
                <li class="qijian7"><a href="">0</a></li>
            </ul>

            <ul class="qijian5">
                <li class="qijian6">服务</li>
                <li style="margin-top: 2px">
                                                    <img src="/img/xiaojian1.png" alt=""/>                </li>
                <li class="qijian7"><a href="">0</a></li>
            </ul>

            <ul class="qijian5">
                <li class="qijian6">物流</li>
                <li style="margin-top: 2px">
                                                    <img src="/img/xiaojian1.png" alt=""/>                </li>
                <li class="qijian7"><a href="">0</a></li>
            </ul>
        </div>


    </div>
    <div class="qijian10">
        <p class="qijian11"><a href="">手机逛</a></p>
        <p class="qijian12"><a href=""><img src="/img/fangkuang.png" alt=""/></a></p>
        <b class="shouguang"><a href=""><img src="/img/wei.png" alt=""/></a></b>
    </div>

    <div class="searchh" style="position: relative;">
        <form name="searchform" method="post" action="/Second/second_two.html" enctype="multipart/form-data">
            <span class="spriteIcon _psshop_head" style="margin-top: 0px; margin-top: 0px\9;"></span>
            <input class="inp_srh" name="key" placeholder="" onkeyup="likeQuery(this)" autocomplete="off" id="key"> 
            <div class="engine-hint-list">
                    <ul> </ul>
                </div>
            <input class="btn_srh" type="submit" name="type" value="搜索">
        </form>
    </div>
    <div class="xiaoshou">
        <ul class="sousuo_listt">
            <li><a href="/Second/second_two/key/%E6%B5%B4%E5%AE%A4%E6%9F%9C.html">浴室柜</a></li>
            <li><a href="/Second/second_two/key/%E5%8E%A8%E5%8D%AB%E6%8C%82%E4%BB%B6.html">厨卫挂件</a></li>
            <li><a href="/Second/second_two/key/%E9%9D%A2%E7%9B%86.html">面盆</a></li>
            <li><a href="/Second/second_two/key/%E9%BE%99%E5%A4%B4.html">龙头</a></li>
            <li><a href="/Second/second_two/key/%E6%B7%8B%E6%B5%B4.html">淋浴</a></li>
            <li><a href="/Second/second_two/key/%E8%8A%B1%E6%B4%92.html">花洒</a></li>
            <li><a href="/Second/second_two/key/%E4%BA%94%E9%87%91%E9%85%8D%E4%BB%B6.html">五金配件</a></li>
        </ul>
    </div>
</div>
<script>
     //<Start 搜索框>
    function likeQuery(This){
        var key=$(This).val();
        var list_show=$('.engine-hint-list>ul');
        var list_div=$('.engine-hint-list');
        var cha_box=$('#key');
        var cha_len=cha_box.length;
        var sous_box=$(".sousuo_box>form>input[type='submit']");
        if(key!=''){
            $.post('/Index/likeQuery.html',{key:key},function(res){
                var obj = eval('(' + res + ')');
                var obj = JSON.parse(res);
                var length=obj.length;
                var htmlStr='';
                for (var i=0;i<length;i++){
                    htmlStr+= '<li class="keySerch">'+obj[i]["shop_name"]+'</a></li>';
                }
               if(length > 0){
                    list_show.html(htmlStr);
                }else{
                    list_show.html('');  
                }
                $(".keySerch").on('click',link);
                $(function(){
                    $('body').bind('click',function(e){
                        var target=$(e.target);
                        if(target.closest('.engine-hint-list').length ==0){
                            $('.engine-hint-list').hide();
                        }
                    })
                    $('.engine-hint-list').show();
                })
            });
        }else{
           list_show.html(''); 
        }

    }
     $('form[name=searchform]').submit(function(){
         if(!$('.inp_srh').val()){
             return false;
         }

     });

    function link(){
        var choose=$(this).html();
        $("#key").val(choose);
        $('.engine-hint-list>ul>li').hide();
    }   
</script>
</div>
<input type="hidden" name="" value="" class="lanBg"/>
<input type="hidden" name="" value="" class="shopBg"/>
<div class="contain">
    <div class=" c_main clearfix poRe" style="background:url(/img/598e9d853221a.jpg) no-repeat;background-size:100% 100%;">
        <input type="hidden" name="fontcolor" value="" id="fontcolor">
<div class="beijing_zyti">
    <ul class="beijing_zy">
        <li class="logoda">
            <a href="/Exclusive/index/supply_id/2.h.html" class="logoda_nva">
                <img src="/img/15217014731000.png"
                     width="301px" alt=""/></a>
            <div  class="flag_logo_rig">
                <span>单品专营店</span>
                <a class="attentionShop logoda_nva1" id="bays" supply_id="2.h" >
                    关注本店                </a>
            </div>
        </li>
        <li class="searcchh">
            <form name="searchform" method="post" action="/Flagship/searchShop.html">
            	<span class="spriteIcon _sss"></span>
                <input name='ecmsfrom' type='hidden' value='9'>
                <input type="hidden" name="show" value="title,newstext">
                <input class="inp_srh" name="keyboard" placeholder="仿古浴室柜">
                <input type="hidden" name="supply_id" value="2.h">
                <input class="btn_srh" type="submit" name="submit" value="搜本店">
            </form>
        </li>
    </ul>
</div>
<div class="beijing6">
    <div class="beijing7">
        <ul class="beijing8">
            <!--<li class="dandu white_bg" style="height: 39px">
                <a class="all_showyy_1">所有商品</a>
                <div class="show_all_newest">
                    <div class="goods_titfor">
                            <div class="two_titfor">
                                <a href="/Flagship/getGoodsByColumnId/supply_id/2/two_id/239.html">
                                    <span>浴室柜</span>
                                </a>
                            </div>
                            <div class="goods_hide">
                                <div class="goods_h1">
                                    <ul>
                                        <li>
                                                <a href="/Flagship/getGoodsByColumnId/supply_id/2/fid/368/two_id/239.html">独立式</a>
                                            </li><li>
                                                <a href="/Flagship/getGoodsByColumnId/supply_id/2/fid/404/two_id/239.html">落地柜</a>
                                            </li>                                    </ul>
                                </div>
                                <div class="goods_h2">
                                    <a href="javascript:" kg="on">更多</a>
                                </div>
                            </div>
                        </div>
                </div>
            </li>-->
            <li class="dandu dandulist"><a
                    href="/Exclusive/index/supply_id/2.h.html" id="index" style="color:#fff">首页</a></li>

            <li class="dandu dandulist">
                <a href="/Flagship/aboutUs/supply_id/2.h.html" id="aboutUs">关于我们</a>
            </li>
            <li class="dandu dandulist" style="width: 120px; ">
                        <a href="/Flagship/getGoodsByColumnId/supply_id/2/one_id/15/fid/368/two_id/239.html"
                           style="">
                        独立式                        </a>

                        <div class="show_all1">
                        </div>
                    </li>            <li class="dandu dandulist"><a href="http://wpa.qq.com/msgrd?v=3&uin=2015490407&site=qq&menu=yes" target="_blank" >联系客服</a></li>
        </ul>
    </div>
</div>
<style>
    .dandu{width: 115px;text-align: center;background:rgb(102, 102, 102)}
    .dandu a{color: #fff;}
    .dandulist a{padding:8% 6% 11% 6%;}
    .dandu:hover{background:rgb(73, 195, 295);}
    .dandu:hover a{color: #2B2B2B;}
    .white_bg{background:rgb(102, 102, 102);}
    .beijing7 ul li {
    float: left;
    height: 40px;
    line-height: 40px!important;
    overflow: hidden;
}
</style>
<!--关注店铺 OR 取消关注-->
<script>
    $('#bays').on('click',function () {
        var url       = "/Public/cancelFollow.html";
        var supply_id = $(this).attr('supply_id');
        var the = $(this);
        $.post(url,{supply_id:supply_id},function (res) {
            console.log(res);
            if(res == 1){
                the.html('关注本店');
            }else if(res == 2){
                the.html('取消关注');
            }else if(res == 0){
                $(".thetopbox-mask").css("display","block");
                $(".thetopbox-popover").css("display","block");
            }else{
                alert('操作失败');
            }
        });
    });
</script>


        <div class="carousel">
            <div class="carousel_box">
                <div class="or_so">
                    <div class="left_text"><img src="/img/bg17.png"></div>
                    <div class="right_text"><img src="/img/bg18.png"></div>
                </div>
                <div class="pic_box">
                    <a class="item" target="_blank" href="http://www.99boliyuan.com/Exclusive/index/supply_id/2.html">
                            <img src="/img/15217000951000.jpg" alt="">
                        </a><a class="item" target="_blank" href="http://www.99boliyuan.com/Exclusive/index/supply_id/2.html">
                            <img src="/img/15217000991000.jpg" alt="">
                        </a><a class="item" target="_blank" href="http://www.99boliyuan.com/Exclusive/index/supply_id/2.html">
                            <img src="/img/15217001041000.jpg" alt="">
                        </a>                </div>
                <div class="circle_box">
                    <div class="circle">

                    </div>
                </div>
            </div>
        </div>

        <div class="ma_activity conAuto">
            <div class="ac_mjs clearfix">
                <div class="mjs_s">
                            <img src="/img/15217001221000.jpg" alt=""/>
                        </div>
                        <div class="mjs_s">
                            <img src="/img/15217001271000.jpg" alt=""/>
                        </div>
                                                <div class="mjs_l">
                            <img src="/img/15217001311000.jpg" alt=""/>
                        </div>
            </div>
        </div>
        <div class="ma_carnival conAuto clearfix">
            <div class="car_left">
                <div class="cl_pic opsi1">
                            <a href="">
                                <img src="/img/15217000621000.jpg" alt=""/>
                            </a>


                        </div>
                                                <div class="cl_pic opsi2">
                            <a href="">
                                <img src="/img/15217000701000.jpg" alt=""/>
                            </a>
                        </div>            </div>
            <div class="car_right">
                <div class="ri_pic poRe">
                    <a href=""><img src="/img/15217000791000.jpg" alt=""/></a>


                </div>
            </div>
        </div>
<!--        -->
    </div>
    <div class="new_box">
        <div class="c-show new_googds conAuto">
                <h2>
                    <img src="/img/xptj.png" alt=""/>
                </h2>
                <div class="reixiao_pin">热销产品</div>
                <ul class="new_g_list">
                    <li class="good_one poRe">
                            <a href="http://www.99boliyuan.com/Flagship/getGoodsInfoById/info_id/211.html">
                                <img src="/img/15287054241000.jpg" alt=""/>
                            </a>
                        </li><li class="good_one poRe">
                            <a href="http://www.99boliyuan.com/Flagship/getGoodsInfoById/info_id/344.html">
                                <img src="/img/15287055491000.jpg" alt=""/>
                            </a>
                        </li>                                    </ul>
            </div>
<!--        <div class="c-show new_googds conAuto">
            <h2>
                <img src="/img/xptj.png" alt=""/>
            </h2>
            <div class="reixiao_pin">热销产品</div>
            <ul class="new_g_list">
                <li class="good_one poRe">
                        <a href="http://www.99boliyuan.com/Flagship/getGoodsInfoById/info_id/211.html">
                            <img src="/img/15287054241000.jpg" alt=""/>
                        </a>
                    </li><li class="good_one poRe">
                        <a href="http://www.99boliyuan.com/Flagship/getGoodsInfoById/info_id/344.html">
                            <img src="/img/15287055491000.jpg" alt=""/>
                        </a>
                    </li>                            </ul>
        </div>-->


        <div class="c-show hot-buy conAuto">
            <h2><img src="/img/xptj.png" alt=""/></h2>
            <div class="chanping_tui">产品推荐</div>
            <div class="ho-wrap ">
                    <div class="hb-top">
                        <h3>独立式</h3>
                        <a href="/Flagship/getGoodsByColumnId/supply_id/2/two_id/239.html">
                            <span>查看更多</span>
                        </a>
                    </div>
                    <div class="allGoods">
                        <ul class="clearfix">
                            <li>
                                        <div class="con-good"><a
                                                href="/Flagship/getGoodsInfoById/info_id/205.html"><img
                                                src="/img/15216192071772.jpg" style="height: 381px" alt=""/></a></div>
                                        <div class="ag-txt clearfix">
                                            <div class="art-left">
                                                <p class="znmt" title="华莱格赛7009天然大理石金线台面红橡浴室柜">华莱格赛7009天然大理...</p>
                                                <p class="buj" title=""></p>
                                                <p class="buj" title=""></p>
                                            </div>
                                            <div class="art-right">
                                                <p class="r-price">6980.00</p>
                                                <a href="/Flagship/getGoodsInfoById/info_id/205.html">
                                                    <div class="r-btn" clas="buyNow" info_id=""
                                                         stk="">立即购买
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="con-good"><a
                                                href="/Flagship/getGoodsInfoById/info_id/225.html"><img
                                                src="/img/15216199876063.jpg" style="height: 381px" alt=""/></a></div>
                                        <div class="ag-txt clearfix">
                                            <div class="art-left">
                                                <p class="znmt" title="华莱格赛7016天然大理石热带雨林台面红橡浴室柜">华莱格赛7016天然大理...</p>
                                                <p class="buj" title=""></p>
                                                <p class="buj" title=""></p>
                                            </div>
                                            <div class="art-right">
                                                <p class="r-price">4769.00</p>
                                                <a href="/Flagship/getGoodsInfoById/info_id/225.html">
                                                    <div class="r-btn" clas="buyNow" info_id=""
                                                         stk="">立即购买
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                                                        <li class="marRnone">
                                        <div class="con-good">
                                            <a href="/Flagship/getGoodsInfoById/info_id/281.html">
                                                <img src="/img/15216223134378.jpg" style="height: 381px" alt=""/>
                                            </a>
                                        </div>
                                        <div class="ag-txt clearfix">
                                            <div class="art-left">
                                                <p class="znmt" title="华莱格赛7036天然大理石龙舌兰台面橡木浴室柜">华莱格赛7036天然大理...</p>
                                                <p class="buj" title=""></p>
                                                <p class="buj" title=""></p>
                                            </div>
                                            <div class="art-right">
                                                <p class="r-price">3597.00</p>
                                                <a href="/Flagship/getGoodsInfoById/info_id/281.html">
                                                    <div class="r-btn" clas="buyNow" info_id=""
                                                         stk="">立即购买
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li><li>
                                        <div class="con-good"><a
                                                href="/Flagship/getGoodsInfoById/info_id/306.html"><img
                                                src="/img/15216232805915.jpg" style="height: 381px" alt=""/></a></div>
                                        <div class="ag-txt clearfix">
                                            <div class="art-left">
                                                <p class="znmt" title="华莱格赛7044天然大理石金碧台面橡木浴室柜">华莱格赛7044天然大理...</p>
                                                <p class="buj" title=""></p>
                                                <p class="buj" title=""></p>
                                            </div>
                                            <div class="art-right">
                                                <p class="r-price">2789.00</p>
                                                <a href="/Flagship/getGoodsInfoById/info_id/306.html">
                                                    <div class="r-btn" clas="buyNow" info_id=""
                                                         stk="">立即购买
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="con-good"><a
                                                href="/Flagship/getGoodsInfoById/info_id/340.html"><img
                                                src="/img/15216250683030.jpg" style="height: 381px" alt=""/></a></div>
                                        <div class="ag-txt clearfix">
                                            <div class="art-left">
                                                <p class="znmt" title="华莱格赛7068天然火烧石台面橡木浴室柜">华莱格赛7068天然火烧...</p>
                                                <p class="buj" title=""></p>
                                                <p class="buj" title=""></p>
                                            </div>
                                            <div class="art-right">
                                                <p class="r-price">2789.00</p>
                                                <a href="/Flagship/getGoodsInfoById/info_id/340.html">
                                                    <div class="r-btn" clas="buyNow" info_id=""
                                                         stk="">立即购买
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                                            </ul>

                    </div>
                </div>        </div>
    </div>
    
<div class="licence_list">
    <div class="licence_all">
        <div class="licence_shop1">
            <div class="licence_s1">
                <span>该商家</span>
                <img src=" /img/2.png" />
                                    <span class="phone1_lices">营业执照</span>
            </div>
            <div class="licence_s1">
                <img src=" /img/1.png" />
                    					<span class="phone2_lices">
						税务登记证书
					</span>
            </div>
            <div class="licence_s1">
                <img src=" /img/3.png" />
                    					<span class="phone3_lices">
						组织机构代码证
					</span>
            </div>
            <span>已审核</span>
        </div>
    </div>
</div>

<?php include('public/footer.php');?>
<?php include('public/footer-bottom.php');?>
	
    
    <!--侧导航栏 -->
    <!--侧导航栏 -->
<div class=tip>
    <div id="sidebar">
        <div id="wrap_tip">
            <div id="prof" class="item">
                <a href="/Home/User/userIndex.html" style=" background: url(/img/ce8.png) no-repeat center;">
                    <span class="setting"></span>
                </a>
                <div class="ibar_login_box status_login">
                    <div class="avatar_box">
                        <p class="avatar_imgbox"><img src="/img/no-img_mid_.jpg"/></p>
                        <ul class="user_info">
                            <li>用户名：</li>
                            <li>级&nbsp;别：普通会员</li>
                        </ul>
                    </div>
                    <div class="login_btnbox">
                        <a href="/Home/Order/user_order/code/MyQoO0O0OuO0O0Or.html" class="login_order">我的订单</a>
                        <a href="/Order/commodity/code/NyQoO0O0OuO0O0Or.html" class="login_favorite">我的收藏</a>
                    </div>
                    <i class="icon_arrow_white"></i>
                </div>

            </div>
          <!-- <div id="shopCart" class="item">
              <a href="/Home/Cart/shoppingCart.html" style=" background: url(/img/ce6.png) no-repeat center;">
                  <span class="message"></span>
              </a>
              <p>
                  购物车
              </p>
          
                                <p class="cart_num">0</p>          </div> -->
            <a href="/Home/Cart/shoppingCart.html">
                <div id="shopCart" class="item">
                    <div style=" background: url(/img/ce6.png) no-repeat center; width:30px; height:35px;">
                        <span class="message"></span>
                    </div>
                    <p style="color:#fff;"> 
                        购物车
                    </p>
            
                                            <p class="cart_num">0</p>                </div>
            </a>
            <div id="asset" class="item">
                <a href="/Order/user_order/code/MyQoO0O0OuO0O0Or.html" style=" background: url(/img/ce1.png) no-repeat center;">
                    <span class="view"></span>
                </a>
                <div class="mp_tooltip">
                    我的订单
                    <i class="icon_arrow_right_black"></i>
                </div>
            </div>

            <div id="foot" class="item">
                <a href="/Order/history.html" style=" background: url(/img/ce2.png) no-repeat center;">
                    <span class="zuji"></span>
                </a>
                <div class="mp_tooltip">
                    我的足迹
                    <i class="icon_arrow_right_black"></i>
                </div>
            </div>

            <div id="brand" class="item">
                <a href="/Order/commodity/code/NyQoO0O0OuO0O0Or.html" style=" background: url(/img/ce3.png) no-repeat center;">
                    <span class="wdsc"></span>
                </a>
                <div class="mp_tooltip">
                    我的收藏
                    <i class="icon_arrow_right_black"></i>
                </div>
            </div>

            <div id="broadcast" class="item">
                <a href="/Order/concerned/code/NygoO0O0OuO0O0Or.html" style=" background: url(/img/ce4.png) no-repeat center;">
                    <span class="chongzhi"></span>
                </a>
                <div class="mp_tooltip">
                    我的关注
                    <i class="icon_arrow_right_black"></i>
                </div>
            </div>

            <div id="brandd" class="item">
                <a href="#" style=" background: url(/img/ce5.png) no-repeat center;">
                    <span class="wdsc"></span>
                </a>
                <div class="mp_tooltip">
                    我的积分
                    <i class="icon_arrow_right_black"></i>
                </div>
            </div>

            <div class="quick_toggle">
                <li class="qtitem">
                    <a href="http://wpa.qq.com/msgrd?v=3&uin=Array&site=qq&menu=yes" target="_blank" style=" background: url(/img/xiaoqq.png) no-repeat center;"><span
                            class="kfzx"></span></a>
                    <div class="mp_tooltip">客服中心<i class="icon_arrow_right_black"></i></div>
                </li>
                <!--二维码 -->
                <li class="qtitem">
                    <a href="#none" style=" background: url(/img/xiaowei.png) no-repeat center;"><span
                            class="mpbtn_qrcode"></span></a>
                    <div class="mp_qrcode" style="display:none;"><img src="/img/15055329021967.jpg"/><i
                            class="icon_arrow_white"></i></div>
                </li>
                <li class="qtitem">
                    <a href="#top" class="return_top"
                       style=" background: url(/img/top.png) no-repeat center;"><span class="top"></span></a>
                </li>
            </div>

            <!--回到顶部 -->
            <div id="quick_links_pop" class="quick_links_pop hide"></div>

        </div>

    </div>


</div><!--侧导航栏 -->

</div><!--侧导航栏 -->
</body>
<script type="text/javascript">
    var i = 0;
    var pic_number = $(".pic_box img");
    var pic_box_length = pic_number.length*1920;
    var circle_box_length = pic_number.length*20;
    var cir_text = '<div class="cir"></div>';
    $(document).ready(function(){
        //轮播外面div的宽度
        $(".pic_box").css({"width":pic_box_length+"px"});
        //圆点外面div的宽度
        $(".circle_box").css({"width":circle_box_length+"px"});
        //圆点外面div left的距离
        $(".circle_box").css({"left":-circle_box_length/2+"px"});
        for(var j=0;j<pic_number.length;j++){
            //在圆点div里面添加圆点
            $(".circle").append(cir_text);
            if(j == i){
                $(".cir").eq(j).css("backgroundColor","#f00");
            }else{
                $(".cir").eq(j).css("backgroundColor","#666");
            }
        }
        var budge_number = 1;
        //图片移动距离右
        function showImg(){
            if(budge_number >= pic_number.length){
                budge_number = 0;
            }
            var budge = -budge_number*1920;
            $(".pic_box").css({"margin-left":budge+"px"});
            budge_number++;
            $(".cir").css("backgroundColor","#666");
            $(".cir").eq(budge_number-1).css("backgroundColor","#f00");
        }
        //图片移动距离左
        function htmlidy(){
            var zong_left = (pic_number.length-1)*1920;
            budge_number--;
            $(".cir").css("backgroundColor","#666");
            $(".cir").eq(budge_number-1).css("backgroundColor","#f00");
            if(budge_number < 1){
                budge_number = pic_number.length;
                $(".pic_box").css({"margin-left":-zong_left+"px"});
            }else if(budge_number == 0){
                budge_number = pic_number.length;
            }else{
                var yd_left = -(budge_number-1)*1920;
                $(".pic_box").css({"margin-left":yd_left+"px"});
            }
        }
        var time;
        //定时调用
        function startMove(){
            time = setInterval(nextImg,4000);
        }
        startMove();
        //图片移动方法
        function nextImg(){
            if(i>=pic_number.length-1){
                i = 0;
            }else{
                i++;
            }
            showImg();
        }
        //鼠标放上去移开清除方法和调用方法
        $(".carousel_box").mouseover(function(){
            clearInterval(time);
        });
        $(".carousel_box").mouseout(function(){
            startMove();
        });
        //左右图标src切换
        $(".left_text").mouseover(function(){
            $(".left_text img").attr("src","/img/bg19.png");
        });
        $(".right_text").mouseover(function(){
            $(".right_text img").attr("src","/img/bg20.png");
        });
        $(".left_text").mouseout(function(){
            $(".left_text img").attr("src","/img/bg17.png");
        });
        $(".right_text").mouseout(function(){
            $(".right_text img").attr("src","/img/bg18.png");
        });
        //左图标移动方法
        $(".left_text").click(function(){
            htmlidy();
        });
        //右图标移动方法
        $(".right_text").click(function(){
            nextImg();
        });
        //点击cir移动图片和切换颜色
        $(".cir").click(function(){
            var a = $(this).index()+1;
            budge_number = a;
            var budge = -(budge_number-1)*1920;
            $(".cir").css("backgroundColor","#666");
            $(".cir").eq(a-1).css("backgroundColor","#f00");
            $(".pic_box").css({"margin-left":budge+"px"});
        });
    });  
</script>
<script type="text/javascript">
    $(function () {
        //        立即购买
        $(".buyNow").click(function () {
            var info_id = $(this).attr('info_id');
            var stk = $(this).attr('stk');
            var goodsNub = $("#goodsNub").val();
            var data = {info_id: info_id, num: goodsNub};
            if (stk < 1) {
                alert('该商品库存不足，请选择其它商品');
            } else {
                $.post("/Cart/buyGoods.html", data, function (response) {
                    if (response == 1) {
                        window.location.href = "/Cart/shoppingCart.html";

                    } else if (response == 0) {
                        $('.thetopbox-mask').fadeIn(100);
                        $('.thetopbox-popover').slideDown(200);
//                        window.location.href="/Flagship/getGoodsInfoById/info_id/%2Binfo_id%2B.html";
                    }
                })
            }

        });


      
    });
    var myVid=document.getElementById("movie");
        myVid.volume=0.2;
</script>
<!--图片背景切换-->
<script type="text/javascript">
    var lanBg = $('.lanBg').val();
    var shopBg = $('.shopBg').val();
    // alert(lanBg);
    // alert(shopBg);
    if (lanBg != "") {
        $(".beijing6").css("background", lanBg);
    }
    if (shopBg != "") {
        $(".new_box").css("background-color", shopBg);
    }

    $("#index").css({'color':'#000'});
    $(".dandulist").eq(0).css('background', '#00ccff');
</script>
</html>