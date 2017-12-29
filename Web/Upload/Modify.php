<?php

//引html入头文件和查询数据库文件
include ('head.php');
include ('Select.php');

//数据查询界面
echo
	"<form action='#' method ='post'>" . 
	"<div class='ui-field-contain'> <label >查询数据:</label>".
	"<input type='search' name='Select' placeholder='输入软件ID、名称、编号查询'></form></div>";

//返回从数据库查询到的数据
$Select_Data = $_POST['Select'];
$Data = Mysql_Select($Select_Data);	

$Data_Name = $_GET['Data_Name'];
$Image_Name =$_GET['Image_Name'];
//网址前面加上URL
//$URL = "http://" . $_SERVER['HTTP_HOST'] ."/Downloads/";

//根据数据库的数据显示软件类别
$Class = $Data[0]['Class'];

if ($Class == 'OS')
	$OS_Class = "selected";
else if ($Class == 'Book')
	$Book_Class = "selected";
else if ($Class == 'IDE')
	$IDE_Class = "selected";
else if ($Class == 'IDE_Tool')
	$IDE_Tool_Class = "selected";
else if ($Class == 'Source_Code')
	$Source_Code_Class = "selected";
else if ($Class == 'OSS')
	$OSS_Class = "selected";
else if ($Class == 'Mac')
	$Mac_Class = "selected";
else if ($Class == 'Linux')
	$Linux_Class = "selected";
else if ($Class == 'Windows')
	$Windows_Class = "selected";

//根据数据库的数据显示运行环境
$OS = $Data[0]['Worked_OS'];

if ($OS == 'Windows')
	$Windows_OS = "selected";
else if ($OS == 'All')
	$All_OS = "selected";
else if ($OS == 'Web')
	$Web_OS = "selected";	
else if ($OS == 'Mac')
	$Mac_OS = "selected"; 
else if ($OS == 'IOS')
	$IOS_OS = "selected";
else if ($OS == 'Linux')
	$Linux_OS = "selected";
else if ($OS == 'Android')
	$Android_OS = "selected";

//主体页面
echo 
	"<form action='Update.php?Data_Name=$Data_Name&Image_Name=$Image_Name' method='get'>" .
	"<div class='ui-field-contain'> <label >软件名称:</label>" .
	"<input type='text' name='Name' placeholder='数据为空' value=" . $Data[0]['Name'] . "></div>".
	"<div class='ui-field-contain'> <label >软 件 ID :</label>" .
	"<input type='text' name='id' placeholder='数据为空' value=" . $Data[0]['id'] . "></div>".
	"<div class='ui-field-contain'> <label >软件编号:</label>" .
	"<input type='text' name='Tag' placeholder='数据为空' value=" . $Data[0]['Tag'] . "></div>" .
	"<div class='ui-field-contain'> <label >软件版本:</label>" .
	"<input type='text' name='Version' placeholder='数据为空' value=" . $Data[0]['Version'] . "></div>".
	"<div class='ui-field-contain'>" .
	"<fieldset data-role='fieldcontain'>" .
	"<label>软件类别:</label>" .
	"<select name='Class'>" .
	"<option $OS_Class value='OS'>操作系统</option>" .
	"<option $Book_Class value='Book'>编程书籍</option>" .
	"<option $IDE_Class value='IDE'>开发环境</option>" .
	"<option $IDE_Tool_Class value='IDE_Tool'>开发工具</option>" .
	"<option $Source_Code_Class value='Source_Code'>源码下载</option>" .
	"<option $OSS_Class value='OSS'>开源软件</option>" .
	"<option $Mac_Class value='Mac'>Mac软件</option>" .
	"<option $Linux_Class value='Linux'>Linux软件</option>" .
	"<option $Windows_Class value='Windows'>Windows</option>" .
	"</select>" .
	"</fieldset>" .
	"<fieldset data-role='fieldcontain'>" .
	"<label>运行环境:</label>" .
	"<select name='Worked_OS'>" .
	"<option $Windows_OS value='Windows'>Windows</option>" .
	"<option $All_OS value='All'>All</option>" .
	"<option $Web_OS value='Web'>Web</option>" .
	"<option $Mac_OS value='Mac'>Mac</option>" .
	"<option $IOS_OS value='IOS'>IOS</option>" .
	"<option $Linux_OS value='Linux'>Linux</option>" .
	"<option $Android_OS value='Android'>Android</option>" .
	"</select>" .
	"</fieldset>" .
	"</div>" .
	"<div class='ui-field-contain'> <label >教程地址:</label>" .
	"<input type='text' name='Course_URL'placeholder='数据为空' value=" . $Data[0]['Course_URL'] . "></div>" .
	"<div class='ui-field-contain'> <label >下载地址:</label>" .
	"<input type='text' name='Download_URL' placeholder='数据为空' value=" . $URL . $Data[0]['Download_URL'] . "></div>" .
	"<div class='ui-field-contain'> <label >图标地址:</label>" .
	"<input type='text' name='Image_URL' placeholder='数据为空' value=" . $URL . $Data[0]['Image_URL'] . "></div>" .
	"<div class='ui-field-contain'> <label >软件简介:</label>" .
	"<input type='text' name='Introduce' placeholder='数据为空' value=" . $Data[0]['Introduce'] . "></div>" .
	"<div class='ui-field-contain'> <label >备 注 1:</label>"   .
	"<input type='text' name='Remarks_1' placeholder='数据为空' value=" . $Data[0]['Remarks_1'] . "></div>" .
	"<div class='ui-field-contain'> <label >备 注 2:</label>"    .
	"<input type='text' name='Remarks_2' placeholder='数据为空' value=" . $Data[0]['Remarks_2'] . "></div>" .
	"<div data-role='controlgroup'>" .
	"<input type='submit' class='ui-btn' value='确 认 修 改'>" .
	"<input type='reset'  class='ui-btn' value='恢 复 默 认'></div>";
	"</form></div></body></html>";
?>
