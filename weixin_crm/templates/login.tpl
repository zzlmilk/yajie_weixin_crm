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
