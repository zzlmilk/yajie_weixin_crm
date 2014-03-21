<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="{$WebSiteUrl}/css/minimal/blue.css" rel="stylesheet">

<style>
    body{
        overflow-x: hidden;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }
    .selectBar{

        text-align: center;  

    }
    .dataArea{
        text-align: left;
        width: 60%;
        min-width: 500px;
        margin: 0 auto;
        height: 190px;
    }
    .sortBar{
        width: 30%;
        margin: 0 auto;
    }
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
        vertical-align:middle !important;
    }
    .groupInput{
        width: 30%;
        margin: 0 auto;
    }
</style>
<div class="userMangerTitle">客户信息管理</div>
<div style="height: 50px;"></div>
<form action="{$WebSiteUrl}/pageredirst.php?action=user&functionname=seachUsers" method="post">

    <div style="">

        <div class="input-group groupInput">
            <input type="text" class="form-control" style="" placeholder="请输入手机号查询" id="selectText" name="selectText">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">查询</button>
            </span>

        </div>
    </div>
    <div style="height:15px;"></div>
    <div class="sortBar"><label for="inputPassword3" class="control-label">排序：</label><input type="radio" name="sortType" id="point" value="point">&nbsp;<label for="point" class="control-label">积分</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sortType" id="money" value="money">&nbsp;<label for="money" class="control-label">余额</label></div>
        {if $errorMessage neq ""}
        <div class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label">{$errorMessage}</label></div>
    {/if}
    <div style="height: 30px;"></div>
</form>

<div class="dataArea">
    <table class="table table-striped">
        <tr><th>姓名</th><th>电话</th><th>生日</th><th>余额</th><th>积分</th><th>编辑</th></tr>
        {foreach from=$userInfo item=userInfo1 key=key}
            <tr>
                <td>{$userInfo1.user_name}</td>
                <td>{$userInfo1.user_phone}</td>
                <td>{$userInfo1.birthday}</td>
                <td>{$userInfo1.user_money}</td>
                <td>{$userInfo1.user_integration}</td>
                <td><a href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userEdit&userId={$userInfo1.user_id}"><button class="btn btn-warning">编辑</button></a></td>

            </tr>
        {/foreach}
    </table>
</div>
<div style="text-align: center">{$pages}</div> 
<script src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
<script src="{$WebSiteUrl}/js/rexexTest.js"></script>
<script src="{$WebSiteUrl}/js/icheck.min.js"></script>
<script>
    $('input').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue',
    increaseArea: '20%' // optional
}); 
$("#selectText").on("input",function(){
if(!getIntRegex($(this).val())){
var cutString=$(this).val().substr(0, ($(this).val().length)-1);

$("#selectText").val(cutString);
}
});
</script>
