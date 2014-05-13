<!DOCTYPE html>
<html> 
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />


        <!-- 最新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css"> -->

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>


        <title>管理员</title>
        <style>
            body{
                Font-size=62.5%;
            }
            .bigWheelWarp{
                width: 100%;
            }
            .titleStyle{
                color: rgb(91,91,91);
                font-size: 2.5em;
                text-align: center;
                height: 3em;
                line-height: 3em;
            }
            .textStyle{
                text-align: center;
                margin-top: 8em;
            }
            .dataArea{
                text-align: left;
                min-width: 500px;
                margin: 0 auto;
                height: 300px;
            }
            table tr>th{
                text-align: center;
            }
            table tr>td{
                text-align: center;
                vertical-align:middle !important;
            }
            .userMangerTitle{
                color: rgb(91,91,91);
                font-size: 25px;
                margin-top: 15px;
                text-align: center;
            }
        </style>
    </head>
    <body>

        <div class="bigWheelWarp">
            <div class="titleStyle">微信数据</div>
            <div style="height: 50px;"></div>
            <div class="dataArea">
                <table class="table table-striped" >
                    <tr><th>昵称</th><th>性别</th><th>语言</th><th>城市</th><th>关注时间</th></tr>
                    {foreach from=$weixinUserData item=weixinUserIteam key=key}
                        <tr>
                            <td>{$weixinUserIteam.nickname}</td>
                            <td>
                                {if $weixinUserIteam.sex eq 1}
                                    男
                                {else}
                                    女
                                {/if} 
                            </td>
                            <td>{$weixinUserIteam.language}</td>
                            <td>{$weixinUserIteam.country}&nbsp;{$weixinUserIteam.province}&nbsp;{$weixinUserIteam.city}</td>
                            <td>{$weixinUserIteam.subscribe_time|date_format:"%Y-%m-%d"}</td>
                        </tr>
                    {/foreach}
                </table>
            </div>
            <div style="text-align: center">{$pages}</div> 
        </div>
    </body>
</html>