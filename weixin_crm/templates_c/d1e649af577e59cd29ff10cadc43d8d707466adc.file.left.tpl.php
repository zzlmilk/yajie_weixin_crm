<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-24 11:46:16
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:704333517532faa884b1455-33910268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1e649af577e59cd29ff10cadc43d8d707466adc' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/left.tpl',
      1 => 1395631225,
    ),
  ),
  'nocache_hash' => '704333517532faa884b1455-33910268',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
        <style type="text/css">

            body {
                margin: 0;background:url(images/menu-shadow.png) repeat-y right top #eeeeee;
            }
            #xiaotu,#xiaotu1,#xiaotu2,#xiaotu3,#xiaotu4,#xiaotu5,#xiaotu6,#xiaotu7,#xiaotu8,#xiaotu9,#xiaotu10{
                padding-left: 9px;
            }

        </style>
        <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/css.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <script>

            var root = '<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
<<<<<<< HEAD
';           
        </script>
         


            <script language='JavaScript' type="text/javascript">


            


            function isIE(){
                if (window.navigator.userAgent.toLowerCase().indexOf("msie")>=1)
                    return true;
                else
                    return false;
            }

            function tupian(idt){
                var nametu="xiaotu"+idt;
                var tp = document.getElementById(nametu);
                tp.src=root+"/images/ico05.gif";

                for(var i=0;i<200;i++)
                {

                    var nametu2="xiaotu"+i;
                    if(i!=idt*1)
                    {
                        var tp2=document.getElementById('xiaotu'+i);
                        if(tp2!=undefined)
                        {tp2.src=root+"/images/ico06.gif";}
                    }
                }
            }

            function list(idstr){
                var name1="subtree"+idstr;
                var name2="img"+idstr;
                var objectobj=document.all(name1);
                var imgobj=document.all(name2);
                var tableObj = 'table' + idstr;

                if(objectobj.style.display=="none"){
                    for(i=1;i<100;i++){
                        var name3="img"+i;
                        var name="subtree"+i;
                        var o=document.all(name);
                        if(o!=undefined){
                            o.style.display="none";
                            var image=document.all(name3);
                            //alert(image);
                            image.src=root+"/images/ico04.gif";
                        }
                    }
                    objectobj.style.display="block";
                    imgobj.src=root+"/images/ico03.gif";
                }
                else{
                    objectobj.style.display="none";
                    imgobj.src=root+"/images/ico04.gif";
                }


                $('.tableDefault').css('display','none');
                $('#' + name1).css('display','block');
            }
            </script>
            <div class="left_background">
                <div class="left_act_bg"></div>
                <table width="150" border="0" cellpadding="0" cellspacing="0" class="left-table01">
                    <tr>
                        <td>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin:0 0 5px 0;">
                                <tr>
                                    <td width="207" height="55" style="background:#ECECEC;border-bottom:1px solid #DDDDDD;">
                                        <div>
                                            <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="25%" rowspan="2">
=======
';           
        </script>
         


            <script language='JavaScript' type="text/javascript">


            


            function isIE(){
                if (window.navigator.userAgent.toLowerCase().indexOf("msie")>=1)
                    return true;
                else
                    return false;
            }

            function tupian(idt){
                var nametu="xiaotu"+idt;
                var tp = document.getElementById(nametu);
                tp.src=root+"/images/ico05.gif";

                for(var i=0;i<200;i++)
                {

                    var nametu2="xiaotu"+i;
                    if(i!=idt*1)
                    {
                        var tp2=document.getElementById('xiaotu'+i);
                        if(tp2!=undefined)
                        {tp2.src=root+"/images/ico06.gif";}
                    }
                }
            }

            function list(idstr){
                var name1="subtree"+idstr;
                var name2="img"+idstr;
                var objectobj=document.all(name1);
                var imgobj=document.all(name2);
                var tableObj = 'table' + idstr;


               

                if(objectobj.style.display=="none"){
                    for(i=1;i<100;i++){
                        var name3="img"+i;
                        var name="subtree"+i;
                        var o=document.all(name);
                        if(o!=undefined){
                            o.style.display="none";
                            var image=document.all(name3);
                            //alert(image);
                            image.src=root+"/images/ico04.gif";
                        }
                    }
                    objectobj.style.display="block";
                    imgobj.src=root+"/images/ico03.gif";
                }
                else{
                    objectobj.style.display="none";
                    imgobj.src=root+"/images/ico04.gif";
                }


                $('.tableDefault').css('display','none');
                $('#' + name1).css('display','block');
            }
            </script>
            <div class="left_background">
                <div class="left_act_bg"></div>
                <table width="150" border="0" cellpadding="0" cellspacing="0" class="left-table01">
                    <tr>
                        <td>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin:0 0 5px 0;">
                                <tr>
                                    <td width="207" height="55" style="background:#ECECEC;border-bottom:1px solid #DDDDDD;">
                                        <div>
                                            <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="25%" rowspan="2">
>>>>>>> 85fae111a4fdd11ef49c2f94124945649fd32b6a
                                                        <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico02.gif" width="50" height="50">
                                                    </td>
                                                    <td width="75%" height="22" class="left-font01">
                                                        您好，<span class="left-font02"><?php echo $_smarty_tpl->getVariable('uname')->value;?>
