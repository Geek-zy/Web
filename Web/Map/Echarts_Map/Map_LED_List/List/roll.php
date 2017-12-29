<?php

function de($path,$filename)
{

if(file_exists("$path/$filename") && @filesize("$path/$filename") != 0){
			return 0;

}elseif(file_exists("$path/$filename") && @filesize("$path/$filename") == 0){

			return 1;
}else{
            $fw = fopen("$path/$filename", 'x');
            fclose($fw);
			return 2;
	}
}


$dir = dirname('__FILE__');
$clock = date("Y-m-d");

$Url = array(
	'bjremote' => "http://nfs.beijing.rimag.com.cn/imageList/json.php?startDate=$clock&endDate=$clock",
	'jxcloud' => "http://nfs3.jiangxi.rimag.com.cn/imageList/json.php?startDate=$clock&endDate=$clock",
	'jxremote' => "http://nfs2.jiangxi.rimag.com.cn/imageList/json.php?startDate=$clock&endDate=$clock",
	'bjcloud' => "http://nfs.cloud.beijing.rimag.com.cn/imageList/json.php?startDate=$clock&endDate=$clock"
);

$Temp = array();
foreach ($Url as $key => $value) {
    $Array = json_decode(file_get_contents("$value"),true);
    $Info = array_slice($Array['list'],0,10);
    //print_r($Info);
    $Temp = array_merge($Temp,$Info);
 
}

$sss = array_reverse($Temp);
$str = json_encode(array("list" => $sss));
file_put_contents("$dir/data.json","$str");

/*
	if($code == 0){

        $RimagArray = curl($Url,$Temp);
    }elseif($code == 1){

        $RimagArray = curl($Url,$Temp);
                                foreach ($RimagArray as $key => $value) {
                                    //echo $value['CREATION_DTTM'] . "\n";
                                    $times = strtotime("now")-strtotime($value['CREATION_DTTM']);
                                    $minute = round($times/60);
                                    if($minute < 10){
                                        $str = json_encode($value,true);
                                        file_put_contents("$dir/cookie.txt",$str,FILE_APPEND);
            }
    }

	}else{
           echo '新建文件';
	}
    */
