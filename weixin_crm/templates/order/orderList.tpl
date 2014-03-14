<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<style>
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
    }
</style>
<table class="table table-condensed">
    <tr><th>预约编号</th><th>预约金额</th><th>预约日期</th><th>预约备注</th><th>指定预约</th><th>商品id(名称)</th><th>预约者电话</th><th>预约方式</th><th>是否付款</th><th>预约日期</th><th>编辑</th><th>删除</th></tr>
    {foreach from=$orderList item=orderInfo key=key}
        <tr>
            <td>{$orderInfo.order_code}</td>
            <td>{$orderInfo.order_money} 元</td>
            <td>{$orderInfo.appointment_time}</td>
            <td>
                {if $orderInfo.orders_remarks eq ""}
                    无
                {else}
                    {$orderInfo.orders_remarks}
                {/if}
            </td>
            <td>
                {if $orderInfo.appointment_object eq ""}
                    无
                {else}
                    {$orderInfo.appointment_object}
                {/if}
                
            </td>
            <td>{$orderInfo.merchandise_id}</td>
            <td>{$orderInfo.user_phone}</td>
            <td>
                {if $orderInfo.order_type eq 1}
                    微信预约
                {else if $orderInfo.order_type eq 2}
                    人工预约
                {/if}
            </td>
            <td>
                {if $orderInfo.order_state eq 0}
                    未付款 
                {elseif $orderInfo.order_state eq 1}
                    已付款
                {/if}
            </td>
            <td>{$orderInfo.order_time|date_format:"%Y-%m-%d %H:%M"}</td>
            <td><a href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=userEdit&orderCode={$orderInfo.order_code}"><button >编辑</button></a></td>
            <td><a href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=cancelReservation&orderCode={$orderInfo.order_code}"><button >删除</button></a></td>
        </tr>
    {/foreach}
</table>