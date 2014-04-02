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
        <script type="text/javascript" src="{$WebSiteUrlPublic}/company/ggk/wScratchPad.js"></script>  
    </head>
    <body>

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
        <input type="hidden" value="{$websiteurl}" id="apiRoute" >
        <input type="hidden" value="{$open_id}" id="open_id" >
        <div id="wScratchPad3" class="wScratchPad3"></div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!--                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                        <h4 class="modal-title" id="myModalLabel">领奖页面</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" id="getLottery" class="btn btn-primary">领取</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Modal -->
        <div class="modal fade" id="noRank" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!--                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                        <h4 class="modal-title" id="myModalLabel">没中奖</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="reloadPage" class="btn btn-primary">再试一次</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <script type="text/javascript">
            
            //初始化获奖
            var picTitle="xx.jpg";
            var lotteryRank="";
            var alertFlag=true;
            var giftId={$ScratchCardResults.gift_id};
            var requestUrl= $("#apiRoute").val()+"/?g=company&a=game&v=guaguakaGetLottery";
            switch(giftId){
            case "11":
            case 11:
                picTitle="1.jpg";
                lotteryRank=1;
                break;
            case "12":
            case 12:
                picTitle="2.jpg";
                lotteryRank=2;
                break;
            case "13":
            case 13:
                picTitle="3.jpg";
                lotteryRank=3;
                break;
            default:
                lotteryRank=0;
                picTitle="xx.jpg";
                break;
            }
            //再试一次
            $("#reloadPage").click(function(){
            location.reload();
        });
        //领取

        $("#getLottery").click(function(){
        $.post(
        requestUrl,
        {
        gift_id:giftId,
        open_id:$("#open_id").val()
    },
    function(rData){
    var message="恭喜你获得"+rData['gift_integration']+"积分";
    $("#getLottery").hide();
    $(".modal-body").html();
    $(".modal-body").html(message);
    
}
);
});
//刮刮卡
var WebSiteUrlPublic = '{$WebSiteUrlPublic}';
$(function(){
$("#wScratchPad3").wScratchPad({
cursor:'',
image:WebSiteUrlPublic+'/company/ggk/'+picTitle,			
scratchUp: function(e, percent){
            
console.log(percent);
if(alertFlag){
if(percent > 20){
if(lotteryRank>0){
var message=""
switch(lotteryRank){
case 1:
message= "恭喜你获得一等奖";
break;
case 2:
message= "恭喜你获得二等奖";
break;
case 3:
message= "恭喜你获得三等奖";
break;
}
$(".modal-body").html(message);
$('#myModal').modal();
alertFlag=false;
}else{
$('#noRank').modal();
   
}
this.clear();
}
}
}
});
})		
        </script>
    </body>
</html>