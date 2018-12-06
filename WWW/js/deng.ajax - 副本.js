//公共变量
var ajax_domain = location.protocol+"//"+window.location.host;//域名
var ajax_url    = getAjaxUrl()

function GU(name){
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if(r!=null) return  decodeURI(r[2]);
    return null;
}

function changeA() {
    uid = $('.login_c').data('uid')
    if(!uid) uid = GU('deng')
    if(uid){
        $("a").each(function () {
            var v = $(this).attr("href");
            if (v == null || v == "" || v == "#") { return true; }
            var jscode = "javascript:";
            if (v.length > jscode.length && v.substr(0, jscode.length).toLocaleLowerCase() == jscode) { return true; }
            if (v.indexOf("#") != -1) { return true; }
            if (v.indexOf("deng=") != -1) { return true; }
            if (v.indexOf('?') == -1) {
                v += "?deng=" + uid
            } else {
                v += "&deng=" + uid
            }
            $(this).attr("href", v);
        })
    }
}

//登出
function logOut(){
    $('.mgLoginOut').click(function(){
        mg.ajax(ajax_url+"loginOut.htm",1,'POST',{},'json',function (data) {
            if(data == '1'){
                // mgalert.message('安全退出成功，正在返回首页，请稍等',function(){
                //     location.href = ajax_url
                // })
                // setTimeout(function(){location.href = ajax_url},2000)
                location.href = ajax_url
            }
        })
    })
}
logOut()

function headsearch(){//头部大搜索
    $(".header_search_but").click(function(){
        var search=$(".header_search_in").val();
		search = search.substr(0,38);
        if(search==""){
            //mgalert.message("请输入关键字")
			location.href = '/list.htm';
        }else{
			
            window.location.href=ajax_url+"search.htm?kword="+search;
        }
    })
    $(".header_search_in").keyup(function(e){
        if(e.keyCode== '13'){
            $(".header_search_but").click();
        }
    })
}
headsearch()




function getAjaxUrl(){
    if(window.location.host == '192.168.0.188'){
        return 'http://192.168.0.188/sm3/deng/public/'
    }else{
        return location.protocol+'//'+window.location.host+'/'
    }
}

function isLogin(data){//检测AJAX返回数据是否登录
    try{
        if(data.msgcode==8100001 || data.msgcode==2130001){
            location.href= ajax_url + "login.htm?backUrl=" + location.href;
        }else{
            ;
        }
    }
    catch(e){
        //console.log(e)
        return false;
    }
}

function IMG(img, w, h){
    if(typeof(img)=="undefined") return
    if(typeof(img)== "object" ) return
    var width, height, part, new_p, b, len,lp, ext, point_pos;
    var trim = function(str) {return str.replace(/^\s+|\s+$/gm,'');}
    width  = typeof(w)=="undefined"?'':w;
    height = typeof(h)=="undefined"?'':h;
    part	= img.split('/');
    new_p	= [];
    for(var a=0;a<part.length;a++){
        part[a] = trim(part[a]);
        if( part[a] != '' ) new_p.push( part[a] );
    }
    if( new_p.length==0 ) return img;
    lp  = new_p.pop();
    if(lp.indexOf('%40')>-1){
        return img;
    }
    if(lp.indexOf('@')>-1){
        var a_pos = lp.lastIndexOf('@');
        lp = lp.substr(0,a_pos);
        var img_pos = img.lastIndexOf('@');
        img = img.substr(0,img_pos);
    }
    point_pos = lp.lastIndexOf('.');
    if( point_pos == -1) return img;
    ext = lp.substr(point_pos);
    img = img+'%40'+width+'w_'+height+'h'+ext;
    return img;
}

function TextIMG(img,q){
    if(!img) return ;
    if(!q) q=85;

    var imgReg = /<img.*?(?:>|\/>)/gi;
    var srcReg = /src=[\'\"]?([^\'\"]*)[\'\"]?/i;
    var arr = img.match(imgReg);
    var new_src = ''

    for (var i = 0; i < arr.length; i++) {
        var src = arr[i].match(srcReg);
        if(src[1]){
            new_src = src[1];
			var reg_match_q = /@([\d]+)q\./;
			
			if( reg_match_q.test( new_src ) ){
				continue;
			}
            if(src[1].indexOf('%40')>-1){
                var a_pos = src[1].lastIndexOf('%40');
                new_src = src[1].substr(0,a_pos);
            }
            point_pos = src[1].lastIndexOf('.');
            ext = src[1].substr(point_pos);
            var new_img = new_src+"%40"+q+"q"+ext
            img=img.replace(src[1], new_img)
        }
    }
    return img
}


function IEhow(){//ie 几
    var userAgent = navigator.userAgent
    var reIE = new RegExp("MSIE (\\d+\\.\\d+);");
    reIE.test(userAgent);
    var fIEVersion = parseFloat(RegExp["$1"]);
    if(userAgent.toLowerCase().indexOf("trident") > -1 && userAgent.indexOf("rv") > -1){
        return 11
    }
    if(userAgent.toLowerCase().indexOf("edge") > -1){
        return 1111
    }
    if (isNaN(fIEVersion)){
        return 0;//不是IE
    }else{
        return (fIEVersion)//IE版本
    }
}



var mg = new function(){
    var i={};
    //正在加载效果
    var ajax_loadingnew=function(){
        $(".myLoading").show();
    }
    var ajax_colsedloadingnew=function(){
        $(".myLoading").hide();
    }
    //关闭加载
    var ajax_colsedloading=function(){
        $(".myLoading").remove();
    }
    //设置加载效果
    var setLoading=function(){
        if($(".myLoading").length<1)
            $("body").append('<div class="loading myLoading" style="z-index:9999"></div>');
    }

    i.ajax=function(url,async,type,data,dataType,callback,showload, error_callback){

        setLoading();
        if(showload!="unShowLoad"){
            ajax_loadingnew();
        }else{
            ajax_colsedloadingnew()
        }
        data._=new Date();

        var back=$.ajax({
            url:url,
            async:async,
            type:type,
            data:data,
            dataType:dataType,
            success:function(json){
                ajax_colsedloadingnew();
                callback(json);
            },
            error:function(e){
                ajax_colsedloadingnew();
                console.log("AJAX error url:"+url);
                console.log(e);
                if(typeof(error_callback)=="function"){
					error_callback(e);
				}
            },
            complete:function(){
                ajax_colsedloadingnew();
            }
        });
        return back;
    }
    return i;
}

function setCartNum() {

    if($('.memberLoginLine').text()=='请登录') return true
    mg.ajax(ajax_url+"ajaxCartNum.htm",1,'POST',{},'json',function (data1) {
        $('.cartnum').text(data1.data)
    })
}


function setTuanTeNav() {
    mg.ajax(ajax_url+"ajaxTuanTeNav.htm",1,'POST',{},'json',function (data) {
        if(data == 1){
            $('.bnavtuan').show()
        }else if(data==2){
            $('.bnavte').show()
        }else if(data==3){
            $('.bnavtuan').show()
            $('.bnavte').show()
        }
    })
}
//setTuanTeNav()
/*
 .loading{ background: url(../images/loading.gif) center center no-repeat; display: none; width: 124px; height: 64px; position: fixed; left: 50%; top: 50%; margin-left: -64px;}
* */