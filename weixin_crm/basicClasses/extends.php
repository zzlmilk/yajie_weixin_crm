<?php

$_ENV['DBNAME'] = 'weixin';

$_ENV['USER'] = 'root';

$_ENV['PASSWORD'] = '';

$_ENV['DBHOST'] = 'localhost';

if(empty($_ENV['smarty'])){

	 // 载入  smarty 文件
	require_once FOOT . 'js/smarty.php';

	$_ENV['smarty'] = $smarty;

}


function set_dir($dir =''){

	if(!empty($dir)){

		$_ENV['smarty']->template_dir = FOOT . 'templates/'.$dir.'/';
	} else{

		$_ENV['smarty']->template_dir = FOOT . 'templates/';
	}
	

}

function set_page($page){

if(!empty($page)){

		$_ENV['display_page']= $page;
	} 

}

function display($page  = '') {

	if(!file_exists($_ENV['smarty']->template_dir)){

	    mkdir($_ENV['smarty']->template_dir);

	    chmod($_ENV['smarty']->template_dir,0777);

	}

	if(!empty($page)){

	    $_ENV['display_page'] = $page;

	}


	if(!file_exists($_ENV['smarty']->template_dir.$_ENV['display_page']. '.tpl')){
	   
	    fopen($_ENV['smarty']->template_dir.$_ENV['display_page']. '.tpl', "w+");

	}


    if($_ENV['tVar']){
            
        $_ENV['smarty']->assign($_ENV['tVar']);
    }


    // $_ENV['smarty']->assign('uname', $_SESSION['user_name']);

//	$_ENV['smarty']->assign('user_id', $_SESSION['user_id']);

	$_ENV['smarty']->assign('FOOT', FOOT);

	$_ENV['smarty']->assign('WebSiteUrl',WebSiteUrl);

	$_ENV['smarty']->assign('URLHANDLER',URLHANDLER);

	$_ENV['smarty']->assign('URLCONTROLLER',URLCONTROLLER);

	

	$_ENV['smarty']->display($_ENV['display_page']. '.tpl');
 }


 function assign($name,$value =''){

        if(is_array($name)){

            $_ENV['tVar'] = array_merge($_ENV['tVar'], $name);

        } else{

            $_ENV['tVar'][$name] = $value;
        }

    }

?>