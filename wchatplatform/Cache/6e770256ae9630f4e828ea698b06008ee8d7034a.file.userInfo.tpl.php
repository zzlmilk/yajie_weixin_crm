<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-05 18:09:16
         compiled from "/Users/Lev/Sites/yajie_weixin_crm/wchatplatform/Tpl/Jiantang/User/userInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17965550675367634c96c773-21120519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e770256ae9630f4e828ea698b06008ee8d7034a' => 
    array (
      0 => '/Users/Lev/Sites/yajie_weixin_crm/wchatplatform/Tpl/Jiantang/User/userInfo.tpl',
      1 => 1399281834,
    ),
  ),
  'nocache_hash' => '17965550675367634c96c773-21120519',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta content="width=device-width,initial-scale=1.0; maximum-scale=4.0; user-scalable=yes;" name="viewport">

         
       <!-- 最新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" type="text/css"><!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css"> -->
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->

        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript">
        </script><!-- 最新的 Bootstrap 核心 JavaScript 文件 -->

        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js" type="text/javascript">
        </script>
       
      
        <title>
            个人信息
        </title>
        <script type="text/javascript">
        </script>
        <style>
            body{
                Font-size=62.5%;
                overflow: auto !important;
            }
            .registerWarp{
                margin: 0 auto;
                width: 95%;
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
            .giftListStyle{
                background-color: #fff;
                margin-top: 15px;
            }
            .round_photo{
                width:100%;
                height: auto;
                border:1px solid #ddddde;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                border-radius:50%;

            }
            .siteClass{

                color: rgb(128,128,128);
            } 
            .graph{  

                width: 0;     height: 0;     border-bottom: 38px solid rgb(70,140,200);  

                border-left: 41px solid transparent;

            }  
            .integration{
                border-bottom: 1px solid #efefef;
                width: 100%;
                color: #bbb;
                padding: 0.8em;
            }
            .inline{
                display: inline-block
            }
            .userTitleStyle{
                width: 23%;
            }
            .userMessage{
                color: black;
            }
        </style>
    </head>
    <body style='background-color: rgb(243,237,227);'>
        <div class="registerWarp">
            <div style='  width: 100%; background-color: rgb(255,255,247);position: relative;'>

                <div style='height: 0.2em;width: 100%;'>&nbsp;</div>


                <div style=' width: 18%; margin-left: 5px;'>
                    <img src='<?php echo $_smarty_tpl->getVariable('userinfo')->value['headimgurl'];?>
' class='round_photo'>
                </div>



                <div style=' width: 75%; overflow: hidden; position: absolute; left: 20%; top: 5%;'>

                    <div style='margin-top:10%;line-height: 15px;padding-left: 15px;'>
                        <div style='font-size:15px; display: inline-block;  height: 4%;  '>修改头像</div>
                        <div style="float: right;color: #777;" class="">＞</div>

                    </div>
                   
                </div>
                <div style="height: 5px;"></div>
            </div>
            <div class="giftListStyle" style="width: 100%;">
                <div style="word-wrap: break-word; word-break: normal;">
                    <div class="integration"><div class=" inline userTitleStyle" >昵称</div><div class="inline userMessage" ><?php echo $_smarty_tpl->getVariable('userinfo')->value['nickname'];?>
</div></div>
                    <div class="integration"><div class=" inline userTitleStyle" >性别</div><div class="inline userMessage">
                            <?php if ($_smarty_tpl->getVariable('userinfo')->value['sex']=="1"){?>
                                男
                            <?php }else{ ?>
                                女
                            <?php }?>
                        </div>
                    </div>
                    <div class="integration"><div class=" inline userTitleStyle" >出生地</div><div class="inline userMessage"><?php echo $_smarty_tpl->getVariable('userinfo')->value['province'];?>
</div></div>
                    <div class="integration"><div class=" inline userTitleStyle" >生日</div><div class="inline userMessage"><?php echo $_smarty_tpl->getVariable('userBirthday')->value;?>
</div></div>
                </div>
            </div>


        </div>
    </body>
</html>