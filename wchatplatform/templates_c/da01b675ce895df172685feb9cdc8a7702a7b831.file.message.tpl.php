<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-17 10:34:59
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/Public/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1355032492534f3dd342dda2-78018833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da01b675ce895df172685feb9cdc8a7702a7b831' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/Public/message.tpl',
      1 => 1397036354,
    ),
  ),
  'nocache_hash' => '1355032492534f3dd342dda2-78018833',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

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
                Font-size=62.5%;
            }
            .registerWarp{
                margin: 0 auto;
                margin-top: 2em;
                width: 90%;
                text-align: center;
            }

        </style>
    </head>
    <body>

    <div id="errorMessage" class="alert alert-danger "><?php echo $_smarty_tpl->getVariable('msg')->value;?>
</div>
</boby>