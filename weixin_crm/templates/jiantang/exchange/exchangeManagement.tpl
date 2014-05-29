<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
<meta name="viewport" content="width=device-width,user-scalable=yes" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="{$WebSiteUrl}/css/crm_table_style.css" rel="stylesheet">
<style>
    .dataArea{
        text-align: left;
        min-width: 500px;
        margin: 0 auto;
        height: 515px;
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
    .deleteButton{
        color:red;
    }
    .deleteButton:hover{
        color: red;
        text-decoration: none;
    }
    .nocheck{
        color:#e4e4e4;
        cursor: pointer;
    }
    .tableFont{
        font-size: 14px;
    }
</style>
<div class="navBarStyle">
    当前位置：兑换管理 > 礼品管理
</div>
<div style="height: 50px;"></div>
{if $errorMessage neq ""}
    <div class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label">{$errorMessage}</label></div>
{/if}
<div class="dataArea">
    <table class="table table-bordered crmTable tableFont" >
        <tr>
            <th style="width: 120px;">礼品名称</th>
            <th style="width: 120px;">兑换积分</th>
            <th style="width: 120px;">用户名称</th>
            <th style="width: 120px;">用户电话</th>
            <th style="width:140px;">兑换时间</th>
            <th style="width: 30%;">送货地址</th>
            <th style="display: none">id</th>
            <th style="width:80px;">收货状态</th><th style="width:80px;">状态确认</th></tr>
            {foreach from=$exchangeRecordMessage item=messageIteam key=key}
            <tr>

                <td>{$messageIteam.exchange_name}</td>
                <td>
                    {$messageIteam.exchange_integration}
                </td>
                <td>{$messageIteam.user_name}</td>
                <td style="text-align: center;">{$messageIteam.user_phone}</td>
                {if $messageIteam.create_time eq ""}
                    <td style="text-align: center;">暂无</td>
                {else}
                    <td style="text-align: center;">{$messageIteam.create_time|date_format:"%Y-%m-%d %H:%M"}</td>
                {/if}
                <td style="text-align: left;">
                    {$messageIteam.province}{$messageIteam.city}{$messageIteam.area}{$messageIteam.street}
                </td>
                <td  style="display: none">{$messageIteam.exchange_record_id}</td>

                <td>
                    {if $messageIteam.status eq 0}
                        未发货
                    {else if $messageIteam.status eq 1}
                        已发货
                    {else if $messageIteam.status eq 2}
                        已收货
                    {else}
                        状态未知
                    {/if} 
                </td>
                <td>
                    {if $messageIteam.status eq 0}
                        <a href="#" data-toggle="modal" data-target="#myModal" class="sendButton ">确认发货</a>
                    {else if $messageIteam.status eq 1}
                        <a href="#" data-toggle="modal" data-target="#myModal" class="resultsButton ">确认收货</a>
                    {/if} 

                </td>

            </tr>
        {/foreach}
    </table>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">你要确认收货成功么？</h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <a id="checkButton" href=""><button type="button" class="btn btn-primary">确认</button></a>
                    <input type="hidden" id="deleteUrl" value="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=exchangeManagementChange&recordId="  />
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<div style="text-align: center">{$pages}</div> 
<script>

    $(".sendButton").click(function(){
    $("#myModalLabel").html("你要确认已经发货么？");
    var alertTitle=new Array();
    var alertText=new Array();
    var WarringStr ="";
    
    var textObject=$(this).parent().parent().find("td");

    $(textObject).each(function(index){
    alertText[index]=$(this).html();
})

$("th").each(function(index){
alertTitle[index]=$(this).html();
})

for (var i=0 ;i<(alertTitle.length)-3;i++){
WarringStr+="<div class='form-group'><label  class=' control-label labelWidth'>"+alertTitle[i]+":</label>"
+"<label  class='control-label labelWidth'>"+alertText[i]+"</label>"
+"</div>";
}
var deleteUrl=$("#deleteUrl").val();
$("#checkButton").attr("href", deleteUrl+alertText[5]+"&actionType=send");                
$(".modal-body").html(WarringStr);

});
$(".resultsButton").click(function(){

var alertTitle=new Array();
var alertText=new Array();
var WarringStr ="";
    
var textObject=$(this).parent().parent().find("td");

$(textObject).each(function(index){
alertText[index]=$(this).html();
})

$("th").each(function(index){
alertTitle[index]=$(this).html();
})

for (var i=0 ;i<(alertTitle.length)-3;i++){
WarringStr+="<div class='form-group'><label  class=' control-label labelWidth'>"+alertTitle[i]+":</label>"
+"<label  class='control-label labelWidth'>"+alertText[i]+"</label>"
+"</div>";
}
var deleteUrl=$("#deleteUrl").val();
$("#checkButton").attr("href", deleteUrl+alertText[6]+"&actionType=results");                
$(".modal-body").html(WarringStr);

});

</script>
