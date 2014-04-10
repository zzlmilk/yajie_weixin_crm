<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-09 15:21:10
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/User/user_code_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20086026285344f4e6764784-86541703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36ebe7dfaffc155ee422075f3f7548bd7fa745bb' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/User/user_code_detail.tpl',
      1 => 1397028047,
    ),
  ),
  'nocache_hash' => '20086026285344f4e6764784-86541703',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
    <head>
        <title>兑换列表</title>
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
        <div class="registerWarp">
            
            <div>
                
                <p>优惠码：<?php echo $_smarty_tpl->getVariable('codeInfo')->value['code_info']['code_name'];?>
</p>
                <div style="text-align: left;">
                    
                </div>
                <p><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=company&a=user&v=giveResult&code_id=<?php echo $_smarty_tpl->getVariable('codeInfo')->value['code_info']['promo_code_id'];?>
&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
&give_open_id=<?php echo $_smarty_tpl->getVariable('give_open_id')->value;?>
"><button type="button" class="btn btn-primary btn-xs">领取</button></a></p>
            </div>
        </div>
    </body>
</html>