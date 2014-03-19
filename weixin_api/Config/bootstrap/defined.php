<?php

/**
 * 路径定义
 */
defined('ROOT_DIR') or define('ROOT_DIR', dirname($_SERVER['SCRIPT_FILENAME']) . '/');

defined('WebSiteName') or define('WebSiteName', 'cloudWeiXin');

defined('ModelName') or define('ModelName', 'Model');

defined('ControllerName') or define('ControllerName', 'Controllers');

defined('Logs') or define('Logs', 'Logs');

defined('Config') or define('Config', 'Config');

defined('apiLog') or define('apiLog', ROOT_DIR . Logs . '/Info/');

defined('LOG_FILE_SIZE') or define('LOG_FILE_SIZE', 2097152);// 日志文件大小限制

defined('LOG_STATE') or define('LOG_STATE', 0) ;  // 是否开启日志  0为开启 1 为关闭

defined('URL_PATHINFO_DEPR') or define('URL_PATHINFO_DEPR', '/');

defined('URL_MODEL') or define('URL_MODEL', '1'); //url模式 0为默认模式  1 为 pathinfo模式

defined('URL_PATHINFO_FETCH') or define('URL_PATHINFO_FETCH','ORIG_PATH_INFO,REDIRECT_PATH_INFO,REDIRECT_URL');
/**
 * 关闭报错信息 把报错信息存储到错误文件中
 */
ini_set("display_errors", 1);
ini_set("log_errors", "On");
ini_set("error_log", ROOT_DIR . Logs . '/Error/error.log');

defined('DBNAME') or define('DBNAME','weixin_company');

defined('USER') or define('USER', 'root');

defined('PASSWORD') or define('PASSWORD', '123456');

defined('DBHOST') or define('DBHOST', '127.0.0.1');


defined('Develop') or define('Develop', 1)
?>
