<?php

$database = array(
    'admin' => array('DBNAME' => 'weixin', 'DBHOST' => '127.0.0.1', 'USER' => 'root', 'PASSWORD' => '123456'),
    'company' => array('DBNAME' => 'weixin_company', 'DBHOST' => '127.0.0.1', 'USER' => 'root', 'PASSWORD' => '123456'),
    'inhouse' => array('DBNAME' => 'weixin_inhouse', 'DBHOST' => '127.0.0.1', 'USER' => 'root', 'PASSWORD' => '123456'),
    'jiantang' => array('DBNAME' => 'weixin_jiantang', 'DBHOST' => '127.0.0.1', 'USER' => 'root', 'PASSWORD' => '123456')
);

$_ENV['database'] = $database;
?>