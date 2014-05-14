<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-14 16:59:05
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/Tpl/Inhouse/User/userCenter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117707285153733059550da2-45214336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba2647f90fe49ad65c2ae243c65bd1bc3fa5992b' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/Tpl/Inhouse/User/userCenter.tpl',
      1 => 1400057420,
    ),
  ),
  'nocache_hash' => '117707285153733059550da2-45214336',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <meta charset="utf-8">
        <title>会员中心</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

       

        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/hignchats/highcharts.js" type="text/javascript">
</script>

        <style>
            body{
                Font-size=62.5%;
            }
            .round_photo{
                width:100%;
                height: auto;
                border:1px solid #ddddde;
                -moz-border-radius:10%;
                -webkit-border-radius: 10%;
                border-radius:10%;

            }
            .siteClass{

                color: rgb(128,128,128);
            } 
            .graph{  

                width: 0;     height: 0;     border-bottom: 38px solid rgb(70,140,200);  

                border-left: 41px solid transparent;

            }  
            .expenseBox{
                min-height:50px;
                width: 100%;
                margin-top: 20px; 
                background-color: rgb(255,255,247);
                border-radius: 5px; 
            }
            .text-padding{
                padding-left: 5px;
                padding-right: 5px;
            }
            .item-postion{
                margin-top: 10px;
            }
            .expenseTitle{
                border-bottom: 1px solid #e7e7e7;height: 40px; line-height: 40px; 
            }
        </style>
    </head>
    <body style="background-color: #E7E7E7;">
        <div style='  width: 100%; background-color: rgb(255,255,247); position: relative;'>

            <div style='height: 0.8em;width: 100%;'>&nbsp;</div>


            <div style=' width: 18%;margin-left: 5px;'>
                <img src='<?php echo $_smarty_tpl->getVariable('userinfo')->value['headimgurl'];?>
' class='round_photo'>
            </div>
            <div style='height: 0.8em;width: 100%;'>&nbsp;</div>


            <div style=' width: 66%; overflow: hidden; position: absolute; left: 25%; top: 5px;'>

                <div style='margin-top: 4%;  '>
                    <div class='siteClass' style='font-size:14px;' >昵称:&nbsp; <?php echo $_smarty_tpl->getVariable('userInfo')->value['user_name'];?>
</div>
                </div>
                <div class='siteClass' style='font-size:14px;'>积分:&nbsp; <?php echo $_smarty_tpl->getVariable('userInfo')->value['user_integration'];?>
</div>
                <div class='siteClass' style='font-size:14px;'>卡号:&nbsp; <?php echo $_smarty_tpl->getVariable('userInfo')->value['user_card'];?>
</div>


            </div>

        </div>


        <div id="container" style="min-width:400px;height:400px"></div>
       

    </body>
   <script>



       var XVAL = eval('<?php echo $_smarty_tpl->getVariable('XVAL')->value;?>
');



       var YVAL = eval('<?php echo $_smarty_tpl->getVariable('YVAL')->value;?>
');

     $(function () {
    $('#container').highcharts({
        title: {
            text: '',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: XVAL
        },
        yAxis: {
            title: {
                text: ''
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: '金额',
            data: YVAL
        }]
    });
});
                


    
    </script>
</html>