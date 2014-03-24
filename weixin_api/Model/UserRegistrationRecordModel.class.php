<?php

class UserRegistrationRecordModel  extends Basic {


	public function __construct() {

		$this->child_name = 'user_registration_record';

		parent::__construct();

    }

    public function addRecord($user_id){

    	if(!empty($user_id) && $user_id > 0){

    		$data['user_id'] = $user_id;

    		$data['record_time'] = time();

            $this->insert($data);

            return $data;
    	}

    }

}

?>