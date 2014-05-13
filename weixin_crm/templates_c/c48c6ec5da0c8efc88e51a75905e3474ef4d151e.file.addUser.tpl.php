<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-05 13:18:43
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/user/addUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202143477253671f337c7e38-67771571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c48c6ec5da0c8efc88e51a75905e3474ef4d151e' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/user/addUser.tpl',
      1 => 1396342134,
    ),
  ),
  'nocache_hash' => '202143477253671f337c7e38-67771571',
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
<style>
    .labelWidth{
        width: auto !important;
    }
    .inputWidth{
        width: 170px;
    }
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
</style>
<div class="userMangerTitle">添加用户</div>
<div id="errorMessage" class="alert alert-danger errorMessage"></div>
<div style="margin-left:15px;margin-top:15px;">
    <div style="width: 370px; margin: 0 auto;">
        <form class="form-horizontal" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=userManage" method="post">
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">客户姓名：</label>
                <div class="col-sm-2">
                    <input class="form-control inputWidth" type="text" value="" name="user_name" id="userName">
                </div>
            </div> 
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">客户电话：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="" name="user_phone" id="userPhone">
                </div>
            </div> 
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">客户生日：</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control " style="width: 30%; display: inline-block" value="<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('userData')->value['birthday'],"%Y");?>
"  id="birthdayFullYear">-
                    <input type="text" class="form-control " style="width: 23%;display: inline-block" value="<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('userData')->value['birthday'],"%m");?>
"  id="birthdayMonth">-
                    <input type="text" class="form-control " style="width: 23%;display: inline-block" value="<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('userData')->value['birthday'],"%d");?>
"  id="birthdayDay">
                    <input type="hidden" class="inputWidth" id="userBirthday" name="birthday" value="">
                </div>
            </div>
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">客户性别：</label>
                <div class="col-sm-2">
                    <select name="sex" id='sex' class="form-control inputWidth">
                        <option value="1" selected="selected">男</option>
                        <option value="2">女</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth"> 客户余额：</label>
                <div class="col-sm-2">
                    <input class="form-control inputWidth" type="text" value="0" name="user_money"  id="userMoney"> 
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">客户积分：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="0" name="user_integration"  id="userIntegration">
                </div>
            </div>
            <p style="text-align: center;"><button id="addButton" type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info">确认添加</button></p>

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
</div>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script>
    $("#addButton").click(function(){
    var birthdayDate=$("#birthdayFullYear").val()+"-"+$("#birthdayMonth").val()+"-"+$("#birthdayDay").val()
    $("#userBirthday").val(birthdayDate);
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
if($("#userBirthday").val()==""){
errorMessage+="生日不能为空 <br>";
alertFlag=true;
}
else if(!getDateRegex($("#userBirthday").val())){
errorMessage+="日期格式错误(yyyy-mm-dd) <br>";
alertFlag=true;
}

if(!getIntRegex($("#userMoney").val())||$("#userMoney").val()<0){
errorMessage+="金额必须为数字或者大于0 <br>";
alertFlag=true;
}
if(!getIntRegex($("#userIntegration").val())||$("#userIntegration").val()<0){
errorMessage+="积分必须为数字或者大于0 <br>";
alertFlag=true;
}
if(alertFlag){ 
$("#errorMessage").show();
$("#errorMessage").html(errorMessage);
return false;
}else{
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
$("#userPhone").on("input",function(){
if(!getIntRegex($(this).val())){
var cutString=$(this).val().substr(0, ($(this).val().length)-1);

$("#userPhone").val(cutString);
}

}); 
</script>
