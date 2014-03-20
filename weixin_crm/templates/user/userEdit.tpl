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
        font-size: 25px;
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
<div class="userMangerTitle">修改与查看用户信息</div>
<div id="errorMessage" class="alert alert-danger errorMessage"></div>
{if $errorFlag eq 1}
    <div style="height: 20px;"></div>
    <div style="width: 300px; margin: 0 auto;">
        <form class="form-horizontal" action="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userUpdata" method="post">
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">客户姓名：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="{$userData.user_name}" name="user_name" id="userName">
                </div>
            </div>
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">客户电话：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="{$userData.user_phone}" name="user_phone" id="userPhone">
                </div>
            </div>
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">客户生日：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="{$userData.birthday}" name="birthday" id="userBirthday"></div>
            </div>
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">客户性别：</label>
                <div class="col-sm-2">
                    <select name="sex" id='sex' class="form-control inputWidth" >
                        {if $userData.sex eq '1'}
                            <option value="1" selected="selected">男</option>
                            <option value="2">女</option>
                        {else}
                            <option value="1">男</option>
                            <option value="2" selected="selected">女</option>
                        {/if}
                    </select>
                </div>
            </div>
            <div class="form-group"> 
                <label for="inputEmail3"  class="col-sm-2 control-label labelWidth">客户余额：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="{$userData.user_money}" name="user_money" readonly="readonly"  id="userMoney">
                </div>
            </div>
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">
                    客户积分：
                </label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="{$userData.user_integration}" name="user_integration" readonly="readonly"  id="userIntegration">
                </div>
            </div>
            <input type="hidden" value="{$userData.user_id}" name="user_id" id="user_id">
            <p style="text-align: center;"> <button id="saveChangeButton" class="btn btn-info">保存修改</button></p>
        </form>
    </div>
{else}
    {$userData} <!-- 此处返回错误信息-->
{/if}
{if $userMoneyData eq 0}
    暂无消费数据
{else}
    <h1>消费详情</h1>
    <table class="table table-striped">
        <tr><th>序号</th><th>数量</th><th>来源</th><th>日期</th></tr>
        {foreach from=$userMoneyData item=MoneyData key=key}
            <tr>
                <td>{$key+1}</td>
                <td>{$MoneyData.fraction}</td>
                <td>{$MoneyData.source}</td>
                <td>{$MoneyData.create_time|date_format:"%Y-%m-%d %H:%M"}</td>
            </tr>
        {/foreach}
    </table>
{/if}
<br>
{if $userPointData eq 0}
    暂无积分数据
{else}
    <h1>积分详情</h1>
    <table class="table table-striped">
        <tr><th>序号</th><th>数量</th><th>来源</th><th>日期</th></tr>
        {foreach from=$userPointData item=PointData key=key}
            <tr>
                <td>{$key+1}</td>
                <td>{$PointData.fraction}</td>
                <td>{$PointData.source}</td>
                <td>{$PointData.create_time|date_format:"%Y-%m-%d %H:%M"}</td>
            </tr>
        {/foreach}
    </table>
{/if}
<script src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
<script src="{$WebSiteUrl}/js/rexexTest.js"></script>
<script>
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
}
})
     
</script>


