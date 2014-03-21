<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-20 12:46:40
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/order/orderList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257338555532a72b02ead00-18074099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d96b2375f555b0da788764f166ca738b4621e48' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/order/orderList.tpl',
      1 => 1395286473,
    ),
  ),
  'nocache_hash' => '257338555532a72b02ead00-18074099',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/yajie_weixin_crm/weixin_crm/Smarty/libs/plugins/modifier.date_format.php';
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
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
        font-size: 25px;
        margin-top: 15px;
        text-align: center;
    }
    .sortBar{
        width: 30%;
        margin: 0 auto;
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
    <?php if ($_smarty_tpl->getVariable('errorMessage')->value!=''){?>
        <div class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label"><?php echo $_smarty_tpl->getVariable('errorMessage')->value;?>
</label></div>
    <?php }?>
</form>
<div style="height: 30px;"></div>
<div style="height: 250px;">
    <table class="table table-striped" >
        <tr><th>预约编号</th><th>预约日期</th><th>预约备注</th><th>指定预约</th><th>商品id(名称)</th><th>预约者电话</th><th>预约方式</th><th>是否付款</th><th>提交日期</th><th>编辑</th><th>删除</th></tr>
        <?php  $_smarty_tpl->tpl_vars['orderInfo'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('orderList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['orderInfo']->key => $_smarty_tpl->tpl_vars['orderInfo']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['orderInfo']->key;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['order_code'];?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderInfo']->value['appointment_time'],"%Y-%m-%d %H:%M");?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['orders_remarks']==''){?>
                        无
                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['orders_remarks'];?>

                    <?php }?>
                </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['appointment_object']==''){?>
                        无
                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['appointment_object'];?>

                    <?php }?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['merchandise_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['user_phone'];?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['order_type']==1){?>
                        微信预约
                    <?php }elseif($_smarty_tpl->tpl_vars['orderInfo']->value['order_type']==2){?>
                        人工预约
                    <?php }?>
                </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['order_pay_state']==0){?>
                        未付款 
                    <?php }elseif($_smarty_tpl->tpl_vars['orderInfo']->value['order_pay_state']==1){?>
                        已付款
                    <?php }?>
                </td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderInfo']->value['order_time'],"%Y-%m-%d %H:%M");?>
</td>
                <td><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=order&functionname=orderEdit&orderCode=<?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['order_code'];?>
"><button class="btn btn-warning">编辑</button></a></td>
                <td><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=order&functionname=cancelReservation&orderCode=<?php echo $_smarty_tpl->tpl_vars['orderInfo']->value['order_code'];?>
"><button class="btn btn-danger">删除</button></a></td>
            </tr>
        <?php }} ?>
    </table>
</div>
<div style="text-align: center"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</div> 