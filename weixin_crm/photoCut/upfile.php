<?php
include '../config/defined.php';
/**********  仅测试程序 **********/


$savePath = GIFTIMAGEDIR;  //图片存储路径
$savePicName = time();  //图片存储名称


$file_src = $savePath.$savePicName."_src.jpg";
$filename162 = $savePath.$savePicName.".jpg"; 
//$filename48 = $savePath.$savePicName."_48.jpg"; 
//$filename20 = $savePath.$savePicName."_20.jpg";    

$src=base64_decode($_POST['pic']);
$pic1=base64_decode($_POST['pic1']);   
//$pic2=base64_decode($_POST['pic2']);  
//$pic3=base64_decode($_POST['pic3']);  

if($src) {
	file_put_contents($file_src,$src);
}

file_put_contents($filename162,$pic1);
//file_put_contents($filename48,$pic2);
//file_put_contents($filename20,$pic3);

$rs['status'] = 1;
$rs['picUrl'] = $savePicName.".jpg";
//$rs["fileName"]=$savePicName.".jpg"; 
print json_encode($rs);

?>
