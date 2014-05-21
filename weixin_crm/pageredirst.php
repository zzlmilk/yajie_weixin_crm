<?php

require_once 'include.php';


if(empty($_SESSION['weixin_crm_user_id'])){


	header('Location:'.URLADDRESS);

	die;

}

if (!empty($_REQUEST['action'])) {
    
    $action = $_REQUEST['action'] . 'Controller';

    if (!empty($_REQUEST['functionname'])) {
        $function = $_REQUEST['functionname'];
    } else {
        $function = 'index';
    }
  
 
    $pageController = new $action();

    $pageController->$function();
}
?>
