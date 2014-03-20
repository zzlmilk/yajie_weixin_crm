<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<style>
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
    }
</style>
{if $errorFlag eq 1}
    <div style="height: 20px;"></div>
    <form action="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userUpdata" method="post">
        <p>  客户姓名：<input type="text" value="{$userData.user_name}" name="user_name" id="userName"></p>
        <p>客户电话：<input type="text" value="{$userData.user_phone}" name="user_phone" id="userPhone"></p>
        <p>客户生日：<input type="text" value="{$userData.birthday}" name="birthday" id="userBirthday"></p>
        <p> 客户性别：<select name="sex" id='sex'>
                {if $userData.sex eq '1'}
                    <option value="1" selected="selected">男</option>
                    <option value="2">女</option>
                {else}
                    <option value="1">男</option>
                    <option value="2" selected="selected">女</option>
                {/if}
            </select></p>
        <p> 客户余额：<input type="text" value="{$userData.user_money}" name="user_money" readonly="readonly" disabled="no" id="userMoney"></p>
        <p>客户积分：<input type="text" value="{$userData.user_integration}" name="user_integration" readonly="readonly" disabled="no" id="userIntegration"></p>
        <input type="hidden" value="{$userData.user_id}" name="user_id" id="user_id">
        <p> <button id="saveChangeButton" >保存修改</button></p>
    </form>

{else}
    {$userData} <!-- 此处返回错误信息-->
{/if}
{if $userMoneyData eq 0}
    暂无消费数据
{else}
    <h1>消费详情</h1>
    <table class="table table-condensed">
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
    <table class="table table-condensed">
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
if($("#userBirthday").val()==""){
errorMessage+="生日不能为空 \r\n";
alertFlag=true;
}
else if(!getDateRegex($("#userBirthday").val())){
errorMessage+="日期格式错误(yyyy-mm-dd) \r\n";
alertFlag=true;
}
if(alertFlag){ 
alert(errorMessage);
return false;
}
})
     
</script>


