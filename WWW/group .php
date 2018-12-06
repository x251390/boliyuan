<?php include('public/head.php');?>

  
   <title>拼团</title>
    <script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="../js/common.js" type="text/javascript"></script>
    <script src="../js/deng.ajax.js" type="text/javascript"></script>
    <script src="../js/deng.alert.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="../css/header.css" />
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
<script>
    logOut()
    headsearch()
    setCartNum()
</script>


<link rel="stylesheet" type="text/css" href="../css/list_style.css"/>
<div id="carousel-example-generic" class="carousel slide atv_banner" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
                <div class="item active">
            <img src="http://img07.dengimg.com/Gallery/AutoLink/img_176770.jpg%401920w_420h.jpg" alt="#">
        </div>
        
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        &lsaquo;
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        &rsaquo;
    </a>

</div>

<!--中间-->
<div class="wrap pt16">
    <div class="container">
        <!--groupWrapper预告加hover-->
        <div class="groupWrapper">
            <div class="groupHead">
                <!--当前状态是红色cu,预告是绿色cu2-->
                <ul>
                    <li class="cu">正在进行第118期</li>
                    <li>第119期预告</li>
                </ul>
            </div>
            <!--当前-->
            <div class="groupTime">
                <div class="saveTime">火爆开团中，距离结束仅剩：
                    <div class="time mgtime" data-time="457361">
                        <span class="num day">0</span><em>天</em>
                        <span class="num hour">0</span><em>时</em>
                        <span class="num min">0</span><em>分</em>
                        <span class="num sec">0</span><em>秒</em>

                    </div>
                </div>
                <div class="groupProcess">
                    <ul>
                        <li>抢购截至时间：2018-12-10</li>
                        <li><em>&gt;</em></li>
                        <li>组织工厂生产：2018-12-11</li>
                        <li><em>&gt;</em></li>
                        <li>开始发货时间：2018-12-18</li>
                    </ul>
                </div>
            </div>
            <!--预告-->
			
			

            <div class="groupTime noticeGroupTime">
                <div class="saveTime">
                    <div class="time mgtimeNext" data-time="457361">
                        <span class="num day">0</span><em>天</em>
                        <span class="num hour">0</span><em>时</em>
                        <span class="num min">0</span><em>分</em>
                        <span class="num sec">0</span><em>秒</em>
                        后活动开始
                    </div>
                </div>
                <div class="groupProcess">
                    <ul>
                        <li>抢购截至时间：2018-12-17</li>
                        <li><em>&gt;</em></li>
                        <li>组织工厂生产：2018-12-18</li>
                        <li><em>&gt;</em></li>
                        <li>开始发货时间：2018-12-25</li>
                    </ul>
                </div>
            </div>
            <!--当前列表-->
			
			
			<div class="groupList">
                <ul class="nowlist">
                    <li class="listexample" style="display: none">
                        <div class="pic"><a href="" class="link"><img class="img" src="http://misc.dengimg.com/style/www/images/pub/loading.gif"></a></div>
                        <div class="info">
                            <div class="title"><a href="" class="link name">千兆灯饰客厅吊灯欧式水晶吊灯简约现代餐厅卧室大…</a></div>
                            <div class="data guige">规格：2头 黄光 全铜灯架</div>
                            <div class="processBox">
                                <div class="progress">
                                    <div class="progress-bar bai" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                        0%
                                    </div>
                                </div>
                                <p>
                                    <span class="fl">已成交<em class="color_ea5413 chengjiao">0</em>件</span>
                                    <span class="fr" style=""><em class="chengtuanshu">100</em>件成团</span>
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <div class="allPrice">
                                <div class="salePrice">￥<em class="price">1057.20</em></div>
                                <div class="right">
                                    <p class="mPrice"><em class="moneyname">会员价</em>：￥<em class="txt_line yuanprice">1258</em></p>
                                    <p class="savePrice">省￥<em class="shengprice">200.80</em></p>
                                </div>
                            </div>
                            <a href="" class="groupBtn fr link">去拼团</a>
                        </div>
                    </li>
                    <ul class="myMainViewList">
                        <div class="noshop_list_tips noMsgTips" style="display: none">很抱歉，暂无团购商品。</div>
                        <div class="noshop_list_tips waitMsgTips" style="display: none;">商品加载中，请稍等。</div>
                    </ul>

                <li class="listitem" style="">
                        <div class="pic"><a href="108194.htm" class="link"><img class="img" src="http://img05.dengimg.com//ManufactorImage/Shop/img_647133.jpg%40336w_336h.jpg"></a></div>
                        <div class="info">
                            <div class="title"><a href="108194.htm" class="link name">艺森木艺 亚克力客厅 餐厅雕刻中式</a></div>
                            <div class="data guige">规格 : S6134-120*80</div>
                            <div class="processBox">
                                <div class="progress">
                                    <div class="progress-bar bai" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                </div>
                                <p>
                                    <span class="fl">已成交<em class="color_ea5413 chengjiao">15</em>件</span>
                                    <span class="fr" style=""><em class="chengtuanshu">30</em>件成团</span>
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <div class="allPrice">
                                <div class="salePrice">￥<em class="price">966</em></div>
                                <div class="right">
                                    <p class="mPrice"><em class="moneyname">一口价</em>：￥<em class="txt_line yuanprice">1208</em></p>
                                    <p class="savePrice">比平时省242元</p>
                                </div>
                            </div>
                            <a href="108194.htm" class="groupBtn fr link">去拼团</a>
                        </div>
                    </li><li class="listitem" style="">
                        <div class="pic"><a href="99330.htm" class="link"><img class="img" src="http://img06.dengimg.com//ManufactorImage/Shop/img_580480.jpg%40336w_336h.jpg"></a></div>
                        <div class="info">
                            <div class="title"><a href="99330.htm" class="link name">当代华匠铁艺客厅 走廊/过道/玄关其他/other现代简约 头数:三头及以上</a></div>
                            <div class="data guige">头数 : 3头</div>
                            <div class="processBox">
                                <div class="progress">
                                    <div class="progress-bar bai" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">77%</div>
                                </div>
                                <p>
                                    <span class="fl">已成交<em class="color_ea5413 chengjiao">23</em>件</span>
                                    <span class="fr" style=""><em class="chengtuanshu">30</em>件成团</span>
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <div class="allPrice">
                                <div class="salePrice">￥<em class="price">105</em></div>
                                <div class="right">
                                    <p class="mPrice"><em class="moneyname">一口价</em>：￥<em class="txt_line yuanprice">168</em></p>
                                    <p class="savePrice">比平时省63元</p>
                                </div>
                            </div>
                            <a href="99330.htm" class="groupBtn fr link">去拼团</a>
                        </div>
                    </li><li class="listitem" style="">
                        <div class="pic"><a href="106947.htm" class="link"><img class="img" src="http://img07.dengimg.com//ManufactorImage/Shop/img_634192.jpg%40336w_336h.jpg"></a></div>
                        <div class="info">
                            <div class="title"><a href="106947.htm" class="link name">戈登堡铁艺 玻璃 水晶 锌合金 布艺客厅 高层/复式电镀欧式 头数:15头</a></div>
                            <div class="data guige">头数 : 10+5头（直径1070*高度770mm高度不含吊链）</div>
                            <div class="processBox">
                                <div class="progress">
                                    <div class="progress-bar bai" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                </div>
                                <p>
                                    <span class="fl">已成交<em class="color_ea5413 chengjiao">15</em>件</span>
                                    <span class="fr" style=""><em class="chengtuanshu">30</em>件成团</span>
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <div class="allPrice">
                                <div class="salePrice">￥<em class="price">2283</em></div>
                                <div class="right">
                                    <p class="mPrice"><em class="moneyname">一口价</em>：￥<em class="txt_line yuanprice">2854</em></p>
                                    <p class="savePrice">比平时省571元</p>
                                </div>
                            </div>
                            <a href="106947.htm" class="groupBtn fr link">去拼团</a>
                        </div>
                    </li><li class="listitem" style="">
                        <div class="pic"><a href="99968.htm" class="link"><img class="img" src="http://img06.dengimg.com//Gallery/Goods/img_190958.jpg%40336w_336h.jpg"></a></div>
                        <div class="info">
                            <div class="title"><a href="99968.htm" class="link name">铜道玻璃 铜客厅 书房/卧室美式简约 头数:8头</a></div>
                            <div class="data guige">头数 : 8头</div>
                            <div class="processBox">
                                <div class="progress">
                                    <div class="progress-bar bai" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;">63%</div>
                                </div>
                                <p>
                                    <span class="fl">已成交<em class="color_ea5413 chengjiao">19</em>件</span>
                                    <span class="fr" style=""><em class="chengtuanshu">30</em>件成团</span>
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <div class="allPrice">
                                <div class="salePrice">￥<em class="price">1831</em></div>
                                <div class="right">
                                    <p class="mPrice"><em class="moneyname">一口价</em>：￥<em class="txt_line yuanprice">2289</em></p>
                                    <p class="savePrice">比平时省458元</p>
                                </div>
                            </div>
                            <a href="99968.htm" class="groupBtn fr link">去拼团</a>
                        </div>
                    </li><li class="listitem" style="">
                        <div class="pic"><a href="87749.htm" class="link"><img class="img" src="http://img07.dengimg.com//ManufactorImage/Goods/img_804376.jpg%40336w_336h.jpg"></a></div>
                        <div class="info">
                            <div class="title"><a href="87749.htm" class="link name">琪盾铁艺 木艺 亚克力儿童房 书房/卧室喷漆磨砂儿童/卡通</a></div>
                            <div class="data guige">尺寸 : 中号-直径60cm</div>
                            <div class="processBox">
                                <div class="progress">
                                    <div class="progress-bar bai" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                </div>
                                <p>
                                    <span class="fl">已成交<em class="color_ea5413 chengjiao">24</em>件</span>
                                    <span class="fr" style=""><em class="chengtuanshu">30</em>件成团</span>
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <div class="allPrice">
                                <div class="salePrice">￥<em class="price">500</em></div>
                                <div class="right">
                                    <p class="mPrice"><em class="moneyname">一口价</em>：￥<em class="txt_line yuanprice">630</em></p>
                                    <p class="savePrice">比平时省130元</p>
                                </div>
                            </div>
                            <a href="87749.htm" class="groupBtn fr link">去拼团</a>
                        </div>
                    </li><li class="listitem" style="">
                        <div class="pic"><a href="98028.htm" class="link"><img class="img" src="http://img01.dengimg.com//ManufactorImage/Shop/img_628012.jpg%40336w_336h.jpg"></a></div>
                        <div class="info">
                            <div class="title"><a href="98028.htm" class="link name">暮晖铁艺客厅 书房/卧室喷漆磨砂美式乡村 头数:10头</a></div>
                            <div class="data guige">头数 : 8001-10朝下</div>
                            <div class="processBox">
                                <div class="progress">
                                    <div class="progress-bar bai" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">57%</div>
                                </div>
                                <p>
                                    <span class="fl">已成交<em class="color_ea5413 chengjiao">17</em>件</span>
                                    <span class="fr" style=""><em class="chengtuanshu">30</em>件成团</span>
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <div class="allPrice">
                                <div class="salePrice">￥<em class="price">487</em></div>
                                <div class="right">
                                    <p class="mPrice"><em class="moneyname">一口价</em>：￥<em class="txt_line yuanprice">609</em></p>
                                    <p class="savePrice">比平时省122元</p>
                                </div>
                            </div>
                            <a href="98028.htm" class="groupBtn fr link">去拼团</a>
                        </div>
                    </li></ul>
                <div class="page nowpage">

                <a href="javascript:;">上一页</a><a href="javascript:;" class="cu">1</a><a href="javascript:;">下一页</a></div>
                <div class="moreProduct" style="display: none">正在加载更多团购商品</div>
            </div>
			
			
			
			
			
			
			
			
			
			
			
          <!--预告列表-->
            <div class="groupList noticeGroupList">
                <ul class="nextlist">
                    <li class="listexamplenext" style="display: none">
                        <div class="pic"><a href="" class="link"><img class='img' src="../images/pub/loading.gif"></a></div>
                        <div class="info">
                            <div class="title"><a href="" class="name link">千兆灯饰客厅吊灯欧式水晶吊灯简约现代餐厅卧室大…</a></div>
                            <div class="data guige">规格：2头 黄光 全铜灯架</div>
                            <div class="processBox">
                                <div class="progress">
                                    <div class="progress-bar bai" role="progressbar" aria-valuenow="0"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                         0%
                                    </div>
                                </div>
                                <p>
                                    <span class="fl">已成交<em class="color_ea5413 chengjiao">0</em>件</span>
                                    <span class="fr" style="margin-right: 50px;"><em class="chengtuanshu">100</em>件成团</span>
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <div class="allPrice">
                                <div class="salePrice">￥<em class="price">1057.20</em></div>
                                <div class="right">
                                    <p class="mPrice"><em class="moneyname">会员价</em>：￥<em class="txt_line yuanprice">1258</em></p>
                                    <p class="savePrice">省￥*</p>
                                </div>
                            </div>
                            <a href="" class="groupBtn fr link">去拼团</a>
                        </div>
                    </li>
                    <ul class="myMainViewList">
                        <div class="noshop_list_tips noMsgTips1" style="display: none">很抱歉，暂无团购商品。</div>
                        <div class="noshop_list_tips waitMsgTips1" style="display: none">商品加载中，请稍等。</div>
                    </ul>

                </ul>
                <div class="page nextpage">

                </div>
                <div class="moreProduct" style="display: none">正在加载更多团购商品</div>
            </div>
        </div>

    </div>
</div>


<!--footer-->

<!--footer-->
<?php include('public/footer.php');?>
	<?php include('public/footer-bottom.php');?>

<!--返回顶部-->
<div class="backTop"><i class="arrow_tb_ic"></i><span>TOP</span></div>

<!--main jquery-->

<!--兼容ie9以下的placeholder提示-->
<script src="../js/jquery.placeholder.min.js" type="text/javascript"></script>
<script src="../js/jquery.countdown.min.js" type="text/javascript"></script>

<!--bootstrap-->


<script src="../js/jquery.SuperSlide.2.1.1.js" type="text/javascript" charset="utf-8"></script>
<!--main js-->


<script src="../js/deng.pc.tuan.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/deng.pc.page.js" type="text/javascript" charset="utf-8"></script>

<script>

</script>

</body>

</html>