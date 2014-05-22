<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-21 17:18:37
         compiled from "/web/www/yajie_weixin_crm/weixin_crm//templates/jiantang/order/orderList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214790488537c6f6db490d6-72583105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39f82e444cae73e389884a1b94c0bac039253b3f' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm//templates/jiantang/order/orderList.tpl',
      1 => 1395883827,
    ),
  ),
  'nocache_hash' => '214790488537c6f6db490d6-72583105',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/yajie_weixin_crm/weixin_crm/Smarty/libs/plugins/modifier.date_format.php';
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
<meta name="viewport" content="width=device-width,user-scalable=yes" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/minimal/blue.css" rel="stylesheet">
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
<form action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=order&functionname=seachOrder" method="post">
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
    <?php if ($_smarty_tpl->getVariable('errorMessage')->value!=''){?>
        <div class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label"><?php echo $_smarty_tpl->getVariable('errorMessage')->value;?>
</label></div>
    <?php }?>
</form>
<div style="height: 30px;"></div>
<div>
    <table class="table table-striped" >
        <tr><th>预约编号</th><th>预约日期</th><th>预约备注</th><th>指定预约</th><th>商品id(名称)</th><th>预约者电话</th><th>预约方式</th><th>是否付款</th><th>提交日期</th><th>编辑</th><th>删除</th></tr>
        <?php  $_smarty_tpl->tpl_vars['orderInfo'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('orderList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['orderInfo']->key => $_smarty_tpl->tpl_vars['orderInfo']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['orderInfo']->key;
?>
            <tr class="check<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['order_code'];?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderInfo']->value['appointment_time'],"%Y-%m-%d %H:%M");?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['orders_remarks']==''){?>无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['orders_remarks'];?>
<?php }?></td>
                <td><?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['appointment_object']==''){?>无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['appointment_object'];?>
<?php }?></td>
                <td><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['merchandise_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['user_phone'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['order_type']==1){?>微信预约<?php }elseif($_smarty_tpl->tpl_vars['orderInfo']->value['order_type']==2){?>人工预约<?php }?></td>
                <td><?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['order_pay_state']==0){?>未付款<?php }elseif($_smarty_tpl->tpl_vars['orderInfo']->value['order_pay_state']==1){?>已付款<?php }?></td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderInfo']->value['order_time'],"%Y-%m-%d %H:%M");?>
</td>
                <td><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=order&functionname=orderEdit&orderCode=<?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['order_code'];?>
"><button class="btn btn-warning">编辑</button></a></td>
                <td><button  data-toggle="modal" data-target="#myModal"  class="deleteButton btn btn-danger">删除</button></a></td>
            </tr>
        <?php }} ?>
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
                <a id="checkButton" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=order&functionname=cancelReservation&orderCode=<?php echo $_smarty_tpl->getVariable('orderInfo')->value['order_code'];?>
"><button type="button" class="btn btn-primary">确认</button></a>
                <input type="hidden" id="deleteUrl" value="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=order&functionname=cancelReservation&orderCode="  />
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div style="text-align: center"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</div> 
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/icheck.min.js"></script>
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