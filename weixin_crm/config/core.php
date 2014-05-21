<?php

/**
 * 数据库 环境变量 配置
 */
include_once 'database.php';


$sorce = (!empty($_SESSION['weixin_crm_source'])) ? $_SESSION['weixin_crm_source'] : 'admin';

$_ENV['DBNAME'] = $_ENV['database'][$sorce]['DBNAME'];

$_ENV['USER'] = $_ENV['database'][$sorce]['USER'];

$_ENV['PASSWORD'] = $_ENV['database'][$sorce]['PASSWORD'];

$_ENV['DBHOST'] = $_ENV['database'][$sorce]['DBHOST'];

?>