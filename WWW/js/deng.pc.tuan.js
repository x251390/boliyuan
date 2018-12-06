var tuan=new function(){

    var z={
    }
    z.param={
        page: 1,
        type:0,
        page_size:12
    }
    z.param1={
        page: 1,
        type:1,
        page_size:16
    }

    var qianJS = function () {

            $('.groupHead li').click(function () {
                $(this).parents('.groupWrapper').toggleClass('hover')
            })

    }

    var downTime = function () {
        var hm = $('.mgtime').data('time')
        var sen=$(".mgtime")
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
    }
    var downTimeNext = function () {
        var hm = $('.mgtimeNext').data('time')
        var sen=$(".mgtimeNext")
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
    }

    var createItem = function (index,v) {
        var t=$(".listexample").clone().appendTo(".nowlist").removeClass("listexample").addClass("listitem").show();
        t.find('.link').attr('href',v.gpid+'.htm')
        t.find('.img').attr('src',IMG(v.gpimage,336,336))
        t.find('.name').text(v.gname)
        t.find('.guige').text(v.gpskuvalue[0].name+" : "+v.gpskuvalue[0].value)
        t.find('.chengjiao').text(v.goods_activity.tbsellnumber)
        t.find('.chengtuanshu').text(v.goods_activity.tbnum)
        t.find('.price').text(v.gpprice)
        t.find('.yuanprice').text(v.member_price)
        t.find('.moneyname').text(v.member_moneyname)
        t.find('.savePrice').text(v.savemoney)
        var bfb = Math.round(v.goods_activity.tbsellnumber/v.goods_activity.tbnum*100)
        if(isNaN(bfb)){
            bfb = 0
        }
        if(bfb>100) bfb = 100
        t.find('.bai').attr('aria-valuenow',bfb).css('width',bfb+'%').text(bfb+'%')
        if(bfb == 0){
            t.find('.progress-bar').css('color','#666')
        }
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
        $(".waitMsgTips").show();
        mg.ajax(ajax_url+"ajaxGetTuanList.htm",1,'POST',z.param,'json',function (data) {
            console.log(data)
            $(".waitMsgTips").hide();
            //try{
            if(data.data.length>0){
                $(".noMsgTips").hide()
                $.each(data.data,createItem)
            }else{
                $(".noMsgTips").show()
            }
            pcpage.one('.nowpage',data.page.current,data.page.total_pages,data.page.limit,data.page.before,data.page.next,function (p) {
                getInfo(p.data.page)
            })
            // }
            // catch(e){
            //     console.log(e)
            // }

        })
    }

    var createItem1 = function (index,v) {
        var t=$(".listexamplenext").clone().appendTo(".nextlist").removeClass("listexamplenext").addClass("listitem1").show();
        t.find('.link').attr('href',v.gpid+'.htm')
        t.find('.img').attr('src',IMG(v.gpimage,336,336))
        t.find('.name').text(v.gname)
        t.find('.guige').text(v.gpskuvalue[0].name+" : "+v.gpskuvalue[0].value)
        t.find('.chengjiao').text(v.goods_activity.tbmanmadesellnumber)
        t.find('.chengtuanshu').text(v.goods_activity.tbnum)
        t.find('.price').text(v.gpprice)
        t.find('.yuanprice').text(v.member_price)
        t.find('.moneyname').text(v.member_moneyname)
        t.find('.savePrice').text(v.savemoney)
        var bfb = Math.round(v.goods_activity.tbmanmadesellnumber/v.goods_activity.tbnum*100)
        if(isNaN(bfb)){
            bfb = 0
        }
        if(bfb>100) bfb = 100
        t.find('.bai').attr('aria-valuenow',bfb).css('width',bfb+'%').text(bfb+'%')
        if(bfb == 0){
            t.find('.progress-bar').css('color','#666')
        }
    }
    var clearItem1 = function () {
        $('.listitem1').remove()
    }
    var getInfo1 = function(page){//获取接口信息
        page?{}:page=1
        if(page < 1) page=1

        clearItem1();
        z.param1.page=page;
        // console.log(z.param1)
        $(".waitMsgTips1").show();
        mg.ajax(ajax_url+"ajaxGetTuanList.htm",1,'POST',z.param1,'json',function (data) {
            // console.log(data)
            $(".waitMsgTips1").hide();
            //try{
            if(data.data.length>0){
                $(".noMsgTips1").hide()
                $.each(data.data,createItem1)
            }else{
                $(".noMsgTips1").show()
            }
            pcpage.one('.nextpage',data.page.current,data.page.total_pages,data.page.limit,data.page.before,data.page.next,function (p) {
                getInfo1(p.data.page)
            })
            // }
            // catch(e){
            //     console.log(e)
            // }

        })
    }


    z.ini=function(){
        qianJS()
        var downtimet    =setInterval(downTime,1000);
        var downtimetNext=setInterval(downTimeNext,1000);
        getInfo(1)
        getInfo1(1)
    }
    return z;
}
$(function(){
    tuan.ini();
})
