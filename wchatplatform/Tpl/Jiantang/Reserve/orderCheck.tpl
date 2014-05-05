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
                border-radius: 7px;
                width:85%;
                margin: 0 auto;
                background-color: #e3e3e3;
                height: 100%;
                margin-top: 1em;
            }

            .topNameTry{
                height: 3em; font-size: 1.2em; line-height: 3em; color: rgb(70,140,200);
            }
            .topTitleTry{
                float: left; height: 3em; font-size: 1.2em; line-height: 3em;
            } 
            label{
                font-weight: normal;
            }
            .moneyArea{
                text-align: right;
                padding-right: 15px;
            }
            .messageTitle{
                width: 90px;
            }
        </style>
    </head>
    <body style='background-color: rgb(243,237,227);'>
        <form method='post' role="form" action="{$WebSiteUrl}?g={$model}&a=order&v=order&checkReturn=1&open_id={$open_id}">
            <div class="cardBackground"  style='background-color: #fff;position: relative;'>
                <div style="position: absolute; right: 15px; top:0;z-index: 150;">
                    {if $returnVal.orderState=="1"}
                        <p type="button" disabled="" style="opacity: 1;"><h3>过&nbsp;&nbsp;&nbsp;期</h3></p>
                    {else}
                        <button type="submit" style="width: 60px;margin-top: 8px; " class="btn btn-primary">编&nbsp;&nbsp;&nbsp;辑</button>
                    {/if}

                </div>

                <div class="form-group" style=" margin-top: 1.5em; margin-bottom: 0px;">
                    <label class="col-sm-2  topTitleTry"style="">交易项目</label>
                    <div class="col-sm-10">
                        <p class="form-control-static topNameTry">{$returnVal.merchandiseIteams}</p>
                        <input type="hidden" name="orderMerchandise" value="{$returnVal.orderMerchandise}">
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div style="border-bottom: 1px dotted #bbb;height: 1px; "></div>
                <div style="height:25px;"></div>
                <div class="form-group" style="">
                    <label class="col-sm-2 control-label"style="">交易金额</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><h1 class="moneyArea">-{$returnVal.needMoney}元</h1></p>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div style="border-bottom: 1px solid #bbb;height: 1px; "></div>
                <div style="height: 10px;"></div>
                <div class="form-group" style="">
                    <label class="col-sm-2 control-label" style="">订单信息</label>
                    <div style="clear: both;"></div>
                </div>
                <div class="form-group" style="">
                    <label class="col-sm-2 control-label messageTitle" style="float: left; ">人数</label>
                    <div class="col-sm-10" style="text-align: left; width: 80%;">
                        <p class="form-control-static">{$returnVal.porpleCountSubmit}人</p>
                        <input type="hidden" name="porpleCountSubmit" value="{$returnVal.porpleCountSubmit}">
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div class="form-group" style=" ">
                    <label class="col-sm-2 control-label messageTitle"style="float: left;">预约时间</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{$returnVal.orderDateInput} {$returnVal.orderTimeInput} {$returnVal.weekNum}</p>
                        <input type="hidden" name="orderDateInput" value="{$returnVal.orderDateInput} {$returnVal.weekNum}">
                        <input type="hidden" name="orderTimeInput" value="{$returnVal.orderTimeInput}">
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div class="form-group"style="">
                    <label class="col-sm-2 control-label messageTitle"style="float: left; ">预约指定</label>
                    <div class="col-sm-10"style="text-align: left; width: 80%;">
                        <input type="hidden" name="orderObject" value="{$returnVal.orderObject}">
                        <p class="form-control-static" >
                            {if $returnVal.orderObject eq ""}
                                无
                            {else}
                                {$returnVal.orderObject}
                            {/if}
                        </p>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div class="form-group" style="margin-top: 2.5em; text-align: center;">
                    <div class="col-sm-10">
                        {if $returnVal.orderState=="1"}

                        {else}
                            <a href="{$WebSiteUrl}?g={$model}&a=order&v=payment&open_id={$open_id}"><button type="button" style="width: 180px;" class="btn btn-primary">确&nbsp;&nbsp;&nbsp;认</button></a>
                        {/if}

                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div style="height: 1em;"></div>
        </form>
    </div>

</body>
<div style="height: 1.5em;"></div>
</html>