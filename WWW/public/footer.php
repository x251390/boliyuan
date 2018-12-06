
<div class="backTop"><i class="arrow_tb_ic"></i><span>TOP</span></div>

<!--冻结固定头部-->
<div class="fixedHead" style="display:none;">
    <div class="container">
        <div class="floatNav fl">
            <a href="new_searchlist.html">全部商品分类 <i class="classfy_ic"></i></a>
        </div>
        <div class="header_search fl">
            <!--<form method="get" action="" >
                <div class="header_search_con">
                    <input size="large" placeholder="请输入关键字搜索" class="header_search_in" style="width: 360px;">
                    <button type="text" class="header_search_but"><i class="search_btn"></i></button>
                </div>
            </form>-->
        </div>
        <div class="float_log">
            <ul>
                <li><a href="">请登录</a> |</li>
                <li><a href="">免费注册</a></li>
            </ul>
        </div>
        <!--购物车-未登录-->
        <div class="header_cart">
            <a href="">
                <span class="header_cart_con"></span>
                <span class="header_cartTit">我的购物车</span>
            </a>
        </div>
        <!--购物车-登录之后header_cart_has-->
        <div class="header_cart header_cart_has" style="display: none;">
            <a href="">
                <span class="header_cart_con"></span>
                <span class="header_cartTit"><em>￥1215.00</em> / <em>99</em>件</span>
            </a>
        </div>

    </div>
</div>
<!--广告弹屏-->
<div class="popBg advbg" style="display:none;"></div>
<div class="advertisement_wrap animated pulse" style="display:none;">
    <div class="advertisement_pic">
        <a href="http://hd.deng.com/misc/hd/deng_Pc/main_venue.htm" target="_blank" img_src="http://misc.dengimg.com/style/www/images/pub/act_open.png?2018112301" src="http://misc.dengimg.com/style/www/images/pub/act_open.png?2018112301">
        </a>
        <i class="advClose_ic indexadbtn"></i>
    </div>
</div>

<link rel="stylesheet" href="../css/footer.css" />

<script type="text/javascript">
(function(){
	var ta=new Date();
	var oy=2018,om=06,od=16,oh=0,oi=0,os=0;
	var ostart='2018/10/6 00:00:00',oend='2018/11/14 00:00:00';
	var times, timed, currentd;
	times = Date.parse( ostart );
	timed = Date.parse( oend );
	currentd = ta.getTime();
	
	if( currentd<times || currentd>=timed )
	{
		return false;
	}
	
	var y,m,d,h,i,s,is_timeout;
	y=ta.getFullYear(),m=ta.getMonth()+1,d=ta.getDate(),h=ta.getHours(),i=ta.getMinutes(),s=ta.getSeconds();

	var Cookie={
		set:function(e,t,o,i,s,n){document.cookie=e+"="+(n?t:escape(t))+(s?"; expires="+s.toGMTString():"")+(i?"; path="+i:"; path=/")+(o?"; domain="+o:"")},
		get:function(e,t){var o=document.cookie.match(new RegExp("(^| )"+e+"=([^;]*)(;|$)"));return null!=o?unescape(o[2]):t}
	};
	var localstoreable = typeof(window.localStorage)=="object";
	var str='',curdate=ta.getDate(), vnum=0;
	if( localstoreable ){
		str = localStorage.getItem('deng_index_popwin');
	}else{
		str = Cookie.get('deng_index_popwin');
	}

	vnum = parseInt( str );vnum = isNaN(vnum)?0:vnum;
	if( vnum == curdate){return false;}
	var img = new Image();
	img.src=$('.advertisement_pic a').attr('img_src');
	$('.advertisement_pic a').append(img);
	img.onload=function(){
		$('.popBg,.advertisement_wrap').show();
		setTimeout(function(){$('.popBg,.advertisement_wrap').hide();}, 4000);
	};
	
	if( localstoreable ){
		localStorage.setItem('deng_index_popwin', curdate);
	}else{
		Cookie.set('deng_index_popwin', curdate);
	}
	$('.advClose_ic').on('click',function(e){
		e.preventDefault();
		e.stopPropagation();
		$('.popBg,.advertisement_wrap').hide();
	});
	
})();
</script>













