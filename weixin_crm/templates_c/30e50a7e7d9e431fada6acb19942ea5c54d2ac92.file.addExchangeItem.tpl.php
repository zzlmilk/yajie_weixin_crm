<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-22 17:33:39
         compiled from "/web/www/yajie_weixin_crm/weixin_crm//templates/jiantang/exchange/addExchangeItem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:455375577537dc4738dffe4-40773117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30e50a7e7d9e431fada6acb19942ea5c54d2ac92' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm//templates/jiantang/exchange/addExchangeItem.tpl',
      1 => 1400488781,
    ),
  ),
  'nocache_hash' => '455375577537dc4738dffe4-40773117',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
<meta name="viewport" content="width=device-width,user-scalable=yes" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/css/bootstrap-datetimepicker.css">
<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/crm_table_style.css" rel="stylesheet">
<style>
    .labelWidth{
        width: auto !important;
    }
    .inputWidth{
        width: 165px;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 25px;
        margin-top: 15px;
        text-align: center;
    }
    .errorMessage{
        width: 300px;
        margin: 0 auto;
        display: none;
    }
</style>
<script>
    function uploadevent(status,picUrl,callbackdata){
    //    alert(picUrl); //后端存储图片
    //    alert(callbackdata); //后端返回数据
    status += '';
    switch(status){
    case '1':
        
        document.getElementById('testPhoto').value=picUrl;
        document.getElementById('photoState').innerHTML="已上传";
        //        var time = new Date().getTime();
        //        var filename162 = picUrl+'_162.jpg';
        //        var filename48 = picUrl+'_48.jpg';
        //        var filename20 = picUrl+"_20.jpg";

        // document.getElementById('avatar_priview').innerHTML = "头像1 : <img src='"+filename162+"?" + time + "'/> <br/> 头像2: <img src='"+filename48+"?" + time + "'/><br/> 头像3: <img src='"+filename20+"?" + time + "'/>" ;
		
        break;
    case '-1':
        window.location.reload();
        break;
    default:
        window.location.reload();
    } 
}
</script>
<div class="navBarStyle">
    当前位置：兑换管理 > 添加礼品
</div>
<div style="height: 50px;"></div>
<?php if ($_smarty_tpl->getVariable('errorMessage')->value!=''){?>
    <div id="errorMessage" style="display: block;" class="alert alert-danger errorMessage">
        <?php echo $_smarty_tpl->getVariable('errorMessage')->value;?>

    </div>
<?php }else{ ?>
    <div id="errorMessage"class="alert alert-danger errorMessage">
    </div>
<?php }?>
<div style="margin-left:15px;margin-top:15px;">
    <div style="width: 300px; margin: 0 auto;">
        <div style="text-align: center"><b style=" color: rgb(240,173,78)">注:图片选择完成后请点击保存按钮以完成上传</b></div>
        <div style="height: 35px;"></div>
        <form class="form-horizontal" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=addExchangeItem" enctype="multipart/form-data" method="Post">
            <!--            <div class="form-group"> -->
            <!--<label for="inputEmail3" class="col-sm-2 control-label labelWidth">礼品名称：</label>-->
            <!--                <div class="col-sm-2">-->
            <input class="form-control " type="hidden" value=" " name="exchange_name" id="exchangeName">
            <!--                </div>
                        </div> -->
            <!--            <div class="form-group"> 
                            <label for="inputEmail3" class="col-sm-2 control-label labelWidth">礼品类型：</label>
                            <div class="col-sm-2">
                                <select disabled="0" name="exchange_type" id='exchangeType' class="form-control inputWidth">
                                    <option value="0" >虚拟</option>
                                    <option value="1" selected="selected">实物</option>
                                </select>-->
            <input name='exchange_type' value="1" type="hidden">
            <!--                </div>
                        </div> -->
            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">兑换积分：</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="" name="exchange_integration" id="exchangeIntegration">
                </div>
            </div>

            <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">礼品简介：</label>
                <div class="col-sm-2">
                    <textarea  class="form-control inputWidth" rows="3" name="exchange_summary" id="exchangeSummary"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">礼品图片：</label>
                <div class="col-sm-2">
                    <input id="testPhoto" name="exchange_image" class="inputWidth" photoInput="1" type="hidden" value="">
                    <p id="photoState" style="width: 165px;margin-top: 5px;">未上传</p>
                </div>
                <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"
                        WIDTH="650" HEIGHT="450" id="myMovieName">
                    <PARAM NAME=movie VALUE="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/photoCut/avatar.swf">
                    <PARAM NAME=quality VALUE=high>
                    <PARAM NAME=bgcolor VALUE=#FFFFFF>
                    <param name="flashvars" value="imgUrl=<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/photoCut/default.jpg&uploadUrl=<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/photoCut/upfile.php&uploadSrc=false" />
                    <EMBED src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/photoCut/avatar.swf" quality=high bgcolor=#FFFFFF WIDTH="650" HEIGHT="450" wmode="transparent" flashVars="imgUrl=<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/photoCut/default.jpg&uploadUrl=<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/photoCut/upfile.php&uploadSrc=false"
                           NAME="myMovieName" ALIGN="" TYPE="application/x-shockwave-flash" allowScriptAccess="always"
                           PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
                    </EMBED>
                </OBJECT>
            </div>
            <!--            <div class="form-group"> 
                            <label for="inputEmail3" class="col-sm-2 control-label labelWidth">礼品详情：</label>
            
                            <div class="col-sm-2">-->
            <!--                    <textarea  class="form-control inputWidth" rows="3"name="exchangez_details" id="exchangezDetails">     </textarea>-->
            <input name="exchangez_details" type="hidden" class="form-control inputWidth">
            <!--                </div>
                        </div>-->

            <p style="text-align: right;margin-right: 35px;"><button data-toggle="modal" data-target="#myModal" type="button" id="addButton" class="btn btn-info">确认添加</button></p>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" >
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">你确认修改这条信息么？</h4>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                            <a id="checkButton" href=""><button type="submit" class="btn btn-primary">确认</button></a>
                            <input type="hidden" id="deleteUrl" value="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=exchangeItemDelete&ItemId="  />
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </form>
    </div>
    <input type="hidden" id="photoUrl" value="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/giftImages/">
