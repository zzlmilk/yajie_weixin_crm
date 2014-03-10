<?php /* Smarty version Smarty-3.0-RC2, created on 2013-12-11 18:09:05
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/wchatplatform/templates/Weixin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185413539352a839c149d651-30875760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68688b76fd08caff79c4c13325f2ee28700f4484' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wchatplatform/templates/Weixin/index.tpl',
      1 => 1386756474,
    ),
  ),
  'nocache_hash' => '185413539352a839c149d651-30875760',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action='https://api.weixin.qq.com/cgi-bin/menu/create?access_token=<?php echo $_smarty_tpl->getVariable('token')->value;?>
' method="post" >
            
            <textarea id='body' name='body' style="width: 300px; height: 400px;"><?php echo $_smarty_tpl->getVariable('json')->value;?>
</textarea>
            
            <input type='submit'>
        </form>
    </body>
</html>
