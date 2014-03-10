<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-07 14:47:22
         compiled from "/web/www/webAdmin//templates/news_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108125822653196b7af38515-24619012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6f806e3e53fd1701cc5575d9ee9982f4eb2d9b1' => 
    array (
      0 => '/web/www/webAdmin//templates/news_action.tpl',
      1 => 1394174837,
    ),
  ),
  'nocache_hash' => '108125822653196b7af38515-24619012',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet/less" type="text/css" href="../css/manage.less" />
        <script type="text/javascript" src="../js/less-1.3.0.min.js"></script>
        <link type="text/css" href="../css/css_clear.css" rel="stylesheet" />
        <title></title>
        
        <style type="text/css">
            ul,li{margin: 0; padding: 0;width:100%;}
            .form2 dl{
                padding:0 0 0 20px;margin:0 0 10px 0;
            }
            .form2 dt {
                color: #333333;
                float: left;
                margin: 0;
                padding: 8px 0 0;
                text-align:left;
                width: 100px;
            }
            .form2 dd {
                margin-left: 100px;
                padding: 5px 0 8px 10px;

            }
            .form2 dd input[type="text"]{border:1px solid #dddddd; width:290px;padding:3px 5px;border-radius:3px;}
            .form2 dd textarea{width:340px;height:91px;font-size:12px;border:1px solid #dddddd;padding:5px;}
            a{
                margin-left: 12px;
            }
            .head_word {
                color: #1E325C;
                font-size: 14px;
                font-weight: bold;
                line-height: 40px;
            }
            #savetonext{margin:15px 0 0 127px;}
        </style>
        <script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
        <script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>
        <script charset="utf-8" src="../js/jquery.js"></script>
        <script charset="utf-8" src="../js/window.js"></script>
        <link type="text/css" href="../js/jQuery/development-bundle/themes/base/jquery.ui.all.css" rel="stylesheet" />
        <script type="text/javascript" src="../js/jQuery/development-bundle/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="../js/jQuery/development-bundle/external/jquery.bgiframe-2.1.1.js"></script>
        <script type="text/javascript" src="../js/jQuery/development-bundle/ui/jquery.ui.core.js"></script>
        <script type="text/javascript" src="../js/jQuery/development-bundle/ui/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="../js/jQuery/development-bundle/ui/jquery.ui.mouse.js"></script>
        <script type="text/javascript" src="../js/jQuery/development-bundle/ui/jquery.ui.button.js"></script>
        <script type="text/javascript" src="../js/jQuery/development-bundle/ui/jquery.ui.draggable.js"></script>
        <script type="text/javascript" src="../js/jQuery/development-bundle/ui/jquery.ui.position.js"></script>
        <script type="text/javascript" src="../js/jQuery/development-bundle/ui/jquery.ui.resizable.js"></script>
        <script type="text/javascript" src="../js/jQuery/development-bundle/ui/jquery.ui.dialog.js"></script>
        <script type="text/javascript" src="../js/jQuery/development-bundle/ui/jquery.ui.tabs.js"></script>
        <script type="text/javascript" src="../js/jQuery/development-bundle/ui/jquery.effects.core.js"></script>
        <link type="text/css" href="../js/jQuery/development-bundle/demos/demos.css" rel="stylesheet" />
        <script>
            


            $(function(){

                  KindEditor.ready(function(K) {
               
                $content =  K.create('#content');
            });




            })


            function asd(){
                var able =0;
                var array_ =["title","jianjie",'news_type','content'];


                var  html = document.getElementById('content').value; // 原生API
                // 取得HTML内容
                html = $content.html();
                $content.sync();


               
                var array_content =["标题","内容摘要",'新闻类型','文章内容'];
                for(var i=0;i<array_.length;i++){
                    var name=$('#'+array_[i]).val();

                    if(name==''){
                       

                        alert(array_content[i]+'必须填写');
                    }else{
                        if(array_[i]=='title'){  //判断字数是否符合标准
                            var count = $('#title').val().length;
                            if(count>40){
                                $('#'+array_[i]+'_error').html('请按照提示填写');
                                return false;
                            }
                        }

                        if(array_[i] == 'content'){

                            if(html == ''){

                                alert('请输入文章内容');
                                return false;
                            }

                        }
                        able++;
                        $('#'+array_[i]+'_error').html('');
                    }
                }
               
               
             
                if(able==4){
                    $('#form1').submit();
                }
            }
            function checkNum(obj)
            {
                var val = getInteger($(obj).val());
                $(obj).val(val);
            }
            function getInteger(val)
            {
                val = val+"";
                var ret = val.replace(/\D/g,'');
                return ret;
            }
        </script>
        
    </head>
    <body style=" font-size: 12px;padding:0 0 80px 0;">
        <div style=" margin:18px 0 0 20px;">
            <h1 class="manager_title" style="margin:5px 0 20px 0;">新闻插入</h1>
          
            <form action="<?php echo $_smarty_tpl->getVariable('URLHANDLER')->value;?>
/news_all_action.php" method="post" id="form1" name="form1" class="form2" enctype="multipart/form-data">
                <input type="hidden" name="news_id" value="<?php echo $_smarty_tpl->getVariable('news')->value['id'];?>
">
               
                <dl >
                    <dt>标题</dt>
                    <dd><input type="text"  name="title"    id="title"  value="<?php echo $_smarty_tpl->getVariable('news')->value['title'];?>
"/><span style=" margin-left: 12px; color: red;" id="title_error">（最多40个字符）</span></dd>
                    <!-- <dd><p style=" color: red; font-weight: bolder;" ></p></dd> -->
                </dl>
                <dl >
                    <dt>大类型</dt>
                    <dd>
                
	             <select style="padding:3px;" name="news_type" id="news_type" onchange="typeSelect(this.options[this.options.selectedIndex].value)">
                            <option value="">----请选择大类型-----</option>
                            <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_type_select')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
?>
                            <?php if ($_smarty_tpl->tpl_vars['type']->value['news_type_id']==$_smarty_tpl->getVariable('news')->value['news_type']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['news_type_id'];?>
" selected="selected">
                               <?php echo $_smarty_tpl->tpl_vars['type']->value['news_name'];?>

                            </option>
                            <?php }else{ ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['news_type_id'];?>
" >
                                 <?php echo $_smarty_tpl->tpl_vars['type']->value['news_name'];?>

                            </option>
                            <?php }?>
                            <?php }} ?>
                        </select>
                        <span style=" margin-left: 12px; color: red;" id="news_type_error"></span>


                    </dd>
                </dl>
               

                <dl >
                    <dt>子类型</dt>
                    <dd>
                
                     <select style="padding:3px;" name="news_small_type" id="news_small_type">
                                

                                  
                            <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_type_select')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
