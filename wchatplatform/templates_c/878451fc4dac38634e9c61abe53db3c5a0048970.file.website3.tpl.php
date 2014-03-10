<?php /* Smarty version Smarty-3.0-RC2, created on 2014-02-21 10:23:08
         compiled from "/web/www/wchatplatform/templates/Coffee/website3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18324142555306b88cdc7288-63971548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '878451fc4dac38634e9c61abe53db3c5a0048970' => 
    array (
      0 => '/web/www/wchatplatform/templates/Coffee/website3.tpl',
      1 => 1392949337,
    ),
  ),
  'nocache_hash' => '18324142555306b88cdc7288-63971548',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html> 
    <head>

       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
       <meta name="viewport" content="width=device-width,user-scalable=yes" />
       <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>


       <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/coffee/css/public.css" rel="stylesheet" type="text/css">
       <title></title>

    </head>

    <boby style='background-color: #F5F5F5;'>

      <div class='bobyWebsite' style='width: 288px;'>

        <div  class='webSiteTitle'>风味咖啡：世界风尚，在此和你相遇。</div>
        

        <div class='publicHeight'>&nbsp;</div>

        <div >

          <div  class='left SetFontSize11'>2014-2-20</div>


          <div class='left SetWidthThirty'>&nbsp;</div>
          <div  class='SetFontSize11 left webSiteColor'>HomemadeCafe</div>

        </div>


       <div class='publicHeight' style='clear: both;'>&nbsp;</div>

        <div style=' margin-left: 26px;'>

            <img src='<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/coffee/image/8.png' style='width: 214px; height: 139px;'>

        </div>
    

        <div class='publicHeight'>&nbsp;</div>

        <div style='width: 281px; font-size: 18px; line-height: 26px;font-family: “宋体”;'>

            奥斯古罗多口味咖啡系列一经推出便受到世界各国众多咖啡迷的追捧，纯天然无添加的风味烘焙，<br />5款独家风味咖啡，只在这里供您品尝。<br />
            Vanilla 香草<br />
            Irish Cream 爱尔兰奶油<br />
            Cinnamon & Hazelnut 肉桂榛果<br />
            Hazelnut 榛果<br />
            Chocolate 巧克力

        </div>

        <?php $_template = new Smarty_Internal_Template('public/footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> 



      </div>

    </boby>

   
</html>
