<?php include('public/head.php');?>
    <title>薄利圆商城</title>
    
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!--首页页面样式-->
    <link rel="stylesheet" type="text/css" href="/css/index.css">
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

                <dt><a href="javascript:">招贤纳士</a></dt>
                <dd><a href="/Recruit/concept.html">人才观念</a></dd><dd><a href="/Recruit/promotion.html">晋升机制</a></dd><dd><a href="/Recruit/option.html">期权分红</a></dd><dd><a href="/Recruit/want.html">我要加入</a></dd>            </dl>
        </div>
    </div>
    <div class="c_i_bigBg itj_bigBg">

    </div>
    <div class="mgAu1200 itj_mian">
        <div class="itj_title">
            <img src="/img/itj_title.png" alt="">
        </div>
        <div class="itj_wrap clearfix">
            <div class="tj_w_left fl">
                <div class="t_w_l_wrap1">
                    

                </div>
                <div class="t_w_l_wrap2">
                    <form method="post" action="" enctype="multipart/form-data">
                        <p>我要加入</p>
                        <div class="form_group clearfix">
                            <div class="form_title">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</div>
                            <div class="form_main">
                                <input type="text" name="name" id="name" class="wd492" placeholder="请输入您的姓名">
                            </div>
                            <div class="name"></div>
                        </div>
                        <div class="form_group clearfix">
                            <div class="form_title">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别</div>
                            <div class="form_main f_m_sex">
                                <label class="pdr30"><input type="radio" name="sex" value="1" class="mgr5 sex">男</label>
                            </div>
                            <div class="form_main">
                                <label><input type="radio" name="sex" value="2" class="mgr5 sex">女</label>
                            </div>

                        </div>
                        <div class="sext"></div>
                        <div class="form_group clearfix">
                            <div class="form_title">年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;龄</div>
                            <div class="form_main">
                                <input type="text" name="age" id="age" class="wd492" placeholder="请输入您的年龄">
                            </div>
                            <div class="age"></div>
                        </div>
                        <div class="form_group clearfix">
                            <div class="form_title">婚姻状况</div>
                            <div class="form_main">
                                <label class="pdr30"><input type="radio" name="marriage" value="1"
                                                            class="mgr5 marriage">已婚</label>
                            </div>
                            <div class="form_main">
                                <label><input type="radio" name="marriage" value="2" class="mgr5 marriage">未婚</label>
                            </div>

                        </div>
                        <div class="marriagea"></div>
                        <div class="form_group clearfix">
                            <div class="form_title">联系方式</div>
                            <div class="form_main">
                                <input type="text" class="wd492" name="tel" id="tel" placeholder="请输入您的手机号码">
                            </div>
                            <div class="tel"></div>
                        </div>
                        <div class="form_group clearfix">
                            <div class="form_title">所在地区</div>
                            <div class="form_main">
                                <input type="text" name="site" id="site" class="wd492" placeholder="请输入您的居住地址">
                            </div>
                            <div class="site"></div>
                        </div>
                        <div class="form_group clearfix">
                            <div class="form_title">是否在职</div>
                            <div class="form_main">
                                <label class="pdr30"><input type="radio" name="job" value="1" class="mgr5 job">是</label>
                            </div>
                            <div class="form_main">
                                <label><input type="radio" name="job" value="2" class="mgr5 job">否</label>
                            </div>

                        </div>
                        <div class="jobg"></div>
                        <div class="job1"></div>
                        <div class="form_group clearfix label_pdr20" id="ch_place">
                            <div class="form_title">意向职位</div>

                            
                        </div>
                        <div class="placel"></div>
                        <div class="form_group clearfix label_pdr20 ">
                            <div class="form_title">到岗日期</div>
                            <div class="form_main ">
                                <label><input type="radio" class="date" value="随时到岗" name="date">随时到岗</label>
                            </div>
                            <div class="form_main">
                                <label><input type="radio" class="date" value="三天以内" name="date">三天以内</label>
                            </div>
                            <div class="form_main">
                                <label><input type="radio" class="date" value="一周以内" name="date">一周以内</label>
                            </div>
                            <div class="form_main">
                                <label><input type="radio" class="date" value="十五天内" name="date">十五天内</label>
                            </div>
                            <div class="form_main">
                                <label><input type="radio" class="date" value="三十天内" name="date">三十天内</label>
                            </div>
                        </div>
                        <div class="datel"></div>
                        <div class="form_group clearfix label_pdr15 ">
                            <div class="form_title">工作经验</div>
                            <div class="form_main">
                                <label><input type="radio" class="work" value="应届毕业生" name="work">应届毕业生</label>
                            </div>
                            <div class="form_main">
                                <label><input type="radio" class="work" value="一年以上" name="work">一年以上</label>
                            </div>
                            <div class="form_main">
                                <label><input type="radio" class="work" value="三年以上" name="work">三年以上</label>
                            </div>
                            <div class="form_main">
                                <label><input type="radio" class="work" value='五年以上' name="work">五年以上</label>
                            </div>
                            <div class="form_main">
                                <label><input type="radio" class="work" value="十年以上" name="work">十年以上</label>
                            </div>
                        </div>
                        <div class="workl"></div>
                        <div class="form_group special_require">
                            <p class="f_g_title">特殊要求</p>
                            <textarea class="f_g_txta" id="content" name="content" maxlength=500></textarea>
                            <p class="f_g_nub">
                                亲你还可以输入<span class="leng">500</span>字哦！
                            </p>
                        </div>
                        <div class="form_group">
                            <input type="button" id="rsubmit" class="f_g_sub" value="提交">
                        </div>

                    </form>
                </div>
            </div>
            <div class="tj_w_right fr">
                <form method="post" action="/Recruit/want.html" enctype="multipart/form-data">
                    <div class="w_r_send">
                        <input type="hidden" value="1" name="id"/>
                        <label>上传简历<input type="file" value="上传简历" name="file"></label>
                    </div>
                    <p>请以附件形式上传并提交</p>
                    <div class="fj_sub"><input type="submit" value="提交"></div>
                </form>
            </div>
        </div>


    </div>
