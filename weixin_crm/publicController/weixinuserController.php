<?php

class weixinuserController  {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('weixinuser');
    }

    public function weixinuser() {
      //  $_ENV['smarty']->assign('registrationNumber', $registrationValue);
        $_ENV['smarty']->display('weixinuser');
    }

}

?>
