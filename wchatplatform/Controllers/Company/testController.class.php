<?php

class TestController extends BaseController {


	public function register(){

		$this->assign('open_id',$_REQUEST['open_id']);
		
		$this->display();
	}

	public function index(){

		//$this->assign('open_id',$_REQUEST['open_id']);

		$this->display();
	}		

	public function submitRegister(){

		$data = array();
		//$data['open_id'] = 'ocpOotwOr44N8_zpyG7LttDgZscw';
		$data['open_id'] = $_POST['open_id'];
		$data['source'] = 'company';
		$data['user_name'] = $_POST['userName'];
		$data['sex'] = $_POST['gender'];
		$data['user_phone'] = $_POST['phoneNumber'];
		// $data['password'] = $_POST['password'];
		$data['birthday'] = strtotime($_POST['year'].$_POST['month'].$_POST['date']);

		//print_r($data);
		//transferData(APIURL.'/user/add','post',$data);

		$resultRename = transferData(APIURL.'/user/able_user/','post',$data);
		$res = json_decode($resultRename,true);

		if($res['success'] == 1){
			$resultRegister = transferData(APIURL.'/user/add','post',$data);
			$resultRegister = json_decode($resultRegister,true);

			if($resultRegister['user']['user_id'] > 0){

				// 注册成功后跳转会员中心
			}

		}else{

			echo "error";

		}


		
	}
}



?>