<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-14 17:57:22
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/Tpl/Inhouse/Game/activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40569609653733e02a0c337-58842377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74b364e9636188614d792ce1d45420c3fc94ccb3' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/Tpl/Inhouse/Game/activity.tpl',
      1 => 1400037397,
    ),
  ),
  'nocache_hash' => '40569609653733e02a0c337-58842377',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/yajie_weixin_crm/wchatplatform/Config/Smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
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


       <title>活动</title>
    </head>

      <script>

        $(function(){
          $("#mySign").click(function(event) {
            /* Act on the event */
            $(".bgMask").show();
          });

          $("#closeFloatWarp").click(function(event) {
            /* Act on the event */
            $(".bgMask").hide();
          });
        })
      </script>

    <style>
        body{
            Font-size=62.5%;
             background-color: rgb(243,237,227);
             height:100%;
             /*background-color: rgb(225,225,225);*/
        }

        .regWarp{

        /*  border: solid 1px red;*/
        }
/*        .titleText{
          height: 2em;
          line-height: 2em;
          font-size: 1.8em;
          color: #fff;
          text-align: center;
          background-color: rgb(47,176,200);

        }*/
        .articleTitle{
          /*border: solid 1px red;*/
          font-size: 1.2em;
          padding-left: 0.5em;
          margin-top: 0.5em;
        }
        .timeReadNumber{
          /*border: solid 1px red;*/
           color: rgb(118,118,118);
           padding-left: 0.8em;
           font-size: 1em;
        }
        .textCotent{
          width: 98%;
          margin: 0 auto;
          min-height: 10em;
          border: solid 1px rgb(204,204,204);
          background-color: #fff;
        }
        .signedNumber{

        }
        .rowOne{
          /*border: solid 1px red;*/
          font-size: 1.2em;
          overflow: hidden;
        }
        .rowtwo{
      /*    border: solid 1px red;*/
          text-align: right;
          font-size: 1.2em;
          overflow: hidden;
        }

        .bgMask{
          width: 96%;
          /*height: 40em;*/
          height: 100%;
          /*margin-left:0.3em;*/
          margin: 0 auto;
          position: relative;
          margin-top: -26em;
         
          background-color: rgba(0,0,0,0.4);
          /*position: absolute;*/
          z-index: 99999;
          /*margin-top: -25em;*/
          display: none;

        }

        .namePhoneInputStyle{
            width: 105%;
            margin: 0 auto;
            border: solid 0.1em rgb(106,106,106);
            border-radius: 0.8em;
            -moz-border-radius: 0.8em;
            -webkit-border-radius: 0.8em;
            height: 3em;
          /*margin-bottom: 0.5em;*/

        }
        .namePhoneLabelStyle{

         /* border: solid 1px red;*/
          width: 90%;
          text-indent: 0em;
          font-size: 1.2em;
          height: 2em;
          line-height: 1em;
        }
        .form-group{
          /*border: solid 1px red;*/
          margin-left: -1em;
          width: 100%;
        }
       .maskApply{
          width: 92%; 
          font-size: 1.8em; 
          height: 1.8em; 
          line-height: 0.8em; 
          margin-left: -0.8em;
          border-radius: 0.6em;
          -moz-border-radius: 0.6em;
          -webkit-border-radius: 0.6em;
       }
    </style>

    <boby>
        
      <div class="regWarp">

         <!--  <div class="titleText">活动</div> -->
          <div class="articleTitle"><?php echo $_smarty_tpl->getVariable('info')->value['activity_name'];?>
</div>
          <div class="timeReadNumber">
            <span><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('info')->value['activity_end_time'],'%m-%d');?>
</span>
            <span style=" margin-left: 1em;">阅读<?php echo $_smarty_tpl->getVariable('info')->value['read_number'];?>
</span>
          </div>

          <div class="textCotent">
             <?php echo $_smarty_tpl->getVariable('info')->value['activity_html'];?>

          </div>

          <div class="timeReadNumber">
            已有人<b><?php echo $_smarty_tpl->getVariable('info')->value['apply_number'];?>
</b>报名
          </div>

          <table class="table table-striped" style=" width: 98%; margin: 0 auto;">

            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('record')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>

             <tr>
                <td class="rowOne"><?php echo $_smarty_tpl->tpl_vars['v']->value['real_name'];?>
</td>
                <td class="rowtwo"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['apply_time'],'%m-%d');?>
</td>
              </tr>

            <?php }} ?>
          </table>

        <div style=" text-align: center; margin-top: 2em;">

          <?php if ($_smarty_tpl->getVariable('today_time')->value>$_smarty_tpl->getVariable('info')->value['activity_end_time']){?>
          <button type="button" class="btn btn-info maskApply"  style="height: 2em; font-size: 1.5em; margin: 0 auto;  width: 95%;">报名已关闭</button>

          <?php }else{ ?>

         <button type="button" class="btn btn-primary maskApply" id="mySign" style="height: 2em; font-size: 1.5em; margin: 0 auto; width: 95%;">报名</button>
     
          <?php }?>
        </div>

      </div>
          <div style=" height: 2em;"></div>

          <div class="bgMask">

            <div style=" height: 3em;"></div>
            <div style=" width: 98%; margin: 0 auto; height: 28em; margin-top: 2em; background-color: #fff">

              <div style=" height: 2.5em; font-size: 1.8em; line-height: 2.5em; color: #fff; background-color: rgb(31,36,39); text-align: center;">填写报名信息</div>


              <div style=" width: 10%; margin-left:auto;margin-right:2px; margin-top: -3.5em; text-align: right; padding-right: 1em; height: 2em; line-height: 2.5em; color: rgb(116,116,116); ">
                <span class="glyphicon glyphicon-remove" id="closeFloatWarp"></span>
              </div>


                <form action='<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=game&v=applyAction' class="form-horizontal" method='post'role="form" style=" padding-left: 1.8em; ">
                  

                  <input type="hidden" name='id' id='id' value='<?php echo $_smarty_tpl->getVariable('info')->value['activity_id'];?>
'>
                  <div class="form-group" style=" margin-top: 3em;">
                    <label for="inputEmail3" class="col-sm-2 control-label namePhoneLabelStyle">真实姓名</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control namePhoneInputStyle" id="real_name" placeholder="真实姓名" name='real_name'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label namePhoneLabelStyle" > 手机号码</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control namePhoneInputStyle" id="user_phone" name='user_phone' placeholder="手机号码">
                    </div>
                  </div>
                  <div style=" text-align: center; margin-top: 2.7em;">
                    <button id="apply_button" type="submit" class="btn btn-primary btn-sm maskApply">报名</button>
                  </div>


                </form>

            </div>


             <div style=" height: 5em;"></div>
          </div>


    </boby>

    <script type="text/javascript">


      $('#apply_button').click(function(){

          var real_name = $('#real_name').val();

          var user_phone = $('#user_phone').val();


          if(real_name == ''){

              alert('真实姓名必须填写！！！！');

              return false;
          }


          if(user_phone == ''){

            alert('手机号码必须填写！！！！');

              return false;
          }

      })

    </script>
   
</html>
