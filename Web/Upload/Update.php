<?php 

include ("head.php");
include ("Mysql.php");

$DB_Name = "main";

$ID = $_GET['id'];
$Tag = $_GET['Tag'];
$Name = $_GET['Name'];
$Version = $_GET['Version'];
$Class = $_GET['Class'];
$Introduce = $_GET['Introduce'];
$Worked_OS = $_GET['Worked_OS'];
$Course_URL = $_GET['Course_URL'];
$Download_URL = $_GET['Download_URL'];
//$Image_URL = $_GET['Image_URL'];
$Image_URL = "ico/panda.png";
$Remarks_1 = $_GET['Remarks_1'];
$Remarks_2 = $_GET['Remarks_2'];

//$Data_Name = $_GET['Data_Name'];
//$Image_Name = $_GET['Image_Name'];
//$Download_URL = "package/$Class/$Data_Name";
//package/$Class/$Image_Name
//system("mv DATA/$Data_Name  ../Downloads/package/$Class/");
//mv DATA/$Image_Name ../Downloads/package/$Class/

echo $Data_Name;
echo $Image_Name;
$pdo = _Mysql();

$sql = "UPDATE $DB_Name SET Tag='$Tag',Name='$Name',Version='$Version',Introduce='$Introduce',Class='$Class',Worked_OS='$Worked_OS',Course_URL='$Course_URL',Download_URL='$Download_URL',Image_URL='$Image_URL',Remarks_1='$Remarks_1',Remarks_2='$Remarks_2' WHERE id='$ID'";

$stmt = $pdo->prepare($sql);
$stmt->execute();

echo '<meta http-equiv="refresh" content="1;url=./Modify.php">' .
	 "数据修改成功,马上返回!";
/*echo '
	<meta http-equiv="refresh" content="0;url=./Modify.php">
	<h4 style="line-height:1.75em">
	<span style="position:relative;top:0.3em;">数据修改成功！点击</span>
	<a href="javascript:history.go(-1)" class="ui-btn ui-corner-all ui-icon-back ui-btn-icon-notext "style="display:inline-block;overflow:visible;margin-right:0em">返回图标</a >
	<span style="position:relative;top:0.3em;">返回！</span>
	</h4>
	';*/
?>
