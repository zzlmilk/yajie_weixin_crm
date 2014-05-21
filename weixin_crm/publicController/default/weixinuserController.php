<?php

class weixinuserController {

    public $weixinUserPage = 6;

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('weixinuser');
    }

    public function weixinuser() {
        $weixinUser = new WeiXinUserModel();
        $weixinUser->initialize();
        $weixinUserDataNumber = $weixinUser->vars_number;
        $weixinUser->addOffset(0, $this->weixinUserPage);
        $weixinUser->initialize();
        $weixinUserData = $weixinUser->vars_all;
        $_ENV['smarty']->assign('weixinUserData', $weixinUserData);
        //分页
        $url = WebSiteUrl . "/pageredirst.php?action=weixinuser&functionname=weixinUserPage";
        $page = $_ENV['smarty']->getPages($url, 1, $weixinUserDataNumber, $this->weixinUserPage);
        $_ENV['smarty']->assign('pages', $page);
        $_ENV['smarty']->display('weixinuser');
    }

    public function weixinUserPage() {
        if (isset($_GET["page"])) {
            $pageNumber = $_GET["page"];
            $weixinUser = new WeiXinUserModel();
            $weixinUser->initialize();
            $weixinUserDataNumber = $weixinUser->vars_number;
            $dateCount = $this->weixinUserPage * ($pageNumber - 1);
            $weixinUser->addOffset($dateCount, $this->weixinUserPage);
            $weixinUser->initialize();
            $weixinUserData = $weixinUser->vars_all;
            $_ENV['smarty']->assign('weixinUserData', $weixinUserData);
            $url = WebSiteUrl . "/pageredirst.php?action=weixinuser&functionname=weixinUserPage";
            $page = $_ENV['smarty']->getPages($url, $pageNumber, $weixinUserDataNumber, $this->weixinUserPage);
            $_ENV['smarty']->assign('pages', $page);
            $_ENV['smarty']->display('weixinuser');
        } else {
            $this->weixinuser();
        }
    }

    function gotoUserMessage() {

        if (!empty($_REQUEST["open_Id"])) {
            $noData = "0";
            $openId = $_REQUEST["open_Id"];
            $userModel = new userModel();
            $userModel->initialize("user_open_id = '" . $openId . "'");
            $result[0] = $userModel->vars;
            if ($result[0] == null) {
                $noData = "1"; //显示无数据页面
                $_ENV['smarty']->assign('noData', $noData);
                $this->weixinuser();
                
            } else {
                $old = date("Y", time()) - date("Y", $result[0]["birthday"]);
                $result[0]["birthday"] = $old;


                $_ENV['smarty']->setDirTemplates('user');
                $_ENV['smarty']->assign('userInfo', $result);
                
                $_ENV['smarty']->display('userList');
            }
        }
    }

}

?>
