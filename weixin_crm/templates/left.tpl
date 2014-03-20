<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <script type="text/javascript" src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
        <style type="text/css">

            body {
                margin: 0;background:url(images/menu-shadow.png) repeat-y right top #eeeeee;
            }
            #xiaotu,#xiaotu1,#xiaotu2,#xiaotu3,#xiaotu4,#xiaotu5,#xiaotu6,#xiaotu7,#xiaotu8,#xiaotu9,#xiaotu10{
                padding-left: 9px;
            }

        </style>
        <link href="{$WebSiteUrl}/css/css.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <script>

            var root = '{$WebSiteUrl}';           
        </script>
        {literal} 


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
            </script>{/literal}
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
                                                        <img src="{$WebSiteUrl}/images/ico02.gif" width="50" height="50">
                                                    </td>
                                                    <td width="75%" height="22" class="left-font01">
                                                        您好，<span class="left-font02">{$uname}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="22" class="left-font01">
                                                        [&nbsp;<a href="{$URLHANDLER}/process.php?login=0" target="_top" class="left-font01">退出</a>&nbsp;]
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
                                                    <img name="img1" id="img1" src="{$WebSiteUrl}/images/ico04.gif" width="8" height="11">
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
                                        <img id="xiaotu1" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userList" target="mainFrame" class="left-fontSmall" onclick="tupian('1')">客户信息</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu2" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=pointAndMoneyManage" target="mainFrame" class="left-fontSmall" onclick="tupian('2')">积分消费管理</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu3" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userManage" target="mainFrame" class="left-fontSmall" onclick="tupian('3')">添加用户</a>
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
                                                    <img name="img2" id="img2" src="{$WebSiteUrl}/images/ico04.gif" width="8" height="11">
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
                                        <img id="xiaotu4" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=getOrderlist" target="mainFrame" class="left-fontSmall" onclick="tupian('4')">订单管理</a>
                                    </td>

                                </tr>
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu5" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=getOrderlist" target="mainFrame" class="left-fontSmall" onclick="tupian('5')">新增预约</a>

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
                                                    <img name="img3" id="img3" src="{$WebSiteUrl}/images/ico04.gif" width="8" height="11">
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
                                        <img id="xiaotu6" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=gift&functionname=getBigWheelList" target="mainFrame" class="left-fontSmall" onclick="tupian('6')">大转盘礼品列表</a>
                                    </td>

                                </tr>

                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu7" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=gift&functionname=getCardList" target="mainFrame" class="left-fontSmall" onclick="tupian('7')">刮刮卡礼品列表</a>
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
                                                    <img name="img4" id="img4" src="{$WebSiteUrl}/images/ico04.gif" width="8" height="11">
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
                                        <img id="xiaotu8" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=ExchangeList" target="mainFrame" class="left-fontSmall" onclick="tupian('6')">礼品列表</a>
                                    </td>

                                </tr>

                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu9" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=addExchangeItem" target="mainFrame" class="left-fontSmall" onclick="tupian('7')">添加礼品</a>
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
                                                    <img name="img5" id="img5" src="{$WebSiteUrl}/images/ico04.gif" width="8" height="11"> 
                                                </td>
                                                <td width="85%">
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03" >问卷管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree5" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu10" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a target="mainFrame" class="left-fontSmall" onclick="tupian('6')">问卷列表</a>
                                    </td>

                                </tr>

                            </table>



                        </td>
                    </tr>
                </table>


            </div>
        </body>
    </html>
