<?php 

//include("src/Main_Mysql.php");	//Main_Mysql.php ==> 数据库读取数据
include("src/Main_Text.php");		//Main_Text.php  ==> Text文本读取数据
include("src/head.php"); 


$_Name = $_GET['Name'];
$_File = $_GET['File'];
$_Date = _Main("$_File");

echo '<ul data-role="listview" data-inset="true">';
echo "<li data-role='divider'>$_Name</li>";

$Json_Date = json_decode($_Date, true);
$i = 0;		// 第一行是表头，0 ==> 不显示 1 ==> 显示。

foreach($Json_Date['list'] as $reportIndex => $reportInfo) {

	$Tag			= $reportInfo['Tag'];
	$Name			= $reportInfo['Name'];
	$Version		= $reportInfo['Version'];
	$Introduce		= $reportInfo['Introduce'];
	$Worked_OS		= $reportInfo['Worked_OS'];
	$Course_URL		= $reportInfo['Course_URL'];
	$Download_URL	= $reportInfo['Download_URL'];
	$Image_URL		= $reportInfo['Image_URL'];

	if ($i != 0) {

		echo 
			'<li>' .
			"<a target='_blank' href='$Course_URL'>" .
			"<img src='$Image_URL'>" .
			"<h2>$Name</h2>" .
			#"<p>软件编号：$Tag</p>" .
			"<p>软件版本：$Version</p>" .
			"<p>运行环境：$Worked_OS</p>" .
			"<p>软件简介：$Introduce</p>" .
			#'<p>点击查看详情及教程</p></a>' .
			"<a target='_self' href='$Download_URL' data-transition='pop' data-icon='arrow-d'>下载</a>" .
			#"<a target='_blank' href='$Download_URL' data-transition='pop' data-icon='arrow-d'>下载</a>" .
			'</li>';
	}

	$i++;
}

?>
