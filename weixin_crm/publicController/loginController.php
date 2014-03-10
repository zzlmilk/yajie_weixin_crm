<?php

class loginController  {

	// 用户列表 界面

	public function login(){



		$_ENV['smarty']->setDirTemplates('');

		$_ENV['smarty']->display('login');

	}

}

?>