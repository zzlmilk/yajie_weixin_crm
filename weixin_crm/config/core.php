<?php


/**
 * 数据库 环境变量 配置
 */

include_once 'database.php';

$_ENV['DBNAME'] = $_ENV['database']['admin']['DBNAME'];

$_ENV['USER'] = $_ENV['database']['admin']['USER'];

$_ENV['PASSWORD'] = $_ENV['database']['admin']['PASSWORD'];

$_ENV['DBHOST'] = $_ENV['database']['admin']['DBHOST'];

?>