<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

        <title>选择支付方式</title>
        <style>
            body{
                min-width: 320px;
                Font-size=62.5%;
            }
            .cardBackground{
                border-radius: 7px;
                width:85%;
                margin: 0 auto;
                background-color: #e3e3e3;
                height: 100%;
                margin-top: 1em;
            }

            .topNameTry{
                height: 3em; font-size: 1em; line-height: 3em; color: rgb(70,140,200);
            }
            .topTitleTry{
                float: left; height: 3em; font-size: 1.0em; line-height: 3em;
            } 
            label{
                font-weight: normal;
            }
            .moneyArea{
                text-align: right;
                padding-right: 15px;
            }
            .messageTitle{
                width: 90px;
            }
        </style>
    </head>
    <body style='background-color: rgb(243,237,227);'>
        <form method='post' role="form" action="{$WebSiteUrl}?g={$model}&a=order&v=orderPayPage&payType=store&open_id={$open_id}">
        <div class="cardBackground"  style='background-color: #fff;position: relative;'>
            <div class="form-group" style=" margin-top: 1.5em; margin-bottom: 0px;">
                <div style="height: 1em;"></div>

                <label class="col-sm-2  topTitleTry"style="margin-right: 0px">{$userName}，</label>
                <div class="col-sm-10">
                    <p class="form-control-static topNameTry">订单已生效请选择支付方式</p>
                    <input type="hidden" name="orderMerchandise" value="{$returnVal.orderMerchandise}">
                </div>
                <div style="clear: both;"></div>
            </div>
            <div style="border-bottom: 1px dotted #bbb;height: 1px; "></div>
            <div style="height:25px;"></div>

            <div class="form-group" style="">
                <label class="col-sm-2 control-label" style="">选择优惠信息：</label>
                <div style="height: 1em;"></div>
                <div class="col-sm-4">
                    <select id="promoSelect" name="promoSelect" class="form-control col-sm-4">
                        <option selected="" promoCost="10" value="">请选择优惠信息</option>
                        {foreach from=$promoInfo item=promo key=key}
                            <option promoCost="{$promo.commodity_cost}" value="{$promo.commodity_id}">{$promo.commodity_name}优惠</option>
                        {/foreach}
                    </select>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div class="form-group" style="">
                <div style="text-align: right; color: red" class="col-sm-4">您消费：<span id="money">{$costMoney}</span>元，优惠价<span id="promoMoney">{$costMoney}</span>元</div>
                <input type="hidden" id="costMoney" name="costMoney" value="{$costMoney}">
            </div>

            <div style="height: 10px;"></div>
            <div class="form-group" style="">
                <div class="col-sm-10" style="text-align: center;" >
                    <button type="button" style="width: 50%; text-align: center" class="sBtn btn btn-primary">微信支付</button>
                </div>
            </div>
            <div class="form-group" style="">
                <div class="col-sm-10" style="text-align: center;" >
                    <a href="#"><button type="submit" style="width: 50%; text-align: center" class="sBtn btn btn-primary">到店消费</button></a>
                </div>
                <div style="clear: both;"></div>
            </div>

            <div class="form-group" style="margin-top: 2.5em; text-align: center;">

                <div style="clear: both;"></div>
            </div>
            <div style="height: 1em;"></div>
            <div style="height: 1em;"></div>
            <div style="height: 1em;"></div>
            <div style="height: 1em;"></div>
        </form>
        </div>

    </body>
    <script>
        $("#promoSelect").change(function(){
        var money=$("#money").html();
        var promoMoney=0;
        var promoNum=$("#promoSelect option:selected").attr("promoCost");
        promoMoney=parseFloat(money) *(promoNum*0.1);
        var arrayMoney=  promoMoney.toString().split(".");
        if(arrayMoney[1]==null){
        promoMoney=arrayMoney[0]+".00";
        }else if(arrayMoney[1].length==1){
        promoMoney=promoMoney+"0";
        }else if(arrayMoney[1].length>2){

        var cutNum=arrayMoney[1].substr(0, 2).toString();
        promoMoney=arrayMoney[0].toString()+"."+cutNum;
        }
$("#promoMoney").html(promoMoney);
$("#costMoney").val(promoMoney);
});
$(".sBtn").click(function(){
if($("#costMoney").val()<0){
alert("物品价格不能低于0");
}
})
    </script>
</html>
