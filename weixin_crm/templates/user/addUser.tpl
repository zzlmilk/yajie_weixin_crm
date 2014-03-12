<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">    
<div style="margin-left:15px;margin-top:15px;">
    <form action="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userManage" method="post">
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
<script src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
<script src="{$WebSiteUrl}/js/rexexTest.js"></script>
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

    if(!getIntRegex($("#userMoney").val()||$("#userMoney").val()<0)){
        errorMessage+="金额必须为数字或者大于0 \r\n";
        alertFlag=true;
    }
        if(!getIntRegex($("#userIntegration").val()||$("#userIntegration").val()<0)){
        errorMessage+="积分必须为数字或者大于0 \r\n";
        alertFlag=true;
    }
if(alertFlag){ 
alert(errorMessage);
return false;
}
})
     
</script>
