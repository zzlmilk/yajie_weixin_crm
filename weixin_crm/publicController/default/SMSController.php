<?php

class SMSController implements SMS {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('SMS');
    }

    public function SMSindex() {
      //  $_ENV['smarty']->assign('registrationNumber', $registrationValue);
        $_ENV['smarty']->display('SMS');
    }

}

?>
