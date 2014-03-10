<?php /* Smarty version Smarty-3.0-RC2, created on 2014-02-27 10:34:28
         compiled from "/web/www/wchatplatform/templates/Company/tixingDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1189448833530f14b4358f37-83868365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aeb5d6b64315965496a1e205fd9f2c9e4562b60' => 
    array (
      0 => '/web/www/wchatplatform/templates/Company/tixingDetail.tpl',
      1 => 1393496820,
    ),
  ),
  'nocache_hash' => '1189448833530f14b4358f37-83868365',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

 <!DOCTYPE> 
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
     <title></title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 </head>
 <style>
.warp{
/*	border: solid 1px red;*/
	width: 100%;
}

.tiXingImg{
	width: 7em; 
	height: 7em; 
	margin-bottom: 2em; 
	margin-top: 2em; 
	margin-left: 2em; 
	margin-right: 7em; 
	float: left;
}
.tiXingText{
font-size: 5em;
color: rgb(43,105,127);
font-weight: bold;
margin-top: 2em;
/* border: solid 1px red; */
width: 40%;
float: left;
font-size: 3em;
margin-left: -1.8em;
}
.editWarp{
margin-top: 5.5em;
float: right;
margin-right: 2em;
}
.btnEdit{
width: 3.8em;
height: 1.8em;
text-indent: -0.3em;
border-radius: 0.2em;
-webkit-border-radius: 0.2em;
-moz-border-radius: 0.2em;
border: solid 4px rgb(58,111,132);
background-color: #fff;
color: rgb(58,111,132);
font-weight: bolder;
font-size: 2.7em;
}

.content{
/*	border: solid 1px red;*/
height: 2em;
line-height: 2em;
text-indent: 2em;
font-size: 2.5em;
font-weight: bolder;
}
.startOverTime{
	color: rgb(147,147,147);
	height: 2em;
line-height: 2em;
text-indent: 2.5em;
font-size: 2em;
}
.borderStyle{
	border-bottom: solid 3px rgb(172,172,172); 
	margin-left: 4em; 
	margin-top: 3em;
}
.jinduImg{
	margin: 0 auto;
	height: 15em;
	width: 15em;
}
 </style>

	 <body>
	 		<div class="warp">
			 	<div style=" border: solid 1px #fff">
		 			<img class="tiXingImg" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/image/wodetixing.png">
		 			<div class="tiXingText">我的提醒</div>
		 			<div class="editWarp">
		 				<button type="button" class="btnEdit">编&nbsp;辑</button>
		 			</div>
		 		</div>
		 		<div class="content" style=" margin-top: 6em;">标题：李连杰地址更正</div>
		 		<div class="content">觉得说近段时间奥德赛拉拉裤</div>
		 		<div class="content">精神可嘉来得及数据库的拉开的来所</div>
		 		<div class="content">近段时间的楼。</div>

		 		<div class="startOverTime" style=" margin-top: 1em;">开始：2014年2月26日 周三</div>
		 		<div class="startOverTime">结束：2014年2月28日 周五</div>

		 		<div class="borderStyle"></div>

		 		<div style=" margin-top: 3em; text-align: center;">
		 			<img class="jinduImg" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/image/jindu.png">
		 			<div style=" color: rgb(62,69,77); text-align: center; font-weight: bolder; margin-top: -9em;">
			 			<div>80%</div>
			 			<div>已完成</div>
		 		    </div>
		 		</div>



	 		</div>

	 </body>
 </html>