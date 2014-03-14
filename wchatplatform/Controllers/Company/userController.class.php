<?php


class UserController extends BaseController {



	public function __construct() {

        header("Content-type:text/html;charset=utf-8");


        $this->assign('open_id',$_REQUEST['open_id']);
    }


    public function  userCenter(){


    	$this->display();

    }

    public function userInfo(){



    	$this->display();

    }


}




?>