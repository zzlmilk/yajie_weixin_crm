<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-22 17:33:28
         compiled from "/web/www/yajie_weixin_crm/weixin_crm//templates/jiantang/order/orderEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:428813204537dc4683c0117-22678264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '434dab86895dc160675ff6cf6d6d8c5aa0cf6f4e' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm//templates/jiantang/order/orderEdit.tpl',
      1 => 1398228674,
    ),
  ),
  'nocache_hash' => '428813204537dc4683c0117-22678264',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/yajie_weixin_crm/weixin_crm/Smarty/libs/plugins/modifier.date_format.php';
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
<meta name="viewport" content="width=device-width,user-scalable=yes" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">
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
<body>
    <div style="position: relative;left: 10px; top: 10px;"><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=order&functionname=getOrderlist"><button class="btn btn-primary">返回</button></a></div>
    <div class="userMangerTitle">修改与查看订单信息</div>
    <div id="errorMessage" class="alert alert-danger errorMessage"></div>
    <?php if ($_smarty_tpl->getVariable('errorFlag')->value==1){?>
        <div style="height: 20px;"></div>
        <div style="width: 300px; margin: 0 auto;">
            <form class="form-horizontal" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=order&functionname=orderUpdata" method="post">
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">预约日期：</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" readonly="" value="<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('orderData')->value['appointment_time'],"%Y-%m-%d %H:%M");?>
" name="orderTime" id="orderTime">
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">指定预约：</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" value="<?php echo $_smarty_tpl->getVariable('orderData')->value['appointment_object'];?>
" name="appointment_object" id="appointment_object">
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">预约项目：</label>
                    <div class="col-sm-2">
                        <select name="merchandise_id" id='merchandise_id' class="form-control inputWidth" >
                            <?php  $_smarty_tpl->tpl_vars['merchandiseIteams'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('merchandise')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['merchandiseIteams']->key => $_smarty_tpl->tpl_vars['merchandiseIteams']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['merchandiseIteams']->key;
?>
                                <?php if ($_smarty_tpl->getVariable('orderData')->value['merchandise_id']==($_smarty_tpl->tpl_vars['key']->value+1)){?>
                                    <option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['merchandiseIteams']->value['merchandise_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['merchandiseIteams']->value['merchandise_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['merchandiseIteams']->value['merchandise_money'];?>
 元</option>

                                <?php }else{ ?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['merchandiseIteams']->value['merchandise_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['merchandiseIteams']->value['merchandise_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['merchandiseIteams']->value['merchandise_money'];?>
 元</option>
                                <?php }?>     
                            <?php }} ?>
                        </select>
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3"  class="col-sm-2 control-label labelWidth">预约电话：</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" value="<?php echo $_smarty_tpl->getVariable('orderData')->value['user_phone'];?>
" name="user_phone"  id="userPhone">
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">
                        预约人数：
                    </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" value="<?php echo $_smarty_tpl->getVariable('orderData')->value['order_number'];?>
" name="order_number"  id="order_number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">是否支付：</label>
                    <div class="col-sm-2">
                        <select name="order_pay_state" id='order_pay_state' class="form-control inputWidth">
                            <?php if ($_smarty_tpl->getVariable('orderData')->value['order_pay_state']==0){?>
                                <option value="0" selected="selected">未支付</option>
                                <option value="1">已支付</option>
                            <?php }else{ ?>
                                <option value="0">未支付</option>
                                <option value="1" selected="selected">已支付</option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">预约备注：</label>
                    <div class="col-sm-2">
                        <textarea  class="form-control inputWidth" rows="3"name="orders_remarks" id="orders_remarks"><?php echo $_smarty_tpl->getVariable('orderData')->value['orders_remarks'];?>
</textarea>
                    </div>
                </div>
                <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('orderData')->value['order_code'];?>
" name="order_code" id="user_id">
                <p style="text-align: center;"> <button data-toggle="modal" data-target="#myModal" type="button" id="saveChangeButton" class="btn btn-info">保存修改</button></p>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" >
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">你确认修改这条信息么？</h4>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                <a id="checkButton" href=""><button type="submit" class="btn btn-primary">确认</button></a>
                                <input type="hidden" id="deleteUrl" value="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=exchangeItemDelete&ItemId="  />
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </form>
        </div>
    <?php }else{ ?>
        <?php echo $_smarty_tpl->getVariable('orderData')->value;?>
 <!-- 此处返回错误信息-->
    <?php }?>
</body>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/buttonDisable.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/bootstrap-datetimepicker.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/bootstrap-datetimepicker.zh-CN.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/timeClass.js"></script>
<script>
    $("#saveChangeButton").click(function(){
    $("#errorMessage").hide();
    $("#errorMessage").html();
    var errorMessage="";
    var alertFlag=false;
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
else{
$(".modal-body").html("");
var alertTitle=new Array();
var alertText=new Array();
var WarringStr ="";
//var textObject=$(this).parent().parent().find("td");
$(".labelWidth").each(function(index){
alertTitle[index]=$(this).html();
})
$(".inputWidth").each(function(index){
if(this.tagName=="SELECT"){
alertText[index]=$(this).find("option:selected").html();
}
else{
if($(this).val()==""){
alertText[index]="未填写";
}
else{
alertText[index]=$(this).val();
}
}
});

for (var i=0 ;i<alertTitle.length;i++){
WarringStr+="<div class='form-group'><label  class=' control-label labelWidth'>"+alertTitle[i]+"</label>"
+"<label  class='control-label labelWidth'>"+alertText[i]+"</label>"
+"</div>";
}
var deleteUrl=$("#deleteUrl").val();
$("#checkButton").attr("href", deleteUrl+alertText[6]);                
$(".modal-body").html(WarringStr);
}
})
//禁用按钮  
buttonDisable($("#saveChangeButton"));
//修改按钮结束
//数字验证
$("#userPhone").on("input",function(){
if(!getIntRegex($(this).val())){
var cutString=$(this).val().substr(0, ($(this).val().length)-1);

$("#userPhone").val(cutString);
}
});
$("#order_number").on("input",function(){
if(!getIntRegex($(this).val())){
var cutString=$(this).val().substr(0, ($(this).val().length)-1);

$("#order_number").val(cutString);
}
});
//日期选择
var nowDayTime=new Date();
nowDayTime.setHours(0);
nowDayTime.setMinutes(0);
nowDayTime.setSeconds(0);
var endDate= getDateTimeMessage(nowDayTime,2);
$("#orderTime").datetimepicker({
format: "yyyy-mm-dd hh:ii",
startDate:new Date(),
autoclose:true,
minView:0,
minuteStep:15,
forceParse:false,
language:"zh-CN"
});
</script>