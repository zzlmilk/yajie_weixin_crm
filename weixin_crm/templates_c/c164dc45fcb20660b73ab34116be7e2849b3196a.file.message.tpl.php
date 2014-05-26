<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-23 16:43:13
         compiled from "/web/www/yajie_weixin_crm/weixin_crm//templates/jiantang/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:920908835537f0a21dd9b60-82192067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c164dc45fcb20660b73ab34116be7e2849b3196a' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm//templates/jiantang/message.tpl',
      1 => 1395831623,
    ),
  ),
  'nocache_hash' => '920908835537f0a21dd9b60-82192067',
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

<div style="position: relative;left: 10px; top: 10px;"><a href="<?php echo $_smarty_tpl->getVariable('link')->value;?>
"><button class="btn btn-primary">返回</button></a></div>


<div class="userMangerTitle"><?php echo $_smarty_tpl->getVariable('message')->value;?>
</div>