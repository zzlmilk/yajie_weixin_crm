<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-04 17:06:18
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/Game/guaguaka.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40503500533e760acddc61-84811843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b90488ff0e6caccff2154783e0a12473122c4f12' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/Game/guaguaka.tpl',
      1 => 1396602253,
    ),
  ),
  'nocache_hash' => '40503500533e760acddc61-84811843',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
    <head>
        <title>刮刮卡</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css"> 
         <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/script/giftAward.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/ggk/wScratchPad.js"></script>  
    </head>
    <body id='bobyGame'>

        <style>
            .wScratchPad3{
                display:inline-block;
                position:relative; 
                border:solid #ccc 1px;
                margin-left: 5%;
                margin-right: 5%;
                margin-top: 3%;
                width: 90%;
                height: 20em;
                overflow: hidden;

            }


        </style>
        <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('websiteurl')->value;?>
" id="apiRoute" >
        <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
" id="open_id" >
        <div id="wScratchPad3" class="wScratchPad3"></div>
        
        <script type="text/javascript">
            
             var webUrl = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
';
             
             
            
            //初始化获奖
            var picTitle = "xx.jpg";
            var win = $(window).width();
            win = win * 0.9;
            var lotteryRank = "";
            var alertFlag = true;
            var giftId =<?php echo $_smarty_tpl->getVariable('ScratchCardResults')->value['gift_id'];?>
;
            var requestUrl = $("#apiRoute").val() + "/?g=company&a=game&v=guaguakaGetLottery";
            switch (giftId) {
                case "11":
                case 11:
                    picTitle = "1.jpg";
                    lotteryRank = 1;
                    break;
                case "12":
                case 12:
                    picTitle = "2.jpg";
                    lotteryRank = 2;
                    break;
                case "13":
                case 13:
                    picTitle = "3.jpg";
                    lotteryRank = 3;
                    break;
                default:
                    lotteryRank = 0;
                    picTitle = "xx.jpg";
                    break;
            }
            //再试一次
            $("#reloadPage").click(function() {
                location.reload();
            });
          

          
//刮刮卡

            var WebSiteUrlPublic = '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
';
            $(function() {
                $("#wScratchPad3").wScratchPad({
                    width: 786,
                    cursor: '',
                    image: WebSiteUrlPublic + '/company/ggk/' + picTitle,
                    scratchUp: function(e, percent) {

                        console.log(percent);
                        if (alertFlag) {
                            var cent = 786;
                            var changeSize = win / cent;
                            var changeSize = (changeSize / 0.4) * 10;
                            if (percent > changeSize) {
                                
                                 $.ajax({
                                    url: webUrl + "?g=company&a=game&v=getGameAward",
                                    type: "get",
                                    data: {
                                        gift_id: giftId,
                                        open_id: $('#open_id').val(),
                                        gift_type:2,
                                       
                                    },
                                    success: function(res) {


                                        $('#bobyGame').append(res);
                                        $('#myModal').modal();

                                    },
                                })
                                this.clear();
                            }
                        }
                    }
                });
            })
        </script>
    </body>
</html>