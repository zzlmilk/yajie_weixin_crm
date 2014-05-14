<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-17 16:26:48
         compiled from "C:/Apache24/htdocs/yajie_weixin_crm/wchatplatform/templates/Order/cancelOrder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11277534f9048457079-65900958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f426091dd5c4cc88765e7479b184ac06358cb8d4' => 
    array (
      0 => 'C:/Apache24/htdocs/yajie_weixin_crm/wchatplatform/templates/Order/cancelOrder.tpl',
      1 => 1397717002,
    ),
  ),
  'nocache_hash' => '11277534f9048457079-65900958',
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
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

        <title>取消订单</title>
        <style>
            body{
                min-width: 320px;
                Font-size=62.5%;
            }
            .cardBackground{
                border-radius: 3px;
                width:85%;
                margin: 0 auto;
                background-color: #e3e3e3;
                height: 100%;
                margin-top: 2em;
            }
        </style>
    </head>
    <body>

        <div class="cardBackground">
            <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
" id="webSiteUrl">
            <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
" id="openId">
            <div style="color:  red;"><?php echo $_smarty_tpl->getVariable('errorMessage')->value;?>
</div>
            <form id="orderForm" method='post' role="form" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=company&a=order&v=cancelOrder&toCancel=1">
                <div style="height: 10px;"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">人数</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('returnVal')->value['order_number'];?>
人</p>
                        <input type="hidden" name="porpleCountSubmit" value="<?php echo $_smarty_tpl->getVariable('returnVal')->value['order_number'];?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">预约时间</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('returnVal')->value['orderDateInput'];?>
 <?php echo $_smarty_tpl->getVariable('returnVal')->value['orderTimeInput'];?>
 <?php echo $_smarty_tpl->getVariable('returnVal')->value['weekNum'];?>
</p>
                        <input type="hidden" name="orderDateInput" value="<?php echo $_smarty_tpl->getVariable('returnVal')->value['orderDateInput'];?>
 <?php echo $_smarty_tpl->getVariable('returnVal')->value['weekNum'];?>
">
                        <input type="hidden" name="orderTimeInput" value="<?php echo $_smarty_tpl->getVariable('returnVal')->value['orderTimeInput'];?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">所选项目</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('returnVal')->value['orderMerchandise'];?>
</p>
                        <input type="hidden" name="orderMerchandise" value="<?php echo $_smarty_tpl->getVariable('returnVal')->value['merchandise_id'];?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">费用</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $_smarty_tpl->getVariable('returnVal')->value['needMoney'];?>
元</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">预约指定</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="orderObject" value="<?php echo $_smarty_tpl->getVariable('returnVal')->value['appointment_object'];?>
">
                        <p class="form-control-static">
                            <?php if ($_smarty_tpl->getVariable('returnVal')->value['appointment_object']==''){?>
                                无
                            <?php }else{ ?>
                                <?php echo $_smarty_tpl->getVariable('returnVal')->value['appointment_object'];?>

                            <?php }?>
                        </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <button type="button" id="revise"   class="btn btn-primary">修&nbsp;&nbsp;&nbsp;改</button>
                        <button type="button" id="cancel" class="btn btn-primary">取&nbsp;&nbsp;&nbsp;消</button>
                    </div>
                </div>
                <div style="height:  50px;"></div>
            </form>
        </div>
    </body>
    <script>
        var webSiteUrl=$("#webSiteUrl").val();
        var openId=$("#openId").val();
        $("#revise").click(function(){
        $("#orderForm").attr("action", webSiteUrl+"?g=company&a=order&v=order&checkReturn=1&open_id="+openId);
        $("#orderForm").submit();
    });
    $("#cancel").click(function(){
    $("#orderForm").attr("action", webSiteUrl+"?g=company&a=order&v=cancelOrder&toCancel=1&open_id="+openId);
    $("#orderForm").submit();
});
    
    </script>
</html>