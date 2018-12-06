var good = new function(){

    var z={
        addrNum:1,
        flat:true,
        ReviewFlat:false,
        ReviewData:'',
        SaleFlat:false,
        SaleData:'',
    }

    var killtime = true

    var qianJS = function(){
        $('.rev_photo_bar').picZoom();

    }

    //SKU 点击
    var clickSku=function(){
        try{
            var ceng=skuList[0].SkuName.length;
            $(".skuS").click(function(){
                if($(this).hasClass("disabled")) return;
                var skuarr=[],flag,goid="";
                $(".mySkuLi").find(".selected").each(function(index,value){
                    skuarr[$(value).data("skulev")]=$(value).text();
                })
                skuarr[$(this).data("skulev")]=$(this).text();
                for(j=0;j<ceng;j++){
                    var tt=skuarr.length-j
                    $.each(skuList,function(index,value){
                        flag=1;
                        for(i=0;i<tt;i++){
                            if(value.SkuName[i].value!=skuarr[i]){
                                flag=0;
                            }
                        }
                        if(flag){
                            if(goid=="")
                                goid=value.Id
                        }
                    })
                }
                location.href=goid+'.htm';
                //alert(goid)
            })
        }
        catch(e){
            //console.log("sku 有点问题")
            // mgalert.message("此商品SKU设置有误，请浏览别的商品");
            $(".offline").show();
            $(".pi_price_box,.groupInfoPrice_box,.hotInfoPrice_box,.normalPrice,.normalPriceNotice,.tuanPrice,.mySkuInfo,.i_specif,.shop_shelvesH").hide();
        }
    }
    //能使用的SKU
    var canUseSku=function(){
        if(skuList[0]){
            var ceng=skuList[0].SkuName.length;
            var  a=new Array();
            for(i=0;i<skuList.length;i++){
                a[i]=new Array();
            }
            $(".skuB0 .skuS").removeClass("disabled");
            $.each(skuList,function(index,value){
                $.each(value.SkuName,function(index1,value1){
                    a[index][index1]=value1.value;
                })
            })
            for(i=0;i<ceng;i++){
                if(i==0) continue;
                var flag=0;
                $(".skuB"+i+" .skuS").each(function(index,value){
                    for(j=0;j<skuList.length;j++){
                        flag=0;
                        for(k=1;k<=i;k++){
                            if(a[j][i-k]==$(".skuB"+(i-k)+" .skuS.selected").text())
                                flag++;
                        }
                        if(flag && a[j][i]==$(value).text()){
                            if(i==flag)
                                $(value).removeClass("disabled")
                        }
                    }
                })
            }
        }

    }
    //产生SKU
    var setAllSku=function(index,value){
        var cu="",cuclass="";
        if(value.isdefault){
            cu=value.SkuName;
            cuclass="selected"
        }
        $.each(value.SkuName,function(index1,value1){
            var dot=0;
            $(".skuB"+index1+" li").each(function(index2,value2){
                if(value1.value==$(value2).text()){
                    dot=1;
                }
                if(cu!="" && $(value2).text()==cu[index1].value){
                    $(value2).addClass("selected");
                }
            })
            if(dot==0){
                var t=$(".skuSexample").eq(0).clone().appendTo(".skuB"+index1+" ul").removeClass("skuSexample").addClass("disabled skuS "+cuclass).data("skulev",index1).show();
                t.text(value1.value);
            }
        })
    }
    //设置SKU题目
    var setSku=function(){
        try{
            var ceng=skuList[0].SkuName.length;
            for(i=0;i<ceng;i++){
                var btil=skuList[0].SkuName[i].name;
                var t=$(".skuBexample").clone().appendTo(".mySkuInfo").removeClass("skuBexample").addClass("skuB"+i).show();
                t.find(".skuBtitle").text(btil+"：");
            }
            $.each(skuList,setAllSku)
        }catch(e){
            //console.log('商品SKU有误')
            //mgalert.message("此商品SKU设置有误，请浏览别的商品");
            //$(".good_out").show();
            //$(".shop_actions,.pro_arrBox_style,.shop_parame").hide();
        }

    }

    //设置默认配送地址
    var setDefaultAddr = function () {
        var addrval = $.cookie('deng_good_addr')
        var pidval = $.cookie('deng_good_pid')
        var gid = $('.mgGoodname').data('gid')
        var meminfoAddr = ''
        mg.ajax(ajax_url+"ajaxMemberInfo.htm",1,'POST',{},'json',function (data) {
            if(addrval){
                var addrarr = addrval.split('-')
                var pidarr  = pidval.split('-')
                $('.mgAddrTitle li').remove()
                for(var j=0;j<addrarr.length;j++){
                    var id = pidarr[j]
                    var add = $("<li class='curr' data-pid="+id+"><a href='javascript:;'><em class='addrname'>"+addrarr[j]+"</em><i></i></a></li>").appendTo('.mgAddrTitle')
                     if(j!=addrarr.length-1) add.removeClass('curr')
                    var name = $('.mySelectAddr').text()
                    if(name == '请选择') name = ''
                    $('.mySelectAddr').text(name+' '+addrarr[j])
                }
                createLi(pidarr[addrarr.length-1])
                mg.ajax(ajax_url+"ajaxInstallFei.htm",1,'POST',{goods_id:gid,province:addrarr[0],city:addrarr[1],region:addrarr[2]},'json',function (data) {
                    $('.insFei').text(data.data.installcost)
                })
                //createLi(pidarr[2])
            }else if(data.msgcode == 0){
                meminfoAddr = data.data.deliver_address.address.province+' '+data.data.deliver_address.address.city+' '+data.data.deliver_address.address.region
                if(meminfoAddr){
                    $('.mySelectAddr').text(meminfoAddr)
                }
                mg.ajax(ajax_url+"ajaxInstallFei.htm",1,'POST',{goods_id:gid,province:data.data.deliver_address.address.province,city:data.data.deliver_address.address.city,region:data.data.deliver_address.address.region},'json',function (data) {
                    $('.insFei').text(data.data.installcost)
                })
            }else{
                $('.insFei').text('0')
            }
        },"unShowLoad")

    }
    //产生选项
    var createLi = function(pid){
        z.flat = false
        var add = $("<li class='curr' data-pid="+pid+"><a href='javascript:;'><em class='addrname'>请选择</em><i></i></a></li>")
        mg.ajax(ajax_url+"ajaxGetArea.htm",1,'POST',{topid:pid},'json',function (data) {
            if(data.data.length>0){
                $('.addr').remove()
                $.each(data.data,function(index,value){
                    $("<li data-pid="+value.id+"><a href='javascript:;'>"+value.name+"</a></li>").appendTo('.mgAreaList').addClass('addr')
                })
                //add.appendTo('.mgAddrTitle')
            }else{
                addrCookies()
                var num = $('.mgAddrTitle li').length
                $('.mgAddrTitle li').eq(num-1).remove()
                $('.mgAddrTitle li').eq(num-2).addClass('curr')
                $('.mgAddrSelect').removeClass('hover')

            }
            z.flat = true
        },"unShowLoad")
    }
    //保存cookies
    var addrCookies = function(){
        var gid = $('.mgGoodname').data('gid')
        var addrarr = []
        var n1 = $.trim($('.mgAddrTitle li').eq(0).text())=='请选择'?'':$.trim($('.mgAddrTitle li').eq(0).text())
        var n2 = $.trim($('.mgAddrTitle li').eq(1).text())=='请选择'?'':$.trim($('.mgAddrTitle li').eq(1).text())
        var n3 = $.trim($('.mgAddrTitle li').eq(2).text())=='请选择'?'':$.trim($('.mgAddrTitle li').eq(2).text())
        if(n2 == ''){
            addrarr = [n1]
            mg.ajax(ajax_url+"ajaxInstallFei.htm",1,'POST',{goods_id:gid,province:addrarr[0]},'json',function (data) {
                $('.insFei').text(data.data.installcost)
            })
        }else if(n3 == ''){
            addrarr = [n1,n2]
            mg.ajax(ajax_url+"ajaxInstallFei.htm",1,'POST',{goods_id:gid,province:addrarr[0],city:addrarr[1]},'json',function (data) {
                $('.insFei').text(data.data.installcost)
            })
        }else{
            addrarr = [n1,n2,n3]
            mg.ajax(ajax_url+"ajaxInstallFei.htm",1,'POST',{goods_id:gid,province:addrarr[0],city:addrarr[1],region:addrarr[2]},'json',function (data) {
                $('.insFei').text(data.data.installcost)
                //console.log(data)
            })
        }
        $.cookie('deng_good_addr', addrarr.join("-"), { expires: 365 });
        var pidarr = [$('.mgAddrTitle li').eq(0).data('pid'),$('.mgAddrTitle li').eq(1).data('pid'),$('.mgAddrTitle li').eq(2).data('pid')]
        $.cookie('deng_good_pid',pidarr.join("-") , { expires: 365 });
    }
    //配送地址
    var setProvince = function(){
        $('.mgAddrSelect').click(function(){
            var selectAddr = $('.mySelectAddr').text()
            if(selectAddr == '请选择'){
                createLi(0)
            }
        })
    }
    //二，三级联动
    var setCityArea = function(){
        $('.mgAreaList').on('click','li',function () {
            if(!z.flat) return false
            var pid = $(this).data('pid')
            var pname = $(this).text()
            setAddrName(pname,pid)
            var ji = ++z.addrNum
            createLi(pid)
            return false
        })
    }
    var setAddrName = function(name,pid){
        var ji = 0
        var add = $("<li class='curr' data-pid="+pid+"><a href='javascript:;'><em class='addrname'>请选择</em><i></i></a></li>")
        $('.mgAddrTitle li').each(function(index,value){
            if($(value).hasClass('curr')){
                ji = index+1
            }
        })
        switch(ji){
            //case 0:add.appendTo('.mgAddrTitle');break;
            case 1:ji1(add,name);break;
            case 2:ji2(add,name);break;
            case 3:ji3(add,name);break;
            default:$('.mgAddrTitle li').remove();break;
        }
    }
    var ji1 = function(add,name){
        $('.mgAddrTitle li').removeClass('curr')
        $('.mgAddrTitle li').eq(0).find('.addrname').text(name)
        $('.mgAddrTitle li').eq(1).remove()
        $('.mgAddrTitle li').eq(1).remove()
        add.appendTo('.mgAddrTitle')
        $('.mySelectAddr').text(name)
        z.addrNum=1
    }
    var ji2 = function(add,name){
        $('.mgAddrTitle li').removeClass('curr')
        $('.mgAddrTitle li').eq(1).find('.addrname').text(name)
        $('.mgAddrTitle li').eq(2).remove()
       add.appendTo('.mgAddrTitle')
        $('.mySelectAddr').text($.trim($('.mgAddrTitle li').eq(0).text())+" "+$.trim($('.mgAddrTitle li').eq(1).text()));
        z.addrNum=2
    }
    var ji3 = function(add,name){
        $('.mgAddrTitle li').eq(2).find('.addrname').text(name)
        //$('.mgAddrSelect').removeClass('hover')
        $('.mySelectAddr').text($.trim($('.mgAddrTitle li').eq(0).text())+" "+$.trim($('.mgAddrTitle li').eq(1).text())+" "+$.trim($('.mgAddrTitle li').eq(2).text()));
        add.appendTo('.mgAddrTitle')
        z.addrNum=3
    }
    var addrTabClick = function(){
        $('.mgAddrTitle').on('click','li',function(){
            var ji = $(this).index()
            var pid = $(this).data('pid')?$(this).data('pid'):0
            $('.mgAddrTitle li').removeClass('curr').eq(ji).addClass('curr')
            createLi(pid)
        })
    }

    //体验馆
    var pavShengClick = function () {
        $('.pavShengTit').click(function(){
            mg.ajax(ajax_url+"ajaxGetArea.htm",1,'POST',{topid:0},'json',function (data) {
                if(data.data.length>0){
                    $('.addrs').remove()
                    $('.addrc').remove()
                    $('.mgpav').remove()
                    $.each(data.data,function(index,value) {
                        $("<li data-pid=" + value.id + "><a href='javascript:;'>" + value.name + "</a></li>").appendTo('.pavSheng').addClass('addrs').on('click',setPavCity)
                    })
                    $('.pavCityTit').text('选择市级')
                    $('.pavNameTit').text('选择体验馆')
                }
            },"unShowLoad")
        })
    }
    var setPavCity = function () {
        var pid = $(this).data('pid')
        $('.pavShengTit').text($(this).text())
        mg.ajax(ajax_url+"ajaxGetArea.htm",1,'POST',{topid:pid},'json',function (data) {
            if(data.data.length>0){
                $('.addrc').remove()
                $('.mgpav').remove()
                $.each(data.data,function(index,value) {
                    $("<li data-pid=" + value.id + "><a href='javascript:;'>" + value.name + "</a></li>").appendTo('.pavShi').addClass('addrc').on('click',setPavShop)
                })
                $('.pavNameTit').text('选择体验馆')
            }
        },"unShowLoad")
    }
    var setPavShop = function () {
        $('.pavCityTit').text($(this).text())
        var sheng = $.trim($('.pavShengTit').text())
        var shi   = $.trim($(this).text())
        mg.ajax(ajax_url+"ajaxGoodPavilion.htm",1,'POST',{province:sheng,city:shi},'json',function (data) {
            //console.log(data)
            if(data.data.length>0){
                $('.mgpav').remove()
                $.each(data.data,function(index,value) {
                    $("<li data-pid=" + value.pid + "><a href='javascript:;'>" + value.pshopname + "</a></li>").appendTo('.mgPav').addClass('mgpav').on('click',goPavShop)
                })
                $('.pavNameTit').text('请选择体验馆')
            }else{
                $('.mgpav').remove()
                $('.pavNameTit').text('此地区暂无体验馆')
                $("<li><a href='javascript:;'>此地区暂无体验馆</a></li>").appendTo('.mgPav').addClass('mgpav')
            }
        },"unShowLoad")
    }
    var goPavShop= function () {
        var pid = $(this).data('pid')
        location.href = ajax_url+'pavilion.htm?id='+pid
    }

    //评论
    var reviewlock = false
    var review = function(){
        $('.mgReview').hover(function () {
            getReview(1)
        })
    }
    var getReview = function (p) {
        if(z.ReviewFlat){
            var data = z.ReviewData
            if(data.data.length>0){
                $('.reviewItem').remove()
                $.each(data.data,function(index,value) {
                    var t = $('.reViewexample').clone().appendTo('.reviewBox').addClass('reviewItem').removeClass('reViewexample').show()
                    t.find('.rename').text(value.rmembername)
                    t.find('.retime').text(value.rratetime)
                    t.find('.recontent').text(value.rratecontent)
                })
                pcpage.one('.reviewpage',data.page.current,data.page.total_pages,data.page.limit,data.page.before,data.page.next,function (p) {
                    reviewlock = false
                    z.ReviewFlat = false
                    getReview(p.data.page)
                    $(window).scrollTop(900);
                })
            }else{
                $('.noinfo').remove()
                $('<div class="noinfo" style="text-align: center;margin-top:60px"><h4>暂无信息</h4></div>').appendTo('.reviewBox')
            }
            return false
        }
        //z.ReviewFlat = false
        if(reviewlock) return false
        reviewlock = true
        var gid = $('.mgGoodname').data('gid')
        mg.ajax(ajax_url+"ajaxReview.htm",1,'POST',{page_size:10,goods_id:gid,page:p},'json',function (data) {
            //console.log(data)
            reviewlock = false
            if(data.msgcode != 0) return false;
            z.ReviewData = data
            if(data.data.length>0){
                $('.reviewItem').remove()
                $.each(data.data,function(index,value) {
                    var t = $('.reViewexample').clone().appendTo('.reviewBox').addClass('reviewItem').removeClass('reViewexample').show()
                    t.find('.rename').text(value.rmembername)
                    t.find('.retime').text(value.rratetime)
                    t.find('.recontent').text(value.rratecontent)
                })
                pcpage.one('.reviewpage',data.page.current,data.page.total_pages,data.page.limit,data.page.before,data.page.next,function (p) {
                    z.ReviewFlat = false
                    getReview(p.data.page)
                    $(window).scrollTop(900);
                })
            }else{
                $('.noinfo').remove()
                $('<div class="noinfo" style="text-align: center;margin-top:60px"><h4>暂无信息</h4></div>').appendTo('.reviewBox')
            }

            z.ReviewFlat = true
        },"unShowLoad")
    }

    //销售
    var salelock = false
    var sale = function(){
        $('.mgSale').hover(function () {
            getSale(1)
        })
    }
    var getSale = function (p) {
        if(z.SaleFlat){
            var data = SaleData
            if(data.data.length>0){
                $('.saleItem').remove()
                $.each(data.data,function(index,value) {
                    var t = $('.saleexample').clone().appendTo('.mgsale').addClass('saleItem').removeClass('saleexample').show()
                    t.find('.sname').text(value.mnickname)
                    t.find('.sbusnumber').text(value.ogbusnumber)
                    t.find('.sskuname').text(value.skuname)
                    t.find('.snumber').text(value.ognumber)
                    var time = value.ogtimecomplete.split(' ')
                    t.find('.syear').text(time[0])
                    t.find('.stime').text(time[1])
                })
                pcpage.one('.salePage',data.page.current,data.page.total_pages,data.page.limit,data.page.before,data.page.next,function (p) {
                    z.SaleFlat = false
                    salelock = false
                    getSale(p.data.page)
                    $(window).scrollTop(900);
                })
            }else{
                $('.noinfo').remove()
                $('<div class="noinfo" style="text-align: center;margin-top:20px"><h4>暂无信息</h4></div>').appendTo('.nomessage')
            }
            return false
        }
        //z.SaleFlat = false
        if(salelock) return false
        salelock = true
        var gid = $('.mgGoodname').data('gid')
        mg.ajax(ajax_url+"ajaxSale.htm",1,'POST',{page_size:10,goods_id:gid,page:p},'json',function (data) {
            //console.log(data)
            salelock = false
            if(data.msgcode != 0) return false;
            SaleData = data
            if(data.data.length>0){
                $('.saleItem').remove()
                $.each(data.data,function(index,value) {
                    var t = $('.saleexample').clone().appendTo('.mgsale').addClass('saleItem').removeClass('saleexample').show()
                    t.find('.sname').text(value.mnickname)
                    t.find('.sbusnumber').text(value.ogbusnumber)
                    t.find('.sskuname').text(value.skuname)
                    t.find('.snumber').text(value.ognumber)
                    var time = value.ogtimecomplete.split(' ')
                    t.find('.syear').text(time[0])
                    t.find('.stime').text(time[1])
                })
                pcpage.one('.salePage',data.page.current,data.page.total_pages,data.page.limit,data.page.before,data.page.next,function (p) {
                    z.SaleFlat = false
                    getSale(p.data.page)
                    $(window).scrollTop(900);
                })
            }else{
                $('.noinfo').remove()
                $('<div class="noinfo" style="text-align: center;margin-top:20px"><h4>暂无信息</h4></div>').appendTo('.nomessage')
            }

            z.SaleFlat = true
        },"unShowLoad")
    }

    //团购
    var tuangou = function () {
        var isTuangou = $('.tuangoubox').data('activetype')
        if(typeof(isTuangou) == 'undefined') return false
        var downtimet      =setInterval(tuanDownTime,1000)
        var tbsellnumber   = $('.mgtuan').data('tbsellnumber')
        var tbnum          = $('.mgtuan').data('tbnum')
        var bfb            = Math.round(tbsellnumber/tbnum*100)
        $('.bai').attr('aria-valuenow',bfb).css('width',bfb+'%').text(bfb+'%')
    }
    var tuanDownTime = function () {
        var hm = $('.goodtuntime').data('time')
        var sen=$(".goodtuntime")
        var d=parseInt(hm/(24*60*60));
        var h=parseInt((hm-24*60*60*d)/(60*60));
        var m=parseInt((hm-((24*60*d+60*h)*60))/(60));
        var s=parseInt((hm-((24*60*d+60*h+m)*60)));
        s-=1;
        if(s<0){
            m-=1;s=59;
        }
        if(m<0){
            h-=1;m=59;
        }
        if(h<0){
            d-=1;h=23;
        }
        if(d<0){
            d=0;h=0;m=0;s=0;
        }
        sen.find(".day").text(d);
        sen.find(".hour").text(h);
        sen.find(".min").text(m);
        sen.find(".sec").text(s);
        sen.data("time",hm-1);
        if(s==0 && m==0 && h==0 && d==0){
            $('.goodbuynow').show()
            $('.nobuynow').hide()
            killtime = false
        }
    }

    //特卖
    var temai = function () {
        var isTemai = $('.temaibox').data('activetype')
        if(typeof(isTemai) == 'undefined') return false
        var downtimet      =setInterval(tuanDownTime,1000)
    }
    
    //主题活动倒计时
    var zhuti = function () {
        var downtimet      =setInterval(tuanDownTime,1000)
    }

    //加购物车
    var addCartbtn=function(){
        $(".addCartbtn").click(function(){
            var gid=$(this).data("gid");
            var minum=$(this).data("minum");
            var gnum=parseInt($(".myInputNum").val());
            var cparam = {goods_json:[]}
            var add={"goods_id":gid,"num":gnum};
            var ck = parseInt($('.kucunnum').text())
            if(gnum > ck){
                mgalert.message("加入购物车数量大于库存数量，请调整。");
                return ;
            }
            if(gnum < minum){
                mgalert.message("不能少于最少购买数量 "+minum+" 件，请调整。");
                return ;
            }
            cparam.goods_json.push(add)
            cparam.type = ''
            mg.ajax(ajax_url+"ajaxAddCart.htm",1,'POST',cparam,'json',function (data) {
                //console.log(data)
                if(data.msgcode==8100001){
                    isLogin(data)
                }else{
                    if(data.msgcode==0){
                        mgalert.message("加入购车成功");
                        mg.ajax(ajax_url+"ajaxCartNum.htm",1,'POST',{},'json',function (data1) {
                            //console.log(data1)
                            $('.cartnum').text(data1.data)
                        })
                    }else{
                        mgalert.message(data.domsg);
                        //console.log(data)
                    }
                }
            },"unShowLoad")
        })
    }
    //加购物车--活动
    var addCartavtbtn=function(){
        $(".addCartAtvbtn").click(function(){
            //console.log(1)
            var gid=$(this).data("gid");
            var minum=$(this).data("minum");
            var gnum=parseInt($(".myInputNum").val());
            var cparam = {goods_json:[]}
            var add={"goods_id":gid,"num":gnum};
            var ck = parseInt($('.kucunnum').text())
            if(gnum > ck){
                mgalert.message("加入购物车数量大于库存数量，请调整。");
                return ;
            }
            if(gnum < minum){
                mgalert.message("不能少于最少购买数量 "+minum+" 件，请调整。");
                return ;
            }
            cparam.goods_json.push(add)
            cparam.type = 'Preheat'
            mg.ajax(ajax_url+"ajaxAddCart.htm",1,'POST',cparam,'json',function (data) {
                //console.log(data)
                if(data.msgcode==8100001){
                    isLogin(data)
                }else{
                    if(data.msgcode==0){
                        mgalert.message("加入预售购车成功，请到预售购物车中查看");
                        mg.ajax(ajax_url+"ajaxCartNum.htm",1,'POST',{},'json',function (data1) {
                            //console.log(data1)
                            $('.cartnum').text(data1.data)
                        })
                    }else{
                        mgalert.message(data.domsg);
                        //console.log(data)
                    }
                }
            },"unShowLoad")
        })
    }

    //数量编辑
    var numEdit=function () {
        $('.myInputNum').change(function () {
            var num = parseInt($(this).val())
            var ynum = $(this).data("val");
            var cmin=$(this).data("min");
            var cku=$(this).data("ku");
            if(isNaN($(this).val())){
                mgalert.message("请输入正确的数量");
                $(this).val(ynum)
                return ;
            }
            if(num < cmin){
                mgalert.message("不能少于最少购买数量 "+cmin+" 件。");
                $(this).val(ynum)
                return ;
            }
            if(num > cku){
                mgalert.message("加入数量不能大于库存数量"+cku+" 件。");
                $(this).val(ynum)
                return ;
            }
        })
    }


    //搜藏
    var addFav=function(){//收藏
        $(".myFav").click(function(){
            var id=$(".myFav").data("gid");
            mg.ajax(ajax_url+"ajaxAddFav.htm",1,'POST',{goods_ids:id},'json',function (data) {
                //console.log(data)
                if(data.msgcode==8100001) {
                    isLogin(data);
                }else{
                    if (data.data && data.data.isset){
                        $(".myFav").addClass("select_cl");
                        mgalert.message('收藏成功')
                    }
                    else{
                        $(".myFav").removeClass("select_cl");
                        mgalert.message('取消收藏')
                    }
                }

            });
        })
    }

    //详情滚动才显示
    var detail=function(){
        var flat = 0;
        $(window).scroll(function () {
			var sctop = document.documentElement.scrollTop || document.body.scrollTop;
            if ( sctop >= 150) {
                if(flat == 0){
                    $(".myGoodsDesc").html(TextIMG($('.webDesc').val(),85));
                    flat = 1;
					load_like_goods();
                }
            }
			if( typeof( window['like_goods_list_had_been_load'] )!="undefined"){
				var marginBot;
				if (document.compatMode === "CSS1Compat"){
					marginBot = document.documentElement.scrollHeight-(document.documentElement.scrollTop+document.body.scrollTop)-document.documentElement.clientHeight;
				} else {
					marginBot = document.body.scrollHeight - document.body.scrollTop-document.body.clientHeight;
				}
				var ofset = $('.ike_goods_list_180622 dd').last().offset();
				if( ofset.top < sctop){
					if(typeof( window['like_goods_list_is_fixed'] ) == "undefined" || window['like_goods_list_is_fixed']==false){
						var position='position:fixed;top:0;';
						if( typeof( window['like_goods_list_is_fixed'] ) == "undefined" ){
							var t_obj = $('.ike_goods_list_180622').eq(0), clone_obj = t_obj.clone().removeClass('ike_goods_list_180622').addClass('ike_goods_list_180622_fixed_tag_1806');
							clone_obj.attr({'style':position}) ;
							t_obj.after( clone_obj );
							t_obj.attr({'style':'opacity:0;filter:alpha(opacity=0);visibility:hidden;'});
						}else{

							$('.ike_goods_list_180622').attr({'style':'opacity0;filter:alpha(opacity=0);visibility:hidden;'})
							$('.ike_goods_list_180622_fixed_tag_1806').attr({'style':position});
						}
						window['like_goods_list_is_fixed'] = true;
					}else{
						if(typeof( window['like_goods_list_is_fixed'] ) != "undefined" && window['like_goods_list_is_fixed']){
							position='position:fixed;top:0;';
							var xheigt = $('.ike_goods_list_180622').height();
							var xtop   = 500 + xheigt - document.documentElement.clientHeight ;
							if( marginBot <= xtop ){
								position = 'position:absolute;bottom:0';
								$('.ike_goods_list_180622_fixed_tag_1806').attr({'style':position}) ;
							}else if( marginBot > xtop ){
								$('.ike_goods_list_180622_fixed_tag_1806').attr({'style':position}) ;
							}
						}
					}
				}else{
					if(typeof( window['like_goods_list_is_fixed'] ) != "undefined" && window['like_goods_list_is_fixed']){
						$('.ike_goods_list_180622').removeAttr('style');
						$('.ike_goods_list_180622_fixed_tag_1806').attr({'style':'display:none'});
						window['like_goods_list_is_fixed'] = false;
					}
				}
			}
        })
    }

    //立即购买
    var nowbuybtn=function(){
        $(".goodbuynow").click(function(){
            var that = $(this)
            var type = $(this).data('kill')
            mg.ajax(ajax_url+"ajaxCartList.htm",1,'POST',{},'json',function (data) {
                //console.log(data)
                if(data.msgcode==8100001) {
                    isLogin(data)
                }else{
                    var gid=that.data("gid");
                    var gnum=parseInt($(".myInputNum").val());
                    var min = that.data('minum')
                    var ck = parseInt($('.kucunnum').text())
                    if(gnum > ck){
                        mgalert.message("购买数量大于库存数量，请调整。");
                        return ;
                    }
                    if(gnum<min){
                        mgalert.message('此商品最少购买'+min+"件")
                        $(".myInputNum").val(min)
                    }else{
                        if(type=="seckill_ing" || type=="seckill_ready"){
                            if(killtime){
                                location.href = ajax_url+"confirm.htm?mode=buy&type=seckill&id="+gid+"&num="+gnum
                            }else{
                                mgalert.message("秒杀已经结束",function () {
                                    location.reload()
                                })
                            }
                        }else{
                            location.href = ajax_url+"confirm.htm?mode=buy&id="+gid+"&num="+gnum
                        }
                    }
                }
            })
        })
    }

    //手机下单
    var phoneDwonOrder = function () {
        $('.phoneDwon').click(function () {
            var gpid = $(this).data('gid')
            var did  = GU('deng');
            var gtext = 'http://m.deng.com/'+gpid+'.htm'
            if(did){
                gtext = 'http://m.deng.com/'+gpid+'.htm?deng='+did
            }
            $('#codegood').find('canvas').remove()
            $('#codegood').qrcode({
                width: 120, //宽度
                height:120, //高度
                text: gtext
            });
        })
    }

	var fix_sku_list_ui = function(){
		var skulist_obj_sample = $('.pi_attr_box .mySkuInfo .skuBexample');
		if( !skulist_obj_sample ) return false;
		var skulist_obj	= skulist_obj_sample.siblings();
		skulist_obj.each(function(){
			var tis=$(this),total_height = tis.height(), tit_obj=tis.find('dt.skuBtitle').eq(0), tit_height = tit_obj.height();
			var left_height = 0;
			if( tit_height * 2 < total_height ){
				left_height = total_height - tit_height;
				tit_obj.css({'margin-bottom':left_height+'px'});
			}
		});
		
	};
	
	var hover_commisions = function(){
		
		$('.opt_cls_block_commisions').mouseover(function(){
			var tis = $(this), conobj = tis.find('.opt_cls_block_commisions_content'), is_loaded = false;
			var pos = tis.attr('cpos');
			var gpid = $('.mgGoodname').attr('data-gid');
			if( tis.attr('is_loaded') == '1' ) is_loaded = true;
			if( is_loaded ) return true;
			var error_msg = function( msg ){
				
				
			};
			if( conobj.length == 0 ) return false;
			if(typeof(window['icommitions_isloading'])!="undefined" &&window['icommitions_isloading'] ) return false;
			window['icommitions_isloading'] = true;
			$.ajax({
				url:'/icommitions.htm',
				type:'POST',
				dataType:'json',
				data:{pos:pos,gpid:gpid},
				success:function(r){
					window['icommitions_isloading'] = false;
					tis.attr({'is_loaded':'1'});
					if( typeof(r.msgcode)!="undefined" && r.msgcode==0){
						conobj.after( r.data );
						conobj.remove();
					}
				},
				error:function(){
					window['icommitions_isloading'] = false;
					
				}
			});
			
		});
		
	};
	
	//异步加载相关商品
	var load_like_goods=function(){
		var dobj = document.getElementById('param_box_div_20180622');
		var brand,sort;
		brand = dobj.getAttribute('brand');
		sort = dobj.getAttribute('sort');
		
		var url_reg = /\[\[URL\]\]/ig;
		var img_reg = /\[\[IMG\]\]/ig;
		var gname_reg = /\[\[GNAME\]\]/ig;
		var gbusnumber_reg = /\[\[XINGHAO\]\]/ig;
		var gpprice_reg = /\[\[PRICE\]\]/ig;
		var sellcount_reg = /\[\[SELLCOUNT\]\]/ig;
		var youxuan_reg =  /\[\[YOUXUAN\]\]/ig;
		
		if(typeof(window['i_load_like_goods_isloading'])!="undefined" &&window['i_load_like_goods_isloading'] ) return false;
		window['i_load_like_goods_isloading'] = true;
		$.ajax({
			url:'/likegoods.htm',
			type:'POST',
			dataType:'json',
			data:{brand:brand,sort:sort},
			success:function(r){
				window['i_load_like_goods_isloading'] = false;
				var tpl_txt = $('#like_goods_list_tpl_1806').html();
				var htm = '', ret_html='';
				if( typeof(r.msgcode)!="undefined" && r.msgcode==0){
					for(var a=0;a<r.data.length;a++){
						var v = r.data[a];
						htm = tpl_txt;
						if( typeof( v['gpid'] ) == "undefined" ){
							continue;
						}
						htm = htm.replace(url_reg, '/'+v['gpid']+'.htm');
						htm = htm.replace(img_reg, IMG(v['gpimage'], 204, 204));
						htm = htm.replace(gname_reg, v['gname']);
						htm = htm.replace(gbusnumber_reg, v['gbusnumber']);
						htm = htm.replace(gpprice_reg, v['gpprice']);
						htm = htm.replace(sellcount_reg, v['sellcount']);
						
						var youxuan_str = '';
						
						if(typeof(v['cornericonarr'])=="object" && v['cornericonarr'].length > 0 ){
							youxuan_str += '<div class="all-icons">';
							for(var i=0;i<v['cornericonarr'].length;i++){
								youxuan_str += '<i class="yx-icon yx-icon-index-'+i+'" style="background-image:url('+v['cornericonarr'][i]+')"></i>';
							}			
							youxuan_str += '</div>';
						}
						htm = htm.replace(youxuan_reg, youxuan_str);
						
						ret_html += htm;
					}
					$('.ike_goods_list_180622 dt').after( ret_html );
					window['like_goods_list_had_been_load'] = true;
				}
			},
			error:function(){
				window['i_load_like_goods_isloading'] = false;
				
			}
		});
	};
	
    z.ini=function(){
        qianJS()
        setSku()
        canUseSku()
        clickSku();
		fix_sku_list_ui();
		fix_sku_list_ui();
        //setDefaultAddr()
        setProvince()
        setCityArea()
        addrTabClick()
        pavShengClick()
        numEdit()
        review()
        sale()
        tuangou()
        temai()
        zhuti()
        addCartbtn()
        addCartavtbtn()
        addFav()
        detail()
        nowbuybtn()
        phoneDwonOrder()
		hover_commisions();
    }
    return z;
}
$(function(){
    good.ini();
})
