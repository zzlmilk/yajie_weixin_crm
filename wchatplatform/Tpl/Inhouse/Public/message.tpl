<!DOCTYPE html>
<html>
    <head>
        <title>提示</title>
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
                background-image: url('{$WebSiteUrlPublic}/image/beijing.png');
            }
            .registerWarp{
                margin: 0 auto;
                margin-top: 2em;
                width: 90%;
                text-align: center;
            }
            .errorMessage{
                /*border: solid 1px red;*/
                text-align: center;
                color: rgb(71,71,71);
                font-size: 1.2em;
                height: 3em;
                line-height: 4em;
            }
            .errorImg{
               /* border: solid 1px red;*/
                text-align: center;
            }
            .errorImg img{
            max-width:100%;
            height:auto;   
            width: 25%;
            }
        </style>
    </head>
    <body>
        <div style=" height: 5em;"></div>
        <div class="errorImg">
            <img src="{$WebSiteUrlPublic}/image/error.png">
        </div>
        <div class="errorMessage">{$msg}</div>
        <div style=" height: 3em;"></div>
    </body>
    
    
     <script>

            var ISWP = !!(navigator.userAgent.match(/Windows\sPhone/i));
            var sw = 0;

            if (ISWP) {
                var profile = document.getElementById('post-user');
                if (profile) {
                    profile.setAttribute("href", "weixin://profile/gh_fd9ca5a6a0fd");
                }
            }

            function viewProfile() {
                if (typeof WeixinJSBridge != "undefined" && WeixinJSBridge.invoke) {
                    WeixinJSBridge.invoke('profile', {
                        'username': 'gh_fd9ca5a6a0fd',
                        'scene': '57'
                    });
                }
            }

        </script>
