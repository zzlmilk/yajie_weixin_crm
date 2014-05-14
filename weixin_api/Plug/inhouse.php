<?php

class InhousePlug {


	private  $conn;

	public function test134(){


		echo 1234;
	}


	private function sql_connect(){

		$this->conn = mssql_connect("sqlservername", "S3_INHOUSE", "S3_INHOUSE8472") or die (json_encode($errorArray));

		mssql_select_db('S3_INHOUSE',$this->conn);

	}

	public function cardApi($data){

		/**
 		 * 博卡系统  inhouse  调用 获取用户的手机号码 是否存在 存在 则插入数据库
         */

		if(!empty($data['phone'])){

			$phone = $data['phone'];
		}


		$array = array();

		if(!empty($phone)){

			$errorArray = array();

			$errorArray['res'] = 0;

			$conn = mssql_connect("sqlservername", "S3_INHOUSE", "S3_INHOUSE8472") or die (json_encode($errorArray));

		    mssql_select_db('S3_INHOUSE',$conn);

		    $sql = 'select * from gbm01  where gba08c  like "'.$phone.'" ';

		    $odb_comm=mssql_query($sql);

		    $row=mssql_fetch_array($odb_comm);

		    if(!empty($row)){


		    	$array['res'] = 1;

		    	$array['info'] = $row;

		    } else{

			    $sql = 'select * from gbm01  where gba01c  like "'.$phone.'" ';

			    $odb_comm=mssql_query($sql);

			    $row=mssql_fetch_array($odb_comm);

			    if(!empty($row)){


			    	$array['res'] = 1;

			    	$array['info'] = $row;

		        } else{

		        	$array['res'] = 2;

		       }
		    }
		    return $array;
		}
	}

	/**
	 * 博卡    绑定手机  
	 */

	public function binding($data){


		if(!empty($data['phone']) && !empty($data['open_id'])){

			$array = $this->cardApi($data);

			/**
			 * 获取用户积分
			 */

			$conn = mssql_connect("sqlservername", "S3_INHOUSE", "S3_INHOUSE8472") or die (json_encode($errorArray));

		    mssql_select_db('S3_INHOUSE',$conn);

			$sql = 'select * from gcm12  where gcn01c  like "'.$array['info']['gba01c'].'" ';

			$odb_comm=mssql_query($sql);

			$user=mssql_fetch_array($odb_comm);

			print_r($user);

			die;

			if($array['res'] == 1){

				$result['user_name'] = $array['info']['gba03c'];

				$result['user_phone'] = $array['info']['gba08c'];

				$result['user_card'] = $array['info']['gba01c'];

				$result['birthday'] = strtotime($array['info']['gba17d']);

				$result['user_integration'] = (int)$user['gcn16f'];

				$result['open_id'] = $data['open_id'];

				$user = new UserModel();

                $user->insertUser($result);
			}

		} else{

			echoErrorCode(105);
		}
	}


	public function getUserInfo(){

		/**
		 *  用户表,项目表 ,消费 收银表,消费表,会员积分表
		 */
		$array = array('gbm01','gdm01','ggm01','ggm02','gcm12');

		$this->sql_connect();

		foreach($array as $v){

			

		}
	}

	public function test(){

		$data['phone'] = '13818817651';

		$data['open_id'] = 'ocpOot-COx7UruiqEfag_Lny7dlc1234';

		$this->binding($data);
	}
}


?>