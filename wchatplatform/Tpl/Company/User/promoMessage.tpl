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
        </style>
    </head>
    <body style='background-color: rgb(243,237,227);'>
        <!--有效-->
        <div class="cardBackground cardBackgroundColorEffective"  style='position: relative;'>
            <div class="promoTitle">优惠券</div>
            <div style="text-align: center;">
                <div class="serviceNumStyle" style="display: inline-block">7</div><div style="display: inline-block;font-size: 20px;">折</div>
            </div>
            <div class="whereFrom">
                来自：刮刮卡
            </div>
            <div style="height:  10px;"></div>
            <div style="border-bottom: 1px dashed #bbb;height: 1px; "></div>
            <div style="height:  10px;"></div>
            <div class="form-group" style="">
                <label class="col-sm-2 control-label messageTitle" style="float: left; ">有效期：</label>
                <div class="col-sm-10" style="text-align: left; ">
                    <p class="form-control-static">2014-03-29 至 2015-03-29</p>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div class="form-group" style=" ">
                <label class="col-sm-2 control-label messageTitle"style="float: left;">领取日：</label>
                <div class="col-sm-10">
                    <p class="form-control-static">2014-03-28</p>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div style="height:  5px;"></div>
        </div>
        <!--有效页面结束-->
        <!--失效界面-->
        <div class="cardBackground cardBackgroundColorOverdue"  style='position: relative;'>
            <div style="position: absolute; right: 15px; top:0;">
                <p type="button" disabled="" style="opacity: 1;"><h3>过&nbsp;&nbsp;&nbsp;期</h3></p>
            </div>
            <div class="promoTitle">优惠券</div>
            <div style="text-align: center;">
                <div class="serviceNumStyle" style="display: inline-block">9</div><div style="display: inline-block;font-size: 20px;">折</div>
            </div>
            <div class="whereFrom">
                来自：刮刮卡
            </div>
            <div style="height:  10px;"></div>
            <div style="border-bottom: 1px dashed #bbb;height: 1px; "></div>
            <div style="height:  10px;"></div>
            <div class="form-group" style="">
                <label class="col-sm-2 control-label messageTitle" style="float: left; ">有效期：</label>
                <div class="col-sm-10" style="text-align: left; ">
                    <p class="form-control-static">2014-03-25 至 2014-03-26</p>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div class="form-group" style=" ">
                <label class="col-sm-2 control-label messageTitle"style="float: left;">领取日：</label>
                <div class="col-sm-10">
                    <p class="form-control-static">2014-03-25</p>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div style="height:  5px;"></div>
        </div>
        <!--失效界面结束-->
        <div style="height: 15px;"></div>
    </body>
</html>