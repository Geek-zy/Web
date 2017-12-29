<?php

include ("head.php");

$File_URL = "DATA/";

$Data_Name = $_FILES["Data"]["name"];
$Image_Name = $_FILES["Image"]["name"];

if ($_FILES["Image"]["error"] > 0 && $_FILES["Data"]["error"] > 0) {

	echo "错误 ==> " . $_FILES["Image"]["error"] . "<br>";
	echo "<meta http-equiv='refresh' content='1;url=./index.php'>";
}
else {

	// 判断上传目录是否存在该文件,目录权限为777
	//if (file_exists("$File_URL" . $_FILES["Image"]["name"])) {
	if (file_exists("$File_URL" . $_FILES["Data"]["name"])) {

		echo $_FILES["Image"]["name"] . " 文件已经存在。";
		echo "<meta http-equiv='refresh' content='1;url=./index.php'>";
	}

	else if (file_exists("$File_URL" . $_FILES["Data"]["name"])) {

		echo $_FILES["Data"]["name"] . " 文件已经存在。";
		echo "<meta http-equiv='refresh' content='1;url=./index.php'>";
	}

	else {

		system("mysql -DGeek_Web -uroot -proot < New_Mysql.sql");
		echo "<meta http-equiv='refresh' content='1;url=./Modify.php?Image_Name=$Image_Name&Data_Name=$Data_Name'>";
		// 如果目录不存在该文件则将文件上传到该目录下
		move_uploaded_file($_FILES["Image"]["tmp_name"], "$File_URL" . $_FILES["Image"]["name"]);
		move_uploaded_file($_FILES["Data"]["tmp_name"], "$File_URL" . $_FILES["Data"]["name"]);

		echo "上传文件名: " . $_FILES["Image"]["name"] . "<br>";
		echo "文件类型: " . $_FILES["Image"]["type"] . "<br>";
		echo "文件大小: " . ($_FILES["Image"]["size"] / 1024) . " kB<br>";
		echo "文件临时存储的位置: " . $_FILES["Image"]["tmp_name"] . "<br>";
		echo "文件存储在: " . "$File_URL" . $_FILES["Image"]["name"];

		echo "<hr>";
		echo "上传文件名: " . $_FILES["Data"]["name"] . "<br>";
		echo "文件类型: " . $_FILES["Data"]["type"] . "<br>";
		echo "文件大小: " . ($_FILES["Data"]["size"] / 1024) . " kB<br>";
		echo "文件临时存储的位置: " . $_FILES["Data"]["tmp_name"] . "<br>";
		echo "文件存储在: " . "$File_URL" . $_FILES["Data"]["name"];

	}
}
?>
