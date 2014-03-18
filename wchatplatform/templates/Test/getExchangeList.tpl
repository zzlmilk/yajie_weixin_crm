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
            .tableSize td{
                width: 50%;
            }
        </style>
    </head>
    <body>
        <div class="registerWarp">
            <table class="tableSize table table-condensed table-bordered">
                <tr>
                    <td>
                        <div > <a href="{$WebSiteUrl}?g=company&a=test&v=exchangeGoods&goodsId=1"><img src="{$WebSiteUrlPublic}/company/exchangeImage/174Small.jpg"></a></div>
                        <div>
                            aaaa<br>
                            旅行箱 2500p<br>
                            <button type="submit" class="btn btn-primary btn-xs">兑换</button>
                        </div>
                    </td>
                    <td>
                        <div ><a href="{$WebSiteUrl}?g=company&a=test&v=exchangeGoods&goodsId=2"> <img src="{$WebSiteUrlPublic}/company/exchangeImage/184Small.jpg"></a></div>
                        <div >                      
                            aaaa<br>
                            雨伞 500p<br>
                            <button type="button" class="btn btn-primary btn-xs">兑换</button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>