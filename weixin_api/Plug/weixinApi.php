<?php

class weixinApi {



	private $tokenUrl = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&';


	private $publicUrl = 'https://api.weixin.qq.com/cgi-bin/';


	private $serverUrl = '';


	public function getToken($appId,$secret){

		$url = $this->tokenUrl.'appid='.$appId.'&secret='.$secret;

		$token_info = transferData($url,'get');


		return $token_info;


	}


	public function getUserInfo($open_id,$token){


		$url = $this->publicUrl.'user/info?access_token='.$token.'&openid='.$open_id.'&lang=zg_CN';

		$user_info = transferData($url,'get');

		return $user_info;

	}


	public function  getuserSub(){


		
	}

	public function sendCustom($open_id){

		$url = $this->publicUrl.'message/custom/send?access_token=';

	}


}




?>