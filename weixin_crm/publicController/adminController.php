<?php

class adminController  {

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
        $_ENV['smarty']->display('setAccount');
    }

}

?>
