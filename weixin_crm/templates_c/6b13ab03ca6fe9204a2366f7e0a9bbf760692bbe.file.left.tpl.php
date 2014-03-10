<?php /* Smarty version Smarty-3.0-RC2, created on 2014-01-23 11:17:17
         compiled from "/web/www/webAdmin//templates/left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30802319352e089bdd994e9-44162123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b13ab03ca6fe9204a2366f7e0a9bbf760692bbe' => 
    array (
      0 => '/web/www/webAdmin//templates/left.tpl',
      1 => 1390365514,
    ),
  ),
  'nocache_hash' => '30802319352e089bdd994e9-44162123',
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
                tp.src="../images/ico05.gif";

                for(var i=0;i<200;i++)
                {

                    var nametu2="xiaotu"+i;
                    if(i!=idt*1)
                    {
                        var tp2=document.getElementById('xiaotu'+i);
                        if(tp2!=undefined)
                        {tp2.src="../images/ico06.gif";}
                    }
                }
            }

            function list(idstr){
                var name1="subtree"+idstr;
                var name2="img"+idstr;
                var objectobj=document.all(name1);
                var imgobj=document.all(name2);
                var tableObj = 'table' + idstr;


                //alert(imgobj);

                // if(objectobj.style.display=="none"){
                //     for(i=1;i<100;i++){
                //         var name3="img"+i;
                //         var name="subtree"+i;
                //         var o=document.all(name);
                //         if(o!=undefined){
                //             o.style.display="none";
                //             var image=document.all(name3);
                //             //alert(image);
                //             image.src="./images/ico04.gif";
                //         }
                //     }
                //     objectobj.style.display="block";
                //     imgobj.src="./images/ico03.gif";
                // }
                // else{
                //     objectobj.style.display="none";
                //     imgobj.src="./images/ico04.gif";
                // }


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
                                                    <img src="../images/ico02.gif" width="35" height="35">
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


 <!--                    统计开始-->
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table16">
                            <tr>
                                <td height="29" onclick="list('6')">
                                    <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="15%">
                                                <img name="img1" id="img2" src="../images/ico04.gif" width="8" height="11">
                                            </td>
                                            <td width="85%">
                                                <a href="javascript:vold(0)" target="mainFrame" class="left-font03" onclick="list('4')">首页</a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table id="subtree6" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                            <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu5" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/slide.php?type=2" target="mainFrame" class="left-fontSmall" onclick="tupian('6')">大轮播图</a>
                                </td>

                               
                            </tr>


                            <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu5" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/slide.php?type=3" target="mainFrame" class="left-fontSmall" onclick="tupian('6')">小轮播图</a>
                                </td>

                               
                            </tr>

                             <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu5" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/friend.php" target="mainFrame" class="left-fontSmall" onclick="tupian('6')">友情链接</a>
                                </td>

                               
                            </tr>
                           
                        </table>

                          <!-- 优孕课堂 -->
                          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" id="table13">
                            <tr>
                                <td height="29" onclick="list('3')">
                                    <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="15%">
                                                <img name="img1" id="img3" src="../images/ico04.gif" width="8" height="11">
                                            </td>
                                            <td width="85%">
                                                <a href="javascript:vold(0)" target="mainFrame" class="left-font03" onclick="list('3')">优孕课堂</a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table id="subtree3" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table02 tableDefault">
                            <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu5" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/commencement.php" target="mainFrame" class="left-fontSmall" onclick="tupian('5')">开课信息</a>
                                </td>
                            </tr>


                             <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu20" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/teacher.php" target="mainFrame" class="left-fontSmall" onclick="tupian('20')">讲师信息</a>
                                </td>
                            </tr>
                           
                        </table>


                        
                        <!--                    专家说频道开始-->
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table12">
                            <tr>
                                <td height="29" onclick="list('2')">
                                    <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="15%">
                                                <img name="img1" id="img2" src="../images/ico04.gif" width="8" height="11">
                                            </td>
                                            <td width="85%">
                                                <a href="javascript:vold(0)" target="mainFrame" class="left-font03" onclick="list('2')">专家说</a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table id="subtree2" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table02 tableDefault">
                            <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu4" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/news.php?action=new&amp;news_action=news" target="mainFrame" class="left-fontSmall" onclick="tupian('4')">专家说新闻</a>
                                </td>
                            </tr>
                           
                        </table>


                     




                         <!--                    乐淘淘开始-->
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table15">
                            <tr>
                                <td height="29" onclick="list('5')">
                                    <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="15%">
                                                <img name="img1" id="img2" src="../images/ico04.gif" width="8" height="11">
                                            </td>
                                            <td width="85%">
                                                <a href="javascript:vold(0)" target="mainFrame" class="left-font03" onclick="list('5')">乐淘淘</a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table id="subtree5" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                            <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu11" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/taotao.php?type=3" target="mainFrame" class="left-fontSmall" onclick="tupian('11')">礼品屋</a>
                                </td>
                            </tr>



                            <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu10" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/taotao.php?type=1" target="mainFrame" class="left-fontSmall" onclick="tupian('10')">课外活动</a>
                                </td>

                            </tr>







                            <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu9" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/taotao.php?type=2" target="mainFrame" class="left-fontSmall" onclick="tupian('9')">斧头帮</a>
                                </td>
                                
                            </tr>



                             <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu8" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/taotaoNotice.php" target="mainFrame" class="left-fontSmall" onclick="tupian('8')">公告</a>
                                </td>
                                
                            </tr>




                             <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu12" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/slide.php?type=1" target="mainFrame" class="left-fontSmall" onclick="tupian('12')">幻灯片</a>
                                </td>
                                
                            </tr>



                           
                        </table>

   

 <!--                    统计开始-->
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table14">
                            <tr>
                                <td height="29" onclick="list('4')">
                                    <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="15%">
                                                <img name="img1" id="img2" src="../images/ico04.gif" width="8" height="11">
                                            </td>
                                            <td width="85%">
                                                <a href="javascript:vold(0)" target="mainFrame" class="left-font03" onclick="list('4')">统计</a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table id="subtree4" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                            <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu14" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/statistics.php?action=apply" target="mainFrame" class="left-fontSmall" onclick="tupian('14')">报名统计</a>
                                </td>
                            </tr>


                             <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu15" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/statistics.php?action=extracurricularActivities" target="mainFrame" class="left-fontSmall" onclick="tupian('15')">乐淘淘 课外活动</a>
                                </td>
                            </tr>


                             <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu16" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/statistics.php?action=axe" target="mainFrame" class="left-fontSmall" onclick="tupian('16')">乐淘淘 斧头帮</a>
                                </td>
                            </tr>


                            <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu17" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/statistics.php?action=gift" target="mainFrame" class="left-fontSmall" onclick="tupian('17')">乐淘淘 礼品屋</a>
                                </td>
                            </tr>

                           
                        </table>


                    </td>
                </tr>
            </table>





             <!--                    统计开始-->
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table20">
                            <tr>
                                <td height="29" onclick="list('20')">
                                    <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="15%">
                                                <img name="img1" id="img2" src="../images/ico04.gif" width="8" height="11">
                                            </td>
                                            <td width="85%">
                                                <a href="javascript:vold(0)" target="mainFrame" class="left-font03" onclick="list('20')">商户</a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table id="subtree20" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                            <tr>
                                <td width="15%" height="20">
                                    <img id="xiaotu21" src="../images/ico06.gif" width="8" height="12">
                                </td>
                                <td width="85%">
                                    <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/business.php" target="mainFrame" class="left-fontSmall" onclick="tupian('14')">商户列表</a>
                                </td>
                            </tr>
                           
                        </table>


                    </td>
                </tr>
            </table>


        </div>
    </body>
</html>