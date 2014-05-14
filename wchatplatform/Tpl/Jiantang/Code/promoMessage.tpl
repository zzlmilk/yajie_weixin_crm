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

        <title>优惠码信息</title>

        <style>
            body{
                min-width: 320px;
                Font-size=62.5%;
            }
            .cardBackground{
                border-radius: 7px;
                width:90%;
                margin: 0 auto;
                margin-top: 1em;
                color:#fff;
            }
            /*
                优惠码有效背景
            */
            .cardBackgroundColorEffective{
                background-color:#EEB654;
            }
            /*
                优惠码失效背景
            */
            .cardBackgroundColorOverdue{
                background-color:#CFCFCF;
            }
            .promoTitle{
                padding-top: 1.5em;
                color: #fff;
                padding-left: 15px;
                font-size: 16px;
            }
            .serviceNumStyle{
                font-size: 75px;
            }
            .whereFrom{
                text-align: right;
                padding-right: 15px;
            }
            .titleTag{
                background-color: #fff;
                width: 100%;
            }
            .titleTag ul{
                list-style-type: none;
                padding-left: 0px;
            }
            .titleTag ul li{
                display: inline-block;
                width: 30%;
                text-align: center;
                height: 3em;
                line-height: 3em;
            }
            .titleTag ul li a{
                color: black;
            }
            .titleTag ul li a:hover{
                text-decoration: none;
            }
            .titleTagActive{
                color:#EEB654 !important;
            }
        </style>
    </head>
    <body style='background-color: rgb(243,237,227);'>
        <div class="titleTag">
            <ul >
                {if $groupBy eq ""}
                    <li ><a class="titleTagActive">未使用</a></li>
                    <li><a href="{$WebSiteUrl}?g={$model}&a=code&v=promoMessage&groupBy=used&open_id={$open_id}">已兑换</a></li>
                    <li><a href="{$WebSiteUrl}?g={$model}&a=code&v=promoMessage&groupBy=timeOut&open_id={$open_id}">已过期</a></li>
                {else if $groupBy eq "used"}
                    <li ><a href="{$WebSiteUrl}?g={$model}&a=code&v=promoMessage&open_id={$open_id}">未使用</a></li>
                    <li><a class="titleTagActive" >已兑换</a></li>
                    <li><a href="{$WebSiteUrl}?g={$model}&a=code&v=promoMessage&groupBy=timeOut&open_id={$open_id}">已过期</a></li>
                {else if $groupBy eq "timeOut"}
                    <li ><a href="{$WebSiteUrl}?g={$model}&a=code&v=promoMessage&open_id={$open_id}">未使用</a></li>
                    <li><a href="{$WebSiteUrl}?g={$model}&a=code&v=promoMessage&groupBy=used&open_id={$open_id}">已兑换</a></li>
                    <li><a class="titleTagActive"  >已过期</a></li>
                {/if}
            </ul>
        </div>
        <!--有效-->
        {if  $codeInfo eq ""}
            <div class="cardBackground cardBackgroundColorOverdue"  style='position: relative;'>
                <div style="position: absolute; right: 15px; top:0;">

                </div>
                <div class="promoTitle">{$codeInfoItem.code_name}</div>
                <div style="text-align: center;">
                    <div class="serviceNumStyle" style="display: inline-block;font-size: 50px;">暂无</div><div style="display: inline-block;font-size: 20px;"></div>
                </div>
                <div class="whereFrom">
                    来自：
                </div>
                <div style="height:  10px;"></div>
                <div style="border-bottom: 1px dashed #bbb;height: 1px; "></div>
                <div style="height:  10px;"></div>
                <div class="form-group" style="">
                    <label class="col-sm-2 control-label messageTitle" style="float: left; ">有效期：</label>

                    <div style="clear: both;"></div>
                </div>
                <div class="form-group" style=" ">
                    <label class="col-sm-2 control-label messageTitle"style="float: left;">领取日：</label>

                    <div style="clear: both;"></div>
                </div>
                <div style="height:  5px;"></div>
            </div>
        {else if $codeInfo eq "error"}
            <div class="cardBackground cardBackgroundColorOverdue"  style='position: relative;'>
                <div style="position: absolute; right: 15px; top:0;">

                </div>
                <div class="promoTitle">{$codeInfoItem.code_name}</div>
                <div style="text-align: center;">
                    <div class="serviceNumStyle" style="display: inline-block;font-size: 50px;">暂无</div><div style="display: inline-block;font-size: 20px;"></div>
                </div>
                <div class="whereFrom">
                    来自：
                </div>
                <div style="height:  10px;"></div>
                <div style="border-bottom: 1px dashed #bbb;height: 1px; "></div>
                <div style="height:  10px;"></div>
                <div class="form-group" style="">
                    <label class="col-sm-2 control-label messageTitle" style="float: left; ">有效期：</label>

                    <div style="clear: both;"></div>
                </div>
                <div class="form-group" style=" ">
                    <label class="col-sm-2 control-label messageTitle"style="float: left;">领取日：</label>

                    <div style="clear: both;"></div>
                </div>
                <div style="height:  5px;"></div>
            </div>
        {else}
            {foreach from=$codeInfo item=codeInfoItem key=key}
                {if $codeInfoItem.code_end_time lt $nowTime}
                    <!--失效界面-->
                    <div class="cardBackground cardBackgroundColorOverdue"  style='position: relative;'>
                        <div style="position: absolute; right: 15px; top:0;">
                            <p type="button" disabled="" style="opacity: 1;"><h3>过&nbsp;&nbsp;&nbsp;期</h3></p>
                        </div>
                        <div class="promoTitle">{$codeInfoItem.code_name}</div>
                        <div style="text-align: center;">
                            <div class="serviceNumStyle" style="display: inline-block">{$codeInfoItem.commodity_cost}</div><div style="display: inline-block;font-size: 20px;">折</div>
                        </div>
                        <div class="whereFrom">
                            
                           
                             来自：
                            {if $codeRecord.$key.state == 1}
                            
                            赠送
                            {else if $codeRecord.$key.state == 2}
                               已赠送
                               
                             {else}
                                 
                               刮刮卡
                             {/if}
                            
                            
                        </div>
                        <div style="height:  10px;"></div>
                        <div style="border-bottom: 1px dashed #bbb;height: 1px; "></div>
                        <div style="height:  10px;"></div>
                        <div class="form-group" style="">
                            <label class="col-sm-2 control-label messageTitle" style="float: left; ">有效期：</label>
                            <div class="col-sm-10" style="text-align: left; ">
                                <p class="form-control-static">{$codeInfoItem.code_begin_time|date_format:"%Y-%m-%d"} 至 {$codeInfoItem.code_end_time|date_format:"%Y-%m-%d"}</p>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                        <div class="form-group" style=" ">
                            <label class="col-sm-2 control-label messageTitle"style="float: left;">领取日：</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{$codeInfoItem.createTime|date_format:"%Y-%m-%d"}</p>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                        <div style="height:  5px;"></div>
                    </div>
                {else}
                    <div class="cardBackground cardBackgroundColorEffective"  style='position: relative;'>
                        <div class="promoTitle">{$codeInfoItem.code_name}</div>
                        <div style="text-align: center;">
                            <div class="serviceNumStyle" style="display: inline-block">{$codeInfoItem.commodity_cost}</div><div style="display: inline-block;font-size: 20px;">折</div>
                        </div>
                        <div class="whereFrom">
                              来自：
                            {if $codeRecord.$key.state == 1}
                            
                            赠送
                            {else if $codeRecord.$key.state == 2}
                               已赠送
                               
                             {else}
                                 
                               刮刮卡
                             {/if}
                        </div>
                        <div style="height:  10px;"></div>
                        <div style="border-bottom: 1px dashed #bbb;height: 1px; "></div>
                        <div style="height:  10px;"></div>
                        <div class="form-group" style="">
                            <label class="col-sm-2 control-label messageTitle" style="float: left; ">有效期：</label>
                            <div class="col-sm-10" style="text-align: left; ">
                                <p class="form-control-static">{$codeInfoItem.code_begin_time|date_format:"%Y-%m-%d"} 至 {$codeInfoItem.code_end_time|date_format:"%Y-%m-%d"}</p>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                        <div class="form-group" style=" ">
                            <label class="col-sm-2 control-label messageTitle"style="float: left;">领取日：</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{$codeInfoItem.createTime|date_format:"%Y-%m-%d"}</p>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                        <div style="height:  5px;"></div>
                    </div>
                {/if}
            {/foreach}
        {/if}
        <!--有效页面结束-->

        <!--失效界面结束-->
        <div style="height: 15px;"></div>
    </body>
</html>