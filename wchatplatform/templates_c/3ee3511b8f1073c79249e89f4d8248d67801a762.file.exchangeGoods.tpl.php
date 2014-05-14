<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-17 15:12:18
         compiled from "C:/Apache24/htdocs/yajie_weixin_crm/wchatplatform/templates/Exchange/exchangeGoods.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9771534f7ed229f359-10892156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ee3511b8f1073c79249e89f4d8248d67801a762' => 
    array (
      0 => 'C:/Apache24/htdocs/yajie_weixin_crm/wchatplatform/templates/Exchange/exchangeGoods.tpl',
      1 => 1397718737,
    ),
  ),
  'nocache_hash' => '9771534f7ed229f359-10892156',
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
            <div ><img width="88" height="88" src="<?php echo $_smarty_tpl->getVariable('WebImageUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('exchangeInfo')->value['exchange_image'];?>
"></div>
            <div>
                <p><?php echo $_smarty_tpl->getVariable('exchangeInfo')->value['exchange_summary'];?>
</p>
                <p><?php echo $_smarty_tpl->getVariable('exchangeInfo')->value['exchange_name'];?>
</p>
                <p><?php echo $_smarty_tpl->getVariable('exchangeInfo')->value['exchange_integration'];?>
分</p>
                <div style="text-align: left;">

                </div>
                <p><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=company&a=exchange&v=changeGoods&goodsId=<?php echo $_smarty_tpl->getVariable('exchangeInfo')->value['exchange_id'];?>
&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"><button type="button" class="btn btn-primary btn-xs">兑换</button></a></p>
            </div>
        </div>
    </body>
</html>