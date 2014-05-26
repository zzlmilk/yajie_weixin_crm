<?php

class InhousePlug {


	private  $conn;

	


	private function sql_connect(){

		$this->conn = mssql_connect("sqlservername", "S3_INHOUSE", "S3_INHOUSE8472") or die (json_encode($errorArray));

		mssql_select_db('S3_INHOUSE',$this->conn);

	}

	/**
     * 获取用户资料 博卡   需动态获取 用户积分信息
     */
    public function get_info() {

        if (!empty($_REQUEST['source']) && !empty($_REQUEST['open_id'])) {


            $user = new userModel();

            $userInfo = $user->getUserInfo($_REQUEST['open_id']);

            if (count($userInfo) > 0) {

               
                $this->updateUserPointer($_REQUEST['open_id']);
    

                $weixinUser = new WeiXinUserModel();

                $weixinUserInfo = $weixinUser->getWeiXinInfo($userInfo['user_open_id'], $userInfo['user_id']);

                $array['user'] = arrayToObject($userInfo, 0);

                $array['weixin_user'] = arrayToObject($weixinUserInfo, 0);

                AssemblyJson($array);
            }
        } else {

            echoErrorCode(105);
        }
    }


    /**
     * 获取用户数据
     */


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

		    $sql = 'select * from gcm12  where gcn04c  like "'.$phone.'" and gcn00c like "002"';

		    //$sql =  'select * from gbm01 where '

		    $odb_comm=mssql_query($sql);

		    $row=mssql_fetch_array($odb_comm);

