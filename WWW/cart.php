<?php include('public/head.php')?>
    
    
    
    
 <script src="../js/common.js" type="text/javascript"></script>
    <script src="../js/mg/deng.ajax.js" type="text/javascript"></script>
    <script src="../js/mg/deng.alert.js" type="text/javascript"></script>
     <link rel="stylesheet" type="text/css" href="../css/cart_style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/pop.css"/>
        <link rel="stylesheet" href="../css/sign in.css" />
<link rel="stylesheet" href="../css/cart.css" />
     <title>购物车</title>
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
	
	
	
	<div class="header_mid">
        <div class="header_logo">
            <a href="index.htm"> <img src="../img/boliyuan.png" alt="一家专业卖灯的网站"></a>
            <span class="logoTxt">购物车</span>
        </div>
        <div class="progressbar">
            <ul>
                <li class="cu">
                    <i class="step_ic">1</i>
                    <span>我的购物车</span>
                </li>
                <li>
                    <i class="step_ic">2</i>
                    <span>填写核对订单信息</span>
                    <span class="s_line"></span>
                </li>
                <li>
                    <i class="step_ic">3</i>
                    <span>订单支付</span>
                    <span class="s_line"></span>
                </li>
            </ul>
        </div>

    </div>
  
<!--header结束-->
<script>
    logOut()
    headsearch()
    setCartNum()
</script>

