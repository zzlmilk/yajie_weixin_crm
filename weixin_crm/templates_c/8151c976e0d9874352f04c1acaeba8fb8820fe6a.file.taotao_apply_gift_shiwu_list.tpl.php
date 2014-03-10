<?php /* Smarty version Smarty-3.0-RC2, created on 2014-01-20 18:32:24
         compiled from "/web/www/webAdmin//templates/taotao_apply_gift_shiwu_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51859448752dcfb385bd2f5-13511511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8151c976e0d9874352f04c1acaeba8fb8820fe6a' => 
    array (
      0 => '/web/www/webAdmin//templates/taotao_apply_gift_shiwu_list.tpl',
      1 => 1390213925,
    ),
  ),
  'nocache_hash' => '51859448752dcfb385bd2f5-13511511',
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
        <h1 class="manager_title" style="margin:5px 0 20px 0;"><?php echo $_smarty_tpl->getVariable('name')->value;?>
列表</h1>
        
        <div>
            <table id="table11" class="manage_list" style="background:#f9f9f9;width:100%;font-size: 12px; margin-top: 10px; line-height: 24px;" >


                <input type='hidden' name='id' id='id' value='<?php echo $_smarty_tpl->getVariable('id')->value;?>
'>

                <input type='hidden' name='act' id='act' value='<?php echo $_smarty_tpl->getVariable('action')->value;?>
'>
                <thead>
                    <tr style=" background-color: #eaeaea;">
                        <!--                    <td style="font-weight:bolder;text-align: center; ">作者</td> -->
                        
                        
                        <th style="font-weight:bolder;text-align: center;width:40px;"><input type="checkbox" name="selectAll" id="selectAll"></th>



                         <th style="font-weight:bolder;text-align: center;">用户名</th>

                         <th style="font-weight:bolder;text-align: center;">地址</th>

                         <th style="font-weight:bolder;text-align: center;">手机号码</th>

                         <th style="font-weight:bolder;text-align: center;">移动手机</th>

                       
                                               

                         <th colspan="1" style="font-weight:bolder;text-align: center;">操作</th>
                    </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['infos'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['infos']->key => $_smarty_tpl->tpl_vars['infos']->value){
?>
                <tr>
                  
                   <td style='text-align: center;'><input type='checkbox' name="deleteSelect" id="deleteSelect" class="selectAll" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['gift_recevice_id'];?>
"></td>

                    
                    <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['infos']->value['username'];?>
</td>
                    



                    <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['infos']->value['location'];?>
</td>

                     <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['infos']->value['phone'];?>
</td>


                      <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['infos']->value['mobie'];?>
</td>


                    


                    <td style='text-align: center;'><a href="javascript:vold(0)" onclick="del('<?php echo $_smarty_tpl->tpl_vars['infos']->value['gift_recevice_id'];?>
')">删除</a></td>

                   
                   
                </tr>
                <?php }} ?>
            </table>
          

            <table  width="100%" border="0" cellpadding="0" cellspacing="1"  style=" font-size: 14px;">
                <tr>
                    <td style="width: 90%">
                        <input type="button" name="deletSelect" id="deleteSelect_" value="选中删除"  class="important_button" onclick="deleteSelect()">
                    </td>
                </tr>
            </table>



        </div>
    </body>
</html>

<script>

   function del(id){
        if(confirm("确认删除吗？")){
            window.location.href='statistics.php?a=delete&apply_id='+id+'&action='+$('#act').val()+'&id='+$('#id').val();
        }
        else{
            return false;
        }
    }


    $("#selectAll").click(function(){
        if($(this).attr('checked')=='checked'){
            $('.selectAll').attr('checked','checked');
        } else{
            $('.selectAll').removeAttr("checked");
        }
    })
    function deleteSelect(){
        var str ='';
        $('.selectAll').each(function(){
            if($(this).attr('checked')=='checked'){
                str +=$(this).val()+',';
            }
        })
        $.ajax({
            type: "POST",
            url: "../publicHandler/process.php",
            data:"&action=TaoTaoShiWuapplydeleteSelect&str="+str,
            success: function(mes){
                alert(mes)
                window.location.href='statistics.php?action='+$('#act').val()+'&id='+$('#id').val();
            }
        });
    }



   



</script>