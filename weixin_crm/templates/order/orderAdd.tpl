<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
<meta name="viewport" content="width=device-width,user-scalable=yes" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<div style="margin-left:15px;margin-top:15px;">
    <form action="{$WebSiteUrl}/pageredirst.php?action=order&functionname=orderAdd" method="post">

        <p>预约日期：<input type="text" value="" name="orderTime" id="orderTime"></p>
        <p>指定预约：<input type="text" value="" name="appointment_object"  id="appointment_object"></p>
        <p>预约备注：<input type="text" value="" name="orders_remarks" id="orders_remarks"></p>
        <p>预约项目：<select name="merchandise_id" id='merchandise_id'>
                {foreach from=$merchandiseIteams item=merchandise key=key}
                    <option value="{$merchandise.merchandise_id}">{$merchandise.merchandise_name} {$merchandise.merchandise_money} 元</option>
                {/foreach}
            </select>
        </p>
        <p>预约电话：<input type="text" value="" name="userPhone"  id="userPhone"></p>
        <p>预约人数：<input type="text" value="" name="order_number"  id="order_number"></p>
        <p><button id="addButton">确认添加</button></p>
    </form>
</div>
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
if($("#orderTime").val()==""){
errorMessage+="生日不能为空 \r\n";
alertFlag=true;
}

if(!getIntRegex($("#order_number").val())||$("#order_number").val()<0){
errorMessage+="人数必须为数字或者大于0 \r\n";
alertFlag=true;
}
if(alertFlag){ 
alert(errorMessage);
return false;
}
})
     
</script>
