<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<style>
    .selectBar{

        text-align: center;  
        
    }
    .dataArea{
        text-align: left;
        width: 60%;
        min-width: 500px;
        margin: 0 auto;
    }
    .sortBar{
        width:350px;
        margin: 0 auto;
    }
</style>
<form action="{$WebSiteUrl}/pageredirst.php?action=user&functionname=seachUsers" method="post">
    <div style="height: 50px;"></div>
    <div class="selectBar"><input type="text" style="width:300px;" placeholder="请输入手机号查询" id="selectText" name="selectText"><button>查询</button></div>
    <div class="sortBar">排序：<input type="radio" name="sortType" value="point">积分&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sortType" value="money">余额</div>
    <div style="height: 100px;"></div>
</form>
    <div class="dataArea">
        {foreach from=$userInfo item=userInfo1 key=key}
            <p>
                name:{$userInfo1.user_name}
                phone:{$userInfo1.user_phone}
                birthday:{$userInfo1.birthday}
                money:{$userInfo1.user_money}
                integration:{$userInfo1.user_integration}
                edit:<a href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userEdit&userId={$userInfo1.user_id}"><button >编辑</button></a>
            </p>
        {/foreach}
    </div>
    {$pages}
