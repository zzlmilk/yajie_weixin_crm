<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-21 10:44:40
         compiled from "/web/www/yajie_weixin_crm/weixin_crm//templates/inhouse/exchange/ExchangeList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:710945396537c13183c7d38-45013166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14c6a69e768f01ca0ca6251c8aca891889db74ad' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm//templates/inhouse/exchange/ExchangeList.tpl',
      1 => 1400488781,
    ),
  ),
  'nocache_hash' => '710945396537c13183c7d38-45013166',
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
/css/crm_table_style.css" rel="stylesheet">
<style>
    .dataArea{
        text-align: left;
        min-width: 500px;
        margin: 0 auto;
        height: 515px;
    }
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
        vertical-align:middle !important;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 25px;
        margin-top: 15px;
        text-align: center;
    }
    .deleteButton{
        color:red;
    }
    .deleteButton:hover{
        color: red;
        text-decoration: none;
    }
</style>
<div class="navBarStyle">
    当前位置：兑换管理 > 礼品列表
</div>
<div style="height: 50px;"></div>
<div class="dataArea">
    <table class="table table-bordered crmTable" >
        <tr><th>礼品图片</th>
            <!--            <th>礼品名称</th><th>礼品类型</th>-->
            <th style="width: 120px;">兑换积分</th><th>物品简介</th>
            <th>添加时间</th>
            <th style="display: none">id</th><th>编辑</th><th>删除</th></tr>
            <?php  $_smarty_tpl->tpl_vars['exchangeIteam'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('exchangeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['exchangeIteam']->key => $_smarty_tpl->tpl_vars['exchangeIteam']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['exchangeIteam']->key;
?>
            <tr>
                <td><img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/giftImages/<?php echo $_smarty_tpl->tpl_vars['exchangeIteam']->value['exchange_image'];?>
" width="80" height="80"></td>
<!--                <td><?php echo $_smarty_tpl->tpl_vars['exchangeIteam']->value['exchange_name'];?>
</td>
                <td>
                <?php if ($_smarty_tpl->tpl_vars['exchangeIteam']->value['exchange_type']==0){?>
                    虚拟
                <?php }else{ ?>
                    实物
                <?php }?> 
            </td>-->
                <td><?php echo $_smarty_tpl->tpl_vars['exchangeIteam']->value['exchange_integration'];?>
</td>
                <td style="text-align: left;width: 50%"><?php echo $_smarty_tpl->tpl_vars['exchangeIteam']->value['exchange_summary'];?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['exchangeIteam']->value['create_time']==''){?>
                    <td style="text-align: center;">暂无</td>
                <?php }else{ ?>
                    <td style="text-align: left;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exchangeIteam']->value['create_time'],"%Y-%m-%d %H:%M");?>
</td>
                <?php }?>
                <td  style="display: none"><?php echo $_smarty_tpl->tpl_vars['exchangeIteam']->value['exchange_id'];?>
</td>
                <td><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=editExchangeItem&ItemId=<?php echo $_smarty_tpl->tpl_vars['exchangeIteam']->value['exchange_id'];?>
">编辑</a></td>
                <td><a href="#"  data-toggle="modal" data-target="#myModal" class="deleteButton ">删除</a></td>

            </tr>
        <?php }} ?>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">你确认删除这条信息么？</h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <a id="checkButton" href=""><button type="button" class="btn btn-primary">确认</button></a>
                    <input type="hidden" id="deleteUrl" value="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=exchangeItemDelete&ItemId="  />
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<div style="text-align: center"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</div> 
<script>
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
$("#checkButton").attr("href", deleteUrl+alertText[4]);                
$(".modal-body").html(WarringStr);
})
</script>
