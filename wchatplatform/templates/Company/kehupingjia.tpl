
 <!DOCTYPE> 
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
     <title>客户评价</title>
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
	width: 8%;
	text-align: center;

}
.contentStyle{
width: 50%;
text-align: center;
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
	/*	text-indent: 0.5em;*/

} 


.trContent{
	font-size: 2em;
height: 5em;
line-height: 2em;
}


.tdBorder{
	border-left: solid 0.1em #fff;
	border-right: solid 0.1em #fff;
	text-align: center;
	color: rgb(20,20,20);
}
</style>

 <body>
<!--  		<div style=" border: solid 1px #fff">
 			<img class="woDeTiXingImg" src="./wodetixing.png">
 			<div class="woDeTiXingTxt">我有提醒</div>
 		</div> -->

	<div style=" background-color: #fff;">
        <table style="width: 100%; margin-top: 2em;">

			<tr style=" background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0,#f86758), color-stop(1, #a1090a));
			background-image: -moz-linear-gradient(top, #f86758, #a1090a);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f86758', endColorstr='#a1090a', GradientType='0'); 
			color: rgb(243,243,243); text-shadow: 0em 0.1em 0.1em #000;
			 height: 2em; font-size: 2.2em; font-weight: bold; white-space:nowrap; ">
				<td class="taskStyle tdBorder" style=" height: 2em; color: #fff">客户</td>
				<td class="contentStyle" style="height: 2em; ">评价</td>

			</tr>

			<tr class="trContent">
				<td class="tdBorder">1</td>
				<td style=" border-left: none;color: rgb(20,20,20);">
					好评。三万元存款不是太高的要求,我吧房门钥匙存在这里了,省得没带钥匙着急
				</td>

			</tr>

			<tr class="trContent">
				<td class="tdBorder">2</td>
				<td style="color: rgb(20,20,20);">好评。刚买了房,房本存在这里。</td>

			</tr>

			<tr class="trContent">
				<td class="tdBorder">3</td>
				<td style="color: rgb(20,20,20);">好评。虽然没有用也不知道存什么值钱的东西</td>

			</tr>
		</table>
	</div>

 </body>
 </html>