<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="{$WebSiteUrl}/css/minimal/blue.css" rel="stylesheet">
<link href="{$WebSiteUrl}/css/crm_table_style.css" rel="stylesheet">

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

<div class="navBarStyle">
    当前位置：任务管理 > 活动列表
</div>


<div style="height: 50px;"></div>

<div class="dataArea">
    <table class="table crmTable table-bordered">
        <tr><th>活动名称</th><th>结束时间</th><th>编辑</th><th>报名活动详情</th></tr>
        {foreach from=$activtyAll item=activtyAlls key=key}
            <tr>
                <td>{$activtyAlls.activity_name}</td>
                <td>{$activtyAlls.activity_end_time|date_format:'%Y-%m-%d'}</td>
                <td><a href="{$WebSiteUrl}/pageredirst.php?action=activty&functionname=activtyEdit&id={$activtyAlls.activity_id}">编辑</a></td>

                <td><a href="{$WebSiteUrl}/pageredirst.php?action=activty&functionname=activtyList&id={$activtyAlls.activity_id}">报名活动详情</a></td>

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
