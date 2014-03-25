<?php


class UserModel  extends Basic {


	public function __construct() {

		$this->child_name = 'user';

		parent::__construct();

    }

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
	 * 判断手机是否已经注册
	 */

	public function ableUserPhone($phone){

		$this->clearUp();

		$this->initialize('user_phone = '.$phone);

		if($this->vars_number > 0){

			return 1;

		} else{

			return 0;
		}

	}

	/**
	 * 注册用户  并调用获取微信用户信息接口
	 */

	public function insertUser($val){

	   $result = $this->ableUserPhone($val['user_phone']);

	   if($result == 0){

	   		$data['user_name'] = $val['user_name'];

			$data['user_phone'] = $val['user_phone'];

			$data['sex'] = $val['sex'];

			$data['birthday'] = $val['birthday'];

			$data['user_open_id'] = $val['open_id'];

			$data['address_phone'] = $val['user_phone'];

			$user = new UserModel();

			$user_id = $user->insert($data);

			if($user_id > 0){

				$data['user_id'] = $user_id;

			}

			$userInfo['user'] = arrayToObject($data,0);
			/**
			 *  获取微信用户
			 */

			$weixinUser = new WeiXinUserModel();

			$weixinArray = $weixinUser->getWeixinUserInfo($val['open_id'],$user_id);

			$userInfo['weixin_user'] = arrayToObject($weixinArray,0);

			AssemblyJson($userInfo);

	   } else{

	   		echoErrorCode(20003);

	   }

		

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

				return $data;

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
				
				return $data;

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

				return $data;

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
				
				return $data;

			}
		}

	}

	/**
	 * 获取用户资料
	 */

	public function getUserInfo($open_id){

		$this->addCondition('user_open_id like "'.$open_id.'"',1);

		$this->initialize();

		return $this->vars;

	}

	public function updateInfo($data,$user_id){

		$user = new userModel();

		$user->initialize('user_id = '.$user_id);

		if($user->vars_number >0){

			$user->update($data);

		}
	}

}

?>