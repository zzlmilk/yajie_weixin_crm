<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-19 13:36:25
         compiled from "/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/user/addUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24251968453292cd9b6c083-11735898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6afc2a93682b16be6057fa1a1ee4a8db8130e66' => 
    array (
      0 => '/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/user/addUser.tpl',
      1 => 1395193105,
    ),
  ),
  'nocache_hash' => '24251968453292cd9b6c083-11735898',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">    
<div style="margin-left:15px;margin-top:15px;">
    <form action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=userManage" method="post">
        <p>客户姓名：<input type="text" value="" name="user_name" id="userName"></p> 
        <p>客户电话：<input type="text" value="" name="user_phone" id="userPhone"></p>
        <p>客户生日：<input type="text" value="" name="birthday" id="userBirthday"></p>
        <p>客户性别：<select name="sex" id='sex'>
                <option value="1" selected="selected">男</option>
                <option value="2">女</option>
            </select></p>
        <p>客户余额：<input type="text" value="0" name="user_money"  id="userMoney"></p>
        <p>客户积分：<input type="text" value="0" name="user_integration"  id="userIntegration"></p>
        <p><button id="addButton">确认添加</button></p>
    </form>
</div>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script>
    $("#addButton").click(function(){
    var errorMessage="";
    var alertFlag=false;
    if($("#userName").val()==""){
    errorMessage+="用户名字不能为空 \r\n";
    alertFlag=true;
}
if($("#userPhone").val()==""){
errorMessage+="手机号码不能为空 \r\n";
alertFlag=true;
}
else if(!getMobilPhoneRegex($("#userPhone").val())){
errorMessage+="手机号码错误 \r\n";
alertFlag=true;
}
if($("#userBirthday").val()==""){
errorMessage+="生日不能为空 \r\n";
alertFlag=true;
}
else if(!getDateRegex($("#userBirthday").val())){
errorMessage+="日期格式错误(yyyy-mm-dd) \r\n";
alertFlag=true;
}

    if(!getIntRegex($("#userMoney").val())||$("#userMoney").val()<0){
        errorMessage+="金额必须为数字或者大于0 \r\n";
        alertFlag=true;
    }
        if(!getIntRegex($("#userIntegration").val())||$("#userIntegration").val()<0){
        errorMessage+="积分必须为数字或者大于0 \r\n";
        alertFlag=true;
    }
if(alertFlag){ 
alert(errorMessage);
return false;
}
})
     
</script>
