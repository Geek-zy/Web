
//坐标数据
var heatData = [];

for (var i = 0; i < 150; ++i) {

	heatData.push([

				100 + Math.random() * 20,
				24 + Math.random() * 16,
				Math.random()
				]);
}

for (var j = 0; j < 15; ++j) {

	var x = 100 + Math.random() * 16;
	var y = 24 + Math.random() * 12;
	var cnt = 30 * Math.random();

	for (var i = 0; i < cnt; ++i) {

		heatData.push([
					x + Math.random() * 2,
					y + Math.random() * 2,
					Math.random()
					]);
	}
}

//document.write(heatData);


option = {

	//标题及说明文字
	title : {

		text: '一脉阳光全国业务热力图',
		subtext: "截止到：2016-11-10 12:00:00",
		x:'center',
		textStyle:{color:'red'}

	},

	//显示弹框数据
	tooltip : {
		
		trigger: 'item',
		//formatter: '{b}'
	},

	//左上角自定义按钮
	legend: {

		orient: 'vertical',
		x:'left',
		textStyle:{color:'red'},
		data:['托管', '云服务', '远程会诊']
	},  

	//左下角数量标尺
	dataRange: {

		min : 0,
			max : 1000,
			x: 'left',
			y: 'bottom',
			text:['高','低'],
			calculable : true,
			color: ['#ff3333', 'orange', 'yellow','lime','aqua'],
			textStyle:{color:'#fff'}
	},  

	//右侧工具栏
	toolbox: {

		show: true,
		orient : 'vertical',
		x: 'right',
		y: 'center',

		feature : { 
			mark : {show: true},
				 dataView : {show: true, readOnly: false},
				 restore : {show: true},
				 saveAsImage : {show: true}
		}
	},

	//右上角方位移动按钮
	roamController: {

		show: true,
		x: 'right',
		mapTypeControl: {'china': true}
	},

	series : [
	{
		name: '远程会诊',
		type: 'map',
		mapType: 'china',
		roam: true,
		hoverable: false,	//省份高亮
		data:[],
		heatmap: {
			minAlpha: 0.1,
			data: heatData
		},
		itemStyle: {
			normal: {
					 label:{show:true}, //省名显示
					 emphasis:{label:{show:true}},
					 borderColor:'rgba(100,149,237,0.6)',
					 borderWidth:0.5,
					 areaStyle: {color: '#1b1b1b'}
			}
		}
	},

/*
	series : [
	{
		name: '托管',
		type: 'map',
		mapType: 'china',
		roam: true,
		hoverable: false,
		data:[],
		heatmap: {
			minAlpha: 0.1,
			data: heatData
		},
		itemStyle: {
			normal: {
				borderColor:'rgba(100,149,237,0.6)',
				borderWidth:0.5,
				areaStyle: {
					color: '#1b1b1b'
				}
			}
		}
	},

	series : [
	{
		name: '云服务',
		type: 'map',
		mapType: 'china',
		roam: true,
		hoverable: false,
		data:[],
		heatmap: {
			minAlpha: 0.1,
			data: heatData
		},
		itemStyle: {
			normal: {
				borderColor:'rgba(100,149,237,0.6)',
				borderWidth:0.5,
				areaStyle: {
					color: '#1b1b1b'
				}
			}
		}
	},
	series : [
	{
		name: '远程会诊',
		type: 'map',
		mapType: 'china',
		roam: true,
		hoverable: false,
		data:[],
		heatmap: {
			minAlpha: 0.1,
			data: heatData
		},
		itemStyle: {
			normal: {
				borderColor:'rgba(100,149,237,0.6)',
				borderWidth:0.5,
				areaStyle: {
					color: '#1b1b1b'
				}
			}
		}
	}
*/

//------------------分割线-----------------
//以上数据可拷贝增加自定义按钮
	]
};

