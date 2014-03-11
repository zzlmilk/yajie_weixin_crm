<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-10 16:42:34
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1966065265531d7afa684eb4-43090809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1e649af577e59cd29ff10cadc43d8d707466adc' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/left.tpl',
      1 => 1394440419,
    ),
  ),
  'nocache_hash' => '1966065265531d7afa684eb4-43090809',
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
/js/jquery.js"></script>
        <style type="text/css">
   
            body {
                margin: 0;background:url(images/menu-shadow.png) repeat-y right top #eeeeee;
            }
            

        </style>
        <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/css.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <script>

         var root = '<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
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
                                                    <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico02.gif" width="35" height="35">
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
/pageredirst.php?action=user&functionname=userList" target="mainFrame" class="left-fontSmall" onclick="tupian('1')">用户列表</a>
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
                                                <a href="javascript:vold(0)" target="mainFrame" class="left-font03" >积分管理</a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table id="subtree2" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                            <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu2" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/slide.php?type=2" target="mainFrame" class="left-fontSmall" onclick="tupian('2')">111</a>
                                </td>

                            </tr>
                        </table>


                        <!--                    积分开始-->
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
                                    <img id="xiaotu3" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/slide.php?type=2" target="mainFrame" class="left-fontSmall" onclick="tupian('3')">礼品列表</a>
                                </td>

                            </tr>

                        </table>
                    </td>
                </tr>
            </table>


        </div>
    </body>
</html>