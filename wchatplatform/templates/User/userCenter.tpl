<html><head>
    <meta charset="utf-8">
    <title>会员中心</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="{$WebSiteUrlPublic}/company/user/dist/ratchet.css">
    <link rel="stylesheet" href="{$WebSiteUrlPublic}/company/user/dist/ratchet-theme-ios.css">
    <link rel="stylesheet" href="{$WebSiteUrlPublic}/company/user/css/app.css">
    <script src="{$WebSiteUrlPublic}/company/dist/ratchet.js"></script>
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
     
      <ul class="table-view">
        <li class="table-view-cell media">
          <a class="push-right"   data-transition="slide-in">
            <!-- <span class="media-object icon icon-person pull-left"></span> -->
            <div class="media-body" onclick='window.location.href="{$websiteUrl}?g=company&a=user&v=userInfo"'>
              我的资料
            </div>
          </a>
        </li>
        <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
          <!--   <span class="media-object icon icon-star-filled pull-left"></span> -->
            <div class="media-body">
                 优惠信息
            </div>
          </a>
        </li>
        <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
           <!--  <span class="media-object icon icon-trash pull-left"></span> -->
            <div class="media-body">
              积分和消费
            </div>
          </a>
        </li>

         <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
           <!--  <span class="media-object icon icon-trash pull-left"></span> -->
            <div class="media-body">
              兑换信息
            </div>
          </a>
        </li>

        <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
           <!--  <span class="media-object icon icon-trash pull-left"></span> -->
            <div class="media-body">
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