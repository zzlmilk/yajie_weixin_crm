<?php



class TestController extends BaseController {


	public function register(){


		$this->display();
	}

	public function index(){

		$this->assign('open_id',$_REQUEST['open_id']);

		$this->display();

	}		
	
	public function submitRegister(){

		// $data = array();
		// $data['open_id'] = 'openId';
		// $data['source'] = 'company';
		// $data['user_name'] = $_POST['userName'];
		// $data['sex'] = $_POST['gender'];
		// $data['user_phone'] = $_POST['phoneNumber'];
		// // $data['password'] = $_POST['password'];
		// $data['birthday'] = strtotime($_POST['year'].$_POST['month'].$_POST['date']);

		//print_r($data);
		//transferData(APIURL.'/user/add','post',$data);

		$result = transferData(APIURL.'/user/able_user/?open_id=dasdasd','get');
		print_r($result);
		
	}
}



?>