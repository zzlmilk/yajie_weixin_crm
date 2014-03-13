<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-13 11:09:10
         compiled from "/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/user/userList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1031163075532121568dfd04-25004126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fa0d02d05ed00ff3bcbf8f7c03cae976c1c2bda' => 
    array (
      0 => '/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/user/userList.tpl',
      1 => 1394603459,
    ),
  ),
  'nocache_hash' => '1031163075532121568dfd04-25004126',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<?php  $_smarty_tpl->tpl_vars['userInfo1'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userInfo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['userInfo1']->key => $_smarty_tpl->tpl_vars['userInfo1']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['userInfo1']->key;
?>
    name:<?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_name'];?>

    phone:<?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_phone'];?>

    birthday:<?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['birthday'];?>

    money:<?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_money'];?>

    integration:<?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_integration'];?>

    edit:<a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=userEdit&userId=<?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_id'];?>
"><button >编辑</button></a>
    <br>
<?php }} ?>
