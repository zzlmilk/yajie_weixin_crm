<?php /* Smarty version Smarty-3.0-RC2, created on 2014-01-22 11:19:44
         compiled from "/web/www/webAdmin//templates/teacher_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209787744252df38d031dda2-39544142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c09cf7b0d2ccc6970ba73c6f630713133bf6cdce' => 
    array (
      0 => '/web/www/webAdmin//templates/teacher_action.tpl',
      1 => 1390360777,
    ),
  ),
  'nocache_hash' => '209787744252df38d031dda2-39544142',
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


       


        <script charset="utf-8" src="../js/jquery.js"></script>
       
        <script type="text/javascript" src="../js/jquery.form.js"></script> 


         <link type="text/css" href="../js/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
        
        <script type="text/javascript" src="../js/jquery-ui-1.8.20.custom.min.js"></script>


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
                width: 118px;
            }
            .form2 dd {
                margin-left: 100px;
                padding: 5px 0 8px 10px;

            }
            .form2 dd input[type="text"]{border:1px solid #dddddd; width:290px;padding:3px 5px;border-radius:3px;}
            .form2 dd textarea{width:340px;height:91px;font-size:12px;border:1px solid #dddddd;padding:5px;}
          
            .head_word {
                color: #1E325C;
                font-size: 14px;
                font-weight: bold;
                line-height: 40px;
            }
            #savetonext{margin:15px 0 0 127px;}
        </style>
       
        


        <script>
            

            





              
            function asd(){

               


                var able =0;
                var array_ =["teacher_name","teacher_text"];
               
                var array_content =["讲师名称","讲师介绍"];
                for(var i=0;i<array_.length;i++){
                    var name=$('#'+array_[i]).val();

                    if(name==''){

                        alert(array_content[i]+'不能为空');
                        
                    }else{
                       
                        
                        able++;
                        
                    }
                }


               
               
               
             
                if(able==2){
                    

                     $("#form1").ajaxSubmit({ 

                        dataType:  'json', //数据格式为json 

                        success: function(data) { //成功 

                            if(data.teacher_id > 0 ){
                              


                                alert('操作成功～');

                             
                              window.location.href = 'teacher.php';
                            }
                            
                        }, 

                        error:function(xhr){ //上传失败 
                           
                            alert(xhr.responseText); //返回失败信息 
                        } 
                     }); 


                }


            }
            
        </script>
        
    </head>
    <body style=" font-size: 12px;padding:0 0 80px 0;">
        <div style=" margin:18px 0 0 20px;">
            <h1 class="manager_title" style="margin:5px 0 20px 0;"><?php echo $_smarty_tpl->getVariable('title')->value;?>
插入</h1>
          
            <form action="<?php echo $_smarty_tpl->getVariable('URLHANDLER')->value;?>
/teacher_action.php" method="post" id="form1" name="form1" class="form2" enctype="multipart/form-data">

            
                <input type="hidden" name="teacher_id" value="<?php echo $_smarty_tpl->getVariable('teacher')->value['teacher_id'];?>
">

                


                
               
                <dl >
                    <dt>讲师名称</dt>
                    <dd><input type="text"  name="teacher_name"    id="teacher_name"  value="<?php echo $_smarty_tpl->getVariable('teacher')->value['teacher_name'];?>
"/><span style=" margin-left: 12px; color: red;" id="title_error">（填写名称即可。。 讲师2字系统默认添加）</span></dd>
                    <!-- <dd><p style=" color: red; font-weight: bolder;" ></p></dd> -->
                </dl>
               
               
                <dl >
                    <dt>讲师图片</dt>
                    <dd>
                        
                        <?php if ($_smarty_tpl->getVariable('teacher')->value['logo']!=''){?>
                        <img src="<?php echo $_smarty_tpl->getVariable('rootPath')->value;?>
/images/teacher/<?php echo $_smarty_tpl->getVariable('teacher')->value['logo'];?>
" >
                        <?php }?>
                        <input id="fileupload" type="file" name="mypic"></dd>


                      
                    <dd><p style=" color: red;" id="tip_photo">图片为宽度为250像素 高度为232像素</p></dd>
                </dl>

                <dl >
                    <dt>讲师介绍</dt>
                    <dd>

                        <textarea id="teacher_text" name="teacher_text" style="width:341px;height: 101px;"><?php echo $_smarty_tpl->getVariable('teacher')->value['teacher_text'];?>
</textarea>

                    </dd>
                </dl>




               
                <input type="button" value="保存" class="important_button" name="savetonext" id="savetonext" onclick="asd()">
            
             </form>
        </div>
    </body>
</html>
