<?php


class JiantangPlug{



	/**
	 *  签到增加1积分
	 */
	public function userRegisterationIntegration($data){



		 if (!empty($data['open_id']) && !empty($data['source'])) {

            $user = new userModel();

            $userInfo = $user->getUserInfo($data['open_id']);


            $addIntegration = $user->addUserIntegration($data['open_id'],1);

            /**
             * 脊安堂 
             */

            if (count($userInfo) > 0) {

                $user_registeration = new UserRegistrationModel();

                $user_registeration->getUserRegisteration($userInfo);
            }
        } else {

            echoErrorCode(105);
        }


	}



}
?>