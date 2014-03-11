<?php



class TestController extends BaseController {


	public function register(){


		$this->display();
	}

	public function index(){

		$this->assign('open_id',$_REQUEST['open_id']);

		$this->display();

	}

}



?>