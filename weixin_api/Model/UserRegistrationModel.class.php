<?php



class UserRegistrationModel  extends Basic {


	public function __construct() {

		$this->child_name = 'user_registration';

		parent::__construct();

    }

    /**
     * 查询用户签到 
     */

    public function getUserRegisteration($user_id){


    	$userRegistration = new UserRegistrationModel();

    	$userRegistration->initialize('user_id = '.$user_id);

    	if($userRegistration->vars_number > 0){

    		/**
    		 * 获取用户签到记录 判断前一天是否存在签到记录
    		 */

    		$userRegistrationRecord = new UserRegistrationRecordModel();

    		$able = $userRegistrationRecord->getUserContinuousRegistration($user_id);

    		if($able == 1){


                $user_able_registeration = $this->userAbleRegisteration($user_id);

                if($user_able_registeration == 0){


                    $day = $userRegistration->vars['day'] + 1;

                     $this->updateUserRegisteration($user_id,$day);

                }

    		}


    	} else{

    		$this->addUserRegisteration($user_id);
    	}


    }


    /**
     * 插入用户连续签到
     */

    public function addUserRegisteration($user_id){

    	if(!empty($user_id) && $user_id > 0){

    		$userRegistration = new UserRegistrationModel();

    		$data['user_id'] = $user_id;

    		$data['day'] = 1;

    		$userRegistration->insert($data);

    	}

    }


    /**
     * 修改用户连续签到
     */

    public function updateUserRegisteration($user_id,$day){

    	if(!empty($user_id) && $user_id > 0  && !empty($day) && $day > 0){

    		$userRegistration = new UserRegistrationModel();

    		$userRegistration->initialize('user_id = '.$user_id);

    		$update['day'] = $day;

            $update['today_able'] = 1;

    		$userRegistration->update($update);

    	}

    }


    /**
     * 判断当天是否签到
     */

    public function userAbleRegisteration($user_id){

         if(!empty($user_id) && $user_id > 0 ){

            $userRegistration = new UserRegistrationModel();

            $userRegistration->initialize('user_id = '.$user_id);

            if($userRegistration->vars['today_able'] == 1){

                return 1;

            } else{

                return 0;

            }

        }

    }

}

?>