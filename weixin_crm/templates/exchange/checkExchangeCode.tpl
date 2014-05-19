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
    .sortBar{
        width: auto;
        margin-left: 25px;
        height: 25px;
        line-height: 0px;
        margin-right: 45px;
        /*        margin: 0 auto;*/
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
    当前位置：系统管理 > 礼品验证
</div>
<div style="height: 50px;"></div>
{if $errorMessage neq ""}
    <div class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label">{$errorMessage}</label></div>
    <div style="height: 20px;"></div>
{/if}

<div class="dataArea">
    <form class="form-horizontal" action="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=checkExchangeCode" method="post">
        <div class="form-group" style=" width: 450px; margin: 0 auto;"> 
            <label for="inputEmail3" style="width: auto;" class="col-sm-2 control-label labelWidth">请输入验证码：</label>
            <div class="col-sm-2">
                <input class="form-control" style="width: auto;" type="text" value="" name="exchangeCode" id="exchangeCode">
            </div>
        </div>
        <div style="height: 25px;"></div>
        <p style="width: 100%; text-align: center;"><button id="addButton" type="submit" class="btn btn-info">确认</button>&nbsp;&nbsp;&nbsp;&nbsp;<button id="addButton" type="reset" class="btn btn-info">重置</button></p>
    </form>
    {if $exchangeIteam neq ""}
        <table class="table table-bordered crmTable" >
            <tr><th>礼品图片</th>
                <th style="width: 120px;">兑换积分</th><th>物品简介</th>
                <th style="display: none">id</th></tr>
            <tr>
                <td><img src="{$WebSiteUrl}/giftImages/{$exchangeIteam.exchange_image}" width="80" height="80"></td>
                <td>{$exchangeIteam.exchange_integration}</td>
                <td style="text-align: left;width: 50%">{$exchangeIteam.exchange_summary}</td>

                <td  style="display: none">{$exchangeIteam.exchange_id}</td>
            </tr>
        </table>
    {/if}
</div>

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
