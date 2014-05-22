<?php




include_once 'include.php';


var_dump($_SESSION);

if (!empty($_SESSION['weixin_crm_user_id']) && $_SESSION['weixin_crm_user_id'] > 0) {

    $pageController = new homePageController();

    $pageController->homepage();
} else {

    $pageController = new loginController();

    $pageController->login();
}
?>
