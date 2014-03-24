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
    <div style="width: 300px; margin: 0 auto;">
        <form class="form-horizontal" action="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userManage" method="post">
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
<script src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
<script src="{$WebSiteUrl}/js/rexexTest.js"></script>
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
$("#userPhone").on("input",function(){
if(!getIntRegex($(this).val())){
var cutString=$(this).val().substr(0, ($(this).val().length)-1);

$("#userPhone").val(cutString);
}
}); 
</script>
