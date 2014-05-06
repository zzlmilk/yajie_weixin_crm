<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-06 13:32:58
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/remind/remind.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16277806455368740a2195d8-00484429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65c3c41f40b43c46313bab89cd78ce91ca43bb61' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/remind/remind.tpl',
      1 => 1399354376,
    ),
  ),
  'nocache_hash' => '16277806455368740a2195d8-00484429',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes"><!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->

        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript">
</script><!-- 最新的 Bootstrap 核心 JavaScript 文件 -->

        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js" type="text/javascript">
</script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" type="text/css">
        <style type="text/css">
.labelWidth{
        width: auto !important;
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
        </style>
        <title></title>
    </head>
    <body>
        <div class="userMangerTitle">
            提示用户
        </div>
        <div id="errorMessage" class="alert alert-danger errorMessage"></div>
        <div style="margin-left:15px;margin-top:15px;">
            <div style="width: 370px; margin: 0 auto;">
                <form class="form-horizontal" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&amp;functionname=userManage" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label labelWidth">手机号码</label>
                        <div class="col-sm-2">
                            <input class="form-control inputWidth" type="text" value="" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label labelWidth">提示语句:</label>
                        <div class="col-sm-2">
                            <select name="sex" id='sex' class="form-control inputWidth">
                                <option value="亲爱的用户,距离你上次剪发已经过了1个月了。" selected="selected">
                                    亲爱的用户,距离你上次剪发已经过了1个月了。
                                </option>
                            </select>
                        </div>
                    </div>
                    <p style="text-align: center;">
                        <button id="addButton" type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info">确认添加</button>
                    </p>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">
                                        你确认修改这条信息么？
                                    </h4>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button> <a id="checkButton" href=""><button type="submit" class="btn btn-primary"><a id="checkButton2" href="">确认</a> <input type="hidden" id="deleteUrl" value="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&amp;functionname=exchangeItemDelete&amp;ItemId="></button></a>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </form>
            </div>
        </div><script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js" type="text/javascript">
</script><script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js" type="text/javascript">
</script><script type="text/javascript">
$("#addButton").click(function(){
                $("#errorMessage").hide();
        $("#errorMessage").html();
        var errorMessage="";
        var alertFlag=false;
       
        if($("#userPhone").val()==""){
        errorMessage+="手机号码不能为空 <br>";
        alertFlag=true;
        }
        else if(!getMobilPhoneRegex($("#userPhone").val())){
        errorMessage+="手机号码错误 <br>";
        alertFlag=true;
        }
       
       
        if(alertFlag){ 

           $("#errorMessage").show();
           $("#errorMessage").html(errorMessage);
            return false;
        } else{

            $(".modal-body").html("");
            var alertTitle=new Array();
            var alertText=new Array();
            var WarringStr ="";
            //var textObject=$(this).parent().parent().find("td");
            $(".labelWidth").each(function(index){
            alertTitle[index]=$(this).html();
        })
        
        