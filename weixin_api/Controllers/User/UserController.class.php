<?php

class  UserController implements User {

	/**
	 * 添加用户
	 */
	public function add(){


		if(!empty($_REQUEST['open_id']) && !empty($_REQUEST['source'])){

			$weixinApi = new weixinApi();

			$token_json = $weixinApi->getToken('wxe7878882ea37482b','afc26fbaff69f7ce8c3c2a1cabdf0047');

			$token_array = json_decode($token_json,true);

			if(is_array($token_array)){

				$token = $token_array['access_token'];

				/**
				 * 获取用户信息
				 */

				$user_json = $weixinApi->getUserInfo($_REQUEST['open_id'],$token);

				AssemblyJson($user_json);

			}

		} else{

			echoErrorCode(10001);

		}

	}

	/**
	 * 获取单个用户信息  v1
	 */

	public function get_info(){


	}



	/**
	 *  获取全部用户信息  v1
	 *   page   分页  默认为20条数据
	 */

	public function get_info_all(){



	}



	/**
	 * 修改用户信息  v1
	 */

	public function  revise_user(){


	}


	/**
	 * 用户积分 累加  v1
	 */

	public function add_user_integration(){



	}




}
?>