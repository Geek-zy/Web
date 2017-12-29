
<?php 

function _Mysql() {

	$DB_Name = "Geek_Web";
	$host = "localhost";
	$user = "root";
	$passwd = "root";

	try {
		$link = new PDO("mysql:host=$host; dbname=$DB_Name", $user, $passwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
		//echo "连接成功\n"; 
	}

	catch(PDOException $e) {

		echo "连接失败 ==> ";
		echo $e->getMessage() . "\n";
		exit;
	}

	return $link;
}
?>
