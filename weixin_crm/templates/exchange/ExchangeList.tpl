<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<style>
    .dataArea{
        text-align: left;
        min-width: 500px;
        margin: 0 auto;
        height: 190px;
    }
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
        vertical-align:middle !important;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 25px;
        margin-top: 15px;
        text-align: center;
    }
</style>
<div class="userMangerTitle">礼品列表</div>
<div style="height: 50px;"></div>
<div class="dataArea">
    <table class="table table-striped">
        <tr><th>礼品图片</th><th>礼品名称</th><th>礼品类型</th><th>兑换积分</th><th>物品简介</th><th>详细介绍</th><th>编辑</th><th>删除</th></tr>
        {foreach from=$exchangeList item=exchangeIteam key=key}
            <tr>
                <td><img src="{$WebSiteUrl}/giftImages/{$exchangeIteam.exchange_image}" width="88" height="88"></td>
                <td>{$exchangeIteam.exchange_name}</td>
                <td>
                    {if $exchangeIteam.exchange_type eq 0}
                        虚拟
                    {else}
                        实物
                    {/if} 
                </td>
                <td>{$exchangeIteam.exchange_integration}</td>
                <td>{$exchangeIteam.exchange_summary}</td>
                <td>{$exchangeIteam.exchangez_details}</td>
                <td><a href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=editExchangeItem&ItemId={$exchangeIteam.exchange_id}"><button class="btn btn-warning">编辑</button></a></td>
                <td><a href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=exchangeItemDelete&ItemId={$exchangeIteam.exchange_id}"><button class="btn btn-danger">删除</button></a></td>
            </tr>
        {/foreach}
    </table>
</div>