<!--购物车开始-->
<div class="wrapMain">


    
    <table cellpadding="0" cellspacing="0" class="shopCard_list_head">
        <tbody>
        <tr>
            <td style="width: 400px;">
                <div class="selectCon" id="AllCheck"><i class="shop_icons sl_ic"></i><label for="" class="all_sl">全选</label></div>
                商品
            </td>
            <td style="width: 136px;">单价(元)</td>
            <td style="width: 140px;">数量(件)</td>
            <td style="width: 120px;">金额（元）</td>
            <td style="width: 100px;">操作</td>
        </tr>
        </tbody>
    </table>
    <!--默认全选中商品。-->

            <div class="shop_brandBox">
        <div class="shop_brandTop">
            <div class="shop_brand_l"><i class="shop_icons sl_ic  shopCheck"></i>
                <span class="bank"><em class="bankTit">品牌:</em><em class="name">朵艺</em></span>
            </div>
            <span class="shop_brand_r">商品小计：<em class="shopScla">￥0</em></span>
        </div>
        <table cellpadding="0" cellspacing="0" class="shopCard_list_con">
            <tbody>
                        <tr class="cartItem" data-cid="1804560">
                <td style="width: 400px;">
                    <div class="shopCard_select"><i class="shop_icons sl_ic  goodsCheck"></i></div>
                    <div class="shopCon">
                        <div class="pic"><a href="78781.htm"><img src="http://img07.dengimg.com//ManufactorImage/Shop/img_459164.jpg%4064w_64h.jpg"></a></div>
                        <dl class="info">
                            <dt class="tit"><a href="78781.htm">
														led灯泡e14螺口尖泡9瓦E27球泡暖白正白led光源5W7W节能灯大小螺口蜡烛灯泡</a></dt>
                            <dd>灯头型号：E14螺口蜡烛泡</dd>
                            <dd>型号：E14螺口蜡烛泡白光12瓦</dd>
                        </dl>
                    </div>
                </td>
                <td style="width: 136px;" class="onePrice">
																	<em class="valPrice">21</em>
											                </td>
                <td style="width: 140px;">
                    <dl class="i_num">
                        <!--加(不能点击状态):num_add_disabled,减不能点击:num_reduce_disabled-->
                        <dd class="num_box">
                            <span data-cid="1804560" data-min="1" data-ku="1762" class="num_reduce mgNumReduce num_reduce_disabled">－</span>
                            <em class="num_input">
                                <input class="myInputNum" type="text" value="1" data-val="1" data-cid="1804560" data-min="1" data-ku="1762">
                            </em>
                            <span class="num_add mgNumAdd" data-cid="1804560" data-min="1" data-ku="1762">＋</span>
                        </dd>
                    </dl>
                </td>
                <td style="width: 120px;" class="oneScla">21</td>
                <td style="width: 100px;"><span class="btn-text mgAddFav" data-gid="78781">加入收藏</span>
                    <i class="shop_icons delect_ic mgDelete" data-cid="1804560" data-gid="78781" data-toggle="modal" data-target=".delItemView"></i>
                </td>
            </tr>
						
			
            
            </tbody>
        </table>
    </div>
        <div class="shop_brandBox">
        <div class="shop_brandTop">
            <div class="shop_brand_l"><i class="shop_icons sl_ic  shopCheck"></i>
                <span class="bank"><em class="bankTit">品牌:</em><em class="name">东的</em></span>
            </div>
            <span class="shop_brand_r">商品小计：<em class="shopScla">￥0</em></span>
        </div>
        <table cellpadding="0" cellspacing="0" class="shopCard_list_con">
            <tbody>
                        <tr class="cartItem" data-cid="1804558">
                <td style="width: 400px;">
                    <div class="shopCard_select"><i class="shop_icons sl_ic  goodsCheck"></i></div>
                    <div class="shopCon">
                        <div class="pic"><a href="58682.htm"><img src="http://img04.dengimg.com//Gallery/Goods/img_180925.jpg%4064w_64h.jpg"></a></div>
                        <dl class="info">
                            <dt class="tit"><a href="58682.htm">
														东的光源</a></dt>
                            <dd>规格：E14-8W圆柱泡变光</dd>
                            <dd>型号：E14-8W圆柱泡变光</dd>
                        </dl>
                    </div>
                </td>
                <td style="width: 136px;" class="onePrice">
																	<em class="valPrice">28</em>
											                </td>
                <td style="width: 140px;">
                    <dl class="i_num">
                        <!--加(不能点击状态):num_add_disabled,减不能点击:num_reduce_disabled-->
                        <dd class="num_box">
                            <span data-cid="1804558" data-min="1" data-ku="2449" class="num_reduce mgNumReduce num_reduce_disabled">－</span>
                            <em class="num_input">
                                <input class="myInputNum" type="text" value="1" data-val="1" data-cid="1804558" data-min="1" data-ku="2449">
                            </em>
                            <span class="num_add mgNumAdd" data-cid="1804558" data-min="1" data-ku="2449">＋</span>
                        </dd>
                    </dl>
                </td>
                <td style="width: 120px;" class="oneScla">28</td>
                <td style="width: 100px;"><span class="btn-text mgAddFav" data-gid="58682">加入收藏</span>
                    <i class="shop_icons delect_ic mgDelete" data-cid="1804558" data-gid="58682" data-toggle="modal" data-target=".delItemView"></i>
                </td>
            </tr>
						
			
            
            </tbody>
        </table>
    </div>
        <div class="shop_brandBox">
        <div class="shop_brandTop">
            <div class="shop_brand_l"><i class="shop_icons sl_ic  shopCheck"></i>
                <span class="bank"><em class="bankTit">品牌:</em><em class="name">艺森</em></span>
            </div>
            <span class="shop_brand_r">商品小计：<em class="shopScla">￥0</em></span>
        </div>
        <table cellpadding="0" cellspacing="0" class="shopCard_list_con">
            <tbody>
                        <tr class="cartItem" data-cid="1804556">
                <td style="width: 400px;">
                    <div class="shopCard_select"><i class="shop_icons sl_ic  goodsCheck"></i></div>
                    <div class="shopCon">
                        <div class="pic"><a href="47890.htm"><img src="http://img03.dengimg.com//goodsWaterMake/img_manufactor_57094.png%4064w_64h.png"></a></div>
                        <dl class="info">
                            <dt class="tit"><a href="47890.htm">
														新款led实木吸顶灯 圆灯 客厅 餐厅 书房卧室灯 橡木边框 仿云石亚克力</a></dt>
                            <dd>规格：8226-78大</dd>
                            <dd>型号：8226-78大</dd>
                        </dl>
                    </div>
                </td>
                <td style="width: 136px;" class="onePrice">
																	<em class="valPrice">1008</em>
											                </td>
                <td style="width: 140px;">
                    <dl class="i_num">
                        <!--加(不能点击状态):num_add_disabled,减不能点击:num_reduce_disabled-->
                        <dd class="num_box">
                            <span data-cid="1804556" data-min="1" data-ku="30" class="num_reduce mgNumReduce num_reduce_disabled">－</span>
                            <em class="num_input">
                                <input class="myInputNum" type="text" value="1" data-val="1" data-cid="1804556" data-min="1" data-ku="30">
                            </em>
                            <span class="num_add mgNumAdd" data-cid="1804556" data-min="1" data-ku="30">＋</span>
                        </dd>
                    </dl>
                </td>
                <td style="width: 120px;" class="oneScla">1008</td>
                <td style="width: 100px;"><span class="btn-text mgAddFav" data-gid="47890">加入收藏</span>
                    <i class="shop_icons delect_ic mgDelete" data-cid="1804556" data-gid="47890" data-toggle="modal" data-target=".delItemView"></i>
                </td>
            </tr>
						
			
            
            </tbody>
        </table>
    </div>
    
        <!--失效:failShop-->
    <div class="shop_brandBox failShop" style="display:none;">
        <div class="shop_brandTop">
            <div class="shop_brand_l"><i class="shop_icons sl_ic sl_ic_selected"></i>
                <span class="bank"><em class="bankTit">品牌:</em><em class="name">東的</em></span>
            </div>
            <span class="shop_brand_r">商品小计：<em>￥2000</em></span></div>
        <table cellpadding="0" cellspacing="0" class="shopCard_list_con">
            <tbody>
            <tr>
                <td style="width: 400px;">
                    <div class="shopCard_select">失效</div>
                    <div class="shopCon">
                        <div class="pic"><a href=""><img src="http://misc.dengimg.com/style/www/images/shopcard/shop_pic01.jpg"></a></div>
                        <dl class="info">
                            <dt class="tit"><a href="">欧式树脂吊灯铁艺单头书房卧室灯</a></dt>
                            <dd>规格：Φ38cm*H58cm</dd>
                            <dd>型号：MCE22536</dd>
                        </dl>
                    </div>
                </td>
                <td style="width: 136px;">
                    <p class="line_center">零售价：<em>30</em></p>
                    <p class="groupTxt">团购价：<em>15</em></p>
                </td>
                <td style="width: 140px;">
                    <dl class="i_num">
                        <!--加(不能点击状态):num_add_disabled,减不能点击:num_reduce_disabled-->
                        <dd class="num_box">
                            <span class="num_reduce num_reduce_disabled">－</span>
                            <em class="num_input">
                                <input type="text" value="1">
                            </em>
                            <span class="num_add ">＋</span>
                        </dd>
                    </dl>
                </td>
                <td style="width: 120px;">500</td>
                <td style="width: 100px;"><span class="btn-text">加入收藏</span> <i class="shop_icons delect_ic "></i></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--“撤销本次删除”：如本次的商品是批量删除的，则撤销本次的批量删除操作。-->
    <div class="shopCard_delTips mgReDelbox" style="display:none;"> 成功删除<em class="redelnum">1</em>件商品，如有误，可<a class="color_ea5413 reDelfun" href="javascript:;">撤销本次删除</a></div>
    <div class="shopCard_total">
        <div class="action">
            <div class="selectAll" id="AllCheck2"><i class="shop_icons sl_ic"></i><label for="" class="all_sl2">全选</label></div>
            <div class="operation">
                <span class="selectFav" style="display:none;">加入收藏</span>
                <span class="selectDel" data-target=".delItemView" data-toggle="modal">删除</span>
                <span style="display:none;">清除失效商品</span></div>
        </div>
        <div class="right">
            <div class="priceCon">
                <p>
                    <span>已选择 <em class="selectNum">0</em> 件商品</span><span class="totalPriceCon">总价：<em
                        class="totalPrice mgTotalP">￥0</em></span>
                </p>
                <p class="tips">未含运费和送装服务费</p>
            </div>
            <button class="shopBtn calcBtn" type="button">去结算</button>
        </div>
    </div>
