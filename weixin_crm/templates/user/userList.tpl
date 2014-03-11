<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
{foreach from=$userInfo item=userInfo1 key=key}
    name:{$userInfo1.user_name}
    phone:{$userInfo1.user_phone}
    birthday:{$userInfo1.birthday}
    money:{$userInfo1.user_money}
    integration:{$userInfo1.user_integration}
    edit:<a href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userEdit&userId={$userInfo1.user_id}"><button >aaaa</button></a>
{/foreach}
