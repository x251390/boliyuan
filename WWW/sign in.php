

<?php include('public/head.php');?>
    
    
    
       <title>登录</title>
    <link rel="dns-prefetch" href="//misc.dengimg.com" />
    <link rel="dns-prefetch" href="//img01.dengimg.com" />
    <link rel="dns-prefetch" href="//img02.dengimg.com" />
    <link rel="dns-prefetch" href="//img03.dengimg.com" />
    <link rel="dns-prefetch" href="//img04.dengimg.com" />
    <link rel="dns-prefetch" href="//img05.dengimg.com" />
    <link rel="dns-prefetch" href="//img06.dengimg.com" />
    <link rel="dns-prefetch" href="//img07.dengimg.com" />
    <link rel="icon" href="http://misc.dengimg.com/style/www/images/pub/favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" type="text/css" href="../css/login_style.css"/>
<script src="../js/common.js" type="text/javascript"></script>
    <script src="../js/mg/deng.ajax.js" type="text/javascript"></script>
    <script src="../js/mg/deng.alert.js" type="text/javascript"></script>
 
    
    
    <link rel="stylesheet" href="../css/sign in.css" />
</head>







   <script type="text/javascript">
        (function() {
            var isPc = function() {
                var userAgentInfo = navigator.userAgent;
                var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
                var flag = true;
                for (var v=0;v<Agents.length;v++) {
                    if (userAgentInfo.indexOf(Agents[v]) > 0) {
                        flag = false;
                        break;
                    }
                }
                return flag;
            }
            if (!isPc()) {
                var gurl = 'http://m.deng.com';
                var did = GU('deng')
                if(did){
                    gurl = gurl + '?deng=' + did
                }
                window.location.href = gurl;
            }
        })();
    </script>
































<body>
<!--header-->


<?php include('public/header1.php');?>

<!--header结束-->

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
<div class="loginBox">
    <div class="loginBox_wrap">
        <div class="loginBox_right">
            <div class="title">会员登录</div>
            <div class="main accountLogin">
                <ul>
                    <li><i class="person_ico"></i>
                        <input class="inputTxt pl40 mgInputPhone" type="text" placeholder="请输入手机号码"></li>
                    <li><i class="pwd_ic"></i>
                        <input class="inputTxt pl40 mgInputPwd" type="password" placeholder="请输入密码"></li>
                        
                        <li class="icon">
                       <a href="#"><img src="../img/qq.png" alt=""  /></a> 
                       <a href="#"> <img src="../img/weixin.png" alt="" /></a> 
                        <a href="#"><img src="../img/weibo.png" alt="" /></a> 
                        
                        </li>
                    <li style="display: none">
                        <input class="inputTxt wd108" type="text" placeholder="请输入验证码">
                        <img src="../public/images/login/yzcode_btn.jpg" class="code">
                        <span class="refresh">点击图片<br>换一张</span>
                    </li>
                    
                    
                    <li class="txtmsg" style="margin-bottom: 5px;color:red"></li>
                    <li>
                        <!--默认没激活按钮:disabled,正确输入帐号密码和验证码才能激活按钮,去掉类disabled-->
                        <button class="login_btn disabled mgLoginButton" type="button">登　　录</button>
                    </li>
                    <li class="center_block">
                        <span class="fl">还没有帐号，<a class="go_reg" href="reg.htm">免费注册</a></span>
                        <a href="findpwd.htm" class="fr">忘记密码</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<!--会员登录-结束-->


<!--footer-->
<!--底部开始-->


<?php include('public/footer1.php');?>
	<?php include('public/footer-bottom.php');?>


















<!--兼容ie9以下的placeholder提示-->
<script src="../js/jquery.placeholder.min.js" type="text/javascript"></script>
<script src="../js/jquery.countdown.min.js" type="text/javascript"></script>

<!--bootstrap-->


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