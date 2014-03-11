<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-11 02:01:28
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/Company/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1782639232531e6e78936678-56327259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ff106bb1ffc51f1a2f9d00118991d96d7bd98ae' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/Company/login.tpl',
      1 => 1394443614,
    ),
  ),
  'nocache_hash' => '1782639232531e6e78936678-56327259',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE>
<html>
    <head>
        <meta name="viewport" content="width=device-width" http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>登入</title>
        <style>
            *{
                margin:0;
                padding:0;

            }
            body{
                width: 100%;
                min-width:320px;


                background-color:#E9E9E9;
            }
            .logStyle{
                background-image:url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/image/logBackground.png');
/*                margin:0 15px;*/
            }
            .logTitleLine{
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient (GradientType=0, startColorstr=#f86758, endColorstr=#a1090a)";
                background:  -webkit-linear-gradient(top,#f86758,#a1090a);
                background: -moz-linear-gradient( top,#f86758,#a1090a);
                background: -ms-linear-gradient( top,#f86758,#a1090a);
                background: linear-gradient( top,#f86758,#a1090a);
            }
            .logTitle{
                text-align: center;
                border-radius: 2px;
                height:50px;
                line-height:50px;
                color:#fff;
                font-weight:bold;
                font-size:larger;
                text-shadow: 1px 1px 0px #000;
            }
            .logContent{
                box-shadow: 10px 10px 8px -10px #ccc inset;
                background-color: #FFF;
                margin-left:30px;
                margin-right:30px;
                margin-top:30px;
                border: 1px solid #CCC;
                border-radius: 4px;
            }
            .logAccountArea{
                height:40px;
            }
            .logTextBox{
                border:none;
/*                line-height:25px;
                height:25px;*/
                margin-left:15px;
/*                padding-top: 5px;*/
                font-size:larger;
                font-weight:bold;
                width: 100%; 

            }
            .valInline{
                display:inline-block;
            }
            #accountIcon{
                background-image:url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/image/accountIcon.png');
            }
            #passWordIcon{
                background-image:url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/image/passwordIcon.png');
            }
            .logIcon{
                background-repeat:no-repeat;
                width:16px;
                height:14px;
                margin-top:10px;
                margin-left: 10px;
            }
            .logButton{
                width:50%;
                height:70px;
                text-align:center;
                background:#c11214;
                box-shadow: 0px 5.5px 0px #9e0608;
                line-height:70px;
                color:#fff;
                font-weight:bold;
                font-size:larger;
                letter-spacing:10px;
                border-radius: 5px;
                margin:5px auto;
                margin-top:10px;
                cursor:pointer;
                text-shadow: 1px 1px 0px #000;
            }
            .lostPassword{
                text-align:right;
                margin-right:30px;
                margin-top:30px;
                color: skyblue;
            }
            .inputWidth{
                width:80%;

            }
        </style>
    </head>

    <body>
        <div class="logStyle">
            <div class="logTitle logTitleLine">
                客户经理登入
            </div>
            <!-- 账号部分-->
            <div class="logContent">
                <div class="logAccountArea">
                    <div id="accountIcon" class="valInline logIcon">&nbsp;</div>
                    <div class="valInline inputWidth"><input style="" placeholder="用户名" class="logTextBox " type="text"/></div>
                </div>
            </div>
            <!-- 密码部分-->
            <div class="logContent">
                <div class="logAccountArea">
                    <div id="passWordIcon" class="valInline logIcon">&nbsp;</div>
                    <div class="valInline inputWidth"><input style="" placeholder="密码" class="logTextBox " type="password"/></div>
                </div>
            </div>
            <!-- 忘记密码-->
            <div style="width:100%;" class="lostPassword">
                <a class="lostPassword" href="javascript:return 0">忘记密码</a>
            </div>
            <div style="height:30px;"></div>
            <!-- 登录-->
            <div style="width:100%;text-align: center;">
                <div id="logButton" class="logButton">登入</div>
            </div>
            <div style="height: 50px;"></div>
        </div>
    </body>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/script/jquery-1.9.1.min.js"></script>
    <script>
        var c=$(".logButton").width()
        var d=c*0.3;
        $(".logButton").css("height",d+"px");
        $(".logButton").css("line-height",d+"px");
        var winHeight=$(document).height();
        $(".logStyle").css('height',winHeight);
        $(window).resize(function(){
            var c=$(".logButton").width()
            var d=c*0.3;
            $(".logButton").css("height",d+"px");
            $(".logButton").css("line-height",d+"px");
        });
                $("#logButton").click(function(){
                    $("body").css("text-align",'center');
                    $("body").css("padding-top",winHeight*0.4);
                    $("body").css("color","#c11214");
                    $("body").css("font-size","30px");
                   $("body").html("登陆成功");
                })
        //        $("#logButton").click(function(){
        //            closeWindow();
        //        })
        //        function closeWindow(){
        //            var browserName=navigator.appName;
        //            if (browserName=="Netscape") {
        //                window.open('','_parent',''); window.close();
        //            } else if (browserName=="Microsoft Internet Explorer") {
        //                window.opener = "whocares"; window.close(); 
        //            }
        //        }
    </script>
</html>
