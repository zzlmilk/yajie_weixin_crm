<?php

class userController implements User {

	// 用户列表 界面

	public function userList(){

		$userModel = new userModel();


		$result = $userModel->initialize();


		$_ENV['smary']->assign('name','1234');

		$_ENV['smary']->set_page(__FUNCTION__);

		$_ENV['smary']->set_dir('user');

		$_ENV['smary']->display();

	}


	public function addUser(){

		

	}
	

	public function updateUser(){


	}


	public function deleteUser(){


	}

	public function searchUser(){


	}

}

?>