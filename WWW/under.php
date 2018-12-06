<?php include('public/head.php');?>
    <script src="../js/common.js" type="text/javascript"></script>
    <script src="../js/deng.ajax.js" type="text/javascript"></script>
    <script src="../js/deng.alert.js" type="text/javascript"></script>
 
    
    
       <title>线下体验店</title>
    <link rel="stylesheet" type="text/css" href="../css/under.css"/>
        <link rel="stylesheet" type="text/css" href="../css/cart.css"/>
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
<?php include('public/header.php');?>


<!--hearder结束-->

<script>
    logOut()
    headsearch()
    setCartNum()
</script>

<link rel="stylesheet" type="text/css" href="http://misc.dengimg.com/style/www/css/ex_pavilion.css"/>
<!--体验馆免费发送地址-页面浮动窗口-->
<div class="modal hide fade sms_box indexSmsWinView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title sms_title_box" id="myModalLabel">全国 <span>1000+</span>家体验馆 <em>免费发送地址到手机</em></h4>
    </div>
    <div class="modal-body">
        <div class="smsMap_pic smsWinViewMap"><img src="http://misc.dengimg.com/style/www/images/grey.png"></div>
        <div class="sms_content">
            <div class="sms_main_box">
                <div class="sndSms_expr_select">
                    <label class="Left">所在地：</label>
                    <div class="Left">
                        <ul class="sl_address">
                            <li>
                                <div class="dropdown">
                                    <button class="btn wd140 dropdown-togglet" type="button" id="dropdownMenu1"
                                            data-toggle="dropdown">
                                        <span class="txt smssheng" id="province">选择省份</span>
                                        <span class="caret"></span>
                                    </button>
                                    <ul id="provinceUl" class="dropdown-menu smspavSheng" aria-labelledby="dropdownMenu1">
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
                                    <button class="btn wd140 dropdown-togglet" type="button" id="dropdownMenu2"
                                            data-toggle="dropdown">
                                        <span class="txt smsshi" id="city">选择市级</span>
                                        <span class="caret"></span>
                                    </button>
                                    <ul id="cityUl" class="dropdown-menu smspavShi" aria-labelledby="dropdownMenu2">

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sndSms_expr_select">
                    <label class="Left">体验馆：</label>
                    <div class="Left">
                        <ul class="sl_address">
                            <li class="wd250">
                                <div class="dropdown">
                                    <button class="btn wd290 dropdown-togglet" type="button" id="dropdownMenu3"
                                            data-toggle="dropdown">
                                        <span class="txt smspav" id="pavilion">选择体验馆</span>
                                        <span class="caret"></span>
                                    </button>
                                    <ul id="pavilionUl" class="dropdown-menu smsmgPav" aria-labelledby="dropdownMenu3">

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sndSms_expr_select">
                    <label class="Left">手机号：</label>
                    <input class="sms_input Left mgRegInput" type="text" placeholder="请输入您的手机号">
                </div>
                <div class="sndSms_expr_select">
                    <label class="Left">验证码：</label>
                    <input class="sms_input Left captits" type="text" style="width: 100px" placeholder="请先输入手机">
                    <img src="cap.htm" class="code mgCode mgCapbox" style="display:none;">
                </div>
            </div>
            <div class="sms_btn" style="text-align:center;">
                <input class="sms_submit mgsmssendbtn" type="button" value="免费发送短信">
            </div>
        </div>
    </div>
