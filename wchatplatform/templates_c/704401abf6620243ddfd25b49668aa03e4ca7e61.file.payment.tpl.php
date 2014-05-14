<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-18 14:07:12
         compiled from "C:/Apache24/htdocs/yajie_weixin_crm/wchatplatform/templates/Order/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71215350c110ca8e67-30002348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '704401abf6620243ddfd25b49668aa03e4ca7e61' => 
    array (
      0 => 'C:/Apache24/htdocs/yajie_weixin_crm/wchatplatform/templates/Order/payment.tpl',
      1 => 1397801221,
    ),
  ),
  'nocache_hash' => '71215350c110ca8e67-30002348',
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

        <title>选择支付方式</title>
        <style>
            body{
                min-width: 320px;
                Font-size=62.5%;
            }
            .cardBackground{
                border-radius: 7px;
                width:85%;
                margin: 0 auto;
                background-color: #e3e3e3;
                height: 100%;
                margin-top: 1em;
            }

            .topNameTry{
                height: 3em; font-size: 1em; line-height: 3em; color: rgb(70,140,200);
            }
            .topTitleTry{
                float: left; height: 3em; font-size: 1.0em; line-height: 3em;
            } 
            label{
                font-weight: normal;
            }
            .moneyArea{
                text-align: right;
                padding-right: 15px;
            }
            .messageTitle{
                width: 90px;
            }
        </style>
    </head>
    <body style='background-color: rgb(243,237,227);'>
        <form method='post' role="form" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=company&a=order&v=orderPayPage&payType=store&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">
        
        <div class="cardBackground"  style='background-color: #fff;position: relative;'>
            <div class="form-group" style=" margin-top: 1.5em; margin-bottom: 0px;">
                <div style="height: 1em;"></div>

                <label class="col-sm-2  topTitleTry"style="margin-right: 0px"><?php echo $_smarty_tpl->getVariable('userName')->value;?>
，</label>
                <div class="col-sm-10">
                    <p class="form-control-static topNameTry">订单已生效请选择支付方式</p>
                    <input type="hidden" name="orderMerchandise" value="<?php echo $_smarty_tpl->getVariable('returnVal')->value['orderMerchandise'];?>
">
                </div>
                <div style="clear: both;"></div>
            </div>
            <div style="border-bottom: 1px dotted #bbb;height: 1px; "></div>
            <div style="height:25px;"></div>

            <div class="form-group" style="">
                <label class="col-sm-2 control-label" style="">选择优惠信息：</label>
                <div style="height: 1em;"></div>
                <div class="col-sm-4">
                    <select id="promoSelect" name="promoSelect" class="form-control col-sm-4">
                        <option selected="" promoCost="10" value="">请选择优惠信息</option>
                        <?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('promoInfo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['promo']->key;
?>
                            <option promoCost="<?php echo $_smarty_tpl->tpl_vars['promo']->value['commodity_cost'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['promo']->value['commodity_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['promo']->value['commodity_name'];?>
优惠</option>
                        <?php }} ?>
                    </select>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div class="form-group" style="">
                <div style="text-align: right; color: red" class="col-sm-4">您消费：<span id="money"><?php echo $_smarty_tpl->getVariable('costMoney')->value;?>
</span>元，优惠价<span id="promoMoney"><?php echo $_smarty_tpl->getVariable('costMoney')->value;?>
</span>元</div>
                <input type="hidden" id="costMoney" name="costMoney" value="<?php echo $_smarty_tpl->getVariable('costMoney')->value;?>
">
            </div>

            <div style="height: 10px;"></div>
            <div class="form-group" style="">
                <div class="col-sm-10" style="text-align: center;" >
                    <button type="button" style="width: 50%; text-align: center" class="sBtn btn btn-primary">微信支付</button>
                </div>
            </div>
            <div class="form-group" style="">
                <div class="col-sm-10" style="text-align: center;" >
                    <a href="#"><button type="submit" style="width: 50%; text-align: center" class="sBtn btn btn-primary">到店消费</button></a>
                </div>
                <div style="clear: both;"></div>
            </div>

            <div class="form-group" style="margin-top: 2.5em; text-align: center;">

                <div style="clear: both;"></div>
            </div>
            <div style="height: 1em;"></div>
            <div style="height: 1em;"></div>
            <div style="height: 1em;"></div>
            <div style="height: 1em;"></div>
        </form>
        </div>

    </body>
    <script>
        $("#promoSelect").change(function(){
        var money=$("#money").html();
        var promoMoney=0;
        var promoNum=$("#promoSelect option:selected").attr("promoCost");
        promoMoney=parseFloat(money) *(promoNum*0.1);
        var arrayMoney=  promoMoney.toString().split(".");
        if(arrayMoney[1]==null){
        promoMoney=arrayMoney[0]+".00";
        }else if(arrayMoney[1].length==1){
        promoMoney=promoMoney+"0";
        }else if(arrayMoney[1].length>2){

        var cutNum=arrayMoney[1].substr(0, 2).toString();
        promoMoney=arrayMoney[0].toString()+"."+cutNum;
        }
$("#promoMoney").html(promoMoney);
$("#costMoney").val(promoMoney);
});
$(".sBtn").click(function(){
if($("#costMoney").val()<0){
alert("物品价格不能低于0");
}
})
    </script>
</html>
