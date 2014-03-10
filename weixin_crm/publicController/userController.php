<?php

class userController implements User {

	// 用户列表 界面

	public function userList(){

		$userModel = new userModel();


		$result = $userModel->initialize();


		assign('name','1234');

		set_page(__FUNCTION__);

		set_dir('user');

		display();

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