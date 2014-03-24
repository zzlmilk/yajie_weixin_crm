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
        </style>
    </head>
    <body>
        <div class="registerWarp">
            <table class="tableSize table table-condensed table-bordered">
                {foreach from=$exchangeList item=exchangeItem key=key}
                    {if $key%2 eq 0}
                        <tr>
                        {/if}




                        <td style="">
                            <div > <a href="{$WebSiteUrl}?g=company&a=user&v=exchangeGoods&goodsId={$exchangeItem.exchange_id}"><img width="80" height="80" src="{$WebSiteUrlPublic}/company/exchangeImage/174Small.jpg"></a></div>
                            <div style="width: 100px;word-wrap: break-word; word-break: normal; margin: 0 auto;">
                                <p class="summary"> {$exchangeItem.exchange_summary}</p>
                                <p>{$exchangeItem.exchange_name} {$exchangeItem.exchange_integration}p</p>
                            </div>
                            <a  href="{$WebSiteUrl}?g=company&a=user&v=changeGoods&goodsId={$exchangeItem.exchange_id}"><button type="submit" class="btn btn-primary btn-xs">兑换</button></a>

                        </td>



                        {if ($key+1)%2 eq 0}
                        </tr>
                    {/if}


                {/foreach}
            </table>
        </div>
    </body>
    <script>
        $(".summary").each(function(){
       var len=$(this).html().length;
        if(len>=15){
        var nowString= $(this).html().substr(0, 11)
        $(this).html(nowString+"...");
    }
})
    </script>
</html>