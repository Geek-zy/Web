
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
			'echarts/chart/funnel'
			],

			function (ec) {
				var myChart = ec.init(document.getElementById('main'));

				myChart.setOption(option);
			}
		);
