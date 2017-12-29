
option = {

	//标题及说明文字
	title : { 

		text: '一脉阳光全国远程会诊实时发起图',
		subtext: "截止到：2016-11-10 12:00:00",
		x:'center',
		textStyle:{color:'red'}

	}, 

	//显示弹框数据 圈和线的数据
	tooltip : { 

		trigger: 'item'
	},  

	//左上角自定义按钮
	legend: {

		orient: 'vertical',
		x:'left',
		textStyle:{color:'red'},
		data:['全国']
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
	
	series : [
	{
		name: '全国',
		type: 'map',
		mapType: 'china',
		roam: true,
		hoverable: false, //省份高亮禁止
		itemStyle:{
			normal:{
				label:{show:true}, //省名显示
				emphasis:{label:{show:true}},
				borderColor:'rgba(100,149,237,1)',
				borderWidth:0.5,
				areaStyle:{color: '#1b1b1b'}
			}
		},

		data:[],

		markLine : {

			smooth:true,
			symbol: ['none', 'circle'],  
			symbolSize : 1,
			itemStyle : {
				normal: {
					color:'#fff',
					borderWidth:1,
					borderColor:'rgba(30,144,255,0.5)'
				}
			},

			data : [],
		},

		geoCoord: {

			'北京': [116.4551,40.2539],
		},

		markPoint : {

			symbol:'emptyCircle',
			symbolSize : function (v){

				//圈子大小
				return 10 + v/100
			},

			effect : {

				show: true,
				shadowBlur : 0
			},

			itemStyle:{

				normal:{

					label:{show:false}
				},

				emphasis: {

					label:{position:'top'}
				}
			},

			//发光圈子，弹数据
			data : [

			{name:'北京',value:1000},
			]
		

		}
	},

	{
		name: '全国',
		type: 'map',
		mapType: 'china',
		data:[],
		markLine : {
			smooth:true,
			effect : {
				show: true,
				scaleSize: 1,
				period: 30,
				color: '#fff',
				shadowBlur: 10
			},
			itemStyle : {
				normal: {
					label:{show:false},
					borderWidth:1,
					lineStyle: {
						type: 'solid',
						shadowBlur: 10
					}
				}
			},

			data : []

		},

		//圈中的数据
		markPoint : {

			symbol:'emptyCircle',
			symbolSize : function (v){

				return 0.1
			},

			effect : {

				show: false,
				shadowBlur : 0
			},

			itemStyle:{

			nor:[],mal:{

					label:{

						show:true,
						position:'top',
						textStyle: {fontSize: 14}
					}
				},

				emphasis: {label:{show:false}}
			},

			data : [
			{name:'北京',value:90},
			]
		}
	}

	]
}
