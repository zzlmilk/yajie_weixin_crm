<?php

class WeiXinUserModel extends Basic {


	public function getWeixinUserInfo($open_id,$user_id){


		if(!empty($open_id)){

			$weixinApi = new weixinApi();

			$token_json = $weixinApi->getToken('wxe7878882ea37482b','afc26fbaff69f7ce8c3c2a1cabdf0047');

			$token_array = json_decode($token_json,true);

			$weixinUser = new WeiXinUserModel();

			if(is_array($token_array)){

				$token = $token_array['access_token'];

				/**
				 * 获取用户信息
				 */

				$user_json = $weixinApi->getUserInfo($open_id,$token);

				$user_array = json_decode($user_json,true);

				$data['subscribe'] = $user_array['subscribe'];

				$data['openid'] = $user_array['openid'];

				$data['sex'] = $user_array['sex'];

				$data['language'] = $user_array['language'];

				$data['city'] = $user_array['city'];

				$data['province'] = $user_array['province'];

				$data['country'] = $user_array['country'];

				$data['headimgurl'] = $user_array['headimgurl'];

				$data['subscribe_time'] = $user_array['subscribe_time'];


				$weixinUser->insert($data);


				return $data;
			}
		}
	}

}

?>