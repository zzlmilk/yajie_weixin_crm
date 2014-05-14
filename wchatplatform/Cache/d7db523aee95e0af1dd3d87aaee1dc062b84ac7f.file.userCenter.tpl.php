<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-14 10:38:13
         compiled from "C:\Apache24\htdocs\yajie_weixin_crm\wchatplatform/Tpl/Inhouse/User/userCenter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:223715372d715b28e45-48038883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7db523aee95e0af1dd3d87aaee1dc062b84ac7f' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\yajie_weixin_crm\\wchatplatform/Tpl/Inhouse/User/userCenter.tpl',
      1 => 1400034559,
    ),
  ),
  'nocache_hash' => '223715372d715b28e45-48038883',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html><head>
        <meta charset="utf-8">
        <title>会员中心</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/Inhouse/user/dist/ratchet.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/Inhouse/user/dist/ratchet-theme-ios.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/Inhouse/user/css/app.css">
        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/Inhouse/dist/ratchet.js"></script>
        <style>
            body{
                Font-size=62.5%;
            }
            .round_photo{
                width:100%;
                height: auto;
                border:1px solid #ddddde;
                -moz-border-radius: 59px;
                -webkit-border-radius: 59px;
                border-radius:59px;

            }
            .siteClass{

                color: rgb(128,128,128);
            } 
            .graph{  

                width: 0;     height: 0;     border-bottom: 38px solid rgb(70,140,200);  

                border-left: 41px solid transparent;

            }  

        </style>
    </head>
    <body>
        <!--    <header class="bar bar-nav">
             <a class="icon icon-refresh pull-right" style='color: white;'></a>
             <h1 class="title">会员中心</h1>
           </header> -->

        <!--  <div class="bar bar-footer">
           <a class="icon icon-compose pull-right" href="#composeModal"></a>
           <small class="updated-text">Updated just now</small>
         </div> -->




        <div class="content"  style='background-color: rgb(243,237,227);'>


            <div style='  width: 100%; background-color: rgb(255,255,247);position: relative;'>

                <div style='height: 0.2em;width: 100%;'>&nbsp;</div>


                <div style=' width: 18%;'>
                    <img src='<?php echo $_smarty_tpl->getVariable('userinfo')->value['weixin_user']['headimgurl'];?>
' class='round_photo'>
                </div>



                <div style=' width: 66%; overflow: hidden; position: absolute; left: 20%; top: 5%;'>

                    <div style='margin-top: 4%;  '>
                        <span style='font-size:15px; display: inline-block; width: 98%; height: 4%;  '><?php echo $_smarty_tpl->getVariable('userinfo')->value['weixin_user']['nickname'];?>
</span>
                    </div>
                    <div class='siteClass' style='font-size:12px;'>Tel:<?php echo $_smarty_tpl->getVariable('userinfo')->value['user']['user_phone'];?>
</div>



                </div>

                <div style='position: absolute; top: 48%; left: 90%; width: 10%;' >

                    <img src='<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/Inhouse/image/edit.png' style=" width: 100%">
                </div>

                <div onclick='alert(1234)' style=' cursor: pointer; position: absolute;  width: 4%; left: 95%; top: 74%; height: 20%;'>

                    &nbsp;
                </div>

            </div>
            <ul class="table-view" style='clear:both;'>
                <li class="table-view-cell media">
                    <a class="push-right"   data-transition="slide-in">
                        <!-- <span class="media-object icon icon-person pull-left"></span> -->
                        <div class="media-body" onclick='window.location.href = "<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=Inhouse&a=user&v=userInfo&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"'>
                            我的资料
                        </div>
                    </a>
                </li>
              
                <li class="table-view-cell media">
                    <a class="push-right" href="javascript:void(0)" data-transition="slide-in"  onclick='window.location.href = "<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=Inhouse&a=user&v=userJF&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"'>
                        <!--  <span class="media-object icon icon-trash pull-left"></span> -->
                        <div class="media-body">
                            积分和消费
                        </div>
                    </a>
                </li>

                <li class="table-view-cell media">
                    <a class="push-right"  data-transition="slide-in">
                        <!--  <span class="media-object icon icon-trash pull-left"></span> -->
                        <div class="media-body"  onclick='window.location.href = "<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=Inhouse&a=exchange&v=getUserExchangeRecord&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"'>
                            兑换信息
                        </div>
                    </a>
                </li>

             

             
            </ul>
        </div>