<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-11 12:00:11
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/Code/user_code_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2146394190534768cb6a1cf9-29196667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2875934fdbde8ecd9161618cd9b3b0bf90384f7' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/Code/user_code_detail.tpl',
      1 => 1397188810,
    ),
  ),
  'nocache_hash' => '2146394190534768cb6a1cf9-29196667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/yajie_weixin_crm/wchatplatform/Smarty/libs/plugins/modifier.date_format.php';
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
            
            <div style=' height: 3em; background-color: white; '>

                <div style='height: 0.7em;'>&nbsp;</div>

                <div style='width: 90%; margin: 0 auto; '>活动规则:</div>
                

            </div>
       
        
                   
            <div class="cardBackground cardBackgroundColorEffective"  style='position: relative;'>
                <div class="promoTitle"><?php echo $_smarty_tpl->getVariable('codeInfo')->value['code_info']['code_name'];?>
</div>
                <div style="text-align: center;">
                    <div class="serviceNumStyle" style="display: inline-block">7</div><div style="display: inline-block;font-size: 20px;">折</div>
                </div>
                <div class="whereFrom">
                    来自：刮刮卡
                </div>
                <div style="height:  10px;"></div>
                <div style="border-bottom: 1px dashed #bbb;height: 1px; "></div>
                <div style="height:  10px;"></div>
                <div class="form-group" style="">
                    <label class="col-sm-2 control-label messageTitle" style="float: left; ">有效期：</label>
                    <div class="col-sm-10" style="text-align: left; ">
                        <p class="form-control-static"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('codeInfo')->value['code_info']['code_begin_time'],"%Y-%m-%d");?>
 至 <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('codeInfo')->value['code_info']['code_end_time'],"%Y-%m-%d");?>
</p>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div class="form-group" style=" ">
                    <label class="col-sm-2 control-label messageTitle"style="float: left;">领取日：</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('codeInfo')->value['code_info']['createTime'],"%Y-%m-%d");?>
</p>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div style="height:  5px;"></div>
            </div>


            <div style=' height: 1em;'>&nbsp;</div>


            <div style=' width: 60%; margin: 0 auto;'>

                 <p><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=company&a=code&v=giveCodeAuth&code_id=<?php echo $_smarty_tpl->getVariable('codeInfo')->value['code_info']['promo_code_id'];?>
&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"><button type="button" class="btn btn-primary btn-xs" style=' width: 100%; height: 3em;'>领取</button></a></p>

            </div>
            
                
        <!--有效页面结束-->

        <!--失效界面结束-->
        <div style="height: 15px;"></div>
    </body>
</html>