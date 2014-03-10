
 <!DOCTYPE> 
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
     <title> 我有提醒</title>
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

td{
/*	border: solid 1px #fff;*/
/*	cellspacing:-0.2em;*/
}
.taskStyle{
	width: 15%;
}
.contentStyle{
width: 50%;
}
.timeLimitStyle{
width: 15%;
}
.completionStyle{
width: 25%;
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

	font-size: 1.5em;
	height: 2.5em;
	/*text-align: center;*/
		/*font-weight: bolder;*/
		text-indent: 0.5em;
} 


.trContent{
	font-size: 2em;
}

.woDeTiXingImg{
	width: 10em; 
	height: 10em; 
	margin-bottom: 2em; 
	margin-top: 2em; 
	margin-left: 2em; 
	margin-right: 4em; 
	float: left;
}
.woDeTiXingTxt{
	font-size: 5em; 
	color: rgb(43,105,127);
	white-space:nowrap; 
	font-weight: bold; 
	margin-top: 1.3em;
}

a{
	text-decoration: underline;
	color: #c11214;

}
.tdBorder{
	border-left: solid 0.1em #fff;
	border-right: solid 0.1em #fff;
}
.timeStyl{
	text-indent: 0.6em;
}
</style>

 <body>
<!--  		<div style=" border: solid 1px #fff">
 			<img class="woDeTiXingImg" src="./wodetixing.png">
 			<div class="woDeTiXingTxt">我有提醒</div>
 		</div> -->

	<div style="  margin-top: 5em; background-color: #fff;">
        <table style="width: 100%; margin-top: 2em;">

			<tr style=" background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0,#f86758), color-stop(1, #a1090a));
			background-image: -moz-linear-gradient(top, #f86758, #a1090a);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f86758', endColorstr='#a1090a', GradientType='0'); 
			color: rgb(243,243,243); text-shadow: 0em 0.1em 0.1em #000;
			 height: 2em; font-size: 2.2em; font-weight: bold; white-space:nowrap; ">
				<td class="taskStyle" style=" height: 2em;">任务</td>
				<td class="contentStyle" style="height: 2em; ">内容</td>
				<td class="timeLimitStyle" style=" height: 2em;">时限</td>
				<td class="completionStyle" style=" height: 2em;">进度</td>
			</tr>

			<tr class="trContent">
				<td class="tdBorder">345</td>
				<td style=" border-left: none;"><a href="http://112.124.25.155/wchatplatform?a=company&v=tixingDetail">月度拜访客户</a></td>
				<td style=" border:none;" class=" timeStyl">30天</td>
				<td class=" timeStyl">45%</td>
			</tr>

			<tr class="trContent">
				<td class="tdBorder">346</td>
				<td ><a href="http://112.124.25.155/wchatplatform?a=company&v=tixingDetail">李连杰地址更正</a></td>
				<td class=" timeStyl">30天</td>
				<td class=" timeStyl">100%</td>
			</tr>

			<tr class="trContent">
				<td class="tdBorder">347</td>
				<td><a href="http://112.124.25.155/wchatplatform?a=company&v=tixingDetail">竞争消息录入</a></td>
				<td class=" timeStyl">30天</td>
				<td class=" timeStyl">0%</td>
			</tr>

			<tr class="trContent">
				<td class="tdBorder">348</td>
				<td><a href="http://112.124.25.155/wchatplatform?a=company&v=tixingDetail">月度拜访客户神盾舰</a></td>
				<td class=" timeStyl">30天</td>
				<td class=" timeStyl">50%</td>
			</tr>

			<tr class="trContent">
				<td class="tdBorder">349</td>
				<td><a href="http://112.124.25.155/wchatplatform?a=company&v=tixingDetail">争取客户理财</a></td>
				<td class=" timeStyl">30天</td>
				<td class=" timeStyl">0%</td>
			</tr>
		</table>
		<div style="height: 2.4em; width: 100%;"></div>
	</div>

 </body>
 </html>