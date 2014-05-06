<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-06 15:09:32
         compiled from "/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/user/manageView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100187310653688aacf0b6d0-96179822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7a6d2d2f513f5ae31733debdd2b4ae61043bf3c' => 
    array (
      0 => '/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/user/manageView.tpl',
      1 => 1399281834,
    ),
  ),
  'nocache_hash' => '100187310653688aacf0b6d0-96179822',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/Smarty/libs/plugins/modifier.date_format.php';
?><link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<style>
    .seachInput{
        width: 340px;
        height: 30px;
    }
    .dataArea{
        text-align: left;
        width: 60%;
        min-width: 500px;
        margin: 0 auto;
        height: 190px;
    }
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
        vertical-align:middle !important;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }
    .seachButton{
        height: 30px;
    }
    .userDateArea{
        padding-left: 25px;
        width:30%;
        min-width: 280px;
        margin: 0 auto;
        text-align: left;
        border: 1px solid #000;
    }
    .buttonStyle{
        line-height:15px;
        width: 30px;
        height: 30px;
    }
    .numberSpan{
        width: 50px;
        display: inline-block;
    }
    .inlinDisplay{
        display: inline-block;
    }
    .groupInput{
        width: 30%;
        margin: 0 auto;
    }
    .inlineWidth{
        width: 150px !important;
        height: auto;
    }
</style>
<div class="userMangerTitle">积分信息管理</div>

<div style="text-align: center; padding-top: 100px;">
    <div class="input-group groupInput">
        <input type="text" class="form-control" style="" placeholder="请输入电话号码" id="userPhone" name="selectText">
        <span class="input-group-btn">
            <button class="btn btn-default"id="getUser" accesskey="Enter" type="button">搜索</button>
        </span>

    </div>
    <div style="margin-top: 50px; display: none;" id="userData">
        <div class="userDateArea">
            <p><div class="inlinDisplay">手机号：</div><div class="inlinDisplay" id="phoneNum"></div></p>
            <p><div class="inlinDisplay">剩余积分：</div><div id="points" class="numberSpan"></div><button id="pointsAdd" class="buttonStyle btn btn-info">+</button> <button id="pointsMin" class="buttonStyle btn btn-info">-</button></p>
            <p><div class="inlinDisplay">剩余金额：</div><div id="money" class="numberSpan"></div><button id="moneyAdd" class="buttonStyle btn btn-info">+</button> <button id="moneyMin" class="buttonStyle btn btn-info">-</button></p>
            <input type="hidden" value="none" id="userId" name="userId">         
        </div>
    </div>
    <div id="errorPrint"></div>
    <div style="height: 40px;"></div>
    <div class="dataArea">
        <table class="table table-striped" id="dataRecored">
            <thead><tr><th>用户名</th><th>用户电话</th><th>数量</th><th>操作类型</th><th>来源</th><th>时间</th></tr></thead>
            <tbody class="dataRecoredValue">
                <?php  $_smarty_tpl->tpl_vars['RecordData'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pointRecordData')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['RecordData']->key => $_smarty_tpl->tpl_vars['RecordData']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['RecordData']->key;
?>
                    <tr >
                        <td><?php echo $_smarty_tpl->tpl_vars['RecordData']->value['user_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['RecordData']->value['user_phone'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['RecordData']->value['fraction'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['RecordData']->value['record_type']==1){?>
                                积分
                            <?php }else{ ?>
                                余额
                            <?php }?>
                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['RecordData']->value['source']=="crm"){?>
                                系统
                            <?php }else{ ?>
                                <?php echo $_smarty_tpl->tpl_vars['RecordData']->value['source'];?>
  
                            <?php }?>
                        </td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['RecordData']->value['create_time'],"%Y-%m-%d %H:%M");?>
</td>
                    </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>
</div>

<div id="moneyConturl" style="display: none;border: #000 1px solid;position: fixed; left:50%;top: 25%; background-color: #eaeaea; width:300px;height: 200px;">
    <div  style="width:200px; margin: 0 auto;">
        <h1 style="color: rgb(91,91,91);" id="moneyConturlType"></h1>

        <p><label for="" class="control-label">手机号：</label><label id="userName" class="control-label"></label></p>
        <p class="input-group"><label for="resourceNumber" class="control-label">数量：</label><input type="text" id="resourceNumber" class="inlineWidth form-control " name="resourceNumber" placeholder="请填写金额" value=""></p>
        <input type="hidden" value="none" id="postUserId" name="postUserId">
        <input type="hidden" value="error" id="conturlType" name="conturlType">
        <button id="checkDate" class="btn btn-warning btn-sm">确认提交</button> <button id="closeDiv" class="btn btn-warning btn-sm">关闭</button>

    </div>
</div>





<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/timeClass.js"></script>
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

var recoredLength=rData['recordList'].length;
var recoredValue=rData['recordList'];
var sourceType="";
$('.dataRecoredValue').html("");
for(var i=0;i<recoredLength;i++){
var addString="<tr>";
addString+="<td>"+recoredValue[i]["user_name"]+"</td>";
addString+="<td>"+recoredValue[i]["user_phone"]+"</td>";
addString+="<td>"+recoredValue[i]["fraction"]+"</td>";
if(recoredValue[i]["record_type"]=="1"){
addString+="<td>积分</td>";
}
else{
addString+="<td>余额</td>";
}
if(recoredValue[i]["source"]=="crm"){
sourceType="系统";
}
else{
sourceType=recoredValue[i]["source"];
}
addString+="<td>"+sourceType+"</td>";
var createTime=recoredValue[i]["create_time"]
var formatTime=timeToString(createTime*1000,1);
addString+="<td>"+formatTime+"</td>";
addString+="</tr>";
$('.dataRecoredValue').append(addString);
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
$("#userPhone").on("input",function(){
if(!getIntRegex($(this).val())){
var cutString=$(this).val().substr(0, ($(this).val().length)-1);

$("#userPhone").val(cutString);
}
});


</script>