<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-23 11:28:09
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/user/userEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53475015953573349081826-07914190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a66561162f9713804972005ac545445992e01b3e' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/user/userEdit.tpl',
      1 => 1396342134,
    ),
  ),
  'nocache_hash' => '53475015953573349081826-07914190',
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
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
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
    .labelWidth{
        width: auto !important;
    }
    .inputWidth{
        width: 170px;
    }
    .tableHeigth{
        height: 180px;
    }
    .pageStyle{
        text-align: center;
    }
</style>
<body>
    <div style="position: relative;left: 10px; top: 10px;"><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=userList"><button class="btn btn-primary">返回</button></a></div>
    <div class="userMangerTitle">修改与查看用户信息</div>
    <div id="errorMessage" class="alert alert-danger errorMessage"></div>
    <?php if ($_smarty_tpl->getVariable('errorFlag')->value==1){?>
        <div style="height: 20px;"></div>
        <div style="width: 370px; margin: 0 auto;">
            <form class="form-horizontal" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=userUpdata" method="post">
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">客户姓名：</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" value="<?php echo $_smarty_tpl->getVariable('userData')->value['user_name'];?>
" name="user_name" id="userName">
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">客户电话：</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" value="<?php echo $_smarty_tpl->getVariable('userData')->value['user_phone'];?>
" name="user_phone" id="userPhone">
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
                        <select name="sex" id='sex' class="form-control inputWidth" >
                            <?php if ($_smarty_tpl->getVariable('userData')->value['sex']=='1'){?>
                                <option value="1" selected="selected">男</option>
                                <option value="2">女</option>
                            <?php }else{ ?>
                                <option value="1">男</option>
                                <option value="2" selected="selected">女</option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3"  class="col-sm-2 control-label labelWidth">客户余额：</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" value="<?php echo $_smarty_tpl->getVariable('userData')->value['user_money'];?>
" name="user_money" readonly="readonly"  id="userMoney">
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">
                        客户积分：
                    </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" value="<?php echo $_smarty_tpl->getVariable('userData')->value['user_integration'];?>
" name="user_integration" readonly="readonly"  id="userIntegration">
                    </div>
                </div>

                <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('userData')->value['user_id'];?>
" name="user_id" id="user_id">
                <p style="text-align: center;"> <button data-toggle="modal" data-target="#myModal" type="button" id="saveChangeButton" disabled="true"  class="btn btn-info">保存修改</button></p>
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
    </body>
<?php }else{ ?>
    <?php echo $_smarty_tpl->getVariable('userData')->value;?>
 <!-- 此处返回错误信息-->
<?php }?>
<?php if ($_smarty_tpl->getVariable('userMoneyData')->value==0){?>
    <h3> 暂无消费数据</h3>
<?php }else{ ?>
    <h1>消费详情</h1>
    <div class="tableHeigth">
        <table id="moneyMessage" class="table table-striped">
            <thead>
                <tr><th>序号</th><th>数量</th><th>来源</th><th>日期</th></tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['MoneyData'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userMoneyData')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['MoneyData']->key => $_smarty_tpl->tpl_vars['MoneyData']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['MoneyData']->key;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['MoneyData']->value['fraction'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['MoneyData']->value['source'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['MoneyData']->value['create_time'],"%Y-%m-%d %H:%M");?>
</td>
                    </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>
    <div id="pageMoney" class="pageStyle"><?php echo $_smarty_tpl->getVariable('pageMoney')->value;?>
</div>

<?php }?>
<br>
<?php if ($_smarty_tpl->getVariable('userPointData')->value==0){?>
    <h3> 暂无积分数据</h3>
<?php }else{ ?>
    <h1>积分详情</h1>
    <div class="tableHeigth">
        <table id="pointerMessage" class="table table-striped">
            <thead>
                <tr><th>序号</th><th>数量</th><th>来源</th><th>日期</th></tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['PointData'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userPointData')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['PointData']->key => $_smarty_tpl->tpl_vars['PointData']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['PointData']->key;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['PointData']->value['fraction'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['PointData']->value['source'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['PointData']->value['create_time'],"%Y-%m-%d %H:%M");?>
</td>
                    </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>
    <div id="pointerPage" class="pageStyle"><?php echo $_smarty_tpl->getVariable('pagePointer')->value;?>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('userRegistrationValue')->value==0){?>
    <!--    暂无积分数据-->
<?php }else{ ?>
    <!--    <h1>用户行为记录</h1>
        <table class="table table-striped">
            <tr><th>序号</th><th>日期</th><th>行为</th></tr>
    <?php  $_smarty_tpl->tpl_vars['userRegistration'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userRegistrationValue')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['userRegistration']->key => $_smarty_tpl->tpl_vars['userRegistration']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['userRegistration']->key;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userRegistration']->value['record_time'],"%Y-%m-%d %H:%M");?>
</td>
            <td>签到</td>
        </tr>
    <?php }} ?>
</table>-->
<!--    <div id="pointerPage"><?php echo $_smarty_tpl->getVariable('pagePointer')->value;?>
</div>-->
<?php }?>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/buttonDisable.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/timeClass.js"></script>
<script>
    $("#userPhone").on("input",function(){
    if(!getIntRegex($(this).val())){
    var cutString=$(this).val().substr(0, ($(this).val().length)-1);

    $("#userPhone").val(cutString);
}
});
$("#saveChangeButton").click(function(){
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
//修改按钮
buttonDisable($("#saveChangeButton"));
//禁用按钮结束
//积分分页
 

function pageFunction(obj){

var requestUrl=$(obj).attr("pageLink");

$.post(
requestUrl,
{
userId:$("#user_id").val()
},
function(rData){
if(rData['returnCode']==1){
alert("服务器连接错误");
}else if(rData['returnCode']==2){
alert("服务器未获取或者获取到错误的用户参数");
}else{
var pageObject=rData["pageObject"];
var dataObjcet=rData["dataObject"];
var tbodyString=""
var Pointerdata=rData["returnData"];
var dataLength=rData["returnData"].length;
for(var i=0;i<dataLength;i++){
tbodyString+="<tr>";
tbodyString+="<td>"+(i+1)+"</td>";
tbodyString+="<td>"+Pointerdata[i]["fraction"]+"</td>";
tbodyString+="<td>"+Pointerdata[i]["source"]+"</td>";
var createTime=Pointerdata[i]["create_time"]
var formatTime=timeToString(createTime*1000,1);
tbodyString+="<td>"+formatTime+"</td>";
tbodyString+="</tr>";
}
$("#"+dataObjcet+" tbody").html("");
$("#"+dataObjcet+" tbody").html(tbodyString);
$("#"+pageObject).html(rData["page"]);}
});
}

 

</script>


