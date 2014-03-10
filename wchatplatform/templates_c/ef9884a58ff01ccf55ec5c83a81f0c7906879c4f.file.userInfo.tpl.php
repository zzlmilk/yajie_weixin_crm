<?php /* Smarty version Smarty-3.0-RC2, created on 2014-02-27 09:46:27
         compiled from "/web/www/wchatplatform/templates/Company/userInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1367960114530f09730a5e97-07543613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef9884a58ff01ccf55ec5c83a81f0c7906879c4f' => 
    array (
      0 => '/web/www/wchatplatform/templates/Company/userInfo.tpl',
      1 => 1393494382,
    ),
  ),
  'nocache_hash' => '1367960114530f09730a5e97-07543613',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE>
<html>
    <head>
        <meta name="viewport" content="width=device-width" http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>用户信息</title>
        <style>
            	body{
                width: 100%;
                min-width:320px;
		}
                .valInline{
		display:inline-block;
		}
                .itemsMargin{
                    margin-bottom:  20px;
                }
                .tablesWidth{
                  width: 60px;  
                  font-size: 15px;
                }
                .textContentLeave{
                    margin-left: 15px;
                    width: 70%;
                    
                }
                .textContent{
                    font-weight: bold;
                    height: 40px;
                    line-height: 40px;
                    width: 100%;
                }
                .userInfoButton{
                        width:40%;
			height:30px;
			text-align:center;
			background:#e7e7e7;
			line-height:30px;
			color:#a2a2a2;
			font-size:smaller;
			letter-spacing:15px;
			border:1px solid #000;
			border-radius: 5px;
			margin:5px auto;
			margin-top:15px;
			cursor:pointer;
                        box-shadow: 1px 1px 4px #000 ;
                }
                .topContenx{
                    font-size: 14px;
                    margin-bottom: 30px;
                }
        </style>
    </head>

    <body>
        <div style="min-width: 320px;margin-left: 15px;">
            <div class="topContenx" >
                李连杰客户分级：vip客户 客龄：7年<br> 
                特征：存款日均中等，理财业务活跃
            </div>
            <div class="itemsMargin">
                <div class="valInline tablesWidth">姓名</div><div class="valInline textContentLeave"><input class="textContent" type="text" readonly="readonly" disabled="no" value="李连杰"/></div>
            </div>
            <div class="itemsMargin"> 
                <div class="valInline tablesWidth">手机</div><div class="valInline textContentLeave"><input class="textContent" type="text" value="1888888888" /></div>
            </div>
            <div class="itemsMargin">
                <div class="valInline tablesWidth">座机</div><div class="valInline textContentLeave"><input class="textContent" type="text" value="010-88888888"/></div>
            </div>
            <div class="itemsMargin">
                <div class="valInline tablesWidth">住址</div><div class="valInline textContentLeave"><input class="textContent" type="text" value="北京市王府井大街88号"/></div>
            </div>
            <div class="itemsMargin">
               <div class="valInline tablesWidth">邮箱</div><div class="valInline textContentLeave"><input class="textContent" type="text" value="jerk@126.com"/></div>
            </div>
            <div class="itemsMargin">
                <div class="valInline tablesWidth">微信号</div><div class="valInline textContentLeave"><input class="textContent" type="text"  value="A123WERDGFDGYYT@45"/></div>
            </div>
<!--            <div class="userInfoButton">修改</div>-->
        </div>
    </body>
</html>