<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-20 17:47:01
         compiled from "/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/user/userList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1792316613532ab91589bab1-98111371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fa0d02d05ed00ff3bcbf8f7c03cae976c1c2bda' => 
    array (
      0 => '/Users/Lev/Sites/yajie_weixin_crm/weixin_crm/templates/user/userList.tpl',
      1 => 1395281291,
    ),
  ),
  'nocache_hash' => '1792316613532ab91589bab1-98111371',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<style>
    body{
        overflow-x: hidden;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 25px;
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
<div class="userMangerTitle">客户信息管理</div>
<div style="height: 50px;"></div>
<form action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=user&functionname=seachUsers" method="post">

    <div style="">

        <div class="input-group groupInput">
            <input type="text" class="form-control" style="" placeholder="请输入手机号查询" id="selectText" name="selectText">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">查询</button>
            </span>

        </div>
    </div>
    <div style="height:15px;"></div>
    <div class="sortBar"><label for="inputPassword3" class="control-label">排序：</label><input type="radio" name="sortType" id="point" value="point"><label for="point" class="control-label">积分</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sortType" id="money" value="money"><label for="money" class="control-label">余额</label></div>
    <?php if ($_smarty_tpl->getVariable('errorMessage')->value!=''){?>
    <div class="sortBar alert alert-warning"><label for="inputPassword3" class="control-label"><?php echo $_smarty_tpl->getVariable('errorMessage')->value;?>
</label></div>
    <?php }?>
    <div style="height: 30px;"></div>
</form>

<div class="dataArea">
    <table class="table table-striped">
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
"><button class="btn btn-warning">编辑</button></a></td>

            </tr>
        <?php }} ?>
    </table>
</div>
<div style="text-align: center"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</div> 

