<html><head>
        <meta charset="utf-8">
        <title>会员中心</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="{$WebSiteUrlPublic}/user/dist/ratchet.css">
        <link rel="stylesheet" href="{$WebSiteUrlPublic}/user/dist/ratchet-theme-ios.css">
        <link rel="stylesheet" href="{$WebSiteUrlPublic}/user/css/app.css">
        <script src="{$WebSiteUrlPublic}/dist/ratchet.js"></script>
        <style>
            body{
                Font-size=62.5%;
            }
            .round_photo{
                width:100%;
                height: auto;
                border:1px solid #ddddde;
                -moz-border-radius: 59px;
                -webkit-border-radius: 59px;
                border-radius:59px;

            }
            .siteClass{

                color: rgb(128,128,128);
            } 
            .graph{  

                width: 0;     height: 0;     border-bottom: 38px solid rgb(70,140,200);  

                border-left: 41px solid transparent;

            }  

        </style>
    </head>
    <body>
        <!--    <header class="bar bar-nav">
             <a class="icon icon-refresh pull-right" style='color: white;'></a>
             <h1 class="title">会员中心</h1>
           </header> -->

        <!--  <div class="bar bar-footer">
           <a class="icon icon-compose pull-right" href="#composeModal"></a>
           <small class="updated-text">Updated just now</small>
         </div> -->




        <div class="content"  style='background-color: rgb(243,237,227);'>


            <div style='  width: 100%; background-color: rgb(255,255,247);position: relative;'>

                <div style='height: 0.2em;width: 100%;'>&nbsp;</div>


                <div style=' width: 18%;'>
                    <img src='{$userinfo.weixin_user.headimgurl}' class='round_photo'>
                </div>



                <div style=' width: 66%; overflow: hidden; position: absolute; left: 20%; top: 5%;'>

                    <div style='margin-top: 4%;  '>
                        <span style='font-size:15px; display: inline-block; width: 98%; height: 4%;  '>{$userinfo.weixin_user.nickname}</span>
                    </div>
                    <div class='siteClass' style='font-size:12px;'>Tel:{$userinfo.user.user_phone}</div>



                </div>

                <div style='position: absolute; top: 48%; left: 90%; width: 10%;' >

                    <img src='{$WebSiteUrlPublic}/image/edit.png' style=" width: 100%">
                </div>

                <div onclick='alert(1234)' style=' cursor: pointer; position: absolute;  width: 4%; left: 95%; top: 74%; height: 20%;'>

                    &nbsp;
                </div>

            </div>
            <ul class="table-view" style='clear:both;'>
                <li class="table-view-cell media">
                    <a class="push-right"   data-transition="slide-in">
                        <!-- <span class="media-object icon icon-person pull-left"></span> -->
                        <div class="media-body" onclick='window.location.href = "{$websiteUrl}?g={$model}&a=user&v=userInfo&open_id={$open_id}"'>
                            我的资料
                        </div>
                    </a>
                </li>
                <li class="table-view-cell media">
                    <a class="push-right" data-transition="slide-in">
                        <!--   <span class="media-object icon icon-star-filled pull-left"></span> -->
                        <div class="media-body"  onclick='window.location.href = "{$websiteUrl}?g={$model}&a=code&v=promoMessage&open_id={$open_id}"'>
                            优惠信息
                        </div>
                    </a>
                </li>
                <li class="table-view-cell media">
                    <a class="push-right" href="javascript:void(0)" data-transition="slide-in"  onclick='window.location.href = "{$websiteUrl}?g={$model}&a=user&v=userJF&open_id={$open_id}"'>
                        <!--  <span class="media-object icon icon-trash pull-left"></span> -->
                        <div class="media-body">
                            积分和消费
                        </div>
                    </a>
                </li>

                <li class="table-view-cell media">
                    <a class="push-right"  data-transition="slide-in">
                        <!--  <span class="media-object icon icon-trash pull-left"></span> -->
                        <div class="media-body"  onclick='window.location.href = "{$websiteUrl}?g={$model}&a=exchange&v=getUserExchangeRecord&open_id={$open_id}"'>
                            兑换信息
                        </div>
                    </a>
                </li>

                <li class="table-view-cell media">
                    <a class="push-right"  data-transition="slide-in">
                        <!--  <span class="media-object icon icon-trash pull-left"></span> -->
                        <div class="media-body" style=' cursor: pointer; ' onclick='window.location.href = "{$websiteUrl}?g={$model}&a=order&v=orderCheck&open_id={$open_id}"'>
                            订单信息
                        </div>
                    </a>
                </li>

                <li class="table-view-cell media">
                    <a class="push-right" href="inbox.html" data-transition="slide-in">
                        <!--  <span class="media-object icon icon-trash pull-left"></span> -->
                        <div class="media-body">
                            会员健康信息
                        </div>
                    </a>
                </li>

                <li class="table-view-cell media">
                    <a class="push-right" href="inbox.html" data-transition="slide-in">
                        <!--  <span class="media-object icon icon-trash pull-left"></span> -->
                        <div class="media-body">
                            我的任务
                        </div>
                    </a>
                </li>
            </ul>
        </div>