</div>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/jquery-1.9.1.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/rexexTest.js"></script>
<script>
$("#addButton").click(function(){
$("#errorMessage").hide();
$("#errorMessage").html();
var errorMessage="";
var alertFlag=false;
if($("#exchangeName").val()==""){
errorMessage+="礼品名称不能为空 <br>";
alertFlag=true;
}
if($("#exchangeSummary").val()==""){
errorMessage+="简介不能为空 <br>";
alertFlag=true;
}
if($("#exampleInputFile").val()==""){
errorMessage+="请选择一张图片 <br>";
alertFlag=true;
}
if(!getIntRegex($("#exchangeIntegration").val())||$("#exchangeIntegration").val()<0){
errorMessage+="兑换积分必须为数字或者大于0 <br>";
alertFlag=true;
}
if($("#photoState").html()=="未上传"){
errorMessage+="请上传一张图片 <br>";
alertFlag=true;
}
if(alertFlag){ 
$("#errorMessage").show();
$("#errorMessage").html(errorMessage);
return false;
}else{
$(".modal-body").html("");
var alertTitle=new Array();
var alertText=new Array();
var WarringStr ="";
//var textObject=$(this).parent().parent().find("td");
$(".labelWidth").each(function(index){
alertTitle[index]=$(this).html();
});
$(".inputWidth").each(function(index){
if(this.tagName=="SELECT"){
alertText[index]=$(this).find("option:selected").html();
}else if($(this).attr("photoInput")=="1"){
var photoUrl=$("#photoUrl").val()+$(this).val();
alertText[index]="<img src='"+photoUrl+"'>"
}
else{
if($(this).val()==""){
alertText[index]="未填写";
}
else{
alertText[index]=$(this).val();
}
}
});

for (var i=0 ;i<alertTitle.length;i++){
WarringStr+="<div class='form-group'><label  class=' control-label labelWidth'>"+alertTitle[i]+"</label>"
+"<label  class='control-label labelWidth'>"+alertText[i]+"</label>"
+"</div>";
}
var deleteUrl=$("#deleteUrl").val();
$("#checkButton").attr("href", deleteUrl+alertText[6]);                
$(".modal-body").html(WarringStr);

}
})
$("#exchangeIntegration").keyup(function(){
if(!getIntRegex($(this).val())){
var cutString=$(this).val().substr(0, ($(this).val().length)-1);

$("#exchangeIntegration").val(cutString);
}
})
     
</script>
