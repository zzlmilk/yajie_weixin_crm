<?php

$database = array(

	'admin'=>array('DBNAME'=>'weixin','DBHOST'=>'localhost','USER'=>'root','PASSWORD'=>'123456'),

	'company'=>array('DBNAME'=>'weixin_company','DBHOST'=>'localhost','USER'=>'root','PASSWORD'=>'123456')


	// 'admin'=>array('DBNAME'=>'weixin','DBHOST'=>'localhost','USER'=>'root','PASSWORD'=>''),

	// 'company'=>array('DBNAME'=>'weixin_company','DBHOST'=>'localhost','USER'=>'root','PASSWORD'=>'')

);

$_ENV['database'] = $database;

?>