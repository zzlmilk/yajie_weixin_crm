<!DOCTYPE html>
<html>
    <head>
        <title>刮刮卡</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="width=device-width,initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
       
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css"> 
        <script src="{$WebSiteUrlPublic}/javascript/giftAward.js"></script>
        <script type="text/javascript" src="{$WebSiteUrlPublic}/ggk/wScratchPad.js"></script>  
    </head>
    <body id='bobyGame' style='background: #910d0d url({$WebSiteUrlPublic}/ggk/guaguaka_back.png) no-repeat center ;width: 320px; height: 504px; margin: 0 auto;'>

        <style>
            .wScratchPad3{
                display:inline-block;
              
                width: 270px;
                height: 133px;
                overflow: hidden;


               margin: 8px 8px;

            }


        </style>
    
        <input type="hidden" value="{$websiteurl}" id="apiRoute" >
        <input type="hidden" value="{$open_id}" id="open_id" >

        <div style='height: 162px;'>&nbsp;</div>

        <div style='width: 286px; height: 151px; background-color: white;margin-left: 17px; margin-right: '>

            <div id="wScratchPad3" class="wScratchPad3"></div>
        </div>

        <div style='font-size: 13px; color: white; margin-top: 34px; margin-left:60px;'>

            <div>脊会员您好！欢迎来刮刮乐获得意想不到</div>

            <div>的礼品，每天限玩一次哦～</div>

            <div>快来试试手气把！</div>


        </div>
        

        <script type="text/javascript">

            var webUrl = '{$websiteUrl}';

            var model = '{$model}';

           
            var win = $(window).width();
            win = win * 0.9;
           
            var alertFlag = true;
            var giftId ='{$ScratchCardResults.id}';

            var picTitle = '{$ScratchCardResults.image}';

          
            
            var requestUrl = $("#apiRoute").val() + "/?g="+model+"&a=game&v=guaguakaGetLottery";
           
            //再试一次
            $("#reloadPage").click(function() {
                location.reload();
            });


            var WebSiteUrlPublic = '{$WebSiteUrlPublic}';

            
            $(function() {
                $("#wScratchPad3").wScratchPad({
                    width: 786,
                    cursor: '',
                    image: WebSiteUrlPublic + '/ggk/' + picTitle,
                    scratchUp: function(e, percent) {

                       
                        if (alertFlag) {
                            var cent = 786;
                            var changeSize = win / cent;

                           

                            var changeSize = (changeSize / 1) * 10;

                            


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