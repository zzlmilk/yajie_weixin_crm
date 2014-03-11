<?php


class UserModel  extends Basic {


	/**
	 * 判断用户是否已经注册
	 */
	public function ableUserRegister($open_id){

		if(!empty($open_id)){

			$UserModel = new UserModel();

			$UserModel->initialize('user_open_id like "'.$open_id.'"');

			if($UserModel->vars_number > 0 ){

				echoErrorCode(20002);

			} else{

				$data['success'] = '1';

				AssemblyJson($data);
			}

		}

	}

	/**
	 * 注册用户  并调用获取微信用户信息接口
	 */

	public function insertUser($data){

		$data['user_name'] = $_REQUEST['user_name'];

		$data['user_phone'] = $_REQUEST['user_phone'];

		$data['sex'] = $_REQUEST['sex'];

		$data['birthday'] = $_REQUEST['birthday'];

		$data['user_open_id'] = $_REQUEST['open_id'];

		$user = new UserModel();

		$user_id = $user->insert($data);

		if($user_id > 0){

			$data['user_id'] = $user_id;

		}
		$userInfo['user'] = arrayToObject($data);

		/**
		 *  获取微信用户
		 */

		$weixinUser = new WeiXinUserModel();

		$weixinArray = $weixinUser->getWeixinUserInfo($_REQUEST['open_id'],$user_id);

		$userInfo['weixin_user'] = arrayToObject($weixinArray);

		AssemblyJson($userInfo);

	}

	/**
	 * 增加用户积分
	 */

	public function addUserIntegration($open_id,$integration){


		if(!empty($open_id) && !empty($integration) && $integration > 0){


			$UserModel = new UserModel();

			$UserModel->initialize('user_open_id like "'.$open_id.'"');

			if($UserModel->vars_number > 0){

				$data['user_integration']= $integration + $UserModel->vars['user_integration'];

				$UserModel->update($data);

				AssemblyJson($data);

			}
		}

	}
	/**
	 * 增加用户金额
	 */

	public function addUserMoney($open_id,$money){


		if(!empty($open_id) && !empty($money) && $money > 0){


			$UserModel = new UserModel();

			$UserModel->initialize('user_open_id like "'.$open_id.'"');

			if($UserModel->vars_number > 0){

				$data['user_money']= $money + $UserModel->vars['user_money'];

				$UserModel->update($data);
				
				AssemblyJson($data);

			}
		}

	}


	/**
	 * 减少用户积分
	 */

	public function reductionUserIntegration($open_id,$integration){


		if(!empty($open_id) && !empty($integration) && $integration > 0){


			$UserModel = new UserModel();

			$UserModel->initialize('user_open_id like "'.$open_id.'"');

			if($UserModel->vars_number > 0){

				$integration_ = $UserModel->vars['user_integration'] - $integration;

				if($integration_ < 0 ){

					$integration_ = 0;

				}

				$data['user_integration'] = $integration_;

				$UserModel->update($data);

				AssemblyJson($data);

			}
		}

	}
	/**
	 * 减少用户金额
	 */

	public function reductionUserMoney($open_id,$money){


		if(!empty($open_id) && !empty($money) && $money > 0){


			$UserModel = new UserModel();

			$UserModel->initialize('user_open_id like "'.$open_id.'"');

			if($UserModel->vars_number > 0){

				$money_ = $UserModel->vars['user_money'] - $money;

				if($money_ < 0 ){

					$money_ = 0;

				}

				$data['user_money'] = $money_;

				$UserModel->update($data);
				
				AssemblyJson($data);

			}
		}

	}
}

?>