
 <!DOCTYPE> 
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
     <title>客户服务策略</title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 </head>

<style>
body{
	font-size:62.5%;
	background-color: rgb(235,235,235);
}
table{
	border-collapse:collapse;
}
tr{
	 background:rgb(245,245,245); 
}
tr:nth-child(2n)
{
    background:#fff; 
}
 tr{
    background: expression((this.sectionRowIndex % 2 == 0) ? "#fff" : "rgb(245,245,245)" );
} 

td{
	/*border: solid 1px red;*/
	font-size: 1.5em;
	height: 2.5em;
} 

.firstRowStylw{
	width: 7%;
	text-align: center;
}
.twoRowStylw{
	width: 20%;
	text-align: left;
}
.threeRowStylw{
	width: 57%;
	text-align: left;
}
.foreRowStylw{
	width: 10%;
	text-align: center;
}
.fifeRowStylw{
	width: 30%;
	text-align: center;
	white-space:nowrap;  
}
.sixRowStylw{
	width: 10%;
	text-align: center;
}

.trHeight{
	height:5em;
	line-height: 2.5em;
	font-size: 1.5em;
}
a{
	text-decoration: underline;
	color: red;
}

.btnRow{
	/*border: solid 1px red;*/
	text-align: center;
	margin-top: 12em;

}
.btnstyle{
	width: 4.5em;
	height: 2em;
	font-size: 4em;
	white-space:nowrap;  
	font-weight: bolder;
	color: #fff;
	background-color: rgb(160,5,15);
	border: none;
	text-shadow: 0em 0.1em 0.1em #000;
	border-radius: 0.2em;
	-moz-border-radius: 0.2em;
	-webkit-border-radius: 0.2em;


	 box-shadow:inset 0em 1.7em 0em rgb(191,22,30);
    -webkit-box-shadow: inset 0em 1.7em 0em rgb(191,22,30);
    -moz-box-shadow: inset 0em 1.7em 0em rgb(191,22,30);
}
.userNameWarp{
	width: 100%;
	height: 3em;
	line-height: 4em;
/*	border: solid 1px red;*/
	font-size: 5em;
	font-weight: bolder;
	text-indent: 0.6em;

}
</style>

 <body>
<!--  		<div style=" border: solid 1px #fff">
 			<img class="woDeTiXingImg" src="./wodetixing.png">
 			<div class="woDeTiXingTxt">我有提醒</div>
 		</div> -->

	<div style=" background-color: #fff;">

		<div class="userNameWarp">
			<span class="userNameTitle">客户名称:</span>
			<span class="userName">李连杰</span>
		</div>

        <table style="width: 100%; margin-top: 2em;">

			<tr style=" background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0,#f86758), color-stop(1, #a1090a));
			background-image: -moz-linear-gradient(top, #f86758, #a1090a);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f86758', endColorstr='#a1090a', GradientType='0'); 
			color: rgb(243,243,243); text-shadow: 0em 0.1em 0.1em #000;
			 height: 2em; font-size: 2em; font-weight: bold; white-space:nowrap; ">

				<td class="firstRowStylw"></td>
				<td class="twoRowStylw">优惠和套餐</td>
				<td class="threeRowStylw" style=" text-align: center;">条件</td>
				<td class="foreRowStylw">批准</td>
				<td class="fifeRowStylw">效果</td>
				<td class="sixRowStylw">使用情况</td>

			</tr>

			<tr class="trHeight">
				<td class="firstRowStylw">1</td>
				<td class="twoRowStylw">
					异地存取免手续费
				</td>
				<td class="threeRowStylw">连续三个月存款余额大于5万 否则扣费</td>
				<td class="foreRowStylw">是<br />2013.01</td>
				<td class="fifeRowStylw">客户喜欢</td>
				<td class="sixRowStylw">3次</td>
			</tr>

			<tr class="trHeight">
				<td class="firstRowStylw">2</td>
				<td class="twoRowStylw">
					网银转账汇款免手续费 50%
				</td>
				<td class="threeRowStylw">连续三个月存款余额大于5万</td>
				<td class="foreRowStylw">是<br />2013.01</td>
				<td class="fifeRowStylw">未调查</td>
				<td class="sixRowStylw">1次</td>

			</tr>

			<tr class="trHeight">
				<td class="firstRowStylw">3</td>
				<td class="twoRowStylw">
					机场贵宾服务室
				</td>
				<td class="threeRowStylw">连续三个月存款余额大于20万 否则自费</td>
				<td class="foreRowStylw"><a>申请中</a></td>
				<td class="fifeRowStylw">未调查</td>
				<td class="sixRowStylw">3次</td>

			</tr>
		</table>
	</div>

		<div class="btnRow">
				<button type="button" class="btnstyle">新增</button>
				<button type="button" class="btnstyle" style=" margin-left: 2em;">修改</button>
				<button type="button" class="btnstyle" style=" margin-left: 2em;">提交</button>

		</div>

 </body>
 </html>