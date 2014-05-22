<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-22 17:58:34
         compiled from "/web/www/yajie_weixin_crm/weixin_crm//templates/inhouse/user/AbnormalUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1086352923537dca4a2a5c23-53358697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9d22e8861883c91c9994fc57ad4c33e8cd554ae' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm//templates/inhouse/user/AbnormalUser.tpl',
      1 => 1400752360,
    ),
  ),
  'nocache_hash' => '1086352923537dca4a2a5c23-53358697',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
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

    .sortBar{
        width: auto;
        margin-left: 25px;
        height: 25px;
        line-height: 0px;
        margin-right: 45px;
        /*        margin: 0 auto;*/
    }
    table tr>th{
        text-align: center;
        background-color: #eee;
    }
    table tr>td{
        text-align: center;
        vertical-align:middle !important;
        border-bottom-color: #D5E3E7 !important;
    }
    table tr:nth-of-type(even){
        background-color: #F9FCFD;
    }
    .selectText{
        height: 32px;
        border-radius:0px; 
        border: #c5c5c5 solid 1px;
        box-shadow: 0px 2px 2px #888 inset; 
        padding-left: 10px;
        width: 224px;
    }
    .selectBar{
        padding-left: 25px;
    }
</style>
<div class="navBarStyle">
    当前位置：任务管理 > 异常用户数据
</div>

<div style='height: 10px;'>&nbsp;</div>
<div class="dataArea" style='height: auto;'>

    <h1>未处理的异常用户数据</h1>
    <table class="table table-bordered ">
        <tr><th style="width: 51px;"></th><th  style="width: 121px;">姓名</th><th style="width: 185px;">电话</th><th style="width: 150px;">卡号</th><th style="width: 150px;">公司编号</th><th>状态</th></tr>
        <?php  $_smarty_tpl->tpl_vars['infos'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('info')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['infos']->key => $_smarty_tpl->tpl_vars['infos']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['infos']->key;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['infos']->value['user_name'];?>
</td>
                <td class="userPhone"><?php echo $_smarty_tpl->tpl_vars['infos']->value['user_phone'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['infos']->value['user_card'];?>
</td>

                <td><?php echo $_smarty_tpl->tpl_vars['infos']->value['company_code'];?>
</td>


                <?php if ($_smarty_tpl->tpl_vars['infos']->value['user_state']==0){?>

                <td><a style='color: red;' href='<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=AbnormalUserStateUpdate&id=<?php echo $_smarty_tpl->tpl_vars['infos']->value['user_id'];?>
'>标记为已处理</a></td>

                <?php }else{ ?>

                <td  style='color: blue;'>已处理</td>


                <?php }?>
                

            </tr>
        <?php }} ?>
    </table>
</div>
<div class="pageStyle"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</div> 

<div style='height: 10px;'>&nbsp;</div>
<div class="dataArea">

    <h1>已处理的异常用户数据</h1>
    <table class="table table-bordered ">
        <tr><th style="width: 51px;"></th><th  style="width: 121px;">姓名</th><th style="width: 185px;">电话</th><th style="width: 150px;">卡号</th><th style="width: 150px;">公司编号</th><th>状态</th></tr>
        <?php  $_smarty_tpl->tpl_vars['infos'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('info_state')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['infos']->key => $_smarty_tpl->tpl_vars['infos']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['infos']->key;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['infos']->value['user_name'];?>
</td>
                <td class="userPhone"><?php echo $_smarty_tpl->tpl_vars['infos']->value['user_phone'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['infos']->value['user_card'];?>
</td>

                <td><?php echo $_smarty_tpl->tpl_vars['infos']->value['company_code'];?>
</td>



                <td  style='color: blue;'>已处理</td>

            </tr>
        <?php }} ?>
    </table>
</div>
<div class="pageStyle"><?php echo $_smarty_tpl->getVariable('pages_state')->value;?>
</div> 

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/icheck.min.js"></script>
<script>

    $(".userPhone").each(function(){
var phoneNumber= $(this).html();
var changeValue="";
changeValue=phoneNumber.substr(0,3)+"-"+phoneNumber.substr(3,3)+"-"+phoneNumber.substr(6);
$(this).html(changeValue);
  
});

</script>