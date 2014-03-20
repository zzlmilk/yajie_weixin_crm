<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-19 13:36:20
         compiled from "/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/user/userList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1031163075532121568dfd04-25004126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fa0d02d05ed00ff3bcbf8f7c03cae976c1c2bda' => 
    array (
      0 => '/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/user/userList.tpl',
      1 => 1395193105,
    ),
  ),
  'nocache_hash' => '1031163075532121568dfd04-25004126',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<style>
    .selectBar{

        text-align: center;  

    }
    .dataArea{
        text-align: left;
        width: 60%;
        min-width: 500px;
        margin: 0 auto;
    }
    .sortBar{
        width:350px;
        margin: 0 auto;
    }
    table tr>th{
        text-align: center;
    }
       table tr>td{
        text-align: center;
    }
</style>
<form action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=seachUsers" method="post">
    <div style="height: 50px;"></div>
    <div class="selectBar"><input type="text" style="width:300px;" placeholder="请输入手机号查询" id="selectText" name="selectText"><button>查询</button></div>
    <div class="sortBar">排序：<input type="radio" name="sortType" value="point">积分&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sortType" value="money">余额</div>
    <div style="height: 100px;"></div>
</form>
<div class="dataArea">
    <table class="table table-condensed">
        <tr><th>姓名</th><th>电话</th><th>生日</th><th>余额</th><th>积分</th><th>编辑</th></tr>
        <?php  $_smarty_tpl->tpl_vars['userInfo1'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userInfo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['userInfo1']->key => $_smarty_tpl->tpl_vars['userInfo1']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['userInfo1']->key;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_phone'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['birthday'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_money'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_integration'];?>
</td>
                <td><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=userEdit&userId=<?php echo $_smarty_tpl->tpl_vars['userInfo1']->value['user_id'];?>
"><button >编辑</button></a></td>

            </tr>
        <?php }} ?>
    </table>
        <div style="text-align: center"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</div> 
</div>

