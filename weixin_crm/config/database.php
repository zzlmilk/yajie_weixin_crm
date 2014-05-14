<?php

$database = array(
<<<<<<< HEAD
	
	'admin'=>array('DBNAME'=>'weixin','DBHOST'=>'127.0.0.1','USER'=>'root','PASSWORD'=>''),

	'company'=>array('DBNAME'=>'weixin_company','DBHOST'=>'127.0.0.1','USER'=>'root','PASSWORD'=>'')
=======
    'admin' => array('DBNAME' => 'weixin', 'DBHOST' => '127.0.0.1', 'USER' => 'root', 'PASSWORD' => '123456'),
    'company' => array('DBNAME' => 'weixin_company', 'DBHOST' => '127.0.0.1', 'USER' => 'root', 'PASSWORD' => '123456'),
    'Inhouse' => array('DBNAME' => 'weixin_inhouse', 'DBHOST' => '127.0.0.1', 'USER' => 'root', 'PASSWORD' => '123456')
>>>>>>> e1cd46af7bd637261322422822aa922d0b301c8a
);

$_ENV['database'] = $database;
?>