<?php /* Smarty version Smarty-3.0-RC2, created on 2014-02-27 07:37:31
         compiled from "/web/www/wchatplatform/templates/Company/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1216782504530eeb3bc077b5-12888732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a4a8a9214f3227bf0cbbf52bab62956833e8f28' => 
    array (
      0 => '/web/www/wchatplatform/templates/Company/login.tpl',
      1 => 1393486651,
    ),
  ),
  'nocache_hash' => '1216782504530eeb3bc077b5-12888732',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE>
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
		background-image:url(<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/image/logBackground.png);
		margin:0 15px;
		}
	.logTitle{
		background-color:#86B226;
		height:40px;
		line-height:40px;;
		color:#fff;
		font-weight:bold;
		padding-left:25px;
		font-size:larger;
		}
	.logContent{
		 margin-left:30px;
		 margin-right:30px;
		 margin-top:30px;
		}
	.logAccountArea{
		border:1px solid #CCC;
		border-radius: 5px;
		height:40px;
		background-color:#FFF
		}
	.logTextBox{
		border:none;
		line-height:28px;
		height:28px;
		margin-left:10px;
		font-size:larger;
		padding-top:5px;
		font-weight:bold;
                width: 100%;
		}
	.valInline{
		display:inline-block;
		}
	#accountIcon{
		background-image:url(<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/image/accountIcon.png);
		}
	#passWordIcon{
		background-image:url(<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/image/passwordIcon.png);
		}
	.logIcon{
		background-repeat:no-repeat;
		width:32px;
		height:28px;
		margin-top:5px;
		padding-top:5px;
		}
		.logButton{
			width:50%;
			height:70px;
			text-align:center;
			background:#86b226;
			line-height:70px;
			color:#fff;
			font-weight:bold;
			font-size:larger;
			letter-spacing:15px;
			border:1px solid #CCC;
			border-radius: 5px;
			margin:5px auto;
			margin-top:15px;
			cursor:pointer;
			}
			.lostPassword{
				text-align:right;
				margin-right:30px;
				margin-top:50px;
				}
                                .inputWidth{
                                    width:80%;
                                }
</style>
</head>

<body>
	<div class="logStyle">
    	<div style="height:15px;"></div>
    	<div class="logTitle">
        	客户经理管理
        </div>
        <!-- 账号部分-->
                <div class="logContent">
                    <div class="logAccountArea">
                        <div id="accountIcon" class="valInline logIcon">&nbsp;</div>
                        <div class="valInline inputWidth"><input style="padding-top:10px;" placeholder="用户名" class="logTextBox " type="text"/></div>
                    </div>
                </div>
		<!-- 密码部分-->
                <div class="logContent">
        			<div class="logAccountArea">
                        <div id="passWordIcon" class="valInline logIcon">&nbsp;</div>
                        <div class="valInline inputWidth"><input style="padding-top:10px;" placeholder="密码" class="logTextBox " type="password"/></div>
                    </div>
        		</div>
                <!-- 忘记密码-->
                <div style="width:100%;" class="lostPassword">
                	<a class="lostPassword" href="javascript:return 0">忘记密码</a>
                </div>
                <!-- 登录-->
                <div style="width:90%; margin:5px;">
                	<div class="logButton">登入</div>
                </div>
    </div>
</body>
</html>