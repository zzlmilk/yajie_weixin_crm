<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-26 18:00:21
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/promoCode/promoCodeCheck.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6022826455332a53580fbb9-51740423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2ce26c961ca478db73f30278ebda1d615535148' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/promoCode/promoCodeCheck.tpl',
      1 => 1395804723,
    ),
  ),
  'nocache_hash' => '6022826455332a53580fbb9-51740423',
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


        <title>问卷调差统计</title>
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
                margin-top: 2em;
            }
            .textWidth{
                width:50%;
                margin: 0 auto;
            }
            .inputStyle{
                display: inline-block;
                width: auto;
            }    
            .sortBar{
                width: 60%;
                margin: 0 auto;
                text-align: center;
            }
        </style>
    </head>
    <body>

        <div class="bigWheelWarp">
            <div class="titleStyle">验证优惠码</div>

            <div style="height: 55px;"></div>
            <!-- 概率配置模块 -->
            <div class="tab-pane active textWidth" id="probability" >
                <form method="post" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=promoCode&functionname=promoCodeCheck">
                    <div class='textStyle form-group'><label  class=' control-label labelWidth'>请输入优惠码：</label>
                        <input  class='form-control inputStyle' value="" name="promoCode" id="promoCode">
                        <button type="submit" id="subButton" class="btn btn-primary">确认</button>
                    </div>
                    <?php if ($_smarty_tpl->getVariable('responseMessage')->value!=''){?>
                        <div class="sortBar alert alert-warning"><label  id="responseMessage" class="control-label"><?php echo $_smarty_tpl->getVariable('responseMessage')->value;?>
</label></div>
                    <?php }else{ ?>
                        <div style="display: none;" id="responseMessage"class="sortBar alert alert-warning"><label   class="control-label"></label></div>
                    <?php }?>

                </form>
            </div>


        </div>
    </body>
</html>
<script>
    $("#subButton").click(function(){
    $("#responseMessage").show();
    if($("#promoCode").val()==""){
     
    $("#responseMessage").html("验证码不能为空");
   
    return false;
}
    
})
    
</script>