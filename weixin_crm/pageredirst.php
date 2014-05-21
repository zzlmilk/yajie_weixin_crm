<?php


require_once 'config/defined.php';

if (!empty($_REQUEST['action'])) {
    
    $action = $_REQUEST['action'] . 'Controller';

    if (!empty($_REQUEST['functionname'])) {
        $function = $_REQUEST['functionname'];
    } else {
        $function = 'index';
    }


    if($action != 'login'  && $function !='loginAction'){

    	if(empty($_SESSION['weixin_crm_user_id'])){

    		header('Location:'.URLADDRESS);
    	}

    }
 
    $pageController = new $action();

    $pageController->$function();
}
?>
