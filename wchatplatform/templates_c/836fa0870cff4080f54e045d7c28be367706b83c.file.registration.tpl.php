<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-17 15:08:37
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/User/registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:754872557534f7df5872722-87584828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '836fa0870cff4080f54e045d7c28be367706b83c' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/User/registration.tpl',
      1 => 1397718514,
    ),
  ),
  'nocache_hash' => '754872557534f7df5872722-87584828',
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


       <title>用户签到</title>
    </head>

      <script>

        $(function(){

          $("#regClick").click(function(event) {
            $("#form1").submit();
          });
        })
      </script>

    <style>
        body{
            Font-size=62.5%;
             background-color: rgb(243,237,227);
        }

        .regWarp{

          /*border: solid 1px red;*/
        }
        .regTextStyle{
          font-weight: bold; font-size: 1.2em;
/*          border-right: solid 1px rgb(177,96,210); 
          padding-right: 8%;*/

        }
    </style>

    <boby>
        
      <div class="regWarp">

        <form class=""  name='form1' id='form1' method='post' role="form" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=company&a=user&v=registrationAction">

          <?php if ($_smarty_tpl->getVariable('info')->value['res']==0){?>
          <input type='hidden' name='open_id' id='open_id' value='<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>
          <div style=" width: 50%; margin: 0 auto; margin-top: 2em;">
            <ul class="nav nav-pills nav-stacked" id = "regClick">
              <li class="active">
                <a href="#">
                  <span class="badge pull-right" style="font-weight: bold; font-size: 1.2em;">
                    <b class="numberDate"><?php echo $_smarty_tpl->getVariable('info')->value['day'];?>
</b>天</span>
                    
                    <b class="regTextStyle">&nbsp;签 到</b>
                </a>
              </li>
            </ul>
          </div>

           <?php }else{ ?>


          <input type='hidden' name='open_id' id='open_id' value='<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>
          <div style=" width: 50%; margin: 0 auto; margin-top: 2em;  background-color: #ccc;">
            <ul class="nav nav-pills nav-stacked " >
              <li class=" disabled" >
                <a href="#">
                  <span class="badge pull-right" style="font-weight: bold; font-size: 1.2em;">
                    <b class="numberDate"><?php echo $_smarty_tpl->getVariable('info')->value['day'];?>
</b>天</span>
                    
                    <b class="regTextStyle" style='color: white;'>&nbsp;已签到</b>
                    
                  
                </a>
              </li>
            </ul>
          </div>

           <?php }?>

        </form>

      </div>

    </boby>

    
   
</html>
