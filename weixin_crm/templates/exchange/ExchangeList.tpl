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
        height: 350px;
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
</style>
<div class="navBarStyle">
    当前位置：兑换管理 > 礼品列表
</div>
<div style="height: 50px;"></div>
<div class="dataArea">
    <table class="table table-bordered crmTable" >
        <tr><th>礼品图片</th>
<!--            <th>礼品名称</th><th>礼品类型</th>-->
            <th style="width: 120px;">兑换积分</th><th>物品简介</th>
            <!--<th>详细介绍</th>-->
            <th style="display: none">id</th><th>编辑</th><th>删除</th></tr>
        {foreach from=$exchangeList item=exchangeIteam key=key}
            <tr>
                <td><img src="{$WebSiteUrl}/giftImages/small/{$exchangeIteam.exchange_image}" width="80" height="80"></td>
<!--                <td>{$exchangeIteam.exchange_name}</td>
                <td>
                    {if $exchangeIteam.exchange_type eq 0}
                        虚拟
                    {else}
                        实物
                    {/if} 
                </td>-->
                <td>{$exchangeIteam.exchange_integration}</td>
                <td style="text-align: left;width: 50%">{$exchangeIteam.exchange_summary}</td>
<!--                <td style="text-align: left;">{$exchangeIteam.exchangez_details}</td>-->
                <td  style="display: none">{$exchangeIteam.exchange_id}</td>
                <td><a href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=editExchangeItem&ItemId={$exchangeIteam.exchange_id}">编辑</a></td>
                <td><a href="#"  data-toggle="modal" data-target="#myModal" class="deleteButton ">删除</a></td>

            </tr>
        {/foreach}
    </table>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">你确认删除这条信息么？</h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <a id="checkButton" href=""><button type="button" class="btn btn-primary">确认</button></a>
                    <input type="hidden" id="deleteUrl" value="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=exchangeItemDelete&ItemId="  />
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<div style="text-align: center">{$pages}</div> 
<script>
    $(".deleteButton").click(function (){
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
$("#checkButton").attr("href", deleteUrl+alertText[3]);                
$(".modal-body").html(WarringStr);
})
</script>
