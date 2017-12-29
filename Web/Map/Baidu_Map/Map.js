

//宏观框架
var map = new BMap.Map("container");          // 创建地图实例  
//var point = new BMap.Point(116.404, 39.915);  // 创建点坐标  
//map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别  
map.centerAndZoom(new BMap.Point(116.404, 39.915), 6);    //上面注释2项，二合一
map.enableScrollWheelZoom();   //启用滚轮放大缩小，默认禁用
map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用

//地图控件
map.addControl(new BMap.NavigationControl());	//地图平移缩放控件,左上方
map.addControl(new BMap.ScaleControl());		//比例尺控件,左下方
map.addControl(new BMap.OverviewMapControl());  //缩略地图控件,右下方
map.addControl(new BMap.MapTypeControl());		//地图类型控件,右上方
map.setCurrentCity("北京"); // 仅当设置城市信息时，MapTypeControl的切换功能才能可用


//全景地图
var stCtrl = new BMap.PanoramaControl();  
stCtrl.setOffset(new BMap.Size(10, 40));  
map.addControl(stCtrl);

//添加弧线
var beijing=new BMap.Point(116.432045,39.910683),
	hangzhou=new BMap.Point(120.129721,30.314429),
	taiwan=new BMap.Point(121.491121,25.127053),
	nanchang=new BMap.Point(115.935843,29.000000);

var points1 = [beijing, hangzhou],
	points2 = [beijing, taiwan],
	points3 = [beijing, nanchang];

var curve1 = new BMapLib.CurveLine(points1, {strokeColor:"blue", strokeWeight:3, strokeOpacity:0.6}), //创建弧线对象
	curve2 = new BMapLib.CurveLine(points2, {strokeColor:"blue", strokeWeight:3, strokeOpacity:0.6}),
	curve3 = new BMapLib.CurveLine(points3, {strokeColor:"blue", strokeWeight:3, strokeOpacity:0.6});

map.addOverlay(curve1); //添加到地图中
map.addOverlay(curve2);
map.addOverlay(curve3);

curve1.enableEditing(); //开启编辑功能
curve2.enableEditing();
curve3.enableEditing();

