<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-26 18:52:02
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/promoCode/codeSuccess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8052912585332b1520c2c22-01537419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40c8090ceadf487f695fb1b0f06d675caeae59d6' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/promoCode/codeSuccess.tpl',
      1 => 1395830941,
    ),
  ),
  'nocache_hash' => '8052912585332b1520c2c22-01537419',
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

        <script src='<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js'></script>

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>


        <title><?php echo $_smarty_tpl->getVariable('message')->value;?>
</title>
        <style>
         .titleStyle{
                color: rgb(91,91,91);
                font-size: 2.5em;
                text-align: center;
                height: 3em;
                line-height: 3em;
            }
            .textStyle{
                text-align: center;
                margin-top: 2em;
            }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }
    .selectBar{

        text-align: center;  

    }
    .dataArea{
        text-align: left;
        width: 60%;
        min-width: 500px;
        margin: 0 auto;
        height: 190px;
    }
    .sortBar{
        width: 30%;
        margin: 0 auto;
    }
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
        vertical-align:middle !important;
    }
    .groupInput{
        width: 30%;
        margin: 0 auto;
    }
</style>
    </head>
    <body>

        <div class="bigWheelWarp">
            <div class="titleStyle"><?php echo $_smarty_tpl->getVariable('message')->value;?>
</div>

            <div style="height: 55px;"></div>
            <!-- 概率配置模块 -->
            <div class="dataArea">
    <table class="table table-striped">
        <tr><th>验证码</th></tr>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('info')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</td>
            </tr>
        <?php }} ?>
    </table>
</div>



        </div>
    </body>
</html>
<script>

$("#subButton").click(function(){
        
    var number = $('#codeNumber').val();

    if(!getIntRegex(number)){
        var cutString=number.substr(0, (number.length)-1);

        $("#codeNumber").val(cutString);
    }
   
    
})
    
</script>