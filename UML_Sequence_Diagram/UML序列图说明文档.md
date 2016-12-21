`1.本地引入`

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		//将UTF-8编码加入进去
	<script src="raphael-min.js"></script>
	<script src="underscore-min.js"></script>
	<script src="sequence-diagram-min.js"></script>
		//将JS Sequence Diagrams库下载及引入到程序
		
	<div id="flow">放置流程图的空间</div>
	<script>
		var diagram = Diagram.parse("Alice->Bob: Hello Bob, how are you?\nNote right of Bob: Bob thinks\nBob-->Alice: I am good thanks!\n");
		//diagram.drawSVG("flow", {theme: 'hand'});//可爱图形
	diagram.drawSVG("flow", {theme: 'simple'});//矩形图形
	</script>

`2.用jQ实现`

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		//将UTF-8编码加入进去
		<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
		//百度CDN jQuery在线引入
		//或者
		//本地下载引入
		<script src="jquery.min.js"></script>

		<script src="raphael-min.js"></script>
		<script src="underscore-min.js"></script>
		<script src="sequence-diagram-min.js"></script>
		//将JS Sequence Diagrams库下载及引入到程序
		
		<div class="diagram">
		Alice->Bob: Hello Bob, how are you?
		Note right of Bob: Bob thinks
		Bob-->Alice: I am good thanks!
		</div>
		
		<script>
		//$(".diagram").sequenceDiagram({theme: 'hand'});//可爱图形
		$(".diagram").sequenceDiagram({theme: 'simple'});//矩形图形
		</script>