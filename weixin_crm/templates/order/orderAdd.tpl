<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
<meta name="viewport" content="width=device-width,user-scalable=yes" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="{$WebSiteUrl}/css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">
<style>
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

<div class="userMangerTitle">新增订单</div>
<div id="errorMessage" class="alert alert-danger errorMessage"></div>

<div style="margin-left:15px;margin-top:15px;">
    <div style="width: 300px; margin: 0 auto;">
        <form class="form-horizontal" action="{$WebSiteUrl}/pageredirst.php?action=order&functionname=orderAdd" method="post">
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">预约日期：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" readonly="" value="" name="orderTime" id="orderTime">
                </div>
            </div>
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">指定预约：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="" name="appointment_object"  id="appointment_object">
                </div>
            </div>

            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth"> 预约项目：</label>
                <div class="col-sm-2">
                    <select name="merchandise_id" id='merchandise_id' class="form-control inputWidth">
                        {foreach from=$merchandiseIteams item=merchandise key=key}
                            <option value="{$merchandise.merchandise_id}">{$merchandise.merchandise_name} {$merchandise.merchandise_money} 元</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">预约电话：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="" name="userPhone"  id="userPhone">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">预约人数：</label>
                <div class="col-sm-2">
                    <input type="text" value="1" class="form-control inputWidth" name="order_number"  id="order_number">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">是否支付：</label>
                <div class="col-sm-2">
                    <select name="order_pay_state" id='order_pay_state' class="form-control inputWidth">
                        <option value="0">未支付</option>
                        <option value="1">已支付</option>
                    </select>
                </div>
            </div>
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">预约备注：</label>
                <div class="col-sm-2">
                    <textarea  class="form-control inputWidth" rows="3"name="orders_remarks" id="orders_remarks"></textarea>
                </div>
            </div>
            <p style="text-align: center;"><button id="addButton" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-info">确认添加</button></p>
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
                            <input type="hidden" id="deleteUrl" value="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=exchangeItemDelete&ItemId="  />
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </form>
    </div>
</div>
<script src="{$WebSiteUrl}/js/rexexTest.js"></script>
<script src="{$WebSiteUrl}/js/bootstrap-datetimepicker.js"></script>
<script src="{$WebSiteUrl}/js/bootstrap-datetimepicker.zh-CN.js"></script>
<script src="{$WebSiteUrl}/js/timeClass.js"></script>
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
if($("#orderTime").val()==""){
errorMessage+="时间不能为空 <br>";
alertFlag=true;
}else if(!getDateTimeRegex($("#orderTime").val())){
errorMessage+="时间格式错误(yyyy-mm-dd HH:ii) <br>";
alertFlag=true;
}

if(!getIntRegex($("#order_number").val())||$("#order_number").val()<0){
errorMessage+="人数必须为数字或者大于0 <br>";
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
//数字限制
$("#userPhone").on("input",function(){
if(!getIntRegex($(this).val())){
var cutString=$(this).val().substr(0, ($(this).val().length)-1);

$("#userPhone").val(cutString);
}
});
$("#order_number").on("input",function(){
if(!getIntRegex($(this).val())){
var cutString=$(this).val().substr(0, ($(this).val().length)-1);

$("#order_number").val(cutString);
}
});
//日期弹出框
var nowDayTime=new Date();
nowDayTime.setHours(0);
nowDayTime.setMinutes(0);
nowDayTime.setSeconds(0);
var endDate= getDateTimeMessage(nowDayTime,2);
$("#orderTime").datetimepicker({
format: "yyyy-mm-dd hh:ii",
startDate:new Date(),
endDate:endDate,
autoclose:true,
minView:0,
minuteStep:15,
forceParse:false,
language:"zh-CN"
});
</script>
