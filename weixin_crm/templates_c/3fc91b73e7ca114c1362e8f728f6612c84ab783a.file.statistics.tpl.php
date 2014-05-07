<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-06 17:53:09
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/statistics/statistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5911195368b105d3f3b7-83937788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fc91b73e7ca114c1362e8f728f6612c84ab783a' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/statistics/statistics.tpl',
      1 => 1399369979,
    ),
  ),
  'nocache_hash' => '5911195368b105d3f3b7-83937788',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta content="initial-scale=1.0; maximum-scale=1.0; user-scalable=no;" name="viewport">
		<meta name="viewport" content="width=device-width"><!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->

		<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript">
</script><!-- 最新的 Bootstrap 核心 JavaScript 文件 -->

		<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js" type="text/javascript">
</script>
		<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" type="text/css">
		<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/js/Chart.js" type="text/javascript">
</script>
		<style type="text/css">
.labelWidth{
		width: auto !important;
		}
		.inputWidth{
		width: 170px;
		}
		.userMangerTitle{
		color: rgb(91,91,91);
		font-size: 2.5em;
		margin-top: 15px;
		text-align: center;
		}
		.errorMessage{
		width: 300px;
		margin: 0 auto;
		display: none;
		}
		</style>
		<title></title>
	</head>
	<body>
		<div class="userMangerTitle">
			统计
		</div>

		   <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">统计类型</label>
                <div class="col-sm-2">
                    <select name="type" id='type' class="form-control inputWidth" onchange='locationUrl()'>
                        <option value="1" <?php if ($_smarty_tpl->getVariable('type')->value==1){?>selected="selected" <?php }?>>每月用户消费</option>
                        <option value="2" <?php if ($_smarty_tpl->getVariable('type')->value==2){?>selected="selected" <?php }?>>1季度消费</option>
                         <option value="3" <?php if ($_smarty_tpl->getVariable('type')->value==3){?>selected="selected" <?php }?>>每月项目消费</option>
                    </select>
                </div>
            </div>

            <br />
		<canvas id="canvas" height="450" width="800"></canvas>
	</body>

	<script>

	   var url = '<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
';

	   var type = '<?php echo $_smarty_tpl->getVariable('type')->value;?>
';

	   var XVAL = eval('<?php echo $_smarty_tpl->getVariable('XVAL')->value;?>
');



	   var YVAL = eval('<?php echo $_smarty_tpl->getVariable('YVAL')->value;?>
');

        var lineChartData = {
　　　　　　　// x轴的标示
            labels : XVAL,
　　　　　　　// 数据，数组中的每一个object代表一条线
            datasets : [
                {
                    fillColor : "rgba(151,187,205,0)",
                    strokeColor : "rgba(151,187,205,1)",
                    pointColor : "rgba(151,187,205,1)",
                    pointStrokeColor : "#fff",
                    data : YVAL
                }
            ]
            
        }

    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);


    function locationUrl(){


    	window.location.href= url+'/pageredirst.php?action=statistics&functionname=statistics&type='+$('#type').val();

    }
    
    </script>
</html>