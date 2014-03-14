
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


       <title>用户激活</title>
    </head>
    <script>

    </script>


    <style>
    	body{
    		Font-size=62.5%;
    	}
    	.ativatingWarp{
    		/*border: solid 1px red;*/
    		width: 22em;
    		/*margin: 0 auto;*/
    		height: 10em;
    		left: 50%;
    		top:20%;
    		position: absolute;
    		margin-left: -11em;  
			margin-top: -5px;

    	}
    	.phoneNumberStyle{
    		width: 63%;
    		float: left;
    		margin-left: 0.6em;
    	}
    	.getCaptcha{
			margin-left: 1em;
			width: 6em;
			text-indent: -0.5em;
    	}
    	.ativating{
			margin-left: 1em;
			width: 5em;
			text-indent: -0.5em;
    	}
    </style>

    <boby>
	    <div class="ativatingWarp">

	<div style=" margin-top: 1.5em;">
	        <div class="form-group">
			    <input type="tel"  class="form-control phoneNumberStyle" id="exampleInputPassword2" placeholder="请输入手机号码">
			</div>
  			<button type="submit" class="btn btn-info getCaptcha">获取激活码</button>
	</div>
	<div style=" margin-top: 2em;">
	        <div class="form-group">
			    <input type="tel" class="form-control phoneNumberStyle" id="exampleInputPassword2" placeholder="请输入激活码">
			</div>

  			<button type="submit" class="btn btn-primary ativating">马上激活</button>
	</div>
	    </div>

    </boby>

    
   
</html>
