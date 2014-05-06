<?php

class remindController implements SMS {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        $_ENV['smarty']->setDirTemplates('remind');
    }

    public function remind() {
     
        $_ENV['smarty']->display('remind');
    }

    public function sendRemind(){

    	print_r($_POST);

    }

}

?>
