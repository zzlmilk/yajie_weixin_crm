<?php

class userController implements User {

	// 用户列表 界面

	public function userList(){

		$userModel = new userModel();

		 $userModel->initialize();
                $result =$userModel->vars_all;
                var_dump($result);
		$_ENV['smarty']->setDirTemplates('user');
		$_ENV['smarty']->assign('userInfo',$result);
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