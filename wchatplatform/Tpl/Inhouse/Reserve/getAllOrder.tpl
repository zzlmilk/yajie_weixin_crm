<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
        <title>查看所有订单</title>
    </head>
    <body>
        <div>
            <table>
                <tr><th>订单号</th><th>人数</th><th>时间</th><th>项目</th><th>花费</th><th>支付</th><th>状态</th><th>修改</th><th>取消</th></tr>
                {foreach from=$orders item=orderItem key=key}
                    <tr>
                        <td>{$orderItem}</td>
                    </tr>
                {/foreach}
            </table>
        </div>
    </body>
    </html>