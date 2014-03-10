<?php

class userController implements User {

	// 用户列表 界面
	public function userList(){

		$userModel = new userModel();

		$result = $userModel->initialize();


		$_ENV['smarty']->assign('name',1234);

		$_ENV['smarty']->setDirTemplates('user');

		$_ENV['smarty']->display('userList');

	}


	public function addUser($data){

		if(is_array($data) && count($data) > 0){

			$userModel = new userModel();

		    $userModel->insert($data);
		}
	}
	

	public function updateUser($data,$user_id){

		if(is_array($data) && count($data) > 0){

			$userModel = new userModel();

			$userModel->initialize('user_id = '.$user_id);

			if($userModel->vars_number >0){

				 $userModel->update($data);
			}
		}

	}


	public function deleteUser($user_id){


	}

	public function searchUser(){


	}


    /**
	 * 增加用户积分
	 *
	 * user_id  int  用户id
	 *
	 * pointer  int   需要增加的积分
	 */

	public function addPointer($user_id,$integration){

		$user = new userModel();

		$user->initialize('user_id = '.$user_id);

		if($user->vars_number >0){

			$user->vars['user_integration']+=$pointer;

			$user_pointer_record = new userPointerRecordModel();

			$record['user_id'] = $user_id;

			$record['record_type'] = 1;

			$record['fraction'] = $integration;

			$record['source'] = 'crm';

			$record['create_time'] = time();

			$user_pointer_record->insert($record);

		}


	}

	public function addMoney($user_id,$money){


		$user = new userModel();

		$user->initialize('user_id = '.$user_id);

		if($user->vars_number >0){

			$user->vars['user_money']+=$money;

			$user->updateVars();

			$user_pointer_record = new userPointerRecordModel();

			$record['user_id'] = $user_id;

			$record['record_type'] = 2;

			$record['fraction'] = $integration;

			$record['source'] = 'crm';

			$record['create_time'] = time();

			$user_pointer_record->insert($record);

		}
	}


}

?>