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


        <title>问卷调差统计</title>
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
                margin-top: 2em;
            }
            .textWidth{
                width:50%;
                margin: 0 auto;
            }
            .inputStyle{
                display: inline-block;
                width: auto;
            }    
            .sortBar{
                width: 60%;
                margin: 0 auto;
                text-align: center;
            }
        </style>
    </head>
    <body>

        <div class="bigWheelWarp">
            <div class="titleStyle">验证优惠码</div>

            <div style="height: 55px;"></div>
            <!-- 概率配置模块 -->
            <div class="tab-pane active textWidth" id="probability" >
                <form method="post" action="{$WebSiteUrl}/pageredirst.php?action=promoCode&functionname=promoCodeCheck">
                    <div class='textStyle form-group'><label  class=' control-label labelWidth'>请输入优惠码：</label>
                        <input  class='form-control inputStyle' value="" name="promoCode" id="promoCode">
                        <button type="submit" class="btn btn-primary">确认</button>
                    </div>
                    {if $responseMessage neq ""}
                        <div class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label">{$responseMessage}</label></div>
                    {/if}
                </form>
            </div>


        </div>
    </body>
</html>