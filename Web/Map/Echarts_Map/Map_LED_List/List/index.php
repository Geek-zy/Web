<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery插件-文字滚动</title>
<script type="text/javascript" src="http://www.css88.com/tool/css3Preview/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jQuery.textSlider.js"></script>
</head>
<body style="background:#1B1B1B">

<div class="FFFF"><h1>医院名称  患者姓名  检查类型</h1></div>
<style type="text/css">
*{margin:0;padding:0;}
html,body{height:100%;width:100%;}
ul,li{margin:0;padding:0}
#scrollDiv{overflow:auto}
.scrollText{width:99%;height:600px;min-height:25px;line-height:25px; float:left;overflow:hidden;position:relative;background:#1B1B1B;}
.scrollText li{height:50px;padding-left:10px;font-size:26px;color:#323232;font-family:＇黑体＇; line-height:50px;}
.up{ margin-left:310px; width:50px; height:50px; background:#F90}
.down{ margin:0 0 0 310px; zoom:1; width:50px; height:50px; background:#960;}
.box{position:absolute;top:0;left:0;width:100%;height:50px;background:rgba(255,255,255,0.1);z-index:99;}
</style>

<div id="scrollDiv" style="background:#1B1B1B">
	<div class="scrollText">
	  <div class="box"></div>
	  <ul>
		<li>一脉阳光实时数据显示</li>
		<li>截至当前</li>
	  </ul>
	</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
	$("#scrollDiv").textSlider({line:1,speed:500,timer:2000});

});

$(document).ready(function(){
	function request(){
		$.ajax({
			type:'GET',
				url:'./data.json',
				success:function(result){
					if(result.length <= 0){
						autoPlay();
						$("#scrollDiv ul li").text("该时段无影像");
					}else{
						console.log("aaa");
						for (x in result){
							// console.log(result[x]);
							for (var i=0; i<result[x].length; i++){
								//console.log(result[x][i].PATIENT_NAME);
								$("#scrollDiv ul").append('<li>'+ result[x][i].PATIENT_NAME + '~~~ ' + result[x][i].PATIENT_ID + '~~~' +result[x][i].PATIENT_AGE1 +'</li>');
							}
						}
					}
				},
		})
	}     
	//每秒请求一次
	// setInterval(function(){
	//   request()},10000);
});
</script>
</body>
</html>
