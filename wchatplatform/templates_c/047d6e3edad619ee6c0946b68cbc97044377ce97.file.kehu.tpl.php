<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-01 10:42:41
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/Company/kehu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1034474545533a27a1f1add4-72415192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '047d6e3edad619ee6c0946b68cbc97044377ce97' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/Company/kehu.tpl',
      1 => 1394443614,
    ),
  ),
  'nocache_hash' => '1034474545533a27a1f1add4-72415192',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

 <!DOCTYPE> 
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
     <title>客户关系管理</title>
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
/*  border: solid 1px #fff;*/
/*  cellspacing:-0.2em;*/
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



/*////////////////////*/
.txtStyle{
width: 65%;
height: 2.4em;
border-color: rgb(72,72,72);
margin-left: 0.8em;
border: solid 0.05em rgb(72,72,72);
margin-top: -0.2em;
font-size: 4em;
border-radius: 0.3em;
-moz-border-radius: 0.3em;
-webkit-border-radius: 0.3em;
}
.btnStyle{
/*width: 5.1em;
height: 1.9em;
font-size: 5em;
font-weight: bold;
border-radius: 0.3em;
-webkit-border-radius: 0.3em;
-moz-border-radius: 0.3em;
white-space:nowrap; 
text-indent: -0.4em;
background-color: #c11214;
color: #fff;
border: none;
 margin-left: 0.5em;*/



}


.btnWarp{
height: 9.5em;
float: right;
background-color: #a1090a;
border-radius: 0.5em;
-webkit-border-radius: 0.5em;
-moz-border-radius: 0.5em;
margin-right: 1em;
margin-top: -1em;

}
.btnStyle{
width: 5em;
height: 1.8em;
text-indent: -0.3em;
border-radius: 0.2em;
-webkit-border-radius: 0.2em;
-moz-border-radius: 0.2em;
border: none;
white-space:nowrap; 

/*text-indent: -1em;*/
background-color: rgb(192,15,24);
color: #fff;
font-weight: bolder;
font-size: 5em;

}
#clientInfo::-webkit-input-placeholder {
  color: rgb(118,118,118);


}
#clientInfo:-moz-placeholder {
  color: rgb(118,118,118);

}
#clientInfo:-ms-input-placeholder {
  color: rgb(118,118,118);

}​

</style>

 <body>
<!--      <div style=" border: solid 1px #fff">
      <img class="woDeTiXingImg" src="./wodetixing.png">
      <div class="woDeTiXingTxt">我有提醒</div>
    </div> -->

    <div style="margin-top: 10em;">
      <input type="text" id="clientInfo" class="txtStyle" name="clientInfo" value="" 
      placeholder="输入客户姓名，身份证号等信息">


           <div class="btnWarp">
            <button type="button" class="btnStyle" onclick='window.location.href="http://112.124.25.155/wchatplatform?a=company&v=more";'>查询客户</button>
          </div>


    </div>





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
        <td style=" border-left: none;"><a>月度拜访客户</a></td>
        <td style=" border:none;" class=" timeStyl">30天</td>
        <td class=" timeStyl">45%</td>
      </tr>

      <tr class="trContent">
        <td class="tdBorder">346</td>
        <td ><a>李连杰地址更正</a></td>
        <td class=" timeStyl">30天</td>
        <td class=" timeStyl">100%</td>
      </tr>

      <tr class="trContent">
        <td class="tdBorder">347</td>
        <td><a>竞争消息录入</a></td>
        <td class=" timeStyl">30天</td>
        <td class=" timeStyl">0%</td>
      </tr>

      <tr class="trContent">
        <td class="tdBorder">348</td>
        <td><a>月度拜访客户神盾舰</a></td>
        <td class=" timeStyl">30天</td>
        <td class=" timeStyl">50%</td>
      </tr>

      <tr class="trContent">
        <td class="tdBorder">349</td>
        <td><a>争取客户理财</a></td>
        <td class=" timeStyl">30天</td>
        <td class=" timeStyl">0%</td>
      </tr>
    </table>


<!--         <table style="width: 100%; margin-top: 5em;">

      <tr style=" background:#fff; height: 2em; font-size: 2.2em; font-weight: bold; white-space:nowrap; ">
        <td class="nameStyle" style=" height: 2em; text-indent: 0.5em;">名称</td>
        <td class="contentStyle" style="height: 2em; text-indent: 0.5em;">内容</td>
      </tr>

      <tr class="trContent">
        <td class="tdBorder">客户数目</td>
        <td style=" border-left: none; text-indent: 0.5em;"><a>178户</a></td>
      </tr>

      <tr class="trContent">
        <td class="tdBorder">企业客户</td>
        <td style=" text-indent: 0.5em;"><a>注册资金规模均值500万</a></td>
      </tr>

      <tr class="trContent">
        <td class="tdBorder">个人客户</td>
        <td style=" text-indent: 0.5em;"><a>年龄平均40岁 男30户 女20户</a></td>
      </tr>

      <tr class="trContent">
        <td class="tdBorder">户龄</td>
        <td style=" text-indent: 0.5em;"><a>范围0.6-10年 平均6年</a></td>
      </tr>

      <tr class="trContent">
        <td class="tdBorder">满意度</td>
        <td style=" text-indent: 0.5em;"><a>李连杰有问题</a></td>
      </tr>
    </table>
 -->    <div style="height: 2.4em; width: 100%;"></div>
  </div>

 </body>
 </html>