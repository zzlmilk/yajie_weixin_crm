<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-20 12:51:34
         compiled from "/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/exchange/ExchangeList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298606658532a73d6b958b7-45071766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4545244383103168cac20378053fef5b3d2d199' => 
    array (
      0 => '/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/exchange/ExchangeList.tpl',
      1 => 1395281291,
    ),
  ),
  'nocache_hash' => '298606658532a73d6b958b7-45071766',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<style>
    .dataArea{
        text-align: left;
        min-width: 500px;
        margin: 0 auto;
        height: 190px;
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
</style>
<div class="userMangerTitle">礼品列表</div>
<div style="height: 50px;"></div>
<div class="dataArea">
    <table class="table table-striped">
        <tr><th>礼品图片</th><th>礼品名称</th><th>礼品类型</th><th>兑换积分</th><th>物品简介</th><th>详细介绍</th><th>编辑</th><th>删除</th></tr>
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
" width="88" height="88"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['exchangeIteam']->value['exchange_name'];?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['exchangeIteam']->value['exchange_type']==0){?>
                        虚拟
                    <?php }else{ ?>
                        实物
                    <?php }?> 
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['exchangeIteam']->value['exchange_integration'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['exchangeIteam']->value['exchange_summary'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['exchangeIteam']->value['exchangez_details'];?>
</td>
                <td><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=editExchangeItem&ItemId=<?php echo $_smarty_tpl->tpl_vars['exchangeIteam']->value['exchange_id'];?>
"><button class="btn btn-warning">编辑</button></a></td>
                <td><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=exchangeItemDelete&ItemId=<?php echo $_smarty_tpl->tpl_vars['exchangeIteam']->value['exchange_id'];?>
"><button class="btn btn-danger">删除</button></a></td>
            </tr>
        <?php }} ?>
    </table>
</div>
