//收藏网站
function AddFavorite(sURL, sTitle) {
    try {
        window.external.addFavorite(sURL, sTitle);
    }
    catch (e) {
        try {
            window.sidebar.addPanel(sTitle, sURL, "");
        }
        catch (e) {
            alert("加入收藏失败，请使用Ctrl+D进行添加");
        }
    }
}

$(document).ready(function() {

$('.select').off('click');
//下拉效果
$('.select').on('click', '.dropBtn', function (e) {
	e.preventDefault();
	e.stopPropagation();
	var parent = $(this).closest('.select');
	if (!parent.hasClass('is-open')) {
		parent.addClass('is-open');
		parent.css("z-index", "2").siblings().css("z-index", "1");
		$('.select.is-open').not(parent).removeClass('is-open');
		$('.sndSms_expr_select,.local_select').each(function () {
			$(this).css({
				'position':'relative',
				'z-index':10-$(this).index()
			})
		})

	} else {
		parent.removeClass('is-open');
	}
	return false;
}).on('click', 'ul>li', function (e) {
	e.preventDefault();
	e.stopPropagation();
	var parent = $(this).closest('.select');
	parent.css("z-index", "1");
	parent.removeClass('is-open').find('.placeholder').text($(this).text()).data('state',$(this).data('state'));
	return false
});
});

$(document).on('click', function () {
    $('.select.is-open').removeClass('is-open');
});

