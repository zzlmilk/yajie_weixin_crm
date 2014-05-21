<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <script src="{$WebSiteUrl}/js/jquery-1.7.2.min.js"></script>


        

         <script charset="utf-8" src="{$WebSiteUrl}/kindeditor/kindeditor.js"></script>



        <script charset="utf-8" src="{$WebSiteUrl}/kindeditor/lang/zh_CN.js"></script> 

        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css"> 

        <link href="{$WebSiteUrl}/css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">

        <link href="{$WebSiteUrl}/css/crm_table_style.css" rel="stylesheet">

        <script>
            var editor;
            KindEditor.ready(function(K) {
                editor = K.create('#activity_html');
            });
        </script>

        <style>
        .labelWidth{
            width: auto !important;
        }
        .inputWidth{
            width: 150px;
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


    </head>
    <body>
             <div class="navBarStyle">
    当前位置：任务管理 > 添加活动
</div>

<div id="errorMessage" class="alert alert-danger errorMessage"></div>
<div style="margin-left:15px;margin-top:15px;">
    <div style="width: 1000px; margin: 0 auto;">
        <form class="form-horizontal" action="{$WebSiteUrl}/pageredirst.php?action=activty&functionname=activtyUpdate" method="post">

            <input type='hidden' name='activity_id' id='activity_id' value='{$info.activity_id}'>
            <div class="form-group"> 
                <label  class="col-sm-2 control-label labelWidth">活动名称:</label>
                <div class="col-sm-2">
                    <input class="form-control inputWidth" type="text" value="{$info.activity_name}" name="activity_name" id="activity_name">
                </div>
            </div> 
        <!--     <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label labelWidth">活动开始时间:</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control inputWidth" value="" name="  activity_begin_time" id="activity_begin_time">
                </div>
            </div>  -->
            <div class="form-group"> 
                <label  class="col-sm-2 control-label labelWidth">结束时间:</label>
                <div class="col-sm-2">

                    <input class="form-control inputWidth " size="16" type="text" value="{$info.activity_end_time|date_format:'%Y-%m-%d'}" name='activity_end_time' id='activity_end_time' data-link-format="yyyy-mm-dd"  data-date="" data-date-format="yyyy-mm-dd "  readonly>
                
                </div>
            </div>
            <div class="form-group"> 
                <label class="col-sm-2 control-label labelWidth">活动内容</label>
               
                <div class="col-sm-2">

                <textarea  class="form-control" id="activity_html" name="activity_html" style="width:700px;height:300px;">{$info.activity_html}</textarea>

                 </div>
               
            </div>
          
            <p style=" margin-left: 85px;"><button id="addButton" class="btn btn-info">确认添加</button></p>
        </form>
    </div>
</div>
    </body>
</html>



<script src="{$WebSiteUrl}/js/rexexTest.js"></script>

<script src="{$WebSiteUrl}/js/bootstrap-datetimepicker.js"></script>

<script>

$('#activity_end_time').datetimepicker({
    language:  'fr',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
});

$("#addButton").click(function(){
    $("#errorMessage").hide();

    $("#errorMessage").html();

    var errorMessage="";

    var alertFlag=false;

    var  html = document.getElementById('activity_html').value; // 原生API
  
    html = editor.html();

    editor.sync();

    html = document.getElementById('activity_html').value; // 原生API

    if($("#activity_name").val()==""){
        errorMessage+="活动名称不能为空 <br>";

        alertFlag=true;
    }

     if($("#activity_end_time").val()==""){
        errorMessage+="活动结束时间不能为空 <br>";

        alertFlag=true;
    }

    if(html==""){
        errorMessage+="活动内容不能为空 <br>";

        alertFlag=true;
    }

    if(alertFlag){ 

        $("#errorMessage").show();

        $("#errorMessage").html(errorMessage);

        return false;
    }

   
}); 
</script>
