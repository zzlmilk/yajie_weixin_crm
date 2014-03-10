<?php /* Smarty version Smarty-3.0-RC2, created on 2014-02-26 02:25:31
         compiled from "/web/www/wchatplatform/templates/Coffee/website1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:467060764530d509b102053-08987345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5f9aef353cda247f74b10794b815437dea189d2' => 
    array (
      0 => '/web/www/wchatplatform/templates/Coffee/website1.tpl',
      1 => 1393314563,
    ),
  ),
  'nocache_hash' => '467060764530d509b102053-08987345',
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

        <div  class='webSiteTitle'>咖啡的醇香，蛋糕的甜蜜以及悠然的时光</div>
        

        <div class='publicHeight'>&nbsp;</div>

        <div >

          <div  class='left SetFontSize11'>2014-2-20</div>


          <div class='left SetWidthThirty'>&nbsp;</div>
          <div  class='SetFontSize11 left webSiteColor'>HomemadeCafe</div>

        </div>


       <div class='publicHeight' style='clear: both;'>&nbsp;</div>

        <div style=' margin-left: 26px;'>

            <img src='<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/coffee/image/6.png' style='width: 214px; height: 139px;'>

        </div>
    

        <div class='publicHeight'>&nbsp;</div>

        <div style='width: 281px; font-size: 18px; line-height: 26px;font-family: “宋体”;'>

            当你还醉心于风味咖啡的独特，为玫瑰慕斯而意犹未尽，这里帕尼尼的香气又已四散开来。<br />
            无论是蛋糕还是餐点，老板都坚持手工制作，严格挑选精致原材料。因为我们相信健康的味道，用心的味道，才是家的味道。

        </div>


        <?php $_template = new Smarty_Internal_Template('public/footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> 



      </div>

    </boby>

   
</html>
