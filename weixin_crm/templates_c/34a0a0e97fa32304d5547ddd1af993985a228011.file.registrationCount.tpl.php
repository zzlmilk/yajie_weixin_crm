<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-26 18:49:36
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/registration/registrationCount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8450293355332b0c0bda768-55895821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34a0a0e97fa32304d5547ddd1af993985a228011' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/registration/registrationCount.tpl',
      1 => 1395804723,
    ),
  ),
  'nocache_hash' => '8450293355332b0c0bda768-55895821',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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


        <title>每日签到统计</title>
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
        </style>
    </head>
    <body>

        <div class="bigWheelWarp">
            <div class="titleStyle">每日签到统计</div>

            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#probability" data-toggle="tab">签到统计</a></li>

            </ul>

            <div class="tab-content">
                <!-- 概率配置模块 -->
                <div class="tab-pane active" id="probability" >
                    <div class='textStyle form-group'><label  class=' control-label labelWidth'>今日签到的总人数为：</label>
                        <label  class='control-label labelWidth'><?php echo $_smarty_tpl->getVariable('registrationNumber')->value;?>
人</label>
                    </div>
                     

                </div>
            </div>

        </div>
    </body>
</html>