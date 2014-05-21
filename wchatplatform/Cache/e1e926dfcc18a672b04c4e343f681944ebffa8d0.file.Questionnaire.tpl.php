<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-21 12:18:42
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/Tpl/Jiantang/Game/Questionnaire.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1222425735537c29229361a7-20947570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1e926dfcc18a672b04c4e343f681944ebffa8d0' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/Tpl/Jiantang/Game/Questionnaire.tpl',
      1 => 1400644988,
    ),
  ),
  'nocache_hash' => '1222425735537c29229361a7-20947570',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html> 
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />


        <!-- 最新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css"> -->

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>

        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/jquery.form.js"></script>

        <title>问卷调查</title>
    </head>
    <script>

    </script>


    <style>
        body{
            Font-size=62.5%;
        }
        .form-control{
            width: 80%;
        }
        .radio-inline{
            float: left;
        }
    </style>

    <boby>
        <div class="registerWarp">

            <form id='questionForm' class=""  method='post' role="form"  action="?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=game&v=uploadQuestion" name='questionForm'>



                <input type='hidden' name='title' id='title' value='<?php echo $_smarty_tpl->getVariable('title')->value;?>
'>

                <input type='hidden' name='open_id' id='open_id' value='<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>
                <fieldset>
                    <div style=" padding-left: 2em;">
                        <legend>第一部分 - 基本信息</legend>
                    </div>

                    <div style="padding-left: 2em;">
                        <?php  $_smarty_tpl->tpl_vars['infos'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('info')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['infos']->key => $_smarty_tpl->tpl_vars['infos']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['infos']->key;
?>


                            <div class="form-group">

                                <label for="inputEmail3" class="col-sm-2 control-label" style=" margin-bottom: 0.5em;"><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
.<?php echo $_smarty_tpl->tpl_vars['infos']->value['question_title'];?>
</label>

                                <?php if ($_smarty_tpl->tpl_vars['infos']->value['question_type']==0){?>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="例如：张三" id='question_<?php echo $_smarty_tpl->tpl_vars['infos']->value['question_id'];?>
' name='<?php echo $_smarty_tpl->tpl_vars['infos']->value['question_id'];?>
'>
                                    </div>

                                <?php }elseif($_smarty_tpl->tpl_vars['infos']->value['question_type']==1){?>
                                    <br>
                                    <div style="padding-left: 15px;">
                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['infos']->value['question_answer_1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['key']->value==0){?>
                                                <div class="radio-inline">
                                                    <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['infos']->value['question_id'];?>
" id="question_<?php echo $_smarty_tpl->tpl_vars['infos']->value['question_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" checked>
                                                    <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio-inline">
                                                    <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['infos']->value['question_id'];?>
" id="question_<?php echo $_smarty_tpl->tpl_vars['infos']->value['question_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" >
                                                    <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

                                                </div>
                                            <?php }?>

                                        <?php }} ?>
                                    </div>
                                    <div style="clear: both;"></div>

                                <?php }elseif($_smarty_tpl->tpl_vars['infos']->value['question_type']==2){?>

                                    <div style=" padding-left: 1em;">

                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['infos']->value['question_answer_2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>

                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="question_<?php echo $_smarty_tpl->tpl_vars['infos']->value['question_id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['infos']->value['question_id'];?>
" value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

                                            </label>

                                        <?php }} ?>

                                    </div>

                                <?php }elseif($_smarty_tpl->tpl_vars['infos']->value['question_type']==3){?>

                                    <div style=" padding-left: 1em;">
                                        <textarea id='question_<?php echo $_smarty_tpl->tpl_vars['infos']->value['question_id'];?>
' class="form-control" rows="3" name='<?php echo $_smarty_tpl->tpl_vars['infos']->value['question_id'];?>
'></textarea>
                                    </div>


                                <?php }?>

                            </div>
                        <?php }} ?>

                        <!-- <div style=" padding-left: 1em;"> -->
                        <button type="submit" class="btn btn-primary" id='buttonSubmit'>提&nbsp;&nbsp;&nbsp;交</button>
                        <!-- </div> -->
                </fieldset>
        </div>
    </form>
</div>

<div style=" height: 2em;"></div>
<?php if ($_smarty_tpl->getVariable('message')->value!=''){?>
<div><?php echo $_smarty_tpl->getVariable('message')->value;?>
</div>
<?php }?>
</html>
<script>
    
    
   

    var title = $('#title').val();

    var titleArray = title.split(',');

    var number = 0;

//    $('#buttonSubmit').click(function() {
//
//    $("#questionForm").ajaxSubmit({
//    success: function(data) {
//                
//              
//    eval(data);
//
//               
//},
//error: function(xhr) {
//
//alert(xhr.responseText);
//}
//});
//
//})

</script>
</body>
</html>