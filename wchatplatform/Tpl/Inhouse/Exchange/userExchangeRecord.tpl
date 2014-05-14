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
        </style>
    </head>
    <body style='background-color: rgb(243,237,227);'>

        <div class="registerWarp">
            {foreach from=$exchangeList item=exchangeItem key=key}
                
              
                <div class="giftListStyle">
                    <div style="float: left;margin: 10px"> <img width="80" height="80" src="{$WebImageUrl}{$exchangeItem.exchange_info.exchange_image}"></a></div>
                    <div style="float: left;margin: 10px;width: 58%;">
                        <div style="word-wrap: break-word; word-break: normal;">
                            <p class="summary"> {$exchangeItem.exchange_info.exchange_summary}</p>
                            <p>积分: {$exchangeItem.exchange_info.exchange_integration}</p>

                            
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </body>
    <script>
        $(".summary").each(function(){
        var len=$(this).html().length;
        if(len>=20){
        var nowString= $(this).html().substr(0, 20)
        $(this).html(nowString+"...");
    }
})
    </script>
</html>