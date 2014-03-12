<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">    
<div style="margin-left:15px;margin-top:15px;">
<form action="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userManage" method="post">
    <p>客户姓名：<input type="text" value="" name="user_name" id="userName"></p> 
    <p>客户电话：<input type="text" value="" name="user_phone" id="userPhone"></p>
    <p>客户生日：<input type="text" value="" name="birthday" id="userBirthday"></p>
    <p>客户性别：<select name="sex" id='sex'>
                <option value="1" selected="selected">男</option>
                <option value="2">女</option>
        </select></p>
        <p>客户余额：<input type="text" value="0" name="user_money"  id="userMoney"></p>
        <p>客户积分：<input type="text" value="0" name="user_integration"  id="userIntegration"></p>
        <p><button onclick="submit();">确认添加</button></p>
</form>
</div>