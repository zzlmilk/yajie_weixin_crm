<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-06 16:45:26
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/weixinuser/weixinuser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3080602175368a1262b0911-04871431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '274775e19e7868a9c2fd10273045731d7ca43b2a' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/weixinuser/weixinuser.tpl',
      1 => 1399365708,
    ),
  ),
  'nocache_hash' => '3080602175368a1262b0911-04871431',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/yajie_weixin_crm/weixin_crm/Smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
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


        <title>管理员</title>
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
            .dataArea{
                text-align: left;
                min-width: 500px;
                margin: 0 auto;
                height: 300px;
            }
            table tr>th{
                text-align: center;
            }
            table tr>td{
                text-align: center;
                vertical-align:middle !important;
            }
            .userMangerTitle{
                color: rgb(91,91,91);
                font-size: 25px;
                margin-top: 15px;
                text-align: center;
            }
        </style>
    </head>
    <body>

        <div class="bigWheelWarp">
            <div class="titleStyle">微信数据</div>
            <div style="height: 50px;"></div>
            <div class="dataArea">
                <table class="table table-striped" >
                    <tr><th>昵称</th><th>性别</th><th>语言</th><th>城市</th><th>关注时间</th></tr>
                    <?php  $_smarty_tpl->tpl_vars['weixinUserIteam'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('weixinUserData')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['weixinUserIteam']->key => $_smarty_tpl->tpl_vars['weixinUserIteam']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['weixinUserIteam']->key;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['weixinUserIteam']->value['nickname'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['weixinUserIteam']->value['sex']==1){?>
                                    男
                                <?php }else{ ?>
                                    女
                                <?php }?> 
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['weixinUserIteam']->value['language'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['weixinUserIteam']->value['country'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['weixinUserIteam']->value['province'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['weixinUserIteam']->value['city'];?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['weixinUserIteam']->value['subscribe_time'],"%Y-%m-%d");?>
</td>
                        </tr>
                    <?php }} ?>
                </table>
            </div>
            <div style="text-align: center"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</div> 
        </div>
    </body>
</html>