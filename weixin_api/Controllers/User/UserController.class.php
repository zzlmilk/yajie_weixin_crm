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

		if(!empty($_REQUEST['open_id']) && !empty($_REQUEST['integration']) && !empty($_REQUEST['source'])){

			$user = new UserModel();

			$data = $user->addUserIntegration($_REQUEST['open_id'],$_REQUEST['integration']);

			AssemblyJson($data);

		} else{

			echoErrorCode(10003);

		}

	}
	/**
	 * 用户金额 累加  v1
	 */
	public function add_user_money(){

		if(!empty($_REQUEST['open_id']) && !empty($_REQUEST['money'])  && !empty($_REQUEST['source'])){

			$user = new UserModel();

			$data = $user->addUserMoney($_REQUEST['open_id'],$_REQUEST['money']);

			AssemblyJson($data);

		} else{

			echoErrorCode(10004);

		}
	}

	/**
	 * 减少用户积分
	 */
	public function reduction_user_integration(){

		if(!empty($_REQUEST['open_id']) && !empty($_REQUEST['integration'])  && !empty($_REQUEST['source'])){

			$user = new UserModel();

			$data = $user->reductionUserIntegration($_REQUEST['open_id'],$_REQUEST['integration']);

			AssemblyJson($data);

		} else{

			echoErrorCode(10003);

		}

	}
	
	/**
	 * 减少用户金额
	 */
	public function reduction_user_money(){

		if(!empty($_REQUEST['open_id']) && !empty($_REQUEST['money'])  && !empty($_REQUEST['source'])){

			$user = new UserModel();

			$data = $user->reductionUserMoney($_REQUEST['open_id'],$_REQUEST['money']);

			AssemblyJson($data);

		} else{

			echoErrorCode(10004);

		}

	}

	/**
	 * 获取用户资料
	 */

	public function get_info(){

		if(!empty($_REQUEST['source']) && !empty($_REQUEST['open_id'])){

			$user = new userModel();

			$userInfo = $user->getUserInfo($_REQUEST['open_id']);

			if(count($userInfo) > 0){

				$array['user'] = arrayToObject($userInfo,0);

				AssemblyJson($array);

			}

		}

	}


	public function updateInfo($data,$user_id){

		if(is_array($data) && count($data)>0){

			$user = new userModel();

			$user->updateInfo($data,$user_id);

			$array['res'] = 1;


			AssemblyJson($array);
		}


	}

}
?>