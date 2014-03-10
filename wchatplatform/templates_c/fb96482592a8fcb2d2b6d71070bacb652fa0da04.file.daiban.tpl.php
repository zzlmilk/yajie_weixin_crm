<?php /* Smarty version Smarty-3.0-RC2, created on 2014-02-27 10:34:09
         compiled from "/web/www/wchatplatform/templates/Company/daiban.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1133145632530f14a19ed8d0-70441351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb96482592a8fcb2d2b6d71070bacb652fa0da04' => 
    array (
      0 => '/web/www/wchatplatform/templates/Company/daiban.tpl',
      1 => 1393496937,
    ),
  ),
  'nocache_hash' => '1133145632530f14a19ed8d0-70441351',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

 <!DOCTYPE> 
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
     <title>代办</title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 </head>

<style>
body{
	font-size:62.5%;
}

td{
	border: solid 1px #fff;
	
}
.taskStyle{
	width: 15%;
}
.contentStyle{
width: 45%;
}
.timeLimitStyle{
width: 15%;
}
.completionStyle{
width: 30%;
}

tr{
	 background:rgb(232,234,239);
}
tr:nth-child(2n)
{
    background:rgb(205,210,222); 
}
 tr{
    background: expression((this.sectionRowIndex % 2 == 0) ? "#FFF" : "rgb(205,210,222)" );
} 
td{

	font-size: 3em;
	height: 2.5em;
	text-align: center;
		/*font-weight: bolder;*/
} 

/*a{
	color: rgb(250,127,44);
	text-decoration: underline;
}*/
</style>

 <body>
 		<div style=" border: solid 1px #fff">
 			<img style="width: 10em; height: 10em; margin-bottom: 2em; margin-top: 2em; margin-left: 2em; margin-right: 4em; float: left;" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/image/wodetixing.png">
 			<div style="font-size: 5em; color: rgb(43,105,127); font-weight: bold; margin-top: 1.3em;">我的提醒</div>
 		</div>

        <table style="width: 100%; margin-top: 2em; ">

			<tr style=" background:rgb(53,89,138); color: #fff; height: 7em; font-size: 1em; font-weight: bold; ">
				<td class="taskStyle" style=" height: 2em;">任务</td>
				<td class="contentStyle" style="text-align: center; height: 2em;">内容</td>
				<td class="timeLimitStyle" style=" height: 2em;">时限</td>
				<td class="completionStyle" style=" height: 2em;">完成情况</td>
			</tr>

			<tr>
				<td>345</td>
				<td>月度拜访客户</td>
				<td>1月</td>
				<td>45%</td>
			</tr>

			<tr>
				<td>346</td>
				<td><a>李连杰</a>地址更正</td>
				<td>1周</td>
				<td>100%</td>
			</tr>
			<tr>
				<td>347</td>
				<td><a>竞争</a>消息录入</td>
				<td>1月</td>
				<td>0%</td>
			</tr>
			<tr>
				<td><a>348</a></td>
				<td>李连杰 存款余额快速下降</td>
				<td>当日</td>
				<td>50%</td>
			</tr>
			<tr>
				<td>349</td>
				<td>争取客户理财</td>
				<td>当日</td>
				<td>0%</td>
			</tr>




		</table>

 </body>
 </html>