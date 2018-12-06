<?php include('public/head.php');?>
    
    <script src="../js/common.js" type="text/javascript"></script>
    <script src="../js/deng.ajax.js" type="text/javascript"></script>
    <script src="../js/deng.alert.js" type="text/javascript"></script>
    <title>体验馆</title>
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
                var url = window.location.href;
                var gurl = 'http://m.deng.com';
                var did = GU('deng');
                if(/brand.htm/.test(url)){
                    gurl = 'http://m.deng.com/brands';
                }else if(/tiyan.htm/.test(url)){
                    gurl = 'http://m.deng.com/pavilion';
                }else if(/tuan.htm/.test(url)){
                    gurl = 'http://m.deng.com/groupbuy';
                }else if(/te.htm/.test(url)){
                    gurl = 'http://m.deng.com/rebate';
                }else if(/pavilion\.htm/.test(url)){
					var pid = GU('id');
					gurl = 'http://m.deng.com/pavilion/'+pid+'.htm';
				}else{
                    gurl = 'http://m.deng.com/';
                }
                if(did){
                    gurl = gurl + '?deng=' + did
                }
                window.location.href = gurl;
            }
        })();
    </script>




















<body data-spy="scroll" data-target="#oFloatList" data-offset="70">

<!--hearder-->
    <?php include('public/header.php')?>
<!--hearder-->
<script>
    logOut()
    headsearch()
    setCartNum()
</script>

