<?php /* Smarty version Smarty-3.0-RC2, created on 2014-02-20 12:25:54
         compiled from "/web/www/webAdmin//templates/merchant_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1613890580530583d2418143-72381838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda685a215acc3b03e2fb5d4b88b394a37631a13' => 
    array (
      0 => '/web/www/webAdmin//templates/merchant_info.tpl',
      1 => 1392870299,
    ),
  ),
  'nocache_hash' => '1613890580530583d2418143-72381838',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet/less" type="text/css" href="../css/manage.less" />
        <script type="text/javascript" src="../js/less-1.3.0.min.js"></script>
        <link type="text/css" href="../css/css_clear.css" rel="stylesheet" />
        <title></title>
        
        <style type="text/css">
            ul,li{margin: 0; padding: 0;width:100%;}
            .form2 dl{
                padding:0 0 0 20px;margin:0 0 10px 0;
            }
            .form2 dt {
                color: #333333;
                float: left;
                margin: 0;
                padding: 8px 0 0;
                text-align:left;
                width: 100px;
            }
            .form2 dd {
                margin-left: 100px;
                padding: 5px 0 8px 10px;

            }
            .form2 dd input[type="text"]{border:1px solid #dddddd; width:290px;padding:3px 5px;border-radius:3px;}
            .form2 dd textarea{width:340px;height:91px;font-size:12px;border:1px solid #dddddd;padding:5px;}
            a{
                margin-left: 12px;
            }
            .head_word {
                color: #1E325C;
                font-size: 14px;
                font-weight: bold;
                line-height: 40px;
            }
            #savetonext{margin:15px 0 0 127px;}
        </style>
        
        <script charset="utf-8" src="../js/jquery.js"></script>
       
        <script>
            function formSubmit(){
                var able =0;
                var array_ =["username","password"];

                var array_content =["账号","密码"];
                for(var i=0;i<array_.length;i++){
                    var name=$('#'+array_[i]).val();

                    if(name==''){

                        alert(array_content[i]+'必须填写');

                    }else{
                        
                        able++;
                        
                    }
                }

               

                if(able==2){
                    $('#form1').submit();
                }
            }
           
        </script>
        
    </head>
    <body style=" font-size: 12px;padding:0 0 80px 0;">
        <div style=" margin:18px 0 0 20px;">
            <h1 class="manager_title" style="margin:5px 0 20px 0;">商户账号配置</h1>
          
            <form action="<?php echo $_smarty_tpl->getVariable('URLHANDLER')->value;?>
/businessAccount_action.php" method="post" id="form1" name="form1" class="form2" >
                <input type="hidden" name="merchant_id" value="<?php echo $_smarty_tpl->getVariable('info_id')->value;?>
">
               
                <dl >
                    <dt>账号</dt>
                    <dd><input type="text"  name="username"    id="username"  value="<?php echo $_smarty_tpl->getVariable('infos')->value['username'];?>
"/></dd>
                    <!-- <dd><p style=" color: red; font-weight: bolder;" ></p></dd> -->
                </dl>



                <dl >
                    <dt>密码</dt>
                    <dd ><input type="text"  name="password"    id="password"  value="<?php echo $_smarty_tpl->getVariable('infos')->value['password'];?>
"/></dd>
                    <!-- <dd><p style=" color: red; font-weight: bolder;" ></p></dd> -->
                </dl>



              
               
                <input type="button" value="保存" class="important_button" name="savetonext" id="savetonext" onclick="formSubmit()">
            </form>
        </div>
    </body>
</html>
