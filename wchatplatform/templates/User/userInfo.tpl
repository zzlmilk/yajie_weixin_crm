<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes"><!-- 最新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" type="text/css"><!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css"> -->
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->

        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript">
</script><!-- 最新的 Bootstrap 核心 JavaScript 文件 -->

        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js" type="text/javascript">
</script>
        <script type="text/javascript" src="{$WebSiteUrlPublic}/company/ggk/jQuery.js">
</script>
        <link rel="stylesheet" href="{$WebSiteUrlPublic}/company/user/dist/ratchet.css" type="text/css">
        <link rel="stylesheet" href="{$WebSiteUrlPublic}/company/user/dist/ratchet-theme-ios.css" type="text/css">
        <link rel="stylesheet" href="{$WebSiteUrlPublic}/company/user/css/app.css" type="text/css">
        <script src="{$WebSiteUrlPublic}/company/dist/ratchet.js" type="text/javascript">
</script>
        <title>
            我的信息
        </title>
        <script type="text/javascript">
</script>
        <style type="text/css">
body{
            Font-size=62.5%;
        }
        .myInfoWarp{
            /*border: solid 1px red;*/

        }
        .myInfoStyle{
        /*  border: solid 1px red;*/
            height: 1.5em;
            text-align: center;
            line-height: 1.5em;
            font-size: 2em;
            background-color: rgb(104,175,59);
            text-shadow: 0em 0.1em 0.1em #000;
            color: #fff;
            
        }
        .myNamePhoto{
            /*border: solid 1px red;*/
            /*height: 10em;*/
            background-color: rgb(183,200,47);
            height: 10em;
        }
        .otherInfo{
            border: solid 1px #000;
            border-top: none;
            /*height: 5em;*/
        }
        .photo{
            width: 5em; 
            height: 5em; 
            background: rgb(200,137,37); 
            -moz-border-radius: 5em; 
            -webkit-border-radius: 5em; 
            border-radius: 5em; 
            margin-left: 1.5em;
            
            padding-top: 3em;
        }
        .textInfo{
            /*border: solid 1px red;*/
            width: 66%;
            float: right;
            /*height: 10em;*/
            margin-top: -5em;
        }

        tr{
            border: solid 0.1em #000;
        }
        .tdTitle{
            width: 50%;
            font-size: 1.5em;
            text-shadow: 0em 0.1em 0.1em #000;
        }
        .tdContent{
            width: 50%;
            text-align: right;
            font-size: 1.5em;
            text-shadow: 0em 0.1em 0.1em #000;
        }
        #userName{
            width: 80%;
            font-weight: bolder;
            border: none;
            background-color: rgb(183,200,47);
            font-size: 1.2em;
            height: 1.8em;
        }
        #userPhone{
            margin-top: 0.3em;
            width: 80%;
            font-weight: bolder;
            border: none;
            background-color: rgb(183,200,47);
            font-size: 1.2em;
            height: 1.8em;

        }
        .slash{
            width: 3em;
            height: 1em;
            float: right;
            border-top: 0.2em solid rgb(80,121,45);
            -webkit-transform: rotate(135deg);
            filter: progid:DXImageTransform.Microsoft.BasicImage(Rotation=0.45);
            margin-right: 2em;
            margin-top: 1em;
        }

        </style>
    </head>
    <body>
        <div class="content">

            <div class="myInfoWarp">

                <div class="myInfoStyle">我的信息</div>
                <div class="myNamePhoto">
                    <div style="height: 1em;"></div>
                    <div class="photo"></div>

                    <div class="textInfo">
                        <div>
                            <input type="text" id="userName" readonly="true" name="userName" value="rex"/>
                        </div>
                        <div>

                            <input type="text" id="userPhone"  readonly="true"name="userPhone" value="15901794453"/>
                        </div>

                    </div>

                    <div class="slash"></div>


                </div>

                <div class="otherInfo">
                    <table style=" width: 100%;">
                        <tr>
                            <td class="tdTitle">余额</td>
                            <td class="tdContent">239</td>
                        </tr>
                        <tr>
                            <td class="tdTitle">积分</td>
                            <td class="tdContent">90</td>
                        </tr>
                    </table>

                   
                </div>
            </div>


            <ul class="table-view">
                <li class="table-view-cell media">
                    <a class="push-right" data-transition="slide-in"><!-- <span class="media-object icon icon-person pull-left"></span> --></a>
                    <div class="media-body" onclick='window.location.href="{$websiteUrl}?g=company&a=user&v=userJf"'>
                        积分明细
                    </div>
                </li>
            </ul>
        </div>
    </body>
</html>