<!DOCTYPE html>
<html>
    <head>
        <title>用户赠送列表</title>
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
            {foreach from=$codeInfo item=codeInfos key=k}

                
                <div class="giftListStyle">
                    <div style="float: left;margin: 10px"> </div>
                    <div style="float: left;margin: 10px;width: 58%;">
                        <div style="word-wrap: break-word; word-break: normal;">
                            
                            <p>优惠码: {$codeInfo[$k]['code_info']['code_name']}</p>

                            <div style="width: 100%; text-align: right;"><a  href="{$websiteUrl}?g=company&a=code&v=giveCodeDetail&code_id={$codeInfo[$k]['code_record']['promo_code_id']}&open_id={$open_id}"><button type="submit" class="btn btn-primary btn-xs">详情</button></a></div>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </body>
</html>