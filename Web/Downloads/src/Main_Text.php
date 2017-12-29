
<?php 

error_reporting( E_ALL&~E_NOTICE );

class Software_IT {

	public $id;				//序号
	public $Tag;			//软件编号
	public $Name;			//软件名字
	public $Version;		//软件版本
	public $Introduce;		//软件简介
	public $Worked_OS;		//运行环境
	public $Course_URL;		//教程地址
	public $Download_URL;	//下载地址
	public $Image_URL;		//图标地址
	public $Remarks_1;		//备注1
	public $Remarks_2;		//备注2

	function __construct($id,$Tag,$Name,$Version,$Introduce,$Worked_OS,$Course_URL,$Download_URL,$Image_URL,$Remarks_1,$Remarks_2){

		$this->id			= $id;
		$this->Tag			= $Tag;
		$this->Name			= $Name;
		$this->Version		= $Version;
		$this->Introduce	= $Introduce;
		$this->Worked_OS	= $Worked_OS;
		$this->Course_URL	= $Course_URL;
		$this->Download_URL = $Download_URL;
		$this->Image_URL	= $Image_URL;
		$this->Remarks_1	= $Remarks_1;
		$this->Remarks_2	= $Remarks_2;
	}   
}

function _Main ($_File) {

	$fp = file("$_File");
	$i = 0;

	foreach ($fp as $_fp) {

		$j = 0;
		$_fp = rtrim($_fp);
		$line = (explode(" ",$_fp));

		foreach($line as $_line) {

			$_Date[$i][$j] = $_line;
			$j++;
		}

		$New_Date[$i] = new Software_IT($_Date[$i][0],$_Date[$i][1],$_Date[$i][2],$_Date[$i][3],$_Date[$i][4],$_Date[$i][5],$_Date[$i][6],$_Date[$i][7],$_Date[$i][8],$_Date[$i][9],$_Date[$i][10]);
		$i++;
	}

	$Json_Date = json_encode(array("list" => $New_Date));
	//echo $Json_Date;
	return $Json_Date;
}

//_Main("../bin/OS");

?>
