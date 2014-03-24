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
        
        <title>确认订单</title>
        <style>
            body{
                min-width: 320px;
                Font-size=62.5%;
            }
            .cardBackground{
                border-radius: 3px;
                width:85%;
                margin: 0 auto;
                background-color: #e3e3e3;
                height: 100%;
                margin-top: 2em;
            }
        </style>
    </head>
    <body>
        
        <div class="cardBackground">
            <form method='post' role="form" action="{$WebSiteUrl}?g=company&a=test&v=order&checkReturn=1&open_id={$open_id}">
                <div style="height: 10px;"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">人数</label>
                <div class="col-sm-10">
                    <p class="form-control-static">{$returnVal.porpleCountSubmit}人</p>
                    <input type="hidden" name="porpleCountSubmit" value="{$returnVal.porpleCountSubmit}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">预约时间</label>
                <div class="col-sm-10">
                    <p class="form-control-static">{$returnVal.orderDateInput} {$returnVal.orderTimeInput} {$returnVal.weekNum}</p>
                    <input type="hidden" name="orderDateInput" value="{$returnVal.orderDateInput} {$returnVal.weekNum}">
                    <input type="hidden" name="orderTimeInput" value="{$returnVal.orderTimeInput}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">所选项目</label>
                <div class="col-sm-10">
                    <p class="form-control-static">{$returnVal.merchandiseIteams}</p>
                    <input type="hidden" name="orderMerchandise" value="{$returnVal.orderMerchandise}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">费用</label>
                <div class="col-sm-10">
                    <p class="form-control-static">{$returnVal.needMoney}元</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">预约指定</label>
                <div class="col-sm-10">
                    <input type="hidden" name="orderObject" value="{$returnVal.orderObject}">
                    <p class="form-control-static">
                        {if $returnVal.orderObject eq ""}
                            无
                        {else}
                            {$returnVal.orderObject}
                        {/if}
                    </p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                <button type="button" onclick="" class="btn btn-primary">支&nbsp;&nbsp;&nbsp;付</button>
                <button type="submit" class="btn btn-primary">修&nbsp;&nbsp;&nbsp;改</button>
                </div>
            </div>
            <div style="height:  50px;"></div>
            </form>
        </div>
    </body>
</html>