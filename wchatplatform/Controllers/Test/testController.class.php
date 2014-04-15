<?php

class TestController extends BaseController {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");
    }


    public function index() {

//$this->assign('open_id',$_REQUEST['open_id']);

        U('company/user/register',array('open_id'=>'13231234'),1);


        die;

        $this->display();
    }

   

}

?>