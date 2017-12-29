<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
    <script src="jquery-2.2.4.min.js"></script>
    <script src="echarts-all.js"></script>
    <style>
        body {
            background-color: black;
        }
    </style>
</head>
<body>
    <!-- Prepare a Dom with size (width and height) for ECharts -->
    <div id="mainChart" style="height:100vh"></div>
    <!-- ECharts import -->

    <script type="text/javascript">
        var chart = document.getElementById('mainChart');
        var myChart = echarts.init(chart);

        var placeList = [
            // 江西
            {name: '赣州',            geoCoord: [114.935909,25.845296]},
            {name: '新余市人民医院',    geoCoord: [114.94222,27.803569]},
            {name: '新余市中医院',      geoCoord: [114.947117,27.822322]},
            {name: '新余市妇幼保健院',   geoCoord: [114.948135,27.807114]},
            {name: '宁都县人民医院',   geoCoord: [116.015166,26.455258]},
            {name: '铜鼓县人民医院',   geoCoord: [114.374866,28.526296]},
            {name: '安福县人民医院',   geoCoord: [114.620746,27.384616]},
            {name: '永修县人民医院',   geoCoord: [115.81305,29.021612]},
            {name: '抚州市人民医院',   geoCoord: [116.360919,27.954545]},
            {name: '南城县人民医院',   geoCoord: [116.3609,39.943309]},
            // 内蒙
            {name: '内蒙古清水河县医院',   geoCoord: [111.683365,39.917953]},
            {name: '天津市职业病防治医院',   geoCoord: [117.210813,39.14393]},
            {name: '赤峰市喀喇沁旗医院',   geoCoord: [118.704278,41.931846]},
            
            //湖北
            {name: '隆回县中医院',   geoCoord: [110.973326,27.351831]},
            {name: '洞口县人民医院',   geoCoord: [110.580512,27.060516]},
            {name: '资兴市地区',   geoCoord: [113.468522,25.937184]},
            {name: '汉寿县中医院',   geoCoord: [111.979415,28.913401]},
            {name: '长沙市独立影像中心',   geoCoord: [112.979353,28.213478]},
            {name: '辰溪县人民医院',   geoCoord: [110.199899,28.009866]},
            {name: '南县中医院',   geoCoord: [112.41219,29.37602]},
            //广西
            {name: '玉林兴业影像中心',   geoCoord: [109.928611,22.798462]},
            {name: '河池东兰影像中心',   geoCoord: [107.413534,24.5116]},
            {name: '河池南丹影像中心',   geoCoord: [107.468001,25.119439]},
            {name: '柳州鹿寨影像中心',   geoCoord: [109.802816,24.532198]},
            {name: '来宾象州影像中心',   geoCoord: [109.771968,24.01917]},
            {name: '钦州灵山影像中心',   geoCoord: [109.147748,22.315716]},
            {name: '全州县影像中心',   geoCoord: [111.026435,25.936465]},
            //广东
            {name: '湛江农垦中心医院',   geoCoord: [110.407597,21.219497]},
            {name: '广州从化影像中心',   geoCoord: [113.698709,23.705203]},
            {name: '肇庆市独立影像中心',   geoCoord: [112.479653,23.078663]},

            //海南
            {name: '海南省农垦那大医院',   geoCoord: [109.582845,19.512434]},
            //山东
            {name: '云浮市人民医院',   geoCoord: [112.080194,22.957752]},
            {name: '临邑县中医院',   geoCoord: [116.874559,37.195702]},
            {name: '庆云县影像中心',   geoCoord: [117.462737,37.801824]},
            {name: '罗庄区中心医院',   geoCoord: [118.297279,34.964343]},
            {name: '德州二院',   geoCoord: [116.328161,37.460826]},


    ]
        option = {
            backgroundColor: '#1b1b1b',
            color: [
                'rgba(152, 255, 152, 0.6)',
            ],
            legend: {
                orient: 'vertical',
                x: 'left',
                data: ['影像中心'],
                textStyle: {
                    color: '#fff'
                }
            },
            series: [
                {
                    name: '影像中心',
                    type: 'map',
                    mapType: 'china',
                    itemStyle: {
                        normal: {
                            borderColor: 'rgba(100,149,237,4)',
                            borderWidth: 1.5,
                            areaStyle: {
                                color: '#1b1b1b'
                            }
                        }
                    },
                    data: [],
                    markPoint: {
                        symbol: 'circle',
                        symbolSize: 10,
                        large: true,
                        effect: {
                            show: true
                        },
                        data: (function () {
                            var data = [];
                            var len = placeList.length;
                            var geoCoord
                            while (len--) {
                                geoCoord = placeList[len % placeList.length].geoCoord;
                                data.push({
                                    name: placeList[len % placeList.length].name + len,
                                    value: 500,
                                    geoCoord: [
                                        geoCoord[0],
                                        geoCoord[1]
                                    ]
                                })
                            }
                            return data;
                        })()
                    }
                },
            ]
        };


        myChart.setOption(option);
    </script>
</body>
