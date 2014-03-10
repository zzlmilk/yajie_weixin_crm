<?php

class userController implements User {

	// 用户列表 界面

	public function userList(){

		$userModel = new userModel();


		$result = $userModel->initialize();

		$_ENV['smarty']->setDirTemplates('user');
		$_ENV['smarty']->assign('name','1234');
		$_ENV['smarty']->display('userList');
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