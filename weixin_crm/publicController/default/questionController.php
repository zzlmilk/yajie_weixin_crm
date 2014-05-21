<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of questionController
 *
 * @author Administrator
 */
class questionController implements question {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('question');
    }

    public function questionCount() {
//        $nowDay = date("Y-m-d");
//        $nowDay = $nowDay . " 00:00";
//        $todayStart = strtotime($nowDay);
//        $todayEnd = 86399 + $todayStart;
//        $registrationCount = new userRegistrationRecordModel();
//        $registrationCount->initialize("record_time between $todayStart and $todayEnd");
//        $registrationValue = $registrationCount->vars_number;
      //  $_ENV['smarty']->assign('registrationNumber', $registrationValue);
        $_ENV['smarty']->display('questionCount');
    }

}

?>
