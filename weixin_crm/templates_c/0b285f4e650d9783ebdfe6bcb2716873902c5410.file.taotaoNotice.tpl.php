<?php /* Smarty version Smarty-3.0-RC2, created on 2014-01-16 14:43:37
         compiled from "/web/www/webAdmin//templates/taotaoNotice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205481275652d77f991abac9-03862308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b285f4e650d9783ebdfe6bcb2716873902c5410' => 
    array (
      0 => '/web/www/webAdmin//templates/taotaoNotice.tpl',
      1 => 1389847190,
    ),
  ),
  'nocache_hash' => '205481275652d77f991abac9-03862308',
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
        <h1 class="manager_title" style="margin:5px 0 20px 0;">乐淘淘 公告</h1>
        <div>
           
          
            <div class="insert_newGame_news">
                <input type="button" value="添加公告" onclick="window.location.href='taotaoNotice.php?action=insert'" class="important_button">
               
            </div>
           
        </div>
        <div>
            <table id="table11" class="manage_list" style="background:#f9f9f9;width:100%;font-size: 12px; margin-top: 10px; line-height: 24px;" >

                <input type='hidden' name='ticket_type' id='ticket_type' value='<?php echo $_smarty_tpl->getVariable('type')->value;?>
'>
                <thead>
                    <tr style=" background-color: #eaeaea;">

                        
                        <th style="font-weight:bolder;text-align: center;">名称</th>
                        <!--                    <td style="font-weight:bolder;text-align: center;">点击次数</td>-->
                        <!-- <th style="font-weight:bolder;text-align: center;">时间</th> -->
                       
                      
                        <th colspan="6" style="font-weight:bolder;text-align: center;">操作</th>
                    </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['notices'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('notice')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['notices']->key => $_smarty_tpl->tpl_vars['notices']->value){
?>
                <tr>
                  
                   
                    
                    <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['notices']->value['name'];?>
</td>
                    
                 
                   
                    
                    
                   <td style='text-align: center;  width: 76px;'><a href="javascript:void(0)" onclick='TaoTaoNoticetop("<?php echo $_smarty_tpl->tpl_vars['notices']->value['id'];?>
")'>置顶</a></td>
                
                    
                   
                    <td style='text-align: center;  width: 76px;'><a href="taotaoNotice.php?action=edit&taotao_notice_id=<?php echo $_smarty_tpl->tpl_vars['notices']->value['id'];?>
&type=<?php echo $_smarty_tpl->getVariable('type')->value;?>
">编辑基本信息</a></td>
                   
                    <td style='text-align: center;width: 76px;'><a href="javascript:vold(0)" onclick="del('<?php echo $_smarty_tpl->getVariable('tickets')->value['id'];?>
')">删除</a></td>



                  
                   
                </tr>
                <?php }} ?>
            </table>
            <table  width="100%" border="0" cellpadding="0" cellspacing="1"  style=" font-size: 14px;">
                <tr>
                    <td style="width: 90%">
                        <?php echo $_smarty_tpl->getVariable('key')->value;?>
 
                    </td>
                </tr>
            </table>
            <table  width="100%" border="0" cellpadding="0" cellspacing="1"  style=" font-size: 14px;">
                <tr>

                </tr>
            </table>
        </div>
    </body>
</html>

<script type="text/javascript">
    function del(id){
        if(confirm("确认删除吗？")){
            window.location.href='news.php?action=delete&news_id='+id;
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
            data:"&action=deleteSelect&str="+str,
            success: function(mes){
                alert(mes)
                window.location.href='news.php' ;
            }
        });
    }
    function TaoTaoNoticetop(id){

        if (id > 0 ) {
            $.ajax({
              type: "POST",
              url: "../publicHandler/process.php",
              data:"&action=TaoTaoNoticetop&id="+id,
              success: function(mes){
                     alert(mes)
                     window.location.href='taotaoNotice.php';
               }
        });

        };
    }
</script>

