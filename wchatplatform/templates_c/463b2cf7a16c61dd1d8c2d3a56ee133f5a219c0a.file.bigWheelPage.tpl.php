<?php /* Smarty version Smarty-3.0-RC2, created on 2014-04-02 18:11:10
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/templates/Game/bigWheelPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:394115202533be23ef3fc35-59437135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '463b2cf7a16c61dd1d8c2d3a56ee133f5a219c0a' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/templates/Game/bigWheelPage.tpl',
      1 => 1396433177,
    ),
  ),
  'nocache_hash' => '394115202533be23ef3fc35-59437135',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<!-- saved from url=(0074)http://www.apiwx.com/index.php?ac=alw&c=o7MB9ji5fQRsE0ZoVAMU7SlnRyMI&tid=5 -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta name="description" content="乐享微信">


        <!-- 最新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css"> -->

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <title>幸运大转盘抽奖</title>
        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/script/giftAward.js"></script>
        <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/bigWheelFiles/activity-style.css" rel="stylesheet" type="text/css">

        <script type="text/javascript">



        </script>


    </head>

    <body class="activity-lottery-winning" id='bobyGame'>

        <input type='hidden' name='open_id' id='open_id' value='<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>
        <div class="main">
            <div id="outercont">
                <div id="outer-cont">
                    <div id="outer">
                        <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/bigWheelFiles/activity-lottery-1.png" width="225px"></div>
                </div>
                <div id="inner-cont">
                    <div id="inner">
                        <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/bigWheelFiles/activity-lottery-2.png"></div>
                </div>
            </div>
            <div class="content">

            </div>



        </div>
        <script type="text/javascript">

            var gift_id;
            var webUrl = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
';
            $(function() {
                window.requestAnimFrame = (function() {
                    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(callback) {
                        window.setTimeout(callback, 1000 / 60)
                    }
                })();
                var totalDeg = 360 * 3 + 0;
                var steps = [];

                var prizeDeg = [6, 126, 246];

                var lostDeg = [];

                var prize, sncode;
                var count = 0;
                var now = 0;
                var a = 0.01;
                var outter, inner, timer, running = false;

                function countSteps() {
                    var t = Math.sqrt(2 * totalDeg / a);
                    var v = a * t;
                    for (var i = 0; i < t; i++) {
                        steps.push((2 * v * i - a * i * i) / 2)
                    }
                    steps.push(totalDeg)
                }

                function step() {
                    outter.style.webkitTransform = 'rotate(' + steps[now++] + 'deg)';
                    outter.style.MozTransform = 'rotate(' + steps[now++] + 'deg)';
                    if (now < steps.length) {
                        requestAnimFrame(step)
                    } else {
                        running = false;
                        setTimeout(function() {
                            if (prize != null) {
                                $.ajax({
                                    url: webUrl + "?g=company&a=game&v=getGameAward",
                                    type: "get",
                                    data: {
                                        gift_id: prize,
                                        open_id: $('#open_id').val(),
                                        gift_type:1,
                                    },
                                    success: function(res) {


                                        $('#bobyGame').append(res);
                                        $('#myModal').modal();

                                    },
                                })

                            } 
                        }, 200)
                    }
                }

                function start(deg) {
                    deg = deg || lostDeg[parseInt(lostDeg.length * Math.random())];
                    running = true;
                    clearInterval(timer);
                    totalDeg = 360 * 3 + deg;
                    steps = [];
                    now = 0;
                    countSteps();
                    requestAnimFrame(step)
                }
                window.start = start;
                outter = document.getElementById('outer');
                inner = document.getElementById('inner');
                i = 10;
                $("#inner").click(function() {
                    if (running)
                        return;
                    $.ajax({
                        url: webUrl + "?g=company&a=game&v=getBigWheel",
                        dataType: "json",
                        data: {
                        },
                        beforeSend: function() {
                            running = true;
                            timer = setInterval(function() {
                                i += 5;
                                outter.style.webkitTransform = 'rotate(' + i + 'deg)';
                                outter.style.MozTransform = 'rotate(' + i + 'deg)'
                            }, 1)
                        },
                        success: function(data) {

                            gift_id = data.gift_id;

                            var temp = (parseInt(gift_id) - 1) * 30 + 6;

                            lostDeg.push(temp);


                            prize = gift_id;

                            start()
                            running = false;
                            count++
                        },
                        error: function() {
                            prize = null;
                            start();
                            running = false;
                            count++
                        },
                        timeout: 4000
                    })
                })
            });
        </script>
    </body></html>