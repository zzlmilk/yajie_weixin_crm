<?php

class userController implements User {

	// 用户列表 界面

	public function userList(){

		$userModel = new userModel();

		$result = $userModel->initialize();

		$_ENV['smarty']->setDirTemplates('user');
<<<<<<< HEAD
		$_ENV['smarty']->assign('name','1234');
		$_ENV['smarty']->display('userList');
                
=======

		$_ENV['smarty']->assign('name','1234');

		$_ENV['smarty']->display('userList');

		$_ENV['smarty']->assign('name','1234');
		$_ENV['smarty']->display('userList');
>>>>>>> 2dd909ceb6b8f0cc81c80d8c940d8b90522b2ee4
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