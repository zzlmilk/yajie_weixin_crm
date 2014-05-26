<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-23 16:49:14
         compiled from "/web/www/yajie_weixin_crm/weixin_crm//templates/jiantang/gift/getBigWheelList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2055008716537f0b8a2fe5e6-87010931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64fbe7272e5de81256df9da3b58bd5b1ece8c0bf' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm//templates/jiantang/gift/getBigWheelList.tpl',
      1 => 1400834952,
    ),
  ),
  'nocache_hash' => '2055008716537f0b8a2fe5e6-87010931',
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

        <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/css/crm_table_style.css" rel="stylesheet">


        <title>大转盘游戏配置信息</title>
    </head>
    <script>
        $(function(){
        $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show');
    })
    </script>


    <style>
        body{
            Font-size=62.5%;
        }
        .bigWheelWarp{
            width: 100%;
        }
        .titleStyle{
            color: rgb(91,91,91);
            font-size: 2.5em;
            text-align: center;
            height: 3em;
            line-height: 3em;
        }

        .nowProbability{
            width: 25%;

            float: left;
            margin-right: 3em;
        }
        .fontStyle{
            line-height: 2.4em;
            width:12%; 
        }
        .rowLocation{
            margin-top: 10px;

            clear: both;

            height: 34px;

            line-height: 37px;
        }
    </style>

    <boby>

        <div class="navBarStyle">
    当前位置：微游戏管理 > 大转盘游戏配置信息
</div>


        <div class="bigWheelWarp">
           

            <div class="tab-content">



                <div style="color: #428bca; margin-top: 1em; padding-left: 1.5em; width: 50%;">
                    提示:概率以百分比计算,所填概率之和必须小于100, 一百减去当前概率之和,剩余概率由其他项平均分配!
                    <br /><b style=" color: rgb(240,173,78)">注:所填写的概率必须为整数</b>
                </div>
                <?php if ($_smarty_tpl->getVariable('requestVal')->value=="1"){?>
                    <div style="margin-left: 1.5em;width: 50%;" id="errorMessage" class="alert alert-danger errorMessage"> 修改成功</div>
                <?php }?>
                <!-- 概率配置模块 -->
                <div class="tab-pane active" id="probability" >

                    <form action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=gift&functionname=updateGiftRate" method='post' id='form1' name='form1' >

                        <input type="hidden" name="gift_type" value="1"/>

                        <?php  $_smarty_tpl->tpl_vars['setting'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('giftSetting')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['setting']->key => $_smarty_tpl->tpl_vars['setting']->value){
?>

                        <div class="rowLocation" style='clear: both;'>
                            <label for="inputPassword3" class="control-label col-sm-2 "><?php echo $_smarty_tpl->tpl_vars['setting']->value['gift_name'];?>
概率</label>
                            <input type="text" name='probability[]' id="" class="form-control nowProbability" value="<?php echo $_smarty_tpl->tpl_vars['setting']->value['gift_probability'];?>
" placeholder="所显示为当前概率">
                           
                        </div>


                        <?php }} ?>
                       

                        <div style=" margin-top: 3em;margin-left: 31.5em;">
                            <button type="submit" class="btn btn-primary" id="submitProbabilityInfo" style=" letter-spacing: 0.2em;"   onclick='$("form1").submit();' >提交信息</button>
                        </div>

                    </form>

                </div>


            </div>

        </div>

    </boby>



</html>
