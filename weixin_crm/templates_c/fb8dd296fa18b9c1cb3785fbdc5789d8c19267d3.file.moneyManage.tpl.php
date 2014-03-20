<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-13 11:09:12
         compiled from "/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/user/moneyManage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1325532604532121587d6dd6-25514278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb8dd296fa18b9c1cb3785fbdc5789d8c19267d3' => 
    array (
      0 => '/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/user/moneyManage.tpl',
      1 => 1394603459,
    ),
  ),
  'nocache_hash' => '1325532604532121587d6dd6-25514278',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<form action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=moneyConturl" method="post">
<?php  $_smarty_tpl->tpl_vars['moneyUserInfo1'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userInfo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['moneyUserInfo1']->key => $_smarty_tpl->tpl_vars['moneyUserInfo1']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['moneyUserInfo1']->key;
?>
    <div>
        name:<span class="userName"><?php echo $_smarty_tpl->tpl_vars['moneyUserInfo1']->value['user_name'];?>
</span>
        money:<?php echo $_smarty_tpl->tpl_vars['moneyUserInfo1']->value['user_money'];?>

        <button class="recharge">充值</button>
        <button class="deductMoney">扣款</button>
        <input type="hidden" class="userIdValue" value="<?php echo $_smarty_tpl->tpl_vars['moneyUserInfo1']->value['user_id'];?>
">
    </div>
    <br>
<?php }} ?>

    <div id="moneyConturl" style="display: none; border: #000 1px solid;position: fixed; left: 30%;top: 30%; background-color: #eaeaea; width:300px;height: 200px;">
        <div style="width:200px; margin: 0 auto;">
            <h1 id="moneyConturlType"></h1>

            <p><span>客户名：</span><span id="userName"></span></p>
            <p><span>金额：</span><input type="text" name="moneyNumber" placeholder="请填写金额" value=""></p>
            <input type="hidden" value="none" id="userId" name="userId">
            <input type="hidden" value="error" id="moneyType" name="moneyType">
            <button onclick="submit();">确认提交</button>

        </div>
    </div>
</form>

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
<script>
    $(".recharge").click(function(){
    $("#moneyConturl").css("display","block");
    var userId=$(this).parent().find(".userIdValue").val();
    var userName=$(this).parent().find(".userName").html();
    $("#userId").val(userId);
    $("#userName").html(userName);
    $("#moneyConturlType").html("为用户充值");
    $("#moneyType").val("recharge");
    return false;
});
$(".deductMoney").click(function(){
$("#moneyConturl").css("display","block");
var userId=$(this).parent().find(".userIdValue").val();
var userName=$(this).parent().find(".userName").html();
$("#userId").val(userId);
$("#userName").html(userName);
$("#moneyConturlType").html("为用户扣款");
$("#moneyType").val("deductMoney");
return false;
});
</script>
