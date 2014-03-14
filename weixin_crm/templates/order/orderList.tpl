{foreach from=$orderList item=orderInfo key=key}
    <p>
        预约编号:{$orderInfo.order_code}
        预约金额:{$orderInfo.order_money} 元
        预约日期:{$orderInfo.appointment_time}
        预约备注:{$orderInfo.orders_remarks}
        指定预约:{$orderInfo.appointment_object}
        商品id(名称):{$orderInfo.merchandise_id}
        预约者电话：{$orderInfo.user_phone}
        预约方式：
        {if $orderInfo.order_type eq 1}
            微信预约
        {else if $orderInfo.order_type eq 2}
            人工预约
        {/if}

        是否付款：
        {if $orderInfo.order_state eq 0}
           未付款 
            {elseif $orderInfo.order_state eq 1}
                已付款
            {/if}
        订单生成时间：{$orderInfo.order_time|date_format:"%Y-%m-%d %H:%M"}
        edit:<a href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=userEdit&orderCode={$orderInfo.order_code}"><button >编辑</button></a>
        delete:<a href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=cancelReservation&orderCode={$orderInfo.order_code}"><button >删除</button></a>
    </p>
{/foreach}