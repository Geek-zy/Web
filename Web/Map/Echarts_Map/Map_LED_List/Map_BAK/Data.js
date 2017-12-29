
require.config({
	paths: {
		//echarts: 'http://echarts.baidu.com/build/dist'
		echarts: '../../Echarts'
	}
});

require (

			[
			'echarts',
			'echarts/chart/map'
			],

			function (ec) {
				var myChart = ec.init(document.getElementById('main'));

				myChart.setOption(option);
			}
		);
