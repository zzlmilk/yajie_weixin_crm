<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-24 12:29:11
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/order/orderAdd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1566598482532fb49782ece0-27510350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf828b9e23155e41696b4ac0242fb9a5f814379e' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/order/orderAdd.tpl',
      1 => 1395634259,
    ),
  ),
  'nocache_hash' => '1566598482532fb49782ece0-27510350',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
<meta name="viewport" content="width=device-width,user-scalable=yes" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<style>
    .userMangerTitle{
        color: rgb(91,91,91);
         font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }
    .errorMessage{
        width: 300px;
        margin: 0 auto;
        display: none;
    }
    .labelWidth{
        width: auto !important;
    }
    .inputWidth{
        width: 150px;
    }
</style>

<div class="userMangerTitle">新增订单</div>
<div id="errorMessage" class="alert alert-danger errorMessage"></div>

<div style="margin-left:15px;margin-top:15px;">
    <div style="width: 300px; margin: 0 auto;">
        <form class="form-horizontal" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=order&functionname=orderAdd" method="post">
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">预约日期：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="" name="orderTime" id="orderTime">
                </div>
            </div>
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">指定预约：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="" name="appointment_object"  id="appointment_object">
                </div>
            </div>
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">预约备注：</label>
                <div class="col-sm-2">
                    <input type="text" value="" class="form-control inputWidth" name="orders_remarks" id="orders_remarks">
                </div>
            </div>
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth"> 预约项目：</label>
                <div class="col-sm-2">
                    <select name="merchandise_id" id='merchandise_id' class="form-control inputWidth">
                        <?php  $_smarty_tpl->tpl_vars['merchandise'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('merchandiseIteams')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['merchandise']->key => $_smarty_tpl->tpl_vars['merchandise']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['merchandise']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['merchandise']->value['merchandise_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['merchandise']->value['merchandise_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['merchandise']->value['merchandise_money'];?>
 元</option>
                        <?php }} ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">预约电话：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="" name="userPhone"  id="userPhone">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">预约人数：</label>
                <div class="col-sm-2">
                    <input type="text" value="" class="form-control inputWidth" name="order_number"  id="order_number">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">是否支付：</label>
                <div class="col-sm-2">
                    <select name="order_pay_state" id='order_pay_state' class="form-control inputWidth">
                        <option value="0">未支付</option>
                        <option value="1">已支付</option>
                    </select>
                </div>
            </div>
            <p style="text-align: center;"><button id="addButton" class="btn btn-info">确认添加</button></p>
        </form>
    </div>
</div>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script>
    $("#addButton").click(function(){
    $("#errorMessage").hide();
    $("#errorMessage").html();
    var errorMessage="";
    var alertFlag=false;
    if($("#userName").val()==""){
    errorMessage+="用户名字不能为空 <br>";
    alertFlag=true;
}
if($("#userPhone").val()==""){
errorMessage+="手机号码不能为空 <br>";
alertFlag=true;
}
else if(!getMobilPhoneRegex($("#userPhone").val())){
errorMessage+="手机号码错误 <br>";
alertFlag=true;
}
if($("#orderTime").val()==""){
errorMessage+="时间不能为空 <br>";
alertFlag=true;
}else if(!getDateTimeRegex($("#orderTime").val())){
errorMessage+="时间格式错误(yyyy-mm-dd HH:ii) <br>";
alertFlag=true;
}

if(!getIntRegex($("#order_number").val())||$("#order_number").val()<0){
errorMessage+="人数必须为数字或者大于0 <br>";
alertFlag=true;
}
if(alertFlag){ 
$("#errorMessage").show();
$("#errorMessage").html(errorMessage);
return false;
}
})
     
</script>
