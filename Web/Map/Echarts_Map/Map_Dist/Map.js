
option = {

	//标题及说明文字
	title : {

		text: '一脉阳光全国业务分布图',
		subtext: "截止到：2016-11-10 12:00:00",
		x:'center'
	},

	//显示弹框数据
	tooltip : {

		trigger: 'item'
	},

	//左上角自定义按钮
	legend: {

		orient: 'vertical',
		x:'left',
		data:['托管', '云服务', '远程会诊']
	},

	//左下角数量标尺
	dataRange: {

		min: 0,
		max: 2500,
		x: 'left',
		y: 'bottom',
		text:['高','低'],
		calculable : true
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
		roam: false,
		itemStyle:{

			normal:{label:{show:true}},
			emphasis:{label:{show:true}}
		},

		data:[
		{name: '北京' ,value: 567},
		{name: '天津' ,value: 123},
		{name: '上海' ,value: 415},
		{name: '重庆' ,value: 124},
		{name: '河北' ,value: 655},
		{name: '河南' ,value: 181},
		{name: '云南' ,value: 231},
		{name: '辽宁' ,value: 32},
		{name: '黑龙江' ,value: 23},
		{name: '湖南' ,value: 21},
		{name: '安徽' ,value: 232},
		{name: '山东' ,value: 333},
		{name: '新疆' ,value: 111},
		{name: '江苏' ,value: 444},
		{name: '浙江' ,value: 555},
		{name: '江西' ,value: 323},
		{name: '湖北' ,value: 223},
		{name: '广西' ,value: 323},
		{name: '甘肃' ,value: 233},
		{name: '山西' ,value: 232},
		{name: '内蒙古' ,value: 233},
		{name: '陕西' ,value: 234},
		{name: '吉林' ,value: 231},
		{name: '福建' ,value: 321},
		{name: '贵州' ,value: 231},
		{name: '广东' ,value: 312},
		{name: '青海' ,value: 342},
		{name: '西藏' ,value: 324},
		{name: '四川' ,value: 24},
		{name: '宁夏' ,value: 24},
		{name: '海南' ,value: 432},
		{name: '台湾' ,value: 23},
		{name: '香港' ,value: 234},
		{name: '澳门' ,value: 234}
		]
	},
	{
		name: '托管',
		type: 'map',
		mapType: 'china',
		itemStyle:{
			normal:{label:{show:true}},
			emphasis:{label:{show:true}}
		},

		data:[
		/*{name: '北京' ,value: 567},
		{name: '天津' ,value: 123},
		{name: '上海' ,value: 415},
		{name: '重庆' ,value: 124},
		{name: '河北' ,value: 655},
		{name: '河南' ,value: 181},
		{name: '云南' ,value: 231},
		{name: '辽宁' ,value: 32},
		{name: '黑龙江' ,value: 23},
		{name: '湖南' ,value: 21},
		{name: '安徽' ,value: 232},
		{name: '山东' ,value: 333},
		{name: '新疆' ,value: 111},
		{name: '江苏' ,value: 444},
		{name: '浙江' ,value: 555},
		{name: '江西' ,value: 323},
		{name: '湖北' ,value: 223},
		{name: '广西' ,value: 323},
		{name: '甘肃' ,value: 233},
		*/{name: '山西' ,value: 232},
		{name: '内蒙古' ,value: 233},
		{name: '陕西' ,value: 234},
		{name: '吉林' ,value: 231},
		{name: '福建' ,value: 321},
		{name: '贵州' ,value: 231},
		{name: '广东' ,value: 312},
		{name: '青海' ,value: 342},
		{name: '西藏' ,value: 324},
		{name: '四川' ,value: 24},
		{name: '宁夏' ,value: 24},
		{name: '海南' ,value: 432},
		{name: '台湾' ,value: 23},
		{name: '香港' ,value: 234},
		{name: '澳门' ,value: 234}
		]
	},

	{
		name: '云服务',
		type: 'map',
		mapType: 'china',
		itemStyle:{
			normal:{label:{show:true}},
			emphasis:{label:{show:true}}
		},

		data:[
		{name: '北京' ,value: 567},
		{name: '天津' ,value: 123},
		{name: '上海' ,value: 415},
		{name: '重庆' ,value: 124},
		{name: '河北' ,value: 655},
		{name: '河南' ,value: 181},
		/*{name: '云南' ,value: 231},
		{name: '辽宁' ,value: 32},
		{name: '黑龙江' ,value: 23},
		{name: '湖南' ,value: 21},
		{name: '安徽' ,value: 232},
		{name: '山东' ,value: 333},
		{name: '新疆' ,value: 111},
		{name: '江苏' ,value: 444},
		{name: '浙江' ,value: 555},
		{name: '江西' ,value: 323},
		{name: '湖北' ,value: 223},
		{name: '广西' ,value: 323},
		{name: '甘肃' ,value: 233},
		*/{name: '山西' ,value: 232},
		{name: '内蒙古' ,value: 233},
		{name: '陕西' ,value: 234},
		{name: '吉林' ,value: 231},
		{name: '福建' ,value: 321},
		{name: '贵州' ,value: 231},
		{name: '广东' ,value: 312},
		{name: '青海' ,value: 342},
		{name: '西藏' ,value: 324},
		{name: '四川' ,value: 24},
		{name: '宁夏' ,value: 24},
		{name: '海南' ,value: 432},
		{name: '台湾' ,value: 23},
		{name: '香港' ,value: 234},
		{name: '澳门' ,value: 234}
		]
	}
	]
};

