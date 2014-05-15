<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <script type="text/javascript" src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
        <style type="text/css">

            body {
                margin: 0;background:url(images/menu-shadow.png) repeat-y right top #eeeeee;
            }
           

        </style>
        <link href="{$WebSiteUrl}/css/{$source}_css.css" rel="stylesheet" type="text/css">
    </head>
    <body style='border-radius: 10px 10px 0 0;'>

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
                            image.src=root+"/images/ico04.png";
                        }
                    }
                    objectobj.style.display="block";
                    imgobj.src=root+"/images/ico03.png";


                    $('.tableDefault').css('display','none');
                    $('#'+name1).show();
                }
                else{
                    objectobj.style.display="none";
                    imgobj.src=root+"/images/ico04.png";

                    $('.tableDefault').css('display','none');
                    $('#'+name1).hide();
                }


                


            }
            </script>{/literal}
            <div class="left_background" style='border-radius: 10px 10px 0 0;'>
                
                <table width="150" border="0" cellpadding="0" cellspacing="0" class="left-table01" style=''>
                    <tr>
                        <td>
                            <div style='width: 200px; height: 40px;' class='leftLines'>


                                系统管理菜单
                            </div>

{if $auth_result[2]==1}
                            <!--                    用户开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 zhucaidan " id="table1">
                                <tr>
                                    <td height="29" onclick="list('1')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                               
                                                <td width="85%">

                                                    <img name="img1" id="img1" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">
                                                    <span style=' display: inline-block; width: 18px;'>&nbsp;</span>
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >用户管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree1" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                                {if $auth_result[3]==1}
                                <tr>
                                    
                                    <td width="85%">

                                        <div class='left-a' >

                                            <a  style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userList" target="mainFrame" class="left-fontSmall" >客户信息</a>

                                        </div>
                                        
                                    </td>
                                </tr>

                                {/if}

                                {if $auth_result[4]==1}
                                <tr>
                                    
                                    <td width="85%">



                                        <div class='left-a' >

                                            <a  style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=pointAndMoneyManage" target="mainFrame" class="left-fontSmall" >积分消费管理</a>

                                        </div>
                                       
                                    </td>
                                </tr>
                                {/if}

                                {if $auth_result[5]==1}
                                <tr>
                                    
                                    <td width="85%">
                                       


                                          <div class='left-a' >

                                            <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=user&functionname=userManage" target="mainFrame" class="left-fontSmall">添加用户</a>

                                        </div>
                                    </td>
                                </tr>
                                {/if}
                            </table>
{/if}