<div class="footer">
    <!--<div class="footer-link">
        <div class="container">
            <div class="footer_ico_list">
                <ul>
                    <li class="footer_ico_1">
                        <i></i>
                        020双平台
                        <p>一家专业卖灯的网站</p>
                    </li>
                    <li class="footer_ico_2">
                        <i></i>
                        如实描述
                        <p>100%正品保障</p>
                    </li>
                    <li class="footer_ico_3">
                        <i></i>
                        15天退换
                        <p>无理由退换货</p>
                    </li>
                    <li class="footer_ico_4">
                        <i></i>
                        闪电发货
                        <p>72小时复查发货</p>
                    </li>
                    <li class="footer_ico_5">
                        <i></i>
                        无忧收货
                        <p>尊享一次免费破损补寄</p>
                    </li>
                    <li class="footer_ico_6">
                        <i></i>
                        邮费减免
                        <p>满188全国包邮</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>-->
    
    <div class="bz">
        <ul class="bz1">
            <li>
                    <img src="../img/15009667241000.png">
                    <span>正品行货 质量保证</span>
                </li><li>
                    <img src="../img/15009667811000.png">
                    <span>海量品牌 种类齐全</span>
                </li><li>
                    <img src="../img/15009667981000.png">
                    <span>专业卫浴 配套服务</span>
                </li><li>
                    <img src="../img/15009668201000.png">
                    <span>诚信敬业 以人为本</span>
                </li><li>
                    <img src="../img/15009668361000.png">
                    <span>先行赔付 捍卫客户</span>
                </li><li>
                    <img src="../img/15009668511000.png">
                    <span>货达七日 无忧退换</span>
                </li><li>
                    <img src="../img/15009668661000.png">
                    <span>价格公道 公平合理</span>
                </li><li class="none">
                    <img src="../img/15009668951000.png">
                    <span>平台保障 公信力强</span>
                </li>        </ul>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="footer_bottom">
        <div class="container">
        	
        	  <div class="ft_logo">
            <img src="../img/boliyuan1.png">
            <span>全国免费服务热线</span>
            <b>400-600-5525</b>
        </div>

        	
        	
            <div class="footer_help_links">
                <dl class="footer_help_list footer_buy">
                    <dt class="footer_tit">关于DENG.COM</dt>
                    <dd>
                        <a href="about.htm" target="_blank">公司简介</a>
                    </dd>
                    <dd>
                        <a href="meiti.htm" target="_blank">媒体报道</a>
                    </dd>
                    <dd>
                        <a href="#" target="_blank">销售渠道招商</a>
                    </dd>
                    <dd>
                        <a href="#" target="_blank">供应链招商</a>
                    </dd>
                </dl>
                
                <dl class="footer_help_list footer_buy">
                    <dt class="footer_tit">关于DENG.COM</dt>
                    <dd>
                        <a href="about.htm" target="_blank">公司简介</a>
                    </dd>
                    <dd>
                        <a href="meiti.htm" target="_blank">媒体报道</a>
                    </dd>
                    <dd>
                        <a href="#" target="_blank">销售渠道招商</a>
                    </dd>
                    <dd>
                        <a href="#" target="_blank">供应链招商</a>
                    </dd>
                </dl>
                
                
                <dl class="footer_help_list footer_pay">
                    <dt class="footer_tit">购物指南</dt>
                    <dd>
                        <a href="gwlc.htm" target="_blank">购物流程</a>
                    </dd>
                    <dd>
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2355463890&amp;site=qq&amp;menu=yes">联系客服</a>
                    </dd>
                    <dd>
                        <a href="tiyan.htm" target="_blank">线下体验指引</a>
                    </dd>
                    <dd>
                        <a href="pdb.htm" target="_blank">配灯宝</a>
                    </dd>
                </dl>
                <dl class="footer_help_list footer_distribution">
                    <dt class="footer_tit">支付与配送</dt>
                    <dd>
                        <a href="gwlc3.htm" target="_blank">支付流程</a>
                    </dd>
                    <dd>
                        <a href="#">验货与签收</a>
                    </dd>
                    <dd>
                        <a href="#">上门安装说明</a>
                    </dd>
                </dl>
                <dl class="footer_help_list footer_sell">
                    <dt class="footer_tit">售后服务</dt>
                    <dd>
                        <a href="fuwu.htm" target="_blank">服务保障</a>
                    </dd>
                    <dd>
                        <a href="tuihuo.htm" target="_blank">退货流程</a>
                    </dd>
                    <dd>
                        <a href="weixiu.htm" target="_blank">维修说明</a>
                    </dd>
                </dl>
            </div>
            <div class="footer_code">
              
               
            </div>
        </div>
    </div>





<!--兼容ie9以下的placeholder提示-->

