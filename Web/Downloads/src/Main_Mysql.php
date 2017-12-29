<?php

function _Mysql() {

	$host = "localhost";
	$dbname = "Downloads";
	$user = "root";
	$passwd = "root";

	try {
		$link = new PDO("mysql:host=$host; dbname=$dbname", $user, $passwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
		//echo "连接成功\n"; 
	}

	catch(PDOException $e) {

		echo "连接失败 ==> ";
		echo $e->getMessage() . "\n";
		exit;
	}

	return $link;
}


function _Main($_table) {

	$table = explode("/",$_table);
	$sql = "select * from $table[1]";
	$pdo = _Mysql();
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$PatientInfo = array();

	if(empty($stmt->fetch(PDO::FETCH_ASSOC))) {

		//echo "数据库 ==> $dbname 数据为空\n";
		exit;
	}

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

		array_push($PatientInfo, $row);
	}

	//print_r($PatientInfo);
	$Json_Data = json_encode(array("list" => $PatientInfo));
	//echo $Json_Data;
	return $Json_Data;

	$link = null;
}

//_Main("bin/Mac");

?>
