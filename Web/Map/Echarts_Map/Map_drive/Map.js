

require('echarts/util/mapData/params').params.bodyMale = {
	getGeoJson: function (callback) {
		$.ajax({
			url: "svg/body-male.svg",
		dataType: 'xml',
		success: function(xml) {
			callback(xml)
		}
		});
	}
}
require('echarts/util/mapData/params').params.bodyFemale = {
	getGeoJson: function (callback) {
		$.ajax({
			url: "svg/body-female.svg",
		dataType: 'xml',
		success: function(xml) {
			callback(xml)
		}
		});
	}
}
option = {
	title : {
		text : '人体密码',
			 subtext: '地图SVG扩展',
			 x:'center'
	},
	tooltip : {
		trigger: 'item'
	},
	toolbox: {
		show : true,
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
	dataRange: {
		min: 0,
		max: 100,
		x: 'center',
		y: 'center',
		tdext:['High','Low'],
		calculable : true,
		itemHeight:30,
		color: ['orangered','yellow','lightskyblue']
	},
	series : [
	{
		name: '人体密码-男',
		type: 'map',
		mapType: 'bodyMale', // 自定义扩展图表类型
		mapLocation: {
			x:'left'
		},
		roam:true,
		itemStyle:{
			normal:{label:{show:true}},
			emphasis:{label:{show:true}}
		},
		data:[
		{name: '头部', value: 90},
		{name: '颈部', value: 80},
		{name: '胸部', value: 60},
		{name: '腹部', value: 60},
		{name: '生殖', value: 50},
		{name: '上肢', value: 40},
		{name: '下肢', value: 30}
		],
			textFixed : {
				'上肢' : [-60, 0]
			},
			markPoint : {
				symbol:'emptyCircle',
				symbolSize : 10,
				effect : {
					show: true
				},
				data : [
				{name: '心脏', value: 100, geoCoord:[138, 126]}
				]
			},
			markLine : {
				smooth:true,
				effect : {
					show: true,
					scaleSize: 1,
					period: 30,
					color: '#fff',
					shadowBlur: 5
				},
				itemStyle : {
					normal: {
						borderWidth:1,
						lineStyle: {
							type: 'solid'
						}
					}
				},
				data : [
					[
					{name:'男',geoCoord:[138, 126]}, 
					{name:'女',value:90,geoCoord:[268, 56]}
				]
					]
			}
	},
	{
		name: '人体密码-女',
		type: 'map',
		mapType: 'bodyFemale', // 自定义扩展图表类型
		mapLocation: {
			x:'right'
		},
		roam:true,
		itemStyle:{
			normal:{label:{show:true}},
			emphasis:{label:{show:true}}
		},
		data:[
		{name: '头部', value: 90},
		{name: '颈部', value: 80},
		{name: '胸部', value: 70},
		{name: '腹部', value: 60},
		{name: '生殖', value: 50},
		{name: '上肢', value: 40},
		{name: '下肢', value: 30}
		],
			markPoint : {
				symbol:'emptyCircle',
				symbolSize : 10,
				effect : {
					show: true
				},
				data : [
				{name: '心脏', value: 100, geoCoord:[118, 126]}
				]
			},
			markLine : {
				smooth:true,
				effect : {
					show: true,
					scaleSize: 1,
					period: 30,
					color: '#fff',
					shadowBlur: 5
				},
				itemStyle : {
					normal: {
						borderWidth:1,
						lineStyle: {
							type: 'solid'
						}
					}
				},
				data : [
					[
					{name:'女',geoCoord:[118, 126]}, 
					{name:'男',value:90,geoCoord:[-22, 56]}
				]
					]
			}
	}
	]
};

