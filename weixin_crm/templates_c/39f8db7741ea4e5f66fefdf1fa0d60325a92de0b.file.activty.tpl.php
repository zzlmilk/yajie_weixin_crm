<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-17 10:43:54
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/activty/activty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8668186305376ccea669d06-10447795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39f8db7741ea4e5f66fefdf1fa0d60325a92de0b' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/activty/activty.tpl',
      1 => 1400141642,
    ),
  ),
  'nocache_hash' => '8668186305376ccea669d06-10447795',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/yajie_weixin_crm/weixin_crm/Smarty/libs/plugins/modifier.date_format.php';
?><link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/minimal/blue.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/crm_table_style.css" rel="stylesheet">

<style>
    body{
        overflow-x: hidden;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }
    .selectBar{

        text-align: center;  

    }
    .dataArea{
        text-align: left;
        width: 60%;
        min-width: 500px;
        margin: 0 auto;
        height: 190px;
    }
    .sortBar{
        width: 30%;
        margin: 0 auto;
    }
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
        vertical-align:middle !important;
    }
    .groupInput{
        width: 30%;
        margin: 0 auto;
    }
</style>

<div class="navBarStyle">
    当前位置：任务管理 > 活动列表
</div>


<div style="height: 50px;"></div>

<div class="dataArea">
    <table class="table crmTable table-bordered">
        <tr><th>活动名称</th><th>结束时间</th><th>编辑</th></tr>
        <?php  $_smarty_tpl->tpl_vars['activtyAlls'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('activtyAll')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['activtyAlls']->key => $_smarty_tpl->tpl_vars['activtyAlls']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['activtyAlls']->key;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['activtyAlls']->value['activity_name'];?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['activtyAlls']->value['activity_end_time'],'%Y-%m-%d');?>
</td>
                <td><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=activty&functionname=activtyEdit&id=<?php echo $_smarty_tpl->tpl_vars['activtyAlls']->value['activity_id'];?>
">编辑</a></td>

            </tr>
        <?php }} ?>
    </table>
</div>
<div style="text-align: center"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</div> 
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/icheck.min.js"></script>
<script>
    $('input').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue',
    increaseArea: '20%' // optional
}); 
$("#selectText").on("input",function(){
if(!getIntRegex($(this).val())){
var cutString=$(this).val().substr(0, ($(this).val().length)-1);

$("#selectText").val(cutString);
}
});
</script>
