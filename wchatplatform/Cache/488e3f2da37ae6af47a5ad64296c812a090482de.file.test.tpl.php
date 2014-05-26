<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-23 14:50:07
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/Tpl/Jiantang/Home/test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1228337224537eef9fb4f789-07733094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '488e3f2da37ae6af47a5ad64296c812a090482de' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/Tpl/Jiantang/Home/test.tpl',
      1 => 1400825441,
    ),
  ),
  'nocache_hash' => '1228337224537eef9fb4f789-07733094',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
 body{
            Font-size=62.5%;
        }
.aaaa{

	font-size: 10em;
}
</style>

<div class='aaaa'>

	<a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=game&v=ativating&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>问卷</a>

	<a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=game&v=activity&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>活动</a>

	
	<a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=user&v=userCenter&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>个人用户</a>

	<a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=exchange&v=getExchangeList&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>兑换</a>

	<a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=user&v=userExpense&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>消费记录</a>

	


</div>