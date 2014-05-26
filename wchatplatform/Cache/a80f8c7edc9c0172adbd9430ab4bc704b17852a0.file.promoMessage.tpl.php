<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-23 15:05:19
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/Tpl/Jiantang/Code/promoMessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2023064789537ef32fdf0453-73519878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a80f8c7edc9c0172adbd9430ab4bc704b17852a0' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/Tpl/Jiantang/Code/promoMessage.tpl',
      1 => 1400828549,
    ),
  ),
  'nocache_hash' => '2023064789537ef32fdf0453-73519878',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/yajie_weixin_crm/wchatplatform/Config/Smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

        <title>优惠码信息</title>

        <style>
            body{
                min-width: 320px;
                Font-size=62.5%;
            }
            .cardBackground{
                border-radius: 7px;
                width:90%;
                margin: 0 auto;
                margin-top: 1em;
                color:#fff;
            }
            /*
                优惠码有效背景
            */
            .cardBackgroundColorEffective{
                background-color:#EEB654;
            }
            /*
                优惠码失效背景
            */
            .cardBackgroundColorOverdue{
                background-color:#CFCFCF;
            }
            .promoTitle{
                padding-top: 1.5em;
                color: #fff;
                padding-left: 15px;
                font-size: 16px;
            }
            .serviceNumStyle{
                font-size: 75px;
            }
            .whereFrom{
                text-align: right;
                padding-right: 15px;
            }
            .titleTag{
                background-color: #fff;
                width: 100%;
            }
            .titleTag ul{
                list-style-type: none;
                padding-left: 0px;
            }
            .titleTag ul li{
                display: inline-block;
                width: 30%;
                text-align: center;
                height: 3em;
                line-height: 3em;
            }
            .titleTag ul li a{
                color: black;
            }
            .titleTag ul li a:hover{
                text-decoration: none;
            }
            .titleTagActive{
                color:#EEB654 !important;
            }
        </style>
    </head>
    <body style='background-color: rgb(243,237,227);'>
        <div class="titleTag">
            <ul >
                <?php if ($_smarty_tpl->getVariable('groupBy')->value==''){?>
                    <li ><a class="titleTagActive">未使用</a></li>
                    <li><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=code&v=promoMessage&groupBy=used&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">已兑换</a></li>
                    <li><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=code&v=promoMessage&groupBy=timeOut&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">已过期</a></li>
                <?php }elseif($_smarty_tpl->getVariable('groupBy')->value=="used"){?>
                    <li ><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=code&v=promoMessage&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">未使用</a></li>
                    <li><a class="titleTagActive" >已兑换</a></li>
                    <li><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=code&v=promoMessage&groupBy=timeOut&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">已过期</a></li>
                <?php }elseif($_smarty_tpl->getVariable('groupBy')->value=="timeOut"){?>
                    <li ><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=code&v=promoMessage&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">未使用</a></li>
                    <li><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=code&v=promoMessage&groupBy=used&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">已兑换</a></li>
                    <li><a class="titleTagActive"  >已过期</a></li>
                <?php }?>
            </ul>
        </div>
        <!--有效-->
        <?php if ($_smarty_tpl->getVariable('codeInfo')->value==''){?>
            <div class="cardBackground cardBackgroundColorOverdue"  style='position: relative;'>
                <div style="position: absolute; right: 15px; top:0;">

                </div>
                <div class="promoTitle"><?php echo $_smarty_tpl->getVariable('codeInfoItem')->value['code_name'];?>
</div>
                <div style="text-align: center;">
                    <div class="serviceNumStyle" style="display: inline-block;font-size: 50px;">暂无</div><div style="display: inline-block;font-size: 20px;"></div>
                </div>
                <div class="whereFrom">
                    来自：
                </div>
                <div style="height:  10px;"></div>
                <div style="border-bottom: 1px dashed #bbb;height: 1px; "></div>
                <div style="height:  10px;"></div>
                <div class="form-group" style="">
                    <label class="col-sm-2 control-label messageTitle" style="float: left; ">有效期：</label>

                    <div style="clear: both;"></div>
                </div>
                <div class="form-group" style=" ">
                    <label class="col-sm-2 control-label messageTitle"style="float: left;">领取日：</label>

                    <div style="clear: both;"></div>
                </div>
                <div style="height:  5px;"></div>
            </div>
        <?php }elseif($_smarty_tpl->getVariable('codeInfo')->value=="error"){?>
            <div class="cardBackground cardBackgroundColorOverdue"  style='position: relative;'>
                <div style="position: absolute; right: 15px; top:0;">

                </div>
                <div class="promoTitle"><?php echo $_smarty_tpl->getVariable('codeInfoItem')->value['code_name'];?>
</div>
                <div style="text-align: center;">
                    <div class="serviceNumStyle" style="display: inline-block;font-size: 50px;">暂无</div><div style="display: inline-block;font-size: 20px;"></div>
                </div>
                <div class="whereFrom">
                    来自：
                </div>
                <div style="height:  10px;"></div>
                <div style="border-bottom: 1px dashed #bbb;height: 1px; "></div>
                <div style="height:  10px;"></div>
                <div class="form-group" style="">
                    <label class="col-sm-2 control-label messageTitle" style="float: left; ">有效期：</label>

                    <div style="clear: both;"></div>
                </div>
                <div class="form-group" style=" ">
                    <label class="col-sm-2 control-label messageTitle"style="float: left;">领取日：</label>

                    <div style="clear: both;"></div>
                </div>
                <div style="height:  5px;"></div>
            </div>
        <?php }else{ ?>
            <?php  $_smarty_tpl->tpl_vars['codeInfoItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('codeInfo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['codeInfoItem']->key => $_smarty_tpl->tpl_vars['codeInfoItem']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['codeInfoItem']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['codeInfoItem']->value['code_end_time']<$_smarty_tpl->getVariable('nowTime')->value){?>
                    <!--失效界面-->
                    <div class="cardBackground cardBackgroundColorOverdue"  style='position: relative;'>
                        <div style="position: absolute; right: 15px; top:0;">
                            <p type="button" disabled="" style="opacity: 1;"><h3>过&nbsp;&nbsp;&nbsp;期</h3></p>
                        </div>
                        <div class="promoTitle"><?php echo $_smarty_tpl->tpl_vars['codeInfoItem']->value['code_name'];?>
</div>
                        <div style="text-align: center;">

                            <?php if ($_smarty_tpl->tpl_vars['codeInfoItem']->value['commodity_type']==2){?>


                                 <div class="serviceNumStyle" style="display: inline-block;font-size: 38px;"><?php echo $_smarty_tpl->tpl_vars['codeInfoItem']->value['commodity_name'];?>
</div>
                            <?php }else{ ?>

                                 <div class="serviceNumStyle" style="display: inline-block"><?php echo $_smarty_tpl->tpl_vars['codeInfoItem']->value['commodity_cost'];?>
</div><div style="display: inline-block;font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['codeInfoItem']->value['commodity_unit'];?>
</div>

                            <?php }?>
                           
                        </div>
                        <div class="whereFrom">
                            
                           
                             来自：
                            <?php if ($_smarty_tpl->getVariable('codeRecord')->value[$_smarty_tpl->getVariable('key')->value]['state']==1){?>
                            
                            赠送
                            <?php }elseif($_smarty_tpl->getVariable('codeRecord')->value[$_smarty_tpl->getVariable('key')->value]['state']==2){?>
                               已赠送
                               
                             <?php }else{ ?>
                                 
                               刮刮卡
                             <?php }?>
                            
                            
                        </div>
                        <div style="height:  10px;"></div>
                        <div style="border-bottom: 1px dashed #bbb;height: 1px; "></div>
                        <div style="height:  10px;"></div>
                        <div class="form-group" style="">
                            <label class="col-sm-2 control-label messageTitle" style="float: left; ">有效期：</label>
                            <div class="col-sm-10" style="text-align: left; ">
                                <p class="form-control-static"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['codeInfoItem']->value['code_begin_time'],"%Y-%m-%d");?>
 至 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['codeInfoItem']->value['code_end_time'],"%Y-%m-%d");?>
