var nav=new function(){
    var i={};
    var brandnavflat = false
    var sortnavflat = false
    var fengnavflat = false
    var cainavflat = false
    var kongnavflat = false
    var pricenavflat = false

    //导航品牌
    var brandSreach = function () {//品牌搜索,筛选
        $(".brandName li").click(function () {
            $(this).addClass("cu").siblings().removeClass("cu");
            var name = $(this).text();
            if ($(this).hasClass("allbrandname")) {
                $(".brandimg li").show();
                return;
            }
            if (name) {
                if (name == "─")
                    name = " ";
                var brandItemShow = $(".brandimg li[data-type='" + name + "']");
                var brandItemHide = $(".brandimg li[data-type!='" + name + "']");
                brandItemShow.show();
                brandItemHide.hide();
            }
        });

        $(".brandkey").keyup(function () {
            var key = $(this).val();
            $(".brandkey").addClass("cu").siblings().removeClass("cu");
            if (key) {
                $(".brandimg li").each(function () {
                    var name = $(this).data("name")+"";
                    if (name.indexOf(key) >= 0) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            } else {
                $(".brandimg li").show();
            }
        });
    }

    var moneysubmit = function(){
        $('.navmoneybtn').click(function () {
            var monstart=$(".mmst").val();
            var monend=$(".mmed").val();
            window.location.href=ajax_url+"list.htm?price="+monstart+"-"+monend
        })
    }

    var brandimg = function () {
        $('.brandimg').each(function (index,value) {
			var tis = $(this);
            var srcdata = tis.data('src');
			tis.attr('src',IMG(srcdata,112,45));
			tis.load(function(){
				tis.css({'visibility':'visible'});
			});
            

        })
    }
    //异步加载
    var navhover = function () {
        $('.headnavbrand').hover(function () {
            if(brandnavflat) return ;
             $('.brandnavbox').html('<div style="position: relative;background-color: #fff;color: #666; font-size: 14px; width: 936px; padding: 174px 0;text-align: center;z-index: 9;">加载中...... </div>');
            mg.ajax(ajax_url+"headNavBrand.htm",1,'POST',{},'text',function (data) {
                $('.brandnavbox').html(data);
                brandSreach()
                brandimg()
                brandnavflat = true
            })
        })
        $('.headnavsort').hover(function () {
            if(sortnavflat) return ;
            $('.sortnavbox').html('<div style="position: relative;background-color: #fff;color: #666; font-size: 14px; width: 936px; padding: 174px 0;text-align: center;z-index: 9;">加载中...... </div>');
            mg.ajax(ajax_url+"headNavSort.htm",1,'POST',{},'text',function (data) {
                $('.sortnavbox').html(data);
                sortnavflat = true
            })
        })
        $('.headnavfeng').hover(function () {
            if(fengnavflat) return ;
            $('.fengnavbox').html('<div style="position: relative;background-color: #fff;color: #666; font-size: 14px; width: 936px; padding: 174px 0;text-align: center;z-index: 9;">加载中...... </div>');
            mg.ajax(ajax_url+"headNavFeng.htm",1,'POST',{},'text',function (data) {
                $('.fengnavbox').html(data);
                fengnavflat = true
            })
        })
        $('.headnavcai').hover(function () {
            if(cainavflat) return ;
            $('.cainavbox').html('<div style="position: relative;background-color: #fff;color: #666; font-size: 14px; width: 936px; padding: 174px 0;text-align: center;z-index: 9;">加载中...... </div>');
            mg.ajax(ajax_url+"headNavCai.htm",1,'POST',{},'text',function (data) {
                $('.cainavbox').html(data);
                cainavflat = true
            })
        })
        $('.headnavkong').hover(function () {
            if(kongnavflat) return ;
            $('.kongnavbox').html('<div style="position: relative;background-color: #fff;color: #666; font-size: 14px; width: 936px; padding: 174px 0;text-align: center;z-index: 9;">加载中...... </div>');
            mg.ajax(ajax_url+"headNavKong.htm",1,'POST',{},'text',function (data) {
                $('.kongnavbox').html(data);
                kongnavflat = true
            })
        })
        $('.headnavprice').hover(function () {
            if(pricenavflat) return ;
            $('.pricenavbox').html('<div style="position: relative;background-color: #fff;color: #666; font-size: 14px; width: 936px; padding: 174px 0;text-align: center;z-index: 9;">加载中...... </div>');
            mg.ajax(ajax_url+"headNavPrice.htm",1,'POST',{},'text',function (data) {
                $('.pricenavbox').html(data);
                moneysubmit()
                pricenavflat = true
            })
        })
    }



    i.ini = function(){
        brandimg()
        navhover()
    }
    return i;
}

$(function(){
    nav.ini();
})