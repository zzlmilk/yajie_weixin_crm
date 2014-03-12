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





<script src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
<script>
    $("#getUser").click(function(){ 
    $("#errorPrint").html("");
    $.ajax({
    url:"{$WebSiteUrl}/pageredirst.php?action=user&functionname=pointAndMoneyManage",
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
$.ajax({
url:"{$WebSiteUrl}/pageredirst.php?action=user&functionname=contrulUserResource",
type:"post",
data:{
resourceNumber:$("#resourceNumber").val(),
postUserId:$("#postUserId").val(),
conturlType:$("#conturlType").val()
},
success:function(rData){
//alert(JSON.stringify(rData));
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
})
})
</script>