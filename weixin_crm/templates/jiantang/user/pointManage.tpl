<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<form action="{$WebSiteUrl}/pageredirst.php?action=user&functionname=pointConturl" method="post">
{foreach from=$userInfo item=moneyUserInfo1 key=key}
    <div>
        name:<span class="userName">{$moneyUserInfo1.user_name}</span>
        points:{$moneyUserInfo1.user_integration}
        <button class="addPoint">加分</button>
        <button class="deductPoint">扣分</button>
        <input type="hidden" class="userIdValue" value="{$moneyUserInfo1.user_id}">
    </div>
    <br>
{/foreach}

    <div id="pointConturl" style="display: none; border: #000 1px solid;position: fixed; left: 30%;top: 30%; background-color: #eaeaea; width:300px;height: 200px;">
        <div style="width:200px; margin: 0 auto;">
            <h1 id="pointConturlType"></h1>

            <p><span>客户名：</span><span id="userName"></span></p>
            <p><span>积分：</span><input type="text" name="pointNumber" placeholder="请填写积分" value=""></p>
            <input type="hidden" value="none" id="userId" name="userId">
            <input type="hidden" value="error" id="pointType" name="pointType">
            <button onclick="submit();">确认提交</button>

        </div>
    </div>
</form>

<script src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
<script>
    $(".addPoint").click(function(){
    $("#pointConturl").css("display","block");
    var userId=$(this).parent().find(".userIdValue").val();
    var userName=$(this).parent().find(".userName").html();
    $("#userId").val(userId);
    $("#userName").html(userName);
    $("#pointConturlType").html("为用户加分");
    $("#pointType").val("addPoint");
    return false;
});
$(".deductPoint").click(function(){
$("#pointConturl").css("display","block");
var userId=$(this).parent().find(".userIdValue").val();
var userName=$(this).parent().find(".userName").html();
$("#userId").val(userId);
$("#userName").html(userName);
$("#pointConturlType").html("为用户扣分");
$("#pointType").val("deductPoint");
return false;
});
</script>
