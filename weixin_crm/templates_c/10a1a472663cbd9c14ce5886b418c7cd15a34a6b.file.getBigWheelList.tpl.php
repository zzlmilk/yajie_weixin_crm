<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-20 12:11:14
         compiled from "/web/www/yajie_weixin_crm/weixin_crm/templates/gift/getBigWheelList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:702047708532a6a62b23327-77182027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10a1a472663cbd9c14ce5886b418c7cd15a34a6b' => 
    array (
      0 => '/web/www/yajie_weixin_crm/weixin_crm/templates/gift/getBigWheelList.tpl',
      1 => 1395286473,
    ),
  ),
  'nocache_hash' => '702047708532a6a62b23327-77182027',
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


       <title>大转盘游戏配置信息</title>
    </head>
    <script>
    $(function(){
    	$('#myTab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show');
		})

		var a = 0;

		$("#editOneProbability").click(function(){
			if((a%2) == 1){
				$(this).html("修 改");
				$("#gift_one_probability").attr('ReadOnly', true);
				 a++;
			}else{
				$(this).html("保 存");
				$("#gift_one_probability").attr('ReadOnly', false);
				a++;
			}

		});
		$("#editTwoProbability").click(function(){
			if((a%2) == 1){
				$(this).html("修 改");
				$("#gift_two_probability").attr('ReadOnly', true);
				 a++;
			}else{
				$(this).html("保 存");
				$("#gift_two_probability").attr('ReadOnly', false);
				a++;
			}

		});
		$("#editThreeProbability").click(function(){
			if((a%2) == 1){
				$(this).html("修 改");
				$("#gift_three_probability").attr('ReadOnly', true);
				 a++;
			}else{
				$(this).html("保 存");
				$("#gift_three_probability").attr('ReadOnly', false);
				a++;
			}

		})
});


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
    		margin-top: 3em;
    	}
    </style>

    <boby>
    	
	    <div class="bigWheelWarp">
	       	<div class="titleStyle">大转盘游戏配置信息</div>

			<ul class="nav nav-tabs" id="myTab">
			  <li class="active"><a href="#probability" data-toggle="tab">概率配置</a></li>
			  <li><a href="#prize" data-toggle="tab">奖品配置</a></li>
			  <li><a href="#complex" data-toggle="tab">综合配置</a></li>
			  <li><a href="#gameTest" data-toggle="tab">游戏测试</a></li>
			  <li><a href="#other" data-toggle="tab">其他</a></li>
			</ul>

			<div class="tab-content">


				
				<div style="color: #428bca; margin-top: 1em;text-indent: 1em;">
					提示: 概率的配置信息必须换算成小数填写,每个奖品概率须介于0～1之间!
				</div>

				<!-- 概率配置模块 -->
			  <div class="tab-pane active" id="probability" >

			  	<form action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=gift&functionname=updateGiftRate" method='post' id='form1' name='form1' >

			  		<input type="hidden" name="gift_type" value="1"/>
				<div class="rowLocation">
				  	<label for="inputPassword3" class="control-label col-sm-2 fontStyle">当前一等奖概率</label>
				  	<input type="text" ReadOnly="true" name='gift_one_probability' id="gift_one_probability" class="form-control nowProbability" value="<?php echo $_smarty_tpl->getVariable('giftSetting')->value['gift_one_probability'];?>
" placeholder="所显示为当前概率">
				  	<button type="button" class="btn btn-primary" id="editOneProbability" style=" letter-spacing: 0.2em;">修改</button>
				</div>
				<div class="rowLocation">
				  	<label for="inputPassword3" class="control-label col-sm-2 fontStyle">当前二等奖概率</label>
				  	<input type="text" ReadOnly="true" id="gift_two_probability"  name='gift_two_probability' class="form-control nowProbability" value="<?php echo $_smarty_tpl->getVariable('giftSetting')->value['gift_two_probability'];?>
" placeholder="所显示为当前概率">
				  	<button type="button" class="btn btn-primary" id="editTwoProbability" style=" letter-spacing: 0.2em;">修改</button>
				</div>
				<div class="rowLocation">
				  	<label for="inputPassword3" class="control-label col-sm-2 fontStyle">当前三等奖概率</label>
				  	<input type="text" ReadOnly="true" id="gift_three_probability"  name='gift_three_probability'  class="form-control nowProbability" value="<?php echo $_smarty_tpl->getVariable('giftSetting')->value['gift_three_probability'];?>
" placeholder="所显示为当前概率">
				  	<button type="button" class="btn btn-primary" id="editThreeProbability" style=" letter-spacing: 0.2em;">修改</button>
				</div>

				<div style=" margin-top: 3em;margin-left: 30.5em;">
				  	<button type="submit" class="btn btn-primary" id="submitProbabilityInfo" style=" letter-spacing: 0.2em;"   onclick='$("form1").submit();' >提交信息</button>
				</div>

				 </form>

			  </div>


			  <div class="tab-pane" id="prize">奖品配置模块</div>
			  <div class="tab-pane" id="complex">综合配置模块</div>
			  <div class="tab-pane" id="gameTest">游戏测试模块</div>
			  <div class="tab-pane" id="other">其他模块配置</div>
			</div>

       </div>
	 
    </boby>

    
   
</html>