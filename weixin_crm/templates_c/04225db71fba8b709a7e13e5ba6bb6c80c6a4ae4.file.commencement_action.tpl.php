<?php /* Smarty version Smarty-3.0-RC2, created on 2014-02-08 09:25:35
         compiled from "/web/www/webAdmin//templates/commencement_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92990777652f5878fb31859-26021554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04225db71fba8b709a7e13e5ba6bb6c80c6a4ae4' => 
    array (
      0 => '/web/www/webAdmin//templates/commencement_action.tpl',
      1 => 1391822711,
    ),
  ),
  'nocache_hash' => '92990777652f5878fb31859-26021554',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/webAdmin/Smarty/libs/plugins/modifier.date_format.php';
?><!--
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
        
        <script type="text/javascript" src="../js/less-1.3.0.min.js"></script>
        <script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
        <script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>

        <script type="text/javascript" src="../js/jquery.js"></script>


        <link type="text/css" href="../js/css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
        
        <script type="text/javascript" src="../js/jquery-ui-1.8.20.custom.min.js"></script>


        <link type="text/css" href="../css/css.css" rel="stylesheet" />
        

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
          
            .head_word {
                color: #1E325C;
                font-size: 14px;
                font-weight: bold;
                line-height: 40px;
            }
            #savetonext{margin:15px 0 0 127px;}
        </style>
    
        <script>


            var editorMap;
            var editorActive;

          $(function() {


        


            KindEditor.ready(function(K) {
                editorMap = K.create('#commencement_map');
                editorActive =  K.create('#commencement_article');
            });


            $( "#commencement_open_time" ).datepicker({dayNamesMin: ["日", "一", "二", "三", "四", "五", "六"],dateFormat: "yy-mm-dd", monthNames: ["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"] });                   
         });


            function asd(){
                var able =0;
                var array_ =["commencement_name","commencement_open_time",'commencement_introduction','commencement_article','commencement_map','commencement_no'];
               


                var  commencement_article = document.getElementById('commencement_article').value; 
                var  commencement_map = document.getElementById('commencement_map').value; 


             
                     
                commencement_article = editorActive.html();
                editorActive.sync();

                commencement_map = editorMap.html();
                editorMap.sync();
                var array_content =["课程名称","课程开课时间",'内容摘要','开课文章','开课地图','课程编号'];
                for(var i=0;i<array_.length;i++){
                    var name=$('#'+array_[i]).val();
                   

                    if(name==''){
                        $('#'+array_[i]+'_error').html(array_content[i]+'必须填写');
                    }else{
                        if(array_[i]=='commencement_name'){  //判断字数是否符合标准
                            var count = $('#commencement_name').val().length;
                            if(count>40){
                                $('#'+array_[i]+'_error').html('请按照提示填写');
                                return false;
                            }
                        }
                        able++;
                        $('#'+array_[i]+'_error').html('');
                    }
                }
               
               
             
                if(able==6){


                    var descrip = $("#commencement_introduction").val();


                    descrip=descrip.replace(/\n/g,'<br />');



                    $("#commencement_introduction").val(descrip);
                    


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
            <h1 class="manager_title" style="margin:5px 0 20px 0;">开课信息录入</h1>
          
            <form action="<?php echo $_smarty_tpl->getVariable('URLHANDLER')->value;?>
/commencement_action.php" method="post" id="form1" name="form1" class="form2" >
                <input type="hidden" name="commencement_id" value="<?php echo $_smarty_tpl->getVariable('commencement')->value['commencement_info_id'];?>
">
               
                <dl >
                    <dt>课程名称</dt>
                    <dd><input type="text"  name="commencement_name"    id="commencement_name"  value="<?php echo $_smarty_tpl->getVariable('commencement')->value['commencement_name'];?>
"/><span style=" margin-left: 12px; color: red;" id="title_error">（最多40个字符）</span></dd>
                    <!-- <dd><p style=" color: red; font-weight: bolder;" ></p></dd> -->
                </dl>
                <dl >
                    <dt>开课时间</dt>
                    <dd>
                        <select name='commencement_times' id='commencement_times'>
                            <option value='0' <?php if ($_smarty_tpl->getVariable('commencement')->value['commencement_times']==0){?> selected='' <?php }?>>上午</option>
                            <option value='1' <?php if ($_smarty_tpl->getVariable('commencement')->value['commencement_times']==1){?> selected='' <?php }?>>下午</option>
                        </select>
                       <input type='text' id='commencement_open_time' name='commencement_open_time' style='width: 87px;'  value='<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('commencement')->value['commencement_open_time'],'%Y-%m-%d');?>
'>
                       <span style=" margin-left: 12px;  color: red;" id="commencement_open_time_error"></span>
                   </dd>
                   
                </dl>
                <dl >
                    <dt>开课编号</dt>
                    <dd>
                       <input type='text'  value='<?php echo $_smarty_tpl->getVariable('commencement')->value['commencement_no'];?>
' id='commencement_no' name='commencement_no' style='width: 87px;'>
                       <span style=" margin-left: 12px;  color: red;" id="commencement_no_error"></span>
                   </dd>
                   
                </dl>

                <dl >
                    <dt>内容摘要</dt>
                    <dd><textarea id="commencement_introduction" name="commencement_introduction" style="width:441px;"><?php echo $_smarty_tpl->getVariable('commencement')->value['commencement_introduction'];?>
</textarea><span style=" margin-left: 12px;  color: red;" id="commencement_introduction_error"></span></dd>
                </dl>


                 <dl >
                    <dt>文章内容</dt>
                    <dd style='margin:0'><textarea id="commencement_article" name="commencement_article" style="width:600px;height: 600px;"><?php echo $_smarty_tpl->getVariable('commencement')->value['commencement_article'];?>
</textarea><span style=" margin-left: 12px;  color: red;" id="jianjie_error"></span></dd>
                </dl>

                 <dl >
                    <dt>地图信息</dt>
                    <dd style='margin:0'><textarea id="commencement_map" name="commencement_map" style="width:350px;height: 226px;"><?php echo $_smarty_tpl->getVariable('commencement')->value['commencement_map'];?>
</textarea><span style=" margin-left: 12px;  color: red;" id="commencement_map_error"></span></dd>
                </dl>
               
                <input type="button" value="保存" class="important_button" name="savetonext" id="savetonext" onclick="asd()">
            </form>
        </div>
    </body>
</html>
