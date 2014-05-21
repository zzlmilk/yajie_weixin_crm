<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-21 17:20:49
         compiled from "/web/www/yajie_weixin_crm/weixin_crm//templates/jiantang/promoCode/codeList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1270011064537c6ff1707b82-68411259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e906fe4682246e55ce6fef1985a2d293ad54f557' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm//templates/jiantang/promoCode/codeList.tpl',
      1 => 1395830920,
    ),
  ),
  'nocache_hash' => '1270011064537c6ff1707b82-68411259',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/minimal/blue.css" rel="stylesheet">

<style>
    body{
        overflow-x: hidden;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }
    .selectBar{

        text-align: center;  

    }
    .dataArea{
        text-align: left;
        width: 60%;
        min-width: 500px;
        margin: 0 auto;
        height: 190px;
    }
    .sortBar{
        width: 30%;
        margin: 0 auto;
    }
    table tr>th{
        text-align: center;
    }
    table tr>td{
        text-align: center;
        vertical-align:middle !important;
    }
    .groupInput{
        width: 30%;
        margin: 0 auto;
    }
</style>
<div class="userMangerTitle">优惠券管理</div>
<div style="height: 50px;"></div>
<form action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=promoCode&functionname=codeList" method="post">

    <div style="">

        <div class="input-group groupInput">
            <input type="text" class="form-control" style="" placeholder="请输入优惠券查询" id="selectText" name="selectText">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">查询</button>
            </span>

        </div>
    </div>
   
    <div style="height: 30px;"></div>
</form>

<div class="dataArea">
    <table class="table table-striped">
        <tr><th>验证码</th><th>类型</th><th>状态</th></tr>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('info')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['code_name'];?>
</td>
                <td>打折</td>
                <td>

                    <?php if ($_smarty_tpl->tpl_vars['v']->value['code_state']==0){?>

                    未领取

                    <?php }elseif($_smarty_tpl->tpl_vars['v']->value['code_state']==1){?>

                    未使用

                    <?php }else{ ?>

                    已使用

                    <?php }?>
                </td>
            </tr>
        <?php }} ?>
    </table>
</div>
<div style="text-align: center"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</div> 
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/icheck.min.js"></script>
<script>
    $('input').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue',
    increaseArea: '20%' // optional
}); 
</script>