</p>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                        <div class="form-group" style=" ">
                            <label class="col-sm-2 control-label messageTitle"style="float: left;">领取日：</label>
                            <div class="col-sm-10">
                                <p class="form-control-static"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['codeInfoItem']->value['createTime'],"%Y-%m-%d");?>
</p>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                        <div style="height:  5px;"></div>
                    </div>
                <?php }else{ ?>
                    <div class="cardBackground cardBackgroundColorEffective"  style='position: relative;'>
                        <div class="promoTitle"><?php echo $_smarty_tpl->tpl_vars['codeInfoItem']->value['code_name'];?>
</div>
                        <div style="text-align: center;">
                           
                            <?php if ($_smarty_tpl->tpl_vars['codeInfoItem']->value['commodity_type']==2){?>


                                 <div class="serviceNumStyle" style="display: inline-block;font-size: 38px;"><?php echo $_smarty_tpl->tpl_vars['codeInfoItem']->value['commodity_name'];?>
</div>
                            <?php }else{ ?>

                                 <div class="serviceNumStyle" style="display: inline-block"><?php echo $_smarty_tpl->tpl_vars['codeInfoItem']->value['commodity_cost'];?>
</div><div style="display: inline-block;font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['codeInfoItem']->value['commodity_unit'];?>
</div>

                            <?php }?>
                        </div>
                        <div class="whereFrom">
                              来自：
                            <?php if ($_smarty_tpl->getVariable('codeRecord')->value[$_smarty_tpl->getVariable('key')->value]['state']==1){?>
                            
                            赠送
                            <?php }elseif($_smarty_tpl->getVariable('codeRecord')->value[$_smarty_tpl->getVariable('key')->value]['state']==2){?>
                               已赠送
                               
                             <?php }else{ ?>
                                 
                               刮刮卡
                             <?php }?>
                        </div>
                        <div style="height:  10px;"></div>
                        <div style="border-bottom: 1px dashed #bbb;height: 1px; "></div>
                        <div style="height:  10px;"></div>
                        <div class="form-group" style="">
                            <label class="col-sm-2 control-label messageTitle" style="float: left; ">有效期：</label>
                            <div class="col-sm-10" style="text-align: left; ">
                                <p class="form-control-static"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['codeInfoItem']->value['code_begin_time'],"%Y-%m-%d");?>
 至 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['codeInfoItem']->value['code_end_time'],"%Y-%m-%d");?>
</p>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                        <div class="form-group" style=" ">
                            <label class="col-sm-2 control-label messageTitle"style="float: left;">领取日：</label>
                            <div class="col-sm-10">
                                <p class="form-control-static"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['codeInfoItem']->value['createTime'],"%Y-%m-%d");?>
</p>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                        <div style="height:  5px;"></div>
                    </div>
                <?php }?>
            <?php }} ?>
        <?php }?>
        <!--有效页面结束-->

        <!--失效界面结束-->
        <div style="height: 15px;"></div>
    </body>
</html>