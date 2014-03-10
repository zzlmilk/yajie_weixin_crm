<?php /* Smarty version Smarty-3.0-RC2, created on 2014-03-04 03:28:03
         compiled from "/web/www/wchatplatform/templates/Company/more.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17086739553154843e448b3-52237047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de06eb757d6173c870cc25efff450d12b1c35022' => 
    array (
      0 => '/web/www/wchatplatform/templates/Company/more.tpl',
      1 => 1393903641,
    ),
  ),
  'nocache_hash' => '17086739553154843e448b3-52237047',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html><head>
    <meta charset="utf-8">
    <title>客户关系管理</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/dist/ratchet.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company//dist/ratchet-theme-ios.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/css/app.css">
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/company/dist/ratchet.js"></script>
  </head>
  <body>
    <header class="bar bar-nav">
      <a class="icon icon-refresh pull-right"></a>
      <h1 class="title" style=''>客户关系管理</h1>
    </header>
    
   <!--  <div class="bar bar-footer">
      <a class="icon icon-compose pull-right" href="#composeModal"></a>
      <small class="updated-text">Updated just now</small>
    </div> -->


    <div class="content">
      <h5 class="content-padded">客户信息</h5>
      <ul class="table-view">
        <li class="table-view-cell media">
          <a class="push-right" href="http://112.124.25.155/wchatplatform?a=company&v=userInfo" data-transition="slide-in">
            <span class="media-object icon icon-pages pull-left"></span>
            <div class="media-body">
              基本信息
            </div>
          </a>
        </li>
        <li class="table-view-cell media">
          <a class="push-right" href="http://112.124.25.155/wchatplatform?a=company&v=tezheng" data-transition="slide-in">
            <span class="media-object icon icon-person pull-left"></span>
            <div class="media-body">
              喜欢特征
            </div>
          </a>
        </li>
        <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
            <span class="media-object icon icon-star-filled pull-left"></span>
            <div class="media-body">
                 行为特征

            </div>
          </a>
        </li>
        <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
            <span class="media-object icon icon-trash pull-left"></span>
            <div class="media-body">
              社会关系
            </div>
          </a>
        </li>
      </ul>

      <h5 class="content-padded">业务列表</h5>
      <ul class="table-view">
        <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
            <span class="media-object icon icon-more pull-left"></span>
            <div class="media-body">
              业务概要
            </div>
          </a>
        </li>
        <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
            <span class="media-object icon icon-more pull-left"></span>
            <div class="media-body">
              客户指标
            </div>
          </a>
        </li>
         <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
            <span class="media-object icon icon-more pull-left"></span>
            <div class="media-body">
              账户信息
            </div>
          </a>
        </li>

        <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
            <span class="media-object icon icon-more pull-left"></span>
            <div class="media-body">
              交易信息
            </div>
          </a>
        </li>
      </ul>

       <h5 class="content-padded">列表</h5>

       <ul class="table-view">
        <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
            <span class="media-object icon icon-more pull-left"></span>
            <div class="media-body">
              客户信用
            </div>
          </a>
        </li>
        <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
            <span class="media-object icon icon-more pull-left"></span>
            <div class="media-body">
              风险
            </div>
          </a>
        </li>
         <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
            <span class="media-object icon icon-more pull-left"></span>
            <div class="media-body">
              风险承受
            </div>
          </a>
        </li>

        <li class="table-view-cell media">
          <a class="push-right" href="inbox.html" data-transition="slide-in">
            <span class="media-object icon icon-more pull-left"></span>
            <div class="media-body">
              关系维护
            </div>
          </a>
        </li>
      </ul>

    </div>