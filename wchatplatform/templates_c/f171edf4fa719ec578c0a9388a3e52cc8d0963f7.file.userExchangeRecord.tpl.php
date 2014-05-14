<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-17 16:09:05
         compiled from "C:/Apache24/htdocs/yajie_weixin_crm/wchatplatform/templates/Exchange/userExchangeRecord.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8959534f8c21dc2019-25917887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f171edf4fa719ec578c0a9388a3e52cc8d0963f7' => 
    array (
      0 => 'C:/Apache24/htdocs/yajie_weixin_crm/wchatplatform/templates/Exchange/userExchangeRecord.tpl',
      1 => 1397717002,
    ),
  ),
  'nocache_hash' => '8959534f8c21dc2019-25917887',
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
                width: 95%;
            }
            .tableSize{
                width: 100%;
                text-align: center;
            }
            .inlinDisplay{
                display: inline-block;
            }
            td{
                width: 50%;
            }
            .giftListStyle{
                background-color: #fff;
                height: 100px;
                margin-top: 15px;
            }
        </style>
    </head>
    <body style='background-color: rgb(243,237,227);'>

        <div class="registerWarp">
            <?php  $_smarty_tpl->tpl_vars['exchangeItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('exchangeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['exchangeItem']->key => $_smarty_tpl->tpl_vars['exchangeItem']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['exchangeItem']->key;
?>
                
              
                <div class="giftListStyle">
                    <div style="float: left;margin: 10px"> <img width="80" height="80" src="<?php echo $_smarty_tpl->getVariable('WebImageUrl')->value;?>
<?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_info']['exchange_image'];?>
"></a></div>
                    <div style="float: left;margin: 10px;width: 58%;">
                        <div style="word-wrap: break-word; word-break: normal;">
                            <p class="summary"> <?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_info']['exchange_summary'];?>
</p>
                            <p>积分: <?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_info']['exchange_integration'];?>
p</p>

                            
                        </div>
                    </div>
                </div>
            <?php }} ?>
        </div>
    </body>
    <script>
        $(".summary").each(function(){
        var len=$(this).html().length;
        if(len>=20){
        var nowString= $(this).html().substr(0, 20)
        $(this).html(nowString+"...");
    }
})
    </script>
</html>