<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-20 09:44:08
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/Tpl/Inhouse/Home/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1434124038537ab3688219d0-10373514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4d795129ac741ff37ce36e0511524a1ba9e9eb2' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/Tpl/Inhouse/Home/index.tpl',
      1 => 1400136279,
    ),
  ),
  'nocache_hash' => '1434124038537ab3688219d0-10373514',
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
&a=user&v=ativating&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>绑定</a>

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