?>
                            <?php if ($_smarty_tpl->tpl_vars['type']->value['news_type_id']==$_smarty_tpl->getVariable('news')->value['news_type']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['news_type_id'];?>
" selected="selected">
                               <?php echo $_smarty_tpl->tpl_vars['type']->value['news_name'];?>

                            </option>
                           
                            <?php }?>
                            <?php }} ?>

                                
                    </select>
                        <span style=" margin-left: 12px; color: red;" id="news_type_error"></span>


                    </dd>
                </dl>

                <?php if ($_smarty_tpl->getVariable('news_action')->value==1){?>

                <dl >
                    <dt>分享</dt>
                    <dd><input type="text"  name="news_share"    id="news_share"  value="<?php echo $_smarty_tpl->getVariable('news')->value['news_share'];?>
"/></dd>
                    <!-- <dd><p style=" color: red; font-weight: bolder;" ></p></dd> -->
                </dl>
                 <dl >
                    <dt>赞</dt>
                    <dd><input type="text"  name="news_like"    id="news_like"  value="<?php echo $_smarty_tpl->getVariable('news')->value['news_like'];?>
"/></dd>
                    <!-- <dd><p style=" color: red; font-weight: bolder;" ></p></dd> -->
                </dl>

                <?php }?>
                <dl >
                    <dt>封面图片</dt>
                    <dd>
                        <?php if ($_smarty_tpl->getVariable('news')->value['feimian']!=''){?>
                        <img src="<?php echo $_smarty_tpl->getVariable('rootPath')->value;?>
/images/logo/<?php echo $_smarty_tpl->getVariable('news')->value['id'];?>
/<?php echo $_smarty_tpl->getVariable('news')->value['feimian'];?>
" >
                        <?php }?>
                        <input type="file" name="photo" class="film_photo" id="photo" size="39" ></dd>
                    <dd><p style=" color: red;" id="tip_photo"></p></dd>
                </dl>

                <dl >
                    <dt>内容摘要</dt>
                    <dd><textarea id="jianjie" name="jianjie" style="width:341px;height: 101px;"><?php echo $_smarty_tpl->getVariable('news')->value['jianjie'];?>
</textarea><span style=" margin-left: 12px;  color: red;" id="jianjie_error"></span></dd>
                </dl>



                <dl >
                    <dt>文章内容</dt>
                    <dd><textarea id="content" name="content" style="width:643px;height:500px;"><?php echo $_smarty_tpl->getVariable('news')->value['content'];?>
</textarea></dd>
                </dl>

                
               
                <input type="button" value="保存" class="important_button" name="savetonext" id="savetonext" onclick="asd()">
            </form>
        </div>
    </body>
</html>
<script>

function typeSelect($typeId){


        var  visitUrl = '<?php echo $_smarty_tpl->getVariable('URLHANDLER')->value;?>
/news_ajax.php';
       $.ajax({
        type: "POST",
        url: visitUrl,
        data:"&type_id="+$typeId,
        success: function(mes){
           
           $('#news_small_type').html(mes);
        }
    });

}

</script>
