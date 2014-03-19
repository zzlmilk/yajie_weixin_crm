<?php



class UserRegistrationRecordModel  extends Basic {


	public function __construct() {

		$this->child_name = 'user_registration_record';

		parent::__construct();

    }


    public function getUserContinuousRegistration($user_id){

    	$pre_time =  mktime(0,0,0) - 86400;

    	$record = new UserRegistrationRecordModel();

    	$record->initialize('user_id = '.$user_id.' and registration_time = '.$pre_time);

    	if($record->vars_number > 0){

    		return 1;

    	} else{

    		return 0;

    	}

    }

}


?>