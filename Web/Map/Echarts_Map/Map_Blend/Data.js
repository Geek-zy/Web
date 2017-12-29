
require.config({
	paths: {
		//echarts: 'http://echarts.baidu.com/build/dist'
		echarts: '../Echarts'
	}
});

require (

			[
			'echarts',
			'echarts/chart/pie',
			'echarts/chart/bar',
			'echarts/chart/line',
			],

			function (ec) {

				var myChart = ec.init(document.getElementById('main'));
				myChart.setOption(option);

				var myChart2 = ec.init(document.getElementById('main2'));
				myChart2.setOption(option2);

				myChart.connect(myChart2);
				myChart2.connect(myChart);

				setTimeout(function (){ 
					window.onresize = function () {
						myChart.resize();
						myChart2.resize();
					}   
				},200)
			} 
);