<link rel="stylesheet" type="text/css" href="http://misc.dengimg.com/style/www/css/ex_pavilion.css"/>
<!--中间-->
<div class="pavilionWrap">
    <div class="bg_f0f0e8">
        <div class="container">
            <div class="tygSearch_box">
                <div class="tygSearch_box_list">
                    <div class="title">体验馆——快速查询</div>
                    <ul class="sl_address">
                        <li>
                            <div class="dropdown">
                                <button class="btn wd140 dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown">
                                    <span class="txt ShengName" id="province">选择省份</span>
                                    <span class="caret"></span>
                                </button>
                                <ul id="provinceUl" class="dropdown-menu pavSheng" aria-labelledby="dropdownMenu1">
                                                                        <li data-pid="1"><a href="javascript:;">北京市</a></li>
                                                                        <li data-pid="338"><a href="javascript:;">天津市</a></li>
                                                                        <li data-pid="636"><a href="javascript:;">河北省</a></li>
                                                                        <li data-pid="3102"><a href="javascript:;">山西省</a></li>
                                                                        <li data-pid="4670"><a href="javascript:;">内蒙古自治区</a></li>
                                                                        <li data-pid="5827"><a href="javascript:;">辽宁省</a></li>
                                                                        <li data-pid="7531"><a href="javascript:;">吉林省</a></li>
                                                                        <li data-pid="8558"><a href="javascript:;">黑龙江省</a></li>
                                                                        <li data-pid="10543"><a href="javascript:;">上海市</a></li>
                                                                        <li data-pid="10808"><a href="javascript:;">江苏省</a></li>
                                                                        <li data-pid="12596"><a href="javascript:;">浙江省</a></li>
                                                                        <li data-pid="14234"><a href="javascript:;">安徽省</a></li>
                                                                        <li data-pid="16068"><a href="javascript:;">福建省</a></li>
                                                                        <li data-pid="17359"><a href="javascript:;">江西省</a></li>
                                                                        <li data-pid="19280"><a href="javascript:;">山东省</a></li>
                                                                        <li data-pid="21387"><a href="javascript:;">河南省</a></li>
                                                                        <li data-pid="24022"><a href="javascript:;">湖北省</a></li>
                                                                        <li data-pid="25579"><a href="javascript:;">湖南省</a></li>
                                                                        <li data-pid="28240"><a href="javascript:;">广东省</a></li>
                                                                        <li data-pid="30164"><a href="javascript:;">广西壮族自治区</a></li>
                                                                        <li data-pid="31563"><a href="javascript:;">海南省</a></li>
                                                                        <li data-pid="31929"><a href="javascript:;">重庆市</a></li>
                                                                        <li data-pid="33007"><a href="javascript:;">四川省</a></li>
                                                                        <li data-pid="37906"><a href="javascript:;">贵州省</a></li>
                                                                        <li data-pid="39556"><a href="javascript:;">云南省</a></li>
                                                                        <li data-pid="41103"><a href="javascript:;">西藏自治区</a></li>
                                                                        <li data-pid="41877"><a href="javascript:;">陕西省</a></li>
                                                                        <li data-pid="43776"><a href="javascript:;">甘肃省</a></li>
                                                                        <li data-pid="45286"><a href="javascript:;">青海省</a></li>
                                                                        <li data-pid="45753"><a href="javascript:;">宁夏回族自治区</a></li>
                                                                        <li data-pid="46047"><a href="javascript:;">新疆维吾尔自治区</a></li>
                                                                        <li data-pid="47493"><a href="javascript:;">台湾省</a></li>
                                                                        <li data-pid="47494"><a href="javascript:;">香港特别行政区</a></li>
                                                                        <li data-pid="47495"><a href="javascript:;">澳门特别行政区</a></li>
                                                                        <li data-pid="47580"><a href="javascript:;">越南</a></li>
                                    
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="btn wd140 dropdown-toggle" type="button" id="dropdownMenu2"
                                        data-toggle="dropdown">
                                    <span class="txt ShiName" id="city">选择市级</span>
                                    <span class="caret"></span>
                                </button>
                                <ul id="cityUl" class="dropdown-menu pavShi" aria-labelledby="dropdownMenu2">

                                </ul>
                            </div>
                        </li>
                        <li class="wd250">
                            <div class="dropdown">
                                <button class="btn wd290 dropdown-toggle" type="button" id="dropdownMenu3"
                                        data-toggle="dropdown">
                                    <span class="txt" id="pavilion">选择体验馆</span>
                                    <span class="caret"></span>
                                </button>
                                <ul id="pavilionUl" class="dropdown-menu mgPav" aria-labelledby="dropdownMenu3">

                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
          <div class="tygList_box">
                <div class="tygTitle">
                    <h1>灯网体验馆</h1>
                    <div class="title"><i class="ico_tit_l"></i> <span>惊艳绽放</span> <i class="ico_tit_r"></i></div>
                </div>
                <ul class="mainPav">
                    <!--图片大小：266px*200px-->
                    <li class="pavExample" style="display: none">
                        <div class="pic"><a href="" target="_blank" class="link"><img class="img" src="http://misc.dengimg.com/style/www/images/pub/loading.gif" alt=""></a></div>
                        <dl>
                            <dt><a href="" target="_blank" class="name link">广东省中山市古镇镇灯网旗舰店</a></dt>
                            <dd><span>营业时间：</span><em class="phone time">08:00 ～ 20:00</em></dd>
                            <dd><span>展馆电话：</span><em class="phone tel">020-87878787</em></dd>
                            <dd><span>展馆地址：</span><em class="phone addr">广东省广州市海珠区会展南四路大家庭花园一楼商铺A01～A08卡</em></dd>
                        </dl>
                        <div class="ty_sendPhone mgsendSMS"><a class="phoneBtn_a" href="" data-toggle="modal" data-target=".indexSmsWinView"><i class="ex_icon phone_ic"></i>免费发送到手机</a></div>
                    </li>
                    <div class="waitMsgTips" style="text-align: center; font-size: 18px; height: 200px; padding-top: 100px; display: none; background: rgb(255, 255, 255);">体验馆加载中，请稍等。</div>
                <li class="listitem" style="">
                        <div class="pic"><a href="http://www.deng.com/pavilion.htm?id=896" target="_blank" class="link"><img class="img" src="http://img02.dengimg.com/Gallery/Pavilion/img_209021.png" alt=""></a></div>
                        <dl>
                            <dt><a href="http://www.deng.com/pavilion.htm?id=896" target="_blank" class="name link">浙江省湖州市长兴县灯网体验店</a></dt>
                            <dd><span>营业时间：</span><em class="phone time">08:00 - 17:00</em></dd>
                            <dd><span>展馆电话：</span><em class="phone tel">05726811620</em></dd>
                            <dd><span>展馆地址：</span><em class="phone addr">浙江省湖州市长兴县陆汇路288号家之窗现代家居广场B馆五楼525-526</em></dd>
                        </dl>
                        <div class="ty_sendPhone mgsendSMS"><a class="phoneBtn_a" href="" data-toggle="modal" data-target=".indexSmsWinView"><i class="ex_icon phone_ic"></i>免费发送到手机</a></div>
                    </li><li class="listitem" style="">
                        <div class="pic"><a href="http://www.deng.com/pavilion.htm?id=803" target="_blank" class="link"><img class="img" src="http://img02.dengimg.com/Gallery/Pavilion/img_209014.jpg" alt=""></a></div>
                        <dl>
                            <dt><a href="http://www.deng.com/pavilion.htm?id=803" target="_blank" class="name link">广东省云浮市云城区灯网体验店</a></dt>
                            <dd><span>营业时间：</span><em class="phone time">08:00~18:00</em></dd>
                            <dd><span>展馆电话：</span><em class="phone tel">15016582399</em></dd>
                            <dd><span>展馆地址：</span><em class="phone addr">广东省云浮市云城区牧羊路46号</em></dd>
                        </dl>
                        <div class="ty_sendPhone mgsendSMS"><a class="phoneBtn_a" href="" data-toggle="modal" data-target=".indexSmsWinView"><i class="ex_icon phone_ic"></i>免费发送到手机</a></div>
                    </li><li class="listitem" style="">
                        <div class="pic"><a href="http://www.deng.com/pavilion.htm?id=931" target="_blank" class="link"><img class="img" src="http://img06.dengimg.com/Gallery/Pavilion/img_209011.jpg" alt=""></a></div>
                        <dl>
                            <dt><a href="http://www.deng.com/pavilion.htm?id=931" target="_blank" class="name link">广西省梧州市岑溪市灯网体验店</a></dt>
                            <dd><span>营业时间：</span><em class="phone time">08:00 - 22:00</em></dd>
                            <dd><span>展馆电话：</span><em class="phone tel">0774-8219212</em></dd>
                            <dd><span>展馆地址：</span><em class="phone addr">广西壮族自治区梧州市岑溪市玉梧大道西65号灯网体验店</em></dd>
                        </dl>
                        <div class="ty_sendPhone mgsendSMS"><a class="phoneBtn_a" href="" data-toggle="modal" data-target=".indexSmsWinView"><i class="ex_icon phone_ic"></i>免费发送到手机</a></div>
                    </li><li class="listitem" style="">
                        <div class="pic"><a href="http://www.deng.com/pavilion.htm?id=758" target="_blank" class="link"><img class="img" src="http://img02.dengimg.com/Gallery/Pavilion/img_209007.png" alt=""></a></div>
                        <dl>
                            <dt><a href="http://www.deng.com/pavilion.htm?id=758" target="_blank" class="name link">浙江省温州市龙湾区灯网体验店</a></dt>
                            <dd><span>营业时间：</span><em class="phone time">08:00-22:00</em></dd>
                            <dd><span>展馆电话：</span><em class="phone tel">15868585238</em></dd>
                            <dd><span>展馆地址：</span><em class="phone addr">浙江省温州市龙湾区奥体城三幢110号</em></dd>
                        </dl>
                        <div class="ty_sendPhone mgsendSMS"><a class="phoneBtn_a" href="" data-toggle="modal" data-target=".indexSmsWinView"><i class="ex_icon phone_ic"></i>免费发送到手机</a></div>
                    </li><li class="listitem" style="">
                        <div class="pic"><a href="http://www.deng.com/pavilion.htm?id=928" target="_blank" class="link"><img class="img" src="http://img02.dengimg.com/Gallery/Pavilion/img_209000.jpg" alt=""></a></div>
                        <dl>
                            <dt><a href="http://www.deng.com/pavilion.htm?id=928" target="_blank" class="name link">广西省百色市平果县灯网体验店</a></dt>
                            <dd><span>营业时间：</span><em class="phone time">08:00 - 22:00</em></dd>
                            <dd><span>展馆电话：</span><em class="phone tel">18977639839</em></dd>
                            <dd><span>展馆地址：</span><em class="phone addr">广西壮族自治区百色市平果县马头镇新兴街16号灯网体验店</em></dd>
                        </dl>
                        <div class="ty_sendPhone mgsendSMS"><a class="phoneBtn_a" href="" data-toggle="modal" data-target=".indexSmsWinView"><i class="ex_icon phone_ic"></i>免费发送到手机</a></div>
                    </li><li class="listitem" style="">
                        <div class="pic"><a href="http://www.deng.com/pavilion.htm?id=859" target="_blank" class="link"><img class="img" src="http://img05.dengimg.com/Gallery/Pavilion/img_208996.jpg" alt=""></a></div>
                        <dl>
                            <dt><a href="http://www.deng.com/pavilion.htm?id=859" target="_blank" class="name link">浙江省宁波市北仑区灯网体验店</a></dt>
                            <dd><span>营业时间：</span><em class="phone time">08:00-17:00</em></dd>
                            <dd><span>展馆电话：</span><em class="phone tel">0574—86863979</em></dd>
                            <dd><span>展馆地址：</span><em class="phone addr">浙江省宁波市北仑区黄山路港城家居广场1041～1047号</em></dd>
                        </dl>
                        <div class="ty_sendPhone mgsendSMS"><a class="phoneBtn_a" href="" data-toggle="modal" data-target=".indexSmsWinView"><i class="ex_icon phone_ic"></i>免费发送到手机</a></div>
                    </li><li class="listitem" style="">
                        <div class="pic"><a href="http://www.deng.com/pavilion.htm?id=772" target="_blank" class="link"><img class="img" src="http://img03.dengimg.com/Gallery/Pavilion/img_208987.jpg" alt=""></a></div>
                        <dl>
                            <dt><a href="http://www.deng.com/pavilion.htm?id=772" target="_blank" class="name link">吉林白城市洮北区灯网体验店</a></dt>
                            <dd><span>营业时间：</span><em class="phone time">08:00-17:00</em></dd>
                            <dd><span>展馆电话：</span><em class="phone tel">0436-5096161</em></dd>
                            <dd><span>展馆地址：</span><em class="phone addr">吉林省白城市洮北区明仁南街49号 </em></dd>
                        </dl>
                        <div class="ty_sendPhone mgsendSMS"><a class="phoneBtn_a" href="" data-toggle="modal" data-target=".indexSmsWinView"><i class="ex_icon phone_ic"></i>免费发送到手机</a></div>
                    </li><li class="listitem" style="">
                        <div class="pic"><a href="http://www.deng.com/pavilion.htm?id=422" target="_blank" class="link"><img class="img" src="http://img04.dengimg.com/Gallery/Pavilion/img_208981.jpg" alt=""></a></div>
                        <dl>
                            <dt><a href="http://www.deng.com/pavilion.htm?id=422" target="_blank" class="name link">广东省惠州市惠东县灯网体验店</a></dt>
                            <dd><span>营业时间：</span><em class="phone time">09:00~18:30</em></dd>
                            <dd><span>展馆电话：</span><em class="phone tel">0752-7123030</em></dd>
                            <dd><span>展馆地址：</span><em class="phone addr">广东省惠州市惠东县水口光辉建材馆b2-21 </em></dd>
                        </dl>
                        <div class="ty_sendPhone mgsendSMS"><a class="phoneBtn_a" href="" data-toggle="modal" data-target=".indexSmsWinView"><i class="ex_icon phone_ic"></i>免费发送到手机</a></div>
                    </li></ul>
                <!--分页-->
                <div class="ty_page pavPage">

                <a href="javascript:;">上一页</a><a href="javascript:;" class="cu">1</a><a href="javascript:;">2</a><a href="javascript:;">3</a><a href="javascript:;">4</a><a href="javascript:;">5</a><a href="javascript:;">6</a><a href="javascript:;">7</a><a href="javascript:;">8</a><a href="javascript:;">下一页</a></div>
            </div>
        </div>
    </div>
    
    <div class="bg_f0f0e8">
        <div class="container">
            <div class="joinerApply_box">
                <div class="tygTitle">
                    <h1>招商加盟申请</h1>
                    <div class="title"><i class="ico_tit_l"></i> <span>抢先占领市场</span> <i class="ico_tit_r"></i></div>
                </div>
                <div class="joinList">
                    <ul>
                        <li><em>您的姓名：</em><div class="mes"><input class="inputTxt jmsname" type="text"> <p class="hint_error_tips">请问您贵姓？</p></div></li>
                        <li><em>手机号码：</em><div class="mes"><input class="inputTxt jmstel" type="text"><p class="hint_error_tips">请输入正确的手机号码，方便工作人员联系到您。</p></div></li>
                        <li><em>详细地址：</em><div class="mes"><input class="inputTxt jmsaddr" type="text"><p class="hint_error_tips">请输入详细地址，方便工作人员联系到您。</p></div></li>
                    </ul>
                    <ul>
                        <li><em>实体店铺：</em>
                            <div class="mes">
                                <span class="checkbox selected jmsdy"><i class="check_ic"></i>有</span>
                                <span class="checkbox jmsdw"><i class="check_ic"></i>无</span>
                            </div>
                        </li>
                        <li><em>店铺面积：</em><div class="mes"><input class="inputTxt wd94 jmsmj" type="text"><span>㎡</span><p class="hint_error_tips"></p></div></li>
                        <li><em>店铺照片：</em>
                            <div class="mes">
                                <input class="inputTxt filePath" type="text" >
                                <a href="javascript:;" class="file">选择文件<input type="file" name="imagefile" id="" onchange="tiyan.imgChange(event)"></a>
                                <p class="hint_error_tips">店铺照片大小低于2M，仅支持JPG、GIF、PNG、JPEG、BMP格式。</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="joinerApply_submit"><button class="apply_btn mgapplybtn">提交申请</button></div>
            </div>
        </div>
    </div>
</div>
<!--体验馆免费发送地址-页面浮动窗口-->


<!--footer-->
<!--footer-->

<?php include('public/footer.php') ?>
	<?php include('public/footer-bottom.php') ?>
<!--返回顶部-->
<div class="backTop"><i class="arrow_tb_ic"></i><span>TOP</span></div>
<!--返回顶部-->
<div class="backTop"><i class="arrow_tb_ic"></i><span>TOP</span></div>

<!--main jquery-->

<!--兼容ie9以下的placeholder提示-->
<script src="../js/jquery.placeholder.min.js" type="text/javascript"></script>
<script src="../js/jquery.countdown.min.js" type="text/javascript"></script>

<!--bootstrap-->
<script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<!--这也是多的-->
<!--<script src="../js/jquery.SuperSlide.2.1.1.js" type="text/javascript" charset="utf-8"></script>-->
<!--main js-->

<script src="../js/deng.pc.page.js" type="text/javascript"></script>
<script src="../js/deng.pc.tiyan.js" type="text/javascript"></script>

</body>
</html>
