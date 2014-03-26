<?php

class registrationController implements registration {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('registration');
    }

    public function registrationCount() {
        $nowDay=date("Y-m-d");
        $nowDay=$nowDay." 00:00";
        $todayStart=  strtotime($nowDay);
        $todayEnd=86399+$todayStart;
        $registrationCount=new userRegistrationRecordModel();
        $registrationCount->initialize("record_time between $todayStart and $todayEnd");
        $registrationValue=$registrationCount->vars_number;
        $_ENV['smarty']->assign('registrationNumber', $registrationValue);
        $_ENV['smarty']->display('registrationCount');
    }

}

?>
