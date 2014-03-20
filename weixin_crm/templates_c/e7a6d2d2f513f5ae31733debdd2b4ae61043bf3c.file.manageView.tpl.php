<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-19 13:36:24
         compiled from "/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/user/manageView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2072691158531ff5d339cf76-00357179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7a6d2d2f513f5ae31733debdd2b4ae61043bf3c' => 
    array (
      0 => '/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/user/manageView.tpl',
      1 => 1395193105,
    ),
  ),
  'nocache_hash' => '2072691158531ff5d339cf76-00357179',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<style>
    .seachInput{
        width: 340px;
        height: 30px;
    }
    .seachButton{
        height: 30px;
    }
    .userDateArea{
        padding-left: 25px;
        width:390px;
        margin: 0 auto;
        text-align: left;
        border: 1px solid #000;
    }
    .buttonStyle{
        width: 30px;
        height: 30px;
    }
    .numberSpan{
        width: 40px;
        display: inline-block;
    }
    .inlinDisplay{
        display: inline-block;
    }
</style>
<div style="text-align: center; padding-top: 100px;">
    <div>
        <input type="text" class="seachInput"  placeholder="请输入电话号码" id="userPhone"/>
        <button id="getUser" class="seachButton" accesskey="Enter">搜索</button>
    </div>
    <div style="margin-top: 50px; display: none;" id="userData">
        <div class="userDateArea">
            <p><div class="inlinDisplay">手机号：</div><div class="inlinDisplay" id="phoneNum"></div></p>
            <p><div class="inlinDisplay">剩余积分：</div><div id="points" class="numberSpan"></div><button id="pointsAdd" class="buttonStyle">+</button><button id="pointsMin" class="buttonStyle">-</button></p>
            <p><div class="inlinDisplay">剩余金额：</div><div id="money" class="numberSpan"></div><button id="moneyAdd" class="buttonStyle">+</button><button id="moneyMin" class="buttonStyle">-</button></p>
            <input type="hidden" value="none" id="userId" name="userId">         
        </div>
    </div>
    <div id="errorPrint"></div>
</div>

<div id="moneyConturl" style="display: none; border: #000 1px solid;position: fixed; left:50%;top: 25%; background-color: #eaeaea; width:300px;height: 200px;">
    <div style="width:200px; margin: 0 auto;">
        <h1 id="moneyConturlType"></h1>

        <p><span>手机号：</span><span id="userName"></span></p>
        <p><span>数量：</span><input type="text" id="resourceNumber" name="resourceNumber" placeholder="请填写金额" value=""></p>
        <input type="hidden" value="none" id="postUserId" name="postUserId">
        <input type="hidden" value="error" id="conturlType" name="conturlType">
        <button id="checkDate">确认提交</button><button id="closeDiv">关闭</button>

    </div>
</div>





<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script>
    $("#getUser").click(function(){ 
    $("#errorPrint").html("");
    $.ajax({
    url:"<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=pointAndMoneyManage",
    type:"post",
    data:{
        userPhone:$("#userPhone").val()
},
success:function(rData){
if(rData=="1"){
$("#errorPrint").html("未寻找到结果，请确认后重试");
$("#userData").css("display","none");
}
else{
$("#userData").css("display","block");
$("#phoneNum").html(rData["user_phone"]);
$("#points").html(rData["user_integration"]);
$("#money").html(rData["user_money"]);
$("#userId").val(rData["user_id"]);
}
}
});
})

$("#pointsAdd").click(function(){
$("#moneyConturl").css("display","block");
var userId=$("#userId").val();
var userName=$("#phoneNum").html();
$("#postUserId").val(userId);
$("#userName").html(userName);
$("#moneyConturlType").html("为用户加分");
$("#conturlType").val("addPoint");
});

$("#pointsMin").click(function(){
$("#moneyConturl").css("display","block");
var userId=$("#userId").val();
var userName=$("#phoneNum").html();
$("#postUserId").val(userId);
$("#userName").html(userName);
$("#moneyConturlType").html("为用户扣分");
$("#conturlType").val("minPoint");
});

$("#moneyAdd").click(function(){
$("#moneyConturl").css("display","block");
var userId=$("#userId").val();
var userName=$("#phoneNum").html();
$("#postUserId").val(userId);
$("#userName").html(userName);
$("#moneyConturlType").html("为用户储值");
$("#conturlType").val("addMoney");
});
$("#moneyMin").click(function(){
$("#moneyConturl").css("display","block");
var userId=$("#userId").val();
var userName=$("#phoneNum").html();
$("#postUserId").val(userId);
$("#userName").html(userName);
$("#moneyConturlType").html("为用户扣费");
$("#conturlType").val("minMoney");
});

$("#closeDiv").click(function(){
$("#moneyConturl").css("display","none");
return false;
});
$("#checkDate").click(function(){
var errorMessage="";
var alertFlag=false;

if(!getIntRegex($("#resourceNumber").val())||$("#resourceNumber").val()<0){
errorMessage+="金额必须为数字或者大于0 \r\n";
alertFlag=true;
}
if(alertFlag){
alert(errorMessage);
}
else{
$.ajax({
url:"<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=contrulUserResource",
type:"post",
data:{
resourceNumber:$("#resourceNumber").val(),
postUserId:$("#postUserId").val(),
conturlType:$("#conturlType").val()
},
success:function(rData){
//alert(JSON.stringify(rData));
if(rData=="numberError"){
    alert("金额错误");
    return false;
}
var nowPoints= ($("#points").html())*1;
var nowMoney= ($("#money").html())*1;
switch(rData['conturlType']){
case "addPoint":
$("#points").html(nowPoints + rData['resourceNumber']*1);
        
break;
case "minPoint":
var minVal=nowPoints - rData['resourceNumber'];
if(minVal<0){
minVal=0;
}
$("#points").html(minVal);
break;
case "addMoney":
$("#money").html(nowMoney + rData["resourceNumber"]*1);
break;
case "minMoney":
var minVal=nowMoney - rData['resourceNumber'];
if(minVal<0){
minVal=0;
}
$("#money").html(minVal);
break;
}
$("#closeDiv").trigger("click"); 
$("#resourceNumber").val("");
//        $("#phoneNum").html(rData["user_phone"]);
//        $("#points").html(rData["user_integration"]);
//        $("#money").html(rData["user_money"]);
//        $("#userId").val(rData["user_id"]);
}
});
}
})
</script>