</div>
<!--购物车结束-->

<!--footer-->
        <?php include('public/footer1.php');?>
        	  <?php include('public/footer-bottom.php');?>
      
        	
        	
<!--返回顶部-->
<div class="backTop"><i class="arrow_tb_ic"></i><span>TOP</span></div>

<!--删除商品弹窗-->
<div class="modal hide fade delItemView wd480" tabindex="-1" role="dialog" aria-labelledby="myModalDel"
     aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalDel">删除</h4>
    </div>
    <div class="modal-body">
        <div class="delMain">
            <div class="pic"><i class="del_icon"></i></div>
            <div class="info">
                <p class="tit">确定要删除商品？</p>
                <p class="txt">您可以选择移动到收藏或删除商品。</p>
                <p class="submit">
                    <a class="delbtn mgSureDel" href="javascript:;">删除</a>
                    <a class="mobileCollect mgSureFav" href="javascript:;">移动到收藏</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!--删除商品弹窗-->



<!--兼容ie9以下的placeholder提示-->
<script src="../js/jquery.placeholder.min.js" type="text/javascript"></script>
<script src="../js/jquery.countdown.min.js" type="text/javascript"></script>

<!--bootstrap-->
<script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>

<script src="../js/jquery.SuperSlide.2.1.1.js" type="text/javascript" charset="utf-8"></script>
<!--main js-->
<script src="../js/deng.pc.nav.js" type="text/javascript"></script>
<script src="../js/deng.pc.cart.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){


		
        $('.opt_cls_btn_expand').click(function(){
			var pobj = $(this).closest('.package-list');
            pobj.css('max-height', 'initial');
            pobj.find('ul').css('max-height', 'initial');
            $(this).hide();
            pobj.find('.btn-collapse').show();
        });
		
        $('.opt_cls_btn_collapse').click(function(){
			var pobj = $(this).closest('.package-list');
            pobj.css('max-height', '95px');
            pobj.find('ul').css('max-height', '75px');
            $(this).hide();
            pobj.find('.btn-expand').show();
        });

        //套餐商品名称对齐
        var maxVal = $('.package-list li .name').width();
        $('.package-list li .name').each(function () {
            var v = $(this).width();
            if (v > maxVal) {
                maxVal = v
            }
        });
        $('.package-list li .name').css('width', maxVal)

        //套餐商品规格对齐
        var maxVal2 = $('.package-list li .specification').width();
        $('.package-list li .specification').each(function () {
            var v = $(this).width();
            if (v > maxVal2) {
                maxVal2 = v
            }
        });
        $('.package-list li .specification').css('width', maxVal2)


});

</script>


    
</body>
</html>
