<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<form action="{$WebSiteUrl}/pageredirst.php?action=user&functionname=moneyConturl" method="post">
{foreach from=$userInfo item=moneyUserInfo1 key=key}
    <div>
        name:<span class="userName">{$moneyUserInfo1.user_name}</span>
        money:{$moneyUserInfo1.user_money}
        <button class="recharge">充值</button>
        <button class="deductMoney">扣款</button>
        <input type="hidden" class="userIdValue" value="{$moneyUserInfo1.user_id}">
    </div>
    <br>
{/foreach}

    <div id="moneyConturl" style="display: none; border: #000 1px solid;position: fixed; left: 30%;top: 30%; background-color: #eaeaea; width:300px;height: 200px;">
        <div style="width:200px; margin: 0 auto;">
            <h1 id="moneyConturlType"></h1>

            <p><span>客户名：</span><span id="userName"></span></p>
            <p><span>金额：</span><input type="text" name="moneyNumber" placeholder="请填写金额" value=""></p>
            <input type="hidden" value="none" id="userId" name="userId">
            <input type="hidden" value="error" id="moneyType" name="moneyType">
            <button onclick="submit();">确认提交</button>

        </div>
    </div>
</form>

<script src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
<script>
    $(".recharge").click(function(){
    $("#moneyConturl").css("display","block");
    var userId=$(this).parent().find(".userIdValue").val();
    var userName=$(this).parent().find(".userName").html();
    $("#userId").val(userId);
    $("#userName").html(userName);
    $("#moneyConturlType").html("为用户充值");
    $("#moneyType").val("recharge");
    return false;
});
$(".deductMoney").click(function(){
$("#moneyConturl").css("display","block");
var userId=$(this).parent().find(".userIdValue").val();
var userName=$(this).parent().find(".userName").html();
$("#userId").val(userId);
$("#userName").html(userName);
$("#moneyConturlType").html("为用户扣款");
$("#moneyType").val("deductMoney");
return false;
});
</script>
