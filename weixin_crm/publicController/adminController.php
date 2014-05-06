<?php

class adminController {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('admin');
    }

    public function admin() {
        //  $_ENV['smarty']->assign('registrationNumber', $registrationValue);
        $_ENV['smarty']->display('admin');
    }

    public function setAccount() {
        //  $_ENV['smarty']->assign('registrationNumber', $registrationValue);
        $messageString = "1";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["oldPassword"]) && isset($_POST["newPassword"])) {
                $oldPassword = $_POST["oldPassword"];
                $newPassword = $_POST["newPassword"];
                $adminModel = new adminModel();
                $adminModel->initialize("admin_id=" . $_SESSION["weixin_crm_user_id"]);
                $adminData = $adminModel->vars;
                if ($oldPassword == $adminData["account_password"]) {
                    $adminModel->update("account_password='$newPassword'");
                    $messageString = "您的密码修改成功";
                } else {
                    $messageString = "您当前密码不正确";
                }
            } else {
                $messageString = "密码不能为空";
            }
        }
        $_ENV['smarty']->assign('messageString',$messageString);
        $_ENV['smarty']->display('setAccount');
    }

}

?>
