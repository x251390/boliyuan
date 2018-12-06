var list = new function(){
    var z = {
    }
    z.param={
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
		isvideo:0,
        list_type:0,
        is_count: "",
        is_multisku:0,
        page_size:20
    }
    var firsrt_gid = []
    var firsrt_brandid = []
    var qianJS = function(){

        //价格点击
        $('.dropList li').click(function () {
            $('.trigger span').text($(this).text()).css("color","#ea5413")
        })

        //$('.listheadlink').attr('href','javascript:;')
    }

    //列表品牌
    var brandSreach = function () {//品牌搜索,筛选
        $(".brandName2 li").click(function () {
            $('.brandSelect .moreBrand').click()
            $(this).addClass("cu").siblings().removeClass("cu");
            var name = $(this).text();
            if ($(this).hasClass("allbrandname2")) {
                $(".brandimg2 li").show();
                $(this).find(".brandList").css("height", "461px");
                return;
            }
            if (name) {
                if (name == "─")
                    name = " ";
                var brandItemShow = $(".brandimg2 li[data-type='" + name + "']");
                var brandItemHide = $(".brandimg2 li[data-type!='" + name + "']");
                brandItemShow.show();
                brandItemHide.hide();
            }
        });

        $(".brandkey2").keyup(function () {
            var key = $(this).val();
            $(".brandkey2").addClass("cu").siblings().removeClass("cu");
            if (key) {
                $(".brandimg2 li").each(function () {
                    var name = $(this).data("name")+"";
                    if (name.indexOf(key) >= 0) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            } else {
                $(".brandimg2 li").show();
            }
        });
    }

    //列表商品
    var goodSkuHovaer = function(){
        var index = $(this).data('index')
        var select = $(this).parents('.listitem')
        select.find('.g-priceLeft').hide()
        select.find('.g-priceLeft').eq(index).show();
		select.find('.amotctrls_c').hide();
		 select.find('.amotctrls_c').eq(index).show();
        select.find('.listBus').hide()
        select.find('.listBus').eq(index).show()
        select.find('.listNSku').hide()
        select.find('.listNSku').eq(index).show()
        select.find('.atvpan').hide()
        if(select.find('.atvpan').eq(index).text()){
            select.find('.atvpan').eq(index).show()
        }
        select.find('.underbotm').hide()
        select.find('.underbotm').eq(index).show()
        if(select.find('.underbotm').eq(index).find('.atvMark').css('display')=='none'){
            select.find('.underbotm').eq(index).parents('.info').find('.g-price').css('height','29px')
        }else{
            select.find('.underbotm').eq(index).parents('.info').find('.g-price').css('height','46px')
        }
		
        select.find('.info .title .listName').hide()
        select.find('.info .title .listName').eq(index).show()		
		
    }
    var createItem = function (index,v) {
		
		if(v.length==0) return true;
		
        var t=$(".listexample").clone().appendTo(".myMainViewList").removeClass("listexample").addClass("listitem list"+v['0'].gid ).show().data("id",v.Id);
        $.each(v,function(index1,value1){
            if(index1){

            }else{
				
                firsrt_gid[index] = value1.gpid
                firsrt_brandid[index] = value1.gbrandid
                t.find('.slideBody ul').append('<li><a href="'+value1.gpid+'.htm"  target="_blank" title='+value1.gname+'><img  class="listImage" src="http://misc.dengimg.com/misc/deng/images/pub/loading.gif"></a></li>')
                t.find('.slideBody ul img').attr('src',IMG(value1.gpimage[0],282,282))
                t.find('.slideHead').append('<li class="on"  data-index="0"><a title="'+value1.gpskuvalue[0].name+'：'+value1.gpskuvalue[0].value+'"><img src="http://misc.dengimg.com/misc/deng/images/pub/loading.gif"></a></li>')
                t.find('.slideHead img').attr('src',IMG(value1.gpimage[0],42,42))

                t.find('.busbox').append('<em class="listBus">'+value1.gbusnumber+'</em>')
                t.find('.nskubox').append('<em class="listNSku">'+value1.gpskuvalue['0'].name+":"+value1.gpskuvalue['0'].value+'</em>')
                t.find('.listName').text(value1.gname).attr('title',value1.gname).attr('href',value1.gpid+".htm");
				
				var xiao_liang_str = '';
				xiao_liang_str = '<div class="amount amotctrls_c">销量：'+value1.sellcount+'</div>'
				if(typeof(value1.goods_activity_status)!="undefined" && value1.goods_activity_status=='presell_ready' )
				{
					xiao_liang_str ='<div class="g-priceRight amotctrls_c"><div class="amount">销量'+value1.sellcount+'</div><div class="ystTime">'+value1.presell.gppersellday+'</div></div>';
				}
				t.find('.g-price').append(xiao_liang_str);				
				
                if(value1.goods_activity_status =='rebate_ready'){//预告
					if( value1.is_rebate_theme ){

						t.find('.atvpanbox').append('<span class="atvTips atvpan" style="background-color:'+value1.forenotice_bg_color+'">'+value1.propaganda_text+'</span>');
						
						t.find('.g-price').append('<div class="g-priceLeft"><p class="atvPrice">一口价<span>￥<em>'+value1.gpprice+'</em></span></p><p><span class="salePrice">'+value1.forenotice_money_name+'￥'+value1.forenotice_money+'</span></p></div>').css('height','46px')
						
						$('.listbottom').clone().appendTo(t.find(".bottomlist")).removeClass("listbottom").addClass("underbotm bottomlist"+index1).show()

						t.find('.bottomlist'+index1+' .activeIco').html('<i class="atv-ic atvYg-ic"></i>');
					
					}else{
						t.find('.atvpanbox').append('<span class="atvTips atvpan" style="background-color:'+value1.forenotice_bg_color+'">'+value1.propaganda_text+'</span>')
						t.find('.g-price').append('<div class="g-priceLeft"><p><span class="salePrice">'+value1.member_moneyname+'￥'+value1.gpprice+'</span> <span class="savePrice" style="display:none;">'+value1.save_money+'</span></p><p class="atvPrice"><em class="moneyName"><img style="height: 20px;" src="'+value1.goods_activity_moneyname+'"/></em><span>￥<em class="listMoney">'+value1.forenotice_money+'</em></span></p></div>').css('height','46px')
						$('.listbottom').clone().appendTo(t.find(".bottomlist")).removeClass("listbottom").addClass("underbotm bottomlist"+index1).show()
						$.each(value1.goods_activity_img,function (index2,value2) {
							$("<img src="+value2+" />").appendTo(t.find('.bottomlist'+index1+' .activeIco'))
						})
					}
                }else if(value1.is_rebate_theme){//主题活动
                    t.find('.atvpanbox').append('<span class="atvTips atvpan" style="display:none;"></span>');

                    t.find('.g-price').append('<div class="g-priceLeft"><p><span class="salePrice">'+value1.member_moneyname+'￥'+value1.member_price+'</span> <span class="savePrice" style="display:none;">'+value1.save_money+'</span></p></div>').css('height','29px')
                    var o =$('.listbottom').clone().appendTo(t.find(".bottomlist")).removeClass("listbottom").addClass("underbotm bottomlist"+index1).show()
                    o.find('.ztmoney').text(value1.gpprice)
                    o.find('.ztmoname').text(value1.money_name)
                    o.find('.ztbuylink').attr('href',value1.gpid+'.htm')
                    t.find(".bottomlist"+index1+" .atvMark").hide()
                    t.find(".bottomlist"+index1+" .kh_actions").show()
                }else{//其他
                    t.find('.atvpanbox').append('<span class="atvTips atvpan" style="display:none;"></span>');

                    t.find('.g-price').append('<div class="g-priceLeft"><p class="atvPrice"><em class="moneyName">'+value1.money_name+'</em><span>￥<em class="listMoney">'+value1.gpprice+'</em></span></p></div>').css('height','46px')
                    $('.listbottom').clone().appendTo(t.find(".bottomlist")).removeClass("listbottom").addClass("underbotm bottomlist"+index1).show()
                    $.each(value1.goods_activity_img,function (index2,value2) {
                        $("<img src="+value2+" />").appendTo(t.find('.bottomlist'+index1+' .activeIco'))
                    })
                }

                //t.find('.amount').text('销量：'+value1.sellcount)


            }
            //t.find('.slideHead li').hover(goodSkuHovaer)


        });

    }
    var createItemSecond = function (index,v) {
        if(v.length==0) return true;
		// console.log(v)
        var view = $('.list'+v['0'].gid);
        // console.log(v['0'].gid)
        var inum = 0;
		if( view.length == 0 ){
			view = $(".listexample").clone().appendTo(".myMainViewList").removeClass("listexample").addClass("listitem list"+v['0'].gid ).show().data("id",v.Id);
		}

        $.each(v,function(index1,value1){
			
			if( index1 == 0 ){
				view.find('.slideBody ul li').eq(0).remove();
				view.find('.atvpanbox .atvTips.atvpan').eq(0).remove();
				view.find('.slideSmall .slideHead li').eq(0).remove();
				view.find('.busbox .listBus').eq(0).remove();
				view.find('.nskubox .listNSku').eq(0).remove();
				view.find('.g-price .amotctrls_c').eq(0).remove();
				view.find('.g-price .g-priceLeft').eq(0).remove();
				view.find('.bottomlist .underbotm').eq(0).remove();
				view.find('.info .title .listName').eq(0).remove();
				
				
                view.find('.slideBody ul').append('<li><a href="'+value1.gpid+'.htm"  target="_blank" title='+value1.gname+'><img  class="listImage" src="http://misc.dengimg.com/misc/deng/images/pub/loading.gif"></a></li>')
                view.find('.slideBody ul img').attr('src',IMG(value1.gpimage[0],282,282))
                view.find('.slideHead').append('<li class="on"  data-index="0"><a title="'+value1.gpskuvalue[0].name+'：'+value1.gpskuvalue[0].value+'"><img src="http://misc.dengimg.com/misc/deng/images/pub/loading.gif"></a></li>')
                view.find('.slideHead img').attr('src',IMG(value1.gpimage[0],42,42))

                view.find('.busbox').append('<em class="listBus">'+value1.gbusnumber+'</em>')
                view.find('.nskubox').append('<em class="listNSku">'+value1.gpskuvalue['0'].name+":"+value1.gpskuvalue['0'].value+'</em>')
                view.find('.listName').eq(0).text(value1.gname).attr({'title':value1.gname, 'href':value1.gpid+".htm"});
				
				var title_temp = $('<a class="listName"  target="_blank"></a>').text(value1.gname).attr({'title':value1.gname, 'href':value1.gpid+".htm"});
				view.find('.info .title').append(title_temp);				
				
				
				var xiao_liang_str = '';
				xiao_liang_str = '<div class="amount amotctrls_c">销量：'+value1.sellcount+'</div>'
				if(typeof(value1.goods_activity_status)!="undefined" && value1.goods_activity_status=='presell_ready' )
				{
					xiao_liang_str ='<div class="g-priceRight amotctrls_c"><div class="amount">销量'+value1.sellcount+'</div><div class="ystTime">'+value1.presell.gppersellday+'</div></div>';
				}
				view.find('.g-price').append(xiao_liang_str);				
				
                if(value1.goods_activity_status =='rebate_ready'){//预告
					if( value1.is_rebate_theme ){

						view.find('.atvpanbox').append('<span class="atvTips atvpan" style="background-color:'+value1.forenotice_bg_color+'">'+value1.propaganda_text+'</span>');
						
						view.find('.g-price').append('<div class="g-priceLeft"><p class="atvPrice">一口价<span>￥<em>'+value1.gpprice+'</em></span></p><p><span class="salePrice">'+value1.forenotice_money_name+'￥'+value1.forenotice_money+'</span></p></div>').css('height','46px')
						
						$('.listbottom').clone().appendTo(view.find(".bottomlist")).removeClass("listbottom").addClass("underbotm bottomlist"+index1).show()
						view.find('.bottomlist'+index1+' .activeIco').html('<i class="atv-ic atvYg-ic"></i>');
					
					}else{
						view.find('.atvpanbox').append('<span class="atvTips atvpan" style="background-color:'+value1.forenotice_bg_color+'">'+value1.propaganda_text+'</span>')
						view.find('.g-price').append('<div class="g-priceLeft"><p><span class="salePrice">'+value1.member_moneyname+'￥'+value1.gpprice+'</span> <span class="savePrice" style="display:none;">'+value1.save_money+'</span></p><p class="atvPrice"><em class="moneyName"><img style="height: 20px;" src="'+value1.goods_activity_moneyname+'"/></em><span>￥<em class="listMoney">'+value1.forenotice_money+'</em></span></p></div>').css('height','46px')
						$('.listbottom').clone().appendTo(view.find(".bottomlist")).removeClass("listbottom").addClass("underbotm bottomlist"+index1).show()
						$.each(value1.goods_activity_img,function (index2,value2) {
							$("<img src="+value2+" />").appendTo(view.find('.bottomlist'+index1+' .activeIco'))
						})
					}
                }else if(value1.is_rebate_theme){//主题活动
                    view.find('.atvpanbox').append('<span class="atvTips atvpan" style="display:none;"></span>');

                    view.find('.g-price').append('<div class="g-priceLeft"><p><span class="salePrice">'+value1.member_moneyname+'￥'+value1.member_price+'</span> <span class="savePrice" style="display:none;">'+value1.save_money+'</span></p></div>').css('height','29px')
                    var o =$('.listbottom').clone().appendTo(view.find(".bottomlist")).removeClass("listbottom").addClass("underbotm bottomlist"+index1).show()
                    o.find('.ztmoney').text(value1.gpprice)
                    o.find('.ztmoname').text(value1.money_name)
                    o.find('.ztbuylink').attr('href',value1.gpid+'.htm')
                    view.find(".bottomlist"+index1+" .atvMark").hide()
                    view.find(".bottomlist"+index1+" .kh_actions").show()
                }else{//其他
                    view.find('.atvpanbox').append('<span class="atvTips atvpan" style="display:none;"></span>');

                    view.find('.g-price').append('<div class="g-priceLeft"><p class="atvPrice"><em class="moneyName">'+value1.money_name+'</em><span>￥<em class="listMoney">'+value1.gpprice+'</em></span></p></div>').css('height','46px')
                    $('.listbottom').clone().appendTo(view.find(".bottomlist")).removeClass("listbottom").addClass("underbotm bottomlist"+index1).show()
                    $.each(value1.goods_activity_img,function (index2,value2) {
                        $("<img src="+value2+" />").appendTo(view.find('.bottomlist'+index1+' .activeIco'))
                    })
                }
			}else{
            //if(value1.gpid != firsrt_gid[index] && value1.gbrandid == firsrt_brandid[index]){
                inum++;
                view.find('.slideBody ul').append('<li><a href="'+value1.gpid+'.htm"  target="_blank" title='+value1.gname+'><img src="http://misc.dengimg.com/misc/deng/images/pub/loading.gif"></a></li>')
                view.find('.slideBody ul img').eq(inum).attr('src',IMG(value1.gpimage[0],282,282))
                view.find('.slideHead').append('<li data-index='+inum+'><a title="'+value1.gpskuvalue[0].name+'：'+value1.gpskuvalue[0].value+'"><img src="http://misc.dengimg.com/misc/deng/images/pub/loading.gif"></a></li>')
                view.find('.slideHead img').eq(inum).attr('src',IMG(value1.gpimage[0],42,42))

                view.find('.busbox').append('<em class="listBus" style="display:none;">'+value1.gbusnumber+'</em>')
                view.find('.nskubox').append('<em class="listNSku" style="display:none;">'+value1.gpskuvalue['0'].name+":"+value1.gpskuvalue['0'].value+'</em>')
				

				var title_temp = $('<a class="listName" style="display:none" target="_blank"></a>').text(value1.gname).attr({'title':value1.gname, 'href':value1.gpid+".htm"});
				view.find('.info .title').append(title_temp);
				
				
				var xiao_liang_str = '';
				xiao_liang_str = '<div class="amount amotctrls_c" style="display: none">销量：'+value1.sellcount+'</div>'
				if(typeof(value1.goods_activity_status)!="undefined" && value1.goods_activity_status=='presell_ready' )
				{
					xiao_liang_str ='<div class="g-priceRight amotctrls_c" style="display: none"><div class="amount">销量'+value1.sellcount+'</div><div class="ystTime">'+value1.presell.gppersellday+'</div></div>';
				}
				view.find('.g-price').append(xiao_liang_str);					
				
                if(value1.goods_activity_status =='rebate_ready'){//预告
					
					if( value1.is_rebate_theme ){
				
						view.find('.atvpanbox').append('<span class="atvTips atvpan" style="display:none;background-color: '+value1.forenotice_bg_color+'" >'+value1.propaganda_text+'</span>')
						
						view.find('.g-price').append('<div class="g-priceLeft" style="display: none"><p class="atvPrice">一口价<span>￥<em>'+value1.gpprice+'</em></span></p><p><span class="salePrice">'+value1.forenotice_money_name+'￥'+value1.forenotice_money+'</span></p></div>');
						
						$('.listbottom').clone().appendTo(view.find(".bottomlist")).removeClass("listbottom").addClass("underbotm bottomlist"+inum)
						
						view.find('.bottomlist'+inum+' .activeIco').html('<i class="atv-ic atvYg-ic"></i>');
					
					}else{
						
						view.find('.atvpanbox').append('<span class="atvTips atvpan" style="display:none;background-color: '+value1.forenotice_bg_color+'" >'+value1.propaganda_text+'</span>')
						view.find('.g-price').append('<div class="g-priceLeft" style="display: none"><p><span class="salePrice">'+value1.member_moneyname+'￥'+value1.gpprice+'</span> <span class="savePrice" style="display:none;">'+value1.save_money+'</span></p><p class="atvPrice"><em class="moneyName"><img style="height: 20px;" src="'+value1.goods_activity_moneyname+'"/></em><span>￥<em class="listMoney">'+value1.forenotice_money+'</em></span></p></div>')
						$('.listbottom').clone().appendTo(view.find(".bottomlist")).removeClass("listbottom").addClass("underbotm bottomlist"+inum)
						$.each(value1.goods_activity_img,function (index2,value2) {
							$("<img src="+value2+" />").appendTo(view.find('.bottomlist'+inum+' .activeIco'))
						});
						
					}
                }else if(value1.is_rebate_theme){//主题活动
                    view.find('.atvpanbox').append('<span class="atvTips atvpan" style="display:none;"></span>')
                    view.find('.g-price').append('<div class="g-priceLeft" style="display: none"><p><span class="salePrice">'+value1.member_moneyname+'￥'+value1.member_price+'</span> <span class="savePrice" style="display:none;">'+value1.save_money+'</span></p></div>')
                    var o = $('.listbottom').clone().appendTo(view.find(".bottomlist")).removeClass("listbottom").addClass("underbotm bottomlist"+inum)
                    o.find('.ztmoney').text(value1.gpprice)
                    o.find('.ztmoname').text(value1.money_name)
                    o.find('.ztbuylink').attr('href',value1.gpid+'.htm')
                    view.find(".bottomlist"+inum+" .atvMark").hide()
                    view.find(".bottomlist"+inum+" .kh_actions").show()
                }else{//其他
                    view.find('.atvpanbox').append('<span class="atvTips atvpan" style="display:none;"></span>')
                    view.find('.g-price').append('<div class="g-priceLeft" style="display: none"><p class="atvPrice"><em class="moneyName">'+value1.money_name+'</em><span>￥<em class="listMoney">'+value1.gpprice+'</em></span></p></div>')
                    $('.listbottom').clone().appendTo(view.find(".bottomlist")).removeClass("listbottom").addClass("underbotm bottomlist"+inum)
                    $.each(value1.goods_activity_img,function (index2,value2) {
                        $("<img src="+value2+" />").appendTo(view.find('.bottomlist'+inum+' .activeIco'))
                    })
                }

            }

        });
        view.find('.slideHead li').hover(goodSkuHovaer);
		
		
     }
    var clearItem = function () {
        $('.listitem').remove()
    }
    var load_model = new function() {
        var me = new Object();
       me.is_data = false;
       me.is_page = false;
       me.data = null;
        me.is_view = function () {
            return me.is_data && me.is_page;
        };
        return me;
    };
    var viewList = function () {
        if(!load_model.is_view()){return;}
        var data = load_model.data;
        //console.log(data);
        clearItem();
        $(".waitMsgTips").hide();
        if(data.data.length>0){
            z.page=data.Page;
            $(".noMsgTips").hide()
			$('.myMainViewList .waitMsgTips').hide();
            $.each(data.data,createItemSecond)
            changeA()
            $(".g-slide").slide({
                titCell: ".slideHead li",
                mainCell: ".slideBody ul",
                autoPlay: false
            });
			
        }else{
            $(".noMsgTips").show()
            $('.listpage').hide()
        }
        pcpage.two('.listpage',data.page.current,data.page.total_pages,10,function (p) {
            // getInfo(p.data.page)
            url_go(p.data.page)
        },function () {
            // getInfo($('.mgpagedata').val())
            url_go($('.mgpagedata').val())
        })
        if(z.param.page <= 1){
            $('.sortSlide .prev').addClass('default')
        }else{
            $('.sortSlide .prev').removeClass('default')
        }
        if(z.param.page >= data.page.total_pages){
            $('.sortSlide .next').addClass('default')
        }else{
            $('.sortSlide .next').removeClass('default')
        }
        $('.totalPage em').text(data.page.total_items);
        $('.mgnowpage').text(data.page.current);
        $('.mgtotalpage').text(data.page.total_pages);
    };
	
	//页内
    var inpage_viewList = function () {

		var cur_page = typeof(glo_list_curpage['current'])!="undefined"?parseInt(glo_list_curpage['current']):1;
		var total_pages = typeof(glo_list_curpage['total_pages'])!="undefined"?parseInt(glo_list_curpage['total_pages']):1;
		var total_items = typeof(glo_list_curpage['total_items'])!="undefined"?parseInt(glo_list_curpage['total_items']):0;
		changeA()
		$(".g-slide").slide({
			titCell: ".slideHead li",
			mainCell: ".slideBody ul",
			autoPlay: false
		});
			
        
        pcpage.two('.listpage', cur_page, total_pages,10,function (p) {
            url_go(p.data.page)
        },function () {
            url_go($('.mgpagedata').val())
        })
        if( cur_page <= 1){
            $('.sortSlide .prev').addClass('default')
        }else{
            $('.sortSlide .prev').removeClass('default')
        }
        if(cur_page >= total_pages){
            $('.sortSlide .next').addClass('default')
        }else{
            $('.sortSlide .next').removeClass('default')
        }
        $('.totalPage em').text( total_items );
        $('.mgnowpage').text( cur_page );
        $('.mgtotalpage').text( total_pages );
		
		
		$('.listitem').each(function(){
			$(this).find('.slideHead li').hover(goodSkuHovaer);
		});
		
    };
	
	
    z.pageView = function () {//页面显示方法
        load_model.is_page = true;
        viewList();
    };
    z.IniInfo = function () {
            z.param.sokey=GU('kword');
            loadfirstSelect()
    };
    var getInfo = function(page){//获取接口信息
        page=page?page:1;
        if(page < 1) page=1
        //clearItem();
        $(".noMsgTips").hide();
        z.param.page=page;
        z.param.model=z.param.model?z.param.model:"hot"
        z.param.is_multisku = 1
        //console.log(z.param)
        $(".waitMsgTips").show();
        if(IEhow()>0){
            _async = 1
        }else{
            _async = 0
        }
		/** 
		 * 修改前
        mg.ajax(ajax_url+"ajaxGetList.htm",1,'POST',z.param,'json',function (data) {
			$('.myMainViewList .waitMsgTips').hide();
            load_model.is_data=true;
            load_model.data = data;
            viewList();
        });*/
		$('.myMainViewList .waitMsgTips').hide();
		load_model.is_data=true;
		inpage_viewList();
		//修改后
		
    };
	
    var doSecond = function () {
        z.param.is_multisku = 1
        mg.ajax(ajax_url+"ajaxGetList.htm",1,'POST',z.param,'json',function (data) {
			$('.myMainViewList .waitMsgTips').hide();
            $.each(data.data,createItemSecond)
            changeA()
            $(".g-slide").slide({
                titCell: ".slideHead li",
                mainCell: ".slideBody ul",
                autoPlay: false
            });
        });
    };

	z.url_gox =function(page){
		
		url_go(page);
	};
	
    //选择框
    var setSelectItem=function(){
        $(".selector_item [data-state],.moneyBtn").click(function () {
            var sta=$(this).data("state");
            var usort = GU('sort')

            if($(this).find('.check-ic').css('display') == 'inline-block')   return false
            //if($(this).data("state")=='sort') return true
            if($(this).hasClass("moneyBtn")){

                var satrtPrice = $(".myPeiceStart").val();
                var endPrice = $(".myPriceEnd").val();
                if ( satrtPrice * 1 < 0 || isNaN(satrtPrice)) {
                    mgalert.message("请输入正确的起始金额！");
                    return;
                } else if (!endPrice || endPrice * 1 < 0 || isNaN(endPrice)) {
                    mgalert.message("请输入正确的结束金额！");
                    return;
                } else if (satrtPrice * 1 > endPrice && endPrice!=0) {
                    mgalert.message("开始金额不能大于结束金额！");
                    return;
                }
                var sClass="价格";
                var sItext=satrtPrice+"-"+endPrice;

                var sta="price";
                var sid=sItext;
                //$(this).parents(".selector_item").slideUp();
                z.param.pricemax = endPrice
                z.param.pricemin = satrtPrice
            }else{
                var sta=$(this).data("state");
                var sid=$(this).data("id");
                //$(this).parents(".selector_item").slideUp();
                var sClass=$(this).parents("ul").data("name");
                var sItext=$.trim($(this).text());
                if(sClass=='品牌'){
                    sItext = sItext.split(' ')['0']
                }
            }
            switch(sta){
                case 'sort':z.param.sort = sid;break;
                case 'brand':z.param.brand = sid;break;
                case 'prop':setprop(sid) ;break;
                case 'price':setprice(sid);break;
            }
            // var dItem=$(".dayuItemexample").clone().appendTo(".crumbs_barBox").removeClass("dayuItemexample").addClass("mySearchItem").show();
            // var sItem=$(".mySearchItemexample").clone().appendTo(".crumbs_barBox").removeClass("mySearchItemexample").addClass("mySearchItem").show();
            // sItem.data("state",sta);
            // sItem.data("val",sid);
            // sItem.find(".icokey").text(sClass);
            // sItem.find(".iconame").text(sItext);
            // sItem.find(".myDel").on("click",SelectDel);
			setTimeout(function(){
				$('.myMainViewList li.listitem').hide();
				$('.myMainViewList .waitMsgTips').show();
			}, 500);
            url_go(1);
        })
    }
    
	var url_go = function (page) {
        var lo_param = ''
        z.param.page = page
        for(var i in z.param){
            if(i!='is_multisku'&& i!='page_size'&& z.param[i]!=''&& z.param[i]!=null && i!='_'){
                if(i=='sokey'){
                    lo_param +="&kword="+z.param[i]
                }else{
                    lo_param +="&"+i+'='+z.param[i]
                }
            }
        }
        //console.log(lo_param.substr(1))
        var did = GU('deng')
        if(did){
            lo_param += "&deng=" +did
        }
        location.href = 'list.htm?'+lo_param.substr(1)
    }
	
    var setprop = function (sid) {
        if(z.param.prop!=""){
            z.param.prop+=","+sid
        }else{
            z.param.prop = sid
        }
    }
	
    var setprice = function (sid){
        //console.log(sid)
        var m=sid.split("-")
        z.param.pricemin=m['0']
        z.param.pricemax=m['1']
    }
	
    var allClearSeclect=function(){
        $(".myClearSeclect").click(function(){
            //$('.selector_item').show()
            var did = GU('deng')
            if(did){
                location.href = ajax_url+"list.htm?deng="+did
            }else{
                location.href = ajax_url+"list.htm"
            }
        })
    }
    var SelectDel = function () {
        var sta=$(this).parents(".mySearchItem").data("state");
        var sid=$(this).parents(".mySearchItem").data("val");
        $(".selector li").each(function(){
            var lista=$(this).data("state");
            var liid=$(this).data("id");
            if(lista==sta && liid==sid){
                // $(this).parents(".selector_item").slideDown();
            }
            if(sta =='sokey'){
                z.param.sokey = ''
            }
            if(sta =='price'){
                // $(this).parents(".selector_item").slideDown();
                z.param.pricemax = ''
                z.param.pricemin = ''
            }
            if(sta == 'sort'){
              //  location.reload()
                z.param.sort = ''
                var selectnum = $('.crumbs_barBox li').length
                if(selectnum <= 3){
                    location.href = ajax_url+'list.htm'
                }
            }
            if(sta == 'brand'){
                z.param.brand = ''
            }
            if(sta == 'prop'){
                var ipp = z.param.prop;
                var ipparr = ipp.replace(sid,"").split(',');
                for(var i = 0 ;i<ipparr.length;i++)
                {
                    if(ipparr[i] == "" || typeof(ipparr[i]) == "undefined")
                    {
                        ipparr.splice(i,1);
                        i= i-1;
                    }
                }
                z.param.prop = ipparr.join(',')
            }
            if(sta == 'index'){
                z.param.space = ""
                z.param.style = ""
                z.param.pricemin = ""
                z.param.pricemax = ""
                z.param.sokey = ""
                z.param.prop = ""
                z.param.sort = ""
                z.param.model = ""
            }
        })
        $(this).parents(".mySearchItem").prev().remove();
        $(this).parents(".mySearchItem").remove();
        url_go(1)
    }
    var duobtn = function () {
        $('.duoSelect').click(function(){
            var which = $(this).data('wh')
            var selectArr = []
            var nameArr = []
            $('.duofengge li').each(function(){
                if($(this).hasClass('selected')){
                    selectArr.push($(this).data("id"))
                    nameArr.push($.trim($(this).text()))
                }
            })
            // var dItem=$(".dayuItemexample").clone().appendTo(".crumbs_barBox").removeClass("dayuItemexample").addClass("mySearchItem").show();
            // var mItem=$(".duoItemexample").clone().appendTo(".crumbs_barBox").removeClass("duoItemexample").addClass("mySearchItem").show();
            // mItem.find('.icokey').text(which);
            // $.each(nameArr,function (index,value) {
            //     mItem.find('.dropSelectCon').append('<a href="javascript:void(0);">'+value+'</a>')
            // })
            // $(this).parents(".selector_item").slideUp()
            // mItem.find(".d-close").data('wh',which).on("click",SelectMoreDel).data('selectId',selectArr.join(','))
            $('.btn-cancel').click()
            setprop(selectArr.join(','))
            // getInfo(1)
            url_go(1)
        })
    }
    var SelectMoreDel = function(){
        var which = $(this).data('wh')
        var sid   = $(this).data('selectId')
        $(".selector_item").each(function(){
            var wh = $(this).data('wh')
            if(wh == which){
                $(this).slideDown();
            }
        })

        var ipp = z.param.prop;
        var ipparr = ipp.replace(sid,"").split(',');
        for(var i = 0 ;i<ipparr.length;i++)
        {
            if(ipparr[i] == "" || typeof(ipparr[i]) == "undefined")
            {
                ipparr.splice(i,1);
                i= i-1;
            }

        }
        z.param.prop = ipparr.join(',')

        $(this).parents(".mySearchItem").prev().remove();
        $(this).parents(".mySearchItem").remove();
        getInfo(1)
    }
    
	var propCache = {
		set:function(name,value,prop){
			if( typeof( window.localStorage ) == "undefined" ) return false;
			localStorage.setItem(prop, name+'|_x_|'+value);
		},
		get:function(prop){
			if( typeof( window.localStorage ) == "undefined" ) return false;
			var retstr ='', ret_arr;
			retstr = localStorage.getItem(prop);
			retstr = retstr?retstr:'';
			ret_arr	=	retstr.split('|_x_|');
			if( ret_arr.length == 2){
				return {name:ret_arr[0], value:ret_arr[1]};
			}
			return false;
		}
	}
	
    //读取地址栏选择
    var createSelect = function () {
        var usort = GU('sort')
        var ubrand=GU("brand");
        var uprop=GU("prop");
        var uprice=GU("price");
        var ukey = GU("kword");
        var umodel = GU("model");

        var uspace = GU("space");
        var ustyle = GU("style");
        var upricemin = GU("pricemin");
        var upricemax = GU("pricemax");
        var isvideo = GU("isvideo");


        if(ukey){
            // $('.keyIco,.keyContent').show()
            addselectIco('sokey',ukey,'搜索',ukey)
            $('.keyContent').text(ukey);
			$('.header_search_in').val( ukey );
        }
        if(usort){
            var text = $("li[data-state='sort'][data-id="+usort+"] a").text();
            addselectIco('sort',usort,'类型',text)
        }
        if(ubrand){
            var text = $("li[data-state='brand'][data-id="+ubrand+"]").data('name');
            addselectIco('brand',uprop,'品牌',text)
             $(".selector_item[data-wh='品牌']").hide()
        }
        if(uprice){

            addselectIco('price',uprice,'价格',uprice)
            $(".selector_item[data-wh='价格']").hide()
        }

        if(uprop){
            if(uprop == '42_'){
                return
            }
            if(GU('indexname')){
                addselectIco('index','','筛选',GU('indexname'))
            }else{
                proparr = uprop.split('_')
                if(GU('name')&&proparr['0'] == '3'){
                    addselectIco('prop',uprop,'材质',GU('name'))
                }else{
                    if (uprop.indexOf(",") != -1){
                        var proparr = uprop.split(',');
						proparr = $.unique( proparr );
                        for(var i in proparr){
                            var text = $("li[data-state='prop'][data-id="+proparr[i]+"]").text();
                            var ico  = $("li[data-state='prop'][data-id="+proparr[i]+"]").parents('ul').data('name');
							if( text !='' && ico != ''){
								propCache.set(ico, text, proparr[i]);
							}else{
								var propccs;
								propccs = propCache.get( proparr[i] );
								if( propccs !== false){
									ico = propccs.name;
									text = propccs.value;
								}
							}
                            addselectIco('prop',proparr[i],ico,text)
                            $("li[data-state='prop'][data-id="+proparr[i]+"]").parents('.selector_item').hide()
                        }
                    }else{
                        var text = $("li[data-state='prop'][data-id="+uprop+"]").text();
                        var ico  = $("li[data-state='prop'][data-id="+uprop+"]").parents('ul').data('name');
						
						if( text !='' && ico != ''){
							propCache.set(ico, text, uprop);
						}else{
							var propccs;
							propccs = propCache.get( uprop );
							if( propccs !== false){
								ico = propccs.name;
								text = propccs.value;
							}
						}						
						
                        addselectIco('prop',uprop,ico,text)
                        $("li[data-state='prop'][data-id="+uprop+"]").parents('.selector_item').hide()
                    }

                }
            }
        }

        if(upricemin || upricemax){
            var sItext=upricemin+"-"+upricemax;
            addselectIco('price',sItext,'价格',sItext)
            $(".selector_item[data-wh='价格']").hide()
        }

        if(umodel){
            $('.mgsortList dd').removeClass('cu')
            $('.mgsortList dd[data-type='+umodel+']').addClass('cu')
        }else{
            $('.mgsortList dd[data-type=hot]').addClass('cu')
        }
		
		if( isvideo ){
			$('.fixedGoodsSort .goodsSort .sortSelect li').addClass('selected');
			z.param.isvideo = 1;
		}else{
			$('.fixedGoodsSort .goodsSort .sortSelect li').removeClass('selected');
			z.param.isvideo = 0;			
		}

    }
    var loadfirstSelect = function () {
        var usort = GU('sort')
        if(usort){
            z.param.sort = usort
        }else{
            z.param.sort = ""
        }

        var ubrand=GU("brand");
        if(ubrand){
            z.param.brand = ubrand
        }else{
            z.param.brand = ""
        }

        var uprop=GU("prop");
        if(uprop == '42_'){
            z.param.prop = ""
        }else if(uprop){
            z.param.prop = uprop
        }else{
            z.param.prop = ""
        }

        var uprice=GU("price");
        if(uprice){
            var moneyarr=uprice.split("-");
            z.param.pricemax = moneyarr['1']
            z.param.pricemin = moneyarr['0']
        }else{
            z.param.pricemax = ''
            z.param.pricemin = ''
        }

        var upricemin = GU("pricemin")
        if(upricemin){
            z.param.pricemin = upricemin
        }

        var upricemax = GU("pricemax")
        if(upricemax){
            z.param.pricemax = upricemax
        }

        var ukey = GU("kword")
        if(ukey){
            z.param.sokey = ukey
        }else{
            z.param.sokey = ""
        }

        var umodel = GU("model")
        if(umodel){
            z.param.model = umodel
        }else{
            z.param.model = ""
        }

        var uspace = GU("space")
        if(uspace){
            z.param.space = uspace
        }else{
            z.param.space = ""
        }

        var ustyle = GU("style")
        if(ustyle){
            z.param.style = ustyle
        }else{
            z.param.style = ""
        }

        var upage = GU("page")
        if(!upage){
            upage = 1;
        }
		
		var isvideo = GU("isvideo");
		if( isvideo ){
			 z.param.isvideo = 1;
		}else{
			 z.param.isvideo = 0;	
		}		
		
        getInfo(upage);


    }
    var addselectIco = function (state,val,icokey,iconame) {
        var dItem=$(".dayuItemexample").clone().appendTo(".crumbs_barBox").removeClass("dayuItemexample").addClass("mySearchItem").show();
        var sItem=$(".mySearchItemexample").clone().appendTo(".crumbs_barBox").removeClass("mySearchItemexample").addClass("mySearchItem").show();
        sItem.data("state",state);
        sItem.data("val",val);
        sItem.find(".icokey").text(icokey);
        sItem.find(".iconame").text(iconame);
        sItem.find(".myDel").on("click",SelectDel);
    }

    //翻页
    var turnPage = function(){
        $('.sortSlide .prev').click(function(){
            if(!$(this).hasClass('default')){
                // getInfo(z.param.page-1)
                url_go(z.param.page-1)
            }
        })
        $('.sortSlide .next').click(function(){
            if(!$(this).hasClass('default')){
                // getInfo(z.param.page+1)
                url_go(parseInt(z.param.page)+1)
            }
        })
    }

    //排序
    var sortingList = function () {
        $('.mgsortList dd').click(function(){
            $('.mgsortList dd').removeClass('cu')
            if(!$(this).hasClass('hasDropList')){
                $(this).addClass('cu')
                var type = $(this).data('type')
                z.param.model = type
                url_go(1)
            }
        })

        $('.mgsortList li').click(function(){
            var type = $(this).data('type');
			if( type == 'isvideo' ){
				if( $(this).hasClass('selected') ){
					z.param.isvideo = 1;
				}else{
					z.param.isvideo = 0;
				}
			}else{
				z.param.model = type;
			}
            url_go(1)
        });
		
        $('.fixedGoodsSort .goodsSort .sortSelect li').click(function(){
            var type = $(this).data('type');
			if( type == 'isvideo' ){
				if( $(this).hasClass('selected') ){
					z.param.isvideo = 1;
				}else{
					z.param.isvideo = 0;
				}
			}else{
				z.param.model = type;
			}
            url_go(1)
        });		
		
    }

	//滚动加载图片
	var bind_scroll_evt=function(){
		return false;
		$(window).bind("scroll",function() {
			var sctop 		= $(document).scrollTop();
			$('.myMainViewList .listitem').each(function(){
				var tis = $(this),lazybeenload = tis.attr('lazybeenload');
				if( lazybeenload == '1' ) return true;
				var pos = tis.position(), ptop = pos.top;
				var totalHeight = sctop + window.innerHeight;
				if( ptop <= totalHeight ){
					tis.find('img').each(function(){
						var lzloadsrc= $(this).attr('lazy-load-src');
						if( lzloadsrc=="undefined" || lzloadsrc == '' ) return true;
						$(this).attr({'src':lzloadsrc,'lazy-load-src':''});
						tis.attr({'lazybeenload':'1'});
					});
				}
			});
		});
	};
	
	//滚动加载图片
	var bind_first_initt=function(){
		var sctop 		= $(document).scrollTop();
		$('.myMainViewList .listitem').each(function(){
			var tis = $(this),lazybeenload = tis.attr('lazybeenload');
			if( lazybeenload == '1' ) return true;
			var pos = tis.position(), ptop = pos.top;
			var totalHeight = sctop + window.innerHeight;
			if( ptop <= totalHeight ){
				tis.find('img').each(function(){
					var lzloadsrc= $(this).attr('lazy-load-src');
					if( lzloadsrc=="undefined" || lzloadsrc == '' ) return true;
					$(this).attr({'src':lzloadsrc,'lazy-load-src':''});
					tis.attr({'lazybeenload':'1'});
				});
			}
		});	
	};
	
	
    z.ini = function () {
        qianJS()
        brandSreach()
        setSelectItem()
        createSelect()
        allClearSeclect()
        duobtn()
        turnPage()
        sortingList()
    }
    return z
}
$(function(){
   list.ini();
})