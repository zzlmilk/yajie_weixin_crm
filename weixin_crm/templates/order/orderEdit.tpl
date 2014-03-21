<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
<meta name="viewport" content="width=device-width,user-scalable=yes" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
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
<body>
    <div class="userMangerTitle">修改与查看订单信息</div>
    <div id="errorMessage" class="alert alert-danger errorMessage"></div>
    {if $errorFlag eq 1}
        <div style="height: 20px;"></div>
        <div style="width: 300px; margin: 0 auto;">
            <form class="form-horizontal" action="{$WebSiteUrl}/pageredirst.php?action=order&functionname=orderUpdata" method="post">
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">预约日期：</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" value="{$orderData.appointment_time|date_format:"%Y-%m-%d %H:%M"}" name="orderTime" id="orderTime">
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">指定预约：</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" value="{$orderData.appointment_object}" name="appointment_object" id="appointment_object">
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">预约备注：</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" value="{$orderData.orders_remarks}" name="orders_remarks" id="orders_remarks"></div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">预约项目：</label>
                    <div class="col-sm-2">
                        <select name="merchandise_id" id='merchandise_id' class="form-control inputWidth" >
                            {foreach from=$merchandise item=merchandiseIteams key=key}
                                {if $orderData.merchandise_id eq ($key+1)}
                                    <option selected="selected" value="{$merchandiseIteams.merchandise_id}">{$merchandiseIteams.merchandise_name} {$merchandiseIteams.merchandise_money} 元</option>

                                {else}
                                    <option value="{$merchandiseIteams.merchandise_id}">{$merchandiseIteams.merchandise_name} {$merchandiseIteams.merchandise_money} 元</option>
                                {/if}     
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3"  class="col-sm-2 control-label labelWidth">预约电话：</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" value="{$orderData.user_phone}" name="user_phone"  id="userPhone">
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">
                        预约人数：
                    </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control inputWidth" value="{$orderData.order_number}" name="order_number"  id="order_number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label labelWidth">是否支付：</label>
                    <div class="col-sm-2">
                        <select name="order_pay_state" id='order_pay_state' class="form-control inputWidth">
                            {if $orderData.order_pay_state eq 0}
                                <option value="0" selected="selected">未支付</option>
                                <option value="1">已支付</option>
                            {else}
                                <option value="0">未支付</option>
                                <option value="1" selected="selected">已支付</option>
                            {/if}
                        </select>
                    </div>
                </div>
                <input type="hidden" value="{$orderData.order_code}" name="order_code" id="user_id">
                <p style="text-align: center;"> <button id="saveChangeButton" class="btn btn-info">保存修改</button></p>
            </form>
        </div>
    {else}
        {$orderData} <!-- 此处返回错误信息-->
    {/if}
</body>
<script src="{$WebSiteUrl}/js/rexexTest.js"></script>
<script src="{$WebSiteUrl}/js/buttonDisable.js"></script>
<script>
    $("#saveChangeButton").click(function(){
    $("#errorMessage").hide();
    $("#errorMessage").html();
    var errorMessage="";
    var alertFlag=false;
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
}
})
//禁用按钮  
buttonDisable($("#saveChangeButton"));

//修改按钮结束
</script>