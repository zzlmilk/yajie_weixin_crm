<!DOCTYPE html>
<html>
    <head>
        <title>兑换列表</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
        <style>
            body{
                Font-size=62.5%;
            }
            .registerWarp{
                margin: 0 auto;
                margin-top: 2em;
                width: 95%;
            }
            .tableSize{
                width: 100%;
                text-align: center;
            }
            .inlinDisplay{
                display: inline-block;
            }
            td{
                width: 50%;
            }
            .giftListStyle{
                background-color: #fff;
                height: 100px;
                margin-top: 15px;
            }
            .summary{
                font-size: 14px;
            }
            .pointStyle{
                color:orange;float: right;
            }
        </style>
    </head>
    <body style='background-color: rgb(243,237,227);'>

        <div class="registerWarp">
            {foreach from=$exchangeList item=exchangeItem key=key}


                <div class="giftListStyle">
<!--                    <div style="float: left;margin: 10px"> <img width="80" height="80" src="{$WebImageUrl}{$exchangeItem.exchange_info.exchange_image}"></a></div>
                    <div style="float: left;margin: 10px;width: 58%;">
                        <div style="word-wrap: break-word; word-break: normal;">
                            <p class="summary"> {$exchangeItem.exchange_info.exchange_summary}</p>
                            <p>积分: {$exchangeItem.exchange_info.exchange_integration}</p>


                        </div>
                    </div>-->

                    <div style="float: left;margin: 10px"> 

                        <img width="80" height="80" src="{$WebImageUrl}{$exchangeItem.exchange_info.exchange_image}">
                    </div>
                    <div style="float: left;margin: 10px;width: 62%;margin-left: 0px;">
                        <div style="word-wrap: break-word; word-break: normal;">
                            <p>
                                <span  class="summary">{$exchangeItem.exchange_info.exchange_name}</span> 
                                <span style="color:orange;float: right;">积分</span> 
                                <span class="pointStyle">{$exchangeItem.exchange_info.exchange_integration}</span> 


                            </p>
                            <p style="color: #b4b4b4;font-size: 12px;margin-top: -8px;">
                                {$exchangeItem.exchange_info.exchange_summary}
                            </p>
                            {if $exchangeItem.exchange_record.status eq 1}
                                <div style="width: 100%; text-align: right;"><a class="submitButton"  href="{$WebSiteUrl}?g={$model}&a=exchange&v=changeGoodsState&goodsId={$exchangeItem.exchange_record.exchange_record_id}&open_id={$open_id}"><button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-primary btn-xs" style="width: auto;">确认收货</button></a></div>
                            {else if $exchangeItem.exchange_record.status eq 2}
                                <div style="width: 100%; text-align: right;"><button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-primary btn-xs" style="width: auto;" disabled="yes">已经收货</button></div>
                            {/if}
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            {/foreach}
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" >
                    <div class="modal-header" style="border: none;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title" id="myModalLabel">你确认收货么？</h4>
                    </div>
                    <div class="modal-footer" style="border: none;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <a id="checkButton" href=""><button type="button" class="btn btn-primary">确认</button></a>
                        <input type="hidden" id="gotoUrl" value="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=exchangeItemDelete&ItemId="  />
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </body>
    <script>
        $(".summary").each(function(){
        var len=$(this).html().length;
        if(len>=20){
        var nowString= $(this).html().substr(0, 20)
        $(this).html(nowString+"...");
    }
});
$(".submitButton").click(function(){

var integrationVals=$(this).parent().parent();
var thisUrl=$(this).attr("href");
$("#checkButton").attr("href",thisUrl);
//var userIntegration=$("#userIntegration").html();
});
    </script>
</html>