<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-14 12:17:41
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/admin/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20774649315372ee65cafa30-46535213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0e4d34ac2ef16403800d45c2040c98d7a8ec5c4' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/admin/admin.tpl',
      1 => 1399427637,
    ),
  ),
  'nocache_hash' => '20774649315372ee65cafa30-46535213',
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

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>


        <title>管理员</title>
        <style>
            body{
                Font-size=62.5%;
            }
            .Warp{
                width: 100%;
               /* border: solid 1px red;*/
            }
            .titleStyle{
                color: rgb(91,91,91);
                font-size: 2.5em;
                text-align: center;
                height: 3em;
                line-height: 3em;
                border-bottom: solid 1px #ccc;
            }
            .matterStyle{
                width: 100%;
                min-height: 10em;
              /*  border: solid 1px red;*/
            }
            .authListStyle{
                width: 70%;
                text-indent: 1em;
                float: right;
                margin-right: 2em;                
                font-size: 18px;
                margin-top: -22.3em;
            }
            .stateStyle{
                /*border: solid 1px red;*/
                width: 25%;
                height: 20em;
                text-indent: 1em;
                font-size: 20px;
                margin-top: 1em;
                color: rgb(66,139,202);
            }
        </style>
    </head>
    <body>

        <div class="Warp">
            <div class="titleStyle">管理员账号</div>

            <div class="matterStyle">
                <div class="stateStyle">你所拥有的部分权限
                    <span class="glyphicon glyphicon-circle-arrow-right"></span>
                    <br />
                    
                    <div style="font-size: 12px; margin-top: 5em; color: rgb(60,60,60)">最近登录时间：<?php echo $_smarty_tpl->getVariable('lastTime')->value;?>
</div>

                    <span style="padding-left: 1.5em; color: rgb(240,173,78); font-size: 14px; ">如需更多权限请和管理员联系。</span>
                </div>
                <div class="authListStyle">
                    <table class="table table-bordered">
                                   
                    <?php  $_smarty_tpl->tpl_vars['V'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['K'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('authInfo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['V']->key => $_smarty_tpl->tpl_vars['V']->value){
 $_smarty_tpl->tpl_vars['K']->value = $_smarty_tpl->tpl_vars['V']->key;
?>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['V']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</td><td><span style=" color: rgb(91,183,91)" class="glyphicon glyphicon-ok-sign"></span></td></tr>
                    <?php }} ?>
                    <?php }} ?>

                  </table>
                </div>

            </div>
        </div>
    </body>
</html>