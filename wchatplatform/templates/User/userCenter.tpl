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
    <header class="bar bar-nav">
      <!-- <a class="icon icon-refresh pull-right" style='color: white;'></a> -->
      <h1 class="title" style=''>会员中心</h1>
    </header>
    
   <!--  <div class="bar bar-footer">
      <a class="icon icon-compose pull-right" href="#composeModal"></a>
      <small class="updated-text">Updated just now</small>
    </div> -->


    <div class="content">
     
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
                 兑换信息
            </div>
          </a>
        </li>
        <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
           <!--  <span class="media-object icon icon-trash pull-left"></span> -->
            <div class="media-body">
              会员健康结果
            </div>
          </a>
        </li>

         <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
           <!--  <span class="media-object icon icon-trash pull-left"></span> -->
            <div class="media-body">
              问卷结果
            </div>
          </a>
        </li>
      </ul>


     

    </div>