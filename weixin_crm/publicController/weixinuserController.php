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

}

?>
