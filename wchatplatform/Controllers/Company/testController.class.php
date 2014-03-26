<?php

class TestController extends BaseController {

    public $userOpenId;

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");


        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        }

       

        $this->assign('open_id', $this->userOpenId);
    }


    public function index() {

        $this->display();
    }


}

?>