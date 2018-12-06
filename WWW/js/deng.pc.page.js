var pcpage = new function(){
    var i = {}
    i.one = function (which,CurrentPage,PageCount,PageSize,before,next,clcikfuntion) {
        //console.log(CurrentPage)
        var dom = $(which)
        var up = $('<a href="javascript:;">上一页</a>')
        var down = $('<a href="javascript:;">下一页</a>')
        var pagestat = 0
        var pageend = 0
        var halfpage=Math.ceil(PageSize/2);
        dom.find('a').remove()
        up.appendTo(which).bind("click",{page:before},clcikfuntion);
        if(PageCount<=PageSize){
            pagestat=0;pageend=PageCount;
        }else if(CurrentPage>PageCount-halfpage){
            pagestat=PageCount-PageSize;
            pageend=parseInt(pagestat)+parseInt(PageSize);
        }
        else if(CurrentPage<=halfpage){
            pagestat=0;pageend=PageSize;
        }else{
            pagestat=CurrentPage-halfpage;
            pageend=parseInt(PageSize)+parseInt(pagestat);
        }
        for(var i=pagestat;i<pageend;i++){
            var t = $('<a href="javascript:;">'+(i+1)+'</a>').appendTo(which)
            if(i+1 == CurrentPage){
                t.addClass('cu')
            }
            t.bind("click",{page:i+1},clcikfuntion);
        }
        down.appendTo(which).bind("click",{page:next},clcikfuntion);
    }
    i.two = function (which,CurrentPage,PageCount,PageSize,clcikfuntion,btnfunction) {
        //console.log(CurrentPage)
        var dom = $(which)
        var up = $('<li class=""><a href="javascript:void(0);">&lt;&lt;上一页</a></li>')
        var down = $('<li><a href="javascript:void(0)">下一页&gt;&gt;</a></li>')
        var total = $('<span>共'+PageCount+'页</span>')
        var numpage = $('<span>到第<input class="num_data mgpagedata" value="'+CurrentPage+'">页</span>')
        var btn = $('<span><button type="button" class="num_but">确定</button></span>')
        var pagestat = 0
        var pageend = 0
        var halfpage=Math.ceil(PageSize/2);
        dom.find('li').remove()
        dom.find('span').remove()
        var prepage = parseInt(CurrentPage)-1 < 1?1:parseInt(CurrentPage)-1
        var nextpage = parseInt(CurrentPage)+1 > PageCount?PageCount:parseInt(CurrentPage)+1
        up.appendTo(which).bind("click",{page:prepage},clcikfuntion);
        if(PageCount<=PageSize){
            pagestat=0;pageend=PageCount;
        }else if(CurrentPage>PageCount-halfpage){
            pagestat=PageCount-PageSize;
            pageend=parseInt(pagestat)+parseInt(PageSize);
        }
        else if(CurrentPage<=halfpage){
            pagestat=0;pageend=PageSize;
        }else{
            pagestat=CurrentPage-halfpage;
            pageend=parseInt(PageSize)+parseInt(pagestat);
        }
        for(var i=pagestat;i<pageend;i++){
            var t = $('<li><a href="javascript:void(0)">'+(i+1)+'</a></li>').appendTo(which)
            if(i+1 == CurrentPage){
                t.find('a').addClass('current')
            }
            t.bind("click",{page:i+1},clcikfuntion);
        }
        down.appendTo(which).bind("click",{page:nextpage},clcikfuntion);
        total.appendTo(which)
        numpage.appendTo(which)
        btn.appendTo(which).bind('click',{},btnfunction)
    }
    i.three = function (which,CurrentPage,PageCount,PageSize,before,next,clcikfuntion) {
        var dom = $(which)
        var up = $('<li class="prev"><a href="javascript:;">上一页</a></li>')
        var down = $('<li class="next"><a href="javascript:;">下一页</a></li>')
        var pagestat = 0
        var pageend = 0
        var halfpage=Math.ceil(PageSize/2);
        dom.find('a').remove()
        up.appendTo(which).bind("click",{page:before},clcikfuntion);
        if(PageCount<=PageSize){
            pagestat=0;pageend=PageCount;
        }else if(CurrentPage>PageCount-halfpage){
            pagestat=PageCount-PageSize;
            pageend=parseInt(pagestat)+parseInt(PageSize);
        }
        else if(CurrentPage<=halfpage){
            pagestat=0;pageend=PageSize;
        }else{
            pagestat=CurrentPage-halfpage;
            pageend=parseInt(PageSize)+parseInt(pagestat);
        }
        for(var i=pagestat;i<pageend;i++){
            var t = $('<li><a href="javascript:;">'+(i+1)+'</a></li>').appendTo(which)
            if(i+1 == CurrentPage){
                t.addClass('cu')
            }
            t.bind("click",{page:i+1},clcikfuntion);
        }
        down.appendTo(which).bind("click",{page:next},clcikfuntion);
    }
    return i
}