<?php

class  UserController implements User {

	/**
	 * 添加用户
	 */
	public function add(){

		if(!empty($_REQUEST['open_id']) && !empty($_REQUEST['source'])){

			if(!empty($_REQUEST['user_name']) && !empty($_REQUEST['user_phone']) && !empty($_REQUEST['sex']) && !empty($_REQUEST['birthday'])){

				$user = new UserModel();

				$user->insertUser($_REQUEST);

			} else{

				echoErrorCode(20001);
			}

		} else{

			echoErrorCode(10001);

		}

	}
	/**
	 * 判断用户是否已被注册
	 */

	public function able_user(){

		if(!empty($_REQUEST['open_id'])){

			$user = new UserModel();

			$user->ableUserRegister($_REQUEST['open_id']);

		} else{

			echoErrorCode(10002);
		}

	}
	/**
	 * 用户积分 累加  v1
	 */

	public function add_user_integration(){

		if(!empty($_REQUEST['open_id']) && !empty($_REQUEST['integration'])){

			$user = new UserModel();

			$user->addUserIntegration($_REQUEST['open_id'],$_REQUEST['integration']);

		}

	}
	/**
	 * 用户金额 累加  v1
	 */
	public function add_user_money(){

		if(!empty($_REQUEST['open_id']) && !empty($_REQUEST['money'])){

			$user = new UserModel();

			$user->addUserMoney($_REQUEST['open_id'],$_REQUEST['money']);

		}

	}

	/**
	 * 减少用户积分
	 */
	public function reduction_user_integration(){

		if(!empty($_REQUEST['open_id']) && !empty($_REQUEST['integration'])){

			$user = new UserModel();

			$user->reductionUserIntegration($_REQUEST['open_id'],$_REQUEST['integration']);

		}

	}
	/**
	 * 减少用户金额
	 */
	public function reduction_user_money(){

		if(!empty($_REQUEST['open_id']) && !empty($_REQUEST['money'])){

			$user = new UserModel();

			$user->reductionUserMoney($_REQUEST['open_id'],$_REQUEST['money']);

		}

	}

}
?>