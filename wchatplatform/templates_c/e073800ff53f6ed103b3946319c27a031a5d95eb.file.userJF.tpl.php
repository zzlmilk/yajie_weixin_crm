<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-23 12:39:03
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/User/userJF.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77335239535743e7b7a0a7-69962680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e073800ff53f6ed103b3946319c27a031a5d95eb' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/User/userJF.tpl',
      1 => 1398226791,
    ),
  ),
  'nocache_hash' => '77335239535743e7b7a0a7-69962680',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes"><!-- 最新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" type="text/css"><!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css"> -->
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->

        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript">
        </script><!-- 最新的 Bootstrap 核心 JavaScript 文件 -->

        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js" type="text/javascript">
        </script>

        <title>
            交易明细
        </title>
        <style type="text/css">


            body{
                Font-size=62.5%;
            }
            .myInfoWarp{
                /*border: solid 1px red;*/

            }
            .myInfoStyle{
                /*  border: solid 1px red;*/
                height: 1.5em;
                text-align: center;
                line-height: 1.5em;
                font-size: 2em;
                background-color: rgb(104,175,59);
                text-shadow: 0em 0.1em 0.1em #000;
                color: #fff;

            }
        </style>
        <script type="text/javascript">


            $('#myTab a').click(function(e) {
                e.preventDefault()
                $(this).tab('show')
            })

        </script>
    </head>
    <body>
        <div class="myInfoStyle">
            积分
        </div><!-- Nav tabs -->
        <ul class="nav nav-pills">
            <li style='width: 49%;' <?php if ($_smarty_tpl->getVariable('type')->value==1){?> class="active" <?php }?>>
                <?php if ($_smarty_tpl->getVariable('type')->value==1){?>

                    <a href="javascript:void(0)">积分</a>

                <?php }else{ ?>

                    <a href="?g=company&a=user&v=userJF&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
&type=1" >积分</a>

                <?php }?>

            </li>
            <li style='width: 50%;' <?php if ($_smarty_tpl->getVariable('type')->value==2){?> class="active" <?php }?> >

                <?php if ($_smarty_tpl->getVariable('type')->value==2){?>

                    <a href="javascript:void(0)" >消费</a>

                <?php }else{ ?>

                    <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=company&a=user&v=userJF&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
&type=2" >消费</a>

                <?php }?>
            </li>
        </ul><!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" >


                <?php if ($_smarty_tpl->getVariable('number')->value>0){?>

                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>


                        <div style='clear: both; height: 5em;  background-color: rgb(230,230,230)'>
                            <div style='float: left; width:54%;'>
                                <div style='font-size: 2em; font-weight: bold; text-indent: 0.5em;'>
                                    <?php echo $_smarty_tpl->tpl_vars['v']->value['source'];?>

                                </div>
                                <div style='text-indent: 1em;'>
                                    <?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>

                                </div>
                            </div>
                            <div style='float: left; <?php if ($_smarty_tpl->getVariable('type')->value==1){?> color: rgb(252,84,34); <?php }else{ ?>  color: rgb(23,146,104); <?php }?>font-size: 3em;'>
                                <div>
                                    <?php echo $_smarty_tpl->tpl_vars['v']->value['fraction'];?>

                                </div>
                            </div>
                        </div>

                        <div style='height: 10px;'>&nbsp;</div>


                    <?php }} ?>

                <?php }else{ ?>
                    无记录

                <?php }?>

            </div>

        </div>
    </body>
</html>