</div>


</div>

<?php include('public/footer.php');?>
	<?php include('public/footer-bottom.php');?>




<style>
    .error {
        margin-left: 84px;
        color: red;
    }
    .pass {
        margin-left: 84px;
        color: green;
    }
    .intl-tel-input {
        margin-left: 3px;
        width: 364px;
        top: 24px !important;
    }
</style>
<script type="text/javascript">
	$('#content').keyup(function(){
		var len = $('#content');
		var leng = $('.leng');
		var nub = 500-(len.val().length);
		if(len.val().length>500){
			len.maxLength=500;
		}
		if(nub <= 0){
			nub = 0;
		}
	
		leng.html(nub);
	})
</script>
<script type="text/javascript">
    var $job = $('.recruitJob h4 ');
    var $t_w_l_wrap1 = $('.recruitJob');
    var $nav_dd = $('.c_i_nav dl dd');
    var yes_name = '';
    var yes_age  = '';
    var yes_tel  = '';
    $t_w_l_wrap1.eq(0).find('.job_ask').addClass('on');
    $nav_dd.eq(3).addClass('active').siblings().removeClass('active');
    $job.click(function () {
        var inde = $(this).parent().index();
        $t_w_l_wrap1.eq(inde).find('.job_ask').addClass('on');
        $t_w_l_wrap1.eq(inde).siblings().find('.job_ask').removeClass('on');
    })
    $(function () {

        $('#name').blur(function () {
            $('.name').html('').removeClass('pass')
            var name = $('#name').val();
            if (name == "") {
                $('.name').html('名字不能为空').addClass('error');
                return false;
            } else if (/^(?=.*\d.*\b)/.test(document.getElementById("name").value)) {
                $('.name').html('名字不能含有数字').addClass('error');
                return false;
            } else if (name.length < 2) {
                $('.name').html('名字不能小于两位').addClass('error');
                return false;
            } else if (/[`~%!@#^=''?~！@#￥……&——‘”“'？*()（），,。.、]/.test(document.getElementById("name").value)) {
                $('.name').html('名字不能含有非法字符').addClass('error');
            } else {
                $('.name').html('填写正确。').addClass('pass');
                yes_name = true;
            }
        })
        $('#age').blur(function () {
            $('.age').html('').removeClass('pass')
            var age = $('#age').val();
            if (age == "") {
                $('.age').html('年龄不能为空').addClass('error');
                return false;
            } else if (!/^[0-9]+$/.test(document.getElementById("age").value)) {
                $('.age').html('年龄必需是正整数').addClass('error');
                return false;
            } else if (age.length > 2) {
                $('.age').html('年龄必需小于三位数').addClass('error');
                return false;
            } else if (age < 18) {
                $('.age').html('必需年满18周岁').addClass('error');
                return false;
            } else {
                $('.age').html('填写正确。').addClass('pass');
                yes_age = true;
            }
        })
        $(function () {
            $('#tel').blur(function () {
                $('.tel').html('').removeClass('pass')
                var tel = $('#tel').val();
                var reg = /^1[3458]\d{9}$/;
                if (!reg.test(tel)) {
                    $('.tel').html('手机号码格式不正确').addClass('error');
                    return false;
                } else {
                    $('.tel').html('填写正确。').addClass('pass');
                    yes_tel = true;
                }
            })
        });
        var $myIput = $('#ch_place input');
        var nub = 0;
        var arr = [];
        $myIput.click(function () {
            //清空
            nub = 0;
            arr = [];
            //重新获取所有li
            var newInput = $('#ch_place input');
            //循环所有的li找出所有被选中的；并且把没选中的储存起来；
            for (var i = 0; i < newInput.length; i++) {
                if (newInput[i].checked) {
                    nub++;
                } else {
                    arr.push(newInput[i]);
                }
            }
            //当选中的为3个其他的就不能选；
            if (nub == 3) {
                for (var j = 0; j < arr.length; j++) {
                    $(arr[j]).attr('disabled', 'true')
                    $('.placel').html('').addClass('pass');
                }
            } else {
                for (var j = 0; j < arr.length; j++) {
                    $(arr[j]).removeAttr('disabled')

                }
            }

        })
        $('#rsubmit').click(function () {
            var name = $('#name').val();
            var sex = $('.sex');
            var sex_val = $('.sex:checked').val();
            var age = $('#age').val();
            var marriage = $('.marriage');
            var marriage_val = $('.marriage:checked').val();
            var tel = $('#tel').val();
            var site = $('#site').val();
            var job = $('.job');
            var job_val = $('.job:checked').val();
            var place = $('.place');
            var date = $('.date');
         //   console.log($('input.date[type="radio"]:checked'));
            var date_val = $('.date:checked').val();
            var work = $('.work');  //经验
            var work_val = $('.work:checked').val();
            var content = $('#content').val();
            var place_arr = [];
            for (var i = 0; i < place.length; i++) {
                if (place[i].checked) place_arr.push($(place[i]).val());
            }
            place_val = place_arr.join(",");

            if (name == '') {
                $('.name').html('请输入姓名').addClass('error');
                return false;
            }
            if (yes_name == '') {
                $('.name').html('姓名输入错误').addClass('error');
                return false;
            }
            if (sex[0].checked == false && sex[1].checked == false) {
                $('.sext').html('请选择').addClass('error');
                return false;
            }
            if (age == '') {
                $('.age').html('请输入年龄').addClass('error');
                return false;
            }
            if (yes_age == '') {
                $('.age').html('年龄输入错误').addClass('error');
                return false;
            }
            if (marriage[0].checked == false && marriage[1].checked == false) {
                $('.marriagea').html('请选择').addClass('error');
                return false;
            }
            if (tel == '') {
                $('.tel').html('请输入电话').addClass('error');
                return false;
            } else {
                $('.area').html('填写正确。').addClass('pass');
            }
            if (yes_tel == '') {
                $('.tel').html('电话输入错误').addClass('error');
                return false;
            }
            if (site == '') {
                $('.site').html('请输入所在区域').addClass('error');
                return false;
            }
            if (job[0].checked == false && job[1].checked == false) {
                $('.jobg').html('请选择').addClass('error');
                return false;
            }
            if ($('input.place[type="checkbox"]:checked').length==0 ) {
                $('.placel').html('请选择').addClass('error');
                return false;
            }

            if ($('input.date[type="radio"]:checked').length==0 ) {
                $('.datel').html('请选择').addClass('error');
                return false;
            }
            if ($('input.work[type="radio"]:checked').length==0) {
                $('.workl').html('请选择').addClass('error');
                return false;
            }


            $.post('/Home/Recruit/ajax', {
                'name': name,
                'sex_val': sex_val,
                'age': age,
                'marriage_val': marriage_val,
                'tel': tel,
                'site': site,
                'job_val': job_val,
                'place_val': place_val,
                'date_val': date_val,
                'work_val': work_val,
                'content': content
            }, function (data) {

                if (data == 1) {

                    alert('申请成功');

                    window.location.href = "/Recruit/want.html"


                    return false;

                } else if (data == 2) {

                    alert('申请失败');

                    return false;

                }

            })


        })

    });


</script>
</html>