<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-24 10:35:44
         compiled from "C:/Apache24/htdocs/yajie_weixin_crm/wchatplatform/templates/Exchange/getExchangeList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2893553587880ec6cd9-44233954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3168dd5ff89d2011a458235c830ec52453aa321' => 
    array (
      0 => 'C:/Apache24/htdocs/yajie_weixin_crm/wchatplatform/templates/Exchange/getExchangeList.tpl',
      1 => 1398306941,
    ),
  ),
  'nocache_hash' => '2893553587880ec6cd9-44233954',
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
            .giftListStyle{
                background-color: #fff;
                height: 125px;
                margin-top: 15px;
            }
            .round_photo{
                width:100%;
                height: auto;
                border:1px solid #ddddde;
                -moz-border-radius: 59px;
                -webkit-border-radius: 59px;
                border-radius:50%;

            }
            .siteClass{

                color: rgb(128,128,128);
            } 
            .graph{  

                width: 0;     height: 0;     border-bottom: 38px solid rgb(70,140,200);  

                border-left: 41px solid transparent;

            }  
        </style>
    </head>
    <body style='background-color: rgb(243,237,227);'>

        <div style='  width: 100%; background-color: rgb(255,255,247);position: relative;'>

            <div style='height: 0.2em;width: 100%;'>&nbsp;</div>


            <div style=' width: 18%;'>
                <img src='<?php echo $_smarty_tpl->getVariable('weixinUserInfo')->value['headimgurl'];?>
' class='round_photo'>
            </div>



            <div style=' width: 66%; overflow: hidden; position: absolute; left: 20%; top: 5%;'>

                <div style='margin-top:10%;line-height: 15px;'>
                    <span style='font-size:15px; display: inline-block;  height: 4%;  '>用户昵称：<?php echo $_smarty_tpl->getVariable('weixinUserInfo')->value['nickname'];?>
</span>
                    <span id="userIntegration" style='font-size:15px; display: inline-block;  height: 4%;  '>剩余积分:<?php echo $_smarty_tpl->getVariable('localUserInfo')->value['user_integration'];?>
</span>
                </div>
            </div>
        </div>
        <div class="registerWarp">
            <?php  $_smarty_tpl->tpl_vars['exchangeItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('exchangeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['exchangeItem']->key => $_smarty_tpl->tpl_vars['exchangeItem']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['exchangeItem']->key;
?>
                <div class="giftListStyle">
                    <div style="float: left;margin: 10px"> <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=company&a=exchange&v=exchangeGoods&goodsId=<?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_id'];?>
&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"><img width="80" height="80" src="<?php echo $_smarty_tpl->getVariable('WebImageUrl')->value;?>
<?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_image'];?>
"></a></div>
                    <div style="float: left;margin: 10px;width: 58%;">
                        <div style="word-wrap: break-word; word-break: normal;">
                            <p class="summary"> <?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_summary'];?>
</p>
                            <p class="integration">积分: <?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_integration'];?>
</p>
                            <p>类型: 
                                <?php if ($_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_type']==0){?>
                                    虚拟
                                <?php }else{ ?>
                                    实物
                                <?php }?>
                            </p>
                            <div style="width: 100%; text-align: right;"><a class="submitButton"  href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=company&a=exchange&v=changeGoods&goodsId=<?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_id'];?>
&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"><button  type="button" class="btn btn-warning btn-xs ">兑换</button></a></div>
<!--                            <div style="width: 100%; text-align: right;"><a class="submitButton"  href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=company&a=exchange&v=changeGoods&goodsId=<?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_id'];?>
&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"><button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-warning btn-xs ">兑换</button></a></div>-->
                        </div>
                    </div>
                </div>
            <?php }} ?>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" >
                    <div class="modal-header" style="border: none;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title" id="myModalLabel">你确认兑换这个物品么？</h4>
                    </div>
                    <div class="modal-footer" style="border: none;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <a id="checkButton" href=""><button type="button" class="btn btn-primary">确认</button></a>
                        <input type="hidden" id="gotoUrl" value="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=exchangeItemDelete&ItemId="  />
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </body>
    <script>
        $(".summary").each(function(){
        var len=$(this).html().length;
        if(len>=20){
        var nowString= $(this).html().substr(0, 20)
        $(this).html(nowString+"...");
    }
});
$(".submitButton").click(function(){
var integrationVals=$(this).parent().parent();
var thisUrl=$(this).attr("href");
$("#checkButton").attr("href",thisUrl);
integrationVals=integrationVals.find(".integration").html();

var integration=integrationVals.split(":")[1];

var userIntegration=$("#userIntegration").html();
var userIntegration=userIntegration.split(":")[1];
if(parseInt(integration)>parseInt(userIntegration)){
alert("您的积分余额不足");
return false;
}
});
    </script>
</html>