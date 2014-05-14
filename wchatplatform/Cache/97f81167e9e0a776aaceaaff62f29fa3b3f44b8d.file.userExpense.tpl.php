<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-14 11:05:16
         compiled from "C:\Apache24\htdocs\yajie_weixin_crm\wchatplatform/Tpl/Inhouse/User/userExpense.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118295372dd6c351646-98470235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f81167e9e0a776aaceaaff62f29fa3b3f44b8d' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\yajie_weixin_crm\\wchatplatform/Tpl/Inhouse/User/userExpense.tpl',
      1 => 1400036713,
    ),
  ),
  'nocache_hash' => '118295372dd6c351646-98470235',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <meta charset="utf-8">
        <title>会员中心</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/Inhouse/user/dist/ratchet.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/Inhouse/user/dist/ratchet-theme-ios.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/Inhouse/user/css/app.css">
        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/Inhouse/dist/ratchet.js"></script>
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
                <img src='<?php echo $_smarty_tpl->getVariable('userinfo')->value['weixin_user']['headimgurl'];?>
' class='round_photo'>
            </div>
            <div style='height: 0.8em;width: 100%;'>&nbsp;</div>


            <div style=' width: 66%; overflow: hidden; position: absolute; left: 25%; top: 5px;'>

                <div style='margin-top: 4%;  '>
                    <div class='siteClass' style='font-size:14px;' >昵称:&nbsp; aaaa<?php echo $_smarty_tpl->getVariable('userinfo')->value['weixin_user']['nickname'];?>
</div>
                </div>
                <div class='siteClass' style='font-size:14px;'>积分:&nbsp; 1800<?php echo $_smarty_tpl->getVariable('userinfo')->value['user']['user_phone'];?>
</div>
                <div class='siteClass' style='font-size:14px;'>卡号:&nbsp; 3502-6890-885<?php echo $_smarty_tpl->getVariable('userinfo')->value['user']['user_phone'];?>
</div>


            </div>

        </div>

        <div class="expenseBox" style="">
            <div style="border-bottom: 1px solid #e7e7e7">
            </div>
        </div>
    </body>
</html>