<body class='boby'>
<link href="{$WebSiteUrl}/css/{$source}_css.css" rel="stylesheet" type="text/css">
<div class='topBackGround'>

	<div style='float: left; width: 628px; height: 100%;'>&nbsp;</div>

	<div style='position: absolute; top:10px; left: 1140px; '>

		<img src='{$WebSiteUrl}/images/lock.png'>
		<a style='color: white;font-size: 14px;display: inline-block' href='{$WebSiteUrl}/pageredirst.php?action=login&functionname=logout' class=''>安全退出</a>
	</div>

	<!-- <div style='position: absolute; top: 28px; left: 1154px; '>

		<img src='{$WebSiteUrl}/images/exit.png'>
	</div> -->


	<div style='position: absolute; margin-left: 430px; margin-top: 51px;' class='banner'>

		<div style='margin-left: 62px; margin-top: 13px;'>

			<div style='width: 571px; margin: 0 auto;float: left;'>

			    <span style='width: 18px;'>当前用户:</span>
			【{$uname}】<span style='display: inline-block; width: 15px'>&nbsp;</span><span style='width: 18px;'>登录:</span>【{$account}】<span style='display: inline-block; width: 15px'>&nbsp;</span><span style='width: 18px;'>角色:</span>【系统管理员】 
		   </div>


			<div style='float: left;'>

				{$smarty.now|date_format:'%Y-%m-%d'}<span style='width: 17px; display: inline-block;'>&nbsp;</span>{$week} 
			</div>

	    </div>

		
		
	</div>


</div>


</body>