<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
<meta name="viewport" content="width=device-width,user-scalable=yes" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">  
<style>
    .labelWidth{
        width: auto !important;
    }
    .inputWidth{
        width: 165px;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 25px;
        margin-top: 15px;
        text-align: center;
    }
    .errorMessage{
        width: 300px;
        margin: 0 auto;
        display: none;
    }
</style>
<div style="position: relative;left: 10px; top: 10px;"><a href="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=ExchangeList"><button class="btn btn-primary">返回</button></a></div>
<div class="userMangerTitle">编辑礼品</div>
<div id="errorMessage" class="alert alert-danger errorMessage"></div>
<div style="margin-left:15px;margin-top:15px;">
    <div style="width: 300px; margin: 0 auto;">
        <div style="text-align: center"><b style=" color: rgb(240,173,78)">注:图片须为88*88至176*176正方形图片</b></div>
        <div style="height: 35px;"></div>
        <form class="form-horizontal" action="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=exchangeUpdate&ItemId={$exchageValue.exchange_id}" enctype="multipart/form-data" method="Post">
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">礼品名称：</label>
                <div class="col-sm-2">
                    <input class="form-control inputWidth" type="text" value="{$exchageValue.exchange_name}" name="exchange_name" id="exchangeName">
                </div>
            </div> 
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth" >礼品类型：</label>
                <div class="col-sm-2">
                    <select name="exchange_type" id='exchangeType' class="form-control inputWidth">
                        {if $exchageValue.exchange_type eq 0}
                            <option value="0" selected="selected">虚拟</option>
                            <option value="1">实物</option>
                        {else}
                            <option value="0">虚拟</option>
                            <option value="1" selected="selected">实物</option>
                        {/if}
                    </select>
                </div>
            </div> 
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">兑换积分：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="{$exchageValue.exchange_integration}" name="exchange_integration" id="exchangeIntegration">
                </div>
            </div>

            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">礼品简介：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="{$exchageValue.exchange_summary}" name="exchange_summary" id="exchangeSummary">

                </div>

            </div>

            <label for="exampleInputFile"style="padding-left: 0px;" class="col-sm-2 control-label labelWidth">礼品图片：</label>
            <br>
            <input class=" inputWidth" style="margin-left: 35%" style="margin-top:  15px;width: 72px;" name="exampleInputFile"  type="file" id="exampleInputFile">
            <div style="height: 15px"></div>
            <div id="picDiv"><img style="margin-left: 35%" src="{$WebSiteUrl}/giftImages/{$exchageValue.exchange_image}" width="88" height="88"></div>
            <div style="height: 15px"></div>

            <div class="form-group"> 
                <label for="inputEmail3"  class="col-sm-2 control-label labelWidth">礼品详情：</label>
                <div class="col-sm-2">
                    <textarea  class="form-control inputWidth" rows="3"name="exchangez_details" id="exchangezDetails">{$exchageValue.exchangez_details}</textarea>
                </div>
            </div>

            <p style="text-align: center;"><button data-toggle="modal" data-target="#myModal" type="button" id="addButton"  class="btn btn-info">确认修改</button></p>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" >
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">你确认修改这条信息么？</h4>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                            <a id="checkButton" href=""><button type="submit" class="btn btn-primary">确认</button></a>
                            <input type="hidden" id="deleteUrl" value="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=exchangeItemDelete&ItemId="  />
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </form>
    </div>
</div>
<script src="{$WebSiteUrl}/js/rexexTest.js"></script>
<script src="{$WebSiteUrl}/js/buttonDisable.js"></script>
<script>
    $("#addButton").click(function(){
    $("#errorMessage").hide();
    $("#errorMessage").html();

    var errorMessage="";
    var alertFlag=false;
    if($("#exchangeName").val()==""){
    errorMessage+="礼品名称不能为空 <br>";
    alertFlag=true;
}
if($("#exchangeSummary").val()==""){
errorMessage+="简介不能为空 <br>";
alertFlag=true;
}
if(!getIntRegex($("#exchangeIntegration").val())||$("#exchangeIntegration").val()<0){
errorMessage+="兑换积分必须为数字或者大于0 <br>";
alertFlag=true;
}
if(alertFlag){ 
$("#errorMessage").show();
$("#errorMessage").html(errorMessage);
return false;
}else{
$(".modal-body").html("");
var alertTitle=new Array();
var alertText=new Array();
var WarringStr ="";
//var textObject=$(this).parent().parent().find("td");
$(".labelWidth").each(function(index){
alertTitle[index]=$(this).html();
})
$(".inputWidth").each(function(index){
if(this.tagName=="SELECT"){
alertText[index]=$(this).find("option:selected").html();
}
else{
if($(this).val()==""){
alertText[index]="未填写";
}
else{
alertText[index]=$(this).val();
}
}
});

for (var i=0 ;i<alertTitle.length;i++){
WarringStr+="<div class='form-group'><label  class=' control-label labelWidth'>"+alertTitle[i]+"</label>"
+"<label  class='control-label labelWidth'>"+alertText[i]+"</label>"
+"</div>";
}
var deleteUrl=$("#deleteUrl").val();
$("#checkButton").attr("href", deleteUrl+alertText[6]);                
$(".modal-body").html(WarringStr);
}
})
buttonDisable($("#addButton"));

</script>