</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="22" class="left-font01">
                                                        [&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('URLHANDLER')->value;?>
/process.php?login=0" target="_top" class="left-font01">退出</a>&nbsp;]
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>


                            <!--                    用户开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table1">
                                <tr>
                                    <td height="29" onclick="list('1')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="15%">
                                                    <img name="img1" id="img1" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico04.gif" width="8" height="11">
                                                </td>
                                                <td width="85%">
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03" >用户管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree1" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu1" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=userList" target="mainFrame" class="left-fontSmall" onclick="tupian('1')">客户信息</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu2" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=pointAndMoneyManage" target="mainFrame" class="left-fontSmall" onclick="tupian('2')">积分消费管理</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu3" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=userManage" target="mainFrame" class="left-fontSmall" onclick="tupian('3')">添加用户</a>
                                    </td>
                                </tr>
                            </table>


                            <!--                    积分开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table2">
                                <tr>
                                    <td height="29" onclick="list('2')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="15%">
                                                    <img name="img2" id="img2" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico04.gif" width="8" height="11">
                                                </td>
                                                <td width="85%">
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03" >预约管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree2" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu4" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=order&functionname=getOrderlist" target="mainFrame" class="left-fontSmall" onclick="tupian('4')">订单管理</a>
                                    </td>

                                </tr>
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu5" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">

                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=order&functionname=getOrderlist" target="mainFrame" class="left-fontSmall" onclick="tupian('5')">新增预约</a>
                                       
                                    </td>

                                </tr>
                            </table>


                            <!--                    微游戏开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table3">
                                <tr>
                                    <td height="29" onclick="list('3')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="15%">
                                                    <img name="img3" id="img3" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico04.gif" width="8" height="11">
                                                </td>
                                                <td width="85%">
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03" >微游戏管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree3" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu6" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=gift&functionname=getBigWheelList" target="mainFrame" class="left-fontSmall" onclick="tupian('6')">大转盘礼品列表</a>
                                    </td>

                                </tr>

                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu7" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=gift&functionname=getCardList" target="mainFrame" class="left-fontSmall" onclick="tupian('7')">刮刮卡礼品列表</a>
                                    </td>
                                </tr>

                            </table>





                            <!--                   兑换开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table4">
                                <tr>
                                    <td height="29" onclick="list('4')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="15%">
                                                    <img name="img4" id="img4" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico04.gif" width="8" height="11">
                                                </td>
                                                <td width="85%">
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03" >兑换管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree4" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu8" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=ExchangeList" target="mainFrame" class="left-fontSmall" onclick="tupian('8')">礼品列表</a>
                                    </td>

                                </tr>

                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu9" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=addExchangeItem" target="mainFrame" class="left-fontSmall" onclick="tupian('9')">添加礼品</a>
                                    </td>
                                </tr>

                            </table>




 <!--                   兑换开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table5">
                                <tr>
                                    <td height="29" onclick="list('5')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="15%">
                                                    <img name="img5" id="img5" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico04.gif" width="8" height="11">
                                                </td>
                                                <td width="85%">
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03" >任务管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree5" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                                  <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu15" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=gift&functionname=getBigWheelList" target="mainFrame" class="left-fontSmall" onclick="tupian('15')">每日签到</a>
                                    </td>

                                </tr>

                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu16" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=gift&functionname=getBigWheelList" target="mainFrame" class="left-fontSmall" onclick="tupian('16')">活动</a>
                                    </td>

                                </tr>

                                 <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu17" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=gift&functionname=getBigWheelList" target="mainFrame" class="left-fontSmall" onclick="tupian('17')">问卷</a>
                                    </td>

                                </tr>

                            </table>



<!--                   兑换开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table6">
                                <tr>
                                    <td height="29" onclick="list('6')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="15%">
                                                    <img name="img6" id="img6" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico04.gif" width="8" height="11">
                                                </td>
                                                <td width="85%">
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03" >系统管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree6" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu11" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=gift&functionname=getBigWheelList" target="mainFrame" class="left-fontSmall" onclick="tupian('11')">微信数据</a>
                                    </td>

                                </tr>

                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu12" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=gift&functionname=getBigWheelList" target="mainFrame" class="left-fontSmall" onclick="tupian('12')">管理员账号</a>
                                    </td>

                                </tr>

                                   <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu13" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=gift&functionname=getBigWheelList" target="mainFrame" class="left-fontSmall" onclick="tupian('13')">重置账户密码</a>
                                    </td>

                                </tr>

                            </table>



<!--                   兑换开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table7">
                                <tr>
                                    <td height="29" onclick="list('7')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="15%">
                                                    <img name="img7" id="img7" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico04.gif" width="8" height="11">
                                                </td>
                                                <td width="85%">
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03" >短信模块</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree7" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu14" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=gift&functionname=getBigWheelList" target="mainFrame" class="left-fontSmall" onclick="tupian('14')">客服短信</a>
                                    </td>

                                </tr>

                            </table>

                        </td>
                    </tr>
                </table>


            </div>
        </body>
    </html>
