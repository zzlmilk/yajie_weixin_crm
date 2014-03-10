<?php

require_once 'include.php';

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
