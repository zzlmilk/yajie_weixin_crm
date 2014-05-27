<?php



error_reporting(E_ERROR | E_WARNING | E_PARSE);
include_once 'include.php';

if (!empty($_SESSION['weixin_crm_user_id']) && $_SESSION['weixin_crm_user_id'] > 0) {

    $pageController = new homePageController();

    $pageController->homepage();
} else {

    $pageController = new loginController();

    $pageController->login();
}
?>
