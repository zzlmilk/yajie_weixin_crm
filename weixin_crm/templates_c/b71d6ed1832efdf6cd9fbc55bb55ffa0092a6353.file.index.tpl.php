<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-15 15:14:41
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125308954853746961ab2ee1-09022417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b71d6ed1832efdf6cd9fbc55bb55ffa0092a6353' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/index.tpl',
      1 => 1400138073,
    ),
  ),
  'nocache_hash' => '125308954853746961ab2ee1-09022417',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

         <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/<?php echo $_smarty_tpl->getVariable('source')->value;?>
_css.css" rel="stylesheet" type="text/css">
        <title></title>

        <style>

        *{
          font-family:"黑体","宋体",Serif;
        }

        </style>
    </head>

    <body class='boby'>

        <div class='bobyBackGroud' >

  




            <div style='overflow: hidden; height: 86px;'>

                <!--  <iframe src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=top&functionname=top" name="topFrame" scrolling="No"  id="topFrame" title="topFrame"  style='width: 100%; height: 90px;' ></iframe> -->


                 <?php $_template = new Smarty_Internal_Template('top.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

            </div>

          
            <div style='float: left; overflow: hidden; height: 675px; width: 16%;font-weight: bold;' >

                <iframe frameborder='0' src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=left&functionname=left" name="leftFrame"   id="leftFrame" title="leftFrame"  style=' height: 740px; width: 196px; margin-left: 5px;border-radius: 10px 10px 0 0;' ></iframe>

            </div>

            <div style='float: left; overflow: hidden; height: 675px; width: 83%; margin-left: 3px'>



              <iframe frameborder='0' src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/files/mainfra.html"  name="mainFrame" id="mainFrame" title="mainFrame"  style='height: 675px; width: 100%; border-radius: 10px 10px 0 0;' ></iframe>

            </div>







        </div>

       
        
       </body> 


</html>
