<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-14 10:23:38
         compiled from "C:\Apache24\htdocs\yajie_weixin_crm\wchatplatform/Tpl/Jiantang/User/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151105372d3aa093748-77694827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3ae583da27b2b9089e640a604d1e6135db1b7ef' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\yajie_weixin_crm\\wchatplatform/Tpl/Jiantang/User/register.tpl',
      1 => 1399360947,
    ),
  ),
  'nocache_hash' => '151105372d3aa093748-77694827',
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


        <title>注册</title>
    </head>
    <script>

        // 获取出生年月日
	
        function getYearMonthDate(){
        today=new Date();
        now_year=today.getFullYear();
        document.write("<select name='year'>")
        for(var year=now_year;year>=1900;year--){
        
        if(year==1980){
        document.write("<option selected>"+year+"</option>")
    }
    else{
    document.write("<option>"+year+"</option>")
}
}
document.write("</select> 年 ")
document.write("<select name='month' >")
for(var month=1;month<=12;month++){
document.write("<option>"+month+"</option>")
}
document.write("</select> 月 ")
document.write("<select name='date'>")
for(var day=1;day<=31;day++){
document.write("<option>"+day+"</option>")
}
document.write("</select> 日 ")
}
    

    </script>


    <style>
        body{
            Font-size=62.5%;
        }
        .registerWarp{
            margin: 0 auto;
            margin-top: 2em;
        }

        .form-control{
            width: 90%;
            margin-top: -1.8em;
            margin-left: 4em;
        }
        .form-group{
            width: 90%;
            float: right;
            height: 3em;
            white-space:nowrap;
        }
        .col-sm-2{
            width: 5%;
            text-align: right;
        }
    </style>

    <boby>
        <div class="registerWarp">

            <form class="form-horizontal"  method='post' role="form" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=user&v=submitRegister">
                
                
                <?php if ($_smarty_tpl->getVariable('state')->value==1){?>
                <div  class="form-group" style=" margin-right: 2em; height: 4em;">
                    <?php echo $_smarty_tpl->getVariable('info')->value['weixin_user']['nickname'];?>
 赠送优惠券给你,请注册后,进行领取
                    
                    
                </div>
                
                <?php }?>
                <input type="hidden" name="open_id" value="<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
" />

`
                <div class="form-group" style=" margin-right: 3em;">
                    <label for="inputEmail3" class="col-sm-2 control-label">&nbsp;&nbsp;&nbsp;&nbsp;姓名</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="inputname3" name="userName" placeholder="请输入姓名">
                    </div>
                </div>

                
                
                <input type='hidden' name='vars' id='vars' value='<?php echo $_smarty_tpl->getVariable('vars')->value;?>
'>

                <input type="hidden" name="open_id" value="<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
" />


                <div class="form-group" style=" margin-right: 3em;">
                    <label for="inputPassword3" class="col-sm-2 control-label">&nbsp;&nbsp;&nbsp;&nbsp;性别</label>
                    <div class="col-sm-10" style=" height: 2.5em; margin-top: -2em; margin-left: 4em;">
                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="gender" id="optionsRadios1" value="1" checked>
                                男
                            </label>
                        </div>

                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="gender" id="optionsRadios2" value="2">
                                女
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group" style=" margin-right: 3em;">
                    <label for="inputPassword3" class="col-sm-2 control-label">手机号&nbsp;&nbsp;</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="请输入手机号码">
                    </div>
                </div>

                <div class="form-group" style=" margin-right: 3em;">
                    <label for="inputPassword3" class="col-sm-2 control-label">&nbsp;&nbsp;&nbsp;&nbsp;生日</label>
                    <div class="col-sm-10" style=" height: 2.5em; margin-top: -1.7em; margin-left: 4em;">
                        <script>getYearMonthDate();</script>
                    </div>
                </div>

                <div class="form-group" style=" margin-right: 3em;">
                    <div class="col-sm-offset-2 col-sm-10" style="margin-left: 4em;">
                        <button type="submit" id="registerButton" class="btn btn-primary">注&nbsp;&nbsp;&nbsp;册</button>
                    </div>
                </div>
            </form>
        </div>

    </boby>

    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/rexexTest.js"></script>
    <script>
    $("#registerButton").click(function(){
        var phoneNum=$("#phoneNumber").val();
        var userName=$("#inputname3").val();
        if(!getMobilPhoneRegex(phoneNum)){
            alert("请输入正确的手机号");
            return false;
        }else if(userName==""){
            alert("用户名不能为空");
            return false;
        }else if(!getNoIntValue(userName)){
            alert("用户名不能有数字");
            return false;
        }
        else{
            this.submit();
        }
    }
    )
    </script>
</html>
