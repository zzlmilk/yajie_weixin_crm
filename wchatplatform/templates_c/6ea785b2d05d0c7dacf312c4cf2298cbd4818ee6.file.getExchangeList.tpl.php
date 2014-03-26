<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-26 11:16:17
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/User/getExchangeList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18982070875332468134bab2-86461554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ea785b2d05d0c7dacf312c4cf2298cbd4818ee6' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/User/getExchangeList.tpl',
      1 => 1395798329,
    ),
  ),
  'nocache_hash' => '18982070875332468134bab2-86461554',
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
        </style>
    </head>
    <body>
        <div class="registerWarp">
            <table class="tableSize table table-condensed table-bordered">
                <?php  $_smarty_tpl->tpl_vars['exchangeItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('exchangeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['exchangeItem']->key => $_smarty_tpl->tpl_vars['exchangeItem']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['exchangeItem']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value%2==0){?>
                        <tr>
                        <?php }?>




                        <td style="">
                            <div > <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=company&a=user&v=exchangeGoods&goodsId=<?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_id'];?>
&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"><img width="80" height="80" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/exchangeImage/174Small.jpg"></a></div>
                            <div style="width: 100px;word-wrap: break-word; word-break: normal; margin: 0 auto;">
                                <p class="summary"> <?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_summary'];?>
</p>
                                <p><?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_integration'];?>
p</p>
                            </div>
                            <a  href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=company&a=user&v=changeGoods&goodsId=<?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_id'];?>
&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"><button type="submit" class="btn btn-primary btn-xs">兑换</button></a>

                        </td>



                        <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2==0){?>
                        </tr>
                    <?php }?>


                <?php }} ?>
            </table>
        </div>
    </body>
    <script>
        $(".summary").each(function(){
       var len=$(this).html().length;
        if(len>=15){
        var nowString= $(this).html().substr(0, 11)
        $(this).html(nowString+"...");
    }
})
    </script>
</html>