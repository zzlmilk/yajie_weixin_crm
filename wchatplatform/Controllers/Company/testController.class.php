<?php

class TestController extends BaseController {



    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

    }

    public function index(){

    	$this->display();
    }


}

?>