</div>
<!--中间-->
<div class="pavilionWrap">
    <div class="container">
        <div class="visit_areaBox">
            <div id="carousel-slide" class="carousel slide vs_slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators hd">
                                        <li data-target="#carousel-slide" data-slide-to="0" class="active">1</li>
                                        <li data-target="#carousel-slide" data-slide-to="1" class="">2</li>
                                        <li data-target="#carousel-slide" data-slide-to="2" class="">3</li>
                                        <li data-target="#carousel-slide" data-slide-to="3" class="">4</li>
                    
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                        <img src="http://img02.dengimg.com/Gallery/Pavilion/img_209021.png" alt="">
                    </div>
                                        <div class="item ">
                        <img src="http://img06.dengimg.com/Gallery/Pavilion/img_209018.jpg" alt="">
                    </div>
                                        <div class="item ">
                        <img src="http://img01.dengimg.com/Gallery/Pavilion/img_209020.jpg" alt="">
                    </div>
                                        <div class="item ">
                        <img src="http://img07.dengimg.com/Gallery/Pavilion/img_209019.jpg" alt="">
                    </div>
                    
                </div>
            </div>
            <div class="visit_info">
                <div class="title">浙江省湖州市长兴县灯网体验店</div>
                <div class="visit_code">
                    <div id="codepavilion" >
                    </div>
                </div>
                <ul class="visit_info_list">
                    <li><label for="">联系电话：</label><span>05726811620</span></li>
                    <li><label for="">停车位：</label><span>有</span></li>
                    <li><label for="">营业时间：</label><span>08:00 - 17:00</span></li>
                    <li><label for="">馆内面积：</label><span>500㎡</span></li>
                    <li class="wd315"><label for="">本馆地址：</label> <span>浙江省湖州市长兴县陆汇路288号家之窗现代家居广场B馆五楼525-526</span></li>
                </ul>
                <div class="visit_info_submit">
                    <button class="send_btn mysendbtn" type="button" data-toggle="modal" data-target=".indexSmsWinView" data-id="896" data-paddressprovince="浙江省" data-paddresscity="湖州市" data-pshopname="浙江省湖州市长兴县灯网体验店" data-pmapmarker="119.941492,31.006085" data-province_id="12596" data-city_id="13364"><i class="ex_icon phone_ic"></i>发送地址到手机</button>
                    <button class="consult_btn" type="button" style="display:;"><i class="ex_icon consult_ic"></i>微信咨询</button>
                </div>
                <!--微信咨询-二维码弹窗-->
                <div class="consult_drop" style="display:none;">
                    <i class="cs_arrow cs_arrowT"><s></s></i>
                    <div class="main">
                        <img src="http://img04.dengimg.com/Gallery/Pavilion/img_206650.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="localCon">
            <div class="areaLocal">
                <div class="ex_tit"><b>本馆位置</b></div>
                <div class="areaLocal_map">
                    <div class="areaLocal_map" id="oMapView" data-val="119.941492,31.006085"></div>
                    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=8GFXkROBhypABFo7TmQ2zPfmpfkykpMo"></script>
                </div>
            </div>
            <div class="features_box">
                <div class="ex_tit"><b>特色服务</b></div>
                <div class="features_box_list">
                    <ul>
                        <li class="fs_bg1"><span class="fwdj"></span>
                            <p class="tit">服务到家</p>
                            <p class="smTit">HOME SERVICES</p>
                            <p class="mes">在开设有体验馆的地区，您可以选择”送货上门，专业安装”服务！</p>
                        </li>
                        <li class="fs_bg2"><span class="thwy"></span>
                            <p class="tit">退换无忧</p>
                            <p class="smTit">RETURNED WORRY</p>
                            <p class="mes">商品签收起15日内，如商品及包装保持出售时原状且配件齐全，可退换货！</p>
                        </li>
                        <li class="fs_bg3"><span class="ynzb"></span>
                            <p class="tit">一年质保</p>
                            <p class="smTit">1 YEARS WARRANTY</p>
                            <p class="mes">非特殊商品保修期为1年，凡质量问题一律免费维修，其他情况维修仅收成本！</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="hotGoods">
            <div class="ex_tit"><b>本馆热展</b></div>
            <div class="hotGoodsList">
                <ul><!--284x284-->
                    
                </ul>
            </div>
        </div>
        <div class="commentWrap">
            <div class="ex_tit">
                <b>本馆点评</b>
            </div>
            <div class="comment_box">
                <div class="commentList">
                    <ul>
                        

                    </ul>
                </div>
                <div class="commentInfo">
                    <div class="slogan">
                        <p class="no_indent">尊敬的顾客：</p>
                        <p>
                            感谢您对<span class="color_ea5413">浙江省湖州市长兴县灯网体验店</span>的支持与厚爱，为了更进一步提高我们的产品与服务
                            质量，请您留下宝贵的意见和建议！非常感谢！
                        </p>
                    </div>
                    <div class="comment_star">
                        <span class="tit">请对我们的商品及服务进行星级评定：</span>
                        <input type="hidden" name="evaluation" value="5">
                        <div class="starList">
                            <i class="star_lH"></i>
                            <i class="star_lH"></i>
                            <i class="star_lH"></i>
                            <i class="star_lH"></i>
                            <i class="star_lH"></i>
                        </div>
                    </div>

                    <div class="comment_table">
                        <p class="tit">点评内容填写</p>
                        <p><textarea class="textarea_txt mgPavContent" name="" cols="" rows=""></textarea></p>
                        <p><button type="button" class="apply_btn mgPavReviewBtn">提交点评</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->













<!--footer结束-->







<!--返回顶部-->
<div class="backTop"><i class="arrow_tb_ic"></i><span>TOP</span></div>

<!--返回顶部-->
<div class="backTop"><i class="arrow_tb_ic"></i><span>TOP</span></div>

<!--main jquery-->

<!--兼容ie9以下的placeholder提示-->
<script src="../js/jquery.placeholder.min.js" type="text/javascript"></script>
<script src="../js/jquery.countdown.min.js" type="text/javascript"></script>



<script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/jquery.SuperSlide.2.1.1.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/jquery.qrcode.min.js" type="text/javascript" charset="utf-8"></script>
<!--main js-->


<script src="../js/deng.pc.pavilion.js" type="text/javascript"></script>

 <?php include('public/footer1.php');?>
 	 <?php include('public/footer-bottom.php');?>
</body>
</html>
