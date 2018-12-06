<?php include('public/head.php');?>
    <link rel="stylesheet" type="text/css" href="../css/login_style.css"/>

   
  <link rel="stylesheet" href="../css/sign in.css" />
    <script src="../js/common.js" type="text/javascript"></script>
    <script src="../js/deng.ajax.js" type="text/javascript"></script>
    <script src="../js/deng.alert.js" type="text/javascript"></script>
    
    <title>注册</title>
    <style type="text/css">
    	.footer1 {
    position: static;
 margin-top: 35px;
    width: 100%;
}
    </style>
</head>




















<body>
<!--header-->
<?php include('public/header1.php');?>
</header>
<div class="logo_box">
	<img src="../img/cop_index_logo.png" alt="" />
	
	
</div>



<script>
    logOut()
    headsearch()
    setCartNum()
</script>
<script src="../js/mg/deng.pc.login.js" type="text/javascript"></script>
<!--会员登录-开始-->
<!--会员注册-开始-->
<div class="loginBox">
    <div class="loginBox_wrap">
        <div class="loginBox_right">
            <div class="title">会员注册</div>
            <div class="main accountLogin">
                <ul>
                    <li><i class="person_ico"></i>
                        <input class="inputTxt pl40 mgRegInput" type="text" placeholder="请输入手机号码">
                    </li>
                    <li style="display:none" class="mgCapbox">
                        <input class="inputTxt wd108 mgInputCap" type="text" placeholder="请输入验证码">
                        <img src="cap.htm" class="code mgCode">
                        <span class="refresh mgCapRef">点击图片<br>换一张</span>
                    </li>
                    <li>
                        <button class="login_btn disabled wd128 mgSendCap" type="button">发送验证码</button>
                        <input class="inputTxt wd138 mgMsnInput" type="text" placeholder="请输入短信验证码">
                    </li>
                    <!--默认密码输入框不显示，只有短信验证正确后才展开显示。-->
                    <li style="" class="mgpwdli"><i class="pwd_ic"></i>
                        <input class="inputTxt pl40 mgPwd1" type="password" placeholder="请输入密码">
                    </li>
                    <li style="" class="mgpwdli"><i class="pwd_ic"></i>
                        <input class="inputTxt pl40 mgPwd2" type="password" placeholder="请再次确认密码">
                    </li>
                    <li>
                    	
                    	
                    	
                     <!--   <a href="clause.htm" class="clause" target="_blank">《Deng.com灯网会员注册协议》</a>-->
                        
                        <a class="clause" href="javascript:;">《同意服务条款》</a>
                        
                    </li>
                    <li class="txtmsg" style="margin-bottom: 5px;color:red"></li>
                    <li>
                        <!--默认没激活按钮:disabled,正确输入帐号密码和验证码才能激活按钮,去掉类disabled-->
                        <button class="login_btn disabled mgRegButton" type="button">同意协议并注册</button>
                    </li>
                    <li class="center_block">
                        <span>我有帐号，<a class="go_reg" href="login.htm">立即登录</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--会员注册-结束-->
<script src="../js/mg/deng.pc.reg.js" type="text/javascript"></script>

<!--footer-->
<!--底部开始-->
<?php include('public/footer1.php');?>
	<?php include('public/footer-bottom.php');?>






<!--兼容ie9以下的placeholder提示-->
<script src="../js/jquery.placeholder.min.js" type="text/javascript"></script>
<script src="../js/jquery.countdown.min.js" type="text/javascript"></script>

<!--bootstrap-->
<script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>

<script src="../js/jquery.SuperSlide.2.1.1.js" type="text/javascript" charset="utf-8"></script>
<!--main js-->
<script src="../js/common.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function () {

        var topHeight= ($('.loginBox').height() - $('.loginBox_right').height())/2 + 'px'
        $('.loginBox_right').css("top",topHeight)

        if(window.location.href.indexOf('clause')>0){
            $('.footer').css('position','relative')
        }

    })

</script>
</body>
</html>
