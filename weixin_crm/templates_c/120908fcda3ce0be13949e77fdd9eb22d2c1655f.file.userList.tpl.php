<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-14 12:15:03
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/user/userList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10474859315372edc751a4e1-12892209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '120908fcda3ce0be13949e77fdd9eb22d2c1655f' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/user/userList.tpl',
      1 => 1400040542,
    ),
  ),
  'nocache_hash' => '10474859315372edc751a4e1-12892209',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/yajie_weixin_crm/weixin_crm/Smarty/libs/plugins/modifier.date_format.php';
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/flat/blue.css" rel="stylesheet">
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
        width: 30%;
        margin-left: 45px;
        height: 25px;
        line-height: 0px;
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
    }
    .selectBar{
        padding-left: 45px;
    }
</style>
<div class="navBarStyle">
    当前位置：用户管理 > 客户信息
</div>
<div style="height: 50px;"></div>
<form action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=seachUsers" method="post">

    <div style="">

        <div class="selectBar">
            <input type="text" class="selectText"  placeholder="请输入手机号查询" id="selectText" name="selectText"><button class="btn" style="background-color: skyblue;color:white;border-radius:0px;height: 32px;margin-top: -3px;" type="submit">查询</button>
            &nbsp;&nbsp;&nbsp;<label for="inputPassword3" class="">筛选排序：</label><input type="radio" name="sortType" checked id="point" value="point">&nbsp;<label for="point" class="control-label">积分</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sortType" id="money" value="money">&nbsp;<label for="money" class="control-label">余额</label>
        </div>
    </div>
    <div class="sortBar"></div>
    <?php if ($_smarty_tpl->getVariable('errorMessage')->value!=''){?>
        <div class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label">aaaa<?php echo $_smarty_tpl->getVariable('errorMessage')->value;?>
</label></div>
    <?php }?>

</form>

<div class="dataArea">
    <table class="table table-bordered ">
        <tr><th></th><th>姓名</th><th>电话</th><th>生日</th><th>余额</th><th>积分</th><th>编辑</th></tr>
        <?php  $_smarty_tpl->tpl_vars['userInfo1'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userInfo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['userInfo1']->key => $_smarty_tpl->tpl_vars['userInfo1']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['userInfo1']->key;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_name'];?>
</td>
                <td class="userPhone"><?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_phone'];?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userInfo1']->value['birthday'],"%Y-%m-%d");?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_money'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_integration'];?>
</td>
                <td><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=userEdit&userId=<?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_id'];?>
">编辑</a></td>

            </tr>
        <?php }} ?>
    </table>
</div>
<div class="pageHeight"></div>
<div class="pageStyle"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</div> 
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/icheck.min.js"></script>
<script>
    $('input').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue',
    increaseArea: '20%' // optional
}); 
$("#selectText").on("input",function(){
if(!getIntRegex($(this).val())){
var cutString=$(this).val().substr(0, ($(this).val().length)-1);

$("#selectText").val(cutString);
}
});

$(".userPhone").each(function(){
var phoneNumber= $(this).html();
var changeValue="";
changeValue=phoneNumber.substr(0,3)+"-"+phoneNumber.substr(4,3)+"-"+phoneNumber.substr(6);
$(this).html(changeValue);
  
});
</script>
