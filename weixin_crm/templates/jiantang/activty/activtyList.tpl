<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link href="{$WebSiteUrl}/css/minimal/blue.css" rel="stylesheet">
<link href="{$WebSiteUrl}/css/crm_table_style.css" rel="stylesheet">
<style>
    body{
        overflow-x: hidden;
    }
    .userMangerTitle{
        color: rgb(91,91,91);
        font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }

    .sortBar{
        width: auto;
        margin-left: 25px;
        height: 25px;
        line-height: 0px;
        margin-right: 45px;
        /*        margin: 0 auto;*/
    }
    table tr>th{
        text-align: center;
        background-color: #eee;
    }
    table tr>td{
        text-align: center;
        vertical-align:middle !important;
        border-bottom-color: #D5E3E7 !important;
    }
    table tr:nth-of-type(even){
        background-color: #F9FCFD;
    }
    .selectText{
        height: 32px;
        border-radius:0px; 
        border: #c5c5c5 solid 1px;
        box-shadow: 0px 2px 2px #888 inset; 
        padding-left: 10px;
        width: 224px;
    }
    .selectBar{
        padding-left: 25px;
    }
</style>
<div class="navBarStyle">
    当前位置：任务管理 > 活动报名详情
</div>
<div style="height: 51px;">

     <div style="position: relative;left: 23px; top: 4px;"><a href="{$WebSiteUrl}/pageredirst.php?action=activty&functionname=activty"><button class="btn btn-primary">返回</button></a></div>
</div>
   
<div class="dataArea">
    <table class="table table-bordered ">
        <tr><th style="width: 51px;"></th><th  style="width: 121px;">姓名</th><th style="width: 185px;">电话</th><th style="width: 150px;">报名时间</th></tr>
        {foreach from=$userInfo item=userInfo1 key=key}
            <tr>
                <td>{$key+1}</td>
                <td>{$userInfo1.real_name}</td>
                <td class="userPhone">{$userInfo1.user_phone}</td>
                <td>{$userInfo1.apply_time|date_format:"%Y-%m-%d"}</td>
                

            </tr>
        {/foreach}
    </table>
</div>
<div class="pageHeight"></div>
<div class="pageStyle">{$pages}</div> 
<script src="{$WebSiteUrl}/js/jquery-1.9.1.js"></script>
<script src="{$WebSiteUrl}/js/rexexTest.js"></script>
<script src="{$WebSiteUrl}/js/icheck.min.js"></script>
<script>

    $(".userPhone").each(function(){
var phoneNumber= $(this).html();
var changeValue="";
changeValue=phoneNumber.substr(0,3)+"-"+phoneNumber.substr(3,3)+"-"+phoneNumber.substr(6);
$(this).html(changeValue);
  
});

</script>