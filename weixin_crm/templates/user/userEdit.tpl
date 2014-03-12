{if $errorFlag eq 1}
    <form action="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userUpdata" method="post">
        客户姓名：<input type="text" value="{$userData.user_name}" name="user_name" id="userName"><br>
        客户电话：<input type="text" value="{$userData.user_phone}" name="user_phone" id="userPhone"><br>
        客户生日：<input type="text" value="{$userData.birthday}" name="birthday" id="userBirthday"><br>
        客户性别：<select name="sex" id='sex'>
            {if $userData.sex eq '1'}
                <option value="1" selected="selected">男</option>
                <option value="2">女</option>
            {else}
                <option value="1">男</option>
                <option value="2" selected="selected">女</option>
            {/if}
        </select><br>
        客户余额：<input type="text" value="{$userData.user_money}" name="user_money" readonly="readonly" disabled="no" id="userMoney"><br>
        客户积分：<input type="text" value="{$userData.user_integration}" name="user_integration" readonly="readonly" disabled="no" id="userIntegration"><br>
        <input type="hidden" value="{$userData.user_id}" name="user_id" id="user_id">
        <button id="saveChangeButton" >保存修改</button></a>
</form>

{else}
    {$userData} <!-- 此处返回错误信息-->
{/if}
{if $userMoneyData eq 0}
    暂无消费数据
{else}
    <h1>消费详情</h1>
    {foreach from=$userMoneyData item=MoneyData key=key}
        NO:     {$key+1}
        数量: {$MoneyData.fraction}
        来源:  {$MoneyData.source}
        日期:{$MoneyData.create_time|date_format:"%Y-%m-%d %H:%M"}
        <br>
    {/foreach}
{/if}
<br>
{if $userPointData eq 0}
    暂无积分数据
{else}
    <h1>积分详情</h1>
    {foreach from=$userPointData item=PointData key=key}
        NO:     {$key+1}
        数量: {$PointData.fraction}
        来源:  {$PointData.source}
        日期:{$PointData.create_time|date_format:"%Y-%m-%d %H:%M"}
        <br>
    {/foreach}
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


