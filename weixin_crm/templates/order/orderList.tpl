<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="{$WebSiteUrl}/css/minimal/blue.css" rel="stylesheet">
<style>
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
    }
    .groupInput{
        width: 30%;
        margin: 0 auto;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }
    .sortBar{
        width: 30%;
        margin: 0 auto;
    }
</style>
<div class="userMangerTitle">订单信息管理</div>
<div style="height: 50px;"></div>
<form action="{$WebSiteUrl}/pageredirst.php?action=order&functionname=seachOrder" method="post">
    <div style="">

        <div class="input-group groupInput">
            <input type="text" class="form-control" style="" placeholder="请输入订单号查询" id="selectText" name="selectText">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">查询</button>
            </span>

        </div>
    </div>
    <div style="height: 15px;"></div>
    <div class="sortBar"><label for="inputPassword3" class="control-label">排序：</label><input type="radio" name="sortType" id="point" value="point">&nbsp;<label for="point" class="control-label">预约时间</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sortType" id="money" value="money">&nbsp;<label for="money" class="control-label">生成时间</label></div>
    <div style="height: 15px;"></div>
    {if $errorMessage neq ""}
        <div class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label">{$errorMessage}</label></div>
    {/if}
</form>
<div style="height: 30px;"></div>
<div style="height: 250px;">
    <table class="table table-striped" >
        <tr><th>预约编号</th><th>预约日期</th><th>预约备注</th><th>指定预约</th><th>商品id(名称)</th><th>预约者电话</th><th>预约方式</th><th>是否付款</th><th>提交日期</th><th>编辑</th><th>删除</th></tr>
        {foreach from=$orderList item=orderInfo key=key}
            <tr>
                <td>{$orderInfo.order_code}</td>
                <td>{$orderInfo.appointment_time|date_format:"%Y-%m-%d %H:%M"}</td>
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
                <td>{$orderInfo.merchandise_name}</td>
                <td>{$orderInfo.user_phone}</td>
                <td>
                    {if $orderInfo.order_type eq 1}
                        微信预约
                    {else if $orderInfo.order_type eq 2}
                        人工预约
                    {/if}
                </td>
                <td>
                    {if $orderInfo.order_pay_state eq 0}
                        未付款 
                    {elseif $orderInfo.order_pay_state eq 1}
                        已付款
                    {/if}
                </td>
                <td>{$orderInfo.order_time|date_format:"%Y-%m-%d %H:%M"}</td>
                <td><a href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=orderEdit&orderCode={$orderInfo.order_code}"><button class="btn btn-warning">编辑</button></a></td>
                <td><a href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=cancelReservation&orderCode={$orderInfo.order_code}"><button class="btn btn-danger">删除</button></a></td>
            </tr>
        {/foreach}
    </table>
</div>
<div style="text-align: center">{$pages}</div> 
<script src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
<script src="{$WebSiteUrl}/js/icheck.min.js"></script>
<script>
    $('input').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue',
    increaseArea: '20%' // optional
}); 
</script>