;(function () {
    //'use strict';
    var commonMain = function () {
        $('input, textarea').placeholder();


    }
    var indexMain = function () {

        //浮动导航
        $(".oFloatList").hide();
        $(window).scroll(function () {
            if ($(window).scrollTop() > 200) {
                $(".oFloatList").fadeIn();
            } else {
                $(".oFloatList").fadeOut();
            }
        });
        $('.oFloatList li a').click(function () {
            that = $(this).attr('href');
            topHgh = $(that).offset().top;
            $('body,html').animate({
                scrollTop: topHgh
            }, 500);
            return false;
        });
        $(".topLink").click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });

        //---倒计时
        $('#fistTime').countdown('2017/07/18', function (event) {
            $(this).html(event.strftime('活动结束仅剩余：<em>%D</em>天<em>%H</em>时<em>%M</em>分<em>%S</em>秒'));
        });
        //下期
        $('#lastTime').countdown('2017/07/18', function (event) {
            $(this).html(event.strftime('<em>%D</em>天<em>%H</em>时<em>%M</em>分<em>%S</em>秒后活动开启'));
        });

        //tab
        $('.placardHead li a,.index_groupListTab-head li a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        });

        //floor
        // jQuery(".brandTab_head").slide({
        //     mainCell: ".floorNav ul",
        //     autoPage: true,
        //     effect: "left",
        //     autoPlay: false,
        //     scroll: 2,
        //     vis: 12
        // });
        $('.brandTab_head').each(function () {
            var num = $(this).find('.brand_tab').children('li').length;
            if (num < 13) {
                $(this).find('.floorNav_arrow').hide();
            } else {
                $(this).find('.floorNav_arrow').show();
            }
        });
        // jQuery(".slideBox").slide({titCell: ".floorNav ul li", mainCell: ".slideBoxBd", autoPlay: false});

        //冻结导航
        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                //$(".fixedHead").fadeIn();
                $('.showHead').addClass('fixedHead')
            } else {
               // $(".fixedHead").fadeOut();
                $('.showHead').removeClass('fixedHead')
            }
        });

    };
    var listMain = function () {
        //全部分类导航
        $('.h_s_sort').mouseenter(function () {
            $('.header_smenu').css({"position": "absolute"}).show();
        }).mouseleave(function () {
            $('.header_smenu').css({"position": "absolute"}).hide();
        });

        //-------更多品牌
        if ($(".brandList li").length <= 7) {
            $(".brandList").css("height", "auto");
            $(".brandSelect .moreBrand,.brandSelect .pickBrand").hide();
        }
        //品牌切换更多

        $(".brandSelect .moreBrand").click(function () {
          //  $(this).parent('.brandSelect').prev('.brandListBox').find()
            $(this).parent('.brandSelect').prev('.brandListBox').find(".brandList").css("height", "auto");
            $(".brandSelect .moreBrand").hide();
            $(".brandSelect .pickBrand").show();

            if($(this).parent().prev().find('.brandList').height() > 480){
                $('.s_s_m_c .brandList').css({
                    "height":"461px",
                    "overflow-y":"auto",
                    "width":"1087px"
                })
            }
            else {
                $('.s_s_m_c .brandList').css({
                    "height":"auto",
                    "overflow-y":"hidden",
                    "width":"1070px"
                })
            }

        });
        $(".brandSelect .pickBrand").click(function () {
            $(this).parent('.brandSelect').prev('.brandListBox').find(".brandList").css("height", "76px");
            $(".brandSelect .moreBrand").show();
            $(".brandSelect .pickBrand").hide();
            $(this).parent('.brandSelect').prev('.brandListBox').find(".brandList").css({
                "height":"76px",
                "overflow-y":"hidden",
                "width":"1070px"
            })
        });
        //等高
        $(".s_s_m_b").each(function () {
            var $bq_dtHeight = $(this).find('dt').height()
            var $bq_ddHeight = $(this).find('dd').height();

            if ($bq_dtHeight > $bq_ddHeight) {
                $(this).find('dd').css('height', $bq_dtHeight + 'px');
            }
            else {
                $(this).find('dt').css('height', $bq_ddHeight + 'px');
            }
        });
        //风格
        $(".search_sort_m .btn_bottom").hide();
        $('.style_list li').find('.check-ic').hide();
        if ($(".style_list li").length <= 10) {
            $(".style_list").css("height", "auto");
            $(".styleSelect .moreBrand,.styleSelect .pickBrand").hide();
        }
        $('.styleSelect .moreBrand').click(function () {
            $(".style_list").css("height", "auto");
            $(".styleSelect .moreBrand,.btn_bottom").hide();
            $(".styleSelect .pickBrand").show();
        });
        $('.styleSelect .pickBrand').click(function () {
            $(".style_list").css("height", "24px");
            $(".styleSelect .moreBrand").show();
            $(".styleSelect .pickBrand").hide();
        });
        $('.moreSelStyle').click(function () {
            $(".style_list").css({"height": "auto", "width": "1080px"});
            $('.style_list li').find('.check-ic').show();
            $('.btn_bottom').show()
            $(this).hide();
            $('.styleSelect').hide();
        });
        $('.style_list .btn-cancel').click(function () {
            $(".style_list").css({"height": "24px", "width": "946px"});
            $('.style_list li').find('.check-ic').hide();
            $('.moreSelStyle,.styleSelect').show();
            $(this).parents('.s_s_m_c').find('.style_list li').removeClass('selected')
        })

        //空间 moreSelSpace--最终
        $('.spaceList li').find('.check-ic').hide();
        if ($(".spaceList li").length <= 10) {
            $(".spaceList").css("height", "auto");
            $(".spaceSelect .moreBrand,.spaceSelect .pickBrand").hide();
        }
        $('.spaceSelect .moreBrand').click(function () {
            $(this).parents(".s_s_m_c").find('.spaceList').css("height", "auto");
            //$(".btn_bottom,.spaceSelect .moreBrand").hide();
            $(this).hide();
            $(this).parents(".s_s_m_b").find('.btn_bottom').hide()
            $(this).parents(".spaceSelect").find('.pickBrand').show()
            //$(".spaceSelect .pickBrand").show();
            var $bq_dtHeight = $(this).parents('.s_s_m_b').find('dt').height()
            var $spaceListHeight = $(this).parents('.s_s_m_b').find('.spaceList').height();
            if ($spaceListHeight > $bq_dtHeight) {
                $(this).parents('.s_s_m_b').find('dd').css('height', $spaceListHeight + 'px');
            }

        });
        $('.spaceSelect .pickBrand').click(function () {
            $(this).parents(".s_s_m_c").find(".spaceList").css("height", "24px");
            //$(".spaceSelect .moreBrand").show();
            $(this).parents(".spaceSelect").find('.moreBrand').show()
            $(this).hide();

            var $bq_dtHeight = $(this).parents('.s_s_m_b').find('dt').height()
            var $spaceListHeight = $(this).parents('.s_s_m_b').find('.spaceList').height();
            
            if ($spaceListHeight <= $bq_dtHeight) {
                $(this).parents('.s_s_m_b').find('dd').css('height', $bq_dtHeight + 'px');
            }
        });
        $('.moreSelSpace').click(function () {
            $(this).parents(".s_s_m_c").find(".spaceList").css({"height": "auto", "width": "1080px"});
            $(this).parents(".s_s_m_c").find('li').find('.check-ic').show();
            $(this).parents(".s_s_m_c").find('.btn_bottom').show()
            $(this).hide();
            $(this).parents(".s_s_m_c").find('.spaceSelect').hide();

            var $bq_dtHeight = $(this).parents('.s_s_m_b').find('dt').height()
            var $spaceListHeight = $(this).parents('.s_s_m_b').find('.spaceList').height();
            if ($spaceListHeight > $bq_dtHeight) {
                $(this).parents('.s_s_m_b').find('dd').css('height', $spaceListHeight + 'px');
            }else {
                $(this).parents('.s_s_m_b').find('dd').css('height', $bq_dtHeight + 'px');
            }
        });
        $('.spaceList .btn-cancel').click(function () {
            $(this).parents(".spaceList").css({"height": "24px", "width": "946px"});
            $(this).parents(".spaceList").find('.check-ic').hide();
            $(this).parents('.s_s_m_c').find('.moreSelSpace,.spaceSelect').show();
            $(this).parents('.s_s_m_c').find('.moreBrand').show();
            $(this).parents('.s_s_m_c').find('.pickBrand').hide();
            $(this).parents('.s_s_m_c').find('.spaceList li').removeClass('selected');

            var $bq_dtHeight = $(this).parents('.s_s_m_b').find('dt').height()
            var $spaceListHeight = $(this).parents('.s_s_m_b').find('.spaceList').height();
            
            if ($spaceListHeight <= $bq_dtHeight) {
                $(this).parents('.s_s_m_b').find('dd').css('height', $bq_dtHeight + 'px');
            }
        })

        //清空筛选条件
        $('#a_clear_all').click(function () {
            $('.crumbs ul li').not(':first,.search_s').remove();
        })
        //价格激活
        $('.pay_min,.pay_max').keyup(function () {
            if($('.pay_min').val() != '' && $('.pay_max').val() != ''){
                $('.pay_default').addClass('pay_ok').removeClass('pay_default');
            }else{
                $('.pay_ok').addClass('pay_default').removeClass('pay_ok');
            }
        })


        //----
        $(".search_sort_m  dl:last").addClass("no_btLine")
        $(".dropListView").each(function () {
            $(this).css({
                "position": "relative",
                "z-index": 100 - $(this).index()
            });
        });
        //控制类别等两边高度一致
        $(".s_s_m_b").each(function () {
            var $bq_dtHeight = $(this).find('dt').height();
            var $bq_ddHeight = $(this).find('dd').height();

            if ($bq_dtHeight > $bq_ddHeight) {
                $bq_ddHeight = $bq_dtHeight + 'px';
                $(this).find('dd').css('height', $bq_ddHeight);
            } else {
                $bq_dtHeight = $bq_ddHeight + 'px';
                $(this).find('dt').css('height', $bq_dtHeight);
            }
        });

        //选择框
        $('.sortSelect li,.style_list li,.spaceList li').click(function () {
            $(this).toggleClass('selected');
            if ($('.style_list li,.spaceList li').hasClass('selected')) {
                //(this).parents('.s_s_m_c').next('.btn_bottom').find
                $(this).parents('.s_s_m_c').find('.btn-define').removeClass('disabled')
            } else {
                $(this).parents('.s_s_m_c').find('.btn-define').addClass('disabled')
            }
        });


        //展开+收起列表 toggle-btn
        $('.toggle-btn .collapse').click(function () {
			
			$('.search_sort_m .s_s_m_b').each(function(){
				var stv = $(this).css('display');
				if( stv == 'none' ){
					$(this).addClass('this_is_no_show_tag');
				}else{
					$(this).removeClass('this_is_no_show_tag');
				}
			});
			
            $('.s_s_m_b').hide(200);
            $(this).hide()
            $(this).prev('.expand').show();
        })
        $('.toggle-btn .expand').click(function () {
            $('.s_s_m_b').show(200);
			$('.search_sort_m .this_is_no_show_tag').each(function(){
				$(this).css({'display':'none'});
			});			
            $(this).hide()
            $(this).next('.collapse').show();
        })

        //返回顶部
        $(".backTop,.freezeSortWrap").hide();
        $(window).scroll(function () {
            if ($(window).scrollTop() > 300 ) {
                $(".backTop").fadeIn();
            }else {
                $(".backTop").fadeOut();
            }
        })
        /*var firstime=0;
        $(window).scroll(function () {
          //  console.log($('.goodsListBox').offset().top - $('.sortTop').height())
            if ($(window).scrollTop() > 640 ) {
                $(".backTop").fadeIn();
                //$('.freezeSortWrap').fadeIn();

               if($('.goodsListBox >ul li').length >1){
                    $('.sortTop').addClass('fixedSortTop')
                   if(firstime++<4){
                      window.scrollTo(0,201)
                   }
                    $('.fixedSortTop .search_sort_m').hide();
               }
                $('.goodsListBox').css({
                    "padding-top":'20px'
                })

            } else {
                firstime = 0
                $(".backTop").fadeOut();
                //$('.freezeSortWrap').fadeOut();
                $('.sortTop').removeClass('fixedSortTop')
                $('.sortTop .search_sort_m').show();
                /!*$('.goodsListBox').css({
                    "padding-top":0
                })*!/
            }
        });*/
        $(".backTop").click(function () {
            $('body,html').animate({scrollTop: 0}, 500);
            return false;
        });
        //冻结,点击展开
        $('.fixedSearchSort').hide()
        $('.dropFilter').click(function () {
            $('.fixedSortTop .search_sort_m').slideDown();
            $(this).hide();
            $('.pickFilter').show();
        });
        $('.pickFilter').click(function () {
            $('.fixedSortTop .search_sort_m').slideUp();
            $(this).hide();
            $('.dropFilter').show();
        });
    };
    var detailMain = function () {
        $(".accord_icon").hover(function () {
            $(".shopTc_pop").toggle();
        })

        $('.btn_phoneDown').click(function () {
            $('.phoneDown_drop').toggle();
        });
        //图片切换
        $(".m_pic").slide({
            titCell: ".slider_list ul li",
            mainCell: ".slideBig ul",
            autoPlay: true
        });

        //tab
        $('.min_box_con').slide({
            titCell: ".detail_tab ul li",
            mainCell: ".detailBody",
            autoPlay: false
        });

        //地址
        $('.store-selector .text').click(function () {
            $(this).parent().toggleClass('hover');
        });
        $('#adClose').click(function () {
            $(this).parent('.store-selector').removeClass('hover');
        });
        //数量增减
        $(".num_add").not('.failShop .num_add').click(function () {
            var t = $(this).parent().find('.num_input input');
            t.val(parseInt(t.val()) + 1)
            if (parseInt(t.val()) > 1) {
                $(this).parent().find(".num_reduce").removeClass('num_reduce_disabled');
            }
        })
        $(".num_reduce").not('.failShop .num_add').click(function () {
            var t = $(this).parent().find('.num_input input');
            var min = $(this).data('minum')//最少购买数
            if(min && (parseInt(t.val()) - 1)<min){//不能少于最少购买数
                $(this).parent().find(".num_reduce").addClass('num_reduce_disabled');
                return false
            }
            t.val(parseInt(t.val()) - 1)
            if (parseInt(t.val()) <= 1) {
                t.val(1);
                $(this).parent().find(".num_reduce").addClass('num_reduce_disabled');
            }
        })

        //登录tab
        jQuery(".loginTab").slide({titCell: ".hd li", mainCell: ".bd ul", autoPlay: false});
        // 标题下面的说明超出宽度滚动$('.overSlide')
        if ($('.overSlide span').width() > 560) {
            $('.overSlide').find('span').wrap('<marquee onMouseOut="this.start()" onMouseOver="this.stop()"></marquee>')
        }
        $(".overSlide span").show();

    };
    var userMain = function () {
        //控制左右两边高度相等
        $('.main_menu').css("height", $('.main_r_con').height())
    }

    $(function () {
        commonMain()
        indexMain();
        listMain();
        detailMain();
        userMain();
    });

}());






























