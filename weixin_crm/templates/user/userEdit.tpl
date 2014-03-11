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
    客户余额：<input type="text" value="{$userData.user_money}" name="user_money" id="userMoney"><br>
    客户积分：<input type="text" value="{$userData.user_integration}" name="user_integration" id="userIntegration"><br>
    <input type="hidden" value="{$userData.user_id}" name="user_id" id="user_id">
    <button onclick="submit();">保存修改</button></a>
    </form>
{else}
    {$userData} <!-- 此处返回错误信息-->

{/if}


