<html>
    <head>
        <meta charset="utf-8">
        <title>会员中心</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="{$WebSiteUrlPublic}/Inhouse/user/dist/ratchet.css">
        <link rel="stylesheet" href="{$WebSiteUrlPublic}/Inhouse/user/dist/ratchet-theme-ios.css">
        <link rel="stylesheet" href="{$WebSiteUrlPublic}/Inhouse/user/css/app.css">
        <script src="{$WebSiteUrlPublic}/Inhouse/dist/ratchet.js"></script>
        <style>
            body{
                Font-size=62.5%;
            }
            .round_photo{
                width:100%;
                height: auto;
                border:1px solid #ddddde;
                -moz-border-radius:10%;
                -webkit-border-radius: 10%;
                border-radius:10%;

            }
            .siteClass{

                color: rgb(128,128,128);
            } 
            .graph{  

                width: 0;     height: 0;     border-bottom: 38px solid rgb(70,140,200);  

                border-left: 41px solid transparent;

            }  
            .expenseBox{
                min-height:50px;
                width: 100%;
                margin-top: 20px; 
                background-color: rgb(255,255,247);
            }

        </style>
    </head>
    <body style="background-color: #E7E7E7;">
        <div style='  width: 100%; background-color: rgb(255,255,247); position: relative;'>

            <div style='height: 0.8em;width: 100%;'>&nbsp;</div>


            <div style=' width: 18%;margin-left: 5px;'>
                <img src='{$userinfo.weixin_user.headimgurl}' class='round_photo'>
            </div>
            <div style='height: 0.8em;width: 100%;'>&nbsp;</div>


            <div style=' width: 66%; overflow: hidden; position: absolute; left: 25%; top: 5px;'>

                <div style='margin-top: 4%;  '>
                    <div class='siteClass' style='font-size:14px;' >昵称:&nbsp; aaaa{$userinfo.weixin_user.nickname}</div>
                </div>
                <div class='siteClass' style='font-size:14px;'>积分:&nbsp; 1800{$userinfo.user.user_phone}</div>
                <div class='siteClass' style='font-size:14px;'>卡号:&nbsp; 3502-6890-885{$userinfo.user.user_phone}</div>


            </div>

        </div>

        <div class="expenseBox" style="">
            <div style="border-bottom: 1px solid #e7e7e7">
                2014-05-21 10:28:23 <span>总计</span>   
            </div>
        </div>
    </body>
</html>