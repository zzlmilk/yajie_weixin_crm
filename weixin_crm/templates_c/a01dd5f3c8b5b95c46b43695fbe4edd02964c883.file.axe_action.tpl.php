<?php /* Smarty version Smarty-3.0-RC2, created on 2014-02-07 10:53:38
         compiled from "/web/www/webAdmin//templates/axe_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63702080952f44ab2ec5b55-08800987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a01dd5f3c8b5b95c46b43695fbe4edd02964c883' => 
    array (
      0 => '/web/www/webAdmin//templates/axe_action.tpl',
      1 => 1391741611,
    ),
  ),
  'nocache_hash' => '63702080952f44ab2ec5b55-08800987',
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


        <script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
        <script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>



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
            

            $(function(){





                KindEditor.ready(function(K) {

                        discount = K.create('#ticket_discount',{
                                // items: ['baidumap']
                        });
                        location_text =  K.create('#ticket_location_text');


                       
               });



            $( "#ticket_end_time" ).datepicker({dayNamesMin: ["日", "一", "二", "三", "四", "五", "六"],dateFormat: "yy-mm-dd", monthNames: ["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"] });                   
         



             $( "#ticket_begin_time" ).datepicker({dayNamesMin: ["日", "一", "二", "三", "四", "五", "六"],dateFormat: "yy-mm-dd", monthNames: ["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"] });    


            });
            function asd(){

                var  ticket_discount = document.getElementById('ticket_discount').value; 
                var  ticket_location_text = document.getElementById('ticket_location_text').value; 


               


             
                     
                ticket_discount = discount.html();
                discount.sync();

                ticket_location_text = location_text.html();
                location_text.sync();


                
               


                var able =0;
                var array_ =["ticket_name","ticket_introduction",'ticket_number','ticket_code','ticket_integral','ticket_discount','ticket_location_text','business_detail','subcategory'];
               
                var array_content =["名称","内容摘要",'数量','编号','积分','优惠详情','地理信息','商家详情','优惠券类型'];
                for(var i=0;i<array_.length;i++){
                    var name=$('#'+array_[i]).val();

                    if(name==''){

                        alert(array_content[i]+'不能为空');
                        
                    }else{
                       
                        

                        if(array_[i] == 'ticket_code'){


                            var count = $('#ticket_code').val().length;

                           

                            if(count>4 || count < 4){
                               
                                alert('请输入4位编号');
                                return false;
                            }
                        } else{
                            able++;
                        }
                        
                    }
                }
               
               
              
                if(able==8){
                    

                     $("#form1").ajaxSubmit({ 

                        dataType:  'json', //数据格式为json 

                        success: function(data) { //成功 

                            if(data.ticket_id > 0 ){
                              

                              alert('操作成功～');

                              window.location.href = 'taotao.php?type='+$('#ticket_type').val();
                            }
                            
                        }, 

                        error:function(xhr){ //上传失败 
                           
                            alert(xhr.responseText); //返回失败信息 
                        } 
                     }); 


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
            <h1 class="manager_title" style="margin:5px 0 20px 0;"><?php echo $_smarty_tpl->getVariable('title')->value;?>
插入</h1>
          
            <form action="<?php echo $_smarty_tpl->getVariable('URLHANDLER')->value;?>
/taotao_all_action.php" method="post" id="form1" name="form1" class="form2" enctype="multipart/form-data">

            
                <input type="hidden" name="ticket_id" value="<?php echo $_smarty_tpl->getVariable('ticket')->value['ticket_id'];?>
">

                <input type="hidden" name="ticket_type" value="<?php echo $_smarty_tpl->getVariable('type')->value;?>
" id='ticket_type'>

                <input type='hidden' name='ticket_able' id='ticket_able' value='0'>



                <input type='hidden' name='ticket_logo' id='ticket_logo'>
               
                <dl >
                    <dt>名称</dt>
                    <dd><input type="text"  name="ticket_name"    id="ticket_name"  value="<?php echo $_smarty_tpl->getVariable('ticket')->value['ticket_name'];?>
"/><!-- span style=" margin-left: 12px; color: red;" id="title_error">（最多40个字符）</span>< --></dd>
                    <!-- <dd><p style=" color: red; font-weight: bolder;" ></p></dd> -->
                </dl>
               
               
                <?php if ($_smarty_tpl->getVariable('news_action')->value==1){?>


                <input type='hidden' name='ticket_logo' id='ticket_logo' value='<?php echo $_smarty_tpl->getVariable('ticket')->value['ticket_logo'];?>
'>

                <dl >
                    <dt>下载数量(界面显示)</dt>
                    <dd><input type="text"  name="ticket_download_number"    id="ticket_download_number"  value="<?php echo $_smarty_tpl->getVariable('ticket')->value['ticket_download_number'];?>
"/></dd>
                    <!-- <dd><p style=" color: red; font-weight: bolder;" ></p></dd> -->
                </dl>
                 <dl >
                    <dt>兑换数量(界面显示)</dt>
                    <dd><input type="text"  name="ticket_exchange_number"    id="ticket_exchange_number"  value="<?php echo $_smarty_tpl->getVariable('ticket')->value['ticket_exchange_number'];?>
"/></dd>
                    <!-- <dd><p style=" color: red; font-weight: bolder;" ></p></dd> -->
                </dl>

                <?php }?>
                <dl >
                    <dt>封面图片</dt>
                    <dd>
                        
                        <?php if ($_smarty_tpl->getVariable('ticket')->value['ticket_logo']!=''){?>
                        <img src="<?php echo $_smarty_tpl->getVariable('rootPath')->value;?>
/images/taotao/<?php echo $_smarty_tpl->getVariable('ticket')->value['ticket_logo'];?>
" >
                        <?php }?>
                        <input id="fileupload" type="file" name="mypic"></dd>


                      
                    <dd><p style=" color: red;" id="tip_photo"></p></dd>
                </dl>
                <dl >
                    <dt>优惠券类型</dt>
                    <dd>
                
	             <select style="padding:3px;" name="subcategory" id="subcategory">
                            <option value="">----请选择类型-----</option>
                            <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ticket_type')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
?>
                            <?php if ($_smarty_tpl->tpl_vars['type']->value['ticket_small_type_id']==$_smarty_tpl->getVariable('ticket')->value['subcategory']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['ticket_small_type_id'];?>
" selected="selected">
                               <?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>

                            </option>
                            <?php }else{ ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['ticket_small_type_id'];?>
" >
                                 <?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>

                            </option>
                            <?php }?>
                            <?php }} ?>
                        </select>
                        <span style=" margin-left: 12px; color: red;" id="news_type_error"></span>


                    </dd>
                </dl>


                 <dl >
                    <dt>关联商户</dt>
                    <dd>
                
                         <select style="padding:3px;" name="ticket_business_id" id="ticket_business_id">

                            <option value='0'>不做关联</option>
                            <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('business')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
?>

                            <option value='<?php echo $_smarty_tpl->tpl_vars['s']->value['merchant_id'];?>
'   <?php if ($_smarty_tpl->getVariable('ticket')->value['ticket_business_id']==$_smarty_tpl->tpl_vars['s']->value['merchant_id']){?> selected=''<?php }?>><?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</option>

                            <?php }} ?>
                              

                         </select>
                    </dd>
                </dl>

                

                <dl >
                    <dt>内容摘要</dt>
                    <dd><input type="text"  name="ticket_introduction"    id="ticket_introduction"  value="<?php echo $_smarty_tpl->getVariable('ticket')->value['ticket_introduction'];?>
"/></dd>
                </dl>


                 <dl >
                    <dt>生成数量</dt>
                    <dd><input type="text"  name="ticket_number"    id="ticket_number"  value="<?php echo $_smarty_tpl->getVariable('ticket')->value['ticket_number'];?>
"/></dd>
                </dl>


                 <dl >
                    <dt>编号</dt>
                    <dd><input type="text"  name="ticket_code"    id="ticket_code"  value="<?php echo $_smarty_tpl->getVariable('ticket')->value['ticket_code'];?>
"/></dd>
                </dl>


                <dl >
                    <dt>积分</dt>
                    <dd><input type="text"  name="ticket_integral"    id="ticket_integral"  value="<?php echo $_smarty_tpl->getVariable('ticket')->value['ticket_integral'];?>
" onkeyup='checkNum()'/></dd>
                </dl>

               

               <dl >
                    <dt>领取时间</dt>
                    <dd>
                


                        <span style=" " id="commencement_open_time_error">开始日期</span>


                        <input type='text' id='ticket_begin_time' name='ticket_begin_time' style='width: 87px;'  value='<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('ticket')->value['ticket_begin_time'],'%Y-%m-%d');?>
'>
                      


                         <span style=" " id="commencement_open_time_error">结束日期</span>


                       <input type='text' id='ticket_end_time' name='ticket_end_time' style='width: 87px;'  value='<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('ticket')->value['ticket_end_time'],'%Y-%m-%d');?>
'>
                       <span style=" margin-left: 12px;  color: red;" id="commencement_open_time_error">如结束日期 未填 则表示 无限制时间  如开始日期未填 则以当前日期为主</span>
                    </dd>
                </dl>



                 <dl >
                    <dt>优惠详情<dd style='margin:0'><textarea id="ticket_discount" name="ticket_discount" style="width:670px;height: 309px;"><?php echo $_smarty_tpl->getVariable('ticket')->value['ticket_discount'];?>
</textarea><span style=" margin-left: 12px;  color: red;" id="jianjie_error"></span></dd>
                </dl>


              




                 <dl >
                    <dt>地理信息<dd style='margin:0'><textarea id="ticket_location_text" name="ticket_location_text" style="width:238px;height: 457px;"><?php echo $_smarty_tpl->getVariable('ticket')->value['ticket_location_text'];?>
</textarea><span style=" margin-left: 12px;  color: red;" id="jianjie_error"></span></dd>
                </dl>


               
                <input type="button" value="保存" class="important_button" name="savetonext" id="savetonext" onclick="asd()">
            
             </form>
        </div>
    </body>
</html>
