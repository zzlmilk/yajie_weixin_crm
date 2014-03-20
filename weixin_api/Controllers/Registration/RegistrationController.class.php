<?php

class RegistrationController  implements registration{

	/**
	 * 用户签到
	 */

	public function  user_registeration(){

		if(!empty($_REQUEST['open_id']) && !empty($_REQUEST['source'])){

			$user = new userModel();

			$userInfo = $user->getUserInfo($_REQUEST['open_id']);

			if(count($userInfo) > 0){

				$user_registeration = new UserRegistrationModel();

				$user_registeration->getUserRegisteration($userInfo['user_id']);
			}

		} else{

			echoErrorCode(105);

		}

	}
}
?>