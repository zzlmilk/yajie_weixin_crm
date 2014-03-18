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
        <link rel="stylesheet" href="{$WebSiteUrlPublic}/company/css/bootstrap-datetimepicker.css">
        <script src="{$WebSiteUrlPublic}/company/script/bootstrap-datetimepicker.js"></script>
        <script src="{$WebSiteUrlPublic}/company/script/bootstrap-datetimepicker.zh-CN.js"  charset="UTF-8"></script>
        {if $checkReturn eq 1}
            <title>修改预约</title>
        {else}
            <title>预约</title>
        {/if}
        <style>
            body{
                Font-size=62.5%;
            }
            .registerWarp{
                margin: 0 auto;
                margin-top: 2em;


            }

            .form-control{
                width: 90%;
                margin-top: -1.8em;
                margin-left: 4em;
            }
            .form-group{
                width: 90%;
                float: right;
                height: 3em;
                white-space:nowrap;
            }
            .col-sm-2{
                width: 5%;
                text-align: right;
            }
            .selectWidth{
                width:40%;
            }
            .lineDis{
                width:65%;
                font-size: 13px;
            }
            .floatIconText{
                float: right;
                margin-top: -24px;
            }
            .floatIconTextDown{
                float: bottom;
            }
            .boxround{
                width: 100%;
                border-radius: 5px;
                margin-left: 1em;
            }
            .boxround[readonly]{
                cursor: not-allowed;
                background-color: #EEE;
            }
            .no-list-type{
                list-style-type:none;
                padding-left: 0px;

            }
            .no-list-type >li{
                height: 3em;
                line-height: 3em;
                border-bottom: 1px solid #eee;
            }
            .listSelect{
                background-color: #2FABD1;
            }
        </style>
        <script>

        </script>                   
    </head>
    <body>     
        <div class="registerWarp">
            {if $checkReturn eq 1}
                <form class=""  method='post' role="form" action="{$WebSiteUrl}?g=company&a=test&v=orderCheck&checkReturn=1&open_id={$open_id}">
                {else}
                    <form class=""  method='post' role="form" action="{$WebSiteUrl}?g=company&a=test&v=orderCheck&open_id={$open_id}"><!-- action=""-->
                    {/if}
                    <div class="form-group" style=" margin-right: 3em;">
                        <table class='table-bordered col-sm-10' style="margin-left:1em;width:100%;">
                            <tr>
                                <td id="porpleNum" rowspan="2" style="text-align: center" width="30%">
                                    <label for="" class="">人数</label>
                                    {if $checkReturn eq 1}
                                        <span id="porpleCount">{$returnVal.porpleCountSubmit}</span>
                                        <input type=hidden value="{$returnVal.porpleCountSubmit}" id="porpleCountSubmit" name="porpleCountSubmit"/>
                                    {else if $returnVal.porpleCountSubmit eq  ''}
                                        <span id="porpleCount">1</span>
                                        <input type=hidden value="1" id="porpleCountSubmit" name="porpleCountSubmit"/>
                                    {else}
                                        <span id="porpleCount">1</span>
                                        <input type=hidden value="1" id="porpleCountSubmit" name="porpleCountSubmit"/>
                                    {/if}
                                    <span class="glyphicon glyphicon-chevron-down floatIconTextDown"></span>
                                </td>
                                <td>              
                                    <div id="orderDate" class=" date form_datetime ">
                                        <label for="inputPassword" class="col-sm-2 control-label">日期</label>
                                        {if $checkReturn eq 1}
                                            <input id="orderDateInput" name="orderDateInput"  class="form-control lineDis"  type="text" value="{$returnVal.orderDateInput}" readonly>
                                        {else}
                                            <input id="orderDateInput" name="orderDateInput"  class="form-control lineDis"  type="text" value="" readonly>
                                        {/if}
                                        <span class="add-on"><i class="icon-th"></i></span>
                                        <input type="hidden" value="2014-01-01" id="orderDateWithNoWeek">
                                        <span class="glyphicon glyphicon-chevron-right floatIconText"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr id="timesAlert">

                                <td >                        
                                    <div id="orderTime" class="date form_datetime ">
                                        <label for="orderTime" class="col-sm-2 control-label">时间</label>
                                        {if $checkReturn eq 1}
                                            <input id="orderTimeInput" name="orderTimeInput"  class="form-control lineDis"  type="text" value="{$returnVal.orderTimeInput}" readonly>
                                        {else}
                                            <input id="orderTimeInput" name="orderTimeInput"  class="form-control lineDis"  type="text" value="" readonly>
                                        {/if}

                                        <span class="add-on"><i class="icon-th"></i></span>
                                        <span class="glyphicon glyphicon-chevron-right floatIconText"></span>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div style="height: 100px;"></div>
                    <div class="form-group" style=" margin-right: 3em;">
                        <label for="orderMerchandise" class="col-sm-3 control-label">项目</label>
                        <div class="col-sm-10">
                            <select  class="form-control" id="orderMerchandise" name="orderMerchandise" >

                                {foreach from=$selectVal item=selectItem key=key}
                                    <option value="{$selectItem.merchandise_id}">{$selectItem.merchandise_name} {$selectItem.merchandise_money}元</option>

                                {/foreach}

                            </select>
                        </div>
                        <input type="hidden" value="" name="orderMerchandiseHtml" id="orderMerchandiseHtml">
                    </div>
                    <div class="form-group" style=" margin-right: 3em;">
                        <label for="orderObject" class="col-sm-2 control-label">指定</label>
                        <div class="col-sm-10">
                            {if $checkReturn eq 1}
                                <input type="name" class="form-control" id="orderObject" value="{$returnVal.orderObject}" name="orderObject" placeholder="请输入预约指定">
                            {else}
                                <input type="name" class="form-control" id="orderObject" value="" name="orderObject" placeholder="请输入预约指定">
                            {/if}
                        </div>
                    </div>
                    <div class="form-group" style=" margin-right: 3em;">
                        <div class="col-sm-offset-2 col-sm-10" style="margin-left: 4em;">
                            <button id="submitOrder"  class="btn btn-primary">预&nbsp;&nbsp;&nbsp;约</button>
                        </div>
                    </div>
                </form>

        </div>

        <div id="Bk" style=" display: none;width: 100%;height: 100%;background-color:black;opacity: 0.5; position: absolute; left: 0; top: 0;z-index: 100;"></div>
        <div id="context" style=" overflow:scroll;display: none;width: 70%;margin: 0 auto; background-color: white; position:fixed;height:80%; z-index: 150;top:90%; left: 15%">
            <div style="background-color: white;width: 100%; text-align: center">
                <ul class="no-list-type" id="porpleNumList">

                </ul>
            </div>
        </div>
        {if $checkReturn eq 1}
            <input id="selectValueCache" value="{$returnVal.orderMerchandise}" type="hidden" >
        {else}
            <input id="selectValueCache" value="1" type="hidden" > 
        {/if}
    </body> 

    <script src="{$WebSiteUrlPublic}/company/script/ctrlSelect.js"></script>
    <script type="text/javascript">
        var svc=$("#selectValueCache").val();
        $("#orderMerchandise").val(svc);
        var endDate= getDateTimeMessage(new Date(),2);
        $("#timesAlert").click(function(){
        $("#orderTime").datetimepicker('show');
        return false;
    });
    $("#submitOrder").click(function(){
    
    if($("#orderDateInput").val()==""||$("#orderTimeInput").val()==""){
    alert("请填写完整的预约时间（可能时间或日期未填写）");
    return false;
}else{
$(this).submit();
}   
});

$("#orderMerchandiseHtml").val($("#orderMerchandise").find("option:first").html());
//alert($("#orderDate").val());
$("#orderMerchandise").change(function(){
alert($(this).find("option:selected").html());
$("#orderMerchandiseHtml").val($(this).find("option:selected").html());
});
$("#orderTime").datetimepicker({
format: "hh:ii",
minuteStep:15,
autoclose:true,
startView:1,
maxView:1,
minView:0,
language:"zh-CN"
});
$("#orderDate").datetimepicker({
format: "yyyy-mm-dd ",
startDate:new Date(),
endDate:endDate,
autoclose:true,
minView:2,
forceParse:false,
language:"zh-CN"
});
$("#orderDate").datetimepicker().on('changeDate',function(ev){
var changeTime=(ev.date.valueOf());
var changeDateTime=new Date(changeTime);
var weekNumber=changeDateTime.getDay();
var weekDays=["周日","周一","周二","周三","周四","周五","周六"];
var dayData=$("#orderDateInput").val();
$("#orderDateWithNoWeek").val(dayData);
$("#orderTime").datetimepicker('setStartDate',$("#orderDateWithNoWeek").val());
$("#orderDateInput").val(dayData+""+weekDays[weekNumber]);
});

    </script> 
</html>