var cart = new function(){

    var i={
    }
    var id="";
    var reid='';
    var gid="";
    var cartype = '';

    var qianJS = function(){
        /*$('.shop_brand_l .bank').click(function () {
         $(this).prev('i').toggleClass('sl_ic_selected');
         });*/

        $('.all_sl,.all_sl2').click(function () {
            $(this).prev('i').toggleClass('sl_ic_selected');
            setMoney()
        });
        $('.sl_ic').click(function () {
            $(this).toggleClass('sl_ic_selected');
            setMoney()
        });

        //默认取消  全选
        $('.sl_ic').removeClass('sl_ic_selected');
        //单个商品选择 goodsCheck

        $('.goodsCheck').click(function () {
            var goods = $(this).closest('.shop_brandBox').find('.goodsCheck'); //获取本店铺的所有商品
            //var goodsC = $(this).closest('.shop_brandBox').find('.goodsCheck').hasClass('sl_ic_selected'); //获取本店铺所有被选中的商品
            var Shops = $(this).closest('.shop_brandBox').find('.shopCheck'); //获取本店铺的全选按钮
            var goodsCNum = $(this).parents('.shopCard_list_con').find('.sl_ic_selected').length //获取本店铺所有被选中的商品个数

            if(goods.length == goodsCNum){
                Shops.addClass('sl_ic_selected')
                //取消全选
                //console.log($('.shopCheck').length)
                if($('.shopCheck').length == $('.shop_brandBox').not('.failShop').children('.shop_brandTop').find("i.sl_ic_selected").length){
                    $("#AllCheck,#AllCheck2").find('.sl_ic').addClass('sl_ic_selected');
                }else {
                    $("#AllCheck,#AllCheck2").find('.sl_ic').removeClass('sl_ic_selected');
                }
            }else {
                Shops.removeClass('sl_ic_selected')
                $("#AllCheck,#AllCheck2").find('.sl_ic').removeClass('sl_ic_selected');
            }
            setMoney()
        })

        //品牌(店铺)选择 shopCheck
        $('.shopCheck').click(function () {
            if($(this).hasClass('sl_ic_selected')){
                $(this).parents('.shop_brandBox').find('.sl_ic').addClass('sl_ic_selected');
                //取消全选
                if($('.shopCheck').length == $('.shop_brandBox').not('.failShop').children('.shop_brandTop').find("i.sl_ic_selected").length){
                    $("#AllCheck,#AllCheck2").find('.sl_ic').addClass('sl_ic_selected');
                }else {
                    $("#AllCheck,#AllCheck2").find('.sl_ic').removeClass('sl_ic_selected');
                }
            }else {
                $(this).parents('.shop_brandBox').find('.sl_ic').removeClass('sl_ic_selected');
                $("#AllCheck,#AllCheck2").find('.sl_ic').removeClass('sl_ic_selected');
            }
            setMoney()
        })

        //全选 #AllCheck,#AllCheck2
        $('#AllCheck,#AllCheck2').click(function () {
            if($(this).find('i').hasClass('sl_ic_selected')){
                $("#AllCheck,#AllCheck2").find('.sl_ic').addClass('sl_ic_selected');
                $('.shop_brandBox').find('.sl_ic').addClass('sl_ic_selected');
            }else {
                $("#AllCheck,#AllCheck2").find('.sl_ic').removeClass('sl_ic_selected');
                $('.shop_brandBox').find('.sl_ic').removeClass('sl_ic_selected');
            }
            setMoney()
        })
    }
    //设置各项钱数目
    var setMoney = function () {
        $('.shopScla').each(function () {
            var smallMoney = 0
            $(this).parents('.shop_brandBox').find('.oneScla').each(function () {
                var onep = $(this).parent().find('.onePrice .valPrice').text()
                var num  = $(this).parent().find('.myInputNum').val()
                $(this).text((onep*num).toFixed(2))
                smallMoney += parseFloat($(this).text())
            })
            $(this).text('￥'+smallMoney.toFixed(2))
        })

        var num = 0
        var totalMoney = 0
        $('.cartItem').each(function () {
            if($(this).find('.sl_ic').hasClass('sl_ic_selected')){
                num++
                totalMoney += parseFloat($(this).find('.oneScla').text())
            }
        })
        $('.selectNum').text(num)
        $('.mgTotalP').text("￥"+totalMoney.toFixed(2))

        id = ''
        gid = ''
        $(".cartItem").each(function(){
            if($(this).find(".goodsCheck").hasClass("sl_ic_selected")){
                id+=","+$(this).find(".delect_ic").data("cid");
                gid+=","+$(this).find(".delect_ic").data("gid");
            }
        })
        id=id.substr(1)
        gid=gid.substr(1)
        //console.log(id,gid)
    }
    //数量增
    var numAdd=function(){
        $('.mgNumAdd').click(function () {
            var cid=$(this).data("cid");
            var cmin=$(this).data("min");
            var cku=$(this).data("ku");
            var n=parseInt($(this).parent().find('.myInputNum').val())
            if(n > cku){
                mgalert.message("加入购物车数量不能大于库存数量"+cku+" 件。");
                $(this).parent().find('.myInputNum').val(n-1)
                return ;
            }
            mg.ajax(ajax_url+"ajaxUpdateCart.htm",1,'POST',{cart_id:cid,num:n,type:cartype},'json',function (data) {
                isLogin(data)
                //console.log(data)
                if(data.msgcode==0){
                    //mgalert.message("加入购车成功");
                }else{
                    mgalert.message(data.domsg);
                    //console.log(data)
                }
                setMoney()
            })
        })
    }
    //数量减
    var numReduce=function(){
        $('.mgNumReduce').click(function () {
            var cid=$(this).data("cid");
            var cmin=$(this).data("min");
            var cku=$(this).data("ku");
            var n=parseInt($(this).parent().find('.myInputNum').val())
            if(n < cmin){
                mgalert.message("不能少于最少购买数量 "+cmin+" 件。");
                $(this).parent().find('.myInputNum').val(n+1)
                return ;
            }
            mg.ajax(ajax_url+"ajaxUpdateCart.htm",1,'POST',{cart_id:cid,num:n,type:cartype},'json',function (data) {
                isLogin(data)
                //console.log(data)
                if(data.msgcode==0){
                    //mgalert.message("加入购车成功");
                }else{
                    mgalert.message(data.domsg);
                    //console.log(data)
                }
                setMoney()
            })
        })
    }
    //购物车数量编辑
    var numEdit=function () {
        $('.myInputNum').change(function () {
            var num = parseInt($(this).val())
            var ynum = $(this).data("val");
            var cid=$(this).data("cid");
            var cmin=$(this).data("min");
            var cku=$(this).data("ku");
            if(isNaN($(this).val())){
                mgalert.message("请输入正确的购物数量");
                $(this).val(ynum)
                return ;
            }
            if(num < cmin){
                mgalert.message("不能少于最少购买数量 "+cmin+" 件。");
                $(this).val(ynum)
                return ;
            }
            if(num > cku){
                mgalert.message("加入购物车数量不能大于库存数量"+cku+" 件。");
                $(this).val(ynum)
                return ;
            }
            mg.ajax(ajax_url+"ajaxUpdateCart.htm",1,'POST',{cart_id:cid,num:num,type:cartype},'json',function (data) {
                isLogin(data)
                //console.log(data)
                if(data.msgcode==0){
                    //mgalert.message("加入购车成功");
                }else{
                    mgalert.message(data.domsg);
                    //console.log(data)
                }
                setMoney()
            })
        })
    }
    //删除标志
    var delCart=function () {
        $('.mgDelete').click(function () {
            var cid=$(this).data("cid");
            var gid=$(this).data("gid");
            $('.mgSureDel').data('cid',cid)
            $('.mgSureFav').data('gid',gid)
        })
    }
    //确认删除
    var sureDel = function () {
        $('.mgSureDel').click(function () {
            var cid=$(this).data("cid");
            mg.ajax(ajax_url+"ajaxDelCart.htm",1,'POST',{cart_ids:cid,type:cartype},'json',function (data) {
                isLogin(data)
                //console.log(data)
                if(data.msgcode==0){
                    $('.close').click()
                    mgalert.message("删除成功",function () {
                        location.reload()
                    });
                }else{
                    mgalert.message(data.domsg);
                    //console.log(data)
                }
            })
        })

    }
    //选择删除
    var selectDelfun = function () {
        $('.selectDel').click(function () {
            $('.mgSureDel').data('cid',id)
            $('.mgSureDel').data('gid',gid)
        })
    }
    //撤销删除
    var reDel  = function () {
        $('.reDelfun').click(function(){
            //console.log(reid)
            mg.ajax(ajax_url+"ajaxAddCart.htm",1,'POST',{goods_ids:reid,num:1},'json',function (data) {
                isLogin(data)
                //console.log(data)
                if(data.msgcode==0){
                    //mgalert.message("删除成功");
                   location.reload()
                }else{
                    mgalert.message(data.domsg);
                    //console.log(data)
                }
            })
        })
    }

    //加入收藏
    var addFav=function () {
        $('.mgAddFav').click(function () {
            var gid=$(this).data("gid");
            mg.ajax(ajax_url+"ajaxAddFav.htm",1,'POST',{goods_ids:gid},'json',function (data) {
                //console.log(data)
                isLogin(data)
                if(data.msgcode==0){
                    mgalert.message("收藏成功");
                }else{
                    mgalert.message(data.domsg);
                    //console.log(data)
                }
            })
        })
    }
    //确认加入收藏,并删除
    var addFavSure=function () {
        $('.mgSureFav').click(function () {
            var gid=$(this).data("gid");
            mg.ajax(ajax_url+"ajaxAddFav.htm",1,'POST',{goods_ids:gid},'json',function (data) {
                //console.log(data)
                isLogin(data)
                if(data.msgcode==0){
                    mgalert.message("收藏成功",function () {
                        $('.close').click()
                    });
                }else{
                    mgalert.message(data.domsg);
                    //console.log(data)
                }
            })
            $('.mgSureDel').click()
        })
    }
    
    //去结算
    var GoCalc=function () {
        $(".calcBtn").click(function(){
            if(gid==""){
                mgalert.message("请选择商品");
            }else{
                if(cartype){
                    location.href=ajax_url+"confirm.htm?type="+cartype+"&id="+id
                }else{
                    location.href=ajax_url+"confirm.htm?id="+id
                }
            }
        })
    }

    var checklogin =function () {
        mg.ajax(ajax_url+"ajaxCartList.htm",1,'POST',{},'json',function (data) {
            //console.log(data)
            isLogin(data)
        })
    }


    i.ini=function(){
        cartype = GU('type')
        qianJS()
        checklogin()
        setMoney()
        numAdd()
        numReduce()
        numEdit()
        delCart()
        sureDel()
        selectDelfun()
        addFav()
        addFavSure()
        reDel()
        GoCalc()
    }
    return i;
}
$(function(){
    cart.ini();
})
