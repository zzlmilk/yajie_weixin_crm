<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-20 10:01:28
         compiled from "/Users/Lev/Sites/yajie_weixin_crm/wchatplatform/templates/Test/ativating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2049764671532abc78698263-15156339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3741fe7af6be1837ee1b7958185218f13f8789bf' => 
    array (
      0 => '/Users/Lev/Sites/yajie_weixin_crm/wchatplatform/templates/Test/ativating.tpl',
      1 => 1395309685,
    ),
  ),
  'nocache_hash' => '2049764671532abc78698263-15156339',
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


       <title>用户激活</title>
    </head>
    <script>

    $(function(){

        $("#activatNumber").keyup(function() {
        var value = $("#activatNumber").val();
        var leng = value.length;
            if(leng > 2){
                $("#goActivat").removeAttr("disabled");
            }
        });


        $("#goActivat").click(function() {
            // 添加正则验证        

        });
        

    })
    </script>


    <style>
        body{
            Font-size=62.5%;
             background-color: rgb(243,237,227);
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
                <input type="tel"  class="form-control phoneNumberStyle" id="phoneNumber" placeholder="请输入手机号码">
            </div>
            <button type="submit" class="btn btn-info getCaptcha">获取激活码</button>
    </div>
    <div style=" margin-top: 2em;">
            <div class="form-group">
                <input type="tel" class="form-control phoneNumberStyle" value="" id="activatNumber" placeholder="请输入激活码">
            </div>

            <button type="submit" id="goActivat" class="btn btn-primary ativating" disabled="disabled">马上激活</button>
    </div>
        </div>

    </boby>

    
   
</html>
