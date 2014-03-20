<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-10 16:42:22
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:980231214531d7aeeb32785-55032324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '323348291c1e2e4ee0840c94abcb00a98dd962cc' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/login.tpl',
      1 => 1394435860,
    ),
  ),
  'nocache_hash' => '980231214531d7aeeb32785-55032324',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <link href="images/login.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <link type="text/css" href="../css/css_clear.css" rel="stylesheet" />
        <script type="text/javascript">
            function enterIn(evt){
                var evt=evt?evt:(window.event?window.event:null);//兼容IE和FF
                if (evt.keyCode==13){
                    mysub();
                }
            }
            function mysub(){
                if(document.getElementById('myuser').value=='' || document.getElementById('mypassword').value==''){
                    alert('请输入用户名或密码');
                }
                else{
                    document.getElementById('myform').submit();
                }
            }
        </script>
    </head>
    <body>
        <form action="./publicHandler/process.php" method="post" id="myform">
            <div id="login">
                <div class="login_name"><span>微信crm网站后台</span>管理中心</div>
                <div class="login_frame">
                    <div id="user">
                        <div>用户名</div>
                        <input type="text" id="myuser" name="user" onkeydown="enterIn(event);" />
                    </div>
                    <div id="password">
                        <div>密码</div>
                        <input type="password" id="mypassword" name="password" onkeydown="enterIn(event);" />
                    </div>
                    <div id="btn">
                        <!-- <div><input type="radio" name="version" id=""  value="0" checked="checked"/>中文</div>
                        <div><input type="radio" name="version" id=""  value="1"/>English</div> -->
                        <input class="login_reset" type="reset" value="清空" />
                        <!-- <a href="#">清空</a> -->
                        <a href="javascript:void(0)" onclick="mysub()">登录</a>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
