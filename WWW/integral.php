
<?php include('public/head.php');?>
    <title>薄利圆商城</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css"><!--首页页面样式-->
    <link rel="stylesheet" type="text/css" href="/css/index.css"><!--首页页面样式加底部-->
    <link rel="stylesheet" type="text/css" href="/css/zhuce.css"><!-- 注册页面样式-->
    <link rel="stylesheet" type="text/css" href="/css/tttjian.css">
    <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>

</head>
<body>
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



<?php include('public/alert.php');?>
















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

<?php include('public/header-bottom.php');?>


<div class="psmain main_list">

    <?php include('public/off-left.php');?>


    <div class="ps_floatright">
        <div class="psright">
            <div class="prtop">
                <span>线下体验</span>
            </div>
            <div class="answer">
                <p class="red_indent">本着“最快，最好，最优”的经营理念,薄利圆平台建立1000家线下体验店。薄利圆相信：只有做到线下和线上相结合的服务流程，才能提高将我们的服务做好，才能拉近客户与薄利圆的关系。</p>
                <p class="red_ans">1.为什么建立体验店?</p>
                <p class="red_indent">大部分的物品因为体积，重量，搬运不便等产品特性影响，无论是传统大型商场还是各种新兴的网络销售平台，无法做到让像线下服装店让客户先试穿在购买。当客户购买的商品涉及所放置的房间的大小或者颜色搭配的时候，无法看到实时的视觉效果。
                    对于上述问题，薄利圆建立线下体验店，不仅能够提供舒适的购物环境，还能解决因为产品特性所带来的不能直观的展示物品放置家中的影响，带给客户完美的购物体验。</p>
                <p class="red_ans">2.体验店有哪些优势？</p>
                <p class="red_indent">薄利圆所建立的线下体验店不仅能够让客户看见实物；还在体验店放置了终端屏，里面直接内置薄利圆线上购物平台，包含：新品推荐，热销品牌展示，分类导购，商品查询与展示，广告机等。能够让客户直接在体验店里体验一条龙的服务。方便，快捷是薄利圆线下体验店所遵循的宗旨。</p>
                <p class="red_ans">3.网上平台与线下体验店的差距？</p>
                <p class="red_indent">线上购买物品最怕的就是看了产品的信息，但是还是不了解该商品；当询问客服的时候，又因为各种原因所带来的客服不答理你或者直接就是购物全程自主；或者直接靠碰运气买好商品。并且在线上购买某些东西时。必须要事先使用过，才能判断购买的商品是否适合自身；但是线下不同，薄利圆线下体验店为了带给客户更好的服务和快速的等到客户的反馈信息，薄利圆平台建立的线下体验店均拥有热情而专业的导购员，能够为客户更全面的了解该商品的信息，推荐适合的商品给客户。并且顾客在购买时，还可以先进行体验，导购员也可根据顾客自身所提出的各种需要，将薄利圆最新，最适合客户的商品推荐给客户，避免客户购买到自己不适合对商品，花了冤枉钱。进而提高了用户的体验度。</p>
                <p class="red_ans">4.线上和线下购物人群有哪些不同？</p>
                <p class="red_indent">现在有不少的老年人等因为网络购物的诸多好处的吸引，也想加入网购大军。但是因为他们年纪较大，记忆力衰退等原因，学起网购困难不少。加之网络平台所售商品的种类太多，不知道如何购买自己想要的；不懂支付工具，担心财产安全；担心质量问题，又不能和卖家实时沟通等原因。而线下体验店不同，老年人完全能够根据导购员轻松购物。完美的解决在网上购物所带来的各种问题,能够满足人群先体验在购买的意愿。</p>
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>关于积分</span>
            </div>
            <div class="answer">
                <p class="red_ans">1.积分获取方式</p>
                <p>
                    <span class="indent_text">1-1积分简介：</span>
                    用户在薄利圆商城进行购物，商品评价，晒单，交易满意度回馈，移动端下单，指定区域在线支付都可以获得积分。积分仅可在薄利圆使用。积分可以用来参与兑换活动，也可用于支付薄利圆商城订单。<br />
                    <span class="indent_text">1-2具体获取方式：</span><br />
                    <span class="indent_trade">1-2-1购物：</span>
                    订单完成后，在符合以下情形时，薄利圆将按订单金额参考下表视用户订单情况给予积分。
                </p>
                <table class="integral_table">
                    <tr><th>付单应付金额</th><th>获得积分</th></tr>
                    <tr><td>[0~99]元</td><td>1分</td></tr>
                    <tr><td>[99~299]元</td><td>10分</td></tr>
                    <tr><td>[299~499]元</td><td>20分</td></tr>
                    <tr><td>[499~999]元</td><td>40分</td></tr>
                    <tr><td>[999~1999]元</td><td>60分</td></tr>
                    <tr><td>[1999及以上]元</td><td>80分</td></tr>
                    <tr><td></td><td></td></tr>
                </table>
                <p>
                    <span class="indent_trade_d">1-2-1-1.</span>
                    订单金额是指用户实际以现金/银行卡余额方式支付的金额。（以公司转账和邮 局汇款的方式支付不计算积分）<br />
                    <span class="indent_trade_d">1-2-1-2.</span>
                    订单完成是指：订单已显示完成且未办理退货手续。<br />
                    <span class="indent_trade">1-2-2商品评价：</span>
                    使用商品评价功能，我们将在您评价成功后，视评价价值给予相应的积分奖励（用户只能评价该用户名下购买过的商品，且该商品优惠后金额大于或等于10元）。您的会员等级越高，评价获得的积分越多。<br />
                    <span class="special">特别说明：</span>优惠后金额是指用户实际以现金/银行卡余额方式支付的金额。 <br />
                    <span class="leaguer">以下会员级别评价获得积分的数量仅供参考：</span>
                </p>
                <table class="leaguer_table">
                    <tr><th>会员级别</th><th>评价获得的积分</th></tr>
                    <tr><td>普通会员</td><td>10分</td></tr>
                    <tr><td>铜牌会员</td><td>20分</td></tr>
                    <tr><td>银牌会员</td><td>30分</td></tr>
                    <tr><td>金牌会员</td><td>40分</td></tr>
                    <tr><td>铂金会员</td><td>50分</td></tr>
                    <tr><td>钻石会员</td><td>60分</td></tr>
                    <tr><td>皇冠会员</td><td>70分</td></tr>
                </table>
                <p>
                    <span class="indent_trade_d">1-2-2-1.</span>
                    您只能对在180天内该用户名下购买的商品进行评价，0元商品可以评价但不赠送积分。<br />
                    <span class="indent_trade_d">1-2-2-2.</span>
                    购买时间相差超过15日的不同订单中的相同商品，可以分别评价并有资格获得积分；同一订单或相隔15日内不同订单中的相同商品，只能评价一次并且获得一次积分；<br />
                    <span class="indent_trade_d">1-2-2-3.</span>
                    每个商品（除图书、音像）的前5位评价用户可获得2倍积分； <br />
                    <span class="indent_trade_d">1-2-2-4.</span>
                    退换货订单产生的商品评价将会被删除，同时也扣除该评价已获得的积分；<br />
                    <span class="indent_trade_d">1-2-2-5.</span>
                    无效评价不给予积分；<br />
                    <span class="indent_trade_d">1-2-2-6.</span>
                    无效评价包括：拷贝自己或者他人评价内容超过80%以上（以字数为准）；使用标点符号过多的；评价内容没有任何参考价值、被5名以上网友举报或者违反法律、法规的； 无效评价数量超过5条，则一年内该用户名（id）参与的产品评价均不给予积分，过往的无效评价可以不计。<br />
                    <span class="indent_trade_d">1-2-2-7.</span>
                    拍卖和一口价不能参与商品评价、晒单、满意度评价，不获得评价积分。<br />
                    <span class="indent_trade_d">1-2-2-8.</span>
                    换新订单商品不能评价，只能在原订单中评价。<br />
                    <span class="indent_trade">1-2-3晒单：</span>
                    通过晒单贴向其他网友分享所购商品的购物经历、使用心得、真实照片等，在符合以下情形时，薄利圆视晒单价值，可给予100个积分奖励。<br />
                    <span class="indent_trade_d">1-2-3-1.</span>
                    一件商品购买多个只能发表一个晒单贴；<br />
                    <span class="indent_trade_d">1-2-3-2.</span>
                    同一件商品的前10个晒单贴才可以获得积分奖励资格，其余晒单贴不再享有获得积分的资格；<br />
                    <span class="indent_trade_d">1-2-3-3.</span>
                    图书音像商品、0元商品晒单贴暂时不奖励积分。（晒单图片不涉及侵权或投诉）<br />
                    <span class="indent_trade">1-2-4交易满意度评价回馈：</span>
                    用户对购物过程中薄利圆商城买家或薄利圆代理商或薄利圆供应商或薄利圆第三方卖家所提供的服务进行的评价，如：出库速度，配送速度，服务态度等。评价单笔订单金额大于100元的订单(订单完成3个月内有效)，薄利圆视用户评价价值情况给予20个积分奖励。<br />
                </p>
                <p class="red_ans">2.如何使用积分?</p>
                <p>
                    <span class="indent_text">2-1直接支付：</span>
                    积分可支付薄利圆网站订单，积分和现金抵扣的比例为100:1，积分支付不得超过每笔订单结算金额的50%，可使用积分数量为1000的整数倍，如1000、2000、3000等积分数；<br />
                    <span class="indent_text">2-2超值兑换：</span>
                    积分兑换大牌券，全网精选优惠券任意挑选（即优惠券）；<br />
                    <span class="indent_text">2-3超值商品：</span>
                    使用少量积分+现金，购买折扣热销商品；<br />
                </p>
                <p class="red_ans">3.积分常见问题</p>
                <p>
                    <span class="indent_text">3-1积分的有效期：</span>
                    积分的有效期最长2年，最短1年，即从获得积分开始至次年年底，逾期自动作废（如若交易在使用积分有效期之外发生退款，该部分积分不予退还）<br />
                    <span class="indent_text">3-2积分的兑换比例：</span>
                    积分和人民币兑换比例是100:1，即100个积分相当于人民币1元。<br />
                    <span class="indent_text">3-3积分如何获取：</span>
                    用户在薄利圆进行购物、商品评价、晒单、交易满意度、移动端下单、指定区域在线支付等活动都可以获得积分。
                </p>
                <p class="red_ans">4.积分会员等级</p>
                <table class="Integral_level">
                    <tr><th>会员级别</th><th>积分等级</th></tr>
                    <tr><td>普通会员</td><td>0-2000</td></tr>
                    <tr><td>铜牌会员</td><td>2000-5000</td></tr>
                    <tr><td>银牌会员</td><td>5000-10000</td></tr>
                    <tr><td>金牌会员</td><td>10000-20000</td></tr>
                    <tr><td>铂金会员</td><td>20000-30000</td></tr>
                    <tr><td>钻石会员</td><td>30000-50000</td></tr>
                    <tr><td>皇冠会员</td><td>50000以上</td></tr>
                </table>
            </div>
        </div>
        <div class="psright">
            <div class="answer">
                <div class="prtop">
                    <span>订购流程</span>
                </div>
                <p class="red_ans"><span class="color_Order">订购流程</span></p>
                <p style="text-indent:30px">注册>查找商品>放入购物车>提交订单>查看订单状态>收货后评价</p>
                <p class="red_ans"><span class="color_Order">具体操作</span></p>
                <p class="red_ans">1. 注册</p>
                <p class="directory_indent">填写详细个人信息，同意协议，提交完成注册。</p>
                <p class="red_ans">2. 查找商品</p>
                <p class="directory_indent">分类浏览或者直接搜索来查找商品。</p>
                <p class="red_ans">3. 放入购物车</p>
                <p class="directory_indent">商品放入购物车后去结算或者继续购买。</p>
                <p class="red_ans">4. 提交订单</p>
                <p class="directory_indent">选择配送方式和支付方式后提交订单。</p>
                <p class="red_ans">5. 查看订单状态</p>
                <p class="directory_indent">分为准备收货或者上门自提两种状态。</p>
                <p class="red_ans">6. 收货后评价</p>
                <p class="directory_indent">收货确认后可以评价商品。</p>
                <!-- <div class="prtop">
                    <span>问题知识列表</span>
                </div>
                <ul>
                    <li><a href="">如何注册薄利圆帐号?</a></li>
                    <li><a href="">如何注册企业会员?</a></li>
                    <li><a href="" class="red_dan">如何购买下单?</a></li>
                    <li><a href="">如何查找想要的商品?</a></li>
                    <li><a href="">可以直接拨打客服热线订购商品吗?</a></li>
                    <li><a href="">如何注册薄利圆帐号?</a></li>
                    <li><a href="">如何注册企业会员?</a></li>
                    <li><a href="">如何购买下单?</a></li>
                    <li><a href="">如何查找想要的商品?</a></li>
                    <li><a href="">可以直接拨打客服热线订购商品吗?</a></li>
                    <li><a href="">如何注册薄利圆帐号?</a></li>
                    <li><a href="">如何注册企业会员?</a></li>
                    <li><a href="">如何购买下单?</a></li>
                    <li><a href="">如何查找想要的商品?</a></li>
                    <li><a href="">可以直接拨打客服热线订购商品吗?</a></li>
                    <li><a href="">如何注册薄利圆帐号?</a></li>
                    <li><a href="">如何注册企业会员?</a></li>
                    <li><a href="">如何购买下单?</a></li>
                    <li><a href="">如何查找想要的商品?</a></li>
                    <li><a href="">可以直接拨打客服热线订购商品吗?</a></li>
                </ul> -->
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>购买指南</span>
            </div>
            <div class="answer">
                <p class="red_indent">我们在购物的时候，需要进行详细的判断，在确定没有问题的情况下才可以购买。</p>
                <p class="red_ans">1. 如何同时购买多件商品</p>
                <p class="directory_indent">
                    1-1. 有时候，我们在一家店里看到了很多好的东西，我们都想买，这时候如果我们单独一个个的时候，那就多掏了邮费，这时候我们可以把他们放到一起进行购买。首先，我们将选择好东西以后加入购物车里面。</p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Buying_guide1.png"></p>
                <p class="directory_indent">
                    1-2. 加入购物车以后，我们点击上面的购物车，点击打开</p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Buying_guide2.png"></p>
                <p class="directory_indent">
                    1-3. 打开以后，我们可以在购物车里面看到我们所有添加到购物车里面的东西，我们把我们在一个店铺里购买的产品前面打上对勾，这样我们就可以直接全部购买了。不用一次一次的分开了。</p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Buying_guide3.png"></p>
                <p class="directory_indent">1-4. 选上以后，我们要进行点击下面的结算这个按钮</p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Buying_guide4.png"></p>
                <p class="directory_indent">1-5. 然后接下来我们会进行地址的选择，我们可以找自己的地址  如果不对 我们点击下面的修改地址。</p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Buying_guide5.png"></p>
                <p class="directory_indent">1-6. 地址确认无误以后，我们直接就可以点击下面的提交订单了 </p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Buying_guide6.png"></p>
                <p class="directory_indent">
                    1-7. 然后我们看一下我们买的东西的店铺，如果没有错误的情况下，您可以选择您需要的支付方式，进行付款。</p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Buying_guide7.png"></p>
                <p class="directory_indent">
                    1-8. 如果我们都输入的正确的情况下，我们就可以看到了付款成功的这个界面了，这个就证明我们已经全部成功了。</p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Buying_guide8.png"></p>
                <p class="red_ans">2. 如何查看订单</p>
                <p class="directory_indent">
                    2-1. 我们买过以后，如果我们要查看订单，我们就点击主页上面的我的订单，点开就可以看到我买东西。</p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Buying_guide9.png"></p>
                <p class="directory_indent">
                    2-2. 打开以后，我们就可以看到我们买的这个东西的情况了。</p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Buying_guide10.png"></p>
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>收货指南</span>
            </div>
            <div class="answer">
                <ul>
                    <li>找到薄利圆官网，点击进入登录界面，输入您的用户名和密码</li>
                    <p class="Buying_guide_pic"><img src="/Public/Home/images/entry_pic.png"></p>
                    <li>登录您的账号，在首页上方“我的薄利圆”找到“我的订单，待确定”</li>
                    <li>在您的订单里找到您接收到的产品，然后点击“确认收货”；</li>
                    <li>页面会跳转到您的订单信息，核实无误后，输入您的支付密码（不是您的登录密码哦）；</li>
                    <li>成付款后（钱就汇入到对方的账户后），另外您可以对您收到的产品进行评价（一般好评会收到商家的小礼品哦）。</li>
                    <li>付款成功后，客户可进入个人账户页面的“我的订单”点击订单详情，进入订单跟踪页面，用户可通过此页面获取订单号，薄利圆已与？签订合同，客户可在？页面，通过输入订单号查看商品的物流情况。</li>
                </ul>
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>上门提货</span>
            </div>
            <div class="answer">
                <ul>
                    <li>买家所购买的商品均是由物流运送到薄利圆线下服务中心，若该地区没有服务中心，则由客户到有服务中心的地区进行上门提货。</li>
                    <li>薄利圆将对于需要上门提货的客户进行一部分的服务补偿金赔偿，由此造成的不便敬请客户见谅。</li>
                    <li>我们也会尽量的完善薄利圆运输的不足，为客户带来更便捷的服务。</li>
                    <li>而因为客户上门自提所造成的货物损伤问题由客户自行负责，所以客户到服务中心提货时应仔细检查货物的质量问题等。</li>
                    <li>安装时带来的各种问题，可咨询服务中心，我们将竭诚为您服务！</li>
                </ul>
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>服务费用</span>
            </div>
            <div class="answer">
                <ul>
                    <li>薄利圆自身不提供任何物流方式，而是由客户自身在购买商品时自行选择最适合的物流方式，所以客户需仔细查阅物流运输所收取的费用。</li>
                    <li>客户在购买商品后，商品在运输途中被损坏或其他原来导致商品与平台提供图示不一样时，薄利圆不承担任何责任。</li>
                    <li>但是薄利圆有义务保护客户的自身利益，薄利圆将会先行赔付，后追责的方式。</li>
                    <li>全力保障客户的自身利益。</li>
                    <li>以此来提高用户自身体验度。用户在7日内因商品原因需退还商品时，需自行支付运输费用。</li>
                    <li>当商品因客户自身原因导致商品受损等，客户应与卖家协商处理商品出现的问题。</li>
                    <li>保障双方的各自利益。</li>
                </ul>
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>退款流程</span>
            </div>
            <div class="answer">
                <p class="red_indent">客户因自身原因或其他因素，不想购买商品，但又选购商品的，可通过<span style="color:#f00">个人账户的取消订单</span>按钮来取消订单。</p>
                <p class="red_ans">1. 退款流程</p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Return_pic.png"></p>
                <p class="red_indent">点击取消按钮后，在弹出的<span style="color:#f00">取消订单申请</span>中填写申请理由。</p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Return_pic1.png"></p>
                <p class="red_indent">取消订单后，平台将在30分钟内将购买费用返还至客户账户内。</p>
                <p class="red_ans">2. 退款说明</p>
                <p class="directory_indent"><span class="indent_text">2-1. </span>消费者对于在薄利圆购买的商品有不满意之处,在收货之后七日内均可以向薄利圆商城客户服务中心提出退换货申请(消费者在薄利圆商城已经确认完成的消费者订单除外),平台客服中心将根据相关服务承诺和规范之规定进行相关处理,以保障消费者的合法消费权益.</p>
                <p class="directory_indent"><span class="indent_text">2-2. </span>消费者要求退换货的商品无产品质量问题的所有商品退换,由消费者按照该笔订单显示的运费金额的2倍承担并支付货物往返运输费用.应当退还的货物款项将以现金形式支付给消费者或者购买该商品的薄利圆账户.未产生物流运输费用和赔偿金的退款订单由薄利圆商城全额退款.</p>
                <p class="directory_indent"><span class="indent_text">2-3. </span>消费者需要配合并遵循薄利圆商城的货物退还流程进行货物退换和退款.</p>
                <p class="directory_indent"><span class="indent_text">2-4. </span>因产品质量问题或第三方责任造成的消费者货物退换退款,消费者不承担任何责任和支付任何费用.</p>
                <p class="directory_indent"><span class="indent_text">2-5. </span>消费者向薄利圆提出的退换货申请的商品,不得损坏该商品及其所包含的包装,工具或者遗失包装内的该商品所有的零配件及其他物品等,由此造成的包装损坏或者工具,配件遗失由消费者按照成本价承担赔偿责任.</p>
                <p class="directory_indent"><span class="indent_text">2-6. </span>消费者订单支付的款项合计金额或者余额不足以弥补物流运输费用或货物赔偿款项的订单退换货申请薄利圆商城将不予受理,商城客服部门有义务对消费者作出必要的情况说明,敬请消费者理解.</p>
                <p class="directory_indent"><span class="indent_text">2-6. </span>消费者在薄利圆商城已经确认完成的消费者订单,薄利圆商城将不再接收产品退换货服务,敬请消费者的理解.</p>
                <p class="red_ans">3. 消费者保障</p>
                <p class="directory_indent"><span class="indent_text">3-1. </span>薄利圆商城未遵守该项承诺内容的,薄利圆商城向消费者支付500元/单的违约金,并且薄利圆无理由按照消费者退换货意愿进行商品退换并承担其他本应由消费者承担的相关退换货费用.</p>
                <p class="directory_indent"><span class="indent_text">3-2. </span>由于供应商自身产品质量问题,或者应当由其他第三方承担责任的其他事项,消费者不予承担任何费用,薄利圆商城除按照消费者订单金额全额退款外给予消费者1000元/次的奖励,该奖励将以现金或者积分形式支付至消费者购买该商品的薄利圆账户.</p>
                <p class="directory_indent"><span class="indent_text">3-3. </span>由于消费者自身原因导致的产品退换事项,消费者应当承担货物往返运输费用,货物损坏及配件遗失等赔偿,余下的产品应退款项金额,薄利圆商城将以现金或者积分形式支付至消费者购买该商品的薄利圆账户.</p>
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>维修说明</span>
            </div>
            <div class="answer">
                <p class="red_indent">针对客户在网上购买商品易，维修难的问题。薄利圆平台贴心的为客户建立了薄利圆x线下服务中心点。</p>
                <p class="red_ans">1. 服务中心</p>
                <p class="red_indent">客户在购买商品后，因为无法安装等其他原因，可拨打薄利圆服务电话。通过服务中心派专人为您服务，解决客户在安装的问题。在客户购买商品保质期间，因商品损坏等问题，可通过薄利圆平台与厂家联系，我们将督促厂家为您更换商品，或者由该地区的服务中心为您解决。如果商品超出了保质期,您也可以拨打我们的服务中心电话，我们将收取您50元/次的服务费用。薄利圆将遵循先更换后追责的方针,一切以顾客为先，保障客户的切身利益。绝不拖拉推责。</p>
                <p class="red_ans">2. 线上维修</p>
                <p class="red_indent">在客户所在地区没有服务中心的，客户通过线上维修进行申请，操作流程如下：</p>
                <p class="red_indent">客户登录薄利圆个人帐号，点击“返修换货”。</p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Line_maintenance_pic1.png"></p>
                <p class="red_indent">点击立即申请按钮进入申请返修页面，填写相关信息。</p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Line_maintenance_pic2.png"></p>
                <p class="Buying_guide_pic"><img src="/Public/Home/images/Line_maintenance_pic3.png"></p>
                <p class="red_indent">提交完毕后，我们将在1-3个工作日内，派人为您服务。</p><br />
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>品质保证</span>
            </div>
            <div class="answer">
                <p class="red_indent">薄利圆商品对于质量严格把关，所有进驻薄利圆商城平台的厂家都须具备ISO9001、ISO9002、ISO14001、UL、VDE、EMC、CCC、CE等所有认证；并且需缴纳一定的营运保证金。薄利圆商城承诺所有商品均为正品！</p>
                <p class="red_ans">消费者保障</p>
                <p class="red_indent"><span style="color:#f00">◎</span> 若消费者购买到非正品商品，消费者有权获得退回实际支付的商品价款并增加赔偿其受到的损失，增加赔偿的金额为买家实际支付商品价款的九倍。</p>
                <p class="red_indent"><span style="color:#f00">◎</span> 消费者在薄利圆商城（99boliyuan.com）购买的商家出售的商品，在收到货物后，如消费者认为该商品为假冒（包括盗版）商品或非原厂正品、假冒材质成份商品（其中假冒商品、假冒材质成份商品的定义以薄利圆规则规定为准），且消费者与商家协商未果的前提下，消费者在薄利圆指定期间内发起针对商家的维权，申请消费者保障赔付时，如薄利圆判定消费者赔付申请成立，将向消费者退回其实际支付的商品价款，并增加赔偿其受到的损失，增加赔偿的金额为消费者实际支付商品价款的九倍，并由商家承担维权所涉商品所有物流费用。<br /><span style="color:#f00">例：</span>商品价格1元，交易判定赔付成立，则退回买家1元，并增加赔偿消费者9元。</p>
                <p class="red_indent"><span style="color:#f00">◎</span> 商家依据平台规则承担赔偿责任后，并不免除其依照国家有关法律法规依法应当承担的赔偿责任。如国家相关法律法规规定的赔付标准高于平台规则赔付标准的，买家就赔偿不足部分可通过法律途径继续向商家追偿。</p>

            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>隐私保护</span>
            </div>
            <div class="answer">
                <p class="red_ans">1. 适用范围</p>
                <p class="red_indent">为用户提供更好、更优、更个性化的服务是薄利圆坚持不懈的追求，也希望通过我们提供的服务可以更方便您的生活。本隐私权政策适用于薄利圆平台提供的所有服务。</p>
                <p class="red_ans">2. 如何收集信息</p>
                <p class="red_indent">
                    <span class="indent_text">2-1. </span>
                    注册时您提供的信息：您在注册薄利圆平台时及使用薄利圆相关服务时，需填写相关服务信息，包括：姓名，性别，出生年月日，身份证号，电话号码，电子邮箱，地址及相关信息等。
                </p>
                <p class="red_indent">
                    <span class="indent_text">2-2. </span>
                    在您使用薄利圆所提供的服务时：您在使用薄利圆提供服务时，我们将会记录您的浏览信息和计算机上的信息，包括但不限于IP地址，使用语言，访问日期等。
                </p>
                <p class="red_ans">3. 我们如何使用信息</p>
                <p class="red_indent">薄利圆收集您的信息是为了向您提供服务及提升服务质量的目的，我们将把信息用作以下用途：</p>
                <p class="red_indent">
                    <span class="indent_text">3-1. </span>
                    向您提供使用的各服务。
                </p>
                <p class="red_indent">
                    <span class="indent_text">3-2. </span>
                    向您推荐一些您感兴趣的内容，包括但不限于向您发出产品和服务信息，或通过系统向您展示个性化的第三方推广信息。如您对此不感兴趣，可点击退订按钮。
                </p>
                <p class="red_indent">
                    <span class="indent_text">3-3. </span>
                    经您许可的其他用途。
                </p>
                <p class="red_ans">4. 您的个人信息的保护</p>
                <p class="red_indent">
                    薄利圆严格保障您的个人信息安全，包括各种制度，安全技术和程序等保护。包括但不限于密码加密，数据中心的访问限制。我们对能够接触您的信息的人员也采取了严格的管理，包括不限于岗位的权限管理，签署保密合同，监控操作情况等。薄利圆会按现有技术提供相应的安全措施来保护您的信息，提供合理的安全保障，尽力做到使您的信息不被泄漏、毁损或丢失。
                </p>
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>免责说明</span>
            </div>
            <div class="answer">
                <p class="red_indent">在使用薄利圆商城前，请您务必仔细阅读并透彻理解本声明。您可以选择不使用薄利圆商城，但如果您使用薄利圆商城，您的使用行为将被视为对本声明全部内容的认可。</p>
                <ul>
                    <li>因不可抗力或其他无法控制的原因造成网站系统崩溃或无法正常使用，从而导致交易无法完成或丢失有关信息,记录等，薄利圆商城不承担任何责任。但我们会尽可能协助处理善后事宜，并努力使客户减少可能遭受的经济损失；</li>
                    <li>用户使用薄利圆平台时，不得利用薄利圆商城从事恶意欺骗，欺诈等行为，亦不得故意或过失损害本平台的合法利益；</li>
                    <li>对于因物流服务(包括但不限于商品出现污染，变质，损坏，确实，发货或交货迟延)等而造成用户的任何损失，本商城将尽量协调处理，非因商品质量问题薄利圆将不承担任何责任；</li>
                    <li>薄利圆商城有权对商品信息(包括但不限于商品价格,种类，规格，型号)进行调整，对于用户因商家调整行为而遭受的损失，本商城将协助客户与商家协商，帮助补差或者其他补偿方式；</li>
                    <li>用户应严格按照本商城服务协议从事相关行为，如服务协议发生变更，修正，用户应按变更，修正后的协议执行，本商城不因协议之变更，修正而承担任何责任；</li>
                    <li>薄利圆拥有平台内所有信息内容(除平台商家发布的商品信息外，包括但不限于文字，图片，软件，音频，视频)的所有版权,任何人不得私自转载，添加外链，盗图等其他违法行为。违者，薄利圆将依法追究其法律责任；</li>
                    <li>用户不得在薄利圆商城发送或传播敏感信息和违反国家法律法规政策的信息，此类信息包括但不限于：</li>
                    <p class="directory_indent"><span class="indent_text">1.</span>反对宪法所确定的基本原则的；</p>
                    <p class="directory_indent"><span class="indent_text">2.</span>危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；</p>
                    <p class="directory_indent"><span class="indent_text">3.</span>损害国家荣誉和利益的；</p>
                    <p class="directory_indent"><span class="indent_text">4.</span>煽动民族酬和，民族歧视，破坏民族团结的；</p>
                    <p class="directory_indent"><span class="indent_text">5.</span>破坏国家宗教政策，宣扬邪教和封建迷信的；</p>
                    <p class="directory_indent"><span class="indent_text">6.</span>散布谣言，扰乱社会秩序，破坏社会稳定的；</p>
                    <p class="directory_indent"><span class="indent_text">7.</span>散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；</p>
                    <p class="directory_indent"><span class="indent_text">8.</span>侮辱或者诽谤他人，侵害他人合法权益的；</p>
                    <p class="directory_indent"><span class="indent_text">9.</span>含有法律、行政法规禁止的其他内容的。</p>
                    <p class="directory_indent">用户在发布商品，服务信息及使用薄利圆商城提供的服务中，还必须遵守以下原则；</p>
                    <p class="directory_indent"><span class="indent_text">1.</span>遵守中国有关的法律和法规；</p>
                    <p class="directory_indent"><span class="indent_text">2.</span>不得为任何非法目的而使用网络服务系统，遵守所有与网络服务有关的网络协议；</p>
                    <p class="directory_indent"><span class="indent_text">3.</span>不得使用虚假，冒充他人或其他方的信息注册薄利圆商城后发布评论或其他内容；不得以虚构或歪曲事实的方式不当评价其他店铺商家，不得采取不正当方式制造或提高（降低）其他商家的信用度；</p>
                    <p class="directory_indent"><span class="indent_text">4.</span>不得使用任何装置，软件或例行程序干扰或试图干扰薄利圆商城的正常运作或正在薄利圆上进行的任何交易，活动，不得采取任何不合理的庞大数据负载加诸薄利圆商城网络设备的行动。</p>
                    <p class="red_indent"><span style="color:#f00">用户违反以上使用规则的 :</span> 薄利圆有权视情节的严重采取警告，限期修改，暂停服务，取消订单，禁止交易，封闭帐号，永久禁止注册等措施。给薄利圆商城或第三方造成损失的，薄利圆商城有权采取一切合法的诉讼与非诉讼手段进行索赔；用户构成犯罪的，薄利圆商城有权通知和协助国家主管部门进行查处。</p>
                </ul>
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>法律援助</span>
            </div>
            <div class="answer">
                <p class="red_indent">薄利圆本着一切为客户服务的理念，帮助客户在自身有需要解决的关于薄利圆平台交易纠纷的事情上，特别设置了法律援助项，可帮助自身因不懂法律或者其他原来导致不能维权的人；</p>
                <p class="red_indent">若客户在本商城所购买的商品危害到您的利益并导致极大损失时,可拨打薄利圆服务热线，申请法律援助。</p>
                <p class="red_indent">我们将接待来访客户，解答法律咨询，切实对经济困难及其他因素难以通过通常意义上的法律救济给予保障。</p>
                <p class="red_indent">快速对客户与商家等其他人员产生的问题进行调解，若无法调解，可通过法律手段等维护受害者的切身利益。</p>
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>无忧服务</span>
            </div>
            <div class="answer">
                <p class="red_indent">相比较其他大型商城平台，卫浴因其大件，价格较贵，维修不易，搬运不便等各种因素。导致客户在购买前有着种种忧虑，购买后担忧维修问题。为此，薄利圆建立线下服务点，旨在更好的为客户提供服务。</p>
                <p class="red_indent">在薄利圆平台上购买商品，可享受一条龙的一站式服务。客户可在线下体验店或者电脑上登录薄利圆平台选购商品，在通过自身选择物流方式将商品送到服务中心，在通过服务中心点的服务人员一对一的为您进行安装等服务。让您免除购买货物后担心的不懂如何安装。线下的体验店切实的展现了薄利圆和客户沟通的桥梁。客户在购买商品遇到的商品质量问题或者价格，安装等问题，都可通过薄利圆平台上面的建议反馈或者线下服务中心给我们建议或者投诉，薄利圆本着先行赔付再追责的理念，尽全力将客户所受损失降到最低。</p>
                <p class="red_ans">消费者保护</p>
                <p class="red_indent">消费者在薄利圆商城购买的商品在应有的质量保证期内，薄利圆商城未向消费者提供相应的质量保障服务的，薄利圆商城除无理由为消费者更换同品牌同型号同规格的产品外，需额外支付消费者1000元/次的违约金。该违约金将以现金或者积分形式支付至消费者购买该商品的薄利圆账户。</p>
                <p class="red_ans">消费者义务</p>
                <p class="red_indent"><span style="color:#f00">◎</span> 消费者应当按照按照薄利圆商城客服部门提供的售后服务相关规定、标准和流程等进行商品售后服务事项处理需要的协助、协调和配合等处理好售后服务问题，直至该售后服务问题得到圆满解决为止。</p>
                <p class="red_indent"><span style="color:#f00">◎</span>消费者未能够按照薄利圆商城客服部门规定提供相关协助、协调和配合事项的，薄利圆商城不对此售后服务事项的处理承担任何责任。</p>
                <p class="red_indent"><span style="color:#f00">◎</span> 薄利圆商城服务承诺应用范围：是指消费者通过薄利圆商城交易和购买的所有商品，应当得到薄利圆平台提供的产品质量及售后服务等全方位保障的合法权利。</p>
                <p class="red_indent"><span style="color:#f00">◎</span> 消费者只有通过薄利圆商城平台交易和购买商品，才能够享受薄利圆商城服务承诺的全部保障内容，所有未经过平台交易的任何平台商家提供的产品，薄利圆商城不提供本服务承诺中的任何服务项目，并不会对产品质量及售后服务等承担任何责任。</p>
            </div>
        </div>
        <div class="psright">
            <div class="custoserve">
                <div class="sevietop">
                    <ul>
                        <li class="active">商品评价</li>
                        <li>商家评价</li>
                    </ul>
                </div>
                <div class="sevienext">
                    <div class="con_tba1">
                        商品评价
                    </div>
                    <div class="con_tba1" style="display:none;">
                        商家评价
                    </div>
                </div>
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>联系我们</span>
            </div>
            <div class="answer">
                <br />
                <p>薄利圆客服电话：12452154254</p><br />
                <p>区域经理电话: 15845875487</p><br />
                <p>服务中心电话：15862564258</p><br />
                <p>平台加盟电话：18754245445</p><br />
                <p>区域代理电话: 18952485475</p><br />
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>物流配送</span>
            </div>
            <div class="answer">
                <p>
                <p class="red_indent">薄利圆物流模式简介：薄利圆物流模式就是卖家与第三方物流公司的一种合作模式。薄利圆物流模式全部都是依靠第三方物流公司，卖家联系第三方物流公司将货物交给它，再通过第三方物流公司的供应链系统将货物送达给客户，薄利圆主要是为卖家提供一个网络商店主页。</p>
                <p class="red_ans">一、薄利圆物流模式解析</p>
                <p class="red_indent">薄利圆物流配送是外包给以快递公司为代表的第三方物流企业完成的。由于薄利圆经营商家和需求用户的分散性，快递公司需要把大量订单做集中处理，在集合订单过程中发现并提取规模价值，这是传统配送理论在电子商务环境下的发展。快递公司需要有网点布局的优势，需要一张规模足够覆盖大量买卖双方的配送网络，同时还需要信息系统的协同支持。快递公司依靠其分布在全国各地的集散货网点和区域分拨中心等节点实现快递物件的跨区域集散，整个配送流程为：客户→次节点→主节点→主节点→次节点→客户。</p>
                <p class="red_ans">二、薄利圆物流配送过程</p>
                <p class="red_indent">1、买家在网上寻找自己需要的货物并联系卖家，在薄利圆上下订单。卖家根据买家的订单将货物找好，拿到快递公司位于该地区的收发货网点或是快递公司的快递人员上门收取运输货物，并将货物打包且按照客户在订单上留下的信息填写快递公司给与的发货单，由此形成托运关系。</p>
                <p class="red_indent">2、快递人员收取货物后将本店的所有货物集中后通过货车等运输工具将其运往该快递公司区域集货网点。再由区域集货网点将所以货物进行整理，将只需区域性配送的货物整理出来，进行直接配送运输，将需要跨省、跨地域运输的货物运往公司位于该地的分发货仓库。</p>
                <p class="red_indent">3、分发货仓库负责将来自该地区的所以集货网点的货物进行扫描分拨，将所以货物按照配送区域、不同种类及不同运输工具进行堆放。再由货物的运单性质选择货物的运输方式。对于快递公司而言绝大多数的货物都是汽车运输，或是航空运输。分发货仓库将分拨后的货物进行装车，将货运实行拼车运输，以整车的形式发出。公司的运输部门按照货物运达的城市选择相应的运输路线，以便寻求方便快捷的运输需求。</p>
                <p class="red_indent">4、买家所在的同一快递公司的分发货仓库在收到发来的货物后将货物卸车扫描，把货物进行检查整理归类、分区，将所以货物进行检查核，将分拨后的货物按地区配送需要分发给买家所在地的区域集货网点。</p>
                <p class="red_indent">5、区域集货网点在收到货物后再次将其细分，将货物分派后送往离买家最近的收发货网点。</p>
                <p class="red_indent">6、收发货网点的快递员最后在联系买家，将货物准确无误的送往买家手中，并由买家进行签收货物，最终来实现整个物流流程的结束。</p>
                <p class="red_ans">三、薄利圆与物流的关系</p>
                <p class="red_indent">薄利圆等平台式购物网站力推诚信保障体系，降低了消费者转向网购的心理门槛，推动网络购物应用在网民中的渗透。薄利圆目前已经发展成为亚太地区最大的B2C购物网站.。B2C物流配送是指物流配送企业针对客户的需求，进行一系列分类、编码、整理、配货等理货工作，按照约定的时间和地点将确定的数量和规格要求的商品传递到用户的活动及过程。薄利圆主要业务在于网上零售卫浴商品。由于消费者的折扣及方便心理，业务量大的都是体积小的商品，决定了薄利圆物流配送是小规模、多频次的格局。
                    薄利圆物流模式与薄利圆交易网站平台、物流公司、卖家、买家息息相关。这条产业链中，物流、信息流、商流、资金流实现了完整的电子信息化，只有将货物的实体流动实现好，才能使整个产业链得以实现价值。</p>
                <p class="red_ans">四、薄利圆卖家如何选择物流</p>
                <p class="red_indent">薄利圆在为客户提供更安全和高效的网络交易平台，离不开物流的支持。通过参考“网货物流推荐指数”，薄利圆与圆通速递、中通速递、韵达快递、中邮EMS等公司合作。这些物流
                    公司在服务质量、服务价格等方面参差不齐。由于观念的差异或配送设施的差距，消费者往往会因为第三方物流公司的过错而迁怒于购物网站，比如会因为商品或包装在运输过程中有破损而去责怪那些本身信誉很好的购物网站。对此，因顾客所选的物流运输方式所造成的商品损失，薄利圆将不承担任何责任，但也会协助客户，将损失降到最低。</p>
                <p class="red_ans">五、薄利圆物流模式配送中存在的问题</p>
                <p class="red_indent">物流配送的基础设施不完善，物流配送服务质量差，物流配送成本高，物流配送相关法规及配送中心体制不健全等。薄利圆应加快电子商务物流配送基础设施建设，提升物流配送质量，提高物流配送效率，完善电子商务物流的配送体系，从而有效地降低物流成本，提高经济效益，赢得良好的信誉和形象。</p>
                <p class="red_ans">六、薄利圆产品具体配送方法</p>
                <p><span class="indent_text">服务说明:</span></p>
                <p class="red_indent">1、供应商在接到消费者订单后七十二小时之内，负责及时准确的按照薄利圆平台提供的物流公司将货物配送至消费者订单收货地址所在区域服务中心（若遇平台还没有设立线下区域服务中心的客户订单，供应商负责按照薄利圆平台提供的物流公司将货物直接配送至消费者平台订单收货地址）。</p>
                <p class="red_indent">2、区域服务中心在收到平台供应商发送到服务中心的平台订单货物后，按照消费者具体收货地址及时向消费者提供周到、细致、专业的免费送货上门服务。</p>
                <p class="red_indent">3、距离区域服务中心超过20公里以上里程且单次单笔货物订单金额不足1000元的交通不便乡镇、农村等距离较偏远区域的消费者订单，消费者按照超出里程数“1元/公里”标准象征性支付送货上门服务费用，或者将货物免费发往区域服务中心所在地能够达到消费者所在乡镇的区域服务中心所在地货运部。</p>
                <p class="red_indent">4、消费者单次单笔订单金额达到5000元以上的乡镇、农村客户，区域服务中心必须提供免费送货上门服务，或同一天同一乡镇（农村）区域累计订单金额达到5000元以上的乡镇、农村客户，区域服务中心必须提供免费送货上门服务。</p>
                <p class="red_indent">5、由于消费者提供的收货地址不准确，或者与消费者产品安装地址不符合的其他送货服务要求，由区域服务中心和消费者按照当地区域相关标准自行协商收取相关服务费用。</p>
                <p><span class="indent_text">消费者保障</span></p>
                <p class="red_indent">薄利圆区域代理服务中心未依照该服务承诺标准和规范向消费者提供送货入户服务的，消费者有权向薄利圆要求支付<span style="color:#f00">500元/单</span>的服务违约金，该违约金将以现金或者积分形式支付至消费者购买该商品的薄利圆账户。</p>
                <p class="red_ans">特殊事项:</p>
                <p class="red_indent">1、薄利圆商城未设立区域服务中心的消费者订单，暂不向消费者提供送货入户服务，由消费者自行提货，敬请消费者的谅解。</p>
                <p class="red_indent">2、薄利圆商城未提供送货入户的消费者订单，消费者可向平台客服部门申请订单总金额10%的服务补偿，该笔费用薄利圆将以现金或者积分形式支付至消费者购买该商品的薄利圆账户.</p>
                </p>
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>安装指南</span>
            </div>
            <div class="answer">
                <p>
                <p class="red_indent">卫浴洁具安装是硬装进行的收尾工作，前期对洁具进行挑选，在硬装马上结束的时候，洁具安装也不简单，虽然很小的工程但是很多细节问题很多，客户购买商品后，若不知道如何安装，可通过点击首页的《选购常识》，了解如何安装该件商品。如果在《选购常识》内无法搜索到该件商品的相关信息，客户可咨询薄利圆平台或者咨询客服中心。那么下面给大家简单介绍一下卫浴洁具安装知识以及一些安装规范，帮助装修业主们装修顺利。</p>
                <p><span class="indent_text">卫浴洁具安装的基本常识 : </span></p>
                <p class="red_ans">(一)卫浴洁具安装施工工艺流程 : </p>
                <p class="red_indent">卫浴洁具镶贴墙砖→吊顶→铺设地砖→安装大便器、洗脸盆、浴盆→安装连接给排水管→安装灯具、插座、镜子→安装毛巾杆等五金配件。</p>
                <p class="red_indent">1.坐便器的工艺流程 检查地面下水口管→对准管口→放平找正→画好印记→打孔洞→抹上油灰→套好胶皮垫→拧上螺母,→水箱背面两个边孔画印记,→打孔→插入螺栓→捻牢→背水箱挂放平找正→拧上螺母→安装背水箱下水弯头→装好八字门→把娘灯叉弯好→插入漂子门和八字门→拧紧螺母。</p>
                <p class="red_indent">2.洗脸盆的工艺流程膨胀螺栓插入→捻牢→盆管架挂好→把脸盆放在架上找平整→下水连接:脸盆→调直→上水连接。 </p>
                <p class="red_indent">3.浴盆的工艺流程 浴盆安装:→下水安装→油灰封闭严密→上水安装→试平找正 </p>
                <p class="red_indent">4.淋浴器的工艺流程 冷、热水管口用试管找平整→量出短节尺寸→装在管口上→淋浴器铜进水口抹铅油,缠→螺母拧紧→固定在墙上→上部铜管安装在三通口→木螺丝固定在墙上。 </p>
                <p class="red_indent">5.净身器的工艺流程 混合开关、冷热水门的门盖和螺母调平正,→水门装好→喷嘴转芯门装好→冷热水门出口螺母拧紧→混合开关上螺母拧紧→装好三个水门门盖→磁盆安装好→安装喷嘴时→安装下水口→安装手提拉杆时→调正定位。</p>
                <p><span class="indent_text">卫浴洁具安装的最基本流程介绍 : </span></p>
                <p class="red_ans">(二)卫浴洁具安装施工要领 : </p>
                <p class="red_indent">1、卫浴洁具洗涤盆安装施工要领 : </p>
                <p class="red_indent"><span class="indent_text">(1)、</span>洗涤盆产品应平整无损裂。排水栓应有不小于8mm直径的溢流孔。</p>
                <p class="red_indent"><span class="indent_text">(2)、</span>排水栓与洗涤盆让接时排水栓溢流孔应尽量对准洗涤盆溢流孔以保证溢流部位畅通，镶接后排水栓上端面应低于洗涤盆底。</p>
                <p class="red_indent"><span class="indent_text">(3)、</span>托架固定螺栓可采用不小于6mm的镀锌开脚螺栓或镀锌金属膨胀螺栓(如墙体是多孔砖，则严禁使用膨胀螺栓)。 </p>
                <p class="red_indent"><span class="indent_text">(4)、</span>洗涤盆与排水管连接后应牢固密实，且便于拆卸，连接处不得敞口。洗涤盆与墙面接触部应用硅膏嵌缝。</p>
                <p class="red_indent"><span class="indent_text">(5)、</span>如洗涤盆排水存水弯和水龙头是镀络产品，在安装时不得损坏镀层。</p>
                <p class="red_indent">2、卫浴洁具浴盆的安装要领 : </p>
                <p class="red_indent"><span class="indent_text">(1)、</span>在安装裙板浴盆时，其裙板底部应紧贴地面，楼板在排水处应预留250～300mm洞孔，便于排水安装，在浴盆排水端部墙体设置检修孔。</p>
                <p class="red_indent"><span class="indent_text">(2)、</span>其他各类浴盆可根据有关标准或用户需求确定浴盆上平面高度。然后砌两条砖基础后安装浴盆。如浴盆侧边砌裙墙，应在浴盆排水处设置检修孔或在排水端部墙上开设检修孔。</p>
                <p class="red_indent"><span class="indent_text">(3)、</span>各种浴盆冷、热水龙头或混合龙头其高度应高出浴盆上平面150mm、安装时应不损坏镀铬层。镀铬罩与墙面应紧贴。 </p>
                <p class="red_indent"><span class="indent_text">(4)、</span>固定式淋浴器、软管淋浴器其高度可按有关标准或按用户需求安装。</p>
                <p class="red_indent"><span class="indent_text">(5)、</span>浴盆安装上平面必须用水平尺校验平整，不得侧斜。浴盆上口侧边与墙面结合处应用密封膏填嵌密实。 </p>
                <p class="red_indent"><span class="indent_text">(6)、</span>浴盆排水与排水管连接应牢固密实，且便于拆卸，连接处不得敞口。 </p>
                <p class="red_indent">3、卫浴洁具坐便器的安装要点 : </p>
                <p class="red_indent"><span class="indent_text">(1)、</span>给水管安装角阀高度一般距地面至角阀中心为250mm，如安装连体坐便器应根据坐便器进水口离地高度而定，但不小于100mm，给水管角阀中心一般在污水管中心左侧150mm或根据坐便器实际尺寸定位。 </p>
                <p class="red_indent"><span class="indent_text">(2)、</span>低水箱坐便器其水箱应用镀锌开脚螺栓或用镀锌金属膨胀螺栓固定。如墙体是多孔砖则严禁使用膨胀螺栓，水箱与螺母间应采用软性垫片，严禁使用金属硬势片。</p>
                <p class="red_indent"><span class="indent_text">(3)、</span>带水箱及连体坐便器其水箱后背部离墙应不大于20mm。</p>
                <p class="red_indent"><span class="indent_text">(4)、</span>坐便器安装应用不小于6mm镀锌膨胀螺栓固定，坐便器与螺母间应用软性垫片固定，污水管应露出地面10mm 。</p>
                <p class="red_indent"><span class="indent_text">(5)、</span>坐便器安装时应先在底部排水口周围涂满油灰，然后将坐便器排出口对准污水管口慢慢地往下压挤密实填平整，再将垫片螺母拧紧，清除被挤出油灰，在底座周边用油灰填嵌密实后立即用回丝或抹布揩擦清洁。</p>
                <p class="red_indent"><span class="indent_text">(6)、</span>冲水箱内溢水管高度应低于扳手孔30～40mm，以防进水阀门损坏时水从扳手孔溢出。</p>
                <p class="red_ans">(三)卫浴洁具安装注意事项 : </p>
                <p class="red_indent"><span class="indent_text">(1)、</span>不得破坏防水层。已经破坏或没有防水层的，要先作好防水，并经12小时积水渗漏试验。</p>
                <p class="red_indent"><span class="indent_text">(2)、</span>卫生洁具固定牢固，管道接口严密。 </p>
                <p class="red_indent"><span class="indent_text">(3)、</span>注意成品保护，防止磕碰卫生洁具。</p>
                <p class="red_indent"><span class="indent_text">(4)、</span>商品在到达客户手中后，客户确认无损收货时，因仔细检查货物有无损坏。因客户自身原因导致货物损坏的，薄利圆将不承担任何责任。客户可根据购买时商家所给的无理由换货等与商家协商。</p>
                <p class="red_indent"><span class="indent_text">(5)、</span>客户需要薄利圆服务人员安装的，可通过拨打该地区的服务中心，支付一定的安装费用。由服务中心派专人为您服务。</p>
                <p class="red_ans">(四)安装保障及介绍 : </p>
                <p class="red_indent"><span class="indent_text">(1)、</span>薄利圆区域服务中心未提供上门安装服务的，薄利圆除向消费者支付平台安装费用标准2倍的赔偿外，需向消费者支付1000元/单的违约金，该违约金将以现金或者积分形式支付至消费者购买该商品的薄利圆账户。</p>
                <p class="red_indent"><span class="indent_text">(2)、</span>薄利圆区域服务中心向消费者提供的安装服务不符合产品安装规范的，除全额退换消费者安装费用外，仍需向消费者支付 500元/单的违约金，该违约金将以现金或者积分形式支付至消费者购买该商品的薄利圆账户。</p>
                <p class="red_indent"><span class="indent_text">(3)、</span>薄利圆区域服务中心安装服务收费超过平台承诺标准的，或者所提供的辅料及配件价格明显高于当地市场销售价格的，消费者可以向薄利圆商城客户部门进行投诉。经过核实情况属实的，薄利圆商城将给予商城客户 500元/次的特殊奖励。</p>
                <p class="red_indent"><span class="indent_text">(4)、</span>商城客户单次订单安装服务费之和低于80元/次的按照80元/次进行收取（商城客户在商城支付的安装服务费不足80元/次的差额部分由薄利圆区域服务中心在商城客户处收取现金），商城客户单次订单安装服务费之和超过80元/次的商城客户无需再次支付安装服务费用给薄利圆区域服务中心。</p>
                <p class="red_indent"><span class="indent_text">(5)、</span>商城产品安装涉及的辅料及配件最好由商城客户自行采购，在预约安装之前敬请详细咨询当地服务中心安装该产品所需的辅料及配件名称和数量，以免延误工期。由于客户辅料和配件不齐全导致的再次上门服务，需额外加收50元/次的上门服务费用。</p>
                <p class="red_indent"><span class="indent_text">(6)、</span>商城客户需要薄利圆区域服务中心提供辅料及配件的，商城客户必须与服务中心确认自身采购的辅料及配件名称和数量，以及服务中心提供的辅料及配件供货价格和合计金额等全部事宜，辅料及配件定价与薄利圆商城无关。</p>
                <p class="red_indent"><span class="indent_text">(7)、</span>薄利圆商城产品安装需要的安装工具由薄利圆区域服务中心或安装人员免费提供，并无工具租金及使用费等其他费用。</p>

                </p>
            </div>
        </div>
        <div class="psright">
            <div class="prtop">
                <span>注册协议</span>
            </div>
            <div class="answer">
                <p>
                <p class="red_indent">本协议是您与薄利圆网站（本站:网址：<a href="http://www.99boliyuan.com/index.php/Home/Index/index.html"><span style="color:#245ae3">www.99boliyuan.com</span></a>）所有者（以下简称为"<span style="color:red">薄利圆</span>"）之间就薄利圆网站服务等相关事宜所订立的契约，请您仔细阅读本注册协议，您点击同意并继续按钮后，本协议即构成对双方有约束力的法律文件。</p>
                <p class="red_ans">协议范围</p>
                <p class="red_indent">1.本站的各项电子服务的所有权和运作权归薄利圆所有。用户同意所有注册协议条款并完成注册程序，才能成为本站的正式用户。用户确认：本协议条款是处理双方权利义务的契约，始终有效，法律另有强制性规定或双方另有特别约定的，依其规定。</p>
                <p class="red_indent">2.用户点击同意本协议的，即视为用户确认自己具有享受本站服务、下单购物等相应的权利能力和行为能力，能够独立承担法律责任。
                <p class="red_indent">3.如果您在18周岁以下，您只能在父母或监护人的监护参与下才能使用本站。
                <p class="red_indent">4.薄利圆保留在中华人民共和国大陆地区法施行之法律允许的范围内独自决定拒绝服务、关闭用户账户、清除或编辑内容或取消订单的权利。由于互联网高速发展，您与薄利圆签署的本协议列明的条款并不能完整罗列并覆盖您与薄利圆所有权利与义务，现有的约定也不能保证完全符合未来发展的需求。因此，薄利圆平台法律声明及隐私权政策、薄利圆平台规则均为本协议的补充协议，与本协议不可分割且具有同等法律效力。如您使用薄利圆平台服务，视为您同意上述补充协议。
                <p class="red_ans">用户资格</p>
                <p class="red_indent">您确认，在您开始注册程序使用薄利圆平台服务前，您应当具备中华人民共和国法律规定的与您行为相适应的民事行为能力。若您不具备前述与您行为相适应的民事行为能力，则您及您的监护人应依照法律规定承担因此而导致的一切后果。<br />
                    此外，您还需确保您不是任何国家、国际组织或者地域实施的贸易限制、制裁或其他法律、规则限制的对象，否则您可能无法正常注册及使用薄利圆平台服务。</p>
                <p class="red_ans">交易争议处理</p>
                <p class="red_indent">您在薄利圆平台交易过程中与其他用户发生争议的，您或其他用户中任何一方均有权选择以下途径解决：</p>
                <p class="red_indent"><span class="indent_text">（一）</span>与争议相对方自主协商；</p>
                <p class="red_indent"><span class="indent_text">（二）</span>使用薄利圆平台提供的争议调处服务；</p>
                <p class="red_indent"><span class="indent_text">（三）</span>请求消费者协会或者其他依法成立的调解组织调解；</p>
                <p class="red_indent"><span class="indent_text">（四）</span>向有关行政部门投诉；</p>
                <p class="red_indent"><span class="indent_text">（五）</span>根据与争议相对方达成的仲裁协议（如有）提请仲裁机构仲裁；</p>
                <p class="red_indent"><span class="indent_text">（六）</span>向人民法院提起诉讼。</p>
                <p class="red_ans">非个人信息的保证和授权</p>
                <p class="red_indent">您声明并保证，您对您所发布的信息拥有相应、合法的权利。否则，薄利圆可对您发布的信息依法或依本协议进行删除或屏蔽。</p>
                <p class="red_indent">您应当确保您所发布的信息不包含以下内容：</p>
                <p class="red_indent"><span class="indent_text">（一）</span>违反国家法律法规禁止性规定的；</p>
                <p class="red_indent"><span class="indent_text">（二）</span>政治宣传、封建迷信、淫秽、色情、赌博、暴力、恐怖或者教唆犯罪的；</p>
                <p class="red_indent"><span class="indent_text">（三）</span>欺诈、虚假、不准确或存在误导性的；</p>
                <p class="red_indent"><span class="indent_text">（四）</span>侵犯他人知识产权或涉及第三方商业秘密及其他专有权利的；</p>
                <p class="red_indent"><span class="indent_text">（五）</span>侮辱、诽谤、恐吓、涉及他人隐私等侵害他人合法权益的；</p>
                <p class="red_indent"><span class="indent_text">（六）</span>存在可能破坏、篡改、删除、影响薄利圆平台任何系统正常运行或未经授权秘密获取薄利圆平台及其他用户的数据、个人资料的病毒、木马、爬虫等恶意软件、程序代码的。</p>
                <p class="red_indent"><span class="indent_text">（七）</span>其他违背社会公共利益或公共道德或依据相关薄利圆平台协议、规则的规定不适合在薄利圆平台上发布的。</p>
                <p class="red_ans">法律适用，管辖与其他</p>
                <p class="red_indent">本协议之订立、生效、解释、修订、补充、终止、执行与争议解决均适用中华人民共和国大陆地区法律；如法律无相关规定的，参照商业惯例及/或行业惯例。</p>
                <p class="red_indent">(管辖)您因使用薄利圆平台服务所产生及与淘宝平台服务有关的争议，由薄利圆与您协商解决。协商不成时，任何一方均可向被告所在地人民法院提起诉讼。</p>
                <p class="red_indent">本协议任一条款被视为废止、无效或不可执行，该条应视为可分的且并不影响本协议其余条</p>
                </p>
            </div>
        </div>
        <div class="liangfan">
            <ul>
                <li class="liangfan2"><a href="javascript:history.go(-1)">返回上一页</a></li>
                <li class="liangfan1"><a href="/Home/Index/index.html">返回首页</a></li>
            </ul>
        </div>
    </div>

