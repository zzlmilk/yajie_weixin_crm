<?php


ini_set('display_errors', '1');


session_start();

define('ROOT', $_SERVER['DOCUMENT_ROOT']);


defined('PROJECT') or define('PROJECT', '/yajie_weixin_crm/weixin_crm/');

//error_reporting(E_ALL ^ E_NOTICE);

defined('ROOTPATH') or define('ROOTPATH',  ROOT . PROJECT);

defined('WebSiteUrl') or define('WebSiteUrl', 'http://localhost/yajie_weixin_crm/weixin_crm');

defined('URLCONTROLLER') or define('URLCONTROLLER', WebSiteUrl.'/publicController');

defined('URLHANDLER') or define('URLHANDLER', WebSiteUrl.'/publicHandler');

defined('FOOTBASIC') or define('FOOTBASIC',  ROOTPATH . 'basicClasses/');

defined('FOOTCLASS') or define('FOOTCLASS',  ROOTPATH . 'Model/');

defined('GIFTIMAGEDIR') or define('GIFTIMAGEDIR',  ROOTPATH . 'giftImages/');


defined('FOOTCONTROLLER') or define('FOOTCONTROLLER',  ROOTPATH . 'publicController/');

defined('FOOTINTERFACE') or define('FOOTINTERFACE',  ROOTPATH . 'Interface/');

defined('FOOTFILES') or define('FOOTFILES',  ROOTPATH . '/files/');


$_ENV['file_url'] = WebSiteUrl;

if ($handle = opendir(FOOTBASIC)) {
    /* to include all files that in the class folder what a way to include classes!!! */
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..' && $file != '.svn') {
            include_once(FOOTBASIC . $file);
        }
    }
    closedir($handle);
}



if ($handle = opendir(FOOTINTERFACE)) {
    /* to include all files that in the class folder what a way to include classes!!! */
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..' && $file != '.svn') {
            include_once(FOOTINTERFACE . $file);
        }
    }
    closedir($handle);
}



if ($handle = opendir(FOOTCONTROLLER)) {
    /* to include all files that in the class folder what a way to include classes!!! */
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..' && $file != '.svn') {
            include_once(FOOTCONTROLLER . $file);
        }
    }
    closedir($handle);
}


if ($handle = opendir(FOOTCLASS)) {
    /* to include all files that in the class folder what a way to include classes!!! */
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..' && $file != '.svn') {
            include_once(FOOTCLASS . $file);
        }
    }
    closedir($handle);
}

?>