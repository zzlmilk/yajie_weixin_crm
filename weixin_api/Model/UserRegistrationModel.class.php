<?php

class UserRegistrationModel  extends Basic {


	public function __construct() {

		$this->child_name = 'user_registration';

		parent::__construct();

    }

    /**
     * 查询用户签到 
     */

    public function getUserRegisteration($user_info){


    	$userRegistration = new UserRegistrationModel();

    	$userRegistration->initialize('user_id = '.$user_info['user_id']);

    	if($userRegistration->vars_number > 0){

    		/**
    		 * 判断用户是否连续签到
    		 */

    		$able = $this->getUserContinuousRegistration($user_info['user_id']);

    		if($able == 1){   

                /**
                 * 判断用户是否今天领取过奖励
                 */

                $user_able_registeration = $this->userAbleRegisteration($user_info['user_id']);

                if($user_able_registeration == 0){

                    $day = $userRegistration->vars['day'] + 1;

                    $this->updateUserRegisteration($user_info['user_id'],$day);

                    $registrationAward = new RegistrationDayModel();

                    $awardArray = $registrationAward->getAward($day);

                    $userModel = new userModel();

                    $userObject = $userModel->addUserIntegration($user_info['user_open_id'],$awardArray['award']);

                    /**
                     *  插入用户记录
                     */

                    $userRecord = new userPointerRecordModel();

                    $recordArray = $userRecord->addRecord($user_info['user_id'], 1, $awardArray['award'],'gift');

                    $array['user'] = arrayToObject($userObject,0);

                    $array['record'] = arrayToObject($recordArray,0);

                    $array['res'] = '0';

                    AssemblyJson($array);

                } else{

                    echoErrorCode(50001);
                }

    		} else{

                /**
                 * 用户 不符合连续登录 规则  将连续登录修改为0
                 */

                $this->updateUserRegisteration($user_info['user_id'],0);

                $array['res'] = '0';

                AssemblyJson($array);

            }


    	} else{

    		$this->addUserRegisteration($user_info['user_id']);

            $array['res'] = '0';

            AssemblyJson($array);
    	}


    }


    /**
     * 插入用户连续签到
     */

    public function addUserRegisteration($user_id){

    	if(!empty($user_id) && $user_id > 0){

    		$userRegistration = new UserRegistrationModel();

    		$data['user_id'] = $user_id;

    		$data['day'] = 0;

            $data['today_able'] = 1;

            $data['registration_time'] = mktime(0,0,0);

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

            $update['registration_time'] = mktime(0,0,0);

    		$userRegistration->update($update);


            $record = new UserRegistrationRecordModel();

            $record->addRecord($user_id);

    	}

    }


    /**
     * 判断当天是否签到
     */

    public function userAbleRegisteration($user_id){

         if(!empty($user_id) && $user_id > 0 ){

            $today = mktime(0,0,0);

            $userRegistration = new UserRegistrationModel();

            $userRegistration->initialize('user_id = '.$user_id.' and registration_time = '.$today);

            if($userRegistration->vars_number > 0){

                return 1;

            } else{

                return 0;

            }

        }

    }

    /**
     * 判断用户是否符合连续签到
     */

     public function getUserContinuousRegistration($user_id){

        $today_time = mktime(0,0,0);

        $userRecord = new UserRegistrationModel();

        $userRecord->initialize('user_id = '.$user_id);

        if($userRecord->vars_number > 0){

            $registration_time = $userRecord->vars['registration_time'];

            if($today_time - $registration_time = 86400){

                return 1;

            } else{

                return 0;
            }

        }

    }

    /**
     * 
     */

    public function getUserRegisterationInfo($userInfo){

        $userRecord = new UserRegistrationModel();

        $userRecord->initialize('user_id = '.$userInfo['user_id']);

        if($userRecord->vars_number > 0){


            return $userRecord->vars;

        } else{

            echoErrorCode('50002');
        }


    }

}

?>