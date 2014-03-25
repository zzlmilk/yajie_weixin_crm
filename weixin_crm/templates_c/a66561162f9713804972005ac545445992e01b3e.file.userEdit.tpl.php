<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-25 15:50:15
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/user/userEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19224126215331353783c271-18112449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a66561162f9713804972005ac545445992e01b3e' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/user/userEdit.tpl',
      1 => 1395733768,
    ),
  ),
  'nocache_hash' => '19224126215331353783c271-18112449',
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
        width: 150px;
    }
</style>
<body>
    <div class="userMangerTitle">修改与查看用户信息</div>
    <div id="errorMessage" class="alert alert-danger errorMessage"></div>
    <?php if ($_smarty_tpl->getVariable('errorFlag')->value==1){?>
        <div style="height: 20px;"></div>
        <div style="width: 300px; margin: 0 auto;">
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
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" value="<?php echo $_smarty_tpl->getVariable('userData')->value['birthday'];?>
" name="birthday" id="userBirthday"></div>
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
    暂无消费数据
<?php }else{ ?>
    <h1>消费详情</h1>
    <table class="table table-striped">
        <tr><th>序号</th><th>数量</th><th>来源</th><th>日期</th></tr>
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
    </table>
    <div id="pageMoney"><?php echo $_smarty_tpl->getVariable('pageMoney')->value;?>
</div>

<?php }?>
<br>
<?php if ($_smarty_tpl->getVariable('userPointData')->value==0){?>
    暂无积分数据
<?php }else{ ?>
    <h1>积分详情</h1>
    <table class="table table-striped">
        <tr><th>序号</th><th>数量</th><th>来源</th><th>日期</th></tr>
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
    </table>
    <div id="pointerPage"><?php echo $_smarty_tpl->getVariable('pagePointer')->value;?>
</div>
<?php }?>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/buttonDisable.js"></script>
<script>
    $("#userPhone").on("input",function(){
    if(!getIntRegex($(this).val())){
    var cutString=$(this).val().substr(0, ($(this).val().length)-1);

    $("#userPhone").val(cutString);
}
});
$("#saveChangeButton").click(function(){
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
$("#pageMoney .usablePage").click(function(){

return false;
});
 

 function pageFunction(obj){

    var requestUrl=$(obj).attr("pageLink");
$.post(
requestUrl,
{
    userId:$("#user_id").val()
},
function(rData){

$("#pageMoney").html(rData["page"]);

})

 }
</script>


