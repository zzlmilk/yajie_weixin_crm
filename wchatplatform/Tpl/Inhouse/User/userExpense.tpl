<html>
    <head>
        <meta charset="utf-8">
        <title>消费记录</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

       
        <style>
            body{
                Font-size=62.5%;
            }
            .round_photo{
                width:100%;
                height: auto;

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
                width: 90%;
                float: left;
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
            .col-a{
/*                显示尖角*/
                position: relative;
                background: #E7E7E7;
                top: -40px;
                height: auto;
                left: -14px;
                color: white;
                font-size: 17px; 
                width: 5px;
            }
            .col-line-first{
                /*左侧线条上半部分*/
                width: 2px;
                margin-right: 10px;
                height: 38.4px;
                background-color: gray;
            }
            .col-line-ball{
                /*线条中的球*/
                width: 6px; 
                margin-right: 10px;
                height:6px;
                margin-left: -2px;
                background-color: gray;
                border-radius: 50%
            }
            .col-line-seconed{
                /*左侧线条下半部分*/
                width: 2px;
                margin-right: 10px;
                height: 62.4px;
                background-color: gray;
            }
            </style>
        </head>
        <body style="background-color: #E7E7E7;">
        <div style='  width: 100%; background-color: rgb(255,255,247); position: relative;'>

            <div style='height: 0.8em;width: 100%;'>&nbsp;</div>


            <div style=' width: 18%;margin-left: 5px;min-height: 65px;'>
                <img src='{$WebSiteUrlPublic}/image/default.png' class='round_photo'>
            </div>
            <div style='height: 0.8em;width: 100%;'>&nbsp;</div>


            <div style=' width: 66%; overflow: hidden; position: absolute; left: 25%; top: 5px;'>

                <div style='margin-top: 4%;  '>
                    <div class='siteClass' style='font-size:14px;' >昵称:&nbsp; {$userInfo.user_name}</div>
                </div>
                <div class='siteClass' style='font-size:14px;'>积分:&nbsp; {$userInfo.user_integration}</div>
                <div class='siteClass' style='font-size:14px;'>电话:&nbsp; {$userInfo.user_phone}</div>


            </div>

        </div>
        <div>
            {foreach from=$expenseItem item=exchangeList key=key}
                <div style="float: left;width: 6px; margin-right: 10px;height: auto; margin-left: 10px;">
                    <div class="col-line-first"></div>
                    <div class="col-line-ball"></div>
                    <div class="col-line-seconed"></div>
                </div>
                <div class="expenseBox" >
                    <div class="text-padding expenseTitle" >
                        <span class="dateValue">{$exchangeList.order_time}</span> <span class="timeValue">{$exchangeList.begin_time}</span> <span style="float: right; color: #1474b2">总计： {$exchangeList.money}元</span>   
                        <div class="col-a">◆</div>
                    </div>

                    <div class="text-padding">
                        <div class="item-postion"> {$exchangeList.record_commodity}<span style="float: right;">{$exchangeList.money}元</span></div>
                        <div style="height: 10px;"></div>
                    </div>
                </div>
                <div style="clear: both;"></div>
            {/foreach}
        </div>

    </body>
    <script>
        $(".dateValue").each(function(){
        var thisDate=$(this).html();
        var years=thisDate.substr(0,4);
        var month=thisDate.substr(4,2);
        var date=thisDate.substr(6,2);
        $(this).html(years+"/"+month+"/"+date);
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