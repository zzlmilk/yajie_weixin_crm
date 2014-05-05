<?php

include_once '../include.php';

header("Content-type:text/html;charset=utf-8");


if (isset($_GET['login'])) {

    session_unset();

    echo '<script type="text/javascript">window.location="' . WebSiteUrl . '";</script>';
}

if (isset($_POST['user'])) {

    $admin = new adminModel();

    $ad['account'] = $_POST['user'];

    $ad['account_password'] = $_POST['password'];

    $admin->initialize($ad);




    if ($admin->vars_number > 0) {

        $souce = $admin->vars['compang_id'];

        $company = new companyModel();

        $company->initialize('company_id = ' . $souce);

        $token = $company->vars['company_token'];

        $admin->vars['last_time'] = date('Y-m-d H:i:s');

        $admin->updateVars();

        $_SESSION['weixin_crm_user_id'] = $admin->vars['admin_id'];

        $_SESSION['user_name'] = $admin->vars['admin_name'];


        $_SESSION['sorce'] = $token;






        echo '<script type="text/javascript">window.location="' . WebSiteUrl . '";</script>';
    } else {
        echo '<script type="text/javascript">alert("用户名或密码错误！");window.location="' . WebSiteUrl . '";</script>';
    }
}
?>