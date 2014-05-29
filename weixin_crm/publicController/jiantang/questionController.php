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
        $question = new questionModel();
        $questionRecord = new questionStatisticsModel();
        $recordArray = array();
        $question->initialize();
        $questionValue = $question->vars_all;
        
        foreach ($questionValue as $k => $value) {
            $questionRecord->addCondition("question_id ='" . $value['question_id'] . "'", 1);
            $questionRecord->initialize();
            $querecordValue = $questionRecord->vars;
            array_push($recordArray, $querecordValue);
        }
        $_ENV['smarty']->assign('record', $recordArray);
        $_ENV['smarty']->assign('questionValue', $questionValue);
        $_ENV['smarty']->display('questionCount');
    }

}

?>
