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
<div class="userMangerTitle">添加礼品</div>
<div id="errorMessage" class="alert alert-danger errorMessage"></div>
<div style="margin-left:15px;margin-top:15px;">
    <div style="width: 300px; margin: 0 auto;">
        <form class="form-horizontal" action="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=addExchangeItem" enctype="multipart/form-data" method="Post">
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">礼品名称：</label>
                <div class="col-sm-2">
                    <input class="form-control inputWidth" type="text" value="" name="exchange_name" id="exchangeName">
                </div>
            </div> 
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">礼品类型：</label>
                <div class="col-sm-2">
                    <select name="exchange_type" id='exchangeType' class="form-control inputWidth">
                        <option value="0" selected="selected">虚拟</option>
                        <option value="1">实物</option>
                    </select>
                </div>
            </div> 
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">兑换积分：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="" name="exchange_integration" id="exchangeIntegration">
                </div>
            </div>

            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">礼品简介：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="" name="exchange_summary" id="exchangeSummary">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputFile" class="col-sm-2 control-label labelWidth">礼品图片</label>
                <input class=" inputWidth" style="padding-left: 25px;" name="exampleInputFile"  type="file" id="exampleInputFile">
            </div>
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">礼品详情：</label>
                <div class="col-sm-2">
                    <textarea  class="form-control inputWidth" rows="3"name="exchangez_details" id="exchangezDetails"></textarea>
                </div>
            </div>

            <p style="text-align: center;"><button id="addButton" class="btn btn-info">确认添加</button></p>
        </form>
    </div>
</div>
<script src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
<script src="{$WebSiteUrl}/js/rexexTest.js"></script>
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
if($("#exampleInputFile").val()==""){
errorMessage+="请选择一张图片 <br>";
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
}
})
     
</script>
