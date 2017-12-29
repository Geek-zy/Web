/**
 * @author feiwen
 */
(function($){

	$.fn.textSlider = function(settings){
		settings = jQuery.extend({
			speed : "normal",
				 line : 1,
				 timer : 3000
		}, settings);
		return this.each(function() {
			$.fn.textSlider.scllor( $( this ), settings );
		});
	};
	$.fn.textSlider.scllor = function($this, settings){
		var ul = $("ul:eq(0)",$this);
		var timerID,autoPlay,autoStop,request;
		var li = ul.children();
		var liHight=$(li[0]).height();
		var upHeight=0-settings.line*liHight;//滚动的高度；
		var isStatus = false;
		var scrollUp=function(){
			ul.animate({marginTop:upHeight},settings.speed,function(){
				var ul = $("ul:eq(0)",$this);
				ul.find("li").css('color','#666');
				ul.find("li").css('background-color','#1B1B1B');
				ul.find("li:first").remove();
				request=function(){
					$.ajax({
						type:'GET',
					url:'./data.json',
					//url:'http://nfs2.jiangxi.rimag.com.cn/imageList/json',
					success:function(result){
						console.log(result.list);
						if(result.list.length <=0){
							isStatus = true;
							var time1 = setTimeout(function(){
								if(ul.find("li").length == 0){
									$("#scrollDiv ul").append("<li style='color:red;'>该时段无影像</li>");
									autoStop();
								}
								window.clearTimeout(time1);
							},2000);
							var time2 = setInterval(function(){
								request();
								clearInterval(time2);
							},3000);
						}else{
							if(isStatus == true){
								autoPlay();
							}
							for (x in result){
								for (var i=0; i<result[x].length; i++){
									console.log(result);
									$("#scrollDiv ul").append('<li>'+ "江西****医院" + " " + result[x][i].PATIENT_NAME + ' ' + result[x][i].MODALITIES + '</li>');
								}
							}
						}
					},
					});
				}
				if(ul.find("li").length ==1){
					request();
					console.log(ul.find("li").length);
				}
				ul.find("li:first",$this).css('color','red');
				ul.css({marginTop:0});
			});
		};
		autoPlay=function(){
			timerID = window.setInterval(scrollUp,settings.timer);
		};
		autoStop = function(){
			window.clearInterval(timerID);
		};
		//事件绑定
		ul.hover(autoStop,autoPlay).mouseout();
	};
})(jQuery);