{if $auth_result[6]==1}

                            <!--                    积分开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 zhucaidan" id="table2">
                                <tr>
                                    <td height="29" onclick="list('2')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                               
                                                <td width="85%">

                                                     <img name="img2" id="img2" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">
                                                    <span style=' display: inline-block; width: 18px;'>&nbsp;</span>
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >预约管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree2" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                {if $auth_result[7]==1}
                                <tr>
                                    
                                    <td width="85%">

                                        <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=getOrderlist" target="mainFrame" class="left-fontSmall" >订单管理</a>

                                    </div>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[8]==1}
                                <tr>
                                   
                                    <td width="85%">


                                        <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=orderAdd" target="mainFrame" class="left-fontSmall">新增预约</a>

                                    </div>

                                    </td>

                                </tr>
                                {/if}
                            </table>


                            {/if}

                            {if $auth_result[9]==1}

                            <!--                    微游戏开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 zhucaidan" id="table3">
                                <tr>
                                    <td height="29" onclick="list('3')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                
                                                <td width="85%">

                                                    <img name="img3" id="img3" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">

                                                    <span style=' display: inline-block; width: 18px;'>&nbsp;</span>

                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >微游戏管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree3" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                {if $auth_result[10]==1}
                                <tr>
                                   
                                    <td width="85%">
                                        <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=gift&functionname=getBigWheelList" target="mainFrame" class="left-fontSmall">大转盘礼品列表</a>

                                    </div>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[11]==1}

                                <tr>
                                    
                                    <td width="85%">

                                        <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=gift&functionname=getCardList" target="mainFrame" class="left-fontSmall" >刮刮卡礼品列表</a>

                                    </div>
                                    </td>
                                </tr>

                                {/if}

                            </table>


                            {/if}

                            {if $auth_result[12]==1}




                            <!--                   兑换开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 zhucaidan " id="table4">
                                <tr>
                                    <td height="29" onclick="list('4')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                
                                                <td width="85%">

                                                    <img name="img4" id="img4" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">

                                                     <span style=' display: inline-block; width: 18px;'>&nbsp;</span>
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >兑换管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree4" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                {if $auth_result[13]==1}
                                <tr>
                                    
                                    <td width="85%">


                                        <div class='left-a' >


                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=ExchangeList" target="mainFrame" class="left-fontSmall" >礼品列表</a>

                                    </div>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[14]==1}
                                <tr>
                                    
                                    <td width="85%">

                                         <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=addExchangeItem" target="mainFrame" class="left-fontSmall">添加礼品</a>

                                    </div>
                                    </td>
                                </tr>

                                {/if}

                            </table>


                            {/if}

                            {if $auth_result[15]==1}




                            <!--                   兑换开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 zhucaidan" id="table5">
                                <tr>
                                    <td height="29" onclick="list('5')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                
                                                <td width="85%">

                                                    <img name="img5" id="img5" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12"> 

                                                     <span style=' display: inline-block; width: 18px;'>&nbsp;</span>

                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >任务管理</a>
                                                </td>
                                            </tr>
                                        </table> 
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree5" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                {if $auth_result[16]==1}
                                <tr>
                                   
                                    <td width="85%">

                                         <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=registration&functionname=registrationCount" target="mainFrame" class="left-fontSmall" >签到统计</a>

                                    </div>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[17]==1}

                                <tr>
                                   
                                    <td width="85%">

                                        <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=activty&functionname=activty" target="mainFrame" class="left-fontSmall" >活动</a>

                                         </div>
                                    </td>



                                </tr>

                                {/if}
                                {if $auth_result[18]==1}

                                <tr>
                                   
                                    <td width="85%">

                                        <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=activty&functionname=addactivty" target="mainFrame" class="left-fontSmall" >添加活动</a>


                                    </div>
                                    </td>



                                </tr>

                                {/if}

                                {if $auth_result[19]==1}
                                <tr>
                                    
                                    <td width="85%">

                                        <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=question&functionname=questionCount" target="mainFrame" class="left-fontSmall">问卷统计</a>

                                    </div>
                                    </td>

                                </tr>

                                {/if}

                            </table>


                            {/if}

                            {if $auth_result[20]==1}

                            <!--                   兑换开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 zhucaidan" id="table6">
                                <tr>
                                    <td height="29" onclick="list('6')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                               
                                                <td width="85%">
                                                    
                                                    <img name="img6" id="img6" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">

                                                     <span style=' display: inline-block; width: 18px;'>&nbsp;</span>
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >系统管理</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree6" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                {if $auth_result[21]==1}
                                <tr>
                                  
                                    <td width="85%">

                                         <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=weixinuser&functionname=weixinuser" target="mainFrame" class="left-fontSmall" >微信数据</a>

                                         </div>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[22]==1}

                                <tr>
                                   
                                    <td width="85%">

                                        <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=admin&functionname=admin" target="mainFrame" class="left-fontSmall">管理员账号</a>

                                        </div>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[23]==1}

                                <tr>
                                    
                                    <td width="85%">

                                        <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=admin&functionname=setAccount" target="mainFrame" class="left-fontSmall" >重置账户密码</a>

                                    </div>
                                    </td>

                                </tr>

                                {/if}

                            </table>

                            {/if}

                            {if $auth_result[24]==1}

                            <!--                   兑换开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 zhucaidan " id="table7">
                                <tr>
                                    <td height="29" onclick="list('7')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                
                                                <td width="85%">

                                                    <img name="img7" id="img7" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">

                                                      <span style=' display: inline-block; width: 21px;'>&nbsp;</span>

                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >短信模块</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree7" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                {if $auth_result[25]==1}
                                <tr>
                                    


                                    <td width="85%">

                                        <div class='left-a' >

                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=SMS&functionname=SMSindex" target="mainFrame" class="left-fontSmall" >客服短信</a>

                                    </div>
                                    </td>

                                </tr>

                                {/if}

                            </table>


                            {/if}

                            {if $auth_result[26]==1}
                            <!--                   兑换开始-->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 zhucaidan" id="table8">
                                <tr>
                                    <td height="29" onclick="list('8')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                
                                                <td width="85%">

                                                    <img name="img8" id="img8" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">
                                                     <span style=' display: inline-block; width: 18px;'>&nbsp;</span>
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >优惠模块</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree8" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                {if $auth_result[27]==1}
                                <tr>
                                   
                                    <td width="85%">

                                        <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=promoCode&functionname=promoCodeCheck" target="mainFrame" class="left-fontSmall" >验证优惠码</a>

                                    </div>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[28]==1}

                                <tr>
                                   
                                    <td width="85%">

                                        <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=promoCode&functionname=addCode" target="mainFrame" class="left-fontSmall" >生成优惠码</a>

                                    </div>
                                    </td>

                                </tr>

                                {/if}

                                {if $auth_result[29]==1}
                                <tr>
                                   
                                    <td width="85%">

                                         <div class='left-a' >
                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=promoCode&functionname=codeList" target="mainFrame" class="left-fontSmall" >优惠码列表</a>

                                    </div>
                                    </td>

                                </tr>

                                {/if}

                            </table>

                            {/if}

                            <!-- 提示模块开始 -->
                            {if $auth_result[30] == 1}

                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 zhucaidan " id="table12">
                                <tr>
                                    <td height="29" onclick="list('12')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                               
                                                <td width="85%">

                                                    <img name="img12" id="img12" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">

                                                     <span style=' display: inline-block; width: 18px;'>&nbsp;</span>
                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >提示模块</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree12" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                {if $auth_result[31]==1}
                                <tr>
                                   
                                    <td width="85%">

                                        <div class='left-a' >
                                        <a  style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=remind&functionname=remind" target="mainFrame" class="left-fontSmall" >提示模块</a>

                                    </div>
                                    </td>

                                </tr>

                                {/if}

                                

                            </table>
                            {/if}


                            <!-- 统计模块  statistics -->
                            {if $auth_result[32] == 1}

                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03 zhucaidan" id="table13">
                                <tr>
                                    <td height="29" onclick="list('13')">
                                        <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                               
                                                <td width="85%">

                                                    <img name="img13" id="img13" src="{$WebSiteUrl}/images/ico04.png" width="12" height="12">

                                                     <span style=' display: inline-block; width: 18px;'>&nbsp;</span>

                                                    <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font" >统计模块</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table id="subtree13" style="DISPLAY: none" width="95%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">

                                {if $auth_result[33]==1}
                                <tr>
                                    
                                    <td width="85%">

                                         <div class='left-a' >

                                        <a style='color: #3394c4' href="{$WebSiteUrl}/pageredirst.php?action=statistics&functionname=statistics" target="mainFrame" class="left-fontSmall" >统计模块</a>

                                    </div>
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
