<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-15 11:41:38
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176029357653743772656e20-22771760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0dbf2c915bba0ea66d1c43f97c323c6564c75ba' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/top.tpl',
      1 => 1400125290,
    ),
  ),
  'nocache_hash' => '176029357653743772656e20-22771760',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/yajie_weixin_crm/weixin_crm/Smarty/libs/plugins/modifier.date_format.php';
?><body class='boby'>
<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/<?php echo $_smarty_tpl->getVariable('source')->value;?>
_css.css" rel="stylesheet" type="text/css">
<div class='topBackGround'>

	<div style='float: left; width: 628px; height: 100%;'>&nbsp;</div>

	<div style='position: absolute; top:10px; left: 1140px; '>

		<img src='<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/lock.png'>
		<a style='color: white;font-size: 14px;display: inline-block' href='<?php echo $_smarty_tpl->getVariable('URLHANDLER')->value;?>
/process.php?login=0' class=''>安全退出</a>
	</div>

	<div style='position: absolute; top: 28px; left: 1154px; '>

		<img src='<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/exit.png'>
	</div>


	<div style='position: absolute; margin-left: 430px; margin-top: 46px;' class='banner'>

		<div style='margin-left: 62px; margin-top: 18px;'>

			<div style='width: 571px; margin: 0 auto;float: left;'>

			    <span style='width: 18px;'>当前用户:</span>
			【<?php echo $_smarty_tpl->getVariable('uname')->value;?>
】<span style='display: inline-block; width: 15px'>&nbsp;</span><span style='width: 18px;'>登录:</span>【<?php echo $_smarty_tpl->getVariable('account')->value;?>
】<span style='display: inline-block; width: 15px'>&nbsp;</span><span style='width: 18px;'>角色:</span>【系统管理员】 
		   </div>


			<div style='float: left;'>

				<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
<span style='width: 17px; display: inline-block;'>&nbsp;</span><?php echo $_smarty_tpl->getVariable('week')->value;?>
 
			</div>

	    </div>

		
		
	</div>


</div>


</body>