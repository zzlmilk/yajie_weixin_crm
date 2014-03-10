<?php /* Smarty version Smarty-3.0-RC2, created on 2014-02-07 10:32:33
         compiled from "/web/www/webAdmin//templates/taotao_axe_statistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186626138352f445c1af5a50-36020842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cc8bc4f889899561a5d56e4a3284679716c9fb7' => 
    array (
      0 => '/web/www/webAdmin//templates/taotao_axe_statistics.tpl',
      1 => 1390285548,
    ),
  ),
  'nocache_hash' => '186626138352f445c1af5a50-36020842',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet/less" type="text/css" href="../css/manage.less" />
        <script type="text/javascript" src="../js/less-1.3.0.min.js"></script>
        <link type="text/css" href="../css/css_clear.css" rel="stylesheet" />
        <script type="text/javascript" src="../js/jquery.js"></script>
        <link type="text/css" href="../js/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui-1.8.20.custom.min.js"></script>
        <link type="text/css" href="../css/css.css" rel="stylesheet" />
        <script type="text/javascript">
          
        </script>
        <style type="text/css">
            
            form{margin: 0; padding: 0;}
            ul,li{margin: 0; padding: 0;width:100%;}
            body{margin: 20px;font-size: 13px;}
            #tabs{ font: 12px "Trebuchet MS", sans-serif;}
            .demoHeaders { margin-top: 2em; }
            ul li{
                list-style-type: none;
                cursor: default;
            }
            /*  #table11, #table12 {
                   -moz-border-bottom-colors: none;
                   -moz-border-image: none;
                   -moz-border-left-colors: none;
                   -moz-border-right-colors: none;
                   -moz-border-top-colors: none;
                   border-collapse: collapse;
                   border-color: #999999;
                   border-style: solid;
                   border-width: 1px 0 0 1px;
               }
               #table11 tr td, #table12 tr td {
                   -moz-border-bottom-colors: none;
                   -moz-border-image: none;
                   -moz-border-left-colors: none;
                   -moz-border-right-colors: none;
                   -moz-border-top-colors: none;
                   border-color: #999999;
                   border-style: solid;
                   border-width: 0 1px 1px 0;
               }*/

            
        </style>
    </head>
    <body>
        <h1 class="manager_title" style="margin:5px 0 20px 0;">乐淘淘 <?php echo $_smarty_tpl->getVariable('title')->value;?>
报名统计</h1>
        
        <div>
            <table id="table11" class="manage_list" style="background:#f9f9f9;width:100%;font-size: 12px; margin-top: 10px; line-height: 24px;" >
                <thead>
                    <tr style=" background-color: #eaeaea;">
                        <!--                    <td style="font-weight:bolder;text-align: center; ">作者</td> -->
                        
                      
                        <th style="font-weight:bolder;text-align: center;">课程名称</th>
                        <!--                    <td style="font-weight:bolder;text-align: center;">点击次数</td>-->
                        <th style="font-weight:bolder;text-align: center;">报名人数</th>


                        <th style="font-weight:bolder;text-align: center;">发布时间</th>
                        
                    </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['infos'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['infos']->key => $_smarty_tpl->tpl_vars['infos']->value){
?>
                <tr>
                  
                   
                    
                    <td style='text-align: center;'>


                      <a href="<?php echo $_smarty_tpl->getVariable('URLCONTROLLER')->value;?>
/statistics.php?action=taotaoaxelistapply&id=<?php echo $_smarty_tpl->tpl_vars['infos']->value['id'];?>
" target="mainFrame" class="left-fontSmall" ><?php echo $_smarty_tpl->tpl_vars['infos']->value['name'];?>
</a>

                       


                    </td>
                    



                    <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['infos']->value['count'];?>
</td>


                    <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['infos']->value['times'];?>
</td>
                   
                </tr>
                <?php }} ?>
            </table>
          
        </div>
    </body>
</html>
