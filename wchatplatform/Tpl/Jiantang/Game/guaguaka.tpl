<!DOCTYPE html>
<html>
    <head>
        <title>刮刮卡</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css"> 
        <script src="{$WebSiteUrlPublic}/javascript/giftAward.js"></script>
        <script type="text/javascript" src="{$WebSiteUrlPublic}/company/ggk/wScratchPad.js"></script>  
    </head>
    <body id='bobyGame'>

        <style>
            .wScratchPad3{
                display:inline-block;
                position:relative; 
                border:solid #ccc 1px;
                margin-left: 5%;
                margin-right: 5%;
                margin-top: 3%;
                width: 90%;
                height: 20em;
                overflow: hidden;

            }


        </style>
         <div style='height: 1em;'>&nbsp;</div>
        <div style=' text-align: center;background-color: rgb(243,237,227); width: 80%; margin: 0 auto; line-height: 2em;'>脊会员您好，欢迎来刮刮乐获得意想不到的礼品，每天限玩一次</div>
        
        <div style=' height: 1em;'>&nbsp;</div>
        <input type="hidden" value="{$websiteurl}" id="apiRoute" >
        <input type="hidden" value="{$open_id}" id="open_id" >
        <div id="wScratchPad3" class="wScratchPad3"></div>

        <script type="text/javascript">

            var webUrl = '{$websiteUrl}';

            var model = '{$model}';

            //初始化获奖
            var picTitle = "xx.jpg";
            var win = $(window).width();
            win = win * 0.9;
            var lotteryRank = "";
            var alertFlag = true;
            var giftId ={$ScratchCardResults.gift_id};
            var requestUrl = $("#apiRoute").val() + "/?g="+model+"&a=game&v=guaguakaGetLottery";
            switch (giftId) {
                case "11":
                case 11:
                    picTitle = "1.jpg";
                    lotteryRank = 1;
                    break;
                case "12":
                case 12:
                    picTitle = "2.jpg";
                    lotteryRank = 2;
                    break;
                case "13":
                case 13:
                    picTitle = "3.jpg";
                    lotteryRank = 3;
                    break;
                default:
                    lotteryRank = 0;
                    picTitle = "xx.jpg";
                    break;
            }
            //再试一次
            $("#reloadPage").click(function() {
                location.reload();
            });


            $("#getLottery").click(function() {
                $.post(
                        requestUrl,
                        {
                            gift_id: giftId,
                            open_id: $("#open_id").val()
                        },
                function(rData) {
                    if (rData == "1") {
                        $("#getLottery").hide();
                        $(".modal-body").html();
                        $(".modal-body").html("发生错误");
                    } else {
                        var message = "恭喜你获得" + rData['gift_integration'] + "积分";
                        $("#getLottery").hide();
                        $(".modal-body").html();
                        $(".modal-body").html(message);
                    }

                }
                );
            });
//刮刮卡

            var WebSiteUrlPublic = '{$WebSiteUrlPublic}';
            $(function() {
                $("#wScratchPad3").wScratchPad({
                    width: 786,
                    cursor: '',
                    image: WebSiteUrlPublic + '/company/ggk/' + picTitle,
                    scratchUp: function(e, percent) {

                        console.log(percent);
                        if (alertFlag) {
                            var cent = 786;
                            var changeSize = win / cent;
                            var changeSize = (changeSize / 0.4) * 10;
                            if (percent > changeSize) {

                                alertFlag = false;

                                $.ajax({
                                    url: webUrl + "?g="+model+"&a=game&v=getGameAward",
                                    type: "get",
                                    data: {
                                        gift_id: giftId,
                                        open_id: $('#open_id').val(),
                                        gift_type: 2

                                    },
                                    success: function(res) {


                                        $('#bobyGame').append(res);
                                        $('#myModal').modal();


                                    }
                                    ,
                                    error: function(xhr, textStatus) {
                                        if (textStatus == 'timeout') {
                                            //处理超时的逻辑

                                            alert('网络超时');

                                        }
                                        else {
                                            //其他错误的逻辑
                                        }
                                    },
                                    timeout: 2000
                                })
                                this.clear();
                            }
                        }
                    }
                });
            })
        </script>
    </body>
</html>