		    if(!empty($row)){


		    	$array['res'] = 1;

		    	$array['info'] = $row;

		    } else{

			    $sql = 'select * from gcm12  where gcn01c  like "'.$phone.'" and gcn00c like "002" ';

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

			/**
			 * 从会员开卡记录中 
			 */

			$userInfo = $this->getUserCard($data['phone']);

		    if($userInfo['res'] == 1){

		    	$integration = $this->getUserInter($userInfo);
				
				$result['user_name'] = $userInfo['info']['gba03c'];

				$result['user_phone'] = $userInfo['info']['gba08c'];

				$result['user_card'] = $userInfo['info']['gba01c'];

				$result['birthday'] = strtotime($userInfo['info']['gba17d']);

				$result['user_integration'] = $integration ;

				$result['open_id'] = $data['open_id'];

				$result['company_code'] = $userInfo['info']['gba00c'];

				$this->insertCardRecord($userInfo['info']['gba01c']);

				$user = new UserModel();

	            $user->insertUser($result);

	                
			} else{

				echoErrorCode(20006);
			}

		} else{

			echoErrorCode(105);
		}
	}

	/**
	 * 获取用户  近5条 消费记录
	 */

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


	/**
	 * 获取用户积分信息
	 */


	public function getUserInter($userInfo){

		if(!empty($userInfo)){

			$this->sql_connect();

			$sql = 'select * from gcm12  where gcn04c  like "'.$userInfo['info']['gba08c'].'" and gcn00c like "'.$userInfo['info']['gba00c'].'"';

		    //$sql =  'select * from gbm01 where '

		    $odb_comm=mssql_query($sql);

		    $result=mssql_fetch_array($odb_comm);

		    if(!empty($result['gcn16f'])){

		    	return $result['gcn16f'];

		    } else{

		    	return 0;
		    }
		}

	}


	/**
	 * 获取用户卡号  通过gbm01 表  如查询出多条数据  则获取ggm01中  订单开始时间 最大值  
	 */

	public function getUserCard($phone){

		header("Content-type:text/html;charset=utf-8");

		$errorArray = array();

	    $errorArray['res'] = 0;

	    if(!empty($phone)){

	    	$this->sql_connect();

	    	$searchUserSql = 'select * from gbm01 where gba08c like "'.$phone.'" ';

	    	$odb_comm=mssql_query($searchUserSql);

		    $user_number = mssql_num_rows($odb_comm);

		    if($user_number > 0){

		    	$tempArray = array();

		    	$userArray = array();

	    		for($user_var = 0; $user_var < $user_number ; $user_var++ ){

	    			 $user_list =mssql_fetch_array($odb_comm);

	    			 $userArray[$user_list['gba01c'].'_'.$user_list['gba00c']] = $user_list;

	    			 $sql = 'select max(gga02d) from ggm01  where   gga00c like "'.$user_list['gba00c'].'"  and  gga09c  like "'.$user_list['gba01c'].'"';

	    			 $result=mssql_query($sql);

		             $user_order_list = mssql_num_rows($result);

		             for($order_var = 0; $order_var < $user_order_list ; $order_var++ ){

		             	 $order_list =mssql_fetch_array($result);

		             	 if(!empty($order_list[0])){

		             	 	$tempArray[$order_list[0]] = $user_list['gba01c'].'_'.$user_list['gba00c'];
		                  }

		             }
				}

		    }
		    $new_array = array_flip($tempArray);

		    $minArray = max($new_array);

		    $user_key = $tempArray[$minArray];


		    if(!empty($userArray[$user_key])){

		    	$array['res'] = 1;

			    $array['info'] = $userArray[$user_key];

			    /**
			     * 
			     */
			    unset($userArray[$user_key]);

			    foreach($userArray  as $v){

			     	$data['user_name'] = $v['gba03c'];

					$data['user_phone'] = $v['gba08c'];

					$data['user_card'] = $v['gba01c'];

					$data['birthday'] = strtotime($v['gba17d']);

					$data['company_code'] = $v['gba00c'];

					$AbormalUser = new AbnormalUserModel();

					$AbormalUser->insert($data);

			     }

		    } else{

		    	$array['res'] = 2;
		    }

	    }  else{


	    }

	    return $array;


	}

	public function test(){

		$data['phone'] = '13817230818';

		//$data['phone'] = '13761820013';

		$userInfo = $this->getUserCard($data['phone']);

	    if($userInfo['res'] == 1){


	    	$integration = $this->getUserInter($userInfo);
			
			$result['user_name'] = $userInfo['info']['gba03c'];

			$result['user_phone'] = $userInfo['info']['gba08c'];

			$result['user_card'] = $userInfo['info']['gba01c'];

			$result['birthday'] = strtotime($userInfo['info']['gba17d']);

			$result['user_integration'] = $integration ;

			$result['open_id'] = $data['open_id'];

			$result['company_code'] = $userInfo['info']['gba00c'];

			$this->insertCardRecord($userInfo['info']['gba01c']);

			$user = new UserModel();

            $user->insertUser($result);

                
		} else{

			echoErrorCode(20006);
		}
		
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


		  	 //var_dump($record_array);

		  	 $userCard = new UserCardRecordModel();

		  	 $userCard->insert($record_array);

		  }
		}
	}
	/**
	 *   兑换  验证码
	 */

	public function  create($data){

		if(!empty($data['open_id']) && !empty($data['exchange_id'])){



       		$user = new userModel();

            $userInfo = $user->getUserInfo($data['open_id']);


            if (count($userInfo) > 0) {

                $result['user_id'] = $userInfo['user_id'];

                $result['exchange_id'] = $data['exchange_id'];

                $exchange_code = new ExchangeCodeModel();

                $guoqishijian = time() - 600000;

			    $array = $exchange_code->create($result);

                AssemblyJson($array);
            }
			
		}

	}

	/**
	 * 同步用户积分
	 */

	public function updateUserPointer($open_id){

		if(!empty($open_id)){


       		$user = new userModel();

            $userInfo = $user->getUserInfo($open_id);

            if(count($userInfo) > 0){
            	
				$conn = mssql_connect("sqlservername", "S3_INHOUSE", "S3_INHOUSE8472") or die (json_encode($errorArray));

				mssql_select_db('S3_INHOUSE',$conn);

			    $sql = 'select * from gcm12  where gcn04c  like "'.$userInfo['user_phone'].'" and gcn00c like "'.$userInfo['company_code'].'"';

			    $odb_comm=mssql_query($sql);

			     $row=mssql_fetch_array($odb_comm);

			     if(!empty($row)){

				    if(!empty($row['gcn16f'])){

						$code = (int)$row['gcn16f'];

					} else{

						$code = 0;

					}
					
			     	$data['user_integration'] = $code;

			     	$user->updateInfo($data,$userInfo['user_id']);
			     }
            }
		}
	}
}


?>