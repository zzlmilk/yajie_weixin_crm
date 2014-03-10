<?php /* Smarty version Smarty-3.0-RC2, created on 2014-02-20 12:35:40
         compiled from "/web/www/webAdmin//templates/businesss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6593454735305861c9b0899-17549075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bef3ffeb01ae27341b9a54efa4b8f5457943398' => 
    array (
      0 => '/web/www/webAdmin//templates/businesss.tpl',
      1 => 1392870938,
    ),
  ),
  'nocache_hash' => '6593454735305861c9b0899-17549075',
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
        <h1 class="manager_title" style="margin:5px 0 20px 0;">商户信息</h1>
        <div>
           
          
         
           
        </div>
        <div>
            <table id="table11" class="manage_list" style="background:#f9f9f9;width:100%;font-size: 12px; margin-top: 10px; line-height: 24px;" >
                <thead>
                    <tr style=" background-color: #eaeaea;">
                        <!--                    <td style="font-weight:bolder;text-align: center; ">作者</td> -->
                        
                        <th style="font-weight:bolder;text-align: center;">商户名称</th>


                        <th style="font-weight:bolder;text-align: center;">用户地址</th>


                        <th style="font-weight:bolder;text-align: center;">联系人</th>

                        <th style="font-weight:bolder;text-align: center;">职位</th>

                        <th style="font-weight:bolder;text-align: center;">手机</th>

                        <th style="font-weight:bolder;text-align: center;">电话</th>

                        <th style="font-weight:bolder;text-align: center;">状态</th>

                       <th colspan="2" style="font-weight:bolder;text-align: center;">操作</th>
                      
                        
                    </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['businessss'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('businesss')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['businessss']->key => $_smarty_tpl->tpl_vars['businessss']->value){
?>
                <tr>
                  
                    
                    
                    <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['businessss']->value['name'];?>
</td>
                    <!--                    <td style='text-align: center;'><?php echo $_smarty_tpl->getVariable('news_all')->value['onclick_number'];?>
</td>-->
                    
                    <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['businessss']->value['address'];?>
</td>


                     <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['businessss']->value['contact'];?>
</td>


                      <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['businessss']->value['post'];?>
</td>

                       <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['businessss']->value['mobile'];?>
</td>


                        <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['businessss']->value['phone'];?>
</td>


                        <td style='text-align: center;'>

                          <?php if ($_smarty_tpl->tpl_vars['businessss']->value['state']==1){?>

                          通过

                          <?php }else{ ?>

                          未通过

                          <?php }?>

                        </td>

                        
                        <td style='text-align: center;'><a href="businessAccount.php?id=<?php echo $_smarty_tpl->tpl_vars['businessss']->value['id'];?>
">商户账号</a></td>
                    
                   
                
                   
                   
                    
                   
                </tr>
                <?php }} ?>
            </table>
          
        </div>
    </body>
</html>

