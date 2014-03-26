<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css"> 
        <style>
            .form-group{
                margin-top: 15px;
            }
        </style>
    </head>
    <body>
        <div class="registerWarp">
            <form method='post' role="form" action="{$WebSiteUrl}?g=company&a=user&v=updateUserLocation">
                <input type="hidden" name='open_id' id='open_id' value='{$open_id}'>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">省</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="province" name="province_id">
                            {foreach from=$provinceValue item=provinceItem key=key}
                                {if $provinceItem.area_id eq $userMessage.province_id}
                                    <option selected value="{$provinceItem.area_id}">{$provinceItem.title}</option>
                                {else}
                                    <option value="{$provinceItem.area_id}">{$provinceItem.title}</option>
                                {/if}
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">市</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="town" name="city_id">
                            {foreach from=$townValue item=townItem key=key}
                                {if $townItem.area_id eq $userMessage.city_id}
                                    <option selected value="{$townItem.area_id}">{$townItem.title}</option>
                                {else}
                                    <option  value="{$townItem.area_id}">{$townItem.title}</option>
                                {/if}
                            {/foreach}
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">区</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="area" name="area_id">
                            {foreach from=$areaValue item=areaItem key=key}
                                {if $areaItem.area_id eq $userMessage.area_id}
                                    <option selected value="{$areaItem.area_id}">{$areaItem.title}</option>
                                {else}
                                    <option value="{$areaItem.area_id}">{$areaItem.title}</option>
                                {/if}
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">居住地址</label>
                    <div class="col-sm-10">
                        <input type="text" value="{$userMessage.street}" class="form-control" id="street" name="street">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">真实姓名</label>
                    <div class="col-sm-10">
                        <input type="text" value="{$userMessage.real_name}" class="form-control" id="real_name" name="real_name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">电话号码</label>
                    <div class="col-sm-10">
                        <input type="text" value="{$userMessage.address_phone}" class="form-control" id="user_phone" name="address_phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10" >
                        <button id="submitOrder" type="submit"  class="btn btn-primary">确&nbsp;&nbsp;&nbsp;认</button>
                    </div>
                </div>
                <input type="hidden" id="gNumber" name="gNumber" value="{$goodsId}">
            </form>
        </div>
    </body>
    <script src="{$WebSiteUrlPublic}/company/script/defined.js"></script>
    <script>
        
        $("#province").change(function(){
        $.post(locationURL,
        {
            areaId:$(this).val()
        },
        function(rData){
        var rDataLength=rData.length;
        $("#town").html("");
        var townHTMLString="";
        for(var i=0;i<rDataLength;i++){
        townHTMLString+="<option value='"+rData[i]['area_id']+"'>";
        townHTMLString+=rData[i]["title"];
        townHTMLString+="</option>";
    }
    $("#town").html(townHTMLString);
    $.post(locationURL,
        {
    areaId:$("#town").val()
},
function(rData){
var rDataLength=rData.length;
$("#area").html("");
var townHTMLString="";
for(var i=0;i<rDataLength;i++){
townHTMLString+="<option value='"+rData[i]['area_id']+"'>";
townHTMLString+=rData[i]["title"];
townHTMLString+="</option>";
}
$("#area").html(townHTMLString);
});
});
});
$("#town").change(function(){
$.post(locationURL,
        {
areaId:$(this).val()
},
function(rData){
var rDataLength=rData.length;
$("#area").html("");
var townHTMLString="";
for(var i=0;i<rDataLength;i++){
townHTMLString+="<option value='"+rData[i]['area_id']+"'>";
townHTMLString+=rData[i]["title"];
townHTMLString+="</option>";
}
$("#area").html(townHTMLString);
});
})
    </script>
</html>