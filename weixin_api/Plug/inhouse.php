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



		

			if($array['res'] == 1){

					/**
			 * 获取用户积分
			 */

			$conn = mssql_connect("sqlservername", "S3_INHOUSE", "S3_INHOUSE8472") or die (json_encode($errorArray));

		    mssql_select_db('S3_INHOUSE',$conn);

			$sql = 'select * from gcm12  where gcn01c  like "'.$array['info']['gba01c'].'" ';

			$odb_comm=mssql_query($sql);

			$user=mssql_fetch_array($odb_comm);
			

				$result['user_name'] = $array['info']['gba03c'];

				$result['user_phone'] = $array['info']['gba08c'];

				$result['user_card'] = $array['info']['gba01c'];

				$result['birthday'] = strtotime($array['info']['gba17d']);

				if(!empty($user)){

					$code = (int)$user['gcn16f'];
				} else{

					$code = 0;
				}

				$result['user_integration'] = $code;

				$result['open_id'] = $data['open_id'];

				$this->insertCardRecord($array['info']['gba01c']);

				$user = new UserModel();

                $user->insertUser($result);

                
			} else{

				echoErrorCode(20006);
			}

		} else{

			echoErrorCode(105);
		}
	}


	public function getUserCardInfo($data){

		if(!empty($data['open_id'])){

			$user = new userModel();

			$userinfo = $user->getUserInfo($data['open_id']);

			if(!empty($userinfo) && count($userinfo) > 0){

				$user_card = $userinfo['user_card'];

				$userCard = new UserCardRecordModel();


				$t=strtotime("-6 month"); 

				$end_time = date('Ymd');

				$begin_time =  date("Ymd",$t);


				if(!empty($_REQUEST['type']) && $_REQUEST['type'] == 1){

					$type ='record_id desc';
				} 

				$info = $userCard->getCardRecord($user_card,$begin_time,$end_time,$type);

				$array['record'] = $info;

			    AssemblyJson($array);

			}
		}
	}

	public function test(){

		$data['phone'] = '13651661062';

		$data['open_id'] = 'ocpOot-COx7UruiqEfag_Lny7dlc1234';

		$this->binding($data);
	}


	public function insertCardRecord($card){


	    header("Content-type:text/html;charset=utf-8");

		$conn = mssql_connect("sqlservername", "S3_INHOUSE", "S3_INHOUSE8472") or die (json_encode($errorArray));

		mssql_select_db('S3_INHOUSE',$conn);

		$sql = 'select * from ggm01  where gga05c  like "'.$card.'" ';

	    $odb_comm=mssql_query($sql);

	    $Num=mssql_num_rows($odb_comm);

	    $key = 0;

	    for($i=0;$i<$Num;$i++){

		  $record=mssql_fetch_array($odb_comm);

		  $sql_detail = "select * from ggm02 where ggb01c like '".$record['gga01c']."' and ggb00c like  '".$record['gga00c']."'";

		  $detail=mssql_query($sql_detail);

		  $detailNumber=mssql_num_rows($detail);


		  for($detail_i = 0; $detail_i < $detailNumber ; $detail_i++ ){

		  	 $detail_list =mssql_fetch_array($detail);

		  	 $record_array['record_order'] = $detail_list['ggb01c'];

		  	 $sql_list = "select * from gdm01 where gda01c like '".$detail_list['ggb03c']."'  ";

		  	 $shangpin=mssql_query($sql_list);

		  	 $shanpin_detail =mssql_fetch_array($shangpin);

		  	 $record_array['record_commodity'] = $shanpin_detail['gda03c'];

		  	 $record_array['user_card'] = $record['gga05c'];

		  	 $record_array['order_time'] = $record['2'];

		  	 $record_array['begin_time'] = $record['3'];

		  	 $record_array['money'] = $detail_list['ggb11f'];


		  	 $userCard = new UserCardRecordModel();

		  	 $userCard->insert($record_array);

		  	 $key++;
		  }
		}
	}
}


?>