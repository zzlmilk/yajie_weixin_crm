<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-05 17:44:33
         compiled from "C:\Apache24\htdocs\yajie_weixin_crm\wchatplatform/Tpl/Jiantang/Public/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299653675d81220811-06409108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e5c90efd56ada5f12ffe38a5887c945b14d0425' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\yajie_weixin_crm\\wchatplatform/Tpl/Jiantang/Public/message.tpl',
      1 => 1399281729,
    ),
  ),
  'nocache_hash' => '299653675d81220811-06409108',
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