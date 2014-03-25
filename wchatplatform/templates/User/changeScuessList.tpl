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
                width: 50%;
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
            <h1>恭喜你兑换成功</h1>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">消费积分</label>
                <label for="inputEmail3" class="col-sm-2 control-label">{$changeInfo.exchange_integration}p</label>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">剩余积分</label>
                <label for="inputEmail3" class="col-sm-2 control-label">{$integration}p</label>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">物品名称</label>
                <label for="inputEmail3" class="col-sm-2 control-label">{$changeInfo.exchange_name}</label>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">物品简介</label>
                <label for="inputEmail3" class="col-sm-2 control-label" style="width: 50%;">{$changeInfo.exchange_summary}</label>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">物品类型</label>
                {if $changeInfo.exchange_type eq 0}
                    <label for="inputEmail3" class="col-sm-2 control-label">虚拟</label>
                {else}
                    <label for="inputEmail3" class="col-sm-2 control-label">实物</label>
                {/if}

            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10" >
                    <a href="{$WebSiteUrl}?g=company&a=user&v=getExchangeList&open_id={$open_id}"><button id="submitOrder" type="button"  class="btn btn-primary">返&nbsp;&nbsp;&nbsp;回</button></a>
                </div>
            </div>
        </div>
    </body>
    <script>

    </script>
</html>