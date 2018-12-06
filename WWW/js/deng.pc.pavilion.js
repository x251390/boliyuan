var pavilion=new function(){

    var z={
    }
    z.param={
    }

    var qianJS = function () {
        $('.consult_btn').click(function () {
            $(this).parent().next('.consult_drop').toggle()
        })

        var make = $("#oMapView").attr("data-val");
        if (make == "") { return; }
        var p = make.split(",");
        if (p.length != 2) { return; }
        var point = new BMap.Point(p[0], p[1]);
        var map = new BMap.Map("oMapView");
        map.disableScrollWheelZoom();
        map.centerAndZoom(point, 17);
        map.addOverlay(new BMap.Marker(point));

        var top_left_control = new BMap.ScaleControl({ anchor: BMAP_ANCHOR_TOP_LEFT });// 左上角，添加比例尺
        var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
        var top_right_navigation = new BMap.NavigationControl({ anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL }); //右上角，仅包含平移和缩放按钮
        map.addControl(top_left_control);
        map.addControl(top_left_navigation);
        map.addControl(top_right_navigation);

        $(".starList i").mousemove(changStart).click(changStart);

        $('#codepavilion').qrcode({
            width: 150, //宽度
            height:150, //高度
            text: 'http://m.deng.com/pavilion/'+GU('id')+'.htm' //任意内容
        });

    }

    var changStart = function () {
        $(".starList i").removeClass("star_l").addClass("star_lH");
        $(".starList i:gt(" + $(this).index() + ")").removeClass("star_lH").addClass("star_l");
        //$("input[name='evaluation']").val($(".starList i.star_lH").length)
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
    
    var addReview = function () {
        $('.mgPavReviewBtn').click(function () {

            reviewParam = {
                pavilion_id :GU('id'),
                point :$(".starList i.star_lH").length,
                content :$.trim($(".mgPavContent").val())
            }

            mg.ajax(ajax_url+"ajaxAddPavReview.htm",1,'POST',reviewParam,'json',function (data) {
                // console.log(data)
                if(data.domsg == 0){
                    mgalert.message(data.domsg);
                }else{
                    mgalert.message(data.domsg);
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

    var sendSMS = function () {
        $('.mysendbtn').click(function () {
            var id = $(this).data('id')
            var paddressprovince = $(this).data('paddressprovince')
            var paddresscity = $(this).data('paddresscity')
            var pshopname = $(this).data('pshopname')
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
        })
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

    z.ini=function(){
        qianJS()
        addCart()
        checkphone()
        refreshCap()
        addReview()
        sendSMS()
        changeA()
    }
    return z;
}
$(function(){
    pavilion.ini();
})
