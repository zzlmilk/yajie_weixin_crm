<?php
//此文件用于快速测试UTF8编码的文件是不是加了BOM，并可自动移除
$basedir="."; //修改此行为需要检测的目录，点表示当前目录
$auto=1; //是否自动移除发现的BOM信息。1为是，0为否。
//link: http://www.jbxue.com
//以下不用改动
if ($dh = opendir($basedir)) {
while (($file = readdir($dh)) !== false) {
if ($file!='.' && $file!='..' && !is_dir($basedir."/".$file))
echo "filename: $file ".checkBOM("$basedir/$file")." <br>";
}
closedir($dh);
}
function checkBOM ($filename) {
global $auto;
$contents=file_get_contents($filename);
$charset[1]=substr($contents, 0, 1);
$charset[2]=substr($contents, 1, 1);
$charset[3]=substr($contents, 2, 1);
if (ord($charset[1])==239 && ord($charset[2])==187 && ord($charset[3])==191) {
if ($auto==1) {
$rest=substr($contents, 3);
rewrite ($filename, $rest);
return ("<font color=red>BOM found, automatically removed.</font>");
} else {
return ("<font color=red>BOM found.</font>");
}
}else
return ("BOM Not Found.");
}
function rewrite ($filename, $data) {
$filenum=fopen($filename,"w");
flock($filenum,LOCK_EX);
fwrite($filenum,$data);
fclose($filenum);
}
?>