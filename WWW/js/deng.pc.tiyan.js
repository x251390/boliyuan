var tiyan=new function(){

    var z={
    }
    z.phone = ''
    z.jms={
        name:'',
        phone:'',
        address:'',
        is_open_shop:'',
        shop_size:'',
        image:''
    }
    z.param = {
        page:1,
        page_size:8
    }

    var qianJS = function () {
        $('.checkbox').click(function () {
            $(this).addClass('selected').siblings().removeClass('selected');
        })
        $("input[name='imagefile']").change(function() {//表单中文件选择器发生变化，对应的input显示val值
            $(".filePath").val($(this).val());
        });
    }

    var pavShengClick = function () {
        $('.pavSheng li').click(setPavCity)
    }
    var setPavCity =function () {
        $('.mgpav').remove()
        var pid = $(this).data('pid')
        var name = $(this).text()
        $('.ShengName').text(name)
        mg.ajax(ajax_url+"ajaxGetArea.htm",1,'POST',{topid:pid},'json',function (data) {
            if(data.data.length>0){
                $('.addrc').remove()
                $.each(data.data,function(index,value) {
                    $("<li data-pid=" + value.id + "><a href='javascript:;'>" + value.name + "</a></li>").appendTo('.pavShi').addClass('addrc').on('click',setPavShop)
                })
            }
        })
    }
    var setPavShop = function () {
        $('.mgpav').remove()
        var sheng = $.trim($('.ShengName').text())
        var shi   = $.trim($(this).text())
        $('.ShiName').text(shi)
        // console.log(sheng,shi)
        mg.ajax(ajax_url+"ajaxGoodPavilion.htm",1,'POST',{province:sheng,city:shi},'json',function (data) {
            // console.log(data)
            if(data.data.length>0){
                $('.mgpav').remove()
                $.each(data.data,function(index,value) {
                    $("<li data-pid=" + value.pid + "><a href='javascript:;'>" + value.pshopname + "</a></li>").appendTo('.mgPav').addClass('mgpav').on('click',goPavShop)
                })
            }
        })
    }
    var goPavShop = function () {
        var pid = $(this).data('pid')
        location.href = ajax_url+'pavilion.htm?id='+pid
    }

    var createItem = function (index,value) {
        var t=$(".pavExample").clone().appendTo(".mainPav").removeClass("pavExample").addClass("listitem").show();
        if(value.pimage){
            t.find('.img').attr('src',value.pimage)
        }else{
            t.find('.img').attr('src','http://misc.dengimg.com/misc/deng/images/ex-pavilion/tyg_pic.jpg')
        }
        t.find('.name').text(value.pshopname)
        t.find('.time').text(value.ptimebusiness)
        t.find('.tel').text(value.pmobile)
        t.find('.addr').text(value.paddress)
        t.find('.link').attr('href',ajax_url+'pavilion.htm?id='+value.pid)
        t.find('.mgsendSMS').data({
            id:value.pid,
            paddressprovince:value.paddressprovince,
            paddresscity:value.paddresscity,
            pshopname:value.pshopname,
            pmapmarkerlat:value.pmapmarkerlat,
            pmapmarkerlon:value.pmapmarkerlon,
            pmapmarker:value.pmapmarker,
            province_id:value.province_id,
            city_id:value.city_id,
        }).click(sendSMS)
    }
    var clearItem = function () {
        $('.listitem').remove()
    }
    var getInfo = function(page){//获取接口信息
        page?{}:page=1
        if(page < 1) page=1

        clearItem();
        z.param.page=page;
        // console.log(z.param)
        $('.waitMsgTips').show()
        mg.ajax(ajax_url+"ajaxGetPavList.htm",1,'POST',z.param,'json',function (data) {
            // console.log(data)
            $('.waitMsgTips').hide()

            //try{
            if(data.data.length>0){
                $.each(data.data,createItem)
                changeA()
            }else{
                //$(".noMsgTips").show()
            }
            pcpage.one('.pavPage',data.page.current,data.page.total_pages,data.page.limit,data.page.before,data.page.next,function (p) {
                getInfo(p.data.page)
            })
            //$('.tiyanNum').text(data.page.total_items)
            // }
            // catch(e){
            //     console.log(e)
            // }

        })
    }

    var addCart = function () {
        $('.addCart').click(function () {
            var gid=$(this).data("gid");
            var cparam = {goods_json:[]}
            var add={"goods_id":gid,"num":1};
            cparam.goods_json.push(add)
            // console.log(cparam)
            mg.ajax(ajax_url+"ajaxAddCart.htm",1,'POST',cparam,'json',function (data) {
                // console.log(data)
                if(data.msgcode==0){
                    mgalert.message("加入购车成功");
                }else{
                    mgalert.message(data.domsg);
                    //console.log(data)
                }
            })
        })
    }

    var checkphone = function(){

        $('.mgRegInput').keyup(function(){
            z.phone=$(".mgRegInput").val();
            if (z.phone.match(/^(((1[0-9][0-9]))+\d{8})$/)) {
                $('.captits').attr('placeholder','请稍等')
                mg.ajax(ajax_url+"cap.htm",1,'GET',{mobile:z.phone,type:2},'text',function (data) {
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
            mg.ajax(ajax_url+"cap.htm",1,'GET',{mobile:z.phone,type:2},'text',function (data) {
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

    var applyJMS  = function () {
        $('.mgapplybtn').click(function () {
            z.jms.name          = $('.jmsname').val()
            z.jms.phone         = $('.jmstel').val()
            z.jms.address       = $('.jmsaddr').val()
            z.jms.is_open_shop  = $('.jmsdy').hasClass('selected')
            z.jms.shop_size     = $('.jmsmj').val()
			var regmobile = /^((1([\d]{10}))|(01([\d]{10})))$/;
			z.jms.phone = $.trim( z.jms.phone );
			if( !regmobile.test( z.jms.phone ) )
			{
				mgalert.message('请输入正确的手机号码');
				return false;
			}
			
            mg.ajax(ajax_url+"ajaxApplyJMS.htm",1,'post',z.jms,'json',function (data) {
                // console.log(data)
                // if(data.msgcode==0)
                mgalert.message(data.domsg)
            })
        })
    }

    var sendSMS  = function () {
            var id = $(this).data('id')
            var paddressprovince = $(this).data('paddressprovince')
            var paddresscity = $(this).data('paddresscity')
            var pshopname = $(this).data('pshopname')
            var pmapmarkerlat = $(this).data('pmapmarkerlat')
            var pmapmarkerlon = $(this).data('pmapmarkerlon')
            var pmapmarker = $(this).data('pmapmarker')
            var province_id = $(this).data('province_id')
            var city_id = $(this).data('city_id')
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
    }
    var setSMSCity = function (pid) {
        $('.smsaddrc').remove()
        mg.ajax(ajax_url+"ajaxGetArea.htm",1,'POST',{topid:pid},'json',function (data) {
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
    var setsmsPavShop =function () {
        var sheng = $.trim($('.smssheng').text())
        var shi   = $.trim($(this).text())
        $('.smsshi').text(shi)
        $('.smspav').text('选择体验馆')
        mg.ajax(ajax_url+"ajaxGoodPavilion.htm",1,'POST',{province:sheng,city:shi},'json',function (data) {
            // console.log(data)
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
        $('.mgsmssendbtn').click(function () {
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
            mg.ajax(ajax_url+"ajaxSendPavSms.htm",1,'POST',{id:id,capcode:capcode,mobile:phone},'json',function (data) {
                // console.log(data)
                mgalert.message(data.domsg)
                if(data.msgcode == 0){
                    $('.mgsmssendbtn').val('已发送短信').off('click')
                }
            })

        })
    }


    z.imgChange=function(e){
        //console.info(e.target.files[0]);//图片文件
       // console.info(dom.value);//这个是文件的路径 C:\fakepath\icon (5).png
       // console.log(e.target.value);//这个也是文件的路径和上面的dom.value是一样的
        var reader = new FileReader();
        reader.onload = (function (file) {
            return function (e) {
                z.jms.image = (this.result); //这个就是base64的数据了
            };
        })(e.target.files[0]);
        reader.readAsDataURL(e.target.files[0]);
    }

    z.ini=function(){
        qianJS()
        pavShengClick()
        getInfo(1)
        addCart()
        checkphone()
        refreshCap()
        applyJMS()
        sendPavSMSBtn()
    }
    return z;
}
$(function(){
    tiyan.ini();
})
