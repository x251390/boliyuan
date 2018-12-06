
$(function(){
	
	//添加活动弹框
	var local_num;
	//if(localStorage.getItem(local_num) == null){
	if(false){	
		$("#ensconce_top").before(
			'<div class="activity_bg">'+
				'<div class="activity_img">'+
					'<a href="/Home/ShopmallActivity/sekill.html">'+
						'<img src="/Uploads/boliyuan/huodong/2018-04-01/15225630101000.jpg">'+
					'</a>'+
					'<div class="activity_x">X</div>'+
				'</div>'+
			'</div>'
		)
		$(".activity_bg").css({"background":"rgba(101, 91, 91, 0.8)","position":"fixed","width":"100%","height":"100%","z-index":"9999","display":"bolck","text-align":"center","padding-top":"15%"})
		$(".activity_x").css({"width":"50px","height":"50px","position":"absolute","right":"0","top":"0","font-size":"38px","color":"#fff"})
		$(".activity_bg .activity_img").css({"position":"relative","margin":"auto","width":"800px","height":"450px",})
		$(".activity_bg .activity_img img").css({"width":"100%","height":"100%"})
		$('body').css('overflow','hidden');			//浮层出现时窗口不能滚动设置
		$(".activity_x, .activity_img img").click(function(){
			$(".activity_bg").remove();
			$('body').css('overflow','auto');		//浮层关闭时窗口可以滚动设置
			localStorage.setItem(local_num,1);
		})
	}
	var $tmara1_input=$('.productlist1 li.mara1 input');
	var $productlist=$('.pro_wrap .productlist1');
	var $pro_brn=$('.proright a ');
	var c_arr=[];
	$pro_brn.click(function(){
		c_arr=[];
	
			$(this).parents('ul').find('.mara1 input').each(function(){
			if(this.checked){
				c_arr.push(this.value);
				
			}
			
		})
	
if(c_arr ==''){
	
	return false
}	
	var one_id = $(this).parent().find('.one_id');
    var one_id_nub = one_id.val();
	var uir = $(this).parent().find('.uir').val();
     var uil = $(this).parent().find('.uil').val();
	 
 $.post(uil,{'two_id':c_arr,'one_id':one_id_nub},function(data){
		console.log(data);
        if(data==1){
  
   alert(' 操作成功'); 

  window.location.href =uir;


 return false;

}else if(data==2){

alert('操作失败');

return false;

  }
})	

})	
	
	
})
