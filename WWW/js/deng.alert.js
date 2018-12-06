var mgalert=new function(){
    var i={};
    var mybg='width: 100%;height: 100%;background: rgba(0,0,0,.5);position: fixed;top: 0;left: 0;z-index: 9998;'
    var bg='<div class="mgalbg" style="'+mybg+'" z-index="9998" style="display: block;"></div>'
    var mesbox="width: 70%;opacity: 1;top: 30%;overflow: hidden;border-radius: 6px;position: fixed;z-index: 9999;text-align: center;background-color: #FAFAFC;";
    var mestit="padding: 0.8em 0 0.8em;font-size:14px;color: #333;"
    var mescon="padding: 0 0.2rem;font-size:14px;color: #888;word-wrap: break-word;word-break: break-all;text-align: center;"
    var btnbox="cursor:pointer;height: 0.3rem;border-top: 1px solid #D5D5D6;width: 100%;position: relative;margin: 0 auto;margin-top: 0.1rem;"
    var okbtn="cursor: pointer;color: #0BB20C;background-color: #FAFAFC;width: 100%;height: 0.3rem;line-height: 0.28rem;font-size: 0.17rem;border: 0;padding: 0;"
    var okbtn1="cursor: pointer;color: #0BB20C;background-color: #FAFAFC;width: 50%;height: 0.3rem;line-height: 0.28rem;font-size: 0.17rem;border: 0;padding: 0;"
    var canbtn="cursor: pointer;position: relative;color: #444;background-color: #FAFAFC;width: 50%;height: 0.3rem;line-height: 0.28rem;font-size: 0.17rem;border: 0;padding: 0;border-right: 1px solid #D5D5D6;"


    var fixdisplay=function(){
        $(".mesbox").width("300px");
        $(".mesbtnbox").height("30px");
        $(".mescon").css("margin-bottom","10px");
        $(".mesokbtn,.mescanbtn").css({
            "line-height": "28px",
            "font-size":"18px",
            "height":"30px"
        });
        $(".title").css("font-size","14px");
    }
    var forbidscroll=function(){
        $(document.body).css({
            "overflow-x":"hidden",
            "overflow-y":"hidden"
        });
    }
    var openscroll=function(){
        $(document.body).css({
            "overflow-x":"auto",
            "overflow-y":"auto"
        });
    }
    i.message=function(content,callback){
        if(content=="本操作需要会员权限，请登陆后再进行操作。"){
            callback=function(){
                window.location.href="./?m=&c=login&a=index"
            }
        }
        callback?{}:callback=function(){}
        var title="操作提示"
        var html='<div class="mesbox" style="'+mesbox+'">'+
            '<div style="'+mestit+'" class="title">'+title+'</div>'+
            '<div style="'+mescon+'" class="mescon">'+content+'</div>'+
            '<div style="'+btnbox+'" class="mesbtnbox">'+
            '<button class="mesokbtn" style="'+okbtn+'" style="width: 100%;">知道了</button>'+
            '</div>'+
            '</div>'
        $("body").append(html,bg);
        fixdisplay();
        var msw=$(".mesbox").width();
        var winw=$(window).width();
        var l=(winw-msw)/2;
        forbidscroll();
        $(".mesbox").css("left",l+"px")
        $(".mesokbtn").click(function(){
            $(".mesbox,.mgalbg").remove();
            callback();
            openscroll();
        })

    }
    i.confirm=function(content,callback){
        callback?{}:callback=function(){}
        var title="操作提示"
        var html='<div class="mesbox" style="'+mesbox+'">'+
            '<div style="'+mestit+'" class="title">'+title+'</div>'+
            '<div style="'+mescon+'" class="mescon">'+content+'</div>'+
            '<div style="'+btnbox+'" class="mesbtnbox">'+
            '<button class="mescanbtn" style="'+canbtn+'">取 消</button>'+
            '<button class="mesokbtn" style="'+okbtn1+'" style="width: 100%;">确 认</button>'+
            '</div>'+
            '</div>'
        $("body").append(html,bg);
        fixdisplay();
        var msw=$(".mesbox").width();
        var winw=$(window).width();
        var l=(winw-msw)/2;
        forbidscroll();
        $(".mesbox").css("left",l+"px")
        $(".mesokbtn").click(function(){
            $(".mesbox,.mgalbg").remove();
            openscroll();
            callback(1);
        })
        $(".mescanbtn").click(function(){
            $(".mesbox,.mgalbg").remove();
            openscroll();
            callback(0);
        })
    }

    return i;
}
