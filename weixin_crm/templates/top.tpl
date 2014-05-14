<body class='boby'>
<link href="{$WebSiteUrl}/css/{$source}_css.css" rel="stylesheet" type="text/css">
<div class='topBackGround'>

	<div style='float: left; width: 628px; height: 100%;'>&nbsp;</div>

	<div style='position: absolute; top:10px; left: 1140px; '>

		<img src='{$WebSiteUrl}/images/lock.png'>
		<a style='color: white;font-size: 14px;display: inline-block' href='{$URLHANDLER}/process.php?login=0' class=''>安全退出</a>
	</div>

	<div style='position: absolute; top: 28px; left: 1154px; '>

		<img src='{$WebSiteUrl}/images/exit.png'>
	</div>


	<div style='position: absolute; left: 440px; top: 51px;' class='banner'>

		<div style='margin-left: 57px; margin-top: 18px;'>

			<div style='width: 560px; margin: 0 auto;float: left;'>

			当前用户:&nbsp;&nbsp;{$uname}&nbsp;&nbsp;&nbsp;&nbsp;登录:&nbsp;&nbsp;&nbsp;&nbsp;{$account}&nbsp;&nbsp;&nbsp;&nbsp;角色:&nbsp;&nbsp;&nbsp;&nbsp;系统管理员  
		   </div>


			<div style='float: left;'>

				{$smarty.now|date_format:'%Y-%m-%d'}  {$week} 
			</div>

	    </div>

		
		
	</div>


</div>


</body>