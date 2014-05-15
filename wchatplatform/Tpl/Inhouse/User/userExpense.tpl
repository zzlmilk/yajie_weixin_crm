<html>
    <head>
        <meta charset="utf-8">
        <title>会员中心</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

        <script src="{$WebSiteUrlPublic}/Inhouse/dist/ratchet.js"></script>
        <style>
            body{
                Font-size=62.5%;
            }
            .round_photo{
                width:100%;
                height: auto;
                min-height: 65px;
                border:1px solid #ddddde;
                -moz-border-radius:10%;
                -webkit-border-radius: 10%;
                border-radius:10%;

            }
            .siteClass{

                color: rgb(128,128,128);
            } 
            .graph{  

                width: 0;     height: 0;     border-bottom: 38px solid rgb(70,140,200);  

                border-left: 41px solid transparent;

            }  
            .expenseBox{
                min-height:50px;
                width: 100%;
                margin-top: 20px; 
                background-color: rgb(255,255,247);
                border-radius: 5px; 
            }
            .text-padding{
                padding-left: 5px;
                padding-right: 5px;
            }
            .item-postion{
                margin-top: 10px;
            }
            .expenseTitle{
                border-bottom: 1px solid #e7e7e7;height: 40px; line-height: 40px; 
            }
        </style>
    </head>
    <body style="background-color: #E7E7E7;">
        <div style='  width: 100%; background-color: rgb(255,255,247); position: relative;'>

            <div style='height: 0.8em;width: 100%;'>&nbsp;</div>


            <div style=' width: 18%;margin-left: 5px;'>
                <img src='{$userinfo.headimgurl}' class='round_photo'>
            </div>
            <div style='height: 0.8em;width: 100%;'>&nbsp;</div>


            <div style=' width: 66%; overflow: hidden; position: absolute; left: 25%; top: 5px;'>

                <div style='margin-top: 4%;  '>
                    <div class='siteClass' style='font-size:14px;' >昵称:&nbsp; {$userInfo.user_name}</div>
                </div>
                <div class='siteClass' style='font-size:14px;'>积分:&nbsp; {$userInfo.user_integration}</div>
                <div class='siteClass' style='font-size:14px;'>卡号:&nbsp; {$userInfo.user_card}</div>


            </div>

        </div>
        {foreach from=$expenseItem item=exchangeList key=key}
            <div class="expenseBox" style="">
                <div class="text-padding expenseTitle" >
                    <span class="dateValue">{$exchangeList.order_time}</span> <span class="timeValue">{$exchangeList.begin_time}</span> <span style="float: right; color: skyblue">总计： {$exchangeList.money}元</span>   
                </div>
                <div class="text-padding">
                    <div class="item-postion"> {$exchangeList.record_commodity}<span style="float: right;">{$exchangeList.money}元</span></div>
                    <div style="height: 10px;"></div>
                </div>
            </div>
        {/foreach}

    </body>
    <script>
        $(".dateValue").each(function(){
        var thisDate=$(this).html();
        var years=thisDate.substr(0,4);
        var month=thisDate.substr(4,2);
        var date=thisDate.substr(6,2);
        $(this).html(years+"-"+month+"-"+date);
    })
    $(".timeValue").each(function(){
    var thisDate=$(this).html();
    var hours=thisDate.substr(0,2);
    var mintues=thisDate.substr(2,2);
    var seconed=thisDate.substr(4,2);
    $(this).html(hours+":"+mintues+":"+seconed);
})

    </script>
</html>