<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-20 12:09:32
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/user/addUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1441890654532a69fcf40452-64942390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c48c6ec5da0c8efc88e51a75905e3474ef4d151e' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/user/addUser.tpl',
      1 => 1395286473,
    ),
  ),
  'nocache_hash' => '1441890654532a69fcf40452-64942390',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">    
<style>
    .labelWidth{
        width: auto !important;
    }
    .inputWidth{
        width: 150px;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 25px;
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
    <div style="width: 300px; margin: 0 auto;">
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
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="" name="birthday" id="userBirthday">
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
            <p style="text-align: center;"><button id="addButton" class="btn btn-info">确认添加</button></p>
        </form>
    </div>
</div>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
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
}
})
     
</script>
