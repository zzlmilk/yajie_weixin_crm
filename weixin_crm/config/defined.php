<?php


session_start();

ini_set('display_errors', '0');


define('ROOT', $_SERVER['DOCUMENT_ROOT']);


defined('PROJECT') or define('PROJECT', '/yajie_weixin_crm/weixin_crm/');

//error_reporting(E_ALL ^ E_NOTICE);

defined('ROOTPATH') or define('ROOTPATH',  ROOT . PROJECT);



defined('WebSiteUrl') or define('WebSiteUrl', 'http://localhost/yajie_weixin_crm/weixin_crm');

defined('URLHANDLER') or define('URLHANDLER', WebSiteUrl.'/publicHandler');

defined('FOOTBASIC') or define('FOOTBASIC',  ROOTPATH . 'basicClasses/');

defined('FOOTCLASS') or define('FOOTCLASS',  ROOTPATH . 'Model/');

defined('GIFTIMAGEDIR') or define('GIFTIMAGEDIR',  ROOTPATH . 'giftImages/');

defined('FOOTINTERFACE') or define('FOOTINTERFACE',  ROOTPATH . 'Interface/');

defined('FOOTFILES') or define('FOOTFILES',  ROOTPATH . '/files/');


$_ENV['file_url'] = WebSiteUrl;

include_once 'core.php';

include_once 'extends.php';

include_once 'config/handlerAuto.php';

?>