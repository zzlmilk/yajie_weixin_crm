<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-14 12:17:43
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/admin/setAccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10094410845372ee671950d3-76136698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '691d35c9e76c861809954ee525c4b808d08dcecf' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/admin/setAccount.tpl',
      1 => 1399427637,
    ),
  ),
  'nocache_hash' => '10094410845372ee671950d3-76136698',
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
            .labelWidth{
                width: 120px;
            }
            .inputWidth{
                width: 170px;
            }
            .userMangerTitle{
                color: rgb(91,91,91);
                font-size: 2.5em;
                margin-top: 15px;
                text-align: center;
            }
            .errorMessage{
                width: 300px;
                margin: 0 auto;
                display: none;
            }
            .showMessage{
                width: 300px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>

        <div class="bigWheelWarp">
            <div class="titleStyle">重置账户密码</div>
            <div style="height: 50px;"></div>
            
            <?php if ($_smarty_tpl->getVariable('messageString')->value!="1"){?>
                <div id="errorMessage" class="alert alert-danger showMessage"><?php echo $_smarty_tpl->getVariable('messageString')->value;?>
</div>
            <?php }else{ ?>
                <div id="errorMessage" class="alert alert-danger errorMessage"></div>
            <?php }?>

            <div style="height: 15px;"></div>
            <div style="width: 300px; margin: 0 auto;">
                <form class="form-horizontal" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=admin&functionname=setAccount" method="post">
                    <div class="form-group"> 
                        <label for="inputEmail3" class="col-sm-2 control-label labelWidth">旧密码：</label>
                        <div class="col-sm-2">
                            <input class="form-control inputWidth" type="password" value="" name="oldPassword" id="oldPassword">
                        </div>
                    </div> 
                    <div class="form-group"> 
                        <label for="inputEmail3" class="col-sm-2 control-label labelWidth">新密码：</label>
                        <div class="col-sm-2">
                            <input class="form-control inputWidth" type="password" value="" name="newPassword" id="newPassword">
                        </div>
                    </div> 
                    <div class="form-group"> 
                        <label for="inputEmail3" class="col-sm-2 control-label labelWidth">重复密码：</label>
                        <div class="col-sm-2">
                            <input class="form-control inputWidth" type="password" value=""  id="newPasswordCheck">
                        </div>
                    </div>
                    <div style="height: 15px;"></div>
                    <p style="width: 100%; text-align: center;"><button id="addButton" type="submit" class="btn btn-info">确认修改</button>&nbsp;&nbsp;&nbsp;&nbsp;<button id="addButton" type="reset" class="btn btn-info">重置</button></p>
                </form>
            </div>
        </div>

    </div>
</body>
<script>
    $("#addButton").click(function(){
    var old=$("#oldPassword").val();
    var newPassword=$("#newPassword").val();
    var newCheck=$("#newPasswordCheck").val();
    var  errorFlag=false;
    var errorMessage="";
    if(old==""||newPassword==""){
    errorFlag=true;
    errorMessage="密码不能为空";
}else if(newPassword.length<=5){
errorFlag=true;
errorMessage="新密码长度必须大于等于6";
}else if(newPassword==old){
errorFlag=true;
errorMessage="新密码与旧密码不能相同";
}
else if(newPassword!=newCheck){
errorFlag=true;
errorMessage="两次密码输入不一致";
}
if(errorFlag){
$("#errorMessage").show();
$("#errorMessage").html(errorMessage);
return false;
}else{
$(this).submit();
}
});
</script>
</html>