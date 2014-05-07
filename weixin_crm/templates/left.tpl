<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <script type="text/javascript" src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
        <style type="text/css">

            body {
                margin: 0;background:url(images/menu-shadow.png) repeat-y right top #eeeeee;
            }
            #xiaotu,#xiaotu1,#xiaotu2,#xiaotu3,#xiaotu4,#xiaotu5,#xiaotu6,#xiaotu7,#xiaotu8,#xiaotu9,#xiaotu10,#xiaotu11,#xiaotu12,#xiaotu13,#xiaotu14,#xiaotu15,#xiaotu16,#xiaotu17,#xiaotu18,#xiaotu19,#xiaotu20{
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

                for(var i=0;i<2000;i++)
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
                    for(i=1;i<2000;i++){
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
                $('#' + name1).show();
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

{if $auth_result[2]==1}
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
                                {if $auth_result[3]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu1" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userList" target="mainFrame" class="left-fontSmall" onclick="tupian('1')">客户信息</a>
                                    </td>
                                </tr>

                                {/if}

                                {if $auth_result[4]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu2" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=pointAndMoneyManage" target="mainFrame" class="left-fontSmall" onclick="tupian('2')">积分消费管理</a>
                                    </td>
                                </tr>
                                {/if}

                                {if $auth_result[5]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu3" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userManage" target="mainFrame" class="left-fontSmall" onclick="tupian('3')">添加用户</a>
                                    </td>
                                </tr>
                                {/if}
                            </table>
{/if}

{if $auth_result[6]==1}

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

                                {if $auth_result[7]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu4" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=getOrderlist" target="mainFrame" class="left-fontSmall" onclick="tupian('4')">订单管理</a>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[8]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu5" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">

                                        <a href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=orderAdd" target="mainFrame" class="left-fontSmall" onclick="tupian('5')">新增预约</a>

                                    </td>

                                </tr>
                                {/if}
                            </table>


                            {/if}

                            {if $auth_result[9]==1}

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

                                {if $auth_result[10]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu6" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=gift&functionname=getBigWheelList" target="mainFrame" class="left-fontSmall" onclick="tupian('6')">大转盘礼品列表</a>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[11]==1}

                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu7" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=gift&functionname=getCardList" target="mainFrame" class="left-fontSmall" onclick="tupian('7')">刮刮卡礼品列表</a>
                                    </td>
                                </tr>

                                {/if}

                            </table>


                            {/if}

                            {if $auth_result[12]==1}




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

                                {if $auth_result[13]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu8" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=ExchangeList" target="mainFrame" class="left-fontSmall" onclick="tupian('8')">礼品列表</a>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[14]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu9" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=addExchangeItem" target="mainFrame" class="left-fontSmall" onclick="tupian('9')">添加礼品</a>
                                    </td>
                                </tr>

                                {/if}

                            </table>


                            {/if}

                            {if $auth_result[15]==1}




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
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03" >任务管理</a>
                                                </td>
                                            </tr>
                                        </table> 
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree5" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                {if $auth_result[16]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu15" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=registration&functionname=registrationCount" target="mainFrame" class="left-fontSmall" onclick="tupian('15')">签到统计</a>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[17]==1}

                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu16" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=activty&functionname=activty" target="mainFrame" class="left-fontSmall" onclick="tupian('16')">活动</a>
                                    </td>



                                </tr>

                                {/if}
                                {if $auth_result[18]==1}

                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu20" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=activty&functionname=addactivty" target="mainFrame" class="left-fontSmall" onclick="tupian('20')">添加活动</a>
                                    </td>



                                </tr>

                                {/if}

                                {if $auth_result[19]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu17" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">

                                        <a href="{$WebSiteUrl}/pageredirst.php?action=question&functionname=questionCount" target="mainFrame" class="left-fontSmall" onclick="tupian('17')">问卷统计</a>
                                    </td>

                                </tr>

                                {/if}

                            </table>


                            {/if}

                            {if $auth_result[20]==1}

                            <!--                   兑换开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table6">
                                <tr>
                                    <td height="29" onclick="list('6')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="15%">
                                                    <img name="img6" id="img6" src="{$WebSiteUrl}/images/ico04.gif" width="8" height="11">
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

                                {if $auth_result[21]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu11" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=weixinuser&functionname=weixinuser" target="mainFrame" class="left-fontSmall" onclick="tupian('11')">微信数据</a>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[22]==1}

                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu12" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=admin&functionname=admin" target="mainFrame" class="left-fontSmall" onclick="tupian('12')">管理员账号</a>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[23]==1}

                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu13" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=admin&functionname=setAccount" target="mainFrame" class="left-fontSmall" onclick="tupian('13')">重置账户密码</a>
                                    </td>

                                </tr>

                                {/if}

                            </table>

                            {/if}

                            {if $auth_result[24]==1}

                            <!--                   兑换开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table7">
                                <tr>
                                    <td height="29" onclick="list('7')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="15%">
                                                    <img name="img7" id="img7" src="{$WebSiteUrl}/images/ico04.gif" width="8" height="11">
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

                                {if $auth_result[25]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu14" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=SMS&functionname=SMSindex" target="mainFrame" class="left-fontSmall" onclick="tupian('14')">客服短信</a>
                                    </td>

                                </tr>

                                {/if}

                            </table>


                            {/if}

                            {if $auth_result[26]==1}
                            <!--                   兑换开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table8">
                                <tr>
                                    <td height="29" onclick="list('8')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="15%">
                                                    <img name="img8" id="img8" src="{$WebSiteUrl}/images/ico04.gif" width="8" height="11">
                                                </td>
                                                <td width="85%">
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03" >优惠模块</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree8" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                {if $auth_result[27]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu90" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=promoCode&functionname=promoCodeCheck" target="mainFrame" class="left-fontSmall" onclick="tupian('90')">验证优惠码</a>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[28]==1}

                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu91" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=promoCode&functionname=addCode" target="mainFrame" class="left-fontSmall" onclick="tupian('91')">生成优惠码</a>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[29]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu92" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=promoCode&functionname=codeList" target="mainFrame" class="left-fontSmall" onclick="tupian('92')">优惠码列表</a>
                                    </td>

                                </tr>

                                {/if}

                            </table>

                            {/if}

                            <!-- 提示模块开始 -->
                            {if $auth_result[30] == 1}

                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table12">
                                <tr>
                                    <td height="29" onclick="list('12')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="15%">
                                                    <img name="img12" id="img12" src="{$WebSiteUrl}/images/ico04.gif" width="8" height="11">
                                                </td>
                                                <td width="85%">
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03" >提示模块</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree12" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                {if $auth_result[31]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu100" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=remind&functionname=remind" target="mainFrame" class="left-fontSmall" onclick="tupian('100')">提示模块</a>
                                    </td>

                                </tr>

                                {/if}

                                

                            </table>
                            {/if}


                            <!-- 统计模块  statistics -->
                            {if $auth_result[32] == 1}

                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 " id="table13">
                                <tr>
                                    <td height="29" onclick="list('13')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="15%">
                                                    <img name="img13" id="img13" src="{$WebSiteUrl}/images/ico04.gif" width="8" height="11">
                                                </td>
                                                <td width="85%">
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03" >统计模块</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree13" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                {if $auth_result[33]==1}
                                <tr>
                                    <td width="15%" height="20">
                                        <img id="xiaotu200" src="{$WebSiteUrl}/images/ico06.gif" width="8" height="12">
                                    </td>
                                    <td width="85%">
                                        <a href="{$WebSiteUrl}/pageredirst.php?action=statistics&functionname=statistics" target="mainFrame" class="left-fontSmall" onclick="tupian('200')">统计模块</a>
                                    </td>

                                </tr>

                                {/if}

                                

                            </table>
                            {/if}
                        </td>
                    </tr>
                </table>


            </div>
        </body>
    </html>
