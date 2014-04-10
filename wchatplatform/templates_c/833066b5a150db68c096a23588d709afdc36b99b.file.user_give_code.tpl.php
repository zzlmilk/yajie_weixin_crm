<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-09 14:53:28
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/User/user_give_code.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14998556465344ee685fdca6-35002812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '833066b5a150db68c096a23588d709afdc36b99b' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/User/user_give_code.tpl',
      1 => 1397026406,
    ),
  ),
  'nocache_hash' => '14998556465344ee685fdca6-35002812',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
    <head>
        <title>用户赠送列表</title>
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
            <?php  $_smarty_tpl->tpl_vars['codeInfos'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('codeInfo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['codeInfos']->key => $_smarty_tpl->tpl_vars['codeInfos']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['codeInfos']->key;
?>

                
                <div class="giftListStyle">
                    <div style="float: left;margin: 10px"> </div>
                    <div style="float: left;margin: 10px;width: 58%;">
                        <div style="word-wrap: break-word; word-break: normal;">
                            
                            <p>优惠码: <?php echo $_smarty_tpl->getVariable('codeInfo')->value[$_smarty_tpl->tpl_vars['k']->value]['code_info']['code_name'];?>
</p>

                            <div style="width: 100%; text-align: right;"><a  href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=company&a=user&v=giveCodeInfo&code_id=<?php echo $_smarty_tpl->getVariable('codeInfo')->value[$_smarty_tpl->tpl_vars['k']->value]['code_record']['promo_code_id'];?>
&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"><button type="submit" class="btn btn-primary btn-xs">详情</button></a></div>
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