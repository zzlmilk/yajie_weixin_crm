<?php

define(FOOT_, $_SERVER['DOCUMENT_ROOT']);

//error_reporting(E_ALL ^ E_NOTICE);

ini_set('display_errors', '0');

defined('FOOT') or define('FOOT',  FOOT_ . '/weixin_crm/');

defined('WebSiteUrl') or define('WebSiteUrl', 'http://localhost/weixin_crm');

defined('URLCONTROLLER') or define('URLCONTROLLER', WebSiteUrl.'/publicController');

defined('URLHANDLER') or define('URLHANDLER', WebSiteUrl.'/publicHandler');

defined('FOOTBASIC') or define('FOOTBASIC',  FOOT_ . '/weixin_crm/basicClasses/');

defined('FOOTCLASS') or define('FOOTCLASS',  FOOT_ . '/weixin_crm/Model/');

defined('FOOTCONTROLLER') or define('FOOTCONTROLLER',  FOOT_ . '/weixin_crm/publicController/');

defined('FOOTINTERFACE') or define('FOOTINTERFACE',  FOOT_ . '/weixin_crm/Interface/');

defined('FOOTFILES') or define('FOOTFILES',  FOOT_ . '/weixin_crm/files/');

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