<?php 

include ("Mysql.php");

//遍历数据库
function Mysql_Select($Data) {

	$DB_Name = "main";
	$ID = $Data;
	$Tag = $Data;
	$Name = $Data;

	if(empty($Data)) {
		
		if (!empty($_GET['data'])) {
			
			die;
		}

	$pdo = _Mysql();
	$sql = "select * from main order by id desc";
	$stmt = $pdo->prepare($sql);
	}


	else {

	$pdo = _Mysql();
	$sql = "SELECT * FROM $DB_Name WHERE id = '$ID' OR Tag = '$Tag' OR Name LIKE '%$Name%'";
	//$sql = "SELECT * FROM Mac WHERE Tag='$Tag' OR Name='$Name'";
	$stmt = $pdo->prepare($sql);
	}

	$stmt->execute();
	$PatientInfo = array();

	if(empty($stmt->fetch(PDO::FETCH_ASSOC))) {

		exit;
	}
 	 
	$stmt->execute();//将指针指向头
	while ( $row = $stmt->fetch(PDO::FETCH_ASSOC)) {

		array_push($PatientInfo, $row);
	}
	//print_r($PatientInfo);
	return $PatientInfo;
}
?>
