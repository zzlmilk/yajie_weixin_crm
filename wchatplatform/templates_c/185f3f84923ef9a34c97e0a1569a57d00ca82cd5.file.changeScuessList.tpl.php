<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-17 17:59:40
         compiled from "C:/Apache24/htdocs/yajie_weixin_crm/wchatplatform/templates/Exchange/changeScuessList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8729534fa60c8bd850-63229894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '185f3f84923ef9a34c97e0a1569a57d00ca82cd5' => 
    array (
      0 => 'C:/Apache24/htdocs/yajie_weixin_crm/wchatplatform/templates/Exchange/changeScuessList.tpl',
      1 => 1397718219,
    ),
  ),
  'nocache_hash' => '8729534fa60c8bd850-63229894',
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
                width: 70%;
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
            .messageStyle{
                word-break:break-all 
            }
        </style>
    </head>
    <body>
        <div class="registerWarp">
            <h3>恭喜你兑换成功</h3>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">消费积分</label>
                <label for="inputEmail3" class="col-sm-2 control-label"><?php echo $_smarty_tpl->getVariable('changeInfo')->value['exchange_integration'];?>
p</label>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">剩余积分</label>
                <label for="inputEmail3" class="col-sm-2 control-label"><?php echo $_smarty_tpl->getVariable('integration')->value;?>
</label>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">物品名称</label>
                <label for="inputEmail3" class="col-sm-2 control-label"><?php echo $_smarty_tpl->getVariable('changeInfo')->value['exchange_name'];?>
</label>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">物品简介</label>
                <label for="inputEmail3" class="col-sm-2 control-label messageStyle" ><?php echo $_smarty_tpl->getVariable('changeInfo')->value['exchange_summary'];?>
</label>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">物品类型</label>
                <?php if ($_smarty_tpl->getVariable('changeInfo')->value['exchange_type']==0){?>
                    <label for="inputEmail3" class="col-sm-2 control-label">虚拟</label>
                <?php }else{ ?>
                    <label for="inputEmail3" class="col-sm-2 control-label">实物</label>
                <?php }?>

            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10" >
                    <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=company&a=exchange&v=getExchangeList&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"><button id="submitOrder" type="button"  class="btn btn-primary">返&nbsp;&nbsp;&nbsp;回</button></a>
                </div>
            </div>
        </div>
    </body>
    <script>

    </script>
</html>