</div>
<?php include('public/footer1.php');?>
<?php include('public/footer-bottom.php');?>
	

</body>
<script>
    var $sevietop=$('.sevietop>ul>li');
    var $mdiva=$('div.sevienext>div')
    $sevietop.click(function(){
        $(this).addClass('active').siblings().removeClass('active');
        var ind=$sevietop.index(this);
        $mdiva.eq(ind).show().siblings().hide();
    })
</script>
<script type="text/javascript">
    $(function(){
        function GetQueryString(name){
            var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg);
            if(r!=null)return  unescape(r[2]); return null;
        }
        var pagination = GetQueryString("id");
        var index_number = pagination;
        $(".psright").css({display: "none"});
        $(".psright").eq(index_number).css({display: "block"});
        $(".pstop").eq(index_number).css({background: "#82878b"});
        $(".pstop a").eq(index_number).css({color: "#fff"});
        // $(".pstop").click(function(){
        //     var index = $(this).index();
        //     $(".pstop").css({background: "#edf2f5"});
        //     $(".pstop a").css({color: "#767676"});
        //     $(".pstop").eq(index).css({background: "#82878b"});
        //     $(".pstop a").eq(index).css({color: "#fff"});
        //     $(".psright").css({display: "none"});
        //     $(".psright").eq(index).css({display: "block"});
        //     index_number = index;
        // });
        $(".pstop").mouseover(function(){
            var index = $(this).index();
            $(".pstop a").eq(index).css({color: "#fff"});
        });
        $(".pstop").mouseout(function(){
            $(".pstop a").css({color: "#767676"});
            $(".pstop a").eq(index_number).css({color: "#fff"});
        });
    });

</script>
</html>