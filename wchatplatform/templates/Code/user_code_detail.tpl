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
                width: 90%;
                text-align: center;
            }

        </style>
    </head>
    <body>
        <div class="registerWarp">
            
            <div>
                
                <p>优惠码：{$codeInfo.code_info.code_name}</p>
                <div style="text-align: left;">
                    
                </div>
                <p><a href="{$WebSiteUrl}?g=company&a=code&v=giveCodeAuth&code_id={$codeInfo.code_info.promo_code_id}&open_id={$open_id}"><button type="button" class="btn btn-primary btn-xs">领取</button></a></p>
            </div>
        </div>
    </body>
</html>