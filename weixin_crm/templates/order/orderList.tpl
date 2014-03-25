<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
<meta name="viewport" content="width=device-width,user-scalable=yes" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="{$WebSiteUrl}/css/minimal/blue.css" rel="stylesheet">
<style>
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
    }
    .groupInput{
        width: 30%;
        margin: 0 auto;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }
    .sortBar{
        width: 30%;
        margin: 0 auto;
    }
    .modal.in .modal-dialog {
        transform:  translate(0px, 35%);
    }
    .labelWidth{
        
    }
</style>
<div class="userMangerTitle">订单信息管理</div>
<div style="height: 50px;"></div>
<form action="{$WebSiteUrl}/pageredirst.php?action=order&functionname=seachOrder" method="post">
    <div style="">

        <div class="input-group groupInput">
            <input type="text" class="form-control" style="" placeholder="请输入订单号查询" id="selectText" name="selectText">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">查询</button>
            </span>

        </div>
    </div>
    <div style="height: 15px;"></div>
    <div class="sortBar"><label for="inputPassword3" class="control-label">排序：</label><input type="radio" name="sortType" id="point" value="point">&nbsp;<label for="point" class="control-label">预约时间</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sortType" id="money" value="money">&nbsp;<label for="money" class="control-label">生成时间</label></div>
    <div style="height: 15px;"></div>
    {if $errorMessage neq ""}
        <div class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label">{$errorMessage}</label></div>
    {/if}
</form>
<div style="height: 30px;"></div>
<div style="height: 250px;">
    <table class="table table-striped" >
        <tr><th>预约编号</th><th>预约日期</th><th>预约备注</th><th>指定预约</th><th>商品id(名称)</th><th>预约者电话</th><th>预约方式</th><th>是否付款</th><th>提交日期</th><th>编辑</th><th>删除</th></tr>
        {foreach from=$orderList item=orderInfo key=key}
            <tr class="check{$key}">
                <td>{$orderInfo.order_code}</td>
                <td>{$orderInfo.appointment_time|date_format:"%Y-%m-%d %H:%M"}</td>
                <td>{if $orderInfo.orders_remarks eq ""}无{else}{$orderInfo.orders_remarks}{/if}</td>
                <td>{if $orderInfo.appointment_object eq ""}无{else}{$orderInfo.appointment_object}{/if}</td>
                <td>{$orderInfo.merchandise_name}</td>
                <td>{$orderInfo.user_phone}</td>
                <td>{if $orderInfo.order_type eq 1}微信预约{else if $orderInfo.order_type eq 2}人工预约{/if}</td>
                <td>{if $orderInfo.order_pay_state eq 0}未付款{elseif $orderInfo.order_pay_state eq 1}已付款{/if}</td>
                <td>{$orderInfo.order_time|date_format:"%Y-%m-%d %H:%M"}</td>
                <td><a href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=orderEdit&orderCode={$orderInfo.order_code}"><button class="btn btn-warning">编辑</button></a></td>
                <td><button  data-toggle="modal" data-target="#myModal"  class="deleteButton btn btn-danger">删除</button></a></td>
            </tr>
        {/foreach}
    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">你确认删除这条信息么？</h4>
            </div>
            <div class="modal-body">
                <div class="form-group"> 
                    <label  class="control-label labelWidth">预约编号</label>
                    <label  class="control-label labelWidth">2014031816313988</label>
                </div>
                <div class="form-group"> 
                    <label  class=" control-label labelWidth">预约日期</label>
                    <label  class="control-label labelWidth">2014031816313988</label>
                </div>
                <div class="form-group"> 
                    <label  class=" control-label labelWidth">预约备注</label>
                    <label  class="control-label labelWidth">2014031816313988</label>
                </div>
                <div class="form-group"> 
                    <label  class=" control-label labelWidth">指定预约</label>
                    <label  class="control-label labelWidth">2014031816313988</label>
                </div>   
                <div class="form-group"> 
                    <label  class=" control-label labelWidth">项目名称</label>
                    <label class="control-label labelWidth">2014031816313988</label>
                </div>
                <div class="form-group"> 
                    <label  class=" control-label labelWidth">预约者电话</label>
                    <label  class="control-label labelWidth">2014031816313988</label>
                </div>
                <div class="form-group"> 
                    <label  class=" control-label labelWidth">预约方式</label>
                    <label  class="control-label labelWidth">2014031816313988</label>
                </div>
                <div class="form-group"> 
                    <label  class=" control-label labelWidth">是否付款</label>
                    <label  class="control-label labelWidth">2014031816313988</label>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <a id="checkButton" href="{$WebSiteUrl}/pageredirst.php?action=order&functionname=cancelReservation&orderCode={$orderInfo.order_code}"><button type="button" class="btn btn-primary">确认</button></a>
                <input type="hidden" id="deleteUrl" value="{$WebSiteUrl}/pageredirst.php?action=order&functionname=cancelReservation&orderCode="  />
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div style="text-align: center">{$pages}</div> 
<script src="{$WebSiteUrl}/js/icheck.min.js"></script>
<script>
    $('input').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue',
    increaseArea: '20%' // optional
}); 

$(".deleteButton").click(function (){
var alertTitle=new Array();
var alertText=new Array();
var WarringStr ="";
var textObject=$(this).parent().parent().find("td");
$(textObject).each(function(index){
alertText[index]=$(this).html();
})
$("th").each(function(index){
alertTitle[index]=$(this).html();
})
for (var i=0 ;i<(alertTitle.length)-3;i++){
WarringStr+="<div class='form-group'><label  class=' control-label labelWidth'>"+alertTitle[i]+":</label>"
+"<label  class='control-label labelWidth'>"+alertText[i]+"</label>"
+"</div>";
}
var deleteUrl=$("#deleteUrl").val();
$("#checkButton").attr("href", deleteUrl+alertText[0]);                
$(".modal-body").html(WarringStr);
})

</script>