<?php

/**
 * 路径定义
 */
defined('ROOT_DIR') or define('ROOT_DIR', dirname($_SERVER['SCRIPT_FILENAME']) . '/');
defined('WebSiteName') or define('WebSiteName', 'wchatplatform');
defined('ModelName') or define('ModelName', 'Model');
defined('ControllerName') or define('ControllerName', 'Controllers');
defined('Logs') or define('Logs', 'Logs');

defined('Extends') or define('Extends', 'Extends');


defined('Config') or define('Config', 'Config');
defined('Version') or define('Version', 'v1');
defined('apiLog') or define('apiLog', ROOT_DIR . Logs . '/Info/');
defined('OauthPath') or define('OauthPath', ROOT_DIR . Config . '/oauth-php/');
defined('LOG_FILE_SIZE') or define('LOG_FILE_SIZE', 2097152);// 日志文件大小限制
defined('LOG_STATE') or define('LOG_STATE', 0) ;  // 是否开启日志  0为开启 1 为关闭
defined('URL_PATHINFO_DEPR') or define('URL_PATHINFO_DEPR', '/');

defined('URL_MODEL') or define('URL_MODEL', '0'); //url模式 0为默认模式  1 为 pathinfo模式

defined('WebSiteUrl') or define('WebSiteUrl', 'http://'.$_SERVER['HTTP_HOST'].'/'.WebSiteName);


defined('WebSiteUrlPublic') or define('WebSiteUrlPublic', 'http://'.$_SERVER['HTTP_HOST'].'/'.WebSiteName.'/public');


defined('URL_PATHINFO_FETCH') or define('URL_PATHINFO_FETCH','ORIG_PATH_INFO,REDIRECT_PATH_INFO,REDIRECT_URL');
/**
 * 关闭报错信息 把报错信息存储到错误文件中
 */
 ini_set("display_errors", 1);
 // ini_set("log_errors", "On");
 // ini_set("error_log", ROOT_DIR . Logs . '/Error/error.log');
 defined('APIURL')or define('APIURL','http://localhost/cloudWeiXin');



defined('VAR_MODULE') or define('VAR_MODULE','a');

defined('VAR_ACTION') or define('VAR_ACTION', 'v');



defined('VAR_GROUP') or define('VAR_GROUP', 'g');

?>
