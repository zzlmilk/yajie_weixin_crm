<?php

class leftController  {

	// 用户列表 界面

	public function left(){

		$_ENV['smarty']->setDirTemplates('');

		$_ENV['smarty']->display('left');

	}

}

?>