<?php /* Smarty version Smarty-3.0-RC2, created on 2014-01-16 16:42:24
         compiled from "/web/www/webAdmin//templates/notice_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116449241152d79b70223525-49301975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86d36f61d00569b5fd450ce187f5eee9fe98261d' => 
    array (
      0 => '/web/www/webAdmin//templates/notice_action.tpl',
      1 => 1389856619,
    ),
  ),
  'nocache_hash' => '116449241152d79b70223525-49301975',
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
        
        <script>

        $(function(){

              KindEditor.ready(function(K) {
              
                editorContent =  K.create('#notice_content');


             });

        })
            
            function asd(){
                var able =0;
                var array_ =["title","notice_content"];

                var  notice_content = document.getElementById('notice_content').value; 
                notice_content = editorContent.html();
                editorContent.sync();





               
                var array_content =["标题","内容"];
                for(var i=0;i<array_.length;i++){

                    
                    var name=$('#'+array_[i]).val();

                    if(name==''){

                        alert(array_content[i]+'必须填写');

                    }else{
                        
                        able++;
                        
                    }
                }
               
               
             
                if(able==2){
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
            <h1 class="manager_title" style="margin:5px 0 20px 0;">公告插入</h1>
          
            <form action="<?php echo $_smarty_tpl->getVariable('URLHANDLER')->value;?>
/notice_action.php" method="post" id="form1" name="form1" class="form2" enctype="multipart/form-data">
                <input type="hidden" name="taotao_notice_id" value="<?php echo $_smarty_tpl->getVariable('notice')->value['taotao_notice_id'];?>
">
               
                <dl >
                    <dt>标题</dt>
                    <dd><input type="text"  name="title"    id="title"  value="<?php echo $_smarty_tpl->getVariable('notice')->value['title'];?>
"/></dd>
                    <!-- <dd><p style=" color: red; font-weight: bolder;" ></p></dd> -->
                </dl>



                <dl >
                    <dt>内容</dt>
                    <dd style=' margin: 0;'><textarea id="notice_content" name="notice_content" style="width:980px;height: 457px; margin:0;"><?php echo $_smarty_tpl->getVariable('notice')->value['notice_content'];?>
</textarea></dd>
                    <!-- <dd><p style=" color: red; font-weight: bolder;" ></p></dd> -->
                </dl>



              
               
                <input type="button" value="保存" class="important_button" name="savetonext" id="savetonext" onclick="asd()">
            </form>
        </div>
    </body>
</html>
