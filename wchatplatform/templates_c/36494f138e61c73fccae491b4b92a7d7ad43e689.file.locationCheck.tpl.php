<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-25 15:00:01
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/User/locationCheck.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129772942053312971c8ed03-68828782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36494f138e61c73fccae491b4b92a7d7ad43e689' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/User/locationCheck.tpl',
      1 => 1395730516,
    ),
  ),
  'nocache_hash' => '129772942053312971c8ed03-68828782',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css"> 
        <style>

        </style>
    </head>
    <body>
        <div class="registerWarp">
            <form method='post' role="form" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=company&a=test&v=updateUserLocation">

                <input type="hidden" name='open_id' id='open_id' value='<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">省</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="province" name="province_id">
                            <?php  $_smarty_tpl->tpl_vars['provinceItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('provinceValue')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['provinceItem']->key => $_smarty_tpl->tpl_vars['provinceItem']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['provinceItem']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['provinceItem']->value['area_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['provinceItem']->value['title'];?>
</option>
                            <?php }} ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">市</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="town" name="city_id">
                            <?php  $_smarty_tpl->tpl_vars['townItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('townValue')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['townItem']->key => $_smarty_tpl->tpl_vars['townItem']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['townItem']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['townItem']->value['area_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['townItem']->value['title'];?>
</option>
                            <?php }} ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">区</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="area" name="area_id">
                            <?php  $_smarty_tpl->tpl_vars['areaItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('areaValue')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['areaItem']->key => $_smarty_tpl->tpl_vars['areaItem']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['areaItem']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['areaItem']->value['area_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['areaItem']->value['title'];?>
</option>
                            <?php }} ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">居住地址</label>
                    <div class="col-sm-10">
                        <input type="text" value="" class="form-control" id="street" name="street">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">真实姓名</label>
                    <div class="col-sm-10">
                        <input type="text" value="" class="form-control" id="real_name" name="real_name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">电话号码</label>
                    <div class="col-sm-10">
                        <input type="text" value="" class="form-control" id="user_phone" name="user_phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10" >
                        <button id="submitOrder" type="submit"  class="btn btn-primary">确&nbsp;&nbsp;&nbsp;认</button>
                    </div>
                </div>
                <input type="hidden" id="gNumber" name="gNumber" value="<?php echo $_smarty_tpl->getVariable('goodsId')->value;?>
">
            </form>
        </div>
    </body>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/script/defined.js"></script>
    <script>
        
        $("#province").change(function(){
        $.post(locationURL,
        {
            areaId:$(this).val()
        },
        function(rData){
        var rDataLength=rData.length;
        $("#town").html("");
        var townHTMLString="";
        for(var i=0;i<rDataLength;i++){
        townHTMLString+="<option value='"+rData[i]['area_id']+"'>";
        townHTMLString+=rData[i]["title"];
        townHTMLString+="</option>";
    }
    $("#town").html(townHTMLString);
    $.post(locationURL,
        {
    areaId:$("#town").val()
},
function(rData){
var rDataLength=rData.length;
$("#area").html("");
var townHTMLString="";
for(var i=0;i<rDataLength;i++){
townHTMLString+="<option value='"+rData[i]['area_id']+"'>";
townHTMLString+=rData[i]["title"];
townHTMLString+="</option>";
}
$("#area").html(townHTMLString);
});
});
});
$("#town").change(function(){
$.post(locationURL,
        {
areaId:$(this).val()
},
function(rData){
var rDataLength=rData.length;
$("#area").html("");
var townHTMLString="";
for(var i=0;i<rDataLength;i++){
townHTMLString+="<option value='"+rData[i]['area_id']+"'>";
townHTMLString+=rData[i]["title"];
townHTMLString+="</option>";
}
$("#area").html(townHTMLString);
});
})
    </script>
</html>