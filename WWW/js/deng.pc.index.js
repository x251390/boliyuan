var home=new function(){

    var i={
        rfbtn1:2,
        rfbtn2:2,
        oldbid:0,
        hotflat:false,
        newflat:false,
        teflat:false,
        tuanflat:false,
    };
    i.param={
        page: 1,
        model: "",
        sokey: "",
        bkey:"",
        pricemin:"",
        pricemax:"",
        sort: "",
        brand: "",
        style: "",
        space: "",
        prop: "",
        list_type:0,
        is_count: "",
        is_index: 1,
        is_list:1,
        page_size:8,
        q:0,
    }
    i.phone

    var qianJS  = function () {
        //全部分类导航
        $('.h_s_sort').mouseenter(function () {
            $('.header_smenu').css({"position": "relative"}).show();
        }).mouseleave(function () {
            $('.header_smenu').css({"position": "relative"}).show();
        });

        // $('.headnav').show()
        $('.mgindex').addClass('cu')

        // $('.indexsellbtn').click(function () {
        //     location.href = ajax_url + "list.htm?model=sell_desc"
        // })
        // $('.indexnewbtn').click(function () {
        //     location.href = ajax_url + "list.htm?model=new"
        // })
        // $('.indexhotbtn').click(function () {
        //     location.href = ajax_url + "list.htm?model=hot"
        // })
		
		/**
			2017-12-19 注释掉
        $('.indexadbtn').click(function () {
            $('.advbg,.advertisement_wrap').hide()
        })

        if(!$.cookie('ads_show')){
            $('.advbg,.advertisement_wrap').show()

            var date = new Date();
            date.setTime(date.getTime()+3600*1000*24);
            $.cookie('ads_show', '1', { expires: date });
        }

        setInterval(function () {
            $('.advbg,.advertisement_wrap').hide()
        },4000)
		*/

        setInterval(function () {
            $('[data-spy="scroll"]').each(function () {
                var $spy = $(this).scrollspy('refresh')
            });
        },2000)

        $('.carousel').carousel({
            interval: 5000
        })

    }
    
    var errorImg = function () {
        // $('img').error(function(){
        //     $(this).attr('src','images/pub/d-loading.gif');
        // });
    }

    //推荐品牌刷新
    var createItem1 = function(index,value){
        var t=$(".brandexample").clone().insertBefore(".brandRefreshBtn1").addClass("branditem").removeClass("brandexample").show();
            t.find('.bimg').attr('src',IMG(value.gbimage,112,54))
            t.find('.bimg').attr('alt',value.gbname)
            t.find('.title').text(value.gbname)
            t.find('a').attr('href','list.htm?brand='+value.gbid)
    }
    var brandRefresh1 = function(){
        $(".brandRefreshBtn1").click(function(){
            $(".branditem").each(function(){
                $(this).find("img").attr("src","images/pub/b-loading.gif").addClass("loadimg");
            })
            mg.ajax(ajax_url+"changeBrand.htm",1,'POST',{page:i.rfbtn1,pageSize:17,type:2},'json',function (data) {
                    $(".branditem").remove()
                    $.each(data.data,createItem1)
                    if(++i.rfbtn1 > data.page.total_pages) i.rfbtn1=1;
            },"unShowLoad")
        })
    }
    var createItem2 = function(index,value){
        var t=$(".brandexample").clone().insertBefore(".brandRefreshBtn2").addClass("branditem2").removeClass("brandexample").show();
        t.find('.bimg').attr('src',IMG(value.gbimage,112,54))
        t.find('.bimg').attr('alt',value.gbname)
        t.find('.title').text(value.gbname)
        t.find('a').attr('href','list.htm?brand='+value.gbid)
    }
    var brandRefresh2 = function(){
        $(".brandRefreshBtn2").click(function(){
            $(".branditem2").each(function(){
                $(this).find("img").attr("src","images/pub/b-loading.gif").addClass("loadimg");
            })
            mg.ajax(ajax_url+"changeBrand.htm",1,'POST',{page:i.rfbtn2,pageSize:17,type:3},'json',function (data) {
                //console.log(data)
                $(".branditem2").remove()
                $.each(data.data,createItem2)
                if(++i.rfbtn2 > data.page.total_pages) i.rfbtn2=1;

            },"unShowLoad")

        })
    }

    var imgtime = 0
    //楼层异步
    var createCeng = function(data,bc,bid){
// console.log("."+bc+" ."+bid)
        $("."+bc+" ."+bid).find('.ceng').remove()
        var t = $(".ceng1example").clone().appendTo("."+bc+" ."+bid).addClass("ceng").removeClass("ceng1example").attr('data-bid',bid).show();
        var p = $(".ceng2example").clone().appendTo("."+bc+" ."+bid).addClass("ceng").removeClass("ceng2example").attr('data-bid',bid).show();

        $.each(data.data,function(index,value){
            if(index < 4){
                t.find('.li'+index+' img').attr('src',IMG(value.gpimage,128,128)).error(function () {
                    $(this).attr('src','http://misc.dengimg.com/misc/deng/images/pub/d-loading.gif');
                }).parent('a').attr('href',value.gpid+'.htm')
                t.find('.li'+index+' .title a').text(value.gname).attr('href',value.gpid+'.htm')
                t.find('.li'+index+' .data').text(value.gpskuvalue[0].name +':'+ value.gpskuvalue[0].value)
                t.find('.li'+index+' .price').text("￥"+value.gpprice)
            }
            if(index >= 4){
                p.find('.li'+index+' img').attr('src',IMG(value.gpimage,192,192)).error(function () {
                    $(this).attr('src','http://misc.dengimg.com/misc/deng/images/pub/d-loading.gif');
                }).parent('a').attr('href',value.gpid+'.htm')
                p.find('.li'+index+' .title a').text(value.gname).attr('href',value.gpid+'.htm')
                p.find('.li'+index+' .data').text(value.gpskuvalue[0].name +':'+ value.gpskuvalue[0].value)
                p.find('.li'+index+' .price').text("￥"+value.gpprice)
            }
        })
        var adlink = $("."+bc+" .zhongAD a").attr('href')
        var adimg = $("."+bc+" .zhongAD img").attr('src')
        t.find('.zhongadv a').attr('href',adlink)
        t.find('.zhongadv img').attr('src',adimg)

    }
    var createCengKong = function(bc,bid){

        var t = $(".ceng1example").clone().appendTo("."+bc+" ."+bid).addClass("ceng").removeClass("ceng1example").attr('data-bid',bid).show();
        var p = $(".ceng2example").clone().appendTo("."+bc+" ."+bid).addClass("ceng").removeClass("ceng2example").attr('data-bid',bid).show();
        var adlink = $("."+bc+" .zhongAD a").attr('href')
        var adimg = $("."+bc+" .zhongAD img").attr('src')
        t.find('.zhongadv a').attr('href',adlink)
        t.find('.zhongadv img').attr('src',adimg)
    }
    var checkBrandGoods = function(bid,ceng){
        var flat = true
        $("."+ceng+" .ceng").each(function(index,value){
            if($(this).data("bid") == bid) flat = false
        })
        return flat
    }
    var floorBrandGoods = function(){
        $(".brand_tab li").hover(function(){

            var bc   = $(this).data('ceng')
            var fid  = $(this).data('first')
            i.param.sort  = $(this).data('sort')
            i.param.space = $(this).data('space')
            i.param.style = $(this).data('style')
            i.param.model = $(this).data('model')
            i.param.prop  = $(this).data('prop')
            i.param.pricemin = $(this).data('pricemin')
            i.param.pricemax = $(this).data('pricemax')
            i.param.sokey = $(this).data('sokey')
            i.param.brand = $(this).data('id')
            i.param.is_index = 1
            i.param.is_brandorseries = 'series'

            if(i.param.brand == i.oldbid || i.param.brand == fid) return false;
            else i.oldbid = i.param.brand
            if(checkBrandGoods(i.param.brand,bc)){
                // console.log(bc,i.param,i.param.brand)
                createCengKong(bc,i.param.brand)
                createajaxceng(i.param,bc,i.param.brand)
            }

        })
    }
    var createajaxceng=function(p,c,b){
        mg.ajax(ajax_url+"ajaxGetList.htm",1,'POST',p,'json',function (data) {
            // console.log(data)
            if(data.msgcode == 0 && data.data.length>0) {
                createCeng(data,c,b)
                changeA()
            }else{
                createCengKong(c,b)
            }

        },"unShowLoad")
    }

    //楼层数据侧换
    var cengChange = function(){
        //floor
        jQuery(".brandTab_head").slide({
            mainCell: ".floorNav ul",
            autoPage: true,
            effect: "left",
            autoPlay: false,
            scroll: 12,
            vis: 12
        });
        $('.brandTab_head').each(function() {
            var num = $(this).find('.brand_tab').children('li').length;
            if(num < 13) {
                $(this).find('.floorNav_arrow').hide();
            } else {
                $(this).find('.floorNav_arrow').show();
            }
        });
        jQuery(".slideBox").slide({titCell:".floorNav ul li",mainCell:".slideBoxBd",autoPlay:false});
    }
    var floorNextBtn = function () {
        $('.next,.prev').click(function () {
            var ceng = $(this).data('ceng')
            var bid = ''
            $('li[data-ceng="' + ceng + '"]').each(function () {
                if($(this).hasClass('on')){
                    bid = $(this).data('id')
                    $('li[data-id="' + bid + '"]').mouseenter()
                }
            })
        })
    }
        
    var setFloorGoods = function (which,data) {
        $.each(data.data,function (index,value) {
            $(which).find('.slideBoxBdUl li').eq(index).find('.d-loading').hide()
            if(index <4){
                $(which).find('.slideBoxBdUl li').eq(index).find('img').attr('src',IMG(value.gpimage,128,128)).show().parent('a').attr('href',value.gpid+'.htm')
            }else{
                $(which).find('.slideBoxBdUl li').eq(index).find('img').attr('src',IMG(value.gpimage,192,192)).show().parent('a').attr('href',value.gpid+'.htm')
            }

            $(which).find('.slideBoxBdUl li').eq(index).find('.title  a').text(value.gname).attr('href',value.gpid+'.htm')
            $(which).find('.slideBoxBdUl li').eq(index).find('.subtil').text(value.gsubtitle)
            $(which).find('.slideBoxBdUl li').eq(index).find('.price').text("￥"+value.gpprice)
        })

    }
    //下拉加载
    var cflat=[]
    var nowtop = $(this).scrollTop()
    window.scrollTo(0,nowtop)
    var doscroll = function(){
        $(window).scroll(function() {
            var top = $(this).scrollTop()
            // if(top>500){
            //     if(!indexfootlock){
            //         $(' <iframe class="domainUrl" src="http://wljg.gdgs.gov.cn/lz.ashx?vie=41BEF320E537FBF5DEC5E2FB9F4D72747BF844942112EDD1A02FE3B786BF0D7CC6653A94BB0A9515CBFDD0049F28DCF4" scrolling="no" style="overflow:hidden;" frameborder="0" allowtransparency="true"></iframe>').appendTo('.indexfoot')
            //         indexfootlock = true
            //     }
            // }

            if(top>1000 && !i.teflat){
                //console.log('temai')
                i.teflat = true
                $('.mgIndexTM .loading1').show()
                mg.ajax(ajax_url+"indexTe.htm",1,'POST',{},'text',function (data) {
                    $('.mgIndexTM .loading1').hide()
                    $('.mgIndexTM').html(data);
                    if($('.temaibiao').length == 0){
                        $('.mgIndexTM,.xstggo').hide()
                    }
                    $('[data-spy="scroll"]').each(function () {
                        var $spy = $(this).scrollspy('refresh')
                    });
                    changeA()
                },"unShowLoad")
            }
            // if(top>=0 && !i.tuanflat){
            //     console.log('tuangou')
            //     i.tuanflat = true
            //     $('.mgIndexTG .loading1').show()
            //     mg.ajax(ajax_url+"indexTuan.htm",1,'POST',{},'text',function (data) {
            //         $('.mgIndexTG .loading1').hide()
            //         $('.mgIndexTG').html(data);
            //         if($('.tuangoubiao').length == 0){
            //             $('.mgIndexTG,.tgsygo').hide()
            //         }
            //         $('[data-spy="scroll"]').each(function () {
            //             var $spy = $(this).scrollspy('refresh')
            //         });
            //         //---倒计时
            //         try{
            //             var tuan1 = $('#fistTime').data('end').replace(/-/i,'/')
            //             $('#fistTime').countdown(tuan1, function (event) {
            //                 $(this).html(event.strftime('活动结束仅剩余：<em>%D</em>天<em>%H</em>时<em>%M</em>分<em>%S</em>秒'));
            //             });
            //             //下期
            //             var tuan2 = $('#lastTime').data('start').replace(/-/i,'/')
            //             $('#lastTime').countdown(tuan2, function (event) {
            //                 $(this).html(event.strftime('<em>%D</em>天<em>%H</em>时<em>%M</em>分<em>%S</em>秒后活动开启'));
            //             });
            //         }catch(e){
            //             //console.log(e)
            //         }
            //         changeA()
            //     },"unShowLoad")
            // }

            for(var q=0;q<$('.mgIndex1').length;q++){
                if(top>2500+q*800 && !cflat[q]){
                    cflat[q] = true
                    i.param.sort  = $('#listItem0'+(q+6)+' .brand_tab li').data('sort')
                    i.param.space = $('#listItem0'+(q+6)+' .brand_tab li').data('space')
                    i.param.style = $('#listItem0'+(q+6)+' .brand_tab li').data('style')
                    i.param.model = $('#listItem0'+(q+6)+' .brand_tab li').data('model')
                    i.param.prop  = $('#listItem0'+(q+6)+' .brand_tab li').data('prop')
                    i.param.pricemin = $('#listItem0'+(q+6)+' .brand_tab li').data('pricemin')
                    i.param.pricemax = $('#listItem0'+(q+6)+' .brand_tab li').data('pricemax')
                    i.param.sokey = $('#listItem0'+(q+6)+' .brand_tab li').data('sokey')
                    i.param.brand = $('#listItem0'+(q+6)+' .brand_tab li').data('id')
                    i.param.is_index = 1
                    i.param.is_brandorseries = 'series'
                    i.param.q = q
                    //console.log(i.param)
                    cengajax(q+6);
                }
            }

        })
    }
    var tuangoudowntime = function () {
                //---倒计时
                try{
                    var tuan1 = $('#fistTime').data('end').replace(/-/i,'/')
                    $('#fistTime').countdown(tuan1, function (event) {
                        $(this).html(event.strftime('活动结束仅剩余：<em>%D</em>天<em>%H</em>时<em>%M</em>分<em>%S</em>秒'));
                    });
                    //下期
                    var tuan2 = $('#lastTime').data('start').replace(/-/i,'/')
                    $('#lastTime').countdown(tuan2, function (event) {
                        $(this).html(event.strftime('<em>%D</em>天<em>%H</em>时<em>%M</em>分<em>%S</em>秒后活动开启'));
                    });
                }catch(e){
                    //console.log(e)
                }
    }

    var cengajax = function (n) {
        mg.ajax(ajax_url+"ajaxGetList.htm",1,'POST',i.param,'json',function (data) {
            //console.log(data)
            setFloorGoods('#listItem0'+(n),data)
            changeA()
        })
        $('#listItem0'+(n)).find('.slideBoxBdUl li').find('.d-loading').css('position', 'absolute')
    }

    var sendSMS = function () {
        $('.mysendbtn').click(function () {
            var id = $(this).data('id')
            var paddressprovince = $(this).data('paddressprovince')
            var paddresscity = $(this).data('paddresscity')
            var pshopname = $(this).data('pshopname')
            var pmapmarker = $(this).data('pmapmarker')
            var province_id = $(this).data('province_id')
            var city_id = $(this).data('city_id')
            //console.log(paddressprovince,paddresscity,pshopname,pmapmarker,province_id,city_id)
            var imginfo = "http://api.map.baidu.com/staticimage?center=" + pmapmarker + "&width=376&height=170&zoom=16&markers=" +pmapmarker
            $('.smsWinViewMap img').attr('src',imginfo)
            $('.mgsmssendbtn').data('id',id)
            $('.smssheng').text(paddressprovince)
            $('.smsshi').text(paddresscity)
            $('.smspav').text(pshopname)
            setSMSCity(province_id)
            setSMSPav(paddressprovince,paddresscity)
            shengclick()
            sendPavSMSBtn()
        })
    }
    var setSMSCity = function (pid) {
        $('.smsaddrc').remove()
        mg.ajax(ajax_url+"ajaxGetArea.htm",1,'POST',{topid:pid},'json',function (data) {
            //console.log(data)
            if(data.data.length>0){
                $.each(data.data,function(index,value) {
                    $("<li data-pid=" + value.id + "><a href='javascript:;'>" + value.name + "</a></li>").appendTo('.smspavShi').addClass('smsaddrc').on('click',setsmsPavShop)
                })
            }
        })
    }
    var setSMSPav = function (sheng,shi) {
        $('.smspavli').remove()
        mg.ajax(ajax_url+"ajaxGoodPavilion.htm",1,'POST',{province:sheng,city:shi},'json',function (data) {
            if(data.data.length>0) {
                $.each(data.data, function (index, value) {
                    $("<li data-pid=" + value.pid + "><a href='javascript:;'>" + value.pshopname + "</a></li>").appendTo('.smsmgPav').addClass('smspavli').on('click',setsmsmap).data('locmark',value.pmapmarker).data('id',value.pid)
                })
            }
        })
    }
    var shengclick = function () {
        $('.smspavSheng li').click(function () {
            var pid = $(this).data('pid')
            var name = $(this).text()
            $('.smssheng').text(name)
            $('.smsshi').text('选择市级')
            $('.smspav').text('选择体验馆')
            mg.ajax(ajax_url+"ajaxGetArea.htm",1,'POST',{topid:pid},'json',function (data) {
                if(data.data.length>0){
                    $('.smsaddrc').remove()
                    $.each(data.data,function(index,value) {
                        $("<li data-pid=" + value.id + "><a href='javascript:;'>" + value.name + "</a></li>").appendTo('.smspavShi').addClass('smsaddrc').on('click',setsmsPavShop)
                    })
                }
            })
        })
    }
    var setsmsPavShop = function () {
        var sheng = $.trim($('.smssheng').text())
        var shi   = $.trim($(this).text())
        $('.smsshi').text(shi)
        $('.smspav').text('选择体验馆')
        mg.ajax(ajax_url+"ajaxGoodPavilion.htm",1,'POST',{province:sheng,city:shi},'json',function (data) {
            //console.log(data)
            $('.smspavli').remove()
            if(data.data.length>0){
                $.each(data.data,function(index,value) {
                    $("<li data-pid=" + value.pid + "><a href='javascript:;'>" + value.pshopname + "</a></li>").appendTo('.smsmgPav').addClass('smspavli').on('click',setsmsmap).data('locmark',value.pmapmarker).data('id',value.pid)
                })
            }else{
                $('.smspav').text('此地区无体验馆')
            }
        })
    }
    var setsmsmap = function () {
        var name   = $.trim($(this).text())
        $('.smspav').text(name)
        var id = $(this).data('id')
        $('.mgsmssendbtn').data('id',id)
        var locmark = $(this).data('locmark')
        var imginfo = "http://api.map.baidu.com/staticimage?center=" + locmark + "&width=376&height=170&zoom=16&markers=" +locmark
        $('.smsWinViewMap img').attr('src',imginfo)
    }
    var sendPavSMSBtn = function () {
        $('.mgsmssendbtn').val('免费发送短信')
        $('.mgsmssendbtn').click(sendPavSMSfun)
    }

    var sendPavSMSfun = function () {
        var id = $(this).data('id')
        var capcode = $('.captits').val()
        var phone = $('.mgRegInput').val()
        if(!phone){
            mgalert.message('请输入手机号码')
            return false
        }
        if(!capcode){
            mgalert.message('请输入验证码')
            return false
        }
        $(this).css("background-color","#ccc")
        $(this).text("正在发送")
        $(this).off('click')
        mg.ajax(ajax_url+"ajaxSendPavSms.htm",1,'POST',{id:id,capcode:capcode,mobile:phone},'json',function (data) {
            //console.log(data)
            mgalert.message(data.domsg)
            if(data.msgcode == 0){
                $('.mgsmssendbtn').val('已发送短信').off('click')
            }
        })
    }

    var indexshengclick = function () {
        $('.indexpavSheng li').click(function () {
            var pid = $(this).data('pid')
            $('.indexshi').text('选择市级')
            $('.indexpav').text('选择体验馆')
            mg.ajax(ajax_url+"ajaxGetArea.htm",1,'POST',{topid:pid},'json',function (data) {
                if(data.data.length>0){
                    $('.indexaddrc').remove()
                    $.each(data.data,function(index,value) {
                        $("<li data-pid=" + value.id + "><a href='javascript:;'>" + value.name + "</a></li>").appendTo('.indexpavShi').addClass('indexaddrc').on('click',setindexPavShop)
                    })
                }
            })
        })
    }
    var setindexPavShop = function () {
        var sheng = $.trim($('.indexsheng').text())
        var shi   = $.trim($(this).text())
        if(shi == '县' || shi == '市辖区' || shi== '市辖县' ){
            $('.indexpavdqcs').text(sheng)
            $.cookie('indexpavdqcs', sheng, { expires: 30 });
        }else{
            $('.indexpavdqcs').text(shi)
            $.cookie('indexpavdqcs', shi, { expires: 30 });
        }
        $('.indexpav').text('选择体验馆')
        mg.ajax(ajax_url+"ajaxGoodPavilion.htm",1,'POST',{province:sheng,city:shi},'json',function (data) {
            //console.log(data)
            $('.indexpavli').remove()
            if(data.data.length>0){
                $.each(data.data,function(index,value) {
                    $("<li data-pid=" + value.pid + "><a href='javascript:;'>" + value.pshopname + "</a></li>").appendTo('.indexmgPav').addClass('indexpavli').on('click',setindexpav).data({
                        'pshopname':value.pshopname,
                        'pimage':value.pimage,
                        'pmobile':value.pmobile,
                        'ptimebusiness':value.ptimebusiness,
                        'pacreage':value.pacreage,
                        'paddress':value.paddress,
                        'pid':value.pid,
                        'paddressprovince':value.paddressprovince,
                        'paddresscity':value.paddresscity,
                        'pmapmarker':value.pmapmarker,
                        'province_id':value.province_id,
                        'city_id':value.city_id,
                    })
                })
            }else{
                $('.indexpav').text('此地区无体验馆')
            }
        })
    }
    var setindexpav = function () {

        $('.inshowpavname').text($(this).data('pshopname'))
        $('.inshowpavtel').text($(this).data('pmobile'))
        $('.inshowpavtime').text($(this).data('ptimebusiness'))
        $('.inshowpavarea').text($(this).data('pacreage'))
        $('.inshowpavdel').text($(this).data('paddress'))
        $('.inshowpavimg').attr('src',$(this).data('pimage'))

        $(".mysendbtn").data({
            'id':$(this).data('pid'),
            'paddressprovince':$(this).data('paddressprovince'),
            'paddresscity':$(this).data('paddresscity'),
            'pshopname':$(this).data('pshopname'),
            'pmapmarker':$(this).data('pmapmarker'),
            'province_id':$(this).data('province_id'),
            'city_id':$(this).data('city_id'),

        })
        var did = GU('deng')
        if(did){
            $('.inshowpava').attr('href',ajax_url+"pavilion.htm?deng="+did+"&id="+$(this).data('pid'))
        }else{
            $('.inshowpava').attr('href',ajax_url+"pavilion.htm?id="+$(this).data('pid'))
        }
        $.cookie('inshowpavname', $(this).data('pshopname'), { expires: 30 });
        $.cookie('inshowpavtel', $(this).data('pmobile'), { expires: 30 });
        $.cookie('inshowpavtime', $(this).data('ptimebusiness'), { expires: 30 });
        $.cookie('inshowpavarea', $(this).data('pacreage'), { expires: 30 });
        $.cookie('inshowpavdel', $(this).data('paddress'), { expires: 30 });
        $.cookie('inshowpavimg', $(this).data('pimage'), { expires: 30 });
        $.cookie('inshowpavpid', $(this).data('pid'), { expires: 30 });
        $.cookie('paddressprovince', $(this).data('paddressprovince'), { expires: 30 });
        $.cookie('paddresscity', $(this).data('paddresscity'), { expires: 30 });
        $.cookie('pmapmarker', $(this).data('pmapmarker'), { expires: 30 });
        $.cookie('province_id', $(this).data('province_id'), { expires: 30 });
        $.cookie('city_id', $(this).data('city_id'), { expires: 30 });
    }
    var setcookiespav = function () {
        if($.cookie('inshowpavname')&&$.cookie('inshowpavtel')&&$.cookie('inshowpavtime')&&$.cookie('inshowpavarea')&&$.cookie('inshowpavdel')&&$.cookie('inshowpavimg')){
            $('.indexpavdqcs').text($.cookie('indexpavdqcs'))
            $('.inshowpavname').text($.cookie('inshowpavname'))
            $('.inshowpavtel').text($.cookie('inshowpavtel'))
            $('.inshowpavtime').text($.cookie('inshowpavtime'))
            $('.inshowpavarea').text($.cookie('inshowpavarea'))
            $('.inshowpavdel').text($.cookie('inshowpavdel'))
            $('.inshowpavimg').attr('src',$.cookie('inshowpavimg'))
            $(".mysendbtn").data({
                'id':$.cookie('pid'),
                'paddressprovince':$.cookie('paddressprovince'),
                'paddresscity':$.cookie('paddresscity'),
                'pshopname':$.cookie('inshowpavname'),
                'pmapmarker':$.cookie('pmapmarker'),
                'province_id':$.cookie('province_id'),
                'city_id':$.cookie('city_id'),

            })

            var did = GU('deng')
            if(did){
                $('.inshowpava').attr('href',ajax_url+"pavilion.htm?deng="+did+"&id="+$.cookie('inshowpavpid'))
            }else{
                $('.inshowpava').attr('href',ajax_url+"pavilion.htm?id="+$.cookie('inshowpavpid'))
            }
        }
        $('.indexpavbox .main,.indexpavbox .localTop').show()
    }

    var checkphone = function(){

        $('.mgRegInput').keyup(function(){
            i.phone=$(".mgRegInput").val();
            if (i.phone.match(/^(((1[0-9][0-9]))+\d{8})$/)) {
                $('.captits').attr('placeholder','请稍等')
                mg.ajax(ajax_url+"cap.htm",1,'GET',{mobile:i.phone,type:2},'text',function (data) {
                    $('.captits').attr('placeholder','请输入验证码')
                    if(data.indexOf('msgcode')>0){
                        var data1 = $.parseJSON(data)
                        if(data1.msgcode == 1){
                            mgalert.message(data1.domsg)
                        }
                    }else{
                        $('.mgCode').attr('src',data)
                        $('.mgCapbox').show()
                    }

                })

            }else{
                $('.mgCapbox').hide()
            }

        })
    }
    var refreshCap = function(){
        $('.mgCapRef,.mgCode').click(function(){
            $('.captits').attr('placeholder','请稍等')
            mg.ajax(ajax_url+"cap.htm",1,'GET',{mobile:i.phone,type:2},'text',function (data) {
                $('.captits').attr('placeholder','请输入验证码')
                if(data.indexOf('msgcode')>0){
                    var data1 = $.parseJSON(data)
                    if(data1.msgcode == 1){
                        mgalert.message(data1.domsg)
                    }
                }else{
                    $('.mgCode').attr('src',data)
                    $('.mgCapbox').show()
                }
            })
        })
    }


    i.ini=function(){
        setcookiespav()
        qianJS()
        brandRefresh1()
        brandRefresh2()
        indexshengclick()
        doscroll()
        errorImg()
        floorBrandGoods()
        cengChange()
        sendSMS()
        checkphone()
        refreshCap()
        floorNextBtn()
        tuangoudowntime()
    }
    return i;
}
$(function(){
    home.ini();
})