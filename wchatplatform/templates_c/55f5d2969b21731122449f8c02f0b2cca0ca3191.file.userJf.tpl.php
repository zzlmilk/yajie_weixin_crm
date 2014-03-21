<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-14 08:10:07
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/User/userJf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12796423765322b95f9d7d21-87395148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55f5d2969b21731122449f8c02f0b2cca0ca3191' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/User/userJf.tpl',
      1 => 1394784605,
    ),
  ),
  'nocache_hash' => '12796423765322b95f9d7d21-87395148',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

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
        <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/ggk/jQuery.js">
</script>
        <title>
            交易明细
        </title>
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
        </style>
        <script type="text/javascript">


        $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
        })

        </script>
    </head>
    <body>
        <div class="myInfoStyle">
            积分
        </div><!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li style='width: 50%;'>
                <a href="#home" data-toggle="tab">积分</a>
            </li>
            <li style='width: 50%;'>
                <a href="#profile" data-toggle="tab">消费</a>
            </li>
        </ul><!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                <div style='clear: both; height: 5em;  background-color: rgb(230,230,230)'>
                    <div style='float: left; width:54%;'>
                        <div style='font-size: 2em; font-weight: bold; text-indent: 0.5em;'>
                            大转盘
                        </div>
                        <div style='text-indent: 1em;'>
                            2014-03-13
                        </div>
                    </div>
                    <div style='float: left; color: rgb(252,84,34);font-size: 3em;'>
                        <div>
                            +20
                        </div>
                    </div>
                </div>

                <div style='height: 10px;'>&nbsp;</div>

                <div style='clear: both;  height: 5em;  background-color: rgb(230,230,230)'>
                    <div style='float: left; width:54%;'>
                        <div style='font-size: 2em; font-weight: bold; text-indent: 0.5em;'>
                            支付兑换
                        </div>
                        <div style='text-indent: 1em;'>
                            2014-03-13
                        </div>
                    </div>
                    <div style='float: left;'>
                        <div style='line-height: 1em; font-size: 3em;color: rgb(252,84,34);'>
                            +20
                        </div>
                    </div>
                </div>


            </div>
            <div class="tab-pane" id="profile">
               <div style='clear: both; height: 5em;  background-color: rgb(230,230,230)'>
                    <div style='float: left; width:54%;'>
                        <div style='font-size: 2em; font-weight: bold; text-indent: 0.5em;'>
                            消费
                        </div>
                        <div style='text-indent: 1em;'>
                            2014-03-13
                        </div>
                    </div>
                    <div style='float: left; color: rgb(23,146,104);font-size: 3em;'>
                        <div>
                            -200
                        </div>
                    </div>
                </div>

                 <div style='height: 10px;'>&nbsp;</div>
                  <div style='clear: both;  height: 5em;  background-color: rgb(230,230,230)'>
                    <div style='float: left; width:54%;'>
                        <div style='font-size: 2em; font-weight: bold; text-indent: 0.5em;'>
                            充值
                        </div>
                        <div style='text-indent: 1em;'>
                            2014-03-13
                        </div>
                    </div>
                    <div style='float: left;'>
                        <div style='line-height: 1em; font-size: 3em;color: rgb(252,84,34);'>
                            +20
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>