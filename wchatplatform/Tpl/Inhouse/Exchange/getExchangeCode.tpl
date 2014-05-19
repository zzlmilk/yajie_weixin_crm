<!DOCTYPE html>
<html>
    <head>
        <title>获取验证码</title>
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
                width: 206px;
                height: 133px;
                background: url('{$WebSiteUrlPublic}/image/exchangeBox.png');
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
                height: 125px;
                margin-top: 15px;

            }
            .round_photo{
                width:100%;
                height: auto;
                min-height: 65px;
                border:1px solid #ddddde;
                -moz-border-radius: 59px;
                -webkit-border-radius: 59px;
                border-radius:50%;

            }
            .siteClass{

                color: rgb(128,128,128);
            } 
            .graph{  

                width: 0;     height: 0;     border-bottom: 38px solid rgb(70,140,200);  

                border-left: 41px solid transparent;

            }  
            .giftBox{
                background-color: white; 
                width: 45%;
                height:240px;
                float: left;
                margin-right:  10px;
                margin-top: 15px;
                border: 1px solid #8C8C8C;
            }
            .integration{
                color: orange; 
                text-align: right; 
                padding-right: 10px;
                font-weight: bold;
            }
            .integration a{
                color: orange;
            }
            .integration a:hover{
                color: orange;
                text-decoration: none;
            }
        </style>
    </head>
    <body style="background: url('{$WebSiteUrlPublic}/image/beijing.png');">
        <!--
                <div style='  width: 100%; background-color: rgb(255,255,247);position: relative;'>
        
                    <div style='height: 0.2em;width: 100%;'>&nbsp;</div>
        
        
                    <div style=' width: 18%;'>
                        <img src="{$weixinUserInfo.headimgurl}"  class="round_photo">
                    </div>
        
        
        
                    <div style=' width: 66%; overflow: hidden; position: absolute; left: 20%; top: 5%;'>
        
                        <div style='margin-top:10%;line-height: 15px;'>
                            <span style='font-size:15px; display: inline-block;  height: 4%;  '>用户昵称：{$weixinUserInfo.nickname}</span>
                            <span id="userIntegration" style='font-size:15px; display: inline-block;  height: 4%;  '>剩余积分:{$localUserInfo.user_integration}</span>
                        </div>
                    </div>
                </div>-->
        <div style="height: 100px;"></div>
        <div class="registerWarp" style="">
            <div style="height: 50px;"></div>
            <p style="text-align: center;font-we1ight: bold;background-color: white;width: 85px; margin: 0 auto;height: 25px;line-height: 25px"><strong style="color:#26a4de;font-size: 20px"> {$exchangeCode.code}</strong></p>
            <div style="height: 10px;"></div>
             <p style="text-align: center; padding-left: 8px;color: #fff">请在10分钟内到前台换取物品，获取时间:{$exchangeCode.create_time|date_format:"%m/%d %H:%M"}</p>
            <div style="height: 10px;"></div>
        </div>
    </body>
</html>