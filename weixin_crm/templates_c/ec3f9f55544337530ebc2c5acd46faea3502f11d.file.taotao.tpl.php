<?php /* Smarty version Smarty-3.0-RC2, created on 2014-01-22 11:17:48
         compiled from "/web/www/webAdmin//templates/taotao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162820298552df385cab1590-65815499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec3f9f55544337530ebc2c5acd46faea3502f11d' => 
    array (
      0 => '/web/www/webAdmin//templates/taotao.tpl',
      1 => 1390287662,
    ),
  ),
  'nocache_hash' => '162820298552df385cab1590-65815499',
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
            
            
           
            function show_able(id){
                $.ajax({
                    type: "POST",
                    url: "../publicHandler/process.php",
                    data:"&action=lock&id="+id,
                    success: function(mes){
                        alert(mes)
                        window.location.href='news.php' ;
                    }
                });
            }
            function CheckData(){
                var begin = $("#begin").val().split('-');
                var end = $("#end").val().split('-');
                var BegincommonTime =Date.UTC(begin[0], begin[1], begin[2], 0, 0, 0);
                var EndcommonTime =Date.UTC(end[0], end[1], end[2], 0, 0, 0);
                var begintime = new Date(BegincommonTime);
                var endtime = new Date(EndcommonTime);
                if(begintime>endtime){
                    alert('时间选择错误');
                } else{
                    $("#search_form").submit();
                }
            }
            function changeUrl(id){
                $('#type').val(id);
                $('#search_form').append('<input type="hidden" name="action" value="select">');
                $("#search_form").submit();
            }
            
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
        <h1 class="manager_title" style="margin:5px 0 20px 0;"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</h1>
        <div>
           
          
            <div class="insert_newGame_news">
                <input type="button" value="添加<?php echo $_smarty_tpl->getVariable('title')->value;?>
" onclick="window.location.href='taotao.php?action=insert&type=<?php echo $_smarty_tpl->getVariable('type')->value;?>
'" class="important_button">
               
            </div>
           
        </div>
        <div>
            <table id="table11" class="manage_list" style="background:#f9f9f9;width:100%;font-size: 12px; margin-top: 10px; line-height: 24px;" >

                <input type='hidden' name='ticket_type' id='ticket_type' value='<?php echo $_smarty_tpl->getVariable('type')->value;?>
'>
                <thead>
                    <tr style=" background-color: #eaeaea;">
                         <th style="font-weight:bolder;text-align: center;width:40px;"><input type="checkbox" name="selectAll" id="selectAll"></th>
                        
                        <th style="font-weight:bolder;text-align: center;">名称</th>
                        <!--                    <td style="font-weight:bolder;text-align: center;">点击次数</td>-->
                        <th style="font-weight:bolder;text-align: center;">生成数量</th>
                        <th style="font-weight:bolder;text-align: center;">兑换数量</th>
                      
                        <th colspan="6" style="font-weight:bolder;text-align: center;">操作</th>
                    </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['tickets'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ticket')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tickets']->key => $_smarty_tpl->tpl_vars['tickets']->value){
?>


                <tr>
                    
                    <?php if ($_smarty_tpl->getVariable('ticket_number')->value>0){?>
                    <td style='text-align: center;'><input type='checkbox' name="deleteSelect" id="deleteSelect" class="selectAll" value="<?php echo $_smarty_tpl->tpl_vars['tickets']->value['id'];?>
"></td>
                    <?php }?>

                   
                    
                    <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['tickets']->value['ticket_name'];?>
</td>
                    <!--                    <td style='text-align: center;'><?php echo $_smarty_tpl->getVariable('news_all')->value['onclick_number'];?>
</td>-->
                    <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['tickets']->value['ticket_number'];?>
</td>
                    <td style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['tickets']->value['download_number'];?>
</td>
                 
                   
                    
                    
                   <td style='text-align: center;  width: 76px;'><a href="javascript:void(0)" onclick='TaoTaotop("<?php echo $_smarty_tpl->tpl_vars['tickets']->value['id'];?>
")'>推到首页</a></td>
                
                    
                   
                    <td style='text-align: center;  width: 76px;'><a href="taotao.php?action=edit&ticket_id=<?php echo $_smarty_tpl->tpl_vars['tickets']->value['id'];?>
&type=<?php echo $_smarty_tpl->getVariable('type')->value;?>
">编辑基本信息</a></td>
                   
                    <td style='text-align: center;width: 76px;'><a href="javascript:vold(0)" onclick="del('<?php echo $_smarty_tpl->tpl_vars['tickets']->value['id'];?>
')">删除</a></td>



                  
                   
                </tr>
                <?php }} ?>
            </table>
            <table  width="100%" border="0" cellpadding="0" cellspacing="1"  style=" font-size: 14px;">
                <tr>
                    <td style="width: 90%">
                        <?php echo $_smarty_tpl->getVariable('key')->value;?>
   <?php if ($_smarty_tpl->getVariable('ticket_number')->value>0){?><input type="button" name="deletSelect" id="deleteSelect_" value="选中删除"  class="important_button" onclick="deleteSelect()"><?php }?>
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
            window.location.href='taotao.php?action=delete&ticket_id='+id+'&type='+$('#ticket_type').val();
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
            data:"&action=TaoTaodeleteSelect&str="+str,
            success: function(mes){
                alert(mes)
                 window.location.href='taotao.php?type='+$('#ticket_type').val() ;
            }
        });
    }
    function TaoTaotop(id){

        if (id > 0 ) {
            $.ajax({
              type: "POST",
              url: "../publicHandler/process.php",
              data:"&action=TaoTaotop&id="+id,
              success: function(mes){
                     alert(mes)
                     window.location.href='taotao.php?type='+$('#ticket_type').val() ;
               }
        });

        };